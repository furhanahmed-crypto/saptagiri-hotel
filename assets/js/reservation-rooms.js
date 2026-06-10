/**
 * Reservation form — add or remove room rows with type and guest count.
 */
(function () {
  "use strict";

  const list = document.querySelector("[data-rooms-list]");
  const addBtn = document.getElementById("res-add-room");
  if (!list || !addBtn) return;

  const MAX_ROOMS = 5;
  const ROOM_OPTIONS = [
    { value: "Suite", label: "Suite" },
    { value: "Deluxe", label: "Deluxe" },
    { value: "Standard Room", label: "Standard Room" },
  ];
  const GUEST_OPTIONS = [
    { value: "1", label: "1 Guest" },
    { value: "2", label: "2 Guests" },
    { value: "3", label: "3 Guests" },
    { value: "4", label: "4 Guests" },
    { value: "5+", label: "5+ Guests" },
  ];

  function optionsMarkup(items) {
    return items
      .map((item) => `<option value="${item.value}">${item.label}</option>`)
      .join("");
  }

  function roomFieldsMarkup(roomNumber, includeRemove) {
    const removeBtn = includeRemove
      ? `<button type="button" data-room-remove class="shrink-0 text-xs font-semibold uppercase tracking-wider text-charcoal-muted transition-colors hover:text-accent" aria-label="Remove room ${roomNumber}">Remove</button>`
      : "";

    return `
      <div class="flex items-start justify-between gap-3">
        <p class="text-xs font-medium text-charcoal-muted" data-room-label>Room ${roomNumber}</p>
        ${removeBtn}
      </div>
      <div class="mt-2 grid gap-3 sm:grid-cols-2">
        <div>
          <label class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-charcoal-muted">Room Type</label>
          <select name="rooms[]" class="input-field" required>${optionsMarkup(ROOM_OPTIONS)}</select>
        </div>
        <div>
          <label class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-charcoal-muted">Guests *</label>
          <select name="room_guests[]" class="input-field" required>
            <option value="">Select</option>
            ${optionsMarkup(GUEST_OPTIONS)}
          </select>
        </div>
      </div>
    `;
  }

  function bindRemove(row) {
    row.querySelector("[data-room-remove]")?.addEventListener("click", () => {
      row.remove();
      updateRows();
    });
  }

  function updateRows() {
    const rows = list.querySelectorAll("[data-room-row]");
    rows.forEach((row, index) => {
      const roomNumber = index + 1;
      const label = row.querySelector("[data-room-label]");
      const roomSelect = row.querySelector('select[name="rooms[]"]');
      const guestSelect = row.querySelector('select[name="room_guests[]"]');

      if (label) {
        label.textContent = `Room ${roomNumber}`;
      }

      if (roomSelect) {
        roomSelect.id = `res-room-${roomNumber}`;
      }

      if (guestSelect) {
        guestSelect.id = `res-room-guests-${roomNumber}`;
      }

      const removeBtn = row.querySelector("[data-room-remove]");
      if (removeBtn) {
        removeBtn.hidden = rows.length === 1;
        removeBtn.setAttribute("aria-label", `Remove room ${roomNumber}`);
      }
    });

    addBtn.hidden = rows.length >= MAX_ROOMS;
  }

  function createRoomRow() {
    const rows = list.querySelectorAll("[data-room-row]");
    const row = document.createElement("div");
    row.className = "res-room-row rounded-lg border border-sand bg-linen/60 p-4";
    row.setAttribute("data-room-row", "");
    row.innerHTML = roomFieldsMarkup(rows.length + 1, true);
    bindRemove(row);
    return row;
  }

  list.querySelectorAll("[data-room-row]").forEach((row) => {
    row.classList.add("rounded-lg", "border", "border-sand", "bg-linen/60", "p-4");
    if (!row.querySelector('select[name="room_guests[]"]')) {
      const roomSelect = row.querySelector('select[name="rooms[]"]');
      const wrapper = row.querySelector(".grid");
      if (roomSelect && wrapper) {
        const guestField = document.createElement("div");
        guestField.innerHTML = `
          <label class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-charcoal-muted">Guests *</label>
          <select name="room_guests[]" class="input-field" required>
            <option value="">Select</option>
            ${optionsMarkup(GUEST_OPTIONS)}
          </select>
        `;
        wrapper.appendChild(guestField);
      }
    }
    bindRemove(row);
  });

  addBtn.addEventListener("click", () => {
    const rows = list.querySelectorAll("[data-room-row]");
    if (rows.length >= MAX_ROOMS) return;

    list.appendChild(createRoomRow());
    updateRows();
  });

  updateRows();
})();
