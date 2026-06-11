<?php
$pageTitle = 'Deluxe | Hotel Saptagiri';
$pageDescription = 'Deluxe rooms at Hotel Saptagiri — 390 sq ft rooms with king bed, mini-fridge, and modern amenities in Secunderabad.';
$pageScripts = ['lightbox.js', 'room-gallery.js'];
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>

<main class="room-detail">
      <div class="room-detail__layout">
        <aside class="room-detail__panel">
          <nav class="room-detail__switcher" aria-label="Room types">
            <a href="room-suite.php" class="room-detail__switcher-link">Suite</a>
            <a href="room-deluxe.php" class="room-detail__switcher-link room-detail__switcher-link--active">Deluxe</a>
            <a href="room-standard.php" class="room-detail__switcher-link">Standard</a>
          </nav>

          <h1 class="room-detail__title">Deluxe</h1>
          <p class="room-detail__description">
            Relax in our deluxe rooms which are spacious and bright measuring 390 sft. The room comes with a king size bed, customized furniture, gel-infused pillow top mattresses topped with luxurious duvets, cozy couches, a magnificent hallway-dressing area, flat screen TV, mini-fridge, executive desk, wireless internet, all beautifully decorated with climate control at your fingertips and a modern, fully equipped bathroom. The rooms balance elegance and comfort to create a sophisticated and yet, understated luxury. Stay connected with your world without having to step out from the comfort of your room.
          </p>

          <hr class="room-detail__divider" />

          <h2 class="room-detail__facilities-title">Room Facilities</h2>
          <ul class="room-detail__facilities">
            <li class="room-detail__facility"><svg class="mt-0.5 h-4 w-4 shrink-0 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Body weighing machine</li>
            <li class="room-detail__facility"><svg class="mt-0.5 h-4 w-4 shrink-0 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>e-Lockers</li>
            <li class="room-detail__facility"><svg class="mt-0.5 h-4 w-4 shrink-0 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Electrical outlet</li>
            <li class="room-detail__facility"><svg class="mt-0.5 h-4 w-4 shrink-0 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Hair dryer (on request)</li>
            <li class="room-detail__facility"><svg class="mt-0.5 h-4 w-4 shrink-0 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Ironing (on request)</li>
            <li class="room-detail__facility"><svg class="mt-0.5 h-4 w-4 shrink-0 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Laundry service</li>
            <li class="room-detail__facility"><svg class="mt-0.5 h-4 w-4 shrink-0 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Non smoking rooms</li>
            <li class="room-detail__facility"><svg class="mt-0.5 h-4 w-4 shrink-0 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Tea &amp; coffee maker</li>
            <li class="room-detail__facility"><svg class="mt-0.5 h-4 w-4 shrink-0 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Travel desk</li>
            <li class="room-detail__facility"><svg class="mt-0.5 h-4 w-4 shrink-0 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Work desk with lamp</li>
          </ul>

          <hr class="room-detail__divider" />

          <div class="room-detail__price">₹ 4,200 – 4,800 <span>/ night</span></div>

          <div class="room-detail__actions">
            <a href="reservation.php" class="btn-primary">Book Now</a>
            <a href="tel:+919949466066" class="btn-secondary">Call Us</a>
          </div>

          <a href="rooms.php" class="room-detail__back">
            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            All Rooms
          </a>
        </aside>

        <div class="room-detail__gallery" data-room-gallery>
          <div class="room-detail__hero-wrap">
            <img class="room-detail__hero" data-room-main src="assets/images/deluxe-room/premium-deluxe-room-hotel-saptagiri-paradise-junction.jpg" alt="Deluxe room at Hotel Saptagiri" />
            <span class="room-detail__zoom-hint">Click to enlarge</span>
          </div>
          <div class="room-detail__thumbs" role="tablist" aria-label="Deluxe photos">
            <button type="button" class="room-detail__thumb is-active" data-room-thumb aria-selected="true" aria-label="Deluxe room view 1">
              <img src="assets/images/deluxe-room/premium-deluxe-room-hotel-saptagiri-paradise-junction.jpg" alt="Deluxe room at Hotel Saptagiri" />
            </button>
            <button type="button" class="room-detail__thumb" data-room-thumb aria-selected="false" aria-label="Deluxe room view 2">
              <img src="assets/images/deluxe-room/deluxe-room-secunderabad.jpg" alt="Deluxe room interior at Hotel Saptagiri" />
            </button>
            <button type="button" class="room-detail__thumb" data-room-thumb aria-selected="false" aria-label="Deluxe room view 3">
              <img src="assets/images/deluxe-room/Hotel-saptagiri-deluxe-room-secunderabad-railway-station.jpg" alt="Deluxe room bed at Hotel Saptagiri" />
            </button>
          </div>
        </div>
      </div>
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
