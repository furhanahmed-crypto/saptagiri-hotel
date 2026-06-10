/**
 * Room detail gallery — swap main image when a thumbnail is selected.
 */
(function () {
  "use strict";

  document.querySelectorAll("[data-room-gallery]").forEach((gallery) => {
    const main = gallery.querySelector("[data-room-main]");
    const thumbs = gallery.querySelectorAll("[data-room-thumb]");
    if (!main || !thumbs.length) return;

    thumbs.forEach((thumb) => {
      thumb.addEventListener("click", (e) => {
        e.stopPropagation();
        const img = thumb.querySelector("img");
        if (!img) return;

        main.src = img.src;
        main.alt = img.alt;

        thumbs.forEach((t) => {
          t.classList.remove("is-active");
          t.setAttribute("aria-selected", "false");
        });
        thumb.classList.add("is-active");
        thumb.setAttribute("aria-selected", "true");
      });
    });
  });
})();
