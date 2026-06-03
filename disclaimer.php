<?php
$active = '';
$page_title = 'Disclaimer';
$page_description = 'Legal disclaimer and image usage notice for the GME Alliance website.';
include __DIR__ . '/partials/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a> &nbsp;/&nbsp; Disclaimer</div>
    <h1>Disclaimer</h1>
  </div>
</section>

<section class="section">
  <div class="container prose">
    <h2>General information</h2>
    <p>The content on this website is provided by GME Alliance LLC for general informational
      purposes only. It does not constitute an offer, solicitation, or recommendation to buy or
      sell any security, product, or service, and should not be relied upon as legal, financial,
      or investment advice.</p>

    <h2>Forward-looking statements</h2>
    <p>This website may contain forward-looking statements regarding plans, platforms, and
      initiatives. Such statements are subject to risks and uncertainties, and actual outcomes may
      differ. References to operating companies, projects, and initiatives are for illustration and
      do not constitute a guarantee of future activity or results.</p>

    <h2>Trademarks &amp; affiliated companies</h2>
    <p>Company names, logos, and brands referenced on this site — including those of affiliated
      operating companies — are the property of their respective owners and are used for
      identification purposes only.</p>

    <h2>Images</h2>
    <p>Images used on this site are either owned by GME Alliance or used with proper licensing from
      the creator. Placeholder graphics may appear where licensed photography has not yet been
      installed.</p>

    <h2>External links</h2>
    <p>This website may link to third-party and affiliated websites, including
      <a href="https://mar-ston.com" target="_blank" rel="noopener">mar-ston.com</a>. GME Alliance is
      not responsible for the content or practices of external sites.</p>

    <p style="margin-top:32px;"><a class="btn btn-outline" href="contact.php">Questions? Contact us <?= gme_icon('arrow') ?></a></p>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
