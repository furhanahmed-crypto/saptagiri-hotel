<?php
$pageTitle = 'Reservation | Hotel Saptagiri';
$pageDescription = 'Book your stay at Hotel Saptagiri, Secunderabad. Submit a reservation request for Standard, Deluxe, or Suite rooms.';
$pageScripts = ['reservation-dates.js', 'reservation-rooms.js', 'forms.js'];
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>

<main>
      <section class="page-hero">
        <img src="assets/images/deluxe-room/deluxe-room-secunderabad-img-2.jpg" alt="" class="page-hero__bg" aria-hidden="true" />
        <div class="container-site page-hero__inner">
          <span class="section-label !text-gold-light">Book Direct</span>
          <h1 class="page-hero__title">Reservation</h1>
          <p class="page-hero__subtitle">Book direct for the best rates. Submit your stay details and our team will confirm availability shortly.</p>
        </div>
      </section>

      <section id="reservation" class="section-padding bg-linen scroll-mt-24">
        <div class="container-site">
          <div class="grid gap-12 lg:grid-cols-2 lg:gap-16">
            <div>
              <span class="section-label">Reservation</span>
              <h2 class="section-title">Book Your Stay</h2>
              <p class="section-subtitle">
                Fill in your details below and we'll connect with you to confirm availability and rates. For immediate assistance, call us directly.
              </p>

              <div class="mt-8 rounded-lg bg-white p-6 shadow-soft">
                <h3 class="font-display text-xl text-charcoal">Hotel Information</h3>
                <address class="mt-4 space-y-3 not-italic text-sm text-charcoal-muted">
                  <p>9-1-220, St. Mary's Road Opposite to Passport Office,<br />Secunderabad, Hyderabad – 500003</p>
                  <p>Check-in: 12:00 PM · Check-out: 11:00 AM</p>
                </address>
                <ul class="mt-6 space-y-2 text-sm text-charcoal-muted">
                  <li>• 0.5 km from Secunderabad Railway Station</li>
                  <li>• 700 m from Parade Ground Metro Station</li>
                  <li>• 35 km from Rajiv Gandhi International Airport</li>
                </ul>
              </div>
            </div>

            <div class="rounded-lg bg-white p-6 shadow-card md:p-8">
              <h3 class="font-display text-2xl text-charcoal">Reservation Request</h3>
              <p class="mt-2 text-sm text-charcoal-muted">All fields marked with * are required.</p>

              <form id="reservation-form" class="mt-6 space-y-5" method="post" action="reservation-send.php">
                <div>
                  <label for="res-name" class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-charcoal-muted">Full Name *</label>
                  <input type="text" id="res-name" name="name" required class="input-field" placeholder="Your full name" />
                </div>
                <div class="grid gap-5 sm:grid-cols-2">
                  <div>
                    <label for="res-phone" class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-charcoal-muted">Phone Number *</label>
                    <input type="tel" id="res-phone" name="phone" required class="input-field" placeholder="+91 XXXXX XXXXX" />
                  </div>
                  <div>
                    <label for="res-email" class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-charcoal-muted">Email Address</label>
                    <input type="email" id="res-email" name="email" class="input-field" placeholder="you@email.com" />
                  </div>
                </div>
                <div class="grid gap-5 sm:grid-cols-2">
                  <div>
                    <label for="res-checkin" class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-charcoal-muted">Check-in Date *</label>
                    <input type="date" id="res-checkin" name="checkin" required class="input-field" />
                  </div>
                  <div>
                    <label for="res-checkout" class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-charcoal-muted">Check-out Date *</label>
                    <input type="date" id="res-checkout" name="checkout" required class="input-field" />
                  </div>
                </div>
                <div>
                  <div class="mb-3 flex items-center justify-between gap-4">
                    <span class="text-xs font-semibold uppercase tracking-wider text-charcoal-muted">Rooms</span>
                    <button type="button" id="res-add-room" class="text-xs font-semibold uppercase tracking-wider text-accent transition-colors hover:text-accent-dark">+ Add another room</button>
                  </div>
                  <div id="res-rooms-list" class="space-y-3" data-rooms-list>
                    <div class="res-room-row rounded-lg border border-sand bg-linen/60 p-4" data-room-row>
                      <p class="text-xs font-medium text-charcoal-muted" data-room-label>Room 1</p>
                      <div class="mt-2 grid gap-3 sm:grid-cols-2">
                        <div>
                          <label for="res-room-1" class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-charcoal-muted">Room Type</label>
                          <select id="res-room-1" name="rooms[]" required class="input-field">
                            <option value="Suite">Suite</option>
                            <option value="Deluxe">Deluxe</option>
                            <option value="Standard Room">Standard Room</option>
                          </select>
                        </div>
                        <div>
                          <label for="res-room-guests-1" class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-charcoal-muted">Guests *</label>
                          <select id="res-room-guests-1" name="room_guests[]" required class="input-field">
                            <option value="">Select</option>
                            <option value="1">1 Guest</option>
                            <option value="2">2 Guests</option>
                            <option value="3">3 Guests</option>
                            <option value="4">4 Guests</option>
                            <option value="5+">5+ Guests</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <label for="res-notes" class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-charcoal-muted">Special Requests</label>
                  <textarea id="res-notes" name="notes" rows="3" class="textarea-field" placeholder="Any special requirements..."></textarea>
                </div>
                <button type="submit" class="btn-primary w-full border border-charcoal!">Submit Reservation</button>
                <div data-payment-link hidden class="mt-3"></div>
                <p class="mt-3 text-center text-xs text-charcoal-light">Your request will be sent directly to our reservations team.</p>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
