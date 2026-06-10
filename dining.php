<?php
$pageTitle = 'Swarn Restaurant | Dining at Hotel Saptagiri';
$pageDescription = 'Swarn Multi-Cuisine Vegetarian Restaurant at Hotel Saptagiri, Secunderabad. South Indian, North Indian, Chinese & Continental — à la carte and buffet dining.';
$useSwiper = true;
$pageScripts = ['lightbox.js', 'swiper-init.js', 'forms.js'];
$menuPages = 14;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>

<main>
      <section class="page-hero">
        <img src="assets/images/restaurant/Hotel-saptagiri-pure-vegetarian-restaurant.jpg" alt="" class="page-hero__bg" aria-hidden="true" />
        <div class="container-site page-hero__inner">
          <span class="section-label !text-gold-light">Dining / Restaurant</span>
          <h1 class="page-hero__title">Swarn Multi-Cuisine Vegetarian Restaurant</h1>
          <p class="page-hero__subtitle">Authentic South Indian, North Indian, Chinese, and Continental flavours in a fully air-conditioned, family-friendly setting.</p>
        </div>
      </section>

      <!-- Restaurant Overview -->
      <section class="section-padding bg-white">
        <div class="container-site">
          <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-20">
            <div>
              <span class="section-label">Swarn Restaurant</span>
              <h2 class="section-title">Authentic Flavours, Wholesome Dining</h2>
              <p class="section-subtitle">
                Enjoy authentic flavors and wholesome dining at Swarn, the popular multi-cuisine vegetarian restaurant located inside Hotel Saptagiri, Secunderabad. We serve a delicious array of South Indian, North Indian, Chinese, and Continental dishes, prepared by experienced chefs using quality fresh ingredients.
              </p>
              <p class="mt-4 text-base leading-relaxed text-charcoal-muted">
                Whether you prefer our diverse à la carte options or a hearty buffet for breakfast and lunch, our fully air-conditioned restaurant offers a pleasant, family-friendly atmosphere.
              </p>
              <div class="mt-8 grid gap-4 sm:grid-cols-2">
                <div class="rounded-lg bg-linen p-5">
                  <p class="font-display text-lg text-charcoal">Breakfast</p>
                  <p class="mt-1 text-sm text-charcoal-muted">7:00 AM – 10:30 AM</p>
                </div>
                <div class="rounded-lg bg-linen p-5">
                  <p class="font-display text-lg text-charcoal">Lunch & Dinner</p>
                  <p class="mt-1 text-sm text-charcoal-muted">12:00 PM – 10:30 PM</p>
                </div>
              </div>
            </div>
            <div data-menu-lightbox class="menu-preview">
              <span class="section-label">Restaurant Menu</span>
              <button type="button" data-menu-open class="menu-preview__trigger" aria-label="Open restaurant menu in fullscreen viewer">
                <div class="menu-preview__frame">
                  <img src="assets/images/menu/page-0001.jpg" alt="Restaurant menu page 1" class="menu-preview__cover" />
                  <div class="menu-preview__overlay">
                    <span class="menu-preview__badge">
                      <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                      Tap to view
                    </span>
                    <span class="menu-preview__title text-2xl text-white md:text-3xl">View Our Menu</span>
                    <span class="menu-preview__hint">Click to browse all 14 pages</span>
                  </div>
                </div>
              </button>
              <p class="mt-3 text-center text-xs text-charcoal-muted">Use arrow keys or on-screen buttons to flip through the menu.</p>
              <img src="assets/images/menu/page-0002.jpg" alt="Restaurant menu page 2" class="menu-preview__hidden" />
              <img src="assets/images/menu/page-0003.jpg" alt="Restaurant menu page 3" class="menu-preview__hidden" />
              <img src="assets/images/menu/page-0004.jpg" alt="Restaurant menu page 4" class="menu-preview__hidden" />
              <img src="assets/images/menu/page-0005.jpg" alt="Restaurant menu page 5" class="menu-preview__hidden" />
              <img src="assets/images/menu/page-0006.jpg" alt="Restaurant menu page 6" class="menu-preview__hidden" />
              <img src="assets/images/menu/page-0007.jpg" alt="Restaurant menu page 7" class="menu-preview__hidden" />
              <img src="assets/images/menu/page-0008.jpg" alt="Restaurant menu page 8" class="menu-preview__hidden" />
              <img src="assets/images/menu/page-0009.jpg" alt="Restaurant menu page 9" class="menu-preview__hidden" />
              <img src="assets/images/menu/page-0010.jpg" alt="Restaurant menu page 10" class="menu-preview__hidden" />
              <img src="assets/images/menu/page-0011.jpg" alt="Restaurant menu page 11" class="menu-preview__hidden" />
              <img src="assets/images/menu/page-0012.jpg" alt="Restaurant menu page 12" class="menu-preview__hidden" />
              <img src="assets/images/menu/page-0013.jpg" alt="Restaurant menu page 13" class="menu-preview__hidden" />
              <img src="assets/images/menu/page-0014.jpg" alt="Restaurant menu page 14" class="menu-preview__hidden" />
            </div>
          </div>
        </div>
      </section>

      <!-- Cuisine Types -->
      <section class="section-padding bg-linen">
        <div class="container-site">
          <div class="text-center">
            <span class="section-label">Cuisines</span>
            <h2 class="section-title">Flavours from Across India & Beyond</h2>
            <p class="section-subtitle mx-auto">Our chefs bring together regional specialities and international favourites on one menu.</p>
          </div>

          <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <article class="card p-6 text-center">
              <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-accent/10 font-display text-lg font-semibold text-accent">SI</div>
              <h3 class="mt-4 font-display text-xl text-charcoal">South Indian</h3>
              <p class="mt-2 text-sm text-charcoal-muted">Idli, dosa, vada, upma, and authentic filter coffee to start your day right.</p>
            </article>
            <article class="card p-6 text-center">
              <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-accent/10 font-display text-lg font-semibold text-accent">NI</div>
              <h3 class="mt-4 font-display text-xl text-charcoal">North Indian</h3>
              <p class="mt-2 text-sm text-charcoal-muted">Rich curries, tandoori breads, biryanis, and traditional thali meals.</p>
            </article>
            <article class="card p-6 text-center">
              <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-accent/10 font-display text-lg font-semibold text-accent">CN</div>
              <h3 class="mt-4 font-display text-xl text-charcoal">Chinese</h3>
              <p class="mt-2 text-sm text-charcoal-muted">Noodles, fried rice, Manchurian, and Indo-Chinese favourites.</p>
            </article>
            <article class="card p-6 text-center">
              <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-accent/10 font-display text-lg font-semibold text-accent">CT</div>
              <h3 class="mt-4 font-display text-xl text-charcoal">Continental</h3>
              <p class="mt-2 text-sm text-charcoal-muted">Pastas, sandwiches, salads, and light meals for international guests.</p>
            </article>
          </div>
        </div>
      </section>

      <!-- Dining Services -->
      <section class="section-padding bg-white">
        <div class="container-site">
          <span class="section-label">Special Features</span>
          <h2 class="section-title">More Than a Meal</h2>

          <div class="mt-10 grid gap-8 md:grid-cols-2">
            <article class="group overflow-hidden rounded-lg">
              <img src="assets/images/restaurant/family-restaurant-secunderabad.jpg" alt="Private dining room at Swarn Restaurant" class="aspect-[4/3] w-full object-cover transition-transform duration-500 group-hover:scale-105" />
              <div class="border border-t-0 border-sand p-6">
                <h3 class="font-display text-xl text-charcoal">Private Dining Room (PDR)</h3>
                <p class="mt-2 text-sm leading-relaxed text-charcoal-muted">Need a more exclusive setting? We offer a comfortable Private Dining Room that is perfect for private family celebrations, small gatherings, or business lunches.</p>
              </div>
            </article>
            <article class="group overflow-hidden rounded-lg">
              <img src="assets/images/restaurant/buffet-restaurant-secunderabad-thali.jpg" alt="Buffet dining at Swarn Restaurant" class="aspect-[4/3] w-full object-cover transition-transform duration-500 group-hover:scale-105" />
              <div class="border border-t-0 border-sand p-6">
                <h3 class="font-display text-xl text-charcoal">Buffet for Breakfast & Lunch</h3>
                <p class="mt-2 text-sm leading-relaxed text-charcoal-muted">Enjoy a hearty vegetarian buffet spread — fresh thalis and multi-cuisine favourites in our fully air-conditioned dining space.</p>
              </div>
            </article>
          </div>
          <p class="mt-10 max-w-3xl text-base leading-relaxed text-charcoal-muted">
            Whether it is a casual family dinner or a small private event, Swarn promises a reliable and satisfying culinary experience.
          </p>
        </div>
      </section>

      <!-- Gallery slider -->
      <section class="section-padding bg-linen overflow-hidden">
        <div class="container-site">
          <span class="section-label">Gallery</span>
          <h2 class="section-title">Dining Ambience</h2>
        </div>
        <div class="gallery-swiper swiper mt-8 !px-5 sm:!px-6 lg:!px-8">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="assets/images/restaurant/pure-vegetarian-restaurant.jpg" alt="Swarn restaurant interior" class="aspect-[4/3] w-full rounded-lg object-cover shadow-soft" /></div>
            <div class="swiper-slide"><img src="assets/images/restaurant/Fine-dining-hotel-saptagiri-jain-chinese-north-indian.jpg" alt="Fine dining at Swarn" class="aspect-[4/3] w-full rounded-lg object-cover shadow-soft" /></div>
            <div class="swiper-slide"><img src="assets/images/restaurant/Multi-cuisine-restaurant-secunderabad-railway-station.jpg" alt="Multi-cuisine dining" class="aspect-[4/3] w-full rounded-lg object-cover shadow-soft" /></div>
            <div class="swiper-slide"><img src="assets/images/restaurant/pure-veg-buffet-restaurant-jain-thali.jpg" alt="Vegetarian buffet at Swarn" class="aspect-[4/3] w-full rounded-lg object-cover shadow-soft" /></div>
          </div>
          <div class="swiper-button-prev !left-4"></div>
          <div class="swiper-button-next !right-4"></div>
        </div>
      </section>

      <!-- CTA -->
      <section class="bg-accent py-16 text-center text-white">
        <div class="container-site">
          <h2 class="font-display text-3xl md:text-4xl">Reserve a Table or Plan a Private Dining Experience</h2>
          <p class="mx-auto mt-4 max-w-lg text-white/80">Whether it is a casual family dinner or a small private event, Swarn promises a reliable and satisfying culinary experience.</p>
          <div class="mt-8 flex flex-wrap justify-center gap-4">
            <a href="contact.php" class="btn-primary">Contact Us</a>
            <a href="banquets.php" class="btn-secondary !border-white/30 !text-white hover:!border-gold hover:!text-gold-light">Banquet Catering</a>
          </div>
        </div>
      </section>
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
