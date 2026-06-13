<?php
$pageTitle = 'Hotel Saptagiri | Comfortable Boutique Stay & Banquets in Secunderabad';
$pageDescription = 'Hotel Saptagiri, Secunderabad — Comfortable boutique stay & banquets in the heart of the city. Contemporary rooms, Swarn vegetarian restaurant, and event venues near Secunderabad Railway Station.';
$pageKeywords = 'Hotel Saptagiri, Secunderabad hotel, boutique hotel, banquet hall, Swarn restaurant, pure vegetarian, rooms';
$useSwiper = true;
$pageScripts = ['lightbox.js', 'swiper-init.js'];
$footerTagline = 'Comfortable boutique stay & banquets in the heart of Secunderabad — dependable comfort and convenience for business and leisure travellers.';
$showFloatingBtn = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>

<main>
  <!-- Hero -->
  <section class="hero-swiper swiper relative h-[85vh] min-h-[520px] max-h-[900px]">
    <div class="swiper-wrapper">
      <div class="swiper-slide relative">
        <img src="assets/images/hotel-common/about-us.png" alt="Hotel Saptagiri exterior at night on St. Mary's Road, Secunderabad" class="absolute inset-0 h-full w-full object-cover" />
        <div class="absolute inset-0 bg-overlay"></div>
        <div class="relative flex h-full items-end pb-16 md:items-center md:pb-0">
          <div class="container-site animate-fade-up">
            <p class="section-label !text-beige">Hotel Saptagiri, Secunderabad</p>
            <h1 class="font-display text-4xl font-medium leading-tight text-white md:text-6xl lg:text-7xl max-w-3xl">
              A Warm Welcome Awaits You
            </h1>
            <p class="mt-5 max-w-xl text-base leading-relaxed text-white/85 md:text-lg">
              Step into Hotel Saptagiri — a trusted landmark on St. Mary's Road where thoughtful hospitality, comfortable stays, and pure vegetarian dining come together for business travellers, families, and celebrations.
            </p>
            <div class="mt-8 flex flex-wrap gap-4">
              <a href="reservation.php" class="btn-primary">Book Your Stay</a>
              <a href="rooms.php" class="btn-on-dark-outline">Explore Rooms</a>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide relative">
        <img src="assets/images/hotel/Delux-Room1.jpg" alt="Grand banquet hall at Hotel Saptagiri" class="absolute inset-0 h-full w-full object-cover" />
        <div class="absolute inset-0 bg-overlay"></div>
        <div class="relative flex h-full items-end pb-16 md:items-center md:pb-0">
          <div class="container-site">
            <p class="section-label !text-beige">Rooms</p>
            <h2 class="font-display text-4xl font-medium leading-tight text-white md:text-6xl lg:text-7xl max-w-3xl">
              Experience Comfort and Convenience
            </h2>
            <p class="mt-5 max-w-xl text-base leading-relaxed text-white/85 md:text-lg">
              Standard, Deluxe, and Suite rooms designed for business travellers, families, and long stays — with complimentary breakfast and 24-hour check-in flexibility.
            </p>
            <div class="mt-8">
              <a href="rooms.php" class="btn-primary">View Room Types</a>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide relative">
        <img src="assets/images/banquet-hall/Hotel-saptagiri-banquet-hall.jpg" alt="Grand banquet hall at Hotel Saptagiri" class="absolute inset-0 h-full w-full object-cover" />
        <div class="absolute inset-0 bg-overlay"></div>
        <div class="relative flex h-full items-end pb-16 md:items-center md:pb-0">
          <div class="container-site">
            <p class="section-label !text-beige">Banquets & Board Rooms</p>
            <h2 class="font-display text-4xl font-medium leading-tight text-white md:text-6xl lg:text-7xl max-w-3xl">
              Versatile Event Venues and Meeting Spaces
            </h2>
            <p class="mt-5 max-w-xl text-base leading-relaxed text-white/85 md:text-lg">
              Banquet halls and boardrooms for weddings, receptions, conferences, and corporate meetings — accommodating 50 to 800 guests with dedicated event support.
            </p>
            <div class="mt-8">
              <a href="banquets.php" class="btn-primary">Plan Your Event</a>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide relative">
        <img src="assets/images/restaurant/Hotel-saptagiri-pure-vegetarian-restaurant.jpg" alt="Swarn Multi-Cuisine Restaurant at Hotel Saptagiri" class="absolute inset-0 h-full w-full object-cover" />
        <div class="absolute inset-0 bg-overlay"></div>
        <div class="relative flex h-full items-end pb-16 md:items-center md:pb-0">
          <div class="container-site">
            <p class="section-label !text-beige">Dining</p>
            <h2 class="font-display text-4xl font-medium leading-tight text-white md:text-6xl lg:text-7xl max-w-3xl">
              Swarn Multi-Cuisine Restaurant
            </h2>
            <p class="mt-5 max-w-xl text-base leading-relaxed text-white/85 md:text-lg">
              Pure vegetarian South & North Indian, Chinese, and Continental cuisine in a fully air-conditioned family restaurant.
            </p>
            <div class="mt-8">
              <a href="dining.php" class="btn-primary">Explore Dining</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination !bottom-8"></div>
  </section>

  <!-- About / Overview -->
  <section class="section-padding bg-white">
    <div class="container-site">
      <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-20">
        <div class="relative">
          <img src="assets/images/hotel-common/about-us-day.png" alt="Hotel Saptagiri exterior" class="aspect-[4/5] w-full rounded-lg object-cover shadow-card" />
        </div>
        <div>
          <span class="section-label">Why Stay With Us?</span>
          <h2 class="section-title">Welcome to Hotel Saptagiri, Secunderabad</h2>
          <p class="section-subtitle">
            Experience the perfect blend of modern comfort and warm hospitality at Hotel Saptagiri, a cozy boutique hotel in the heart of Secunderabad. Designed for both business and leisure travellers, we offer comfortable accommodations, quality vegetarian dining, and well-equipped event venues — all backed by an excellent location.
          </p>
          <ul class="mt-8 grid gap-4 sm:grid-cols-2">
            <li class="flex items-start gap-3">
              <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-accent/10 text-accent">
                <svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
              </span>
              <span class="text-sm text-charcoal-muted"><strong class="font-medium text-charcoal">Prime Connectivity:</strong> 0.5 km from Secunderabad Railway Station and 700 m from Parade Ground Metro Station.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-accent/10 text-accent">
                <svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
              </span>
              <span class="text-sm text-charcoal-muted"><strong class="font-medium text-charcoal">Contemporary Rooms:</strong> Standard, Deluxe, and Suite options with 24-hour check-in/out and complimentary breakfast.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-accent/10 text-accent">
                <svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
              </span>
              <span class="text-sm text-charcoal-muted"><strong class="font-medium text-charcoal">Quality Dining:</strong> Pure vegetarian South & North Indian, Chinese, and Continental at Swarn Restaurant.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-accent/10 text-accent">
                <svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
              </span>
              <span class="text-sm text-charcoal-muted"><strong class="font-medium text-charcoal">Versatile Venues:</strong> Boardrooms and 3 banquet halls hosting 50 to 800 guests for meetings, events, and weddings.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-accent/10 text-accent">
                <svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
              </span>
              <span class="text-sm text-charcoal-muted">High-speed Wi-Fi, secure in-room safes, and hassle-free valet car parking.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-accent/10 text-accent">
                <svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
              </span>
              <span class="text-sm text-charcoal-muted"><strong class="font-medium text-charcoal">Book direct for the best rates!</strong> Dependable comfort and convenience in Secunderabad.</span>
            </li>
          </ul>
          <a href="contact.php" class="btn-primary mt-10 border border-charcoal!">Get in Touch</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Rooms -->
  <section class="section-padding bg-linen">
    <div class="container-site">
      <div class="flex flex-col items-start justify-between gap-6 md:flex-row md:items-end">
        <div>
          <span class="section-label">Rooms</span>
          <h2 class="section-title">Experience Comfort and Convenience</h2>
          <p class="section-subtitle">Relax in our welcoming, well-maintained, and thoughtfully furnished rooms — Standard, Deluxe, and Suite options for business travellers, families, and long stays.</p>
        </div>
        <a href="rooms.php" class="btn-secondary shrink-0">View All Rooms</a>
      </div>

      <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        <article class="card group">
          <div class="overflow-hidden">
            <img src="assets/images/suite-room/hotel-saptagiri-suite-room-overview-img-1.jpg" alt="Suite at Hotel Saptagiri" class="card-image" />
          </div>
          <div class="p-6">
            <h3 class="font-display text-2xl text-charcoal">Suite</h3>
            <p class="mt-2 text-sm leading-relaxed text-charcoal-muted">500 sq ft suite with sitting room, king bed, bath tub, and premium amenities.</p>
            <div class="mt-4 flex flex-wrap gap-2">
              <span class="rounded-full bg-beige px-3 py-1 text-xs text-charcoal-muted">500 sq ft</span>
              <span class="rounded-full bg-beige px-3 py-1 text-xs text-charcoal-muted">King Bed</span>
              <span class="rounded-full bg-beige px-3 py-1 text-xs text-charcoal-muted">Bath Tub</span>
            </div>
            <a href="room-suite.php" class="mt-5 inline-flex items-center gap-1 text-sm font-semibold uppercase tracking-wider text-accent hover:text-accent-dark transition-colors">
              View Room
              <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </a>
          </div>
        </article>

        <article class="card group">
          <div class="overflow-hidden">
            <img src="assets/images/deluxe-room/deluxe-room-secunderabad-img-2.jpg" alt="Deluxe room at Hotel Saptagiri" class="card-image" />
          </div>
          <div class="p-6">
            <h3 class="font-display text-2xl text-charcoal">Deluxe</h3>
            <p class="mt-2 text-sm leading-relaxed text-charcoal-muted">390 sq ft refurbished rooms with king bed, mini-fridge, and executive desk.</p>
            <div class="mt-4 flex flex-wrap gap-2">
              <span class="rounded-full bg-beige px-3 py-1 text-xs text-charcoal-muted">390 sq ft</span>
              <span class="rounded-full bg-beige px-3 py-1 text-xs text-charcoal-muted">King Bed</span>
              <span class="rounded-full bg-beige px-3 py-1 text-xs text-charcoal-muted">Executive Desk</span>
            </div>
            <a href="room-deluxe.php" class="mt-5 inline-flex items-center gap-1 text-sm font-semibold uppercase tracking-wider text-accent hover:text-accent-dark transition-colors">
              View Room
              <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </a>
          </div>
        </article>

        <article class="card group md:col-span-2 lg:col-span-1">
          <div class="overflow-hidden">
            <img src="assets/images/standard-room/hotel-saptagiri-standard-room-passport-office-img-1.jpg" alt="Standard room at Hotel Saptagiri" class="card-image" />
          </div>
          <div class="p-6">
            <h3 class="font-display text-2xl text-charcoal">Standard Room</h3>
            <p class="mt-2 text-sm leading-relaxed text-charcoal-muted">270 sq ft rooms with twin or queen size beds and all essential comforts.</p>
            <div class="mt-4 flex flex-wrap gap-2">
              <span class="rounded-full bg-beige px-3 py-1 text-xs text-charcoal-muted">270 sq ft</span>
              <span class="rounded-full bg-beige px-3 py-1 text-xs text-charcoal-muted">Twin or Queen Size Bed</span>
              <span class="rounded-full bg-beige px-3 py-1 text-xs text-charcoal-muted">Wi-Fi</span>
            </div>
            <a href="room-standard.php" class="mt-5 inline-flex items-center gap-1 text-sm font-semibold uppercase tracking-wider text-accent hover:text-accent-dark transition-colors">
              View Room
              <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Dining Highlights -->
  <section class="section-padding bg-white">
    <div class="container-site">
      <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-20">
        <div class="order-2 lg:order-1">
          <span class="section-label">Dining</span>
          <h2 class="section-title">Swarn Multi-Cuisine Vegetarian Restaurant</h2>
          <p class="section-subtitle">
            Enjoy authentic flavours at Swarn — South Indian, North Indian, Chinese, and Continental dishes prepared by experienced chefs using quality fresh ingredients in our fully air-conditioned restaurant.
          </p>
          <div class="mt-8 space-y-5">
            <div class="flex gap-4 rounded-lg bg-linen p-5">
              <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-accent/10 font-display text-xl text-accent">01</div>
              <div>
                <h3 class="font-display text-xl text-charcoal">À La Carte & Buffet</h3>
                <p class="mt-1 text-sm text-charcoal-muted">Choose from diverse à la carte options or enjoy a hearty buffet for breakfast and lunch in a pleasant, family-friendly atmosphere.</p>
              </div>
            </div>
            <div class="flex gap-4 rounded-lg bg-linen p-5">
              <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-accent/10 font-display text-xl text-accent">02</div>
              <div>
                <h3 class="font-display text-xl text-charcoal">Private Dining Room</h3>
                <p class="mt-1 text-sm text-charcoal-muted">A comfortable Private Dining Room perfect for family celebrations, small gatherings, or business lunches.</p>
              </div>
            </div>
            <div class="flex gap-4 rounded-lg bg-linen p-5">
              <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-accent/10 font-display text-xl text-accent">03</div>
              <div>
                <h3 class="font-display text-xl text-charcoal">Buffet for Breakfast & Lunch</h3>
                <p class="mt-1 text-sm text-charcoal-muted">A hearty vegetarian buffet spread for breakfast and lunch — fresh, flavourful, and perfect for families.</p>
              </div>
            </div>
          </div>
          <a href="dining.php" class="btn-primary mt-8">Explore Dining</a>
        </div>
        <div class="order-1 lg:order-2">
          <div class="relative">
            <img src="assets/images/restaurant/pure-vegetarian-restaurant.jpg" alt="Swarn Multi-Cuisine Restaurant at Hotel Saptagiri" class="aspect-square w-full rounded-lg object-cover shadow-card" />
            <img src="assets/images/swarn-logo.jpeg" alt="Swarn Fine Vegetarian" class="absolute left-4 top-4 w-24 rounded-md shadow-elevated sm:w-28 md:w-32" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Banquets Preview -->
  <section class="section-padding bg-accent text-white">
    <div class="container-site">
      <div class="text-center">
        <span class="section-label !text-gold-light">Banquets & Board Rooms</span>
        <h2 class="font-display text-3xl text-white md:text-4xl lg:text-5xl">Versatile Event Venues and Meeting Spaces</h2>
        <p class="mx-auto mt-4 max-w-2xl text-base leading-relaxed text-white/80 md:text-lg">
          Spacious banquet halls and event spaces in Secunderabad for weddings, receptions, birthday celebrations, conferences, and corporate meetings — accommodating 50 to 800 guests with a dedicated team.
        </p>
      </div>

      <div class="mx-auto mt-10 max-w-5xl overflow-hidden rounded-lg shadow-elevated">
        <img src="assets/images/banquet-hall/Hotel-saptagiri-banquet-hall.jpg" alt="Banquet hall at Hotel Saptagiri" class="aspect-[21/9] w-full object-cover" />
      </div>

      <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
        <div class="rounded-lg bg-white/10 p-6 backdrop-blur-sm transition-all duration-300 hover:bg-white/15">
          <h3 class="font-display text-2xl">Sannidhanam</h3>
          <p class="mt-1 text-sm text-gold-light">300 – 600 guests</p>
          <p class="mt-3 text-sm leading-relaxed text-white/75">Ideal for weddings, large receptions, and major celebrations.</p>
        </div>
        <div class="rounded-lg bg-white/10 p-6 backdrop-blur-sm transition-all duration-300 hover:bg-white/15">
          <h3 class="font-display text-2xl">Srinivasam</h3>
          <p class="mt-1 text-sm text-gold-light">Up to 200 guests</p>
          <p class="mt-3 text-sm leading-relaxed text-white/75">Perfect for engagements, anniversaries, and birthday parties.</p>
        </div>
        <div class="rounded-lg bg-white/10 p-6 backdrop-blur-sm transition-all duration-300 hover:bg-white/15">
          <h3 class="font-display text-2xl">Kousthubham</h3>
          <p class="mt-1 text-sm text-gold-light">100 – 125 guests</p>
          <p class="mt-3 text-sm leading-relaxed text-white/75">Great for mid-sized gatherings, kitty parties, and get-togethers.</p>
        </div>
        <div class="rounded-lg bg-white/10 p-6 backdrop-blur-sm transition-all duration-300 hover:bg-white/15">
          <h3 class="font-display text-2xl">Conference & Board Room</h3>
          <p class="mt-1 text-sm text-gold-light">16 – 60 members</p>
          <p class="mt-3 text-sm leading-relaxed text-white/75">Quiet, functional spaces with Wi-Fi and audio-visual support for business discussions and corporate seminars.</p>
        </div>
      </div>

      <div class="mt-10 text-center">
        <a href="banquets.php" class="btn-primary">View Banquet Details</a>
      </div>
    </div>
  </section>

  <!-- Gallery Preview -->
  <section class="section-padding bg-linen overflow-hidden">
    <div class="container-site">
      <div class="flex flex-col items-start justify-between gap-6 md:flex-row md:items-end">
        <div>
          <span class="section-label">Gallery</span>
          <h2 class="section-title">A Glimpse of Saptagiri</h2>
          <p class="section-subtitle">Explore our rooms, dining spaces, and celebration venues.</p>
        </div>
        <a href="gallery.php" class="btn-secondary shrink-0">Full Gallery</a>
      </div>
    </div>

    <div class="gallery-swiper swiper mt-10 !px-5 sm:!px-6 lg:!px-8">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="assets/images/hotel-common/Hotel_Saptagiri_Reception.png" alt="Hotel reception and lobby" class="aspect-[4/3] w-full rounded-lg object-cover shadow-soft" />
        </div>
        <div class="swiper-slide">
          <img src="assets/images/deluxe-room/deluxe-room-secunderabad-img-2.jpg" alt="Deluxe room at Hotel Saptagiri" class="aspect-[4/3] w-full rounded-lg object-cover shadow-soft" />
        </div>
        <div class="swiper-slide">
          <img src="assets/images/hotel/DSC04218.jpg" alt="Banquet setup" class="aspect-[4/3] w-full rounded-lg object-cover shadow-soft" />
        </div>
        <div class="swiper-slide">
          <img src="assets/images/restaurant/Hotel-saptagiri-pure-vegetarian-restaurant.jpg" alt="Swarn restaurant dining" class="aspect-[4/3] w-full rounded-lg object-cover shadow-soft" />
        </div>
        <div class="swiper-slide">
          <img src="assets/images/hotel/DSC03798.jpg" alt="Hotel Saptagiri exterior" class="aspect-[4/3] w-full rounded-lg object-cover shadow-soft" />
        </div>
      </div>
      <div class="swiper-button-prev !left-4"></div>
      <div class="swiper-button-next !right-4"></div>
    </div>
  </section>

  <!-- Booking CTA -->
  <section class="relative py-20 md:py-28">
    <img src="assets/images/hotel/DSC08735_stitch.jpg" alt="" class="absolute inset-0 h-full w-full object-cover" aria-hidden="true" />
    <div class="absolute inset-0 bg-overlay"></div>
    <div class="container-site relative text-center">
      <span class="section-label !text-beige">Reserve Your Stay</span>
      <h2 class="font-display text-3xl text-white md:text-5xl">Ready to Experience Saptagiri?</h2>
      <p class="mx-auto mt-4 max-w-xl text-base leading-relaxed text-white/85 md:text-lg">
        Experience dependable comfort and convenience in Secunderabad.
      </p>
      <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
        <a href="reservation.php" class="btn-primary">Book Now</a>
        <a href="tel:+919949466066" class="btn-on-dark-outline">
          Call Us
        </a>
        <a href="https://wa.me/919949466066" target="_blank" rel="noopener noreferrer" class="btn-on-dark-outline">
          WhatsApp Us
        </a>
      </div>
    </div>
  </section>

  <!-- Contact / Location -->
  <section class="section-padding bg-white">
    <div class="container-site">
      <div class="grid gap-12 lg:grid-cols-2">
        <div>
          <span class="section-label">Location</span>
          <h2 class="section-title">Find Us in Secunderabad</h2>
          <p class="section-subtitle">Conveniently located on St. Mary's Road Opposite to Passport Office — minutes from the railway station and major business centres.</p>

          <div class="mt-8 space-y-6">
            <div class="flex gap-4">
              <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-beige text-accent">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
              </div>
              <div>
                <h3 class="font-display text-lg text-charcoal">Address</h3>
                <p class="mt-1 text-sm leading-relaxed text-charcoal-muted">9-1-220, St. Mary's Road Opposite to Passport Office,<br />Secunderabad, Hyderabad – 500003</p>
              </div>
            </div>
            <div class="flex gap-4">
              <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-beige text-accent">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
              </div>
              <div>
                <h3 class="font-display text-lg text-charcoal">Landline</h3>
                <a href="tel:+914066677788" class="mt-1 block text-sm text-accent hover:text-accent-dark">+91 40 666 777 88</a>
              </div>
            </div>
            <div class="flex gap-4">
              <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-beige text-accent">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
              </div>
              <div>
                <h3 class="font-display text-lg text-charcoal">WhatsApp</h3>
                <a href="tel:+919949466066" class="mt-1 block text-sm text-accent hover:text-accent-dark">+91 99494 66066</a>
              </div>
            </div>
            <div class="flex gap-4">
              <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-beige text-accent">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
              </div>
              <div>
                <h3 class="font-display text-lg text-charcoal">Email</h3>
                <a href="mailto:info@hotelsaptagiri.in" class="mt-1 block text-sm text-accent hover:text-accent-dark">info@hotelsaptagiri.in</a>
                <a href="mailto:reservation@hotelsaptagiri.in" class="mt-1 block text-sm text-accent hover:text-accent-dark">reservation@hotelsaptagiri.in</a>
              </div>
            </div>
          </div>

          <ul class="mt-8 space-y-2 text-sm text-charcoal-muted">
            <li>• 0.5 km from Secunderabad Railway Station</li>
            <li>• 700 m from Parade Ground Metro Station</li>
            <li>• 35 km from Rajiv Gandhi International Airport</li>
          </ul>
        </div>

        <div class="overflow-hidden rounded-lg shadow-card">
          <iframe
            title="Hotel Saptagiri location map"
            src="https://maps.google.com/maps?q=Hotel+Saptagiri+St+Marys+Road+Secunderabad&t=&z=15&ie=UTF8&iwloc=&output=embed"
            class="h-[400px] w-full border-0 lg:h-full min-h-[400px]"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>