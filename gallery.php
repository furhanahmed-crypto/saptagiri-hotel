<?php
$pageTitle = 'Gallery | Hotel Saptagiri';
$pageDescription = 'Photo gallery of Hotel Saptagiri — rooms, dining, banquets, and hotel ambience in Secunderabad, Hyderabad.';
$useSwiper = true;
$pageScripts = ['lightbox.js', 'gallery-filter.js', 'swiper-init.js', 'forms.js'];
$galleryData = require __DIR__ . '/includes/gallery-data.php';
$galleryItems = $galleryData['items'];
$featuredMoments = $galleryData['featured'];
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>

<main>
      <section class="page-hero">
        <img src="assets/images/hotel/lobby.jpg" alt="" class="page-hero__bg" aria-hidden="true" />
        <div class="container-site page-hero__inner">
          <span class="section-label !text-gold-light">Visual Tour</span>
          <h1 class="page-hero__title">Gallery</h1>
          <p class="page-hero__subtitle">Explore our rooms, dining spaces, banquet halls, and hotel ambience.</p>
        </div>
      </section>

      <!-- Featured Slider -->
      <section class="section-padding bg-linen overflow-hidden">
        <div class="container-site">
          <span class="section-label">Highlights</span>
          <h2 class="section-title">Featured Moments</h2>
        </div>
        <div class="gallery-swiper swiper mt-8 !px-5 sm:!px-6 lg:!px-8">
          <div class="swiper-wrapper">
<?php foreach ($featuredMoments as $item) : ?>
            <div class="swiper-slide"><img src="<?php echo htmlspecialchars($item['path'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($item['caption'], ENT_QUOTES, 'UTF-8'); ?>" class="aspect-[16/10] w-full rounded-lg object-cover shadow-card" /></div>
<?php endforeach; ?>
          </div>
          <div class="swiper-button-prev !left-4"></div>
          <div class="swiper-button-next !right-4"></div>
        </div>
      </section>

      <!-- Filter tabs (visual only) -->
      <section class="section-padding bg-white">
        <div class="container-site">
          <div class="flex flex-wrap justify-center gap-3" role="tablist" aria-label="Gallery categories" data-gallery-filters>
            <button type="button" class="gallery-filter-btn gallery-filter-btn--active" role="tab" data-gallery-filter="all" aria-selected="true">All</button>
            <button type="button" class="gallery-filter-btn" role="tab" data-gallery-filter="hotel" aria-selected="false">Hotel</button>
            <button type="button" class="gallery-filter-btn" role="tab" data-gallery-filter="rooms" aria-selected="false">Rooms</button>
            <button type="button" class="gallery-filter-btn" role="tab" data-gallery-filter="dining" aria-selected="false">Dining</button>
            <button type="button" class="gallery-filter-btn" role="tab" data-gallery-filter="banquets" aria-selected="false">Banquet</button>
            <button type="button" class="gallery-filter-btn" role="tab" data-gallery-filter="boardrooms" aria-selected="false">Board Room &amp; Conference Halls</button>
          </div>

          <!-- Masonry-style grid — hotel images first -->
          <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-3" data-gallery-grid>
<?php foreach ($galleryItems as $index => $item) :
    $figureClass = 'gallery-card group';
    $mediaClass = 'gallery-card__media';
    if ($index === 0 && $item['category'] === 'hotel') {
        $figureClass .= ' sm:row-span-2';
        $mediaClass .= ' gallery-card__media--tall';
    }
?>
            <figure data-gallery-item data-category="<?php echo htmlspecialchars($item['category'], ENT_QUOTES, 'UTF-8'); ?>" class="<?php echo $figureClass; ?>">
              <div class="<?php echo $mediaClass; ?>">
                <img src="<?php echo htmlspecialchars($item['path'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($item['caption'], ENT_QUOTES, 'UTF-8'); ?>" class="gallery-card__image" />
                <div class="gallery-card__overlay"><figcaption class="gallery-card__caption"><?php echo htmlspecialchars($item['caption'], ENT_QUOTES, 'UTF-8'); ?></figcaption></div>
              </div>
            </figure>
<?php endforeach; ?>
          </div>
        </div>
      </section>

      <!-- CTA -->
      <section class="bg-accent py-16 text-center text-white">
        <div class="container-site">
          <h2 class="font-display text-3xl md:text-4xl">Experience It in Person</h2>
          <p class="mx-auto mt-4 max-w-lg text-white/80">Book a stay or schedule a venue visit to see our spaces firsthand.</p>
          <div class="mt-8 flex flex-wrap justify-center gap-4">
            <a href="reservation.php" class="btn-primary">Book Now</a>
            <a href="contact.php" class="btn-secondary !border-white/30 !text-white hover:!border-gold hover:!text-gold-light">Contact Us</a>
          </div>
        </div>
      </section>
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
