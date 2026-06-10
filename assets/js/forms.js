/**
 * Contact and reservation forms — loading state on native POST submit.
 */
(function () {
  "use strict";

  function setFormLoading(form, loading) {
    const btn = form.querySelector('[type="submit"]');
    if (!btn) return;

    if (loading) {
      btn.disabled = true;
      btn.dataset.originalHtml = btn.innerHTML;
      btn.innerHTML =
        '<span class="btn-spinner" aria-hidden="true"></span><span>Submitting…</span>';
      btn.classList.add("is-loading");
      form.setAttribute("aria-busy", "true");
      return;
    }

    btn.disabled = false;
    btn.innerHTML = btn.dataset.originalHtml || btn.textContent;
    btn.classList.remove("is-loading");
    form.removeAttribute("aria-busy");
  }

  function showFormError(form, message) {
    let errorEl = form.querySelector(".form-error");
    if (!errorEl) {
      errorEl = document.createElement("div");
      errorEl.className =
        "form-error mt-4 rounded-md border border-red-200 bg-red-50 p-4 text-sm text-red-700";
      errorEl.setAttribute("role", "alert");
      form.appendChild(errorEl);
    }
    errorEl.textContent = message;
    errorEl.hidden = false;
  }

  function tomorrowString() {
    const tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1);
    return [
      tomorrow.getFullYear(),
      String(tomorrow.getMonth() + 1).padStart(2, "0"),
      String(tomorrow.getDate()).padStart(2, "0"),
    ].join("-");
  }

  function bindLoading(form, validate) {
    if (!form) return;

    if (new URLSearchParams(window.location.search).get("error") === "1") {
      showFormError(
        form,
        "Unable to send your message. Please try again or call us directly.",
      );
    }

    form.addEventListener("submit", (e) => {
      if (validate && !validate(form, e)) return;
      if (!form.checkValidity()) return;
      setFormLoading(form, true);
    });
  }

  bindLoading(document.querySelector("#contact-form"));

  bindLoading(document.querySelector("#reservation-form"), (form, e) => {
    const checkin = form.querySelector("#res-checkin");
    const checkout = form.querySelector("#res-checkout");
    const minCheckin = tomorrowString();

    if (checkin?.value && checkin.value < minCheckin) {
      e.preventDefault();
      showFormError(form, "Check-in must be a future date.");
      checkin.focus();
      return false;
    }

    if (checkin?.value && checkout?.value && checkout.value <= checkin.value) {
      e.preventDefault();
      showFormError(form, "Check-out must be at least one day after check-in.");
      checkout.focus();
      return false;
    }

    return true;
  });
})();
