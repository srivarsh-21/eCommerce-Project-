<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental page 3</title>
    <link rel="stylesheet" href="./Header_footerstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <style>
        body {
            background-color: #f7f7f7;
        }
        
        .top{
            margin-top: 70px;
        }
        
        .rating-star {
            color: #ffc107;
        }
        
        .location-link {
            color: #0d6efd;
        }
        
        .feature-check {
            color: #198754;
        }
        
        .owner-avatar, .review-avatar {
            width: 50px;
            height: 50px;
            object-fit: cover;
        }
        
        .online-status {
            color: #198754;
            font-weight: bold;
        }
        
        .map-container {
            height: 300px;
            border-radius: 8px;
            overflow: hidden;
        }
        
        .car-card-image {
            width: 160px;
            height: 100px;
            object-fit: cover;
        }
        
        .price-highlight {
            color: #6f42c1;
        }
        
        .btn-purple {
            background-color: #7B3FE4;
            border-color: #7B3FE4;
        }
        
        .btn-purple:hover {
            background-color: #5a2eb0;
            border-color: #5a2eb0;
        }
        
        .sticky-booking {
            position: sticky;
            top: 20px;
        }
        
        .free-cancel {
            color: #198754;
        }
        
        .shadow-custom {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Enhanced Car Carousel Styles */
        .image-carousel-container {
            position: relative;
            background: white;
            border-radius: 16px;
            overflow: hidden;
            margin-bottom: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.12);
        }
        
        .carousel-wrapper {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 20px;
            min-height: 350px;
        }
        
        .thumbnail-side {
            width: 90px;
            height: 120px;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 12px;
            flex-shrink: 0;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
            position: relative;
            border: 2px solid transparent;
        }
        
        .thumbnail-side img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center;
            transition: transform 0.4s ease;
            padding: 8px;
        }
        
        .thumbnail-side:hover {
            transform: translateY(-4px) scale(1.02);
            box-shadow: 0 12px 32px rgba(123, 63, 228, 0.25);
            border-color: rgba(123, 63, 228, 0.3);
        }
        
        .thumbnail-side:hover img {
            transform: scale(1.05);
        }
        
        .main-image-container {
            flex: 1;
            position: relative;
            height: 320px;
            border-radius: 16px;
            overflow: hidden;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            border: 1px solid #e9ecef;
        }
        
        .main-carousel-image {
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center;
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            padding: 20px;
        }
        
        .main-carousel-image:hover {
            transform: scale(1.02);
        }
        
        /* Enhanced Carousel Indicators */
        .carousel-indicators {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 10;
            background: rgba(255, 255, 255, 0.9);
            padding: 8px 16px;
            border-radius: 20px;
            backdrop-filter: blur(10px);
        }
        
        .carousel-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(123, 63, 228, 0.3);
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid transparent;
        }
        
        .carousel-dot.active {
            background: #7B3FE4;
            transform: scale(1.4);
            box-shadow: 0 0 20px rgba(123, 63, 228, 0.6);
            border-color: rgba(255, 255, 255, 0.5);
        }
        
        .carousel-dot:hover:not(.active) {
            background: rgba(123, 63, 228, 0.6);
            transform: scale(1.2);
        }
        
        /* Enhanced Navigation Arrows */
        .carousel-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.7);
            color: white;
            border: none;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 10;
            opacity: 0;
            backdrop-filter: blur(5px);
            font-size: 18px;
        }
        
        .image-carousel-container:hover .carousel-nav {
            opacity: 1;
        }
        
        .carousel-nav:hover {
            background: rgba(123, 63, 228, 0.9);
            transform: translateY(-50%) scale(1.1);
            box-shadow: 0 8px 25px rgba(123, 63, 228, 0.4);
        }
        
        .carousel-nav:active {
            transform: translateY(-50%) scale(0.95);
        }
        
        .carousel-nav.prev {
            left: 20px;
        }
        
        .carousel-nav.next {
            right: 20px;
        }
        
        /* Active thumbnail styling */
        .thumbnail-side.active {
            border-color: #7B3FE4;
            box-shadow: 0 8px 30px rgba(123, 63, 228, 0.3);
            transform: scale(1.02);
        }
        
        .thumbnail-side.active::after {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #7B3FE4, #9c5dff);
            border-radius: 14px;
            z-index: -1;
        }
        
        /* Loading states */
        .image-placeholder {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            font-size: 16px;
            flex-direction: column;
        }
        
        .image-placeholder i {
            font-size: 2rem;
            margin-bottom: 8px;
            opacity: 0.5;
        }
        
        /* Sliding animations */
        .main-carousel-image.slide-out-left {
            transform: translateX(-100%) scale(0.8);
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .main-carousel-image.slide-out-right {
            transform: translateX(100%) scale(0.8);
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .main-carousel-image.slide-in-left {
            transform: translateX(0) scale(1);
            opacity: 1;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .main-carousel-image.slide-in-right {
            transform: translateX(0) scale(1);
            opacity: 1;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        /* Car info overlay */
        .car-info-overlay {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(255, 255, 255, 0.95);
            padding: 12px 16px;
            border-radius: 12px;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            z-index: 5;
        }
        
        .car-info-overlay h6 {
            margin: 0 0 4px 0;
            color: #333;
            font-weight: 600;
        }
        
        .car-info-overlay small {
            color: #666;
        }
        
        @keyframes loading {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .carousel-wrapper {
                padding: 16px;
                gap: 12px;
                min-height: 280px;
            }
            
            .thumbnail-side {
                width: 70px;
                height: 90px;
            }
            
            .main-image-container {
                height: 250px;
            }
            
            .carousel-nav {
                width: 40px;
                height: 40px;
                font-size: 16px;
            }
            
            .carousel-nav.prev {
                left: 12px;
            }
            
            .carousel-nav.next {
                right: 12px;
            }
        }

        @media (max-width: 480px) {
            .thumbnail-side {
                width: 60px;
                height: 80px;
            }
            
            .main-image-container {
                height: 200px;
            }
            
            .carousel-wrapper {
                padding: 12px;
                gap: 8px;
            }
        }
        
        /* Touch feedback */
        .carousel-nav.touched {
            background: rgba(123, 63, 228, 1);
            transform: translateY(-50%) scale(0.9);
        }
        
        .thumbnail-side.touched {
            transform: scale(0.98);
        }
    </style>
</head>

<body>
    <?php
    include './header.php';
    ?>
    <div class="container py-4">
        
        <!-- Header Section -->
        <div class="bg-white rounded-3 p-4 mb-4 shadow-custom top">
            <h3 class="fw-bold mb-3">Rental - Car</h3>
            
            <!-- Enhanced Image Carousel Section -->
            <div class="image-carousel-container shadow-custom">
                <div class="carousel-wrapper">
                    <!-- Left Thumbnail -->
                    <div class="thumbnail-side" data-slide="0">
                        <img src="assets/image/car1-image.png" alt="Car view 1">
                    </div>
                    
                    <!-- Main Image Container -->
                    <div class="main-image-container">
                        <!-- Car info overlay -->
                        <div class="car-info-overlay">
                            <h6 id="carModelName">Hyundai Grand i10</h6>
                            <small id="carVariant">Nios Sportz</small>
                        </div>
                        
                        <img src="https://via.placeholder.com/800x400/ffffff/333?text=Hyundai+Grand+i10" 
                             alt="Main car image" 
                             class="main-carousel-image" 
                             id="mainCarImage">
                        
                        <!-- Navigation Arrows -->
                        <button class="carousel-nav prev" id="prevBtn">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="carousel-nav next" id="nextBtn">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                        
                        <!-- Carousel Indicators -->
                        <div class="carousel-indicators">
                            <div class="carousel-dot active" data-slide="0"></div>
                            <div class="carousel-dot" data-slide="1"></div>
                            <div class="carousel-dot" data-slide="2"></div>
                            <div class="carousel-dot" data-slide="3"></div>
                            <div class="carousel-dot" data-slide="4"></div>
                        </div>
                    </div>
                    
                    <!-- Right Thumbnail -->
                    <div class="thumbnail-side active" data-slide="1">
                        <img src="https://via.placeholder.com/300x200/f8f9fa/333?text=Car+2" alt="Car view 2">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <h4 class="fw-bold mb-2" id="mainCarTitle">Hyundai Grand i10 Nios Sportz</h4>
                <span class="rating-star me-2">⭐ 4.5/5</span>
                <span class="location-link">Coimbatore</span>
            </div>

            <div class="d-flex gap-2">
                <button class="btn btn-light btn-sm">
                    <img src="assets/icon/hearticon.png" alt="heart-icon" style="width:23px; height:23px;"> Save
                </button>
                <button class="btn btn-light btn-sm">
                    <img src="assets/icon/shareicon.png" alt="share-icon" style="width:23px; height:23px;"> Share this Car
                </button>
            </div>
        </div>

        <!-- Main Layout -->
        <div class="row">
            <!-- Left Column -->
            <div class="col-lg-8">
                
                <!-- Car Details -->
                <div class="bg-white rounded-3 p-4 mb-4 shadow-custom">
                    <div class="d-flex gap-4 mb-3" id="carSpecs">
                        <span><img src="assets/icon/car-seat-icon 1.png" alt="car-seat-icon" style="width:15px; height:15px;">7 seats</span>
                        <span><img src="assets/icon/manual-transmission-icon 1.png" alt="" style="width:15px; height:15px;">Manual</span>
                        <span><img src="" alt="" style="width:15px; height:15px;">4 doors</span>
                    </div>
                    
                    <h4 class="mb-3">Features</h4>
                    <div class="row" id="carFeatures">
                        <div class="col-md-6 col-lg-4 mb-2">
                            <span class="feature-check me-2">✓</span>Cruise Control
                        </div>
                        <div class="col-md-6 col-lg-4 mb-2">
                            <span class="feature-check me-2">✓</span>Android Auto
                        </div>
                        <div class="col-md-6 col-lg-4 mb-2">
                            <span class="feature-check me-2">✓</span>GPS
                        </div>
                        <div class="col-md-6 col-lg-4 mb-2">
                            <span class="feature-check me-2">✓</span>Manual Transmission
                        </div>
                        <div class="col-md-6 col-lg-4 mb-2">
                            <span class="feature-check me-2">✓</span>Air Conditioning
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div class="bg-white rounded-3 p-4 mb-4 shadow-custom">
                    <h4 class="mb-3">Description</h4>
                    <p class="mb-0" id="carDescription">
                        Hyundai Grand i10 Nios Sportz is our reliable unit perfect for city drives and short trips. Well-maintained and regularly serviced. *No smoking or pets please*. Includes GPS, AC, power windows, and modern safety features.
                    </p>
                </div>

                <!-- Owner -->
                <div class="bg-white rounded-3 p-4 mb-4 shadow-custom">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/50" alt="Owner" class="rounded-circle owner-avatar me-3">
                            <div>
                                <h5 class="mb-1">Rakabuming Hubner</h5>
                                <div class="rating-star small">⭐ 4.0 (180 reviews)</div>
                                <div class="online-status small">Online</div>
                            </div>
                        </div>
                        <button class="btn btn-">Send Message</button>
                    </div>
                </div>

                <!-- Map -->
                <div class="bg-white rounded-3 p-4 mb-4 shadow-custom">
                    <h4 class="mb-3">Location</h4>
                    <div class="map-container">
                        <iframe 
                            class="w-100 h-100 border-0 rounded" 
                            src="https://www.google.com/maps/embed">
                        </iframe>
                    </div>
                </div>

                <!-- Reviews -->
                <div class="bg-white rounded-3 p-4 mb-4 shadow-custom">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4>Customer Reviews</h4>
                        <span class="rating-star">⭐ 4.0 (180)</span>
                    </div>

                    <!-- Review 1 -->
                    <div class="d-flex gap-3 pb-3 mb-3 border-bottom">
                        <img src="https://via.placeholder.com/50" class="rounded-circle review-avatar" alt="Reviewer">
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <h6 class="mb-0">Marvin McKinney</h6>
                                <small class="text-muted">2 days ago</small>
                            </div>
                            <div class="rating-star small mb-2">⭐⭐⭐⭐⭐</div>
                            <p class="mb-0 small">Garazi made my road trip a breeze...</p>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="d-flex gap-3 pb-3 mb-3 border-bottom">
                        <img src="https://via.placeholder.com/50" class="rounded-circle review-avatar" alt="Reviewer">
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <h6 class="mb-0">Savannah Nguyen</h6>
                                <small class="text-muted">4 days ago</small>
                            </div>
                            <div class="rating-star small mb-2">⭐⭐⭐⭐⭐</div>
                            <p class="mb-0 small">The car was clean and pickup was on time...</p>
                        </div>
                    </div>

                    <!-- Review 3 -->
                    <div class="d-flex gap-3">
                        <img src="https://via.placeholder.com/50" class="rounded-circle review-avatar" alt="Reviewer">
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <h6 class="mb-0">Kristin Watson</h6>
                                <small class="text-muted">3 days ago</small>
                            </div>
                            <div class="rating-star small mb-2">⭐⭐⭐⭐⭐</div>
                            <p class="mb-0 small">Garazi blends technology with a top-notch car rental experience. The platform's intuitive design and advanced search features helped me find the perfect car for my tech-packed road trip.</p>
                        </div>
                    </div>
                </div>

                <!-- Other Cars -->
                <div class="bg-white rounded-3 p-4 mb-4 shadow-custom">
                    <h4 class="mb-4">Other Cars Nearby</h4>

                    <!-- Car 1 -->
                    <div class="d-flex gap-3 p-3 mb-3 bg-light rounded-3">
                        <img src="https://via.placeholder.com/160x100" alt="Toyota Innova" class="rounded car-card-image">
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h6 class="mb-0">2020 - Toyota Innova</h6>
                                <span class="fw-bold">USD 380 <small class="text-muted fw-normal">/ day</small></span>
                            </div>
                            <p class="small text-muted mb-2">Rong Kouda · 2.5 kms away</p>
                            <div class="d-flex gap-3 small mb-2">
                                <span><i class="fas fa-users feature-check me-1"></i> 7 seats</span>
                                <span><i class="fas fa-cogs feature-check me-1"></i> Manual</span>
                            </div>
                            <div class="d-flex gap-3 small">
                                <span class="free-cancel">
                                    <i class="fas fa-check me-1"></i> Free cancellation
                                </span>
                                <span class="rating-star">
                                    <i class="fas fa-star me-1"></i> 4.8 (180 reviews)
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Car 2 -->
                    <div class="d-flex gap-3 p-3 bg-light rounded-3">
                        <img src="https://via.placeholder.com/160x100" alt="Toyota Land Cruiser" class="rounded car-card-image">
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h6 class="mb-0">2023 - Toyota Land Cruiser</h6>
                                <span class="fw-bold">USD 250 <small class="text-muted fw-normal">/ day</small></span>
                            </div>
                            <p class="small text-muted mb-2">Ravi Prabhu · 5 kms away</p>
                            <div class="d-flex gap-3 small mb-2">
                                <span><i class="fas fa-users feature-check me-1"></i> 5 seats</span>
                                <span><i class="fas fa-cogs feature-check me-1"></i> CVT</span>
                            </div>
                            <div class="d-flex gap-3 small">
                                <span class="free-cancel">
                                    <i class="fas fa-check me-1"></i> Free cancellation
                                </span>
                                <span class="rating-star">
                                    <i class="fas fa-star me-1"></i> 4.6 (220 reviews)
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Booking Info -->
            <div class="col-lg-4">
                <div class="bg-white rounded-3 p-4 shadow-custom sticky-booking">
                    <h5 class="fw-bold mb-3 pb-2 border-bottom">Basic Information</h5>

                    <div class="mb-3 pb-3 border-bottom">
                        <h6 class="fw-bold mb-1">Pickup Location</h6>
                        <p class="mb-0 text-muted">Coimbatore</p>
                    </div>

                    <div class="mb-3 pb-3 border-bottom">
                        <h6 class="fw-bold mb-1">Pick up Date</h6>
                        <p class="mb-0 text-muted">Sat 5 July 2025</p>
                    </div>

                    <div class="mb-3 pb-3 border-bottom">
                        <h6 class="fw-bold mb-1">Return Date</h6>
                        <p class="mb-0 text-muted">Sun 6 July 2025</p>
                    </div>

                    <!-- Pricing Details -->
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="fw-semibold">Base Price</span>
                            <span id="basePrice">₹ 2,150</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="fw-semibold">Delivery & Pickup</span>
                            <span>₹ 500</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span class="fw-semibold">Security Deposit</span>
                            <span>₹ 1,000</span>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between pt-3 border-top mb-4">
                        <span class="fw-bold fs-5">Total</span>
                        <span class="fw-bold fs-5 price-highlight" id="totalPrice">₹ 3,650</span>
                    </div>

                    <button class="btn btn-purple text-white w-100 py-3 fw-semibold" onclick="handleProceed()">
                        Proceed
                    </button>
                </div>
            </div>
        </div>
    </div>

    <?php
    include './footer.php'
    ?>

    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./header_footer.js"></script>

    <script>
       // Enhanced Car Carousel with Auto-Generated Views - Improved Side Thumbnails
// Replace the existing JavaScript section in your rental_page4.php file

$(document).ready(function() {
    // Enhanced car data with auto-generated views
    const carImages = [
        {
            main: 'assets/image/car1-image.png',
            name: 'Hyundai Grand i10',
            variant: 'Nios Sportz',
            fullName: 'Hyundai Grand i10 Nios Sportz',
            specs: {
                seats: 5,
                transmission: 'Manual',
                doors: 4
            },
            features: ['Cruise Control', 'Android Auto', 'GPS', 'Manual Transmission', 'Air Conditioning'],
            description: 'Hyundai Grand i10 Nios Sportz is our reliable unit perfect for city drives and short trips. Well-maintained and regularly serviced. *No smoking or pets please*. Includes GPS, AC, power windows, and modern safety features.',
            price: 2150
        },
        {
            main: 'assets/image/Maruti-Suzuki-New-Swift.png',
            name: 'Maruti Swift',
            variant: 'VXI',
            fullName: 'Maruti Swift VXI',
            specs: {
                seats: 5,
                transmission: 'Manual',
                doors: 4
            },
            features: ['Power Steering', 'Central Locking', 'Music System', 'Manual AC', 'Power Windows'],
            description: 'Maruti Swift VXI is a compact and fuel-efficient car perfect for city commuting. Features excellent mileage and reliable performance. Well-maintained with regular servicing. *No smoking policy strictly enforced*.',
            price: 1950
        },
        {
            main: 'assets/image/car3-image.jpg',
            name: 'Honda City',
            variant: 'VX CVT',
            fullName: 'Honda City VX CVT',
            specs: {
                seats: 5,
                transmission: 'CVT',
                doors: 4
            },
            features: ['Automatic Climate Control', 'Touchscreen Infotainment', 'Cruise Control', 'Sunroof', 'Honda Sensing'],
            description: 'Honda City VX CVT offers premium comfort with automatic transmission and advanced features. Perfect for long drives and business trips. Spacious interior with modern amenities. Premium car rental experience guaranteed.',
            price: 2800
        },
        {
            main: 'assets/image/car5-image.png',
            name: 'Tata Nexon',
            variant: 'XZ Plus',
            fullName: 'Tata Nexon XZ Plus',
            specs: {
                seats: 5,
                transmission: 'Manual',
                doors: 4
            },
            features: ['Electric Sunroof', 'Harman Audio', 'Wireless Charging', '360° Camera', 'iRA Connected Features'],
            description: 'Tata Nexon XZ Plus is a premium compact SUV with advanced connected features and safety systems. Ideal for both city and highway driving. Features the latest technology and superior build quality.',
            price: 2400
        },
        {
            main: 'assets/image/upcoming-car1.png',
            name: 'Toyota Innova',
            variant: 'Crysta GX',
            fullName: 'Toyota Innova Crysta GX',
            specs: {
                seats: 7,
                transmission: 'Manual',
                doors: 4
            },
            features: ['7-Seater Configuration', 'Dual AC', 'Captain Seats', 'Touchscreen System', 'Multiple USB Ports'],
            description: 'Toyota Innova Crysta GX is the perfect choice for family trips and group travel. Spacious 7-seater with excellent comfort and reliability. Well-maintained with comprehensive insurance coverage.',
            price: 3200
        }
    ];

    let currentSlide = 0;
    let isTransitioning = false;
    let currentMainView = 'main'; // Track current main view
    const totalSlides = carImages.length;

    // Enhanced CSS-based image transformation with more pronounced effects for thumbnails
    function applyImageTransform(element, viewType, isThumbnail = false) {
        const intensity = isThumbnail ? 1.3 : 1.0; // More pronounced effects for thumbnails
        
        const transforms = {
            'frontLeft': {
                transform: `perspective(600px) rotateY(${-20 * intensity}deg) rotateX(${3 * intensity}deg) scale(${1.05 * intensity})`,
                filter: `brightness(${1.15 * intensity}) contrast(${1.1 * intensity}) saturate(1.2)`,
                transformOrigin: 'center left'
            },
            'backLeft': {
                transform: `perspective(600px) rotateY(${20 * intensity}deg) rotateX(${-3 * intensity}deg) scaleX(-1) scale(${1.05 * intensity})`,
                filter: `brightness(${0.9 / intensity}) contrast(${1.05 * intensity}) saturate(0.9) hue-rotate(5deg)`,
                transformOrigin: 'center right'
            },
            'frontRight': {
                transform: `perspective(600px) rotateY(${20 * intensity}deg) rotateX(${2 * intensity}deg) scale(${1.05 * intensity})`,
                filter: `brightness(${1.1 * intensity}) contrast(${1.08 * intensity}) saturate(1.15)`,
                transformOrigin: 'center right'
            },
            'backRight': {
                transform: `perspective(600px) rotateY(${-20 * intensity}deg) rotateX(${-2 * intensity}deg) scaleX(-1) scale(${1.05 * intensity})`,
                filter: `brightness(${0.92 / intensity}) contrast(${1.03 * intensity}) saturate(0.95) hue-rotate(-5deg)`,
                transformOrigin: 'center left'
            },
            'main': {
                transform: 'perspective(400px) rotateY(0deg) rotateX(0deg) scale(1)',
                filter: 'brightness(1) contrast(1) saturate(1)',
                transformOrigin: 'center center'
            }
        };

        const style = transforms[viewType] || transforms.main;
        
        $(element).css({
            'transform': style.transform,
            'filter': style.filter,
            'transform-origin': style.transformOrigin,
            'transition': 'all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)',
            'will-change': 'transform, filter'
        });

        // Add subtle animation for thumbnails
        if (isThumbnail && viewType !== 'main') {
            setTimeout(() => {
                $(element).css({
                    'animation': `subtle-float-${viewType.includes('Left') ? 'left' : 'right'} 3s ease-in-out infinite`
                });
            }, 100);
        } else {
            $(element).css('animation', 'none');
        }
    }

    // Initialize carousel
    function initCarousel() {
        updateCarousel();
        updateThumbnails();
        updateCarInfo();
        preloadImages();
        addViewIndicators();
    }

    // Add view indicators to thumbnails
    function addViewIndicators() {
        $('.thumbnail-side').each(function(index) {
            if (!$(this).find('.view-indicator').length) {
                const viewType = index === 0 ? 'Front Left' : 'Back Right';
                $(this).append(`<div class="view-indicator">${viewType}</div>`);
            }
        });
    }

    // Update main image with enhanced sliding animation
    function updateCarousel(direction = 'next') {
        if (isTransitioning) return;
        isTransitioning = true;

        const mainImage = $('#mainCarImage');
        const currentCar = carImages[currentSlide];
        
        const slideOutClass = direction === 'next' ? 'slide-out-left' : 'slide-out-right';
        const slideInClass = direction === 'next' ? 'slide-in-left' : 'slide-in-right';
        
        mainImage.addClass(slideOutClass);
        
        setTimeout(function() {
            mainImage.attr('src', currentCar.main)
                   .attr('alt', currentCar.name)
                   .removeClass(slideOutClass)
                   .addClass(slideInClass);
            
            // Reset to main view when changing cars
            currentMainView = 'main';
            setTimeout(function() {
                applyImageTransform(mainImage[0], currentMainView, false);
            }, 50);
            
            setTimeout(function() {
                mainImage.removeClass(slideInClass);
                isTransitioning = false;
            }, 400);
        }, 200);

        // Update indicators
        $('.carousel-dot').removeClass('active');
        setTimeout(() => {
            $(`.carousel-dot[data-slide="${currentSlide}"]`).addClass('active');
        }, 100);
    }

    // Enhanced thumbnails with distinct views
    function updateThumbnails() {
        const currentCar = carImages[currentSlide];
        
        $('.thumbnail-side').addClass('changing');

        setTimeout(() => {
            // Left thumbnail - Front Left View of CURRENT car
            const leftThumb = $('.thumbnail-side').first();
            leftThumb.removeClass('active changing')
                   .attr('data-slide', currentSlide)
                   .attr('data-view', 'frontLeft')
                   .attr('title', `${currentCar.name} - Front Left View`);
            
            const leftImg = leftThumb.find('img');
            leftImg.attr('src', currentCar.main)
                  .attr('alt', `${currentCar.name} - Front Left View`);
            
            // Apply enhanced front-left transformation for thumbnail
            setTimeout(() => {
                applyImageTransform(leftImg[0], 'frontLeft', true);
            }, 100);

            // Right thumbnail - Back Right View of CURRENT car  
            const rightThumb = $('.thumbnail-side').last();
            rightThumb.removeClass('active changing')
                     .attr('data-slide', currentSlide)
                     .attr('data-view', 'backRight')
                     .attr('title', `${currentCar.name} - Back Right View`);
            
            const rightImg = rightThumb.find('img');
            rightImg.attr('src', currentCar.main)
                   .attr('alt', `${currentCar.name} - Back Right View`);
            
            // Apply enhanced back-right transformation for thumbnail
            setTimeout(() => {
                applyImageTransform(rightImg[0], 'backRight', true);
            }, 100);

            // Mark both thumbnails as active since they show the current car
            setTimeout(() => {
                leftThumb.addClass('active');
                rightThumb.addClass('active');
                
                // Update view indicators
                leftThumb.find('.view-indicator').text('Front Left');
                rightThumb.find('.view-indicator').text('Back Right');
            }, 200);
        }, 200);
    }

    // Update car information
    function updateCarInfo() {
        const currentCar = carImages[currentSlide];
        
        $('#mainCarTitle').text(currentCar.fullName);
        $('#carModelName').text(currentCar.name);
        $('#carVariant').text(currentCar.variant);
        
        const specsHtml = `
            <span><i class="fas fa-car me-2"></i>${currentCar.specs.seats} seats</span>
            <span><i class="fas fa-cog me-2"></i>${currentCar.specs.transmission}</span>
            <span><i class="fas fa-door-open me-2"></i>${currentCar.specs.doors} doors</span>
        `;
        $('#carSpecs').html(specsHtml);
        
        let featuresHtml = '';
        currentCar.features.forEach(feature => {
            featuresHtml += `
                <div class="col-md-6 col-lg-4 mb-2">
                    <span class="feature-check me-2">✓</span>${feature}
                </div>
            `;
        });
        $('#carFeatures').html(featuresHtml);
        
        $('#carDescription').text(currentCar.description);
        
        $('#basePrice').text(`₹ ${currentCar.price.toLocaleString()}`);
        const total = currentCar.price + 500 + 1000;
        $('#totalPrice').text(`₹ ${total.toLocaleString()}`);
    }

    // Handle thumbnail clicks to show different views in main area
    function showCarView(viewType) {
        if (isTransitioning) return;
        
        const mainImage = $('#mainCarImage');
        
        // Update thumbnail active states
        $('.thumbnail-side').removeClass('view-active');
        $(`.thumbnail-side[data-view="${viewType}"]`).addClass('view-active');
        
        isTransitioning = true;
        mainImage.addClass('view-transition');
        
        setTimeout(function() {
            currentMainView = viewType;
            applyImageTransform(mainImage[0], viewType, false);
            
            setTimeout(function() {
                mainImage.removeClass('view-transition');
                isTransitioning = false;
            }, 400);
        }, 100);
    }

    // Navigation functions
    function goToSlide(slideIndex) {
        if (slideIndex >= 0 && slideIndex < totalSlides && slideIndex !== currentSlide && !isTransitioning) {
            const direction = slideIndex > currentSlide ? 'next' : 'prev';
            currentSlide = slideIndex;
            updateCarousel(direction);
            updateThumbnails();
            updateCarInfo();
        }
    }

    function nextSlide() {
        if (isTransitioning) return;
        
        $('#nextBtn').addClass('touched');
        setTimeout(() => $('#nextBtn').removeClass('touched'), 150);
        
        currentSlide = (currentSlide + 1) % totalSlides;
        updateCarousel('next');
        updateThumbnails();
        updateCarInfo();
    }

    function prevSlide() {
        if (isTransitioning) return;
        
        $('#prevBtn').addClass('touched');
        setTimeout(() => $('#prevBtn').removeClass('touched'), 150);
        
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateCarousel('prev');
        updateThumbnails();
        updateCarInfo();
    }

    function preloadImages() {
        carImages.forEach(function(car) {
            const img = new Image();
            img.src = car.main;
        });
    }

    // Event Listeners
    $('.carousel-dot').on('click', function() {
        const slideIndex = parseInt($(this).data('slide'));
        goToSlide(slideIndex);
    });

    $('#nextBtn').on('click', function(e) {
        e.stopPropagation();
        nextSlide();
    });

    $('#prevBtn').on('click', function(e) {
        e.stopPropagation();
        prevSlide();
    });

    // Enhanced thumbnail interaction with visual feedback
    $(document).on('click', '.thumbnail-side', function(e) {
        e.stopPropagation();
        
        if (isTransitioning) return;
        
        $(this).addClass('touched');
        setTimeout(() => $(this).removeClass('touched'), 200);
        
        const viewType = $(this).attr('data-view');
        showCarView(viewType);
        
        // Add ripple effect
        const ripple = $('<div class="ripple-effect"></div>');
        $(this).append(ripple);
        setTimeout(() => ripple.remove(), 600);
    });

    // Main image click to return to normal view
    $('#mainCarImage').on('click', function() {
        showCarView('main');
        $('.thumbnail-side').removeClass('view-active');
    });

    // Keyboard navigation
    $(document).on('keydown', function(e) {
        switch(e.which) {
            case 37: // Left arrow
                prevSlide();
                break;
            case 39: // Right arrow
                nextSlide();
                break;
            case 70: // F key - front view
                showCarView('frontLeft');
                break;
            case 66: // B key - back view
                showCarView('backRight');
                break;
            case 77: // M key - main view
                showCarView('main');
                break;
        }
    });

    // Touch/Swipe support
    let startX = 0, startY = 0, distX = 0, distY = 0;
    const threshold = 100, restraint = 100, allowedTime = 300;
    let elapsedTime = 0, startTime = 0;

    $('.main-image-container').on('touchstart', function(e) {
        const touchobj = e.originalEvent.changedTouches[0];
        startX = touchobj.pageX;
        startY = touchobj.pageY;
        startTime = new Date().getTime();
        e.preventDefault();
    });

    $('.main-image-container').on('touchend', function(e) {
        const touchobj = e.originalEvent.changedTouches[0];
        distX = touchobj.pageX - startX;
        distY = touchobj.pageY - startY;
        elapsedTime = new Date().getTime() - startTime;
        
        if (elapsedTime <= allowedTime) {
            if (Math.abs(distX) >= threshold && Math.abs(distY) <= restraint) {
                if (distX > 0) {
                    prevSlide();
                } else {
                    nextSlide();
                }
            }
        }
        e.preventDefault();
    });

    // Mouse wheel navigation
    $('.image-carousel-container').on('wheel', function(e) {
        e.preventDefault();
        if (e.originalEvent.deltaY > 0) {
            nextSlide();
        } else {
            prevSlide();
        }
    });

    // Hover effects for better user experience
    $('.thumbnail-side').hover(
        function() {
            $(this).addClass('hover-effect');
            const img = $(this).find('img');
            const currentTransform = img.css('transform');
            img.css('transform', currentTransform + ' scale(1.1)');
        },
        function() {
            $(this).removeClass('hover-effect');
            const viewType = $(this).attr('data-view');
            const img = $(this).find('img');
            applyImageTransform(img[0], viewType, true);
        }
    );

    // Error handling
    $(document).on('error', 'img', function() {
        console.log('Image failed to load:', $(this).attr('src'));
        // Reset transform on error
        $(this).css({
            'transform': 'none',
            'filter': 'none',
            'animation': 'none'
        });
    });

    // Initialize
    initCarousel();
    
    // Initialize save button state
    setTimeout(updateSaveButtonState, 500);
    
    console.log('Enhanced Auto-Generated Views Carousel initialized with', totalSlides, 'cars');
    console.log('Features: Enhanced front/back views, CSS transforms, touch support, view indicators, save/share functionality');
});

// Enhanced CSS for improved visual effects and thumbnail views
const enhancedCSS = `
<style>
.thumbnail-side img,
.main-carousel-image {
    object-fit: contain !important;
    object-position: center !important;
    width: 100% !important;
    height: 100% !important;
    max-width: 100%;
    max-height: 100%;
}

.thumbnail-side {
    overflow: visible;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.thumbnail-side.active {
    border: 3px solid #007bff;
    box-shadow: 0 8px 25px rgba(0,123,255,0.3);
}

.thumbnail-side.view-active {
    border: 3px solid #28a745;
    box-shadow: 0 8px 25px rgba(40,167,69,0.4);
    transform: scale(1.05);
}

.thumbnail-side.hover-effect {
    box-shadow: 0 12px 30px rgba(0,0,0,0.2);
}

.main-image-container {
    overflow: visible;
    display: flex;
    align-items: center;
    justify-content: center;
}

.thumbnail-side img {
    padding: 8px;
    border-radius: 8px;
}

.main-carousel-image {
    padding: 15px;
    border-radius: 12px;
}

/* Enhanced 3D transformation styles */
.thumbnail-side img,
.main-carousel-image {
    transform-style: preserve-3d;
    backface-visibility: hidden;
}

.view-transition {
    opacity: 0.7;
    transform: scale(0.95) !important;
}

/* View indicators */
.view-indicator {
    position: absolute;
    bottom: 5px;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(0,0,0,0.8);
    color: white;
    padding: 4px 8px;
    border-radius: 12px;
    font-size: 10px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    z-index: 10;
    pointer-events: none;
    transition: all 0.3s ease;
}

.thumbnail-side.active .view-indicator {
    background: rgba(0,123,255,0.9);
}

.thumbnail-side.view-active .view-indicator {
    background: rgba(40,167,69,0.9);
}

/* Touch feedback */
.thumbnail-side.touched {
    transform: scale(0.95);
}

/* Ripple effect */
.ripple-effect {
    position: absolute;
    border-radius: 50%;
    background: rgba(255,255,255,0.6);
    transform: scale(0);
    animation: ripple 0.6s linear;
    width: 100px;
    height: 100px;
    left: 50%;
    top: 50%;
    margin-left: -50px;
    margin-top: -50px;
    pointer-events: none;
}

@keyframes ripple {
    to {
        transform: scale(4);
        opacity: 0;
    }
}

/* Subtle floating animations */
@keyframes subtle-float-left {
    0%, 100% { transform: perspective(600px) rotateY(-26deg) rotateX(3.9deg) scale(1.37) translateY(0px); }
    50% { transform: perspective(600px) rotateY(-26deg) rotateX(3.9deg) scale(1.37) translateY(-3px); }
}

@keyframes subtle-float-right {
    0%, 100% { transform: perspective(600px) rotateY(26deg) rotateX(-3.9deg) scaleX(-1) scale(1.37) translateY(0px); }
    50% { transform: perspective(600px) rotateY(26deg) rotateX(-3.9deg) scaleX(-1) scale(1.37) translateY(-3px); }
}

/* Slide animations */
.slide-out-left {
    animation: slideOutLeft 0.3s ease-in forwards;
}

.slide-in-left {
    animation: slideInRight 0.4s ease-out forwards;
}

.slide-out-right {
    animation: slideOutRight 0.3s ease-in forwards;
}

.slide-in-right {
    animation: slideInLeft 0.4s ease-out forwards;
}

@keyframes slideOutLeft {
    0% { transform: translateX(0); opacity: 1; }
    100% { transform: translateX(-100px); opacity: 0; }
}

@keyframes slideInRight {
    0% { transform: translateX(100px); opacity: 0; }
    100% { transform: translateX(0); opacity: 1; }
}

@keyframes slideOutRight {
    0% { transform: translateX(0); opacity: 1; }
    100% { transform: translateX(100px); opacity: 0; }
}

@keyframes slideInLeft {
    0% { transform: translateX(-100px); opacity: 0; }
    100% { transform: translateX(0); opacity: 1; }
}

/* Button touch effects */
.touched {
    transform: scale(0.95) !important;
    transition: transform 0.1s ease !important;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .view-indicator {
        font-size: 8px;
        padding: 2px 6px;
    }
    
    .thumbnail-side img {
        padding: 4px;
    }
    
    .main-carousel-image {
        padding: 10px;
    }
}

/* Save and Share Modal Styles */
.share-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
}

.share-modal.show {
    opacity: 1;
    visibility: visible;
}

.share-modal-content {
    background: white;
    border-radius: 16px;
    padding: 0;
    max-width: 500px;
    max-height: 80vh;
    width: 90%;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    transform: scale(0.8);
    transition: transform 0.3s ease;
    overflow: hidden;
}

.share-modal.show .share-modal-content {
    transform: scale(1);
}

.share-modal-header {
    padding: 20px;
    border-bottom: 1px solid #eee;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: linear-gradient(135deg, #007bff, #0056b3);
    color: white;
}

.share-modal-header h3 {
    margin: 0;
    font-size: 1.2rem;
}

.close-modal {
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
    color: white;
    padding: 0;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: background 0.3s ease;
}

.close-modal:hover {
    background: rgba(255, 255, 255, 0.2);
}

.share-modal-body {
    padding: 20px;
    max-height: 60vh;
    overflow-y: auto;
}

/* Share Preview */
.share-preview {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    padding: 15px;
    background: #f8f9fa;
    border-radius: 12px;
}

.share-car-image {
    width: 60px;
    height: 40px;
    object-fit: contain;
    border-radius: 8px;
    margin-right: 15px;
}

.share-car-info h4 {
    margin: 0 0 5px 0;
    font-size: 1rem;
    color: #333;
}

.share-car-info p {
    margin: 0;
    font-weight: bold;
    color: #007bff;
}

/* Share Options */
.share-options {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
    margin-bottom: 20px;
}

.share-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 12px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
    text-decoration: none;
}

.share-btn i {
    margin-right: 8px;
    font-size: 1.1rem;
}

.share-btn.whatsapp {
    background: #25d366;
    color: white;
}

.share-btn.whatsapp:hover {
    background: #1da851;
    transform: translateY(-2px);
}

.share-btn.telegram {
    background: #0088cc;
    color: white;
}

.share-btn.telegram:hover {
    background: #006699;
    transform: translateY(-2px);
}

.share-btn.copy-link {
    background: #6c757d;
    color: white;
}

.share-btn.copy-link:hover {
    background: #545b62;
    transform: translateY(-2px);
}

.share-btn.email {
    background: #dc3545;
    color: white;
}

.share-btn.email:hover {
    background: #c82333;
    transform: translateY(-2px);
}

/* Share Text Area */
.share-text-area {
    position: relative;
    margin-top: 15px;
}

.share-text {
    width: 100%;
    height: 120px;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-family: inherit;
    font-size: 0.9rem;
    resize: vertical;
    background: #f8f9fa;
}

.copy-text-btn {
    position: absolute;
    top: 8px;
    right: 8px;
    padding: 6px 12px;
    background: #007bff;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 0.8rem;
    cursor: pointer;
    transition: background 0.3s ease;
}

.copy-text-btn:hover {
    background: #0056b3;
}

/* Saved Cars Modal Styles */
.saved-cars-modal {
    max-width: 600px;
    max-height: 85vh;
}

.saved-cars-list {
    max-height: 50vh;
    overflow-y: auto;
}

.saved-car-item {
    display: flex;
    align-items: center;
    padding: 15px;
    border: 1px solid #eee;
    border-radius: 12px;
    margin-bottom: 12px;
    transition: all 0.3s ease;
    background: white;
}

.saved-car-item:hover {
    border-color: #007bff;
    box-shadow: 0 4px 12px rgba(0, 123, 255, 0.1);
    transform: translateY(-2px);
}

.saved-car-thumb {
    width: 60px;
    height: 40px;
    object-fit: contain;
    border-radius: 8px;
    margin-right: 15px;
}

.saved-car-details {
    flex-grow: 1;
}

.saved-car-details h4 {
    margin: 0 0 5px 0;
    font-size: 1rem;
    color: #333;
}

.saved-car-view {
    margin: 0 0 5px 0;
    font-size: 0.85rem;
    color: #666;
    font-style: italic;
}

.saved-car-price {
    margin: 0 0 5px 0;
    font-weight: bold;
    color: #007bff;
    font-size: 0.95rem;
}

.saved-car-date {
    margin: 0;
    font-size: 0.8rem;
    color: #999;
}

.saved-car-actions {
    display: flex;
    gap: 8px;
    flex-shrink: 0;
}

.load-btn {
    background: #28a745;
    color: white;
    border: none;
    padding: 8px 12px;
    border-radius: 6px;
    cursor: pointer;
    font-size: 0.85rem;
    transition: background 0.3s ease;
}

.load-btn:hover {
    background: #218838;
}

.remove-btn {
    background: #dc3545;
    color: white;
    border: none;
    padding: 8px 12px;
    border-radius: 6px;
    cursor: pointer;
    font-size: 0.85rem;
    transition: background 0.3s ease;
}

.remove-btn:hover {
    background: #c82333;
}

.clear-all-btn {
    width: 100%;
    background: #dc3545;
    color: white;
    border: none;
    padding: 12px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    margin-top: 15px;
    transition: background 0.3s ease;
}

.clear-all-btn:hover {
    background: #c82333;
}

.no-saved-cars {
    text-align: center;
    color: #666;
    font-style: italic;
    padding: 40px;
}

/* Notification Styles */
.notification {
    position: fixed;
    top: 20px;
    right: 20px;
    max-width: 350px;
    padding: 0;
    border-radius: 12px;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
    z-index: 1100;
    transform: translateX(400px);
    transition: transform 0.3s ease;
    overflow: hidden;
}

.notification.show {
    transform: translateX(0);
}

.notification-content {
    display: flex;
    align-items: center;
    padding: 16px 20px;
}

.notification-icon {
    font-size: 1.2rem;
    margin-right: 12px;
    flex-shrink: 0;
}

.notification-message {
    flex-grow: 1;
    font-weight: 500;
}

.notification-success {
    background: linear-gradient(135deg, #28a745, #20c997);
    color: white;
}

.notification-warning {
    background: linear-gradient(135deg, #ffc107, #fd7e14);
    color: #333;
}

.notification-error {
    background: linear-gradient(135deg, #dc3545, #e83e8c);
    color: white;
}

.notification-info {
    background: linear-gradient(135deg, #17a2b8, #007bff);
    color: white;
}

/* Save Button States */
.save-car-btn.saved {
    background: #dc3545 !important;
    border-color: #dc3545 !important;
}

.save-car-btn.saved:hover {
    background: #c82333 !important;
    border-color: #bd2130 !important;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .share-modal-content {
        width: 95%;
        max-height: 90vh;
    }
    
    .share-options {
        grid-template-columns: 1fr;
    }
    
    .saved-car-item {
        flex-direction: column;
        align-items: flex-start;
        text-align: left;
    }
    
    .saved-car-thumb {
        margin-bottom: 10px;
        margin-right: 0;
    }
    
    .saved-car-actions {
        width: 100%;
        justify-content: center;
        margin-top: 10px;
    }
    
    .notification {
        right: 10px;
        left: 10px;
        max-width: none;
    }
}
</style>
`;

// Inject enhanced CSS
$('head').append(enhancedCSS);

// Saved cars storage (using memory instead of localStorage)
let savedCars = [];
let shareHistory = [];

// Save Car Function
window.handleSaveCar = function() {
    const currentCar = carImages[currentSlide];
    const currentView = currentMainView === 'main' ? 'Standard View' : 
                      currentMainView === 'frontLeft' ? 'Front Left View' : 'Back Right View';
    
    // Check if car is already saved
    const existingSave = savedCars.find(saved => 
        saved.carIndex === currentSlide && saved.view === currentMainView
    );
    
    if (existingSave) {
        showNotification('Car already saved!', 'warning');
        return;
    }
    
    // Create save object
    const savedCar = {
        id: Date.now(), // Unique ID
        carIndex: currentSlide,
        car: { ...currentCar },
        view: currentMainView,
        viewName: currentView,
        savedAt: new Date().toISOString(),
        savedDate: new Date().toLocaleDateString('en-IN', {
            year: 'numeric',
            month: 'short',
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit'
        })
    };
    
    // Add to saved cars
    savedCars.push(savedCar);
    
    // Show success notification
    showNotification(`${currentCar.name} (${currentView}) saved successfully!`, 'success');
    
    // Update save button state
    updateSaveButtonState();
    
    // Log for debugging
    console.log('Car saved:', savedCar);
    console.log('Total saved cars:', savedCars.length);
};

// Share Car Function
window.handleShareCar = function() {
    const currentCar = carImages[currentSlide];
    const currentView = currentMainView === 'main' ? 'Standard View' : 
                      currentMainView === 'frontLeft' ? 'Front Left View' : 'Back Right View';
    
    // Create share data
    const shareData = {
        id: Date.now(),
        carIndex: currentSlide,
        car: { ...currentCar },
        view: currentMainView,
        viewName: currentView,
        sharedAt: new Date().toISOString(),
        totalPrice: currentCar.price + 1500
    };
    
    // Add to share history
    shareHistory.push(shareData);
    
    // Create share text
    const shareText = `🚗 Check out this ${currentCar.fullName}!\n\n` +
                     `💰 Price: ₹${shareData.totalPrice.toLocaleString()}\n` +
                     `👥 Seats: ${currentCar.specs.seats}\n` +
                     `⚙️ Transmission: ${currentCar.specs.transmission}\n` +
                     `🎯 View: ${currentView}\n\n` +
                     `Features: ${currentCar.features.slice(0, 3).join(', ')}\n\n` +
                     `Book now for the best car rental experience!`;
    
    const shareUrl = `${window.location.origin}${window.location.pathname}?car=${currentSlide}&view=${currentMainView}`;
    
    // Try native sharing first (mobile devices)
    if (navigator.share && /Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        navigator.share({
            title: `${currentCar.fullName} - Car Rental`,
            text: shareText,
            url: shareUrl
        }).then(() => {
            showNotification('Car shared successfully!', 'success');
        }).catch((error) => {
            console.log('Native sharing failed, using fallback');
            fallbackShare(shareText, shareUrl);
        });
    } else {
        // Fallback sharing options
        fallbackShare(shareText, shareUrl);
    }
    
    console.log('Car shared:', shareData);
};

// Fallback sharing function
function fallbackShare(shareText, shareUrl) {
    const shareModal = createShareModal(shareText, shareUrl);
    $('body').append(shareModal);
    
    // Show modal with animation
    setTimeout(() => {
        $('#shareModal').addClass('show');
    }, 100);
    
    showNotification('Share options opened!', 'info');
}

// Create share modal
function createShareModal(shareText, shareUrl) {
    const currentCar = carImages[currentSlide];
    
    return `
    <div id="shareModal" class="share-modal">
        <div class="share-modal-content">
            <div class="share-modal-header">
                <h3>Share ${currentCar.name}</h3>
                <button class="close-modal" onclick="closeShareModal()">×</button>
            </div>
            <div class="share-modal-body">
                <div class="share-preview">
                    <img src="${currentCar.main}" alt="${currentCar.name}" class="share-car-image">
                    <div class="share-car-info">
                        <h4>${currentCar.fullName}</h4>
                        <p>₹${(currentCar.price + 1500).toLocaleString()}</p>
                    </div>
                </div>
                <div class="share-options">
                    <button class="share-btn whatsapp" onclick="shareToWhatsApp('${encodeURIComponent(shareText)}', '${shareUrl}')">
                        <i class="fab fa-whatsapp"></i> WhatsApp
                    </button>
                    <button class="share-btn telegram" onclick="shareToTelegram('${encodeURIComponent(shareText)}', '${shareUrl}')">
                        <i class="fab fa-telegram"></i> Telegram
                    </button>
                    <button class="share-btn copy-link" onclick="copyToClipboard('${shareUrl}')">
                        <i class="fas fa-link"></i> Copy Link
                    </button>
                    <button class="share-btn email" onclick="shareByEmail('${encodeURIComponent(shareText)}', '${shareUrl}')">
                        <i class="fas fa-envelope"></i> Email
                    </button>
                </div>
                <div class="share-text-area">
                    <textarea readonly class="share-text">${shareText}</textarea>
                    <button onclick="copyShareText()" class="copy-text-btn">Copy Text</button>
                </div>
            </div>
        </div>
    </div>`;
}

// Share functions
window.shareToWhatsApp = function(text, url) {
    window.open(`https://wa.me/?text=${text}%0A${encodeURIComponent(url)}`, '_blank');
    closeShareModal();
};

window.shareToTelegram = function(text, url) {
    window.open(`https://t.me/share/url?url=${encodeURIComponent(url)}&text=${text}`, '_blank');
    closeShareModal();
};

window.copyToClipboard = function(text) {
    navigator.clipboard.writeText(text).then(() => {
        showNotification('Link copied to clipboard!', 'success');
        closeShareModal();
    }).catch(() => {
        // Fallback for older browsers
        const textArea = document.createElement('textarea');
        textArea.value = text;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand('copy');
        document.body.removeChild(textArea);
        showNotification('Link copied to clipboard!', 'success');
        closeShareModal();
    });
};

window.shareByEmail = function(text, url) {
    const subject = encodeURIComponent(`Check out this ${carImages[currentSlide].fullName}!`);
    const body = encodeURIComponent(`${text}\n\nView details: ${url}`);
    window.open(`mailto:?subject=${subject}&body=${body}`, '_blank');
    closeShareModal();
};

window.copyShareText = function() {
    const textArea = document.querySelector('.share-text');
    textArea.select();
    document.execCommand('copy');
    showNotification('Share text copied!', 'success');
};

window.closeShareModal = function() {
    $('#shareModal').removeClass('show');
    setTimeout(() => {
        $('#shareModal').remove();
    }, 300);
};

// View saved cars function
window.viewSavedCars = function() {
    if (savedCars.length === 0) {
        showNotification('No saved cars yet!', 'info');
        return;
    }
    
    const savedCarsModal = createSavedCarsModal();
    $('body').append(savedCarsModal);
    
    setTimeout(() => {
        $('#savedCarsModal').addClass('show');
    }, 100);
};

// Create saved cars modal
function createSavedCarsModal() {
    let savedCarsHtml = '';
    
    savedCars.forEach((savedCar, index) => {
        savedCarsHtml += `
        <div class="saved-car-item" data-save-id="${savedCar.id}">
            <img src="${savedCar.car.main}" alt="${savedCar.car.name}" class="saved-car-thumb">
            <div class="saved-car-details">
                <h4>${savedCar.car.fullName}</h4>
                <p class="saved-car-view">${savedCar.viewName}</p>
                <p class="saved-car-price">₹${(savedCar.car.price + 1500).toLocaleString()}</p>
                <p class="saved-car-date">${savedCar.savedDate}</p>
            </div>
            <div class="saved-car-actions">
                <button onclick="loadSavedCar(${savedCar.carIndex}, '${savedCar.view}')" class="load-btn">
                    <i class="fas fa-eye"></i> View
                </button>
                <button onclick="removeSavedCar(${savedCar.id})" class="remove-btn">
                    <i class="fas fa-trash"></i> Remove
                </button>
            </div>
        </div>`;
    });
    
    return `
    <div id="savedCarsModal" class="share-modal">
        <div class="share-modal-content saved-cars-modal">
            <div class="share-modal-header">
                <h3>Saved Cars (${savedCars.length})</h3>
                <button class="close-modal" onclick="closeSavedCarsModal()">×</button>
            </div>
            <div class="share-modal-body">
                <div class="saved-cars-list">
                    ${savedCarsHtml}
                </div>
                ${savedCars.length > 0 ? '<button onclick="clearAllSavedCars()" class="clear-all-btn">Clear All</button>' : ''}
            </div>
        </div>
    </div>`;
}

// Saved cars functions
window.loadSavedCar = function(carIndex, view) {
    currentSlide = carIndex;
    currentMainView = view;
    updateCarousel();
    updateThumbnails();
    updateCarInfo();
    showCarView(view);
    closeSavedCarsModal();
    showNotification('Saved car loaded!', 'success');
};

window.removeSavedCar = function(saveId) {
    savedCars = savedCars.filter(car => car.id !== saveId);
    updateSaveButtonState();
    
    // Remove from DOM
    $(`.saved-car-item[data-save-id="${saveId}"]`).fadeOut(300, function() {
        $(this).remove();
        
        // Update counter
        $('#savedCarsModal .share-modal-header h3').text(`Saved Cars (${savedCars.length})`);
        
        // If no cars left, show empty message
        if (savedCars.length === 0) {
            $('.saved-cars-list').html('<p class="no-saved-cars">No saved cars</p>');
            $('.clear-all-btn').remove();
        }
    });
    
    showNotification('Car removed from saved list', 'info');
};

window.clearAllSavedCars = function() {
    if (confirm('Are you sure you want to clear all saved cars?')) {
        savedCars = [];
        updateSaveButtonState();
        closeSavedCarsModal();
        showNotification('All saved cars cleared!', 'info');
    }
};

window.closeSavedCarsModal = function() {
    $('#savedCarsModal').removeClass('show');
    setTimeout(() => {
        $('#savedCarsModal').remove();
    }, 300);
};

// Update save button state
function updateSaveButtonState() {
    const currentSaved = savedCars.find(saved => 
        saved.carIndex === currentSlide && saved.view === currentMainView
    );
    
    const saveBtn = $('#saveCarBtn, .save-car-btn');
    if (currentSaved) {
        saveBtn.addClass('saved').html('<i class="fas fa-heart"></i> Saved');
    } else {
        saveBtn.removeClass('saved').html('<i class="far fa-heart"></i> Save');
    }
}

// Notification system
function showNotification(message, type = 'info') {
    const notification = $(`
    <div class="notification notification-${type}">
        <div class="notification-content">
            <i class="notification-icon fas ${getNotificationIcon(type)}"></i>
            <span class="notification-message">${message}</span>
        </div>
    </div>`);
    
    $('body').append(notification);
    
    setTimeout(() => {
        notification.addClass('show');
    }, 100);
    
    setTimeout(() => {
        notification.removeClass('show');
        setTimeout(() => {
            notification.remove();
        }, 300);
    }, 3000);
}

function getNotificationIcon(type) {
    switch(type) {
        case 'success': return 'fa-check-circle';
        case 'warning': return 'fa-exclamation-triangle';
        case 'error': return 'fa-times-circle';
        default: return 'fa-info-circle';
    }
}

// Update save button state when slide changes
const originalGoToSlide = goToSlide;
function goToSlide(slideIndex) {
    originalGoToSlide(slideIndex);
    setTimeout(updateSaveButtonState, 100);
}

const originalNextSlide = nextSlide;
function nextSlide() {
    originalNextSlide();
    setTimeout(updateSaveButtonState, 100);
}

const originalPrevSlide = prevSlide;
function prevSlide() {
    originalPrevSlide();
    setTimeout(updateSaveButtonState, 100);
}

// Update save button state when view changes
const originalShowCarView = showCarView;
function showCarView(viewType) {
    originalShowCarView(viewType);
    setTimeout(updateSaveButtonState, 200);
}

// Proceed function
window.handleProceed = function() {
    const currentCar = carImages[currentSlide];
    const currentView = currentMainView === 'main' ? 'Standard View' : 
                      currentMainView === 'frontLeft' ? 'Front Left View' : 'Back Right View';
    alert(`Proceeding with ${currentCar.fullName} (${currentView}) - ₹${(currentCar.price + 1500).toLocaleString()}`);
};

        // Handle proceed button click with current car info
        function handleProceed() {
            const currentCar = carImages[currentSlide];
            const bookingData = {
                car: currentCar.fullName,
                location: 'Coimbatore',
                pickupDate: 'Sat 5 July 2025',
                returnDate: 'Sun 6 July 2025',
                basePrice: currentCar.price,
                total: currentCar.price + 500 + 1000
            };
            
            alert(`Proceeding with booking for ${bookingData.car} - Total: ₹${bookingData.total.toLocaleString()}`);
            console.log('Booking initiated:', bookingData);
        }

        // Additional interactive features
        $(document).ready(function() {
            // Enhanced heart/save button toggle
            $('.btn:contains("Save")').on('click', function() {
                const icon = $(this).find('i');
                const currentCar = carImages[currentSlide];
                
                if (icon.hasClass('far')) {
                    icon.removeClass('far').addClass('fas');
                    $(this).addClass('text-danger');
                    console.log(`${currentCar.name} saved to favorites`);
                } else {
                    icon.removeClass('fas').addClass('far');
                    $(this).removeClass('text-danger');
                    console.log(`${currentCar.name} removed from favorites`);
                }
            });

            // Enhanced share button functionality
            $('.btn:contains("Share")').on('click', function() {
                const currentCar = carImages[currentSlide];
                
                if (navigator.share) {
                    navigator.share({
                        title: `${currentCar.fullName} - Car Rental`,
                        text: `Check out this ${currentCar.name} rental in Coimbatore - ₹${currentCar.price}/day`,
                        url: window.location.href
                    }).catch(console.error);
                } else {
                    const url = window.location.href;
                    navigator.clipboard.writeText(url).then(() => {
                        alert(`Link for ${currentCar.name} copied to clipboard!`);
                    }).catch(() => {
                        alert('Unable to share. Please copy the URL manually.');
                    });
                }
            });

            // Send message button
            $('.btn:contains("Send Message")').on('click', function() {
                const currentCar = carImages[currentSlide];
                alert(`Opening chat about ${currentCar.name} with Rakabuming Hubner...`);
            });
        });
    </script>
</body>
</html>