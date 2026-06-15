<?php

/**
 * Gallery images grouped by filter category.
 * Hotel images are listed first so they appear at the top of the "All" grid.
 * The `section` key drives Featured Moments (first image per section).
 */
$galleryItems = [
    // Hotel — exteriors & building
    ['path' => 'assets/images/hotel-common/about-us-day.png', 'category' => 'hotel', 'section' => 'hotel-exterior', 'caption' => 'Hotel Exterior (Day)'],
    ['path' => 'assets/images/hotel-common/about-us.png', 'category' => 'hotel', 'section' => 'hotel-exterior', 'caption' => 'Hotel Exterior (Night)'],
    ['path' => 'assets/images/hotel-common/Hotel-in-secunderabad..jpg', 'category' => 'hotel', 'section' => 'hotel-exterior', 'caption' => 'Hotel in Secunderabad'],
    ['path' => 'assets/images/hotel/DSC03532-2.jpg', 'category' => 'hotel', 'section' => 'hotel-exterior', 'caption' => 'Hotel Facade'],
    ['path' => 'assets/images/hotel/DSC03875.jpg', 'category' => 'hotel', 'section' => 'hotel-exterior', 'caption' => 'Hotel Building'],
    ['path' => 'assets/images/hotel/DSC04174.jpg', 'category' => 'hotel', 'section' => 'hotel-exterior', 'caption' => 'Hotel Ambience'],
    ['path' => 'assets/images/hotel/DSC04218.jpg', 'category' => 'hotel', 'section' => 'hotel-exterior', 'caption' => 'Hotel Exterior View'],
    ['path' => 'assets/images/hotel/DSC04251.jpg', 'category' => 'hotel', 'section' => 'hotel-exterior', 'caption' => 'Hotel Property'],
    ['path' => 'assets/images/hotel/DSC04260.jpg', 'category' => 'hotel', 'section' => 'hotel-exterior', 'caption' => 'Hotel Campus'],
    ['path' => 'assets/images/hotel/DSC04300.jpg', 'category' => 'hotel', 'section' => 'hotel-exterior', 'caption' => 'Hotel Grounds'],
    ['path' => 'assets/images/hotel/DSC04302.jpg', 'category' => 'hotel', 'section' => 'hotel-exterior', 'caption' => 'Hotel Exterior Detail'],
    ['path' => 'assets/images/hotel/DSC08735_stitch.jpg', 'category' => 'hotel', 'section' => 'hotel-exterior', 'caption' => 'Hotel Panorama'],
    ['path' => 'assets/images/suite-room/PURE-VEGETARIAN-HOTEL-NEAR-SECUNDERABAD-Railway-Station.jpg', 'category' => 'hotel', 'section' => 'hotel-exterior', 'caption' => 'Near Secunderabad Railway Station'],

    // Hotel — interiors & reception
    ['path' => 'assets/images/hotel-common/Hotel_Saptagiri_Reception.png', 'category' => 'hotel', 'section' => 'hotel-interior', 'caption' => 'Hotel Reception'],
    ['path' => 'assets/images/hotel-common/hotel-saptagiri-welcome-lounge.jpg', 'category' => 'hotel', 'section' => 'hotel-interior', 'caption' => 'Welcome Lounge'],
    ['path' => 'assets/images/hotel/lobby.jpg', 'category' => 'hotel', 'section' => 'hotel-interior', 'caption' => 'Hotel Lobby'],
    ['path' => 'assets/images/hotel/lobby1.jpg', 'category' => 'hotel', 'section' => 'hotel-interior', 'caption' => 'Lobby Area'],

    // Hotel — location context
    ['path' => 'assets/images/hotel-common/Hotel-near-passport-office-secunderabad.jpg', 'category' => 'hotel', 'section' => 'hotel-location', 'caption' => 'Near Passport Office'],
    ['path' => 'assets/images/hotel-common/Hotel-near-secunderabad-railway-station.png', 'category' => 'hotel', 'section' => 'hotel-location', 'caption' => 'Near Secunderabad Railway Station'],

    // Rooms
    ['path' => 'assets/images/hotel/dx-room1.jpg', 'category' => 'rooms', 'section' => 'rooms', 'caption' => 'Deluxe Room'],
    ['path' => 'assets/images/deluxe-room/hotel-saptagiri-deluxe-room-img-4.jpg', 'category' => 'rooms', 'section' => 'rooms', 'caption' => 'Deluxe Room'],
    ['path' => 'assets/images/suite-room/hotel-saptagiri-suite-room-overview-img-1.jpg', 'category' => 'rooms', 'section' => 'rooms', 'caption' => 'Suite Room'],
    ['path' => 'assets/images/suite-room/premium-suite-room-hotel-secunderabad-img-1.jpg', 'category' => 'rooms', 'section' => 'rooms', 'caption' => 'Premium Suite Room'],
    ['path' => 'assets/images/suite-room/hotel-saptagiri-suite-room-img-1.jpg', 'category' => 'rooms', 'section' => 'rooms', 'caption' => 'Suite Living Area'],
    ['path' => 'assets/images/suite-room/premium-suite-room-hotel-secunderabad-img-2.jpg', 'category' => 'rooms', 'section' => 'rooms', 'caption' => 'Suite Bedroom'],
    ['path' => 'assets/images/deluxe-room/premium-deluxe-room-hotel-saptagiri-paradise-junction-img-3.jpg', 'category' => 'rooms', 'section' => 'rooms', 'caption' => 'Premium Deluxe Room'],
    ['path' => 'assets/images/deluxe-room/deluxe-room-secunderabad-img-5.jpg', 'category' => 'rooms', 'section' => 'rooms', 'caption' => 'Deluxe Room'],
    ['path' => 'assets/images/deluxe-room/premium-deluxe-room-hotel-saptagiri-paradise-junction-img-4.jpg', 'category' => 'rooms', 'section' => 'rooms', 'caption' => 'Deluxe Room'],
    ['path' => 'assets/images/standard-room/hotel-saptagiri-standard-room-passport-office-img-1.jpg', 'category' => 'rooms', 'section' => 'rooms', 'caption' => 'Standard Room'],
    ['path' => 'assets/images/standard-room/budget-standard-room-secunderabad-img-3.jpg', 'category' => 'rooms', 'section' => 'rooms', 'caption' => 'Budget Standard Room'],
    ['path' => 'assets/images/standard-room/budget-business-standard-room-secunderabad-img-2.jpg', 'category' => 'rooms', 'section' => 'rooms', 'caption' => 'Business Standard Room'],

    // Dining
    ['path' => 'assets/images/restaurant/Hotel-saptagiri-pure-vegetarian-restaurant.jpg', 'category' => 'dining', 'section' => 'dining', 'caption' => 'Pure Vegetarian Restaurant'],
    ['path' => 'assets/images/restaurant/pure-vegetarian-restaurant.jpg', 'category' => 'dining', 'section' => 'dining', 'caption' => 'Swarn Restaurant'],
    ['path' => 'assets/images/restaurant/Multi-cuisine-restaurant-secunderabad-railway-station.jpg', 'category' => 'dining', 'section' => 'dining', 'caption' => 'Multi-Cuisine Restaurant'],
    ['path' => 'assets/images/restaurant/Fine-dining-hotel-saptagiri-jain-chinese-north-indian.jpg', 'category' => 'dining', 'section' => 'dining', 'caption' => 'Fine Dining'],
    ['path' => 'assets/images/restaurant/family-restaurant-secunderabad.jpg', 'category' => 'dining', 'section' => 'dining', 'caption' => 'Family Restaurant'],
    ['path' => 'assets/images/restaurant/pure-veg-family-restaurant-secunderabad.jpg', 'category' => 'dining', 'section' => 'dining', 'caption' => 'Family Dining'],
    ['path' => 'assets/images/restaurant/buffet-restaurant-secunderabad-thali.jpg', 'category' => 'dining', 'section' => 'dining', 'caption' => 'Buffet Restaurant'],
    ['path' => 'assets/images/restaurant/buffet-restaurant-hyderabad-thali.jpg', 'category' => 'dining', 'section' => 'dining', 'caption' => 'Buffet Thali'],
    ['path' => 'assets/images/restaurant/pure-veg-buffet-restaurant-jain-thali.jpg', 'category' => 'dining', 'section' => 'dining', 'caption' => 'Jain Buffet Thali'],

    // Banquets
    ['path' => 'assets/images/banquet-hall/Hotel-saptagiri-banquet-hall.jpg', 'category' => 'banquets', 'section' => 'banquets', 'caption' => 'Banquet Hall'],
    ['path' => 'assets/images/banquet-hall/Banquet-hall-secunderabad.jpg', 'category' => 'banquets', 'section' => 'banquets', 'caption' => 'Banquet Hall Secunderabad'],
    ['path' => 'assets/images/banquet-hall/Pure-Veg-banquet-venue-hotel-saptagiri.jpg', 'category' => 'banquets', 'section' => 'banquets', 'caption' => 'Pure Veg Banquet Venue'],
    ['path' => 'assets/images/banquet-hall/corporate-event-hall-hyderabad.jpg', 'category' => 'banquets', 'section' => 'banquets', 'caption' => 'Corporate Event Hall'],

    // Board Room & Conference Halls
    ['path' => 'assets/images/board-room/Conference-room-secunderabad.jpg', 'category' => 'boardrooms', 'section' => 'boardrooms', 'caption' => 'Conference Room'],
    ['path' => 'assets/images/banquet-hall/conference-hall-secunderabad.jpg', 'category' => 'boardrooms', 'section' => 'boardrooms', 'caption' => 'Conference Hall'],
    ['path' => 'assets/images/board-room/Conference-room-hyderabad.jpg', 'category' => 'boardrooms', 'section' => 'boardrooms', 'caption' => 'Conference Room Hyderabad'],
    ['path' => 'assets/images/board-room/Corporate-board-room-Secunderabad.jpg', 'category' => 'boardrooms', 'section' => 'boardrooms', 'caption' => 'Corporate Board Room'],
    ['path' => 'assets/images/hotel/boardroom5.jpg', 'category' => 'boardrooms', 'section' => 'boardrooms', 'caption' => 'Board Room'],
];

$featuredSections = [
    'hotel-exterior',
    'hotel-interior',
    'rooms',
    'dining',
    'banquets',
    'boardrooms',
];

$featuredMoments = [];
$seenSections = [];

foreach ($galleryItems as $item) {
    $section = $item['section'] ?? $item['category'];
    if (in_array($section, $featuredSections, true) && !isset($seenSections[$section])) {
        $featuredMoments[] = $item;
        $seenSections[$section] = true;
    }
}

return [
    'items' => $galleryItems,
    'featured' => $featuredMoments,
];
