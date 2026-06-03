<?php
$active = 'about';
$page_title = 'About';
$page_description = 'GME Alliance is a family-backed operating and development platform with experience across infrastructure, telecommunications, industrial supply, connected mobility, logistics, construction, and community development.';
include __DIR__ . '/partials/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a> &nbsp;/&nbsp; About</div>
    <h1>A long-term operating and development platform.</h1>
    <p class="lead">We launch, operate, and scale businesses that support economic growth and
      infrastructure modernization across the Americas.</p>
  </div>
</section>

<section class="section">
  <div class="container split">
    <div class="prose reveal">
      <span class="eyebrow">Who We Are</span>
      <h2>Family-backed. Operationally driven.</h2>
      <p>GME Alliance is a family-backed operating and development platform with experience across
        infrastructure, telecommunications, industrial supply, connected mobility technologies,
        logistics, construction, and community development.</p>
      <p>The organization focuses on launching, operating, and scaling businesses that support
        long-term economic growth and infrastructure modernization across the Americas. We are
        operators and builders first — coordinating a diversified family of companies under a shared
        standard of execution, partnership, and discipline.</p>
      <p>We engage utilities, municipalities, OEMs, lenders, and enterprise customers as a credible,
        long-term partner — focused on resilient infrastructure, connectivity, and industrial growth.</p>
    </div>
    <div class="media reveal d1">
      <div class="media-ph" style="min-height:380px;">
        <span>Infrastructure / industrial imagery<br>(transmission, fiber, construction, logistics)</span>
      </div>
    </div>
  </div>
</section>

<section class="section section--alt">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">What We Do</span>
      <h2>Identify. Build. Operate. Scale.</h2>
      <p class="lead">A disciplined model for creating durable value across multiple industries.</p>
    </div>
    <div class="feature-grid">
      <?php
      $items = [
        ['compass', 'Identify Opportunities', 'We find overlooked, infrastructure-essential opportunities where operational expertise compounds over time.'],
        ['layers', 'Launch &amp; Build', 'We stand up operating companies and develop power-ready sites, connectivity, and housing.'],
        ['route', 'Operate with Discipline', 'We run businesses with safety, accountability, and measurable operational performance.'],
        ['handshake', 'Partner Strategically', 'We build durable relationships with utilities, OEMs, municipalities, and enterprise customers.'],
        ['grid', 'Modernize Infrastructure', 'We support grid modernization, resilient connectivity, and industrial growth.'],
        ['building', 'Develop Communities', 'We advance workforce and multifamily housing and community initiatives where we operate.'],
      ];
      foreach ($items as $i => [$icon, $t, $d]): ?>
        <div class="feature reveal d<?= min($i % 3, 2) ?>">
          <div class="feature__icon"><?= gme_icon($icon) ?></div>
          <h3><?= $t ?></h3>
          <p><?= $d ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section section--dark">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">By the numbers</span>
      <h2>A diversified, coordinated platform.</h2>
    </div>
    <div class="stat-band">
      <?php
      $stats = [
        ['7', 'Operating companies &amp; initiatives'],
        ['4', 'Core operating platforms'],
        ['5', 'Regions across the Americas'],
        ['Long-term', 'Ownership orientation'],
      ];
      foreach ($stats as $i => [$n, $l]): ?>
        <div class="stat reveal d<?= min($i, 3) ?>">
          <div class="num"><?= $n ?></div>
          <div class="label"><?= $l ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cta-band reveal">
      <div>
        <h2>Meet the people behind the platform.</h2>
        <p>Experienced builders and operators across infrastructure, mobility, development, and supply.</p>
      </div>
      <div class="btn-row">
        <a class="btn btn-light" href="leadership.php">View Leadership</a>
        <a class="btn btn-on-dark" href="contact.php">Contact Us</a>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
