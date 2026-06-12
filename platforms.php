<?php
$active = 'platforms';
$page_title = 'Platforms';
$page_description = 'GME Alliance operates across four platforms: Infrastructure & Connectivity, Mobility & IoT Technologies, Development & Construction, and Industrial & Safety Supply.';
include __DIR__ . '/partials/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a> &nbsp;/&nbsp; Platforms</div>
    <h1>Four platforms built for infrastructure and industry.</h1>
    <p class="lead">Each platform is anchored by operating companies with real capability,
      partnerships, and customers — coordinated under one long-term strategy.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <?php $n = 0; foreach (PLATFORMS as $key => $p): $n++; $mediaRight = $n % 2 === 0; ?>
      <div class="split <?= $mediaRight ? 'split--media-right' : '' ?> reveal" style="margin-bottom:<?= $n < count(PLATFORMS) ? '72px' : '0' ?>;" id="<?= $key ?>">
        <div class="prose">
          <span class="eyebrow"><?= sprintf('Platform %02d', $n) ?></span>
          <h2><?= htmlspecialchars($p['title']) ?></h2>
          <p style="font-family:var(--font-head);font-weight:600;color:var(--blue-600);margin-bottom:18px;"><?= htmlspecialchars($p['companies']) ?></p>
          <p><?= htmlspecialchars($p['summary']) ?></p>
          <h3>Focus areas</h3>
          <ul class="bullets">
            <?php foreach ($p['focus'] as $f): ?>
              <li><?= htmlspecialchars($f) ?></li>
            <?php endforeach; ?>
          </ul>
          <a class="btn btn-outline" href="operating-companies.php">See the companies <?= gme_icon('arrow') ?></a>
        </div>
        <div class="media">
          <?php if (!empty($p['image'])): ?>
            <div class="media-photo"><img src="<?= $p['image'] ?>" alt="<?= htmlspecialchars($p['title']) ?>" loading="lazy" /></div>
          <?php else: ?>
            <div class="media-ph" style="min-height:340px;"><span><?= htmlspecialchars($p['title']) ?><br>imagery</span></div>
          <?php endif; ?>
          <div class="platform-card__icon" style="position:relative;margin-top:-32px;margin-left:24px;box-shadow:var(--shadow-md);"><?= gme_icon($p['icon']) ?></div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="section section--dark">
  <div class="container">
    <div class="cta-band reveal" style="background:transparent;padding:0;">
      <div>
        <span class="eyebrow">Strategic Partnerships</span>
        <h2>Partner with the platform behind the companies.</h2>
        <p>We work with utilities, telecom groups, municipalities, OEMs, lenders, and enterprise
          customers to build resilient infrastructure and durable businesses.</p>
      </div>
      <div class="btn-row">
        <a class="btn btn-light" href="contact.php?type=partnership">Start a Partnership</a>
        <a class="btn btn-on-dark" href="contact.php?type=infrastructure">Infrastructure Inquiry</a>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
