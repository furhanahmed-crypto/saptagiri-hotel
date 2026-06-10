/**
 * Reservation date validation — check-in from tomorrow; check-out after check-in.
 */
(function () {
  "use strict";

  const checkin = document.getElementById("res-checkin");
  const checkout = document.getElementById("res-checkout");
  if (!checkin || !checkout) return;

  function formatLocalDate(date) {
    const y = date.getFullYear();
    const m = String(date.getMonth() + 1).padStart(2, "0");
    const d = String(date.getDate()).padStart(2, "0");
    return `${y}-${m}-${d}`;
  }

  function tomorrowString() {
    const tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1);
    return formatLocalDate(tomorrow);
  }

  function parseLocalDate(dateStr) {
    const [y, m, d] = dateStr.split("-").map(Number);
    return new Date(y, m - 1, d);
  }

  function addDays(dateStr, days) {
    const d = parseLocalDate(dateStr);
    d.setDate(d.getDate() + days);
    return formatLocalDate(d);
  }

  const minCheckin = tomorrowString();
  checkin.min = minCheckin;
  checkout.min = addDays(minCheckin, 1);

  function enforceCheckinMin() {
    if (checkin.value && checkin.value < minCheckin) {
      checkin.value = "";
    }
  }

  function syncCheckout() {
    enforceCheckinMin();

    if (!checkin.value) {
      checkout.min = addDays(minCheckin, 1);
      return;
    }

    const minCheckout = addDays(checkin.value, 1);
    checkout.min = minCheckout;

    if (checkout.value && checkout.value < minCheckout) {
      checkout.value = "";
    }
  }

  function validateCheckout() {
    enforceCheckinMin();

    if (!checkin.value || !checkout.value) {
      checkout.setCustomValidity("");
      return;
    }

    const minCheckout = addDays(checkin.value, 1);
    if (checkout.value < minCheckout) {
      checkout.setCustomValidity("Check-out must be at least one day after check-in.");
    } else {
      checkout.setCustomValidity("");
    }
  }

  checkin.addEventListener("input", () => {
    syncCheckout();
    validateCheckout();
  });

  checkin.addEventListener("change", () => {
    syncCheckout();
    validateCheckout();
  });

  checkout.addEventListener("input", validateCheckout);
  checkout.addEventListener("change", validateCheckout);

  syncCheckout();
})();
