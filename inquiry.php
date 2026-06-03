<?php
/**
 * GME Alliance — inquiry handler.
 * Handles Partnership / Vendor / Infrastructure / General contact submissions.
 * Responds with JSON for async (fetch) requests, or redirects back for no-JS.
 *
 * Configure the recipient(s) below. Uses PHP mail(); for production, point this
 * at an SMTP relay or transactional email service (see README).
 */
declare(strict_types=1);

const INQUIRY_RECIPIENT = 'info@gmealliance.com';   // TODO: confirm / route per type
const INQUIRY_FROM      = 'no-reply@gmealliance.com';

$isAjax = (
    (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'fetch')
    || (isset($_SERVER['HTTP_ACCEPT']) && str_contains($_SERVER['HTTP_ACCEPT'], 'application/json'))
);

/** Respond and exit. */
function respond(bool $ok, string $message): void {
    global $isAjax;
    if ($isAjax) {
        header('Content-Type: application/json');
        echo json_encode(['ok' => $ok, 'message' => $message]);
    } else {
        if ($ok) {
            header('Location: contact.php?sent=1');
        } else {
            header('Location: contact.php?error=1');
        }
    }
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(false, 'Invalid request method.');
}

/* ---- Honeypot: silently accept bots without sending mail ----------------- */
if (!empty($_POST['company_website'] ?? '')) {
    respond(true, 'Thank you. Your message has been received.');
}

/* ---- Collect + sanitize -------------------------------------------------- */
$clean = static fn(string $k, int $max = 2000): string =>
    trim(substr(strip_tags((string)($_POST[$k] ?? '')), 0, $max));

$typeMap = [
    'general'        => 'General inquiry',
    'partnership'    => 'Strategic partnership',
    'vendor'         => 'Vendor / supplier',
    'infrastructure' => 'Infrastructure / utility',
];
$typeKey = strtolower($clean('inquiry_type', 40));
$type    = $typeMap[$typeKey] ?? 'General inquiry';

$name    = $clean('name', 120);
$org     = $clean('organization', 160);
$emailIn = trim((string)($_POST['email'] ?? ''));
$email   = filter_var($emailIn, FILTER_SANITIZE_EMAIL);
$phone   = $clean('phone', 60);
$message = $clean('message', 5000);

/* ---- Validate ------------------------------------------------------------ */
$errors = [];
if ($name === '')                                          $errors[] = 'name';
if (!filter_var($email, FILTER_VALIDATE_EMAIL))            $errors[] = 'email';
if ($message === '')                                       $errors[] = 'message';

if ($errors) {
    respond(false, 'Please complete the required fields with a valid email address.');
}

/* ---- Build + send -------------------------------------------------------- */
$subject = sprintf('[%s] inquiry from %s', $type, $name);
$body  = "New inquiry from the GME Alliance website\n";
$body .= "----------------------------------------\n";
$body .= "Type:         {$type}\n";
$body .= "Name:         {$name}\n";
$body .= "Organization: " . ($org !== '' ? $org : '—') . "\n";
$body .= "Email:        {$email}\n";
$body .= "Phone:        " . ($phone !== '' ? $phone : '—') . "\n";
$body .= "----------------------------------------\n\n";
$body .= $message . "\n";

$headers  = 'From: GME Alliance Website <' . INQUIRY_FROM . ">\r\n";
$headers .= 'Reply-To: ' . $name . ' <' . $email . ">\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$sent = @mail(INQUIRY_RECIPIENT, $subject, $body, $headers);

if ($sent) {
    respond(true, 'Thank you. Your message has been received — we\'ll be in touch shortly.');
}

/* mail() unavailable/misconfigured — log so nothing is lost, still acknowledge gently */
@error_log('[GME inquiry][' . date('c') . "] {$type} | {$name} <{$email}> | {$org}\n{$message}\n", 3, __DIR__ . '/inquiries.log');
respond(false, 'We received your details but email delivery is being finalized. Please also reach us at ' . INQUIRY_RECIPIENT . '.');
