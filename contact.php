<?php
$active = 'contact';
$page_title = 'Contact';
$page_description = 'Contact GME Alliance for strategic partnerships, vendor relationships, infrastructure discussions, and general inquiries.';
include __DIR__ . '/partials/header.php';
$sent = isset($_GET['sent']);
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a> &nbsp;/&nbsp; Contact</div>
    <h1>Let's start a conversation.</h1>
    <p class="lead">Partnership, vendor, and infrastructure inquiries — or a general note.
      Tell us a little about your organization and how we can help.</p>
  </div>
</section>

<section class="section">
  <div class="container contact-layout">
    <div class="form-card reveal">
      <form action="inquiry.php" method="post" data-async data-email="<?= SITE['email'] ?>" novalidate>
        <?php if ($sent): ?>
          <div class="form-status show ok">Thank you. Your message has been received — we'll be in touch shortly.</div>
        <?php endif; ?>

        <div class="field">
          <label for="inquiry-type">Inquiry type <span class="req">*</span></label>
          <select id="inquiry-type" name="inquiry_type" required>
            <option value="general">General inquiry</option>
            <option value="partnership">Strategic partnership</option>
            <option value="vendor">Vendor / supplier</option>
            <option value="infrastructure">Infrastructure / utility</option>
          </select>
        </div>

        <div class="field-row">
          <div class="field">
            <label for="name">Full name <span class="req">*</span></label>
            <input type="text" id="name" name="name" autocomplete="name" required />
          </div>
          <div class="field">
            <label for="organization">Organization</label>
            <input type="text" id="organization" name="organization" autocomplete="organization" />
          </div>
        </div>

        <div class="field-row">
          <div class="field">
            <label for="email">Email <span class="req">*</span></label>
            <input type="email" id="email" name="email" autocomplete="email" required />
          </div>
          <div class="field">
            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" autocomplete="tel" />
          </div>
        </div>

        <div class="field">
          <label for="message">How can we help? <span class="req">*</span></label>
          <textarea id="message" name="message" required></textarea>
        </div>

        <!-- honeypot: hidden from users, catches bots -->
        <div class="hp" aria-hidden="true">
          <label>Leave this field empty<input type="text" name="company_website" tabindex="-1" autocomplete="off" /></label>
        </div>

        <button type="submit" class="btn btn-primary">Send message <?= gme_icon('arrow') ?></button>
        <div class="form-status" role="status" aria-live="polite"></div>
        <p class="form-note">Prefer email? Reach us directly at
          <a href="mailto:<?= SITE['email'] ?>"><?= SITE['email'] ?></a>.</p>
      </form>
    </div>

    <aside class="contact-aside reveal d1">
      <div class="info-block">
        <h4>Headquarters</h4>
        <?php foreach (SITE['address'] as $line): ?>
          <p style="margin-bottom:2px;"><?= htmlspecialchars($line) ?></p>
        <?php endforeach; ?>
      </div>
      <div class="info-block">
        <h4>Email</h4>
        <p><a href="mailto:<?= SITE['email'] ?>"><?= SITE['email'] ?></a></p>
      </div>
      <div class="info-block">
        <h4>Inquiry routing</h4>
        <p><strong>Partnerships</strong> — utilities, telecom, OEMs, enterprise</p>
        <p><strong>Vendors</strong> — suppliers &amp; procurement</p>
        <p><strong>Infrastructure</strong> — power, fiber, sites, connectivity</p>
      </div>
      <div class="info-block" style="border-bottom:none;">
        <h4>Connect</h4>
        <div class="ic-row">
          <a href="<?= SITE['linkedin'] ?>"<?= SITE['linkedin'] !== '#' ? ' target="_blank" rel="noopener"' : '' ?> aria-label="LinkedIn"><?= gme_icon('linkedin') ?></a>
          <a href="mailto:<?= SITE['email'] ?>" aria-label="Email"><?= gme_icon('mail') ?></a>
        </div>
      </div>
    </aside>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
