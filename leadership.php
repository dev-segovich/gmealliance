<?php
$active = 'leadership';
$page_title = 'Leadership';
$page_description = 'Experienced builders and operators leading GME Alliance across infrastructure, mobility, development, industrial supply, and partnerships.';
include __DIR__ . '/partials/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a> &nbsp;/&nbsp; Leadership</div>
    <h1>Experienced builders and operators.</h1>
    <p class="lead">Leadership with execution experience across infrastructure, telecommunications,
      mobility, development, and industrial supply.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="leader-grid">
      <?php foreach (LEADERS as $l): ?>
        <article class="leader-card reveal">
          <div class="photo"><?= gme_icon('user') ?></div>
          <div class="body">
            <h3><?= htmlspecialchars($l['name']) ?></h3>
            <div class="role"><?= htmlspecialchars($l['role']) ?></div>
            <p><?= htmlspecialchars($l['bio']) ?></p>
            <a class="linkedin" href="<?= htmlspecialchars($l['linkedin']) ?>"<?= $l['linkedin'] !== '#' ? ' target="_blank" rel="noopener"' : '' ?>>
              <?= gme_icon('linkedin') ?> LinkedIn
            </a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
    <p class="form-note" style="margin-top:28px;">Leadership profiles are being finalized.
      Names, biographies, photography, and LinkedIn profiles will be published here.</p>
  </div>
</section>

<section class="section section--alt">
  <div class="container">
    <div class="cta-band reveal">
      <div>
        <h2>Talk to the team.</h2>
        <p>For partnership, infrastructure, vendor, or media inquiries, our team is ready to connect.</p>
      </div>
      <div class="btn-row">
        <a class="btn btn-light" href="contact.php">Contact Us</a>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
