<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chery Tiggo 4 Pro - Car Rental</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
        }
        
        .car-image {
            width: 100%;
            height: auto;
            max-height: 300px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .car-image:hover {
            transform: scale(1.05);
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
        
        .owner-avatar {
            width: 50px;
            height: 50px;
            background: linear-gradient(45deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }
        
        .review-avatar {
            width: 40px;
            height: 40px;
            background: linear-gradient(45deg, #ff9a9e, #fecfef);
            border-radius: 50%;
        }
        
        .online-status {
            color: #198754;
            font-size: 0.8rem;
        }
        
        .map-container {
            height: 200px;
            background: linear-gradient(45deg, #a8e6cf, #88d8c0);
            border-radius: 8px;
            position: relative;
            overflow: hidden;
        }
        
        .map-pin {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-45deg);
            width: 30px;
            height: 30px;
            background: #007bff;
            border-radius: 50% 50% 50% 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .map-pin::after {
            content: '';
            width: 10px;
            height: 10px;
            background: white;
            border-radius: 50%;
            transform: rotate(45deg);
        }
        
        .car-card-image {
            width: 80px;
            height: 60px;
            background: #ddd;
            border-radius: 4px;
            object-fit: cover;
        }
        
        .location-icon {
            width: 20px;
            height: 20px;
            background-color: #333;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .location-icon::before {
            content: '';
            width: 8px;
            height: 8px;
            background-color: white;
            border-radius: 50%;
        }
        
        .date-icon::before {
            content: '📅';
            font-size: 16px;
        }
        
        .proceed-button {
            background: linear-gradient(135deg, #8b5a9f 0%, #6a4080 100%);
            border: none;
            transition: all 0.3s ease;
        }
        
        .proceed-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(139, 90, 159, 0.3);
        }
        
        .cost-item:hover {
            background-color: #f8f9fa;
            border-radius: 8px;
            transition: all 0.2s ease;
        }
        
        .shadow-custom {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .container-mobile {
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <!-- Main Car Info Container -->
    <div class="container-mobile">
        <!-- Header Section -->
        <div class="bg-white rounded-3 p-4 mb-3 shadow-custom">
            <h3 class="fw-bold mb-3">Rental - Car</h3>
            
            <div class="text-center mb-3">
                <img src="Group 147081.png" alt="Car Center" class="rounded-3 car-image">
            </div>

            <div class="mb-3">
                <h4 class="fw-bold mb-2">Hyundai Grand i10 Nios Sportz</h4>
                <span class="rating-star me-2">★ 4.5/5</span>
                <span class="location-link">Coimbatore</span>
            </div>

            <div class="d-flex justify-content-end gap-2">
                <button class="btn btn-light btn-sm">
                    <i class="far fa-heart"></i> Save
                </button>
                <button class="btn btn-light btn-sm">
                    <i class="fas fa-share"></i> Share this Car
                </button>
            </div>
        </div>

        <!-- Car Specifications -->
        <div class="bg-white p-3 mb-3 shadow-custom">
            <div class="d-flex justify-content-between border-bottom pb-3">
                <span class="small text-muted">🚗 7 seats</span>
                <span class="small text-muted">⚙️ Manual</span>
                <span class="small text-muted">🚪 4 doors</span>
            </div>
        </div>

        <!-- Features Section -->
        <div class="bg-white p-3 mb-3 shadow-custom">
            <div class="row g-2">
                <div class="col-6">
                    <div class="d-flex align-items-center small">
                        <span class="feature-check me-2">✓</span>Cruise control
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex align-items-center small">
                        <span class="feature-check me-2">✓</span>Android Auto
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex align-items-center small">
                        <span class="feature-check me-2">✓</span>Instant rental
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex align-items-center small">
                        <span class="feature-check me-2">✓</span>Manual transmission
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex align-items-center small">
                        <span class="feature-check me-2">✓</span>GPS nav system
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex align-items-center small">
                        <span class="feature-check me-2">✓</span>Air conditioning
                    </div>
                </div>
            </div>
        </div>

        <!-- Description Section -->
        <div class="bg-white p-3 mb-3 shadow-custom">
            <h5 class="mb-3">Description</h5>
            <p class="small text-muted mb-0 lh-base">
                Chery Tiggo 4 Pro is our new unit from last month. So far great performance and 
                recommended for long trips. <strong>No smoking or pets please</strong> If there is a smell of 
                smoke or food/drink spilled in the car, the renter will be charged a cleaning fee.
                Includes: gps navigation system, air conditioning, cruise control, power windows, 
                apple carplay, android auto, aux/mp3 enabled, bluetooth wireless, premium sound.
            </p>
        </div>

        <!-- Owner Info Section -->
        <div class="bg-white p-3 mb-3 shadow-custom">
            <h5 class="mb-3">Owner Info</h5>
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <div class="owner-avatar me-3">RH</div>
                    <div>
                        <h6 class="mb-1">Rakabuming Hubner <i class="fas fa-check-circle text-primary small"></i></h6>
                        <div class="rating-star small">⭐ 4.0 (180 reviews)</div>
                        <div class="online-status">Joined 8 minutes ago</div>
                        <div class="online-status">Online</div>
                    </div>
                </div>
                <button class="btn btn-primary btn-sm">Send Message</button>
            </div>
        </div>

        <!-- Location Section -->
        <div class="bg-white p-3 mb-3 shadow-custom">
            <h5 class="mb-3">Location</h5>
            <div class="map-container d-flex align-items-center justify-content-center">
                <div class="map-pin"></div>
                <span class="text-muted small">Map Location</span>
            </div>
        </div>

        <!-- Reviews Section -->
        <div class="bg-white p-3 mb-3 shadow-custom">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Customer Reviews</h5>
                <div>
                    <span class="rating-star small">⭐ 4.0 (180 reviews)</span>
                    <a href="#" class="text-decoration-none small ms-2">All reviews ⌄</a>
                </div>
            </div>

            <!-- Review Items -->
            <div class="border-bottom pb-3 mb-3">
                <div class="d-flex gap-3">
                    <div class="review-avatar flex-shrink-0"></div>
                    <div class="flex-grow-1">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h6 class="mb-0 small fw-semibold">Marvin McKinney</h6>
                            <small class="text-muted">2 days ago</small>
                        </div>
                        <div class="rating-star small mb-2">⭐⭐⭐⭐⭐</div>
                        <p class="small text-muted mb-0 lh-base">
                            Garazi made my road trip a breeze! The extensive fleet and detailed car 
                            descriptions on the platform allowed me to choose the perfect vehicle for my off-
                            road adventure.
                        </p>
                    </div>
                </div>
            </div>

            <div class="border-bottom pb-3 mb-3">
                <div class="d-flex gap-3">
                    <div class="review-avatar flex-shrink-0"></div>
                    <div class="flex-grow-1">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h6 class="mb-0 small fw-semibold">Bessi Rakabuming</h6>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <div class="rating-star small mb-2">⭐⭐⭐⭐⭐</div>
                        <p class="small text-muted mb-0 lh-base">
                            As a frequent business traveler, Garazi has become my go-to for reliable and 
                            efficient car rentals. The Car Details page is a game-changer, providing all the 
                            information I need to make quick decisions.
                        </p>
                    </div>
                </div>
            </div>

            <div class="pb-3 mb-3">
                <div class="d-flex gap-3">
                    <div class="review-avatar flex-shrink-0"></div>
                    <div class="flex-grow-1">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h6 class="mb-0 small fw-semibold">Kristin Watson</h6>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <div class="rating-star small mb-2">⭐⭐⭐⭐⭐</div>
                        <p class="small text-muted mb-0 lh-base">
                            Garazi blends technology with a top-notch car rental experience. The platform's 
                            intuitive design and advanced search features helped me find the perfect car for 
                            my tech-packed road trip.
                        </p>
                    </div>
                </div>
            </div>

            <button class="btn btn-link text-primary w-100 text-center">
                See All Reviews <i class="fas fa-arrow-up-right-from-square ms-1"></i>
            </button>
        </div>

        <!-- Other Cars Section -->
        <div class="bg-light p-3 mb-3">
            <h5 class="mb-3">Other Cars Nearby</h5>
            
            <!-- Car Item 1 -->
            <div class="bg-white rounded-2 p-3 mb-3 shadow-sm">
                <div class="d-flex gap-3">
                    <div class="car-card-image flex-shrink-0 bg-secondary"></div>
                    <div class="flex-grow-1">
                        <div class="d-flex justify-content-between align-items-start mb-1">
                            <h6 class="mb-1 small fw-semibold">2020 - Toyota Innova</h6>
                        </div>
                        <p class="small text-primary mb-2">Rang Henduk 2.1 km from centre</p>
                        <div class="d-flex gap-3 small text-muted mb-2">
                            <span>🚗 7 seats</span>
                            <span>⚙️ Manual</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-end">
                            <div>
                                <div class="small text-success mb-1">🔄 Free cancellation</div>
                                <div class="rating-star small">⭐ 4.0 (180 reviews)</div>
                            </div>
                            <div class="text-end">
                                <div class="small text-muted">Basic price from</div>
                                <div class="fw-bold">USD 380 <span class="small fw-normal">/day</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Car Item 2 -->
            <div class="bg-white rounded-2 p-3 mb-3 shadow-sm">
                <div class="d-flex gap-3">
                    <div class="car-card-image flex-shrink-0 bg-secondary"></div>
                    <div class="flex-grow-1">
                        <div class="d-flex justify-content-between align-items-start mb-1">
                            <h6 class="mb-1 small fw-semibold">2022 - Toyota Land C...</h6>
                        </div>
                        <p class="small text-primary mb-2">Garasi Cak Su 3.1 km from centre</p>
                        <div class="d-flex gap-3 small text-muted mb-2">
                            <span>🚗 7 seats</span>
                            <span>⚙️ CVT</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-end">
                            <div>
                                <div class="small text-success mb-1">🔄 Free cancellation</div>
                                <div class="rating-star small">⭐ 4.0 (180 reviews)</div>
                            </div>
                            <div class="text-end">
                                <div class="small text-muted">Basic price from</div>
                                <div class="fw-bold">USD 230 <span class="small fw-normal">/day</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Booking Information -->
        <div class="bg-white rounded-3 p-4 mb-3 shadow-custom">
            <h5 class="fw-semibold border-bottom pb-3 mb-4">Basic Information</h5>
            
            <div class="mb-3">
                <label class="form-label small fw-semibold">Pickup Location</label>
                <div class="d-flex align-items-center py-2 border-bottom">
                    <div class="location-icon me-2"></div>
                    <span class="small text-muted">Coimbatore</span>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label small fw-semibold">Pick up Date</label>
                <div class="d-flex align-items-center py-2 border-bottom">
                    <div class="date-icon me-2"></div>
                    <span class="small text-muted">Sat 5 July 2025</span>
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label small fw-semibold">Return Date</label>
                <div class="d-flex align-items-center py-2 border-bottom">
                    <div class="date-icon me-2"></div>
                    <span class="small text-muted">Sun 6 July 2025</span>
                </div>
            </div>

            <!-- Cost Breakdown -->
            <div class="border-top pt-3">
                <div class="d-flex justify-content-between align-items-center py-2 cost-item">
                    <span class="small">Base Price</span>
                    <span class="small fw-semibold">₹ 2,150</span>
                </div>
                <div class="d-flex justify-content-between align-items-center py-2 cost-item">
                    <span class="small">Delivery & pickup charge</span>
                    <span class="small fw-semibold">₹ 500</span>
                </div>
                <div class="d-flex justify-content-between align-items-center py-2 cost-item">
                    <span class="small">Refundable security deposit</span>
                    <span class="small fw-semibold">₹ 1,000</span>
                </div>
                <div class="d-flex justify-content-between align-items-center py-3 border-top mt-3">
                    <span class="fw-bold">Total</span>
                    <span class="fw-bold">₹ 3,650</span>
                </div>
            </div>

            <button class="btn proceed-button text-white w-100 py-3 fw-semibold mt-3" onclick="handleProceed()">
                Proceed
            </button>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add interactivity
        document.querySelector('button[onclick*="Message"]')?.addEventListener('click', function() {
            alert('Message feature would open here');
        });

        document.querySelector('button:contains("See All Reviews")')?.addEventListener('click', function() {
            alert('View all reviews page would open here');
        });

        document.querySelectorAll('.bg-white.rounded-2').forEach(item => {
            item.addEventListener('click', function() {
                alert('Car details page would open here');
            });
        });

        function handleProceed() {
            alert('Proceeding with booking...');
        }

        // Add hover effects to cost items
        document.querySelectorAll('.cost-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.backgroundColor = '#f8f9fa';
                this.style.borderRadius = '8px';
                this.style.padding = '8px 12px';
                this.style.transition = 'all 0.2s ease';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.backgroundColor = 'transparent';
                this.style.padding = '8px 0';
            });
        });
    </script>
</body>
</html>