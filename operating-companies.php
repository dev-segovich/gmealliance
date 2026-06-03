<?php
$active = 'companies';
$page_title = 'Operating Companies';
$page_description = 'The operating companies of GME Alliance: GME Supply, Express Distribution, RoadTech, ATEX Group, GridLink, Redbird Network, and the Mar-Ston Foundation.';
include __DIR__ . '/partials/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a> &nbsp;/&nbsp; Operating Companies</div>
    <h1>A coordinated family of operating companies.</h1>
    <p class="lead">Distinct businesses across infrastructure, mobility, development, supply, and
      community — unified by a shared standard of execution and brand.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <?php foreach (COMPANIES as $slug => $c): ?>
      <div class="company-row reveal" id="<?= $slug ?>">
        <div class="company-row__brand">
          <div class="logo-box"><img src="assets/img/companies/<?= $c['logo'] ?>" alt="<?= htmlspecialchars($c['name']) ?> logo" loading="lazy" /></div>
          <?php if (!empty($c['url'])): ?>
            <a class="btn btn-outline" style="width:100%;justify-content:center;" href="<?= htmlspecialchars($c['url']) ?>" target="_blank" rel="noopener">Visit website <?= gme_icon('arrow') ?></a>
          <?php else: ?>
            <span class="form-note" style="display:block;text-align:center;">Website coming soon</span>
          <?php endif; ?>
        </div>
        <div>
          <div class="tag-row">
            <?php foreach ($c['tags'] as $t): ?><span class="tag"><?= htmlspecialchars($t) ?></span><?php endforeach; ?>
          </div>
          <h3><?= htmlspecialchars($c['name']) ?></h3>
          <p class="lead" style="font-size:1.08rem;"><?= htmlspecialchars($c['short']) ?></p>
          <ul class="focus-cols">
            <?php foreach ($c['focus'] as $f): ?><li><?= htmlspecialchars($f) ?></li><?php endforeach; ?>
          </ul>
          <?php if (!empty($c['url'])): ?>
            <a class="company-link" href="<?= htmlspecialchars($c['url']) ?>" target="_blank" rel="noopener" style="font-family:var(--font-head);font-weight:600;">Learn more at <?= htmlspecialchars(preg_replace('#^https?://#', '', $c['url'])) ?> <?= gme_icon('arrow') ?></a>
          <?php endif; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="section section--alt">
  <div class="container">
    <div class="cta-band reveal">
      <div>
        <h2>Working with one of our companies?</h2>
        <p>Reach the right team for vendor, partnership, or infrastructure discussions.</p>
      </div>
      <div class="btn-row">
        <a class="btn btn-light" href="contact.php?type=vendor">Vendor Inquiry</a>
        <a class="btn btn-on-dark" href="contact.php?type=partnership">Partnership Inquiry</a>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
