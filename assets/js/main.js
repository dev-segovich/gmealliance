/* GME Alliance — site interactions (no dependencies) */
(function () {
  "use strict";

  /* ----- Mobile navigation drawer --------------------------------------- */
  const toggle = document.querySelector(".nav-toggle");
  const drawer = document.getElementById("mobileNav");
  const closeBtn = document.querySelector(".mobile-nav__close");

  function openNav() {
    if (!drawer) return;
    drawer.classList.add("open");
    drawer.setAttribute("aria-hidden", "false");
    toggle && toggle.setAttribute("aria-expanded", "true");
    document.body.classList.add("nav-open");
  }
  function closeNav() {
    if (!drawer) return;
    drawer.classList.remove("open");
    drawer.setAttribute("aria-hidden", "true");
    toggle && toggle.setAttribute("aria-expanded", "false");
    document.body.classList.remove("nav-open");
  }
  toggle && toggle.addEventListener("click", openNav);
  closeBtn && closeBtn.addEventListener("click", closeNav);
  drawer &&
    drawer.querySelectorAll("a").forEach((a) => a.addEventListener("click", closeNav));
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeNav();
  });

  /* ----- Scroll reveal --------------------------------------------------- */
  const revealEls = document.querySelectorAll(".reveal");
  if ("IntersectionObserver" in window && revealEls.length) {
    const io = new IntersectionObserver(
      (entries, obs) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("in");
            obs.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: "0px 0px -8% 0px" }
    );
    revealEls.forEach((el) => io.observe(el));
  } else {
    revealEls.forEach((el) => el.classList.add("in"));
  }

  /* ----- Contact form: preselect inquiry type from ?type= --------------- */
  const inquirySelect = document.getElementById("inquiry-type");
  if (inquirySelect) {
    const params = new URLSearchParams(window.location.search);
    const type = params.get("type");
    if (type) {
      const match = Array.from(inquirySelect.options).find(
        (o) => o.value.toLowerCase() === type.toLowerCase()
      );
      if (match) inquirySelect.value = match.value;
    }
  }

  /* ----- Async form submission ------------------------------------------ */
  document.querySelectorAll("form[data-async]").forEach((form) => {
    const status = form.querySelector(".form-status");
    form.addEventListener("submit", async (e) => {
      e.preventDefault();
      const btn = form.querySelector('button[type="submit"]');
      const original = btn ? btn.textContent : "";
      if (btn) {
        btn.disabled = true;
        btn.textContent = "Sending…";
      }
      function show(msg, ok) {
        if (!status) return;
        status.textContent = msg;
        status.className = "form-status show " + (ok ? "ok" : "err");
      }
      try {
        const res = await fetch(form.action, {
          method: "POST",
          body: new FormData(form),
          headers: { "X-Requested-With": "fetch" },
        });
        const data = await res.json().catch(() => ({ ok: res.ok }));
        if (data.ok) {
          show(
            data.message || "Thank you. Your message has been received — we'll be in touch shortly.",
            true
          );
          form.reset();
        } else {
          show(data.message || "Something went wrong. Please try again or email us directly.", false);
        }
      } catch (err) {
        show("We couldn't send your message. Please email " + (form.dataset.email || "us") + " directly.", false);
      } finally {
        if (btn) {
          btn.disabled = false;
          btn.textContent = original;
        }
      }
    });
  });

  /* ----- Header shadow on scroll ---------------------------------------- */
  const header = document.querySelector(".site-header");
  if (header) {
    const onScroll = () => {
      header.style.boxShadow = window.scrollY > 8 ? "0 6px 20px rgba(8,22,38,0.07)" : "none";
    };
    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });
  }
})();
