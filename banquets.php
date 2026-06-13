<?php
$pageTitle = 'Banquets & Board Rooms | Hotel Saptagiri';
$pageDescription = 'Banquet halls and board rooms at Hotel Saptagiri, Secunderabad. Sannidhanam, Srinivasam, Kousthubham — weddings and events for 50 to 800 guests.';
$useSwiper = false;
$pageScripts = ['lightbox.js', 'forms.js'];
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>

<main>
      <section class="page-hero">
        <img src="assets/images/banquet-hall/Hotel-saptagiri-banquet-hall.jpg" alt="" class="page-hero__bg" aria-hidden="true" />
        <div class="container-site page-hero__inner">
          <span class="section-label !text-gold-light">Banquets & Board Rooms</span>
          <h1 class="page-hero__title">Versatile Event Venues and Meeting Spaces</h1>
          <p class="page-hero__subtitle">Spacious banquet halls and event spaces in Secunderabad for weddings, receptions, celebrations, conferences, and corporate meetings.</p>
        </div>
      </section>

      <!-- Intro -->
      <section class="section-padding bg-white">
        <div class="container-site max-w-4xl text-center">
          <span class="section-label">Our Event Spaces</span>
          <h2 class="section-title">Banquets, Conferences & Celebrations</h2>
          <p class="section-subtitle mx-auto">
            Hotel Saptagiri offers spacious banquet halls and event spaces in Secunderabad ideal for weddings, receptions, birthday celebrations, conferences, and corporate meetings. Our event spaces accommodate anywhere from 50 to 800 guests, supported by a dedicated team to ensure smooth execution.
          </p>
          <p class="mt-4 text-base leading-relaxed text-charcoal-muted">
            All events are complemented by reliable audio-visual technology and a delicious multi-cuisine vegetarian menu.
          </p>
        </div>
      </section>

      <!-- Banquet Halls Grid -->
      <section class="section-padding bg-linen">
        <div class="container-site">
          <span class="section-label">Our Halls</span>
          <h2 class="section-title">Banquet & Conference Spaces</h2>

          <div class="mt-10 grid gap-8 sm:grid-cols-2 lg:grid-cols-3" data-banquet-grid>
            <article class="card !flex !flex-col">
              <img src="assets/images/banquet-hall/img-1.jpeg" alt="Sannidhanam banquet hall" class="aspect-[4/3] w-full object-cover" />
              <div class="flex flex-1 flex-col p-6">
                <h3 class="font-display text-2xl text-charcoal">Sannidhanam</h3>
                <p class="mt-1 text-sm font-medium text-gold">Capacity: 300 – 600 guests</p>
                <p class="mt-3 flex-1 text-sm leading-relaxed text-charcoal-muted">Ideal for weddings, large receptions, and major celebrations.</p>
                <a href="contact.php" class="mt-5 text-sm font-semibold uppercase tracking-wider text-accent hover:text-accent-dark">Enquire Now →</a>
              </div>
            </article>
            <article class="card !flex !flex-col">
              <img src="assets/images/banquet-hall/img-2.jpeg" alt="Srinivasam banquet hall" class="aspect-[4/3] w-full object-cover" />
              <div class="flex flex-1 flex-col p-6">
                <h3 class="font-display text-2xl text-charcoal">Srinivasam</h3>
                <p class="mt-1 text-sm font-medium text-gold">Capacity: up to 200 guests</p>
                <p class="mt-3 flex-1 text-sm leading-relaxed text-charcoal-muted">Perfect for engagements, anniversaries, and birthday parties.</p>
                <a href="contact.php" class="mt-5 text-sm font-semibold uppercase tracking-wider text-accent hover:text-accent-dark">Enquire Now →</a>
              </div>
            </article>
            <article class="card !flex !flex-col">
              <img src="assets/images/banquet-hall/img-3.jpeg" alt="Kousthubham banquet hall" class="aspect-[4/3] w-full object-cover" />
              <div class="flex flex-1 flex-col p-6">
                <h3 class="font-display text-2xl text-charcoal">Kousthubham</h3>
                <p class="mt-1 text-sm font-medium text-gold">Capacity: 100 – 125 guests</p>
                <p class="mt-3 flex-1 text-sm leading-relaxed text-charcoal-muted">Great for mid-sized gatherings, kitty parties, and get-togethers.</p>
                <a href="contact.php" class="mt-5 text-sm font-semibold uppercase tracking-wider text-accent hover:text-accent-dark">Enquire Now →</a>
              </div>
            </article>
            <article class="card !flex !flex-col">
              <img src="assets/images/banquet-hall/conference-hall-secunderabad.jpg" alt="Conference hall" class="aspect-[4/3] w-full object-cover" />
              <div class="flex flex-1 flex-col p-6">
                <h3 class="font-display text-2xl text-charcoal">Conference Hall</h3>
                <p class="mt-1 text-sm font-medium text-gold">Capacity: up to 60 members</p>
                <p class="mt-3 flex-1 text-sm leading-relaxed text-charcoal-muted">Decisively functional, quiet spaces equipped with Wi-Fi and audio-visual support for business discussions and corporate seminars.</p>
                <a href="contact.php" class="mt-5 text-sm font-semibold uppercase tracking-wider text-accent hover:text-accent-dark">Enquire Now →</a>
              </div>
            </article>
            <article class="card !flex !flex-col">
              <img src="assets/images/board-room/Corporate-board-room-Secunderabad.jpg" alt="Board room" class="aspect-[4/3] w-full object-cover" />
              <div class="flex flex-1 flex-col p-6">
                <h3 class="font-display text-2xl text-charcoal">Board Room</h3>
                <p class="mt-1 text-sm font-medium text-gold">Capacity: up to 16 members</p>
                <p class="mt-3 flex-1 text-sm leading-relaxed text-charcoal-muted">An exclusive space for executive meetings, board discussions, and confidential corporate sessions.</p>
                <a href="contact.php" class="mt-5 text-sm font-semibold uppercase tracking-wider text-accent hover:text-accent-dark">Enquire Now →</a>
              </div>
            </article>
            <a href="gallery.php?filter=boardrooms" class="card group !flex !flex-col overflow-hidden transition-transform hover:-translate-y-1">
              <img src="assets/images/board-room/Business-meeting-room-hotel-saptagiri.jpg" alt="Conference and board room spaces at Hotel Saptagiri" class="aspect-[4/3] w-full object-cover transition-transform duration-500 group-hover:scale-105" />
              <div class="flex flex-1 flex-col bg-accent p-6 text-white">
                <h3 class="font-display text-2xl">View More in Gallery</h3>
                <p class="mt-3 flex-1 text-sm leading-relaxed text-white/85">Browse Board Room, Conference Hall, and Banquet images to explore our event spaces in detail.</p>
                <span class="mt-5 inline-flex items-center gap-1 text-sm font-semibold uppercase tracking-wider text-gold-light transition-colors group-hover:text-white">
                  Browse Gallery
                  <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </span>
              </div>
            </a>
          </div>
        </div>
      </section>

      <!-- Features -->
      <section class="section-padding bg-white">
        <div class="container-site">
          <div class="grid gap-12 lg:grid-cols-2 lg:gap-20">
            <div>
              <span class="section-label">Event Services</span>
              <h2 class="section-title">Everything You Need, Under One Roof</h2>
              <ul class="mt-8 space-y-5">
                <li class="flex gap-4">
                  <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-accent/10 text-accent">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                  </span>
                  <div>
                    <h3 class="font-display text-lg text-charcoal">Audio-Visual Technology</h3>
                    <p class="mt-1 text-sm text-charcoal-muted">Reliable AV equipment and support for presentations, seminars, and celebrations.</p>
                  </div>
                </li>
                <li class="flex gap-4">
                  <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-accent/10 text-accent">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                  </span>
                  <div>
                    <h3 class="font-display text-lg text-charcoal">Multi-Cuisine Vegetarian Menu</h3>
                    <p class="mt-1 text-sm text-charcoal-muted">Delicious vegetarian catering for weddings, conferences, and private events.</p>
                  </div>
                </li>
                <li class="flex gap-4">
                  <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-accent/10 text-accent">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                  </span>
                  <div>
                    <h3 class="font-display text-lg text-charcoal">Guest Accommodation</h3>
                    <p class="mt-1 text-sm text-charcoal-muted">81 rooms available for wedding guests and conference delegates.</p>
                  </div>
                </li>
                <li class="flex gap-4">
                  <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-accent/10 text-accent">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                  </span>
                  <div>
                    <h3 class="font-display text-lg text-charcoal">Professional Event Team</h3>
                    <p class="mt-1 text-sm text-charcoal-muted">Dedicated support from planning to execution for seamless events.</p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="rounded-lg bg-linen p-8 md:p-10">
              <h3 class="font-display text-2xl text-charcoal">Location Advantage</h3>
              <ul class="mt-6 space-y-4">
                <li class="flex items-center gap-3 border-b border-sand pb-4">
                  <span class="font-display text-3xl text-accent">0.5</span>
                  <span class="text-sm text-charcoal-muted">km from Secunderabad Railway Station</span>
                </li>
                <li class="flex items-center gap-3 border-b border-sand pb-4">
                  <span class="font-display text-3xl text-accent">8</span>
                  <span class="text-sm text-charcoal-muted">km from Hyderabad Railway Station</span>
                </li>
                <li class="flex items-center gap-3 border-b border-sand pb-4">
                  <span class="font-display text-3xl text-accent">35</span>
                  <span class="text-sm text-charcoal-muted">km from Rajiv Gandhi International Airport</span>
                </li>
                <li class="flex items-center gap-3">
                  <span class="font-display text-3xl text-accent">30</span>
                  <span class="text-sm text-charcoal-muted">min drive to major business & shopping centres</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA -->
      <section class="relative py-20 md:py-28">
        <img src="assets/images/banquet-hall/Pure-Veg-banquet-venue-hotel-saptagiri.jpg" alt="" class="absolute inset-0 h-full w-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-overlay"></div>
        <div class="container-site relative text-center">
          <h2 class="font-display text-3xl text-white md:text-5xl">Plan Your Next Celebration</h2>
          <p class="mx-auto mt-4 max-w-xl text-white/85">Contact our events team for venue availability, vegetarian catering menus, and custom packages for 50 to 800 guests.</p>
          <div class="mt-8 flex flex-wrap justify-center gap-4">
            <a href="contact.php" class="btn-primary">Enquire About Events</a>
            <a href="tel:+919949466066" class="btn-secondary !border-white/30 !text-white hover:!border-gold hover:!text-gold-light">Call Us</a>
          </div>
        </div>
      </section>
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
