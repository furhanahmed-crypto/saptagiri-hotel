/**
 * Sticky header, mobile menu, active nav link
 */
(function () {
  "use strict";

  const header = document.querySelector(".site-header");
  if (header) {
    const onScroll = () => {
      header.classList.toggle("is-scrolled", window.scrollY > 40);
    };
    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });
  }

  const menuToggle = document.querySelector("[data-menu-toggle]");
  const menuClose = document.querySelector("[data-menu-close]");
  const mobileMenu = document.querySelector(".mobile-menu");
  const mobileOverlay = document.querySelector(".mobile-overlay");

  function openMenu() {
    mobileMenu?.classList.add("is-open");
    mobileOverlay?.classList.add("is-open");
    document.body.style.overflow = "hidden";
  }

  function closeMenu() {
    mobileMenu?.classList.remove("is-open");
    mobileOverlay?.classList.remove("is-open");
    document.body.style.overflow = "";
  }

  menuToggle?.addEventListener("click", openMenu);
  menuClose?.addEventListener("click", closeMenu);
  mobileOverlay?.addEventListener("click", closeMenu);

  mobileMenu?.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", closeMenu);
  });

  const currentPage = window.location.pathname.split("/").pop() || "index.php";
  document.querySelectorAll("[data-nav-link]").forEach((link) => {
    const href = link.getAttribute("href");
    if (
      href === currentPage ||
      (currentPage === "" && href === "index.php") ||
      (currentPage === "index.php" && href === "index.php")
    ) {
      link.classList.add("nav-link-active");
    }
  });

  window.SaptagiriUI = window.SaptagiriUI || {};
  window.SaptagiriUI.isMobileMenuOpen = () =>
    mobileMenu?.classList.contains("is-open") ?? false;

  const floatingScript = document.createElement("script");
  const headerSrc =
    document.querySelector('script[src*="header.js"]')?.getAttribute("src") ||
    "assets/js/header.js";
  const base = headerSrc.replace(/header\.js.*$/, "");
  floatingScript.src = base + "floating-actions.js";
  document.body.appendChild(floatingScript);

  function loadScript(src, onLoad) {
    const script = document.createElement("script");
    script.src = base + src;
    script.onload = onLoad || null;
    document.body.appendChild(script);
  }

  loadScript("site-config.js", () => {
    loadScript("site-init.js");
    loadScript("offer-popup.js");
  });
})();
