<?php
$pageTitle = 'Contact | Hotel Saptagiri';
$pageDescription = 'Contact Hotel Saptagiri, Secunderabad. Reach us by phone, email, or WhatsApp for enquiries about your stay or events.';
$pageScripts = ['forms.js'];
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>

<main>
      <section class="page-hero">
        <img src="assets/images/hotel/DSC03798.jpg" alt="" class="page-hero__bg" aria-hidden="true" />
        <div class="container-site page-hero__inner">
          <span class="section-label !text-gold-light">Get in Touch</span>
          <h1 class="page-hero__title">Contact Us</h1>
          <p class="page-hero__subtitle">We're here to help with event enquiries, general questions, and anything you need about your visit.</p>
        </div>
      </section>

      <!-- Quick contact cards -->
      <section class="border-b border-sand bg-white py-10">
        <div class="container-site">
          <div class="grid gap-4 sm:grid-cols-2">
            <a href="tel:+914066677788" class="card flex items-center gap-4 p-6 transition-transform hover:-translate-y-1">
              <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-accent/10 text-accent">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
              </div>
              <div class="min-w-0">
                <p class="text-xs font-semibold uppercase tracking-wider text-gold">Landline</p>
                <p class="mt-1 font-medium text-charcoal">+91 40 666 777 88</p>
              </div>
            </a>
            <a href="https://wa.me/919949466066" target="_blank" rel="noopener noreferrer" class="card flex items-center gap-4 p-6 transition-transform hover:-translate-y-1">
              <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#25D366]/10 text-[#25D366]">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.884 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
              </div>
              <div class="min-w-0">
                <p class="text-xs font-semibold uppercase tracking-wider text-gold">WhatsApp</p>
                <p class="mt-1 font-medium text-charcoal">+91 99494 66066</p>
              </div>
            </a>
            <a href="mailto:info@hotelsaptagiri.in" class="card flex items-center gap-4 p-6 transition-transform hover:-translate-y-1">
              <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-accent/10 text-accent">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
              </div>
              <div class="min-w-0">
                <p class="text-xs font-semibold uppercase tracking-wider text-gold">General Enquiries</p>
                <p class="mt-1 break-words font-medium text-charcoal">info@hotelsaptagiri.in</p>
              </div>
            </a>
            <a href="mailto:reservation@hotelsaptagiri.in" class="card flex items-center gap-4 p-6 transition-transform hover:-translate-y-1">
              <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-accent/10 text-accent">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
              </div>
              <div class="min-w-0">
                <p class="text-xs font-semibold uppercase tracking-wider text-gold">Reservations</p>
                <p class="mt-1 break-words font-medium text-charcoal">reservation@hotelsaptagiri.in</p>
              </div>
            </a>
          </div>
        </div>
      </section>

      <!-- Contact Form -->
      <section class="section-padding bg-white">
        <div class="container-site">
          <div class="grid gap-12 lg:grid-cols-2 lg:gap-16">
            <div class="rounded-lg bg-linen p-6 md:p-8">
              <span class="section-label">Enquiry</span>
              <h2 class="font-display text-3xl text-charcoal md:text-4xl">Send Us a Message</h2>
              <p class="mt-4 text-base leading-relaxed text-charcoal-muted">
                For banquet bookings, corporate rates, group accommodation, or general enquiries — reach out and our team will get back to you promptly.
              </p>

              <form id="contact-form" class="mt-8 space-y-5" method="post" action="contact-send.php">
                <div class="grid gap-5 sm:grid-cols-2">
                  <div>
                    <label for="contact-name" class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-charcoal-muted">Name *</label>
                    <input type="text" id="contact-name" name="name" required class="input-field" placeholder="Your name" />
                  </div>
                  <div>
                    <label for="contact-email" class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-charcoal-muted">Email *</label>
                    <input type="email" id="contact-email" name="email" required class="input-field" placeholder="you@email.com" />
                  </div>
                </div>
                <div>
                  <label for="contact-subject" class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-charcoal-muted">Subject</label>
                  <select id="contact-subject" name="subject" class="input-field">
                    <option value="General Enquiry">General Enquiry</option>
                    <option value="Room Booking">Room Booking</option>
                    <option value="Banquet / Event">Banquet / Event</option>
                    <option value="Corporate Rate">Corporate Rate</option>
                    <option value="Feedback">Feedback</option>
                  </select>
                </div>
                <div>
                  <label for="contact-message" class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-charcoal-muted">Message *</label>
                  <textarea id="contact-message" name="message" required rows="5" class="textarea-field" placeholder="How can we help you?"></textarea>
                </div>
                <button type="submit" class="btn-primary">Send Message</button>
              </form>
            </div>

            <div>
              <span class="section-label">Location</span>
              <h2 class="font-display text-3xl text-charcoal md:text-4xl">Find Us on the Map</h2>
              <p class="mt-4 text-base text-charcoal-muted">Conveniently located on St. Mary's Road, opposite the Passport Office in Secunderabad.</p>
              <div class="mt-6 overflow-hidden rounded-lg shadow-card">
                <iframe
                  title="Hotel Saptagiri location map"
                  src="https://maps.google.com/maps?q=Hotel+Saptagiri+St+Marys+Road+Secunderabad&t=&z=15&ie=UTF8&iwloc=&output=embed"
                  class="h-[450px] w-full border-0"
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
