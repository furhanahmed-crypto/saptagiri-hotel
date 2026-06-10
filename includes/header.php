    <!-- Header -->
    <header class="site-header sticky top-0 z-50 bg-cream/90 backdrop-blur-sm">
      <div class="container-site flex items-center justify-between py-2 lg:py-2.5">
        <a href="index.php" class="site-logo" aria-label="Hotel Saptagiri — Home">
          <img
            src="assets/images/saptagiri-hotel-logo.png"
            alt="Hotel Saptagiri"
            class="site-logo__image"
            width="226"
            height="122"
          />
        </a>

        <nav class="hidden items-center gap-8 lg:flex" aria-label="Main navigation">
          <a href="index.php" data-nav-link class="nav-link">Home</a>
          <a href="rooms.php" data-nav-link class="nav-link">Rooms</a>
          <a href="dining.php" data-nav-link class="nav-link">Dining</a>
          <a href="banquets.php" data-nav-link class="nav-link">Banquets</a>
          <a href="gallery.php" data-nav-link class="nav-link">Gallery</a>
          <a href="reservation.php" data-nav-link class="nav-link">Reservation</a>
          <a href="contact.php" data-nav-link class="nav-link">Contact</a>
        </nav>

        <div class="hidden items-center gap-3 lg:flex">
          <a href="tel:+919949466066" class="btn-secondary !py-2.5 !px-4 !text-xs">
            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            Call Us
          </a>
          <a href="reservation.php" class="btn-primary !py-2.5 !px-5 !text-xs">Book Now</a>
        </div>

        <button data-menu-toggle class="flex h-10 w-10 items-center justify-center rounded-md border border-sand text-charcoal lg:hidden" aria-label="Open menu">
          <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
      </div>
    </header>

    <!-- Mobile menu -->
    <div class="mobile-overlay fixed inset-0 z-[60] bg-overlay" aria-hidden="true"></div>
    <aside class="mobile-menu fixed right-0 top-0 z-[70] flex h-full w-[min(100%,320px)] flex-col bg-cream shadow-elevated" aria-label="Mobile navigation">
      <div class="flex items-center justify-between border-b border-sand p-5">
        <span class="font-display text-xl text-charcoal">Menu</span>
        <button data-menu-close class="flex h-9 w-9 items-center justify-center rounded-md text-charcoal hover:bg-beige" aria-label="Close menu">
          <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
      </div>
      <nav class="flex flex-1 flex-col gap-1 p-5">
        <a href="index.php" data-nav-link class="rounded-md px-4 py-3 text-sm font-medium uppercase tracking-wider text-charcoal hover:bg-beige">Home</a>
        <a href="rooms.php" data-nav-link class="rounded-md px-4 py-3 text-sm font-medium uppercase tracking-wider text-charcoal hover:bg-beige">Rooms</a>
        <a href="dining.php" data-nav-link class="rounded-md px-4 py-3 text-sm font-medium uppercase tracking-wider text-charcoal hover:bg-beige">Dining</a>
        <a href="banquets.php" data-nav-link class="rounded-md px-4 py-3 text-sm font-medium uppercase tracking-wider text-charcoal hover:bg-beige">Banquets</a>
        <a href="gallery.php" data-nav-link class="rounded-md px-4 py-3 text-sm font-medium uppercase tracking-wider text-charcoal hover:bg-beige">Gallery</a>
        <a href="reservation.php" data-nav-link class="rounded-md px-4 py-3 text-sm font-medium uppercase tracking-wider text-charcoal hover:bg-beige">Reservation</a>
        <a href="contact.php" data-nav-link class="rounded-md px-4 py-3 text-sm font-medium uppercase tracking-wider text-charcoal hover:bg-beige">Contact</a>
      </nav>
      <div class="space-y-3 border-t border-sand p-5">
        <a href="tel:+919949466066" class="btn-secondary w-full !text-xs">+91 99494 66066</a>
        <a href="reservation.php" class="btn-primary w-full !text-xs">Book Now</a>
      </div>
    </aside>
