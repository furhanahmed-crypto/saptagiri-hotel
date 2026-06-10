<?php require __DIR__ . '/init.php'; ?>

    <!-- Footer -->
    <footer class="bg-charcoal text-white">
      <div class="container-site py-16">
        <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">
          <div>
            <a href="index.php" class="site-logo site-logo--footer inline-block" aria-label="Hotel Saptagiri — Home">
              <img src="assets/images/saptagiri-hotel-logo.png" alt="Hotel Saptagiri" class="site-logo__image" width="226" height="122" />
            </a>
            <p class="mt-3 text-sm leading-relaxed text-white/65">
              <?php echo htmlspecialchars($footerTagline, ENT_QUOTES, 'UTF-8'); ?>
            </p>
          </div>
          <div>
            <h4 class="text-xs font-semibold uppercase tracking-[0.2em] text-gold">Quick Links</h4>
            <ul class="mt-4 space-y-2">
              <li><a href="index.php" class="text-sm text-white/65 transition-colors hover:text-white">Home</a></li>
              <li><a href="rooms.php" class="text-sm text-white/65 transition-colors hover:text-white">Rooms</a></li>
              <li><a href="dining.php" class="text-sm text-white/65 transition-colors hover:text-white">Dining</a></li>
              <li><a href="banquets.php" class="text-sm text-white/65 transition-colors hover:text-white">Banquets</a></li>
              <li><a href="gallery.php" class="text-sm text-white/65 transition-colors hover:text-white">Gallery</a></li>
              <li><a href="reservation.php" class="text-sm text-white/65 hover:text-white">Reservation</a></li>
              <li><a href="contact.php" class="text-sm text-white/65 transition-colors hover:text-white">Contact</a></li>
            </ul>
          </div>
          <div>
            <h4 class="text-xs font-semibold uppercase tracking-[0.2em] text-gold">Contact</h4>
            <ul class="mt-4 space-y-2 text-sm text-white/65">
              <li>9-1-220, St. Mary's Road Opposite to Passport Office</li>
              <li>Secunderabad, Hyderabad – 500003</li>
              <li><a href="tel:+914066677788" class="hover:text-white transition-colors">+91 40 666 777 88</a></li>
              <li><a href="tel:+919949466066" class="hover:text-white transition-colors">+91 99494 66066</a></li>
              <li><a href="mailto:info@hotelsaptagiri.in" class="hover:text-white transition-colors">info@hotelsaptagiri.in</a></li>
              <li><a href="mailto:reservation@hotelsaptagiri.in" class="hover:text-white transition-colors">reservation@hotelsaptagiri.in</a></li>
            </ul>
          </div>
          <div>
            <h4 class="text-xs font-semibold uppercase tracking-[0.2em] text-gold">Book Your Stay</h4>
            <p class="mt-4 text-sm text-white/65">Reserve your room or enquire about events today.</p>
            <a href="reservation.php" class="btn-primary mt-5 !text-xs">Book Now</a>
            <div class="mt-6 flex flex-wrap items-center gap-4">
              <img src="assets/images/tsha-logo.jpeg" alt="Telangana State Hospitality Association" class="h-auto max-h-14 w-auto max-w-full" loading="lazy" />
              <img src="assets/images/hrats-logo.png" alt="Hotel & Restaurant Association of Telangana State" class="h-auto max-h-14 w-auto max-w-full" loading="lazy" />
            </div>
          </div>
        </div>
        <div class="mt-12 border-t border-white/10 pt-8 text-center text-xs text-white/45">
          <p>&copy; 2026 Hotel Saptagiri. All rights reserved.</p>
        </div>
      </div>
    </footer>

<?php if ($showFloatingBtn) : ?>
    <a href="reservation.php" class="btn-floating">Book Now</a>
<?php endif; ?>

<?php if ($useSwiper) : ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<?php endif; ?>
    <script src="assets/js/header.js"></script>
<?php foreach ($pageScripts as $script) : ?>
    <script src="assets/js/<?php echo htmlspecialchars($script, ENT_QUOTES, 'UTF-8'); ?>"></script>
<?php endforeach; ?>
<?php if ($pageInlineScript !== '') : ?>
    <script><?php echo $pageInlineScript; ?></script>
<?php endif; ?>
  </body>
</html>
