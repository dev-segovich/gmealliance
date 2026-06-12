<?php
$active = 'projects';
$page_title = 'Projects & Initiatives';
$page_description = 'Infrastructure, connectivity, mobility, development, and community initiatives advanced across the GME Alliance platform throughout the Americas.';
include __DIR__ . '/partials/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a> &nbsp;/&nbsp; Projects &amp; Initiatives</div>
    <h1>Projects and initiatives that modernize and connect.</h1>
    <p class="lead">Representative areas of work across our platforms — from power-ready sites and
      regional connectivity to workforce housing and community programs.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="project-grid">
      <?php foreach (PROJECTS as $pr): ?>
        <article class="project-card reveal <?= !empty($pr['foundation']) ? 'foundation' : '' ?>">
          <?php if (!empty($pr['image'])): ?>
            <div class="project-media"><img src="<?= $pr['image'] ?>" alt="<?= htmlspecialchars($pr['title']) ?>" loading="lazy" /></div>
          <?php else: ?>
            <div class="media-ph"><span><?= htmlspecialchars($pr['category']) ?></span></div>
          <?php endif; ?>
          <div class="body">
            <span class="tag"><?= htmlspecialchars($pr['category']) ?></span>
            <h3><?= htmlspecialchars($pr['title']) ?></h3>
            <p><?= htmlspecialchars($pr['desc']) ?></p>
            <span class="form-note" style="font-family:var(--font-head);font-weight:600;color:var(--blue-600);">
              <?= htmlspecialchars($pr['platform']) ?>
            </span>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
    <p class="form-note" style="margin-top:28px;">Representative initiatives shown for illustration.
      Specific project details available on request.</p>
  </div>
</section>

<!-- Mar-Ston Foundation highlight — intentionally distinct in tone -->
<section class="section section--dark">
  <div class="container split">
    <div class="prose reveal">
      <span class="eyebrow">Community Initiative</span>
      <h2>The Mar-Ston Foundation</h2>
      <p style="color:var(--steel-300);">A community-focused nonprofit initiative supporting workforce
        development, wellness, and community revitalization in the places where we build and operate.</p>
      <p style="color:var(--steel-300);">Where our commercial companies create infrastructure and jobs,
        the Foundation invests in the people and communities around them.</p>
      <a class="btn btn-light" href="https://mar-ston.com" target="_blank" rel="noopener">Visit mar-ston.com <?= gme_icon('arrow') ?></a>
    </div>
    <div class="media reveal d1">
      <div class="media-photo"><img src="assets/img/content/foundation-marston.jpg" alt="Mar-Ston Foundation — community initiatives" loading="lazy" /></div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
