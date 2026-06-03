<?php
require_once __DIR__ . '/data.php';

/* Per-page variables (set before including this file) ----------------------*/
$page_title       = $page_title       ?? SITE['name'];
$page_description = $page_description ?? 'GME Alliance is a family-backed operating and development platform building, operating, and growing businesses across infrastructure, mobility, industrial supply, telecommunications, and real estate throughout the Americas.';
$active           = $active           ?? '';
$canonical        = $canonical        ?? SITE['base_url'] . '/' . ($active === 'home' ? '' : (NAV[$active][1] ?? ''));
$full_title       = $active === 'home' ? SITE['name'] . ' — ' . SITE['tagline'] : $page_title . ' — ' . SITE['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($full_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_description) ?>" />
  <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>" />
  <meta name="theme-color" content="#0d2236" />

  <!-- Open Graph / social -->
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="<?= htmlspecialchars(SITE['name']) ?>" />
  <meta property="og:title" content="<?= htmlspecialchars($full_title) ?>" />
  <meta property="og:description" content="<?= htmlspecialchars($page_description) ?>" />
  <meta property="og:url" content="<?= htmlspecialchars($canonical) ?>" />
  <meta name="twitter:card" content="summary_large_image" />

  <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="images/FAVICON.png" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="assets/css/styles.css" />

<?php if ($active === 'home'): ?>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "GME Alliance",
    "url": "<?= SITE['base_url'] ?>",
    "description": "Family-backed operating and development platform building, operating, and growing businesses across infrastructure, mobility, industrial supply, telecommunications, and real estate throughout the Americas.",
    "email": "<?= SITE['email'] ?>",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "924 NW 1st St",
      "addressLocality": "Fort Lauderdale",
      "addressRegion": "FL",
      "postalCode": "33311",
      "addressCountry": "US"
    }
  }
  </script>
<?php endif; ?>
</head>
<body<?= isset($body_class) ? ' class="' . htmlspecialchars($body_class) . '"' : '' ?>>
  <a class="skip-link" href="#main">Skip to content</a>

  <header class="site-header">
    <div class="container site-header__inner">
      <a class="brand" href="index.php" aria-label="GME Alliance home">
        <img src="images/Logo GME alliance.png" alt="GME Alliance" />
      </a>

      <nav class="primary-nav" aria-label="Primary">
        <?php foreach (NAV as $key => [$label, $href]): ?>
          <a href="<?= $href ?>"<?= $active === $key ? ' class="is-active" aria-current="page"' : '' ?>><?= $label ?></a>
        <?php endforeach; ?>
      </nav>

      <div class="header-actions">
        <a class="btn btn-primary" href="contact.php?type=partnership">Strategic Partnerships</a>
        <button class="nav-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="mobileNav">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </header>

  <div class="mobile-nav" id="mobileNav" aria-hidden="true">
    <div class="mobile-nav__top">
      <a class="brand" href="index.php"><img src="images/Logo GME alliance.png" alt="GME Alliance" style="height:34px;filter:brightness(0) invert(1);" /></a>
      <button class="mobile-nav__close" aria-label="Close menu">&times;</button>
    </div>
    <nav aria-label="Mobile">
      <?php foreach (NAV as $key => [$label, $href]): ?>
        <a class="m-link" href="<?= $href ?>"><?= $label ?></a>
      <?php endforeach; ?>
    </nav>
    <a class="btn btn-light" href="contact.php?type=partnership">Strategic Partnerships</a>
  </div>

  <main id="main">
