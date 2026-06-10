/**
 * Offer popup — shown once per browser session.
 */
(function () {
  "use strict";

  const cfg = window.SaptagiriConfig?.offerPopup;
  if (!cfg?.enabled) return;
  if (sessionStorage.getItem("saptagiri-offer-dismissed")) return;

  const overlay = document.createElement("div");
  overlay.className = "offer-popup-overlay";
  overlay.setAttribute("role", "dialog");
  overlay.setAttribute("aria-modal", "true");
  overlay.setAttribute("aria-labelledby", "offer-popup-title");

  const ctaHref = cfg.ctaHref || "reservation.php";

  overlay.innerHTML = `
    <div class="offer-popup">
      <button type="button" class="offer-popup__close" aria-label="Close offer">&times;</button>
      <span class="section-label">Special Offer</span>
      <h2 id="offer-popup-title" class="offer-popup__title">${cfg.title}</h2>
      <p class="offer-popup__text">${cfg.message}</p>
      <div class="offer-popup__actions">
        <a href="${ctaHref}" class="offer-popup__cta btn-primary">${cfg.ctaText}</a>
        <button type="button" class="offer-popup__dismiss btn-secondary">Maybe Later</button>
      </div>
    </div>
  `;

  function closePopup() {
    sessionStorage.setItem("saptagiri-offer-dismissed", "1");
    overlay.remove();
    document.body.style.overflow = "";
  }

  overlay.querySelector(".offer-popup__close")?.addEventListener("click", closePopup);
  overlay.querySelector(".offer-popup__dismiss")?.addEventListener("click", closePopup);

  overlay.querySelector(".offer-popup__cta")?.addEventListener("click", (e) => {
    e.preventDefault();
    closePopup();
    window.location.href = ctaHref;
  });

  overlay.addEventListener("click", (e) => {
    if (e.target === overlay) closePopup();
  });

  document.body.appendChild(overlay);
  document.body.style.overflow = "hidden";
})();
