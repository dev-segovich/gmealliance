  </main>

  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <a class="brand" href="index.php"><img src="images/Logo GME alliance.png" alt="GME Alliance" /></a>
          <p class="footer-about">
            A family-backed operating and development platform building, operating, and growing
            businesses across infrastructure, mobility, industrial supply, telecommunications,
            and real estate throughout the Americas.
          </p>
        </div>

        <div class="footer-col">
          <h5>Company</h5>
          <ul>
            <li><a href="about.php">About</a></li>
            <li><a href="platforms.php">Platforms</a></li>
            <li><a href="leadership.php">Leadership</a></li>
            <li><a href="projects.php">Projects &amp; Initiatives</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h5>Operating Companies</h5>
          <ul>
            <?php foreach (COMPANIES as $c): ?>
              <li>
                <?php if (!empty($c['url'])): ?>
                  <a href="<?= htmlspecialchars($c['url']) ?>" target="_blank" rel="noopener"><?= htmlspecialchars($c['name']) ?></a>
                <?php else: ?>
                  <a href="operating-companies.php"><?= htmlspecialchars($c['name']) ?></a>
                <?php endif; ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <div class="footer-col">
          <h5>Get in touch</h5>
          <ul>
            <?php foreach (SITE['address'] as $line): ?>
              <li style="color:var(--steel-300);"><?= htmlspecialchars($line) ?></li>
            <?php endforeach; ?>
            <li><a href="mailto:<?= SITE['email'] ?>"><?= SITE['email'] ?></a></li>
            <li><a href="contact.php?type=vendor">Vendor inquiries</a></li>
            <li><a href="contact.php?type=infrastructure">Infrastructure inquiries</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        <p>&copy; <?= date('Y') ?> GME Alliance LLC. All rights reserved.</p>
        <p class="family">A coordinated family of operating companies across the Americas.</p>
        <span class="footer-legal"><a href="disclaimer.php">Disclaimer</a></span>
      </div>
    </div>
  </footer>

  <script src="assets/js/main.js" defer></script>
</body>
</html>
