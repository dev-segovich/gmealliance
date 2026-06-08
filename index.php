<?php
$active = 'home';
$page_title = 'GME Alliance';
$page_description = 'GME Alliance is a family-backed operating and development platform that builds, operates, and grows businesses across infrastructure, connected mobility, industrial supply, telecommunications, construction, and community development throughout the Americas.';
include __DIR__ . '/partials/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__inner reveal in">
      <span class="eyebrow">Operating &amp; Development Platform · The Americas</span>
      <h1>Building and Operating Platforms Across the Americas</h1>
      <p class="lead">
        GME Alliance is a family-backed operating and development platform focused on
        infrastructure, connected mobility, industrial supply, telecommunications,
        construction, and community development.
      </p>
      <div class="btn-row">
        <a class="btn btn-light" href="platforms.php">Explore Our Platforms <?= gme_icon('arrow') ?></a>
        <a class="btn btn-on-dark" href="contact.php?type=partnership">Strategic Partnerships</a>
      </div>
    </div>
  </div>
  <div class="cred-strip">
    <div class="container cred-strip__inner">
      <span class="label">Built to engage</span>
      <ul>
        <li>Utilities &amp; Co-ops</li>
        <li>Municipalities</li>
        <li>OEMs</li>
        <li>Telecom Groups</li>
        <li>Enterprise Customers</li>
      </ul>
    </div>
  </div>
</section>

<!-- OPERATING PLATFORMS -->
<section class="section section--alt" id="platforms">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Operating Platforms</span>
      <h2>Four platforms. One coordinated ecosystem.</h2>
      <p class="lead">We build, operate, and scale businesses across infrastructure and industry —
        each platform anchored by operating companies with real capability and customers.</p>
    </div>
    <div class="platform-grid">
      <?php foreach (PLATFORMS as $p): ?>
        <article class="platform-card reveal">
          <div class="platform-card__icon"><?= gme_icon($p['icon']) ?></div>
          <h3><?= htmlspecialchars($p['title']) ?></h3>
          <div class="companies"><?= htmlspecialchars($p['companies']) ?></div>
          <p><?= htmlspecialchars($p['summary']) ?></p>
          <ul class="focus-list">
            <?php foreach ($p['focus'] as $f): ?>
              <li><?= htmlspecialchars($f) ?></li>
            <?php endforeach; ?>
          </ul>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- OUR APPROACH -->
<section class="section section--dark">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Our Approach</span>
      <h2>Operators and builders — not passive capital.</h2>
      <p class="lead">We focus on building and operating long-term businesses and infrastructure
        platforms where operational expertise, strategic partnerships, and disciplined growth
        create lasting value.</p>
    </div>
    <div class="approach-grid">
      <?php
      $steps = [
        ['Build', 'Launch and stand up operating companies and infrastructure from the ground up.'],
        ['Operate', 'Run businesses with operational discipline, safety, and accountability.'],
        ['Scale', 'Grow proven platforms across markets, channels, and customers.'],
        ['Partner', 'Work alongside utilities, OEMs, municipalities, and enterprise customers.'],
        ['Develop', 'Advance sites, housing, and connectivity that strengthen communities.'],
      ];
      foreach ($steps as $i => [$t, $d]): ?>
        <div class="approach-step reveal d<?= min($i, 3) ?>">
          <div class="num"><?= sprintf('%02d', $i + 1) ?></div>
          <h3><?= $t ?></h3>
          <p><?= $d ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- OPERATING COMPANIES -->
<section class="section" id="companies">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Operating Companies</span>
      <h2>A coordinated family of operating companies.</h2>
      <p class="lead">Distinct businesses with a shared standard of execution, brand, and
        long-term orientation across the Americas.</p>
    </div>
    <div class="company-grid">
      <?php foreach (COMPANIES as $slug => $c): ?>
        <article class="company-card reveal">
          <div class="logo-wrap<?= !empty($c['dark']) ? ' on-dark' : '' ?><?= !empty($c['fill']) ? ' fill' : '' ?>"><img src="assets/img/companies/<?= $c['logo'] ?>" alt="<?= htmlspecialchars($c['name']) ?> logo" loading="lazy" /></div>
          <h3><?= htmlspecialchars($c['name']) ?></h3>
          <p><?= htmlspecialchars($c['short']) ?></p>
          <?php if (!empty($c['url'])): ?>
            <a class="company-link" href="<?= htmlspecialchars($c['url']) ?>" target="_blank" rel="noopener">Visit website <?= gme_icon('arrow') ?></a>
          <?php else: ?>
            <a class="company-link" href="operating-companies.php#<?= $slug ?>">View profile <?= gme_icon('arrow') ?></a>
          <?php endif; ?>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- GEOGRAPHIC REACH -->
<section class="section section--alt">
  <div class="container">
    <div class="reach">
      <div class="reach-map reveal">
        <span class="eyebrow">Geographic Reach</span>
        <h2 style="margin-bottom:14px;">Supporting businesses and infrastructure across the Americas.</h2>
        <p class="lead" style="margin-bottom:28px;">From the United States across Mexico, the Caribbean,
          and Central and South America — a diversified footprint built for long-term growth.</p>
        <?php include __DIR__ . '/partials/americas-map.php'; ?>
      </div>
      <div class="reach-regions reveal d1">
        <?php foreach (REGIONS as [$name, $desc]): ?>
          <div class="reach-region">
            <span class="dot"></span>
            <div>
              <h4><?= htmlspecialchars($name) ?></h4>
              <p><?= htmlspecialchars($desc) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section section--tight">
  <div class="container">
    <div class="cta-band reveal">
      <div>
        <h2>Let's build and operate something durable.</h2>
        <p>Partner with an operating group that engages utilities, municipalities, OEMs, lenders,
          and enterprise customers with execution at the center.</p>
      </div>
      <div class="btn-row">
        <a class="btn btn-light" href="contact.php?type=partnership">Start a Partnership</a>
        <a class="btn btn-on-dark" href="operating-companies.php">Operating Companies</a>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
