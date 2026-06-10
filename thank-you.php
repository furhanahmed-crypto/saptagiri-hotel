<?php
$pageTitle = 'Thank You | Hotel Saptagiri';
$pageDescription = 'Thank you for contacting Hotel Saptagiri, Secunderabad.';
$footerTagline = 'Warm hospitality in Secunderabad.';
$pageInlineScript = <<<'JS'

      (function () {
        const params = new URLSearchParams(window.location.search);
        const type = params.get("type");
        const titleEl = document.getElementById("thank-you-title");
        const messageEl = document.getElementById("thank-you-message");

        if (type === "reservation") {
          titleEl.textContent = "Reservation Request Received";
          messageEl.textContent =
            "Thank you for your reservation request. Our team will review your stay details and contact you shortly to confirm availability.";
        } else if (type === "enquiry") {
          titleEl.textContent = "Enquiry Received";
          messageEl.textContent =
            "Thank you for reaching out. We have received your enquiry and will respond as soon as possible.";
        }
      })();
JS;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>

<main>
      <section class="section-padding bg-linen">
        <div class="container-site">
          <div class="mx-auto max-w-xl rounded-lg bg-white p-8 text-center shadow-card md:p-12">
            <div class="mx-auto mb-6 flex h-16 w-16 items-center justify-center rounded-full bg-accent/10 text-accent">
              <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <span class="section-label">Thank You</span>
            <h1 id="thank-you-title" class="mt-2 font-display text-3xl text-charcoal md:text-4xl">Message Received</h1>
            <p id="thank-you-message" class="mt-4 text-base leading-relaxed text-charcoal-muted">
              We have received your submission and will get back to you shortly.
            </p>
            <p class="mt-3 text-sm text-charcoal-light">
              Need immediate help? Call us at
              <a href="tel:+919949466066" class="font-medium text-accent hover:text-accent-dark">+91 99494 66066</a>
            </p>
            <a href="index.php" class="btn-primary mt-8">Return to Home</a>
          </div>
        </div>
      </section>
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
