/**
 * Swiper.js initialisation for hero, gallery, room, and banquet sliders
 */
(function () {
  "use strict";

  if (typeof Swiper === "undefined") return;

  const heroEl = document.querySelector(".hero-swiper");
  if (heroEl) {
    new Swiper(".hero-swiper", {
      loop: true,
      autoplay: {
        delay: 10000,
        disableOnInteraction: false,
      },
      effect: "fade",
      fadeEffect: { crossFade: true },
      speed: 900,
      pagination: {
        el: ".hero-swiper .swiper-pagination",
        clickable: true,
      },
    });
  }

  document.querySelectorAll(".gallery-swiper").forEach((el) => {
    new Swiper(el, {
      slidesPerView: 1.2,
      spaceBetween: 16,
      loop: true,
      navigation: {
        nextEl: el.querySelector(".swiper-button-next"),
        prevEl: el.querySelector(".swiper-button-prev"),
      },
      breakpoints: {
        640: { slidesPerView: 2.2, spaceBetween: 20 },
        1024: { slidesPerView: 3.2, spaceBetween: 24 },
      },
    });
  });

  document.querySelectorAll(".room-swiper").forEach((el) => {
    new Swiper(el, {
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      navigation: {
        nextEl: el.querySelector(".swiper-button-next"),
        prevEl: el.querySelector(".swiper-button-prev"),
      },
      pagination: {
        el: el.querySelector(".swiper-pagination"),
        clickable: true,
      },
    });
  });

  document.querySelectorAll(".banquet-swiper").forEach((el) => {
    new Swiper(el, {
      slidesPerView: 1.1,
      spaceBetween: 20,
      loop: true,
      navigation: {
        nextEl: el.querySelector(".swiper-button-next"),
        prevEl: el.querySelector(".swiper-button-prev"),
      },
      breakpoints: {
        768: { slidesPerView: 2.2, spaceBetween: 24 },
        1024: { slidesPerView: 3, spaceBetween: 28 },
      },
    });
  });
})();
