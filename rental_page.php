<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Page</title>
    <link rel="stylesheet" href="./Header_footerstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    
    <style>

       
    </style>
</head>

<body>

   <?php
    include './header.php';
    ?>

    <!-- Rental Hero Section -->
    <section class="rental-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="rental-content rental-text">
                        <!-- <img src="assets/image/rental_page_img1.png" alt="poster-image1"> -->
                        <h5 class="rental-title">Rent Cars & Bikes Anytime</h5>
                        <h5 class="rental-subtitle">
                            Flexible plans, trusted vehicles, doorstep delivery.<br>
                            Book Now & Ride Easy!
                        </h5>
                        <a href="#" class="btn-book-now" id="bookNowBtn">
                         Book Now <img src="assets/icon/rightsidebar-rentalpage.png" style="width:25px; height:25px; padding-left:5px;" alt="rightside-bar">
                        </a>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <!-- search bar -->

    <div class="container-fluid">
        <div class="form-container">
            <div class="row g-0 align-items-stretch">
                <!-- Pickup Location -->
                <div class="col-lg-3 col-md-12">
                    <div class="form-section">
                        <label class="section-label">Pickup Location</label>
                        <div class="input-group">
                            <div class="d-flex ">
                            <div class="location-icon">
                                <img src="assets/icon/location-icon-rentalpg.png" alt="location-icon-rentalpg" style="width: 18px; height: 15px;">
                            </div>
                            <input type="text" class="form-input ms-2" id="pickupLocation" value="Coimbatore" readonly></div>
                        </div>
                    </div>
                </div>
                
                <!-- Pickup Date -->
                <div class="col-lg-3 col-md-6">
                    <div class="form-section">
                        <label class="section-label">Pickup</label>
                        <div class="input-group ">
                             <img src="assets/icon/calender-rentalpg.png"  alt="calender-icon" style="width: 18px; height: 15px; ">
                            <input type="text" class="form-input  " id="pickupDate" placeholder="Start Date" readonly>
                        </div>
                    </div>
                </div>
                
                <!-- Return Date -->
                <div class="col-lg-3 col-md-6">
                    <div class="form-section">
                        <label class="section-label">Return</label>
                        <div class="input-group">
                             <img src="assets/icon/calender-rentalpg.png"  alt="calender-icon" style="width: 18px; height: 15px; ">
                            <input type="text" class="form-input" id="returnDate" placeholder="End Date" readonly>
                        </div>
                    </div>
                </div>
                
                <!-- Search Button -->
                <div class="col-lg-3 col-md-12">
                    <div class="search-section">
                        <button type="button" class="search-btn mt-3" id="searchBtn">
                            Search
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Brand logo -->
    <div class="container-custom">
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
                <div class="brand-card" data-brand="suzuki">
                    <img src="assets/image/Suzuki_logo.png" alt="Suzuki" class="brand-logo">
                </div>
            </div>
            
            <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
                <div class="brand-card" data-brand="toyota">
                    <img src="assets/image/toyota.png" alt="Toyota" class="brand-logo">
                </div>
            </div>
            
            <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
                <div class="brand-card" data-brand="tata">
                    <img src="assets/image/Tata-rentalpg.png" style="width:100px;" alt="Tata" class="brand-logo" >
                </div>
            </div>
            
            <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
                <div class="brand-card" data-brand="hyundai">
                    <img src="assets/image/Hyundai-rentalpg.png" style="width:100px;" alt="Hyundai" class="brand-logo">
                </div>
            </div>
            
            <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
                <div class="brand-card" data-brand="mahindra">
                    <img src="assets/image/Mahindra.png" style="width:100px;" alt="Mahindra" class="brand-logo">
                </div>
            </div>
        </div>
    </div>

    <!-- our services card -->

   <section class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="content-left">
                        <h3 class="section-title">Our Services</h3>
                        <h2 class="main-heading">Our Premier Services for<br>Your car rental needs</h2>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="content-right">
                        <p class="description-text">
                            Looking for a reliable vehicle for your next trip, daily commute, or <br>
                            special occasion? True Motors makes it easy to rent cars and bikes at <br>
                            the best rates — quickly and hassle-free.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card animate-card" data-service="maintenance">
                        <div class="service-icon">
                            <img src="assets/image/rentalpg-ourservices-1.png " alt="Well-Maintained Car">
                        </div>
                        <h4 class="service-title">Well-Maintained Car</h4>
                        <p class="service-description">
                            Every car is inspected &<br>
                            maintained to perfection. Enjoy a<br>
                            worry-free ride.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card animate-card" data-service="payments">
                        <div class="service-icon">
                            <img src="assets/image/rentalpg-ourservices-2.png" alt="Secure Payments">
                        </div>
                        <h4 class="service-title">Secure Payments</h4>
                        <p class="service-description">
                            Pay safely with trusted gateways.<br>
                            Fast, encrypted & hassle-free<br>
                            transactions.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card animate-card" data-service="support">
                        <div class="service-icon">
                            <img src="assets/image/rentalpg-ourservices-3.png" alt="24/7 Support">
                        </div>
                        <h4 class="service-title">24/7 Support</h4>
                        <p class="service-description">
                            Ride worry-free with our nonstop<br>
                            support team.<br>
                            We've got your back, 24/7.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- how it works -->

     <section class="how-it-works-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="content-left">
                        <h3 class="section-subtitle">How Its Work</h3>
                        <h2 class="section-title">Step By Step to Rent<br>a vehicle on platform</h2>
                        
                        <div class="steps-container">
                            <div class="step-item animate-step" data-step="1">
                                <span class="step-number">1.</span>
                                <span class="step-title">Choose Vehicle:</span>
                                <span class="step-description  ">Browse available cars & bikes.</span>
                            </div>
                            
                            <div class="step-item animate-step" data-step="2">
                                <span class="step-number">2.</span>
                                <span class="step-title">Select Duration:</span>
                                <span class="step-description">Pick your rental period.</span>
                            </div>
                            
                            <div class="step-item animate-step" data-step="3">
                                <span class="step-number">3.</span>
                                <span class="step-title">Book & Pay:</span>
                                <span class="step-description">Confirm your booking securely.</span>
                            </div>
                            
                            <div class="step-item animate-step" data-step="4">
                                <span class="step-number">4.</span>
                                <span class="step-title">Pickup/Delivery:</span>
                                <span class="step-description" style=" display: inline;">Get your vehicle at your doorstep or pick it up at our hub.</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-12">
                    <div class="skoda-card animate-card">
                        <img src="assets/image/book-a-test-drive.png" alt="skoda-poster2">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- collection  -->

   <div class="container">
        <div class="collection-header">
            <div class="collection-title">Collection</div>
            <div class="collection-subtitle">Explore Our Collection Cars</div>
            <div class="filter-buttons">
                <button class="filter-btn active" data-filter="all">All Type</button>
                <button class="filter-btn" data-filter="suv">SUV</button>
                <button class="filter-btn" data-filter="sedan">Sedan</button>
                <button class="filter-btn" data-filter="hatchback">Hatchback</button>
                <button class="filter-btn" data-filter="electric">Electric/Hybrid</button>
            </div>
        </div>

        <div class="row" id="carGrid">
            <!-- Row 1 -->
            <div class="col-lg-4 col-md-6 car-item" data-category="hatchback">
                <div class="car-card">
                    <div class="car-image-container">
                        <!-- <div class="car-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 18px;">Hyundai i10</div> -->
                         <img src="assets/image/car1-image.png" class="car-image" alt="rental-card-car1" style="width:386px; height:180px; ">
                    </div>
                    <div class="car-details">
                        
                        <div class="car-name">Hyundai Grand</div>
                        <div class="d-flex ">
                        <div class="car-model">i10 Nios sportz</div>
                        <div class="price ">₹ 1400/day</div></div>
                
                        <div class="coimbatore-tag d-flex">
                            <img src="assets/icon/location-icon-rentalpg.png" alt="location-img" style="width:18px; height:15px;">Coimbatore
                            <div class="rating ">4.8/5</div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 car-item" data-category="hatchback">
                <div class="car-card">
                    <div class="car-image-container">
                        <!-- <div class="car-image" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); display: flex; align-items: center; justify-content: center; color: #333; font-size: 18px;">Hyundai i10</div> -->
                    <img src="assets/image/car2-image.png" class="car-image" alt="rental-card-car2" style="width:386px; height:180px; ">
                    </div>
                    <div class="car-details">
                        
                        <div class="car-name">Hyundai Grand</div>
                        <div class="d-flex ">
                        <div class="car-model">i10 Nios sportz</div>
                        <div class="price ">₹ 1400/day</div></div>
                
                        <div class="coimbatore-tag d-flex">
                            <img src="assets/icon/location-icon-rentalpg.png" alt="location-img" style="width:18px; height:15px;">Coimbatore
                            <div class="rating ">4.8/5</div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 car-item" data-category="electric">
                <div class="car-card">
                    <div class="car-image-container">
                        <!-- <div class="car-image" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 18px;">Hyundai Kona</div> -->
                    <img src="assets/image/car3-image.png" class="car-image" alt="rental-card-car3" style="width:386px; height:180px; ">

                    </div>
                   <div class="car-details">
                        
                        <div class="car-name">Hyundai Grand</div>
                        <div class="d-flex ">
                        <div class="car-model">i10 Nios sportz</div>
                        <div class="price ">₹ 1400/day</div></div>
                
                        <div class="coimbatore-tag d-flex">
                            <img src="assets/icon/location-icon-rentalpg.png" alt="location-img" style="width:18px; height:15px;">Coimbatore
                            <div class="rating ">4.8/5</div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="col-lg-4 col-md-6 car-item" data-category="hatchback">
                <div class="car-card">
                    <div class="car-image-container">
                        <!-- <div class="car-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 18px;">Hyundai i10</div> -->
                         <img src="assets/image/car1-image.png" class="car-image" alt="rental-card-car1" style="width:386px; height:180px; ">
                    
                    </div>
                   <div class="car-details">
                        
                        <div class="car-name">Hyundai Grand</div>
                        <div class="d-flex ">
                        <div class="car-model">i10 Nios sportz</div>
                        <div class="price ">₹ 1400/day</div></div>
                
                        <div class="coimbatore-tag d-flex">
                            <img src="assets/icon/location-icon-rentalpg.png" alt="location-img" style="width:18px; height:15px;">Coimbatore
                            <div class="rating ">4.8/5</div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 car-item" data-category="hatchback">
                <div class="car-card">
                    <div class="car-image-container">
                        <!-- <div class="car-image" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); display: flex; align-items: center; justify-content: center; color: #333; font-size: 18px;">Hyundai i10</div> -->
                    <img src="assets/image/car2-image.png" class="car-image" alt="rental-card-car2" style="width:386px; height:180px; ">
                      
                    </div>
                    <div class="car-details">
                        
                        <div class="car-name">Hyundai Grand</div>
                        <div class="d-flex ">
                        <div class="car-model">i10 Nios sportz</div>
                        <div class="price ">₹ 1400/day</div></div>
                
                        <div class="coimbatore-tag d-flex">
                            <img src="assets/icon/location-icon-rentalpg.png" alt="location-img" style="width:18px; height:15px;">Coimbatore
                            <div class="rating ">4.8/5</div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 car-item" data-category="electric">
                <div class="car-card">
                    <div class="car-image-container">
                        <!-- <div class="car-image" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 18px;">Hyundai Kona</div> -->
                    <img src="assets/image/car3-image.png" class="car-image" alt="rental-card-car3" style="width:386px; height:180px; ">
                    
                    </div>
                    <div class="car-details">
                        
                        <div class="car-name">Hyundai Grand</div>
                        <div class="d-flex ">
                        <div class="car-model">i10 Nios sportz</div>
                        <div class="price ">₹ 1400/day</div></div>
                
                        <div class="coimbatore-tag d-flex">
                            <img src="assets/icon/location-icon-rentalpg.png" alt="location-img" style="width:18px; height:15px;">Coimbatore
                            <div class="rating ">4.8/5</div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="col-lg-4 col-md-6 car-item" data-category="hatchback">
                <div class="car-card">
                    <div class="car-image-container">
                        <!-- <div class="car-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 18px;">Hyundai i10</div> -->
                         <img src="assets/image/car1-image.png" class="car-image" alt="rental-card-car1" style="width:386px; height:180px; ">
                    
                    </div>
                    <div class="car-details">
                        
                        <div class="car-name">Hyundai Grand</div>
                        <div class="d-flex ">
                        <div class="car-model">i10 Nios sportz</div>
                        <div class="price ">₹ 1400/day</div></div>
                
                        <div class="coimbatore-tag d-flex">
                            <img src="assets/icon/location-icon-rentalpg.png" alt="location-img" style="width:18px; height:15px;">Coimbatore
                            <div class="rating ">4.8/5</div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 car-item" data-category="hatchback">
                <div class="car-card">
                    <div class="car-image-container">
                        <!-- <div class="car-image" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); display: flex; align-items: center; justify-content: center; color: #333; font-size: 18px;">Hyundai i10</div> -->
                    <img src="assets/image/car2-image.png" class="car-image" alt="rental-card-car2" style="width:386px; height:180px; ">
                    
                    </div>
                    <div class="car-details">
                        
                        <div class="car-name">Hyundai Grand</div>
                        <div class="d-flex ">
                        <div class="car-model">i10 Nios sportz</div>
                        <div class="price ">₹ 1400/day</div></div>
                
                        <div class="coimbatore-tag d-flex">
                            <img src="assets/icon/location-icon-rentalpg.png" alt="location-img" style="width:18px; height:15px;">Coimbatore
                            <div class="rating ">4.8/5</div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 car-item" data-category="electric">
                <div class="car-card">
                    <div class="car-image-container">
                        <!-- <div class="car-image" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 18px;">Hyundai Kona</div> -->
                    <img src="assets/image/car3-image.png" class="car-image" alt="rental-card-car3" style="width:386px; height:180px; ">
                    
                    </div>
                    <div class="car-details">
                        
                        <div class="car-name">Hyundai Grand</div>
                        <div class="d-flex ">
                        <div class="car-model">i10 Nios sportz</div>
                        <div class="price ">₹ 1400/day</div></div>
                
                        <div class="coimbatore-tag d-flex">
                            <img src="assets/icon/location-icon-rentalpg.png" alt="location-img" style="width:18px; height:15px;">Coimbatore
                            <div class="rating ">4.8/5</div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="see-all-btn">
            <a href="#" class="see-all-link">See All Collection</a>
        </div>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>

        // Poster1 
        $(document).ready(function() {
            // Book Now button click handler
            $('#bookNowBtn').on('click', function(e) {
                e.preventDefault();
                
                // Add animation effect
                $(this).addClass('btn-clicked');
                
                // Example jQuery functionality - you can modify this as needed
                $('html, body').animate({
                    scrollTop: $(document).height()
                }, 1000);
                
                // Show alert (you can replace this with actual booking functionality)
                setTimeout(function() {
                    alert('Redirecting to booking page...');
                    // window.location.href = 'booking.php'; // Uncomment to redirect
                }, 1000);
                
                // Remove animation class after delay
                setTimeout(function() {
                    $('#bookNowBtn').removeClass('btn-clicked');
                }, 300);
            });
            
            // Add hover effects using jQuery
            $('.vehicle-image').hover(
                function() {
                    $(this).css({
                        'transform': 'scale(1.05)',
                        'transition': 'transform 0.3s ease'
                    });
                },
                function() {
                    $(this).css({
                        'transform': 'scale(1)',
                        'transition': 'transform 0.3s ease'
                    });
                }
            );
            
            // Smooth scroll animation for the section
            $('.rental-hero').hide().fadeIn(1000);
            
            // Add click animation class
            $('<style>')
                .prop('type', 'text/css')
                .html(`
                    .btn-clicked {
                        transform: scale(0.95) !important;
                        transition: transform 0.1s ease !important;
                    }
                `)
                .appendTo('head');
        });

        // Search bar 

        $(document).ready(function() {
            // Set default dates to match the current date (Sept 4, 2025)
            const today = new Date('2025-09-04');
            const tomorrow = new Date('2025-09-05');
            
            const formatDate = (date) => {
                const options = { 
                    weekday: 'short', 
                    month: 'short', 
                    day: 'numeric',
                    year: 'numeric'
                };
                return date.toLocaleDateString('en-US', options);
            };
            
            // Set the exact dates from the image
            $('#pickupDate').val('Start Date');
            $('#returnDate').val('End Date');
            
            // Simulate date picker functionality
            $('#pickupDate').on('click', function() {
                $(this).val('Thu, Sep 4, 2025');
            });
            
            $('#returnDate').on('click', function() {
                $(this).val('Fri, Sep 5, 2025');
            });
            
            // Search button functionality
            $('#searchBtn').on('click', function() {
                const pickupLocation = $('#pickupLocation').val();
                const pickupDate = $('#pickupDate').val();
                const returnDate = $('#returnDate').val();
                
                $(this).html('<i class="fas fa-spinner fa-spin"></i> Searching...');
                $(this).prop('disabled', true);
                
                setTimeout(() => {
                    alert(`Searching for vehicles in ${pickupLocation}\nPickup: ${pickupDate}\nReturn: ${returnDate}`);
                    $(this).html('Search');
                    $(this).prop('disabled', false);
                }, 1500);
            });
            
            // Location dropdown simulation
            $('#pickupLocation').on('click', function() {
                const locations = ['Coimbatore', 'Chennai', 'Bangalore', 'Mumbai', 'Delhi', 'Hyderabad'];
                const select = $('<select class="form-select"></select>');
                locations.forEach(location => {
                    select.append(`<option value="${location}" ${location === 'Coimbatore' ? 'selected' : ''}>${location}</option>`);
                });
                
                // You can add more sophisticated location selection here
            });
            
            // Add subtle hover effects
            $('.form-section').hover(
                function() {
                    $(this).css('background-color', '#fafafa');
                },
                function() {
                    $(this).css('background-color', 'white');
                }
            );
        });

        // Brand logo 

         $(document).ready(function() {
            // Brand data with jQuery values
            var brandData = {
                'suzuki': {
                    name: 'Suzuki',
                    country: 'Japan',
                    founded: 1909,
                    color: '#ED1C24'
                },
                'toyota': {
                    name: 'Toyota',
                    country: 'Japan',
                    founded: 1937,
                    color: '#EB001B'
                },
                'tata': {
                    name: 'Tata Motors',
                    country: 'India',
                    founded: 1945,
                    color: '#0064A8'
                },
                'hyundai': {
                    name: 'Hyundai',
                    country: 'South Korea',
                    founded: 1967,
                    color: '#00275D'
                },
                'mahindra': {
                    name: 'Mahindra',
                    country: 'India',
                    founded: 1945,
                    color: '#ED1C24'
                }
            };

            // Click event handler for brand cards
            $('.brand-card').on('click', function() {
                var brandKey = $(this).data('brand');
                var brand = brandData[brandKey];
                
                // Remove active class from all cards
                $('.brand-card').removeClass('active');
                
                // Add active class to clicked card
                $(this).addClass('active');
                
                // Display brand information
                alert('Brand: ' + brand.name + '\n' +
                      'Country: ' + brand.country + '\n' +
                      'Founded: ' + brand.founded + '\n' +
                      'Brand Color: ' + brand.color);
            });

            // Hover effect using jQuery
            $('.brand-card').hover(
                function() {
                    // Mouse enter
                    $(this).find('.brand-logo').css({
                        'transform': 'scale(1.1)',
                        'transition': 'transform 0.3s ease'
                    });
                },
                function() {
                    // Mouse leave
                    $(this).find('.brand-logo').css({
                        'transform': 'scale(1)',
                        'transition': 'transform 0.3s ease'
                    });
                }
            );

            // Initialize tooltips for brand cards
            $('.brand-card').each(function() {
                var brandKey = $(this).data('brand');
                var brand = brandData[brandKey];
                $(this).attr('title', brand.name + ' - ' + brand.country + ' (' + brand.founded + ')');
            });

            // Fade in animation on page load
            $('.brand-card').hide().each(function(index) {
                $(this).delay(index * 100).fadeIn(500);
            });

            // Console log brand data for debugging
            console.log('Brand Data:', brandData);
            console.log('Total Brands:', Object.keys(brandData).length);
        });


        // our services card
      $(document).ready(function() {
            // Service data
            var servicesData = {
                'maintenance': {
                    title: 'Well-Maintained Car',
                    description: 'Every car is inspected & maintained to perfection. Enjoy a worry-free ride.',
                    features: ['Regular inspections', 'Professional maintenance', 'Quality assurance', 'Worry-free experience']
                },
                'payments': {
                    title: 'Secure Payments',
                    description: 'Pay safely with trusted gateways. Fast, encrypted & hassle-free transactions.',
                    features: ['Trusted gateways', 'Encrypted transactions', 'Multiple payment options', 'Instant processing']
                },
                'support': {
                    title: '24/7 Support',
                    description: 'Ride worry-free with our nonstop support team. We\'ve got your back, 24/7.',
                    features: ['Round-the-clock availability', 'Expert assistance', 'Quick response', 'Emergency support']
                }
            };

            // Animate cards on scroll
            function animateOnScroll() {
                $('.animate-card').each(function() {
                    var elementTop = $(this).offset().top;
                    var elementBottom = elementTop + $(this).outerHeight();
                    var viewportTop = $(window).scrollTop();
                    var viewportBottom = viewportTop + $(window).height();

                    if (elementBottom > viewportTop && elementTop < viewportBottom) {
                        $(this).addClass('visible');
                    }
                });
            }

            // Initial animation check
            animateOnScroll();

            // Animate on scroll
            $(window).scroll(function() {
                animateOnScroll();
            });

            // Service card click handler
            $('.service-card').on('click', function() {
                var serviceKey = $(this).data('service');
                var service = servicesData[serviceKey];
                
                // Remove active class from all cards
                $('.service-card').removeClass('border-primary');
                
                // Add active styling to clicked card
                $(this).addClass('border-primary');
                
                // Create feature list
                var featuresList = service.features.map(function(feature) {
                    return '• ' + feature;
                }).join('\n');
                
                // Display service information
                alert('Service: ' + service.title + '\n\n' +
                      'Description: ' + service.description + '\n\n' +
                      'Key Features:\n' + featuresList);
            });

            // Initialize tooltips
            $('.service-card').each(function() {
                var serviceKey = $(this).data('service');
                var service = servicesData[serviceKey];
                $(this).attr('title', 'Click to learn more about ' + service.title);
            });

            console.log('Responsive Services Section Initialized!');
        });


        // how it works
         $(document).ready(function() {
            // Steps data with jQuery values
            var stepsData = {
                1: {
                    title: 'Choose Vehicle',
                    description: 'Browse available cars & bikes.',
                    action: 'browse',
                    duration: '2-5 minutes',
                    options: ['Cars', 'Bikes', 'Luxury vehicles', 'Economy cars']
                },
                2: {
                    title: 'Select Duration',
                    description: 'Pick your rental period.',
                    action: 'select',
                    duration: '1-2 minutes',
                    options: ['Hourly', 'Daily', 'Weekly', 'Monthly']
                },
                3: {
                    title: 'Book & Pay',
                    description: 'Confirm your booking securely.',
                    action: 'payment',
                    duration: '3-5 minutes',
                    options: ['Credit Card', 'Debit Card', 'UPI', 'Net Banking']
                },
                4: {
                    title: 'Pickup/Delivery',
                    description: 'Get your vehicle at your doorstep or pick it up at our hub.',
                    action: 'delivery',
                    duration: '15-30 minutes',
                    options: ['Home delivery', 'Hub pickup', 'Airport pickup', 'Station pickup']
                }
            };

            // Car data
            var carData = {
                'skoda-kushaq': {
                    name: 'Škoda Kushaq',
                    price: '₹10.99 Lakh*',
                    tagline: 'Choose what really matters.',
                    features: ['Spacious interior', 'Advanced safety', 'Fuel efficient', 'Modern design'],
                    colors: ['White', 'Silver', 'Black', 'Red'],
                    fuelType: 'Petrol/Diesel',
                    transmission: 'Manual/Automatic'
                }
            };

            // Animate elements on scroll
            function animateOnScroll() {
                $('.animate-step, .animate-card').each(function() {
                    var elementTop = $(this).offset().top;
                    var elementBottom = elementTop + $(this).outerHeight();
                    var viewportTop = $(window).scrollTop();
                    var viewportBottom = viewportTop + $(window).height();

                    if (elementBottom > viewportTop && elementTop < viewportBottom) {
                        $(this).addClass('visible');
                    }
                });
            }

            // Initial animation check
            animateOnScroll();

            // Animate on scroll
            $(window).scroll(function() {
                animateOnScroll();
            });

            // Step item click handler
            $('.step-item').on('click', function() {
                var stepNumber = $(this).data('step');
                var step = stepsData[stepNumber];
                
                // Remove active class from all steps
                $('.step-item').removeClass('text-primary');
                
                // Add active class to clicked step
                $(this).addClass('text-primary');
                
                // Create options list
                var optionsList = step.options.map(function(option) {
                    return '• ' + option;
                }).join('\n');
                
                // Display step information
                alert('Step ' + stepNumber + ': ' + step.title + '\n\n' +
                      'Description: ' + step.description + '\n\n' +
                      'Estimated Time: ' + step.duration + '\n\n' +
                      'Available Options:\n' + optionsList);
            });

            // Book test drive button handler
            $('.book-btn').on('click', function() {
                var carKey = $(this).data('car');
                var car = carData[carKey];
                
                // Animate button
                $(this).css('transform', 'scale(0.95)');
                setTimeout(() => {
                    $(this).css('transform', 'scale(1)');
                }, 150);
                
                // Create features list
                var featuresList = car.features.map(function(feature) {
                    return '• ' + feature;
                }).join('\n');
                
                // Display car information
                alert('Book Test Drive - ' + car.name + '\n\n' +
                      'Price: ' + car.price + '\n' +
                      'Tagline: ' + car.tagline + '\n\n' +
                      'Key Features:\n' + featuresList + '\n\n' +
                      'Available Colors: ' + car.colors.join(', ') + '\n' +
                      'Fuel Type: ' + car.fuelType + '\n' +
                      'Transmission: ' + car.transmission);
            });

            // Hover effects for steps
            $('.step-item').hover(
                function() {
                    // Mouse enter
                    $(this).find('.step-number').css('color', '#6f42c1');
                    $(this).find('.step-title').css('color', '#6f42c1');
                },
                function() {
                    // Mouse leave
                    if (!$(this).hasClass('text-primary')) {
                        $(this).find('.step-number').css('color', '#333');
                        $(this).find('.step-title').css('color', '#333');
                    }
                }
            );

            // Staggered animation for steps
            $('.animate-step').each(function(index) {
                $(this).css({
                    'transition-delay': (index * 200) + 'ms',
                    'transition': 'all 0.6s ease'
                });
            });

            // Progress tracking
            var progress = {
                totalSteps: Object.keys(stepsData).length,
                completedSteps: 0,
                currentStep: 1,
                estimatedTime: '6-12 minutes'
            };

            // Console logging for debugging
            console.log('Steps Data:', stepsData);
            console.log('Car Data:', carData);
            console.log('Process Progress:', progress);
            
            // Initialize tooltips for steps
            $('.step-item').each(function() {
                var stepNumber = $(this).data('step');
                var step = stepsData[stepNumber];
                $(this).attr('title', 'Click to learn more about: ' + step.title + ' (Est. ' + step.duration + ')');
            });

            // Initialize tooltip for car card
            $('.book-btn').attr('title', 'Click to book a test drive for ' + carData['skoda-kushaq'].name);
        });

        //our collection

        $(document).ready(function() {
            // Car data array
            const carData = [
                { name: "Hyundai Grand", model: "i10 Nios sportz", price: "1400", rating: "4.8", category: "hatchback", location: "Coimbatore" },
                { name: "Hyundai Grand", model: "i10 Nios sportz", price: "1400", rating: "4.8", category: "hatchback", location: "Coimbatore" },
                { name: "Hyundai Grand", model: "i10 Nios sportz", price: "1400", rating: "4.6", category: "electric", location: "Coimbatore" },
                { name: "Hyundai Creta", model: "SX Turbo", price: "2200", rating: "4.7", category: "suv", location: "Coimbatore" },
                { name: "Hyundai Verna", model: "SX Diesel", price: "1800", rating: "4.5", category: "sedan", location: "Coimbatore" },
                { name: "Hyundai i20", model: "Asta Option", price: "1600", rating: "4.6", category: "hatchback", location: "Coimbatore" }
            ];

            // Filter functionality
            $('.filter-btn').click(function() {
                const filter = $(this).data('filter');
                
                // Update active button
                $('.filter-btn').removeClass('active');
                $(this).addClass('active');
                
                // Filter cars with animation
                $('.car-item').fadeOut(300, function() {
                    if (filter === 'all') {
                        $('.car-item').fadeIn(300);
                    } else {
                        $('.car-item[data-category="' + filter + '"]').fadeIn(300);
                    }
                });
            });

            // Card hover effects
            $('.car-card').hover(
                function() {
                    $(this).find('.car-image').css('transform', 'scale(1.05)');
                },
                function() {
                    $(this).find('.car-image').css('transform', 'scale(1)');
                }
            );

            // Price animation on card hover
            $('.car-card').mouseenter(function() {
                const priceElement = $(this).find('.price');
                const currentPrice = priceElement.text();
                priceElement.css('transform', 'scale(1.1)');
            }).mouseleave(function() {
                const priceElement = $(this).find('.price');
                priceElement.css('transform', 'scale(1)');
            });

            // See All Collection click handler
            $('.see-all-link').click(function(e) {
                e.preventDefault();
                
                // Add some loading animation
                $(this).html('<i class="fas fa-spinner fa-spin"></i> Loading...');
                
                setTimeout(function() {
                    $('.see-all-link').html('See All Collection');
                    alert('Navigating to full collection page...');
                }, 1000);
            });

            // Add smooth scroll for better UX
            $('html').css('scroll-behavior', 'smooth');

            // Rating hover effect
            $('.rating').hover(
                function() {
                    $(this).css({
                        'transform': 'scale(1.1)',
                        'box-shadow': '0 4px 12px rgba(255, 215, 0, 0.4)'
                    });
                },
                function() {
                    $(this).css({
                        'transform': 'scale(1)',
                        'box-shadow': 'none'
                    });
                }
            );

            // Coimbatore tag click handler
            $('.coimbatore-tag').click(function() {
                const location = $(this).text().trim();
                alert('Showing cars available in ' + location);
            });

            // Dynamic price updates (simulating real-time pricing)
            function updatePrices() {
                $('.price').each(function() {
                    const currentPrice = parseInt($(this).text().replace(/[^0-9]/g, ''));
                    const variation = Math.floor(Math.random() * 100) - 50; // ±50 variation
                    const newPrice = Math.max(1000, currentPrice + variation);
                    
                    // Animate price change
                    $(this).fadeOut(200, function() {
                        $(this).text('₹ ' + newPrice + '/day').fadeIn(200);
                    });
                });
            }

            // Update prices every 30 seconds (commented out for demo)
            // setInterval(updatePrices, 30000);

            // Add loading animation on page load
            $('.car-card').each(function(index) {
                $(this).css('opacity', '0').delay(index * 100).animate({
                    opacity: 1
                }, 500);
            });

            console.log('Car Collection Page Initialized with jQuery!');
        });

    </script>

  <?php
    include './footer.php';
    ?>

</body>
</html>