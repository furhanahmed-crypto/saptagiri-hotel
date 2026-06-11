<?php
$pageTitle = 'Rooms | Hotel Saptagiri — Comfortable Stay in Secunderabad';
$pageDescription = 'Standard, Deluxe, and Suite rooms at Hotel Saptagiri, Secunderabad. Well-maintained accommodations with Wi-Fi, AC, complimentary breakfast, and 24-hour check-in.';
$pageScripts = ['forms.js'];
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>

<main>
      <!-- Page Hero -->
      <section class="page-hero">
        <img src="assets/images/deluxe-room/deluxe-room-secunderabad.jpg" alt="" class="page-hero__bg" aria-hidden="true" />
        <div class="container-site page-hero__inner">
          <span class="section-label !text-gold-light">Rooms</span>
          <h1 class="page-hero__title">Experience Comfort and Convenience</h1>
          <p class="page-hero__subtitle">Relax in our welcoming, well-maintained, and thoughtfully furnished rooms in Secunderabad — designed for business travellers, families, and long stays.</p>
        </div>
      </section>

      <!-- Room Amenities -->
      <section class="border-b border-sand bg-white py-10">
        <div class="container-site">
          <div class="grid grid-cols-2 gap-6 md:grid-cols-4 lg:grid-cols-6">
            <div class="text-center">
              <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-linen text-accent">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/></svg>
              </div>
              <p class="mt-2 text-xs font-medium text-charcoal-muted">Complimentary Wi-Fi</p>
            </div>
            <div class="text-center">
              <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-linen text-accent">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </div>
              <p class="mt-2 text-xs font-medium text-charcoal-muted">Air Conditioning</p>
            </div>
            <div class="text-center">
              <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-linen text-accent">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.142A8 8 0 016.343 7.858M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </div>
              <p class="mt-2 text-xs font-medium text-charcoal-muted">Tea & Coffee Maker</p>
            </div>
            <div class="text-center">
              <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-linen text-accent">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
              </div>
              <p class="mt-2 text-xs font-medium text-charcoal-muted">In-Room Safe</p>
            </div>
            <div class="text-center">
              <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-linen text-accent">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
              </div>
              <p class="mt-2 text-xs font-medium text-charcoal-muted">Bottled Water Daily</p>
            </div>
            <div class="text-center">
              <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-linen text-accent">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </div>
              <p class="mt-2 text-xs font-medium text-charcoal-muted">24-Hour Check-In/Out</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Published Tariff -->
      <section class="section-padding bg-linen">
        <div class="container-site">
          <div class="mx-auto max-w-3xl text-center">
            <span class="section-label">Rates</span>
            <h2 class="section-title">Published Tariff</h2>
            <p class="section-subtitle">CP (Room + Breakfast) per night.</p>
          </div>
          <div class="tariff-table-wrap mx-auto mt-10 max-w-4xl">
            <table class="tariff-table">
              <thead>
                <tr>
                  <th>Room Category</th>
                  <th>Single (Rs.)</th>
                  <th>Double (Rs.)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="font-medium">Standard Room</td>
                  <td>3,200</td>
                  <td>3,800</td>
                </tr>
                <tr>
                  <td class="font-medium">Deluxe Room</td>
                  <td>4,200</td>
                  <td>4,800</td>
                </tr>
                <tr>
                  <td class="font-medium">Suite</td>
                  <td>—</td>
                  <td>6,000</td>
                </tr>
                <tr>
                  <td class="font-medium">Extra Person</td>
                  <td>—</td>
                  <td>1,000</td>
                </tr>

              </tbody>
              <tfoot>
                <tr>
                  <td colspan="3" class="text-center">Tariff includes complimentary breakfast (CP plan).</td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </section>

      <!-- Room Types -->
      <section class="section-padding bg-cream">
        <div class="container-site">
          <div class="mx-auto max-w-2xl text-center">
            <span class="section-label">Our Rooms</span>
            <h2 class="section-title">Standard, Deluxe & Suite Rooms</h2>
            <p class="section-subtitle">Our Standard Rooms, Deluxe Rooms, and Suite Rooms are designed to meet the needs of business travellers, families, and long stays — each with essential amenities for a seamless experience.</p>
          </div>

          <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <a href="room-suite.php" class="room-card group">
              <div class="overflow-hidden">
                <img src="assets/images/suite-room/hotel-saptagiri-suite-room.jpg" alt="Suite at Hotel Saptagiri" class="room-card__image" />
              </div>
              <div class="p-6">
                <span class="text-xs font-semibold uppercase tracking-[0.2em] text-gold">500 sq ft</span>
                <h3 class="mt-2 font-display text-2xl text-charcoal">Suite</h3>
                <p class="mt-2 text-sm leading-relaxed text-charcoal-muted">Spacious suite with sitting room, king bed, bath tub, and premium amenities for an elevated stay.</p>
                <p class="mt-4 font-display text-xl text-accent">₹ 6,000 <span class="font-body text-sm text-charcoal-muted">/ night (double)</span></p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold uppercase tracking-wider text-accent group-hover:text-accent-dark transition-colors">
                  View Details
                  <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </span>
              </div>
            </a>

            <a href="room-deluxe.php" class="room-card group">
              <div class="overflow-hidden">
                <img src="assets/images/deluxe-room/premium-deluxe-room-hotel-saptagiri-paradise-junction.jpg" alt="Deluxe room at Hotel Saptagiri" class="room-card__image" />
              </div>
              <div class="p-6">
                <span class="text-xs font-semibold uppercase tracking-[0.2em] text-gold">390 sq ft</span>
                <h3 class="mt-2 font-display text-2xl text-charcoal">Deluxe</h3>
                <p class="mt-2 text-sm leading-relaxed text-charcoal-muted">Deluxe rooms with king bed, executive desk, mini-fridge, and understated luxury.</p>
                <p class="mt-4 font-display text-xl text-accent">₹ 4,200 – 4,800 <span class="font-body text-sm text-charcoal-muted">/ night</span></p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold uppercase tracking-wider text-accent group-hover:text-accent-dark transition-colors">
                  View Details
                  <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </span>
              </div>
            </a>

            <a href="room-standard.php" class="room-card group md:col-span-2 md:max-w-md md:justify-self-center lg:col-span-1 lg:max-w-none">
              <div class="overflow-hidden">
                <img src="assets/images/rooms/standard-1024x683.jpg" alt="Standard room with twin beds at Hotel Saptagiri" class="room-card__image" />
              </div>
              <div class="p-6">
                <span class="text-xs font-semibold uppercase tracking-[0.2em] text-gold">270 sq ft</span>
                <h3 class="mt-2 font-display text-2xl text-charcoal">Standard Room</h3>
                <p class="mt-2 text-sm leading-relaxed text-charcoal-muted">Bright standard rooms with twin or queen beds and all essential comforts for a restful stay.</p>
                <p class="mt-4 font-display text-xl text-accent">₹ 3,200 – 3,800 <span class="font-body text-sm text-charcoal-muted">/ night</span></p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold uppercase tracking-wider text-accent group-hover:text-accent-dark transition-colors">
                  View Details
                  <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </span>
              </div>
            </a>
          </div>
        </div>
      </section>

      <!-- CTA -->
      <section class="bg-accent py-16 text-center text-white">
        <div class="container-site">
          <h2 class="font-display text-3xl md:text-4xl">Book Direct for the Best Rates</h2>
          <p class="mx-auto mt-4 max-w-lg text-white/80">Experience dependable comfort and convenience in Secunderabad. Contact us for group bookings and corporate rates.</p>
          <div class="mt-8 flex flex-wrap justify-center gap-4">
            <a href="reservation.php" class="btn-primary">Book Now</a>
            <a href="https://wa.me/919949466066" target="_blank" rel="noopener noreferrer" class="btn-secondary !border-white/30 !text-white hover:!border-gold hover:!text-gold-light">WhatsApp</a>
          </div>
        </div>
      </section>
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
