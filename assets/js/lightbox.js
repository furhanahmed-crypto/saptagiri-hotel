/**
 * Fullscreen image lightbox for gallery & banquet sliders
 * Must load before Swiper initialisation (loop clones).
 */
(function () {
  "use strict";

  const groups = new Map();

  document.querySelectorAll(".gallery-swiper").forEach((el, i) => {
    groups.set(`gallery-${i}`, () =>
      Array.from(el.querySelectorAll(".swiper-slide img"))
    );
  });

  document.querySelectorAll(".banquet-swiper").forEach((el, i) => {
    groups.set(`banquet-${i}`, () =>
      Array.from(el.querySelectorAll(".swiper-slide img"))
    );
  });

  document.querySelectorAll("[data-banquet-grid]").forEach((el, i) => {
    groups.set(`banquet-grid-${i}`, () =>
      Array.from(el.querySelectorAll("img"))
    );
  });

  document.querySelectorAll("[data-gallery-grid]").forEach((el, i) => {
    groups.set(`grid-${i}`, () => getVisibleGridImages(el));
  });

  document.querySelectorAll("[data-menu-lightbox]").forEach((el, i) => {
    groups.set(`menu-${i}`, () => Array.from(el.querySelectorAll("img")));
  });

  document.querySelectorAll("[data-room-gallery]").forEach((el, i) => {
    groups.set(`room-${i}`, () => Array.from(el.querySelectorAll("img")));
  });

  if (!groups.size) return;

  function getVisibleGridImages(grid) {
    return Array.from(
      grid.querySelectorAll("[data-gallery-item]:not(.is-hidden) img")
    );
  }

  const lightbox = document.createElement("div");
  lightbox.className = "lightbox";
  lightbox.setAttribute("role", "dialog");
  lightbox.setAttribute("aria-modal", "true");
  lightbox.setAttribute("aria-label", "Image viewer");
  lightbox.innerHTML = `
    <div class="lightbox__backdrop" data-lightbox-close></div>
    <button type="button" class="lightbox__btn lightbox__close" data-lightbox-close aria-label="Close">
      <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
    </button>
    <div class="lightbox__panel">
      <div class="lightbox__stage">
        <button type="button" class="lightbox__btn lightbox__nav lightbox__nav--prev" data-lightbox-prev aria-label="Previous image">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        </button>
        <figure class="lightbox__figure">
          <img class="lightbox__image" src="" alt="" />
        </figure>
        <button type="button" class="lightbox__btn lightbox__nav lightbox__nav--next" data-lightbox-next aria-label="Next image">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </button>
      </div>
      <figcaption class="lightbox__caption"></figcaption>
      <span class="lightbox__counter"></span>
    </div>
  `;
  document.body.appendChild(lightbox);

  const imageEl = lightbox.querySelector(".lightbox__image");
  const captionEl = lightbox.querySelector(".lightbox__caption");
  const counterEl = lightbox.querySelector(".lightbox__counter");
  const prevBtn = lightbox.querySelector("[data-lightbox-prev]");
  const nextBtn = lightbox.querySelector("[data-lightbox-next]");

  let activeGroup = [];
  let activeIndex = 0;

  function hiResSrc(src) {
    if (!src.includes("unsplash.com")) return src;
    return src.replace(/w=\d+/i, "w=1600").replace(/q=\d+/i, "q=85");
  }

  function renderSlide() {
    const img = activeGroup[activeIndex];
    if (!img) return;

    imageEl.src = hiResSrc(img.src);
    imageEl.alt = img.alt || "";
    captionEl.textContent = img.alt || "";
    counterEl.textContent = `${activeIndex + 1} / ${activeGroup.length}`;

    const single = activeGroup.length <= 1;
    prevBtn.hidden = single;
    nextBtn.hidden = single;
  }

  function openLightbox(group, index) {
    if (!group.length) return;
    activeGroup = group;
    activeIndex = index;
    const isMenu = group[0]?.closest("[data-menu-lightbox]");
    lightbox.classList.toggle("lightbox--menu", Boolean(isMenu));
    renderSlide();
    lightbox.classList.add("is-open");
    document.body.style.overflow = "hidden";
  }

  function closeLightbox() {
    lightbox.classList.remove("is-open");
    lightbox.classList.remove("lightbox--menu");
    if (!window.SaptagiriUI?.isMobileMenuOpen?.()) {
      document.body.style.overflow = "";
    }
    imageEl.src = "";
  }

  function showPrev() {
    activeIndex = (activeIndex - 1 + activeGroup.length) % activeGroup.length;
    renderSlide();
  }

  function showNext() {
    activeIndex = (activeIndex + 1) % activeGroup.length;
    renderSlide();
  }

  groups.forEach((factory, key) => {
    factory().forEach((img, index) => {
      img.dataset.lightboxGroup = key;
      img.dataset.lightboxIndex = String(index);
    });
  });

  document.addEventListener("click", (e) => {
    const menuTrigger = e.target.closest("[data-menu-open]");
    if (menuTrigger) {
      e.preventDefault();
      const container = menuTrigger.closest("[data-menu-lightbox]");
      const group = container
        ? Array.from(container.querySelectorAll("img"))
        : [];
      if (group.length) openLightbox(group, 0);
      return;
    }

    let img = e.target.closest(
      ".gallery-swiper img, .banquet-swiper .swiper-slide img, [data-banquet-grid] img, [data-gallery-grid] img, [data-menu-lightbox] img, [data-room-gallery] img"
    );
    if (img && e.target.closest("[data-room-thumb]")) {
      img = null;
    }
    if (!img || !img.dataset.lightboxGroup) return;

    e.preventDefault();

    let group;
    if (img.dataset.lightboxGroup.startsWith("grid-")) {
      const grid = img.closest("[data-gallery-grid]");
      group = getVisibleGridImages(grid);
    } else if (img.dataset.lightboxGroup.startsWith("banquet-grid-")) {
      const grid = img.closest("[data-banquet-grid]");
      group = grid ? Array.from(grid.querySelectorAll("img")) : [];
    } else if (img.dataset.lightboxGroup.startsWith("menu-")) {
      const container = img.closest("[data-menu-lightbox]");
      group = container ? Array.from(container.querySelectorAll("img")) : [];
    } else {
      group = groups.get(img.dataset.lightboxGroup)?.() ?? [];
    }

    const index = group.indexOf(img);
    if (index === -1) return;

    let openIndex = index;
    if (img.matches("[data-room-main]")) {
      const matchIndex = group.findIndex(
        (item) => item.src === img.src || item.currentSrc === img.currentSrc
      );
      if (matchIndex !== -1) openIndex = matchIndex;
    }

    openLightbox(group, openIndex);
  });

  lightbox.querySelectorAll("[data-lightbox-close]").forEach((el) => {
    el.addEventListener("click", closeLightbox);
  });

  prevBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    showPrev();
  });

  nextBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    showNext();
  });

  document.addEventListener("keydown", (e) => {
    if (!lightbox.classList.contains("is-open")) return;
    if (e.key === "Escape") closeLightbox();
    if (e.key === "ArrowLeft") showPrev();
    if (e.key === "ArrowRight") showNext();
  });

  window.SaptagiriUI = window.SaptagiriUI || {};
  window.SaptagiriUI.refreshLightboxGrid = () => {
    document.querySelectorAll("[data-gallery-grid]").forEach((grid, i) => {
      const key = `grid-${i}`;
      getVisibleGridImages(grid).forEach((img, index) => {
        img.dataset.lightboxGroup = key;
        img.dataset.lightboxIndex = String(index);
      });
    });
  };
})();
