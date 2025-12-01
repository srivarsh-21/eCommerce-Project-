<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrueMotors - Vehicle Servicing</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    
        .hero-section {
            position: relative;
            height: 100vh;
            min-height: 600px;
            background: url('assets/image/service1 page front image.png') center/cover no-repeat;
            display: flex;
            align-items: flex-end;
            justify-content: flex-end;
            color: white;
        }
        
        .hero-content {
            max-width: 900px;
            text-align: left;
            padding: 3rem;
            margin-bottom: 2rem;
            margin-right: 2rem;
        }
        
        .hero-content h1 {
            font-size: 32px;
            font-weight: 700;
            line-height: 1.4;
            margin-bottom: 1.5rem;
        }
        
        .btn-book {
            background: #742B88;
            border: none;
            padding: 8px 32px;
            font-size: 20px;
            font-weight: 700;
            border-radius: 12px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
            color: white;
        }
        
        .btn-book:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(203, 121, 214, 0.6);
            color: white;
        }
        
        @media (max-width: 768px) {
            .hero-section {
                align-items: center;
                justify-content: center;
            }
            
            .hero-content {
                max-width: 100%;
                text-align: center;
                padding: 2rem;
                margin: 0;
            }
            
            .hero-content h1 {
                font-size: 1.5rem;
            }
        }
        
        @media (max-width: 576px) {
            .hero-content {
                padding: 1.5rem;
            }
            
            .hero-content h1 {
                font-size: 1.25rem;
            }
            
            .btn-book {
                padding: 10px 24px;
                font-size: 0.9rem;
            }
        }

         .breadcrumb {
            background-color: transparent;
            padding: 1rem 0;
            font-size: 0.9rem;
        }
        .breadcrumb-item + .breadcrumb-item::before {
            content: ">";
        }
        .main-heading {
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        .subtitle {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 2rem;
        }
        .booking-form {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .form-select, .form-control {
            padding: 0.75rem 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 1.5rem;
        }
        .form-select:focus, .form-control:focus {
            border-color: #7b2d8e;
            box-shadow: 0 0 0 0.2rem rgba(123, 45, 142, 0.25);
        }
        .form-select.is-invalid {
            border-color: #dc3545;
        }
        .invalid-feedback {
            display: none;
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: -1rem;
            margin-bottom: 1rem;
        }
        .invalid-feedback.show {
            display: block;
        }
        .btn-book {
            background: linear-gradient(135deg, #7b2d8e 0%, #9c4bb5 100%);
            color: white;
            padding: 0.75rem 2rem;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            display: block;
            margin: 2rem auto 0;
            transition: transform 0.2s;
        }
        .btn-book:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(123, 45, 142, 0.3);
        }
        .btn-book:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }
        .ad-card {
            border-radius: 15px;
            padding: 2rem;
            color: white;
            margin-bottom: 1.5rem;
            overflow: hidden;
        }
        .ad-card h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }
        .ad-card p {
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
            color: #ccc;
        }
        .ad-card .price {
            color: #00ff88;
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .ad-card img {
            margin-top: 78px;
            width: 490px;
            height:300px;
        }
        .btn-test-drive {
            background: #00ff88;
            color: #1a1a1a;
            padding: 0.5rem 1.5rem;
            border: none;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
        }
        .sell-card {
            background-color: #ffd6e7;
            border: none;
            margin-bottom: 50px;
            margin-left: 20px;
        }
        .sell-btn {
            background-color: #8b4513;
            font-weight: 500;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }
        .sell-btn:hover {
            background-color: #6b3410;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        .sell-icon {
            width: 70px;
            height: auto;
        }
        .character-counter {
            text-align: right;
            font-size: 0.875rem;
            color: #666;
            margin-top: -1rem;
            margin-bottom: 1rem;
        }

        /* Modal Styles - Full Screen Without Scrolling */
        .booking-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.85);
            z-index: 9999;
            overflow: hidden;
        }
        .booking-modal.show {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .modal-content-wrapper {
            background: white;
            border-radius: 15px;
            max-width: 95vw;
            width: 1200px;
            height: 90vh;
            display: flex;
            position: relative;
            animation: slideUp 0.3s ease;
            overflow: hidden;
        }
        @keyframes slideUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        .modal-close {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #fff;
            border: none;
            font-size: 28px;
            cursor: pointer;
            color: #666;
            z-index: 10;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            line-height: 1;
        }
        .modal-close:hover {
            background: #f0f0f0;
        }
        .modal-left {
            flex: 0 0 45%;
            padding: 35px;
            background: #f8f9fa;
            border-radius: 15px 0 0 15px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }
        .modal-right {
            flex: 0 0 55%;
            padding: 35px;
            overflow-y: auto;
            background: white;
        }
        .modal-left h2 {
            color: #28a745;
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 8px;
        }
        .modal-left > p {
            color: #666;
            font-size: 13px;
            margin-bottom: 25px;
        }
        .booking-summary h3 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 18px;
        }
        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            font-size: 13px;
        }
        .summary-label {
            color: #666;
            font-weight: 500;
        }
        .summary-value {
            color: #000;
            font-weight: 600;
            text-align: right;
            max-width: 60%;
        }
        .special-instruction-box {
            margin-top: 12px;
            padding: 10px;
            background: #fff;
            border-radius: 8px;
            border: 1px solid #ddd;
        }
        .special-instruction-box .summary-label {
            display: block;
            margin-bottom: 5px;
            font-size: 12px;
        }
        .special-instruction-box .summary-value {
            color: #666;
            font-weight: 400;
            font-style: italic;
            max-width: 100%;
            font-size: 12px;
        }
        .mechanic-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 10px;
            margin-top: 15px;
            flex-shrink: 0;
        }
        .view-booking-btn {
            display: inline-flex;
            align-items: center;
            color: #7b2d8e;
            font-weight: 600;
            text-decoration: none;
            margin-top: 15px;
            font-size: 13px;
        }
        .view-booking-btn:hover {
            color: #5a1f6a;
        }
        .modal-right h3 {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 15px;
        }
        .modal-right > p {
            font-size: 12px;
            color: #666;
            margin-bottom: 15px;
            line-height: 1.5;
        }
        .terms-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .terms-list > li {
            margin-bottom: 15px;
            font-size: 12px;
            line-height: 1.5;
        }
        .terms-list > li > strong {
            display: block;
            margin-bottom: 6px;
            color: #000;
            font-size: 12px;
        }
        .terms-list ul {
            list-style: disc;
            padding-left: 18px;
            margin: 0;
        }
        .terms-list ul li {
            margin-bottom: 4px;
            color: #333;
            font-size: 11px;
        }

        @media (max-width: 992px) {
            .modal-content-wrapper {
                flex-direction: column;
                width: 95vw;
                height: 95vh;
            }
            .modal-left, .modal-right {
                flex: 1;
                padding: 25px;
            }
            .modal-left {
                border-radius: 15px 15px 0 0;
                overflow-y: auto;
            }
            .modal-right {
                border-radius: 0 0 15px 15px;
            }
            .mechanic-image {
                height: 150px;
            }
        }

        /* Custom Scrollbar */
        .modal-right::-webkit-scrollbar {
            width: 8px;
        }
        .modal-right::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        .modal-right::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }
        .modal-right::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        /* ========== NEW STYLES FOR WHY CHOOSE US & POPULAR VEHICLES ========== */
        
        /* Why Choose Us Section */
        .why-choose-us-section {
            background-color: #f5f5f5;
            padding: 60px 0;
            margin-top: 60px;
        }
        
        .why-choose-heading {
            text-align: center;
            font-weight: 600;
            font-size: 40px;
            margin-bottom: 1rem;
            color: #000;
        }
        
        .why-choose-subtitle {
            text-align: center;
            color: #000000;
            font-weight: 400;
            font-size: 16px;
            margin-bottom: 3rem;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .why-content-wrapper {
            display: flex;
            align-items: center;
            gap: 3rem;
        }
        
        .why-features-list {
            flex: 1;
        }
        
        .why-features-list ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .why-features-list li {
            margin-bottom: 1.5rem;
        }
        
        .why-feature-title {
            display: block;
            font-size: 20px;
            color: #000;
            margin-bottom: 0.3rem;
            font-weight: 600;
        }
        
        .why-feature-desc {
            color: #000;
            font-size: 20px;
            font-weight: 600;
            margin-left: 15px;
        }
        
        .why-image-wrapper {
            flex: 1;
            text-align: center;
        }
        
        .why-mechanic-image {
            width: 100%;
            max-width: 500px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        /* Popular Service Vehicles Section */
        .popular-vehicles-section {
            padding: 60px 0;
            background: white;
        }
        
        .popular-vehicles-heading {
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 2rem;
            color: #000;
        }
        
        .vehicles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }
        
        .vehicle-type-card {
            text-align: center;
            padding: 1.5rem;
            border-radius: 12px;
            background: #f8f9fa;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .vehicle-type-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        
        .vehicle-type-image {
            width: 100%;
            max-width: 150px;
            height: 120px;
            object-fit: contain;
            margin-bottom: 1rem;
        }
        
        .vehicle-type-name {
            font-weight: 600;
            font-size: 1rem;
            margin: 0;
            color: #000;
        }

        @media (max-width: 768px) {
            .why-content-wrapper {
                flex-direction: column;
            }
            
            .vehicles-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.5rem;
            }
            
            .why-choose-us-section {
                padding: 40px 0;
            }
            
            .popular-vehicles-section {
                padding: 40px 0;
            }
        }
    </style>
</head>
<body>
    <section class="hero-section">
        <div class="hero-content">
            <h1 id="heroHeading">Introducing Vehicle Servicing on TrueMotors! Expert technicians, genuine parts, and transparent pricing – all at your fingertips  <button class=" btn-book" id="bookServiceBtn">
                Book Service Now →</button></h1>
            </div>
    </section>

    <div class="container py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">Services</li>
                <li class="breadcrumb-item active" aria-current="page">Book a Service</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-lg-7">
                <h1 class="main-heading">Book a Service</h1>
                <p class="subtitle">"Ensure your vehicle stays in top condition. Book your service with TrueMotors' trusted partners today."</p>

                <div class="booking-form">
                    <select class="form-select" id="vehicleSelect">
                        <option selected>Select Your Vehicle</option>
                        <option value="maruti-swift">Maruti Swift</option>
                        <option value="hyundai-i20">Hyundai i20</option>
                        <option value="honda-city">Honda City</option>
                        <option value="tata-nexon">Tata Nexon</option>
                        <option value="toyota-innova">Toyota Innova Crysta</option>
                    </select>
                    <div class="invalid-feedback" id="vehicleError">Please select your vehicle</div>

                    <select class="form-select" id="serviceType">
                        <option selected>Service Type</option>
                        <option value="general">General Service</option>
                        <option value="oil-change">Oil Change</option>
                        <option value="brake-service">Brake Service</option>
                        <option value="ac-service">AC Service</option>
                        <option value="battery">Battery Replacement</option>
                    </select>
                    <div class="invalid-feedback" id="serviceTypeError">Please select service type</div>

                    <select class="form-select" id="dateTime">
                        <option selected>Select Preferred Date & Time</option>
                        <option value="24/05/25 / 9 AM - 6 PM">24/05/25 / 9 AM - 6 PM</option>
                        <option value="25/05/25 / 9 AM - 6 PM">25/05/25 / 9 AM - 6 PM</option>
                        <option value="26/05/25 / 9 AM - 6 PM">26/05/25 / 9 AM - 6 PM</option>
                        <option value="27/05/25 / 9 AM - 6 PM">27/05/25 / 9 AM - 6 PM</option>
                        <option value="28/05/25 / 9 AM - 6 PM">28/05/25 / 9 AM - 6 PM</option>
                    </select>
                    <div class="invalid-feedback" id="dateTimeError">Please select preferred date & time</div>

                    <select class="form-select" id="serviceLocation">
                        <option selected>Choose Service Location</option>
                        <option value="Coimbatore">Coimbatore</option>
                        <option value="Bangalore - Indiranagar">Bangalore - Indiranagar</option>
                        <option value="Bangalore - Koramangala">Bangalore - Koramangala</option>
                        <option value="Bangalore - Whitefield">Bangalore - Whitefield</option>
                        <option value="Bangalore - Jayanagar">Bangalore - Jayanagar</option>
                    </select>
                    <div class="invalid-feedback" id="locationError">Please select service location</div>

                    <textarea class="form-control" id="specialInstruction" rows="4" placeholder="Special Instruction" maxlength="500"></textarea>
                    <div class="character-counter">
                        <span id="charCount">0</span>/500 characters
                    </div>

                    <button class="btn btn-book" id="bookServiceFormBtn">
                        Book Service Now <i class="fas fa-arrow-right ms-2"></i>
                    </button>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="ad-card">
                    <div style="position: relative; z-index: 1; ">
                        <img src="assets/image/book-a-test-drive.png" alt="skoda ad">
                    </div>
                </div>

                <div class="container">
    <div class="card p-4 rounded-3 shadow-sm text-start sell-card" style="width: 500px;">
        <h3 class="fs-2 fw-bold text-dark mb-2">Do You Want to <br> Sell a Car?</h3>
        <p class="fs-5 text-dark mb-4">We are committed to providing our customers with exceptional service.</p>
        <div class="d-flex align-items-center justify-content-between action-row">
            <div class="sell-icon-container">
               <img src="assets/icon/electric-car2.svg.png" alt="electric-car" class="w-25">
            </div>
            <button id="sellCarBtn" class="sell-btn btn text-white px-4 py-2 rounded-3 border-0">Sell a Car</button>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>

    <!-- ========== NEW SECTION: WHY CHOOSE US ========== -->
    <section class="why-choose-us-section">
        <div class="container">
            <h2 class="why-choose-heading">Why Choose Us</h2>
            <p class="why-choose-subtitle">Our certified and trained technicians ensure that your vehicle gets the care it deserves. From routine servicing to complex repairs, your car is in safe hands.</p>
            
            <div class="why-content-wrapper">
                <div class="why-features-list">
                    <ul>
                        <li data-feature="expert-technicians">
                            <strong class="why-feature-title">• Expert Technicians:</strong>
                            <span class="why-feature-desc">Certified professionals for every service.</span>
                        </li>
                        <li data-feature="genuine-parts">
                            <strong class="why-feature-title">• Genuine Parts:</strong>
                            <span class="why-feature-desc">Guaranteed quality and reliability.</span>
                        </li>
                        <li data-feature="transparent-pricing">
                            <strong class="why-feature-title">• Transparent Pricing:</strong>
                            <span class="why-feature-desc">No hidden charges, upfront estimates.</span>
                        </li>
                        <li data-feature="convenience">
                            <strong class="why-feature-title">• Convenience:</strong>
                            <span class="why-feature-desc">Home pickup & drop for hassle-free servicing.</span>
                        </li>
                    </ul>
                </div>
                <div class="why-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?w=500" alt="Mechanic working on vehicle" class="why-mechanic-image" id="whyChooseImage">
                </div>
            </div>
        </div>
    </section>

    <!-- ========== NEW SECTION: POPULAR SERVICE VEHICLES ========== -->
    <section class="popular-vehicles-section">
        <div class="container">
            <h3 class="popular-vehicles-heading">Popular Service Vehicles:</h3>
            <div class="vehicles-grid">
                <div class="vehicle-type-card" data-vehicle-type="bikes">
                    <img src="https://images.unsplash.com/photo-1558981359-219d6364c9c8?w=200" alt="Bikes" class="vehicle-type-image">
                    <h5 class="vehicle-type-name">Bikes</h5>
                </div>
                <div class="vehicle-type-card" data-vehicle-type="cars">
                    <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?w=200" alt="Cars" class="vehicle-type-image">
                    <h5 class="vehicle-type-name">Cars</h5>
                </div>
                <div class="vehicle-type-card" data-vehicle-type="commercial">
                    <img src="https://images.unsplash.com/photo-1586679180991-51eba8bbfb74?w=200" alt="Commercial Vehicle" class="vehicle-type-image">
                    <h5 class="vehicle-type-name">Commercial Vehicle</h5>
                </div>
                <div class="vehicle-type-card" data-vehicle-type="tractor">
                    <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?w=200" alt="Tractor & Agriculture Vehicle" class="vehicle-type-image">
                    <h5 class="vehicle-type-name">Tractor & Agriculture Vehicle</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Confirmation Modal -->
    <div class="booking-modal" id="bookingModal">
        <div class="modal-content-wrapper">
            <button class="modal-close" onclick="closeBookingModal()">&times;</button>
            
            <div class="modal-left">
                <h2>Service Booking Confirmed!</h2>
                <p>"Your booking is confirmed. Our team will contact you shortly."</p>
                
                <div class="booking-summary">
                    <h3>Booking Summary</h3>
                    
                    <div class="summary-row">
                        <span class="summary-label">Vehicle</span>
                        <span class="summary-value" id="summaryVehicle">-</span>
                    </div>
                    
                    <div class="summary-row">
                        <span class="summary-label">Service Type</span>
                        <span class="summary-value" id="summaryService">-</span>
                    </div>
                    
                    <div class="summary-row">
                        <span class="summary-label">Preferred Date & Time</span>
                        <span class="summary-value" id="summaryDateTime">-</span>
                    </div>
                    
                    <div class="summary-row">
                        <span class="summary-label">Service Location</span>
                        <span class="summary-value" id="summaryLocation">-</span>
                    </div>
                    
                    <div class="special-instruction-box" id="instructionBox" style="display: none;">
                        <span class="summary-label">Special Instruction</span>
                        <span class="summary-value" id="summaryInstruction">-</span>
                    </div>
                </div>
                
                <img src="https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?w=400&h=250&fit=crop" alt="Mechanic working" class="mechanic-image">
                
                <a href="#" class="view-booking-btn">View Your Booking →</a>
            </div>
            
            <div class="modal-right">
                <h3>Service Booking – Terms & Conditions</h3>
                <p>Thank you for booking your vehicle service with TrueMotors. Please read and acknowledge the following terms:</p>
                
                <ol class="terms-list">
                    <li>
                        <strong>1. Booking Confirmation</strong>
                        <ul>
                            <li>Your booking is confirmed based on the details provided.</li>
                            <li>Changes in booking (reschedule/cancellation) can be made up to 2 hours before your scheduled time.</li>
                        </ul>
                    </li>
                    
                    <li>
                        <strong>2. Vehicle Preparation</strong>
                        <ul>
                            <li>Ensure your vehicle is ready at the pickup time and location if you have chosen home pickup or drop.</li>
                            <li>Remove all valuables from the vehicle before handing it over to our service partner.</li>
                        </ul>
                    </li>
                    
                    <li>
                        <strong>3. Service Charges</strong>
                        <ul>
                            <li>The final service charges may vary based on actual inspection and service requirements.</li>
                            <li>Only genuine parts or manufacturer-approved alternatives will be used for replacements.</li>
                        </ul>
                    </li>
                    
                    <li>
                        <strong>4. Payments</strong>
                        <ul>
                            <li>Full payment must be completed before the vehicle is released post-service.</li>
                            <li>Any additional services or part replacements will be informed and charged separately.</li>
                        </ul>
                    </li>
                    
                    <li>
                        <strong>5. Liability</strong>
                        <ul>
                            <li>TrueMotors is not responsible for pre-existing damages or mechanical failures unrelated to the service performed.</li>
                            <li>Warranty on parts and service is as per the manufacturer's or service partner's policy.</li>
                        </ul>
                    </li>
                    
                    <li>
                        <strong>6. Cancellation Policy</strong>
                        <ul>
                            <li>Cancellations within 2 hours of scheduled time may attract cancellation charges as per our policy.</li>
                        </ul>
                    </li>
                    
                    <li>
                        <strong>7. Disputes</strong>
                        <ul>
                            <li>For any concerns or disputes regarding your service, please contact our support team for resolution.</li>
                        </ul>
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Get values from elements
            var headingText = $('#heroHeading').text();
            var buttonText = $('#bookServiceBtn').text();
            
            console.log('Heading Text:', headingText);
            console.log('Button Text:', buttonText);
            
            // Button click event
            $('#bookServiceBtn').on('click', function() {
                var clickedButton = $(this).text();
                console.log('Button clicked:', clickedButton);
                // Scroll to booking form
                $('html, body').animate({
                    scrollTop: $('.booking-form').offset().top - 100
                }, 800);
            });
            
            // Example: Get and set values dynamically
            $('.btn-book').hover(
                function() {
                    console.log('Hovering over:', $(this).text());
                },
                function() {
                    console.log('Mouse left button');
                }
            );
        });

        // ========== BOOK SERVICE FORM FUNCTIONALITY ==========
        $(document).ready(function() {
            var bookings = []; // Store bookings in memory

            // Character counter for special instructions
            $('#specialInstruction').on('input', function() {
                var length = $(this).val().length;
                $('#charCount').text(length);
            });

            // Real-time validation on field change
            $('#vehicleSelect').on('change', function() {
                validateField($(this), '#vehicleError');
            });

            $('#serviceType').on('change', function() {
                validateField($(this), '#serviceTypeError');
            });

            $('#dateTime').on('change', function() {
                validateField($(this), '#dateTimeError');
            });

            $('#serviceLocation').on('change', function() {
                validateField($(this), '#locationError');
            });

            // Validate individual field
            function validateField($field, errorSelector) {
                var value = $field.val();
                var defaultValue = $field.find('option:first').text();
                
                if (value === defaultValue || !value || value === '') {
                    $field.addClass('is-invalid');
                    $(errorSelector).addClass('show');
                    return false;
                } else {
                    $field.removeClass('is-invalid');
                    $(errorSelector).removeClass('show');
                    return true;
                }
            }

            // Validate all fields
            function validateAllFields() {
                var isValid = true;
                
                isValid = validateField($('#vehicleSelect'), '#vehicleError') && isValid;
                isValid = validateField($('#serviceType'), '#serviceTypeError') && isValid;
                isValid = validateField($('#dateTime'), '#dateTimeError') && isValid;
                isValid = validateField($('#serviceLocation'), '#locationError') && isValid;
                
                return isValid;
            }

            // Book Service Form Button Click
            $('#bookServiceFormBtn').click(function(e) {
                e.preventDefault();

                // Validate all fields
                if (!validateAllFields()) {
                    // Scroll to first error
                    var firstError = $('.form-select.is-invalid').first();
                    if (firstError.length) {
                        $('html, body').animate({
                            scrollTop: firstError.offset().top - 100
                        }, 300);
                    }
                    return;
                }

                // Get form values (text from selected options)
                var vehicle = $('#vehicleSelect option:selected').text();
                var serviceType = $('#serviceType option:selected').text();
                var dateTime = $('#dateTime option:selected').text();
                var location = $('#serviceLocation option:selected').text();
                var instruction = $('#specialInstruction').val().trim();

                // Create booking object
                var bookingData = {
                    bookingId: 'BK' + Date.now(),
                    vehicle: vehicle,
                    serviceType: serviceType,
                    dateTime: dateTime,
                    location: location,
                    instruction: instruction,
                    timestamp: new Date().toISOString(),
                    bookedAt: new Date().toLocaleString()
                };

                // Log the data
                console.log('Booking Data:', bookingData);
                
                // Store booking in array
                bookings.push(bookingData);
                console.log('All Bookings:', bookings);

                // Update modal with booking details
                $('#summaryVehicle').text(vehicle);
                $('#summaryService').text(serviceType);
                $('#summaryDateTime').text(dateTime);
                $('#summaryLocation').text(location);
                
                if (instruction) {
                    $('#summaryInstruction').text(instruction);
                    $('#instructionBox').show();
                } else {
                    $('#instructionBox').hide();
                }

                // Show modal
                $('#bookingModal').addClass('show');
                $('body').css('overflow', 'hidden');

                // Reset form
                resetForm();
            });

            // Reset form function
            function resetForm() {
                $('#vehicleSelect').val('Select Your Vehicle').removeClass('is-invalid');
                $('#serviceType').val('Service Type').removeClass('is-invalid');
                $('#dateTime').val('Select Preferred Date & Time').removeClass('is-invalid');
                $('#serviceLocation').val('Choose Service Location').removeClass('is-invalid');
                $('#specialInstruction').val('');
                $('#charCount').text('0');
                $('.invalid-feedback').removeClass('show');
            }

            // Change event listeners for dropdowns (for logging)
            $('#vehicleSelect').change(function() {
                console.log('Selected Vehicle:', $(this).val(), '-', $(this).find('option:selected').text());
            });

            $('#serviceType').change(function() {
                console.log('Selected Service Type:', $(this).val(), '-', $(this).find('option:selected').text());
            });

            $('#dateTime').change(function() {
                console.log('Selected Date & Time:', $(this).val(), '-', $(this).find('option:selected').text());
            });

            $('#serviceLocation').change(function() {
                console.log('Selected Location:', $(this).val(), '-', $(this).find('option:selected').text());
            });

            // Get all bookings function (can be called from console)
            window.getAllBookings = function() {
                console.log('Total Bookings:', bookings.length);
                console.table(bookings);
                return bookings;
            };

            // Clear all bookings function
            window.clearBookings = function() {
                bookings = [];
                console.log('All bookings cleared');
            };

            console.log('Booking system initialized. Use getAllBookings() to view all bookings.');
        });

        // Close modal function
        function closeBookingModal() {
            $('#bookingModal').removeClass('show');
            $('body').css('overflow', 'auto');
        }

        // Close modal when clicking outside
        $(document).on('click', '.booking-modal', function(e) {
            if ($(e.target).hasClass('booking-modal')) {
                closeBookingModal();
            }
        });
        // ========== END BOOK SERVICE FORM FUNCTIONALITY ==========

        // Test Drive Button
        $(document).ready(function() {
            $('.btn-test-drive').click(function() {
                alert('Redirecting to test drive booking page...');
                // window.location.href = 'test-drive.html';
            });
        });

        // Sell Car Button
        $(document).ready(function() {
            $('#sellCarBtn').on('click', function() {
                const cardTitle = $('.sell-card h3').text().trim().replace(/\s+/g, ' ');
                const cardDescription = $('.sell-card p').text().trim();
                const buttonText = $(this).text();
                
                // Log the values
                console.log('Card Title:', cardTitle);
                console.log('Card Description:', cardDescription);
                console.log('Button Clicked:', buttonText);
                
                // Display alert with values
                alert('Action: ' + buttonText + '\n\nCard: ' + cardTitle + '\n\nDescription: ' + cardDescription);
                
                // You can also perform other actions here
                // Example: redirect to sell page
                // window.location.href = 'sell-car.php';
            });
            
            // Hover effect logging (optional)
            $('#sellCarBtn').hover(
                function() {
                    console.log('Button hovered');
                },
                function() {
                    console.log('Button hover ended');
                }
            );
            
            // Get all card values function
            function getSellCardValues() {
                return {
                    title: $('.sell-card h3').text().trim().replace(/\s+/g, ' '),
                    description: $('.sell-card p').text().trim(),
                    buttonText: $('#sellCarBtn').text(),
                    backgroundColor: $('.sell-card').css('background-color')
                };
            }
            
            // Example: Call this function to get all values
            console.log('Sell Card Values:', getSellCardValues());
        });

        // ========== NEW FUNCTIONALITY: WHY CHOOSE US & POPULAR VEHICLES ==========
        
        $(document).ready(function() {
            
            // ========== WHY CHOOSE US SECTION ==========
            console.log('===== WHY CHOOSE US SECTION =====');
            
            // Get Why Choose Us heading
            var whyHeading = $('.why-choose-heading').text();
            console.log('Why Choose Us Heading:', whyHeading);
            
            // Get subtitle
            var whySubtitle = $('.why-choose-subtitle').text();
            console.log('Why Choose Us Subtitle:', whySubtitle);
            
            // Get all features and their descriptions
            var features = [];
            $('.why-features-list li').each(function(index) {
                var featureData = {
                    index: index + 1,
                    featureType: $(this).data('feature'),
                    title: $(this).find('.why-feature-title').text().trim(),
                    description: $(this).find('.why-feature-desc').text().trim()
                };
                features.push(featureData);
                console.log('Feature ' + (index + 1) + ':', featureData);
            });
            
            // Get image source
            var whyImageSrc = $('#whyChooseImage').attr('src');
            console.log('Why Choose Us Image Source:', whyImageSrc);
            
            // Store all Why Choose Us data
            var whyChooseUsData = {
                heading: whyHeading,
                subtitle: whySubtitle,
                features: features,
                imageSrc: whyImageSrc
            };
            
            console.log('Complete Why Choose Us Data:', whyChooseUsData);
            
            // Click event for features
            $('.why-features-list li').on('click', function() {
                var clickedFeature = {
                    title: $(this).find('.why-feature-title').text().trim(),
                    description: $(this).find('.why-feature-desc').text().trim(),
                    type: $(this).data('feature')
                };
                console.log('Feature Clicked:', clickedFeature);
                alert('Feature: ' + clickedFeature.title + '\n\nDescription: ' + clickedFeature.description);
            });
            
            // ========== POPULAR SERVICE VEHICLES SECTION ==========
            console.log('===== POPULAR SERVICE VEHICLES SECTION =====');
            
            // Get section heading
            var vehiclesHeading = $('.popular-vehicles-heading').text();
            console.log('Popular Vehicles Heading:', vehiclesHeading);
            
            // Get all vehicle cards data
            var vehicleTypes = [];
            $('.vehicle-type-card').each(function(index) {
                var vehicleData = {
                    index: index + 1,
                    type: $(this).data('vehicle-type'),
                    name: $(this).find('.vehicle-type-name').text().trim(),
                    imageSrc: $(this).find('.vehicle-type-image').attr('src'),
                    imageAlt: $(this).find('.vehicle-type-image').attr('alt')
                };
                vehicleTypes.push(vehicleData);
                console.log('Vehicle Type ' + (index + 1) + ':', vehicleData);
            });
            
            // Store all Popular Vehicles data
            var popularVehiclesData = {
                heading: vehiclesHeading,
                vehicles: vehicleTypes
            };
            
            console.log('Complete Popular Vehicles Data:', popularVehiclesData);
            
            // Click event for vehicle cards
            $('.vehicle-type-card').on('click', function() {
                var clickedVehicle = {
                    type: $(this).data('vehicle-type'),
                    name: $(this).find('.vehicle-type-name').text().trim(),
                    imageSrc: $(this).find('.vehicle-type-image').attr('src')
                };
                console.log('Vehicle Card Clicked:', clickedVehicle);
                alert('Selected Vehicle Type: ' + clickedVehicle.name + '\n\nType: ' + clickedVehicle.type);
            });
            
            // Hover effects with logging
            $('.vehicle-type-card').hover(
                function() {
                    var vehicleName = $(this).find('.vehicle-type-name').text();
                    console.log('Hovering over vehicle:', vehicleName);
                },
                function() {
                    var vehicleName = $(this).find('.vehicle-type-name').text();
                    console.log('Mouse left vehicle:', vehicleName);
                }
            );
            
            // ========== GLOBAL FUNCTIONS FOR DATA ACCESS ==========
            
            // Function to get all Why Choose Us data
            window.getWhyChooseUsData = function() {
                console.log('Why Choose Us Data Retrieved:');
                console.table(whyChooseUsData.features);
                return whyChooseUsData;
            };
            
            // Function to get all Popular Vehicles data
            window.getPopularVehiclesData = function() {
                console.log('Popular Vehicles Data Retrieved:');
                console.table(popularVehiclesData.vehicles);
                return popularVehiclesData;
            };
            
            // Function to get all page data
            window.getAllPageData = function() {
                return {
                    whyChooseUs: whyChooseUsData,
                    popularVehicles: popularVehiclesData
                };
            };
            
            console.log('========================================');
            console.log('New sections initialized successfully!');
            console.log('Available functions:');
            console.log('- getWhyChooseUsData()');
            console.log('- getPopularVehiclesData()');
            console.log('- getAllPageData()');
            console.log('========================================');
        });
        
        // ========== END NEW FUNCTIONALITY ==========
    </script>
</body>
</html>