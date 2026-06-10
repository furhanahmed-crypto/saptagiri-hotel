/**
 * Gallery page category filter (All, Rooms, Dining, Banquets, Hotel)
 */
(function () {
  "use strict";

  const filterBar = document.querySelector("[data-gallery-filters]");
  const grid = document.querySelector("[data-gallery-grid]");
  if (!filterBar || !grid) return;

  const items = grid.querySelectorAll("[data-gallery-item]");
  const buttons = filterBar.querySelectorAll("[data-gallery-filter]");
  let emptyEl = grid.querySelector("[data-gallery-empty]");

  if (!emptyEl) {
    emptyEl = document.createElement("p");
    emptyEl.setAttribute("data-gallery-empty", "");
    emptyEl.className = "gallery-empty hidden col-span-full py-12 text-center text-sm text-charcoal-muted";
    emptyEl.textContent = "No images in this category yet.";
    grid.appendChild(emptyEl);
  }

  function setActiveButton(category) {
    buttons.forEach((btn) => {
      const isActive = btn.dataset.galleryFilter === category;
      btn.classList.toggle("gallery-filter-btn--active", isActive);
      btn.setAttribute("aria-selected", String(isActive));
    });
  }

  function applyFilter(category) {
    let visibleCount = 0;

    items.forEach((item) => {
      const itemCategory = item.dataset.category;
      const show = category === "all" || itemCategory === category;
      item.classList.toggle("is-hidden", !show);
      if (show) visibleCount += 1;
    });

    emptyEl.classList.toggle("hidden", visibleCount > 0);
    setActiveButton(category);
    window.SaptagiriUI?.refreshLightboxGrid?.();
  }

  buttons.forEach((btn) => {
    btn.addEventListener("click", () => {
      applyFilter(btn.dataset.galleryFilter);
    });
  });

  const initialFilter = new URLSearchParams(window.location.search).get("filter");
  const validFilters = new Set(
    Array.from(buttons).map((btn) => btn.dataset.galleryFilter),
  );
  applyFilter(
    initialFilter && validFilters.has(initialFilter) ? initialFilter : "all",
  );
})();
