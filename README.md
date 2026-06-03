# GME Alliance — Website

Family-backed operating and development platform. Static-rendered PHP site (no build
step) designed to run on any PHP-capable host (Apache/XAMPP, cPanel, etc.).

---

## How it's structured

```
index.php                 Home
about.php                 About
platforms.php             Platforms (4 operating platforms)
operating-companies.php   Operating companies (detailed profiles)
projects.php              Projects & Initiatives (+ Mar-Ston Foundation)
leadership.php            Leadership
contact.php               Contact + Partnership/Vendor/Infrastructure form
disclaimer.php            Legal / image disclaimer
inquiry.php               Contact form handler (server-side)

partials/
  data.php                ★ Single source of truth: companies, platforms,
                            nav, regions, leadership, projects, icons
  header.php              <head> (SEO/OG/JSON-LD) + sticky nav + mobile drawer
  footer.php              Footer (auto-lists operating companies)
  americas-map.php        Stylized "Geographic Reach" SVG

assets/
  css/styles.css          Design system (navy / steel / gray / white)
  js/main.js              Nav drawer, scroll reveal, async form
  img/companies/*.svg     Operating-company logos (placeholders — see below)

.htaccess                 Security headers, HTTPS redirect, caching, compression
robots.txt / sitemap.xml  SEO
images/                   Brand logo + favicon (reused from prior site)
```

**Shared design standards** (typography, nav, footer, tone, contact style) live in
`partials/` + `assets/css/styles.css`, so every page — and any future operating
company added to `data.php` — stays visually consistent.

---

## Editing content (no code needed for most changes)

Almost everything is driven by **`partials/data.php`**:

- **Add an operating company** → add an entry to `COMPANIES`. It appears automatically
  on the homepage grid, the Operating Companies page, and the footer.
- **Set a company's real website** → fill the `url` field (empty `url` shows
  "Website coming soon"). `mar-ston` already links to https://mar-ston.com.
- **Swap a placeholder logo** → drop the real file into `assets/img/companies/`
  using the same filename (e.g. `gridlink.svg`), or update the `logo` field.
  SVG or PNG both work; aim for a transparent background, ~46px tall.
- **Platforms / regions / projects / leadership** → edit `PLATFORMS`, `REGIONS`,
  `PROJECTS`, `LEADERS`.
- **Site-wide info** (email, phone, address, LinkedIn) → edit `SITE`.

### Placeholders to replace before launch
- [ ] Operating-company **logos** (`assets/img/companies/*.svg`) and **URLs** (`data.php`)
- [ ] **Leadership** names, bios, photos, LinkedIn (`LEADERS` in `data.php` + photos)
- [ ] **Projects** with real, approved details (`PROJECTS`)
- [ ] **Licensed photography** wherever you see a hatched "image placeholder"
      (search the CSS class `media-ph`) — infrastructure, fiber, construction, logistics, workforce
- [ ] Company **LinkedIn** + main **phone** (`SITE`)
- [ ] Capability-statement **PDF**: drop in `assets/docs/`, then link it (e.g. on About/Contact)

---

## Forms

`contact.php` posts to `inquiry.php`, which validates, blocks bots (honeypot), and
emails the submission. It supports four inquiry types: General, Partnership, Vendor,
Infrastructure. Deep links preselect the type, e.g. `contact.php?type=partnership`.

- Set the recipient in `inquiry.php` → `INQUIRY_RECIPIENT`.
- It uses PHP `mail()`. On shared hosting this often works; for reliable delivery use
  an SMTP relay / transactional service (e.g. your host's SMTP, or a provider). If
  `mail()` fails, submissions are appended to `inquiries.log` so nothing is lost.

---

## Local preview

```bash
php -S localhost:8000        # then open http://localhost:8000
# (or browse via XAMPP at http://localhost/gmealliance/)
```

---

## Operations checklist (domain, hosting, SSL, email)

These require registrar / host / DNS access and can't be done from the codebase:

- **Domain** — keep `gmealliance.com` registered; lock the domain; set auto-renew.
- **Hosting** — deploy these files to the web root on a PHP 8.x host. Keep
  `partials/` and `*.log` non-public (the included `.htaccess` denies them).
- **SSL** — install a certificate (Let's Encrypt or host-provided), then uncomment the
  HTTPS redirect and HSTS lines in `.htaccess`.
- **Email** — set up `info@gmealliance.com` (and `no-reply@`); add SPF, DKIM, and
  DMARC DNS records so form mail isn't flagged as spam.
- **Performance** — `.htaccess` already enables gzip + caching; compress any large
  photography you add (target < 300 KB each, prefer WebP).
- **Analytics/Search** — submit `sitemap.xml` to Google Search Console.

## Future expansion
Each affiliated operating company can adopt the same `partials/` + `styles.css`
system for a consistent look, with the footer line
*"A member of the GME Alliance family of companies."* New verticals/companies are
added by editing `data.php` — no new templates required.
