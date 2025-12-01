<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maruti Suzuki Swift VXI 2021 - True Motors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f5f5f5;
        }

        .top-banner {
            position: relative;
            width: 100%;
            max-width: 1400px;
            margin: 30px auto;
            height: auto;
            overflow: hidden;
            padding: 0 20px;
        }

        .top-banner img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 8px;
        }

        .breadcrumb {
            margin: 20px auto;
            color: #616161;
            font-size: 16px;
            font-weight: 400;
            max-width: 1400px;
            padding: 0 20px;
        }

        .main-container {
            display: flex;
            background: #f5f5f5;
            border-radius: 12px;
            padding: 20px;
            gap: 20px;
            max-width: 1400px;
            margin: 20px auto;
        }

        .car-image {
            position: relative;
            width: 55%;
            background: white;
            padding: 40px 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .car-image-wrapper {
            position: relative;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }

        .car-image-wrapper img {
            width: 100%;
            height: auto;
            display: block;
        }

        .arrow-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: white;
            border: 1px solid #ddd;
            padding: 10px 14px;
            cursor: pointer;
            font-size: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            transition: all 0.3s;
            z-index: 10;
        }

        .arrow-btn:hover {
            background: #f5f5f5;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .arrow-btn.left {
            left: 10px;
        }

        .arrow-btn.right {
            right: 10px;
        }

        .info-container {
            background-color: #fff;
            padding: 30px;
            width: 45%;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .info-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 10px;
        }

        .heart-icon {
            font-size: 24px;
            color: #8b3fc9;
            cursor: pointer;
            transition: all 0.3s;
        }

        .heart-icon:hover {
            transform: scale(1.2);
        }

        .heart-icon.filled {
            color: #d60000;
        }

        .info-container h2 {
            color: #2101AF;
            font-size: 28px;
            margin: 0;
            flex: 1;
        }

        .meta {
            font-size: 14px;
            color: #000;
            margin-bottom: 12px;
            font-weight: 400;
        }

        .location {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .location i {
            color: #8b3fc9;
        }

        .price {
            font-size: 32px;
            font-weight: 600;
            color: #040084;
            margin-bottom: 8px;
        }

        .emi {
            font-size: 14px;
            color: #040084;
            margin-bottom: 15px;
            font-weight: 400;
        }

        .emi-link {
            font-size: 14px;
            color: #130057;
            text-decoration: underline;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 15px;
            cursor: pointer;
        }

        .emi-link:hover {
            color: #8b3fc9;
        }

        .emi-offer {
            background-color: #e5d8f7;
            color: #000;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            width: 100%;
            margin-bottom: 20px;
            transition: all 0.3s;
        }

        .emi-offer:hover {
            background-color: #d4c0f0;
        }

        .test-drive {
            font-size: 14px;
            margin-bottom: 20px;
            color: #333;
        }

        .action-buttons {
            display: flex;
            gap: 12px;
        }

        .book-now {
            background-color: #d60000;
            color: #fff;
            padding: 12px 24px;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            flex: 1;
            transition: all 0.3s;
        }

        .book-now:hover {
            background-color: #b80000;
        }

        .free-test-drive {
            background-color: #7a00c2;
            color: #fff;
            padding: 12px 24px;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            flex: 1;
            transition: all 0.3s;
        }

        .free-test-drive:hover {
            background-color: #6300a0;
        }

        .slider-banner-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            max-width: 1400px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .image-slider {
            display: flex;
            gap: 12px;
            overflow-x: auto;
            padding: 10px 0;
            flex: 1;
            scroll-behavior: smooth;
        }

        .image-slider::-webkit-scrollbar {
            height: 8px;
        }

        .image-slider::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .image-slider::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }

        .image-card {
            flex: 0 0 auto;
            border: 2px solid #000000;
            border-radius: 12px;
            overflow: hidden;
            width: 150px;
            height: 100px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .image-card:hover {
            transform: scale(1.05);
            border-color: #8b3fc9;
        }

        .image-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .register-banner {
            background-color: #203F63;
            color: #fff;
            padding: 20px 25px;
            border-radius: 16px;
            width: 474px;
            text-align: left;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .register-banner p {
            font-size: 16px;
            font-weight: 700;
            margin: 0;
            line-height: 1.5;
            flex: 1;
        }

        .register-btn {
            background-color: #DD3535;
            border: none;
            padding: 10px 20px;
            font-size: 14px;
            color: white;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            white-space: nowrap;
            transition: all 0.3s;
        }

        .register-btn:hover {
            background-color: #c02a2a;
        }

        .cards-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 30px;
            max-width: 1400px;
            margin-left: auto;
            margin-right: auto;
            padding: 0 20px;
        }

        .info-card {
            background-color: white;
            border-radius: 20px;
            padding: 30px 50px;
            flex: 1;
            min-width: 400px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        }

        .info-card1 {
            background-color: white;
            padding: 30px 40px;
            flex: 1;
            min-width: 350px;
            border-radius: 20px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        }

        .card-title {
            color: #742B88;
            font-size: 20px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .card-content {
            display: flex;
            justify-content: space-between;
            gap: 30px;
        }

        .column p {
            margin: 0 0 16px;
            font-size: 14px;
            color: #555;
        }

        .column span {
            font-weight: 400;
            color: #999;
        }

        .column strong {
            display: block;
            color: #222;
            font-weight: 600;
            margin-top: 4px;
        }

        .feature-ad-wrapper {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            align-items: flex-start;
            max-width: 1400px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .features-card {
            background-color: #fff;
            border-radius: 20px;
            padding: 30px;
            flex: 1.5;
            min-width: 400px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        }

        .features-content {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .feature-column {
            flex: 1;
        }

        .feature-column p {
            font-size: 14px;
            margin-bottom: 12px;
            color: #444;
        }

        .feature-column span {
            color: #999;
            font-weight: 400;
        }

        .feature-column strong {
            color: #222;
            font-weight: 600;
        }

        .ad-card {
            background-color: #fff;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
            flex: 1;
            min-width: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .ad-card img {
            width: 100%;
            display: block;
            border-radius: 16px;
        }

        .emi-calculator-section {
            max-width: 1400px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .emi-card {
            background: #fff;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        }

        .emi-card h3 {
            color: #742B88;
            font-size: 24px;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .emi-inputs {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-bottom: 40px;
        }

        .slider-group {
            display: flex;
            flex-direction: column;
        }

        .slider-group label {
            font-size: 14px;
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            color: #444;
            font-weight: 500;
        }

        .slider-group input[type=range] {
            width: 100%;
            height: 6px;
            border-radius: 5px;
            background: #ddd;
            outline: none;
            -webkit-appearance: none;
        }

        .slider-group input[type=range]::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #742B88;
            cursor: pointer;
        }

        .slider-group input[type=range]::-moz-range-thumb {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #742B88;
            cursor: pointer;
            border: none;
        }

        .emi-result {
            display: flex;
            align-items: center;
            justify-content: space-around;
            margin-top: 40px;
            flex-wrap: wrap;
            gap: 30px;
        }

        .emi-circle {
            background: conic-gradient(#51CF9D 75%, #F63A3A 25%);
            border-radius: 50%;
            width: 200px;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .emi-circle-inner {
            background: white;
            border-radius: 50%;
            width: 160px;
            height: 160px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .emi-circle p {
            font-size: 14px;
            color: #666;
            margin: 0;
        }

        .emi-circle strong {
            font-size: 20px;
            color: #000;
            font-weight: 700;
        }

        .emi-details {
            display: flex;
            gap: 40px;
            align-items: center;
        }

        .emi-detail-item {
            text-align: left;
        }

        .emi-detail-item p {
            font-size: 14px;
            color: #666;
            margin: 0 0 5px 0;
        }

        .emi-detail-item strong {
            font-size: 18px;
            color: #000;
            font-weight: 600;
        }

        .apply-btn {
            background-color: #742B88;
            color: #fff;
            padding: 12px 30px;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s;
        }

        .apply-btn:hover {
            background-color: #5d2270;
        }

        .sell-card-section {
            max-width: 1400px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .sell-card {
            background: linear-gradient(135deg, #FFE9F3 0%, #FFD5E9 100%);
            border-radius: 20px;
            padding: 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .sell-content h3 {
            font-size: 32px;
            font-weight: 700;
            color: #000;
            margin-bottom: 15px;
        }

        .sell-content p {
            font-size: 16px;
            color: #333;
            margin-bottom: 25px;
        }

        .sell-btn {
            background-color: #5c2b00;
            color: #fff;
            padding: 12px 30px;
            font-size: 16px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s;
        }

        .sell-btn:hover {
            background-color: #3d1d00;
        }

        .sell-image img {
            width: 150px;
            height: auto;
        }

        .similar-cars-section {
            max-width: 1400px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .section-title {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .car-cards-wrapper {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .car-card {
            width: 280px;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.3s;
            position: relative;
        }

        .car-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .car-img {
            position: relative;
            background: #f9f9f9;
            padding: 20px;
            height: 180px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .car-img img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .corner-ribbon {
            position: absolute;
            top: 0;
            left: 0;
            background: #002ca6;
            width: 35px;
            height: 35px;
            border-top-left-radius: 16px;
        }

        .heart {
            position: absolute;
            top: 12px;
            right: 15px;
            font-size: 20px;
            color: #a05b94;
            cursor: pointer;
            transition: all 0.3s;
        }

        .heart:hover {
            transform: scale(1.2);
        }

        .car-details {
            padding: 15px 20px 20px;
        }

        .car-details h4 {
            font-size: 15px;
            font-weight: 600;
            margin: 0 0 8px;
            color: #333;
        }

        .car-details p {
            font-size: 13px;
            color: #666;
            margin: 4px 0;
        }

        .car-details .manual {
            color: #d9008d;
            font-weight: 500;
        }

        .car-details h3 {
            color: #000;
            margin: 10px 0 6px;
            font-size: 18px;
            font-weight: 600;
        }

        .car-details .location {
            color: #9e005d;
            font-size: 13px;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .car-details .emi {
            color: #2d9cdb;
            font-size: 13px;
            margin-top: 4px;
        }

        .view-btn {
            background: none;
            border: none;
            color: #1f74f2;
            font-size: 13px;
            font-weight: 600;
            margin-top: 10px;
            cursor: pointer;
            text-align: left;
            padding: 0;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .view-btn:hover {
            text-decoration: underline;
        }

        .testimonials-maincard {
            max-width: 1400px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .testimonials-maincard h2 {
            font-size: 28px;
            font-weight: 700;
            color: #000000;
            margin-bottom: 30px;
            text-align: center;
        }

        .testimonials {
            padding: 40px;
            background: white;
            border-radius: 16px;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
        }

        .testimonials-grid {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .testimonial-card {
            padding: 30px;
            flex: 1;
            min-width: 400px;
            max-width: 550px;
            border-radius: 16px;
            border: 1px solid #ddd;
            background: #f8f9fa;
        }

        .customer-info {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            gap: 10px;
        }

        .customer-icon {
            font-size: 24px;
        }

        .customer-details {
            flex: 1;
        }

        .customer-details h4 {
            font-size: 16px;
            color: #000000;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .rating {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .stars {
            display: flex;
            gap: 2px;
        }

        .star {
            color: #ffd700;
            font-size: 16px;
        }

        .star.empty {
            color: #ddd;
        }

        .rating-text {
            margin-left: 8px;
            color: #666;
            font-size: 14px;
        }

        .testimonial-text {
            font-style: italic;
            color: #555;
            line-height: 1.6;
            margin-top: 15px;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .main-container {
                flex-direction: column;
            }

            .car-image,
            .info-container {
                width: 100%;
            }

            .slider-banner-container {
                flex-direction: column;
            }

            .register-banner {
                width: 100%;
            }

            .emi-inputs {
                grid-template-columns: 1fr;
            }

            .cards-container,
            .feature-ad-wrapper {
                flex-direction: column;
            }

            .info-card,
            .info-card1,
            .features-card {
                min-width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Top Banner -->
    <div class="top-banner">
        <img src="assets/image/banner car.png" alt="Banner Ad" />
    </div>

    <!-- Breadcrumb -->
    <div class="breadcrumb">Buy Vehicle / Cars / Cars in Coimbatore</div>

    <!-- Main Car Section -->
    <div class="main-container">
        <!-- Car Image with Arrows -->
        <div class="car-image">
            <div class="car-image-wrapper">
                <button class="arrow-btn left" onclick="changeMainImage(-1)">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <img id="mainCarImage" src="https://imgd.aeplcdn.com/664x374/n/cw/ec/54399/swift-exterior-right-front-three-quarter-64.jpeg?q=80" alt="Maruti Suzuki Swift" />
                <button class="arrow-btn right" onclick="changeMainImage(1)">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>

        <!-- Info Container -->
        <div class="info-container">
            <div class="info-header">
                <h2>Maruti Suzuki Swift VXI 2021</h2>
                <span class="heart-icon" onclick="toggleHeart(this)">♡</span>
            </div>
            <p class="meta">25,000 km | Petrol | Manual</p>
            <p class="location"><i class="bi bi-geo-alt-fill"></i> True motors, Coimbatore</p>
            <h3 class="price">₹ 9.2 Lakh</h3>
            <p class="emi">EMI ₹13,470/mo</p>
            
            <a href="#emi-calculator" class="emi-link">Your EMI Calculator</a>
            
            <button class="emi-offer" onclick="alert('EMI offer details will be sent to your email!')">Get EMI Offer</button>
            
            <p class="test-drive">Home Test Drive: <strong>Available</strong></p>
            
            <div class="action-buttons">
                <button class="book-now" onclick="alert('Booking process initiated!')">Book Now</button>
                <button class="free-test-drive" onclick="alert('Test drive scheduled!')">Free Test Drive</button>
            </div>
        </div>
    </div>

    <!-- Image Slider & Register Banner -->
    <div class="slider-banner-container">
        <div class="image-slider">
            <div class="image-card" onclick="selectImage(0)">
                <img src="https://imgd.aeplcdn.com/664x374/n/cw/ec/54399/swift-exterior-right-front-three-quarter-64.jpeg?q=80" alt="Car View 1">
            </div>
            <div class="image-card" onclick="selectImage(1)">
                <img src="https://imgd.aeplcdn.com/664x374/n/cw/ec/54399/swift-exterior-right-side-view.jpeg?q=80" alt="Car View 2">
            </div>
            <div class="image-card" onclick="selectImage(2)">
                <img src="https://imgd.aeplcdn.com/664x374/n/cw/ec/54399/swift-exterior-right-front-three-quarter-2.jpeg?q=80" alt="Car View 3">
            </div>
            <div class="image-card" onclick="selectImage(3)">
                <img src="https://imgd.aeplcdn.com/664x374/n/cw/ec/54399/swift-exterior-front-view.jpeg?q=80" alt="Car View 4">
            </div>
            <div class="image-card" onclick="selectImage(4)">
                <img src="https://imgd.aeplcdn.com/664x374/n/cw/ec/54399/swift-exterior-rear-view.jpeg?q=80" alt="Car View 5">
            </div>
            <div class="image-card" onclick="selectImage(5)">
                <img src="https://imgd.aeplcdn.com/664x374/n/cw/ec/54399/swift-interior-dashboard.jpeg?q=80" alt="Car View 6">
            </div>
        </div>

        <div class="register-banner">
            <p>Want to rent out your vehicle? List it on <strong>True Motors</strong> and earn effortlessly!</p>
            <button class="register-btn" onclick="alert('Registration page opening...')">Register Now</button>
        </div>
    </div>

    <!-- Car Overview & Specifications -->
    <div class="cards-container">
        <div class="info-card">
            <h3 class="card-title">Car Overview</h3>
            <div class="card-content">
                <div class="column">
                    <p><span>Make year</span><br><strong>Mar 2015</strong></p>
                    <p><span>Fuel</span><br><strong>Petrol</strong></p>
                    <p><span>Transmission</span><br><strong>Manual(Regular)</strong></p>
                    <p><span>RTO</span><br><strong>TN43</strong></p>
                    <p><span>Insurance Validity</span><br><strong>Jun 2025</strong></p>
                </div>
                <div class="column">
                    <p><span>Reg year</span><br><strong>Jun 2015</strong></p>
                    <p><span>Kilometers driven</span><br><strong>25,000 km</strong></p>
                    <p><span>No.of Owners</span><br><strong>1st owner</strong></p>
                    <p><span>Car Location</span><br><strong>Coimbatore</strong></p>
                    <p><span>Insurance Type</span><br><strong>Comprehensive</strong></p>
                </div>
            </div>
        </div>

        <div class="info-card1">
            <h3 class="card-title">Car specifications</h3>
            <div class="card-content">
                <div class="column">
                    <p><span>Mileage</span><br><strong>18.6kmpl</strong></p>
                    <p><span>Ground clearance</span><br><strong>170mm</strong></p>
                    <p><span>Boot Space</span><br><strong>285 litres</strong></p>
                    <p><span>Seating capacity</span><br><strong>5 units</strong></p>
                    <p><span>Fuel tank capacity</span><br><strong>45 litres</strong></p>
                </div>
                <div class="column">
                    <p><span>Displacement</span><br><strong>1197cc</strong></p>
                    <p><span>No. of cylinders</span><br><strong>4 units</strong></p>
                    <p><span>Steering type</span><br><strong>Power</strong></p>
                    <p><span>No.of gears</span><br><strong>5 units</strong></p>
                    <p><span>Front brake type</span><br><strong>Disc</strong></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Features & Ad -->
    <div class="feature-ad-wrapper">
        <div class="features-card">
            <h3 class="card-title">Features</h3>
            <div class="features-content">
                <div class="feature-column">
                    <p><span>Safety</span><br><strong>Airbags</strong></p>
                    <p><strong>Rear camera</strong></p>
                    <p><strong>Parking sensors</strong></p>
                </div>
                <div class="feature-column">
                    <p><span>Entertainment & communication</span><br><strong>Integrated(in dash)music system</strong></p>
                    <p><strong>Touch screen infotainment system</strong></p>
                    <p><strong>GPS navigation system</strong></p>
                </div>
                <div class="feature-column">
                    <p><span>Exterior</span><br><strong>Rear defogger</strong></p>
                    <p><span>Comfort & convenience</span><br><strong>Steering mounted controls</strong></p>
                    <p><strong>Driver height adjustable seat</strong></p>
                </div>
            </div>
        </div>

        <div class="ad-card">
            <img src="assets/image/book-a-test-drive.png" alt="Car Ad">
        </div>
    </div>

    <!-- EMI Calculator -->
    <div class="emi-calculator-section" id="emi-calculator">
        <div class="emi-card">
            <h3>EMI Calculator</h3>

            <div class="emi-inputs">
                <div class="slider-group">
                    <label>Down Payment <span id="downPaymentVal">₹8,02,000</span></label>
                    <input type="range" id="downPayment" min="100000" max="1000000" value="802000" step="1000">
                </div>

                <div class="slider-group">
                    <label>Loan Payment <span id="loanPaymentVal">₹2,01,000</span></label>
                    <input type="range" id="loanPayment" min="100000" max="1000000" value="201000" step="1000">
                </div>

                <div class="slider-group">
                    <label>Interest Rate <span id="interestRateVal">15%</span></label>
                    <input type="range" id="interestRate" min="5" max="20" value="15" step="0.5">
                </div>

                <div class="slider-group">
                    <label>Tenure <span id="tenureVal">40 Months</span></label>
                    <input type="range" id="tenure" min="12" max="72" value="40">
                </div>
            </div>

            <div class="emi-result">
                <div class="emi-circle">
                    <div class="emi-circle-inner">
                        <p>Total EMI</p>
                        <strong id="emiTotal">₹10,000</strong>
                    </div>
                </div>

                <div class="emi-details">
                    <div class="emi-detail-item">
                        <p>EMI Amount</p>
                        <strong id="emiAmountVal">₹10,000</strong>
                    </div>
                    <div class="emi-detail-item">
                        <p>Total Payment</p>
                        <strong id="totalPaymentVal">₹10,00,000</strong>
                    </div>
                    <button class="apply-btn" onclick="alert('EMI application submitted!')">Apply →</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Sell Vehicle Card -->
    <div class="sell-card-section">
        <div class="sell-card">
            <div class="sell-content">
                <h3>Do You Want to<br>Sell a Vehicle?</h3>
                <p>We are committed to providing our customers with exceptional service.</p>
                <button class="sell-btn" onclick="alert('Redirecting to sell page...')">Sell a Vehicle</button>
            </div>
            <div class="sell-image">
                <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?w=150&h=150&fit=crop" alt="Electric Car">
            </div>
        </div>
    </div>

    <!-- Similar Cars Section -->
    <section class="similar-cars-section">
        <h2 class="section-title">Similar Cars</h2>
        <div class="car-cards-wrapper">
            <!-- Card 1 -->
            <div class="car-card">
                <div class="car-img">
                    <img src="https://imgd.aeplcdn.com/664x374/n/cw/ec/54399/swift-exterior-right-front-three-quarter-64.jpeg?q=80" alt="Red Swift">
                    <div class="corner-ribbon"></div>
                    <span class="heart" onclick="toggleHeart(this)">♡</span>
                </div>
                <div class="car-details">
                    <h4>Maruti Suzuki Swift VXi 2021</h4>
                    <p>25,000 km | Petrol | <span class="manual">Manual</span></p>
                    <h3>₹ 9.2 Lakh</h3>
                    <p class="location"><i class="bi bi-geo-alt-fill"></i> Coimbatore</p>
                    <p class="emi">EMI: ₹14,470/mo</p>
                    <button class="view-btn">View Seller Details →</button>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="car-card">
                <div class="car-img">
                    <img src="https://imgd.aeplcdn.com/664x374/n/cw/ec/54399/swift-exterior-right-front-three-quarter-2.jpeg?q=80" alt="Blue Swift">
                    <div class="corner-ribbon"></div>
                    <span class="heart" onclick="toggleHeart(this)">♡</span>
                </div>
                <div class="car-details">
                    <h4>Maruti Suzuki Swift VXi 2021</h4>
                    <p>25,000 km | Petrol | <span class="manual">Manual</span></p>
                    <h3>₹ 9.2 Lakh</h3>
                    <p class="location"><i class="bi bi-geo-alt-fill"></i> Coimbatore</p>
                    <p class="emi">EMI: ₹14,470/mo</p>
                    <button class="view-btn">View Seller Details →</button>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="car-card">
                <div class="car-img">
                    <img src="https://imgd.aeplcdn.com/664x374/n/cw/ec/54399/swift-exterior-right-side-view.jpeg?q=80" alt="Black Swift">
                    <div class="corner-ribbon"></div>
                    <span class="heart" onclick="toggleHeart(this)">♡</span>
                </div>
                <div class="car-details">
                    <h4>Maruti Suzuki Swift VXi 2021</h4>
                    <p>25,000 km | Petrol | <span class="manual">Manual</span></p>
                    <h3>₹ 9.2 Lakh</h3>
                    <p class="location"><i class="bi bi-geo-alt-fill"></i> Coimbatore</p>
                    <p class="emi">EMI: ₹14,470/mo</p>
                    <button class="view-btn">View Seller Details →</button>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="car-card">
                <div class="car-img">
                    <img src="https://imgd.aeplcdn.com/664x374/n/cw/ec/54399/swift-exterior-front-view.jpeg?q=80" alt="Silver Swift">
                    <div class="corner-ribbon"></div>
                    <span class="heart" onclick="toggleHeart(this)">♡</span>
                </div>
                <div class="car-details">
                    <h4>Maruti Suzuki Swift VXi 2021</h4>
                    <p>25,000 km | Petrol | <span class="manual">Manual</span></p>
                    <h3>₹ 9.2 Lakh</h3>
                    <p class="location"><i class="bi bi-geo-alt-fill"></i> Coimbatore</p>
                    <p class="emi">EMI: ₹14,470/mo</p>
                    <button class="view-btn">View Seller Details →</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-maincard">
        <h2>User Reviews & Ratings - What Our Customers Say</h2>

        <div class="testimonials">
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="customer-info">
                        <span class="customer-icon">🚗</span>
                        <div class="customer-details">
                            <h4>Sekar - Coimbatore</h4>
                            <div class="rating">
                                <span>Rating:</span>
                                <div class="stars">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star empty">★</span>
                                </div>
                                <span class="rating-text">(4.5/5)</span>
                            </div>
                        </div>
                    </div>
                    <p class="testimonial-text">"Great range of bikes and quick service!" Found the exact model I was looking for, and they delivered it on time. Customer support was responsive even after the sale.</p>
                </div>

                <div class="testimonial-card">
                    <div class="customer-info">
                        <span class="customer-icon">🚗</span>
                        <div class="customer-details">
                            <h4>Priya S. - Coimbatore</h4>
                            <div class="rating">
                                <span>Rating:</span>
                                <div class="stars">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>
                                <span class="rating-text">(5.0/5)</span>
                            </div>
                        </div>
                    </div>
                    <p class="testimonial-text">"Excellent experience! The car was in perfect condition and the documentation process was smooth. Highly recommended for anyone looking to buy a used car."</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Car Image Gallery
        const carImages = [
            "https://imgd.aeplcdn.com/664x374/n/cw/ec/54399/swift-exterior-right-front-three-quarter-64.jpeg?q=80",
            "https://imgd.aeplcdn.com/664x374/n/cw/ec/54399/swift-exterior-right-side-view.jpeg?q=80",
            "https://imgd.aeplcdn.com/664x374/n/cw/ec/54399/swift-exterior-right-front-three-quarter-2.jpeg?q=80",
            "https://imgd.aeplcdn.com/664x374/n/cw/ec/54399/swift-exterior-front-view.jpeg?q=80",
            "https://imgd.aeplcdn.com/664x374/n/cw/ec/54399/swift-exterior-rear-view.jpeg?q=80",
            "https://imgd.aeplcdn.com/664x374/n/cw/ec/54399/swift-interior-dashboard.jpeg?q=80"
        ];

        let currentImageIndex = 0;

        function changeMainImage(direction) {
            currentImageIndex += direction;
            if (currentImageIndex < 0) {
                currentImageIndex = carImages.length - 1;
            } else if (currentImageIndex >= carImages.length) {
                currentImageIndex = 0;
            }
            document.getElementById('mainCarImage').src = carImages[currentImageIndex];
        }

        function selectImage(index) {
            currentImageIndex = index;
            document.getElementById('mainCarImage').src = carImages[index];
        }

        // Toggle Heart Icon
        function toggleHeart(element) {
            if (element.textContent === '♡') {
                element.textContent = '♥';
                element.classList.add('filled');
            } else {
                element.textContent = '♡';
                element.classList.remove('filled');
            }
        }

        // EMI Calculator
        const down = document.getElementById('downPayment');
        const loan = document.getElementById('loanPayment');
        const rate = document.getElementById('interestRate');
        const tenure = document.getElementById('tenure');

        const downVal = document.getElementById('downPaymentVal');
        const loanVal = document.getElementById('loanPaymentVal');
        const rateVal = document.getElementById('interestRateVal');
        const tenureVal = document.getElementById('tenureVal');

        const emiTotal = document.getElementById('emiTotal');
        const emiAmountVal = document.getElementById('emiAmountVal');
        const totalPaymentVal = document.getElementById('totalPaymentVal');

        function formatCurrency(num) {
            return '₹' + num.toLocaleString('en-IN');
        }

        function updateEMI() {
            const dp = parseInt(down.value);
            const lp = parseInt(loan.value);
            const ir = parseFloat(rate.value);
            const tn = parseInt(tenure.value);

            downVal.textContent = formatCurrency(dp);
            loanVal.textContent = formatCurrency(lp);
            rateVal.textContent = ir + '%';
            tenureVal.textContent = tn + ' Months';

            // EMI calculation: [P x R x (1+R)^N]/[(1+R)^N-1]
            const r = ir / 12 / 100;
            const emi = lp * r * Math.pow(1 + r, tn) / (Math.pow(1 + r, tn) - 1);
            const totalPayment = emi * tn;

            const emiRounded = Math.round(emi);
            const totalRounded = Math.round(totalPayment);

            emiTotal.textContent = formatCurrency(emiRounded);
            emiAmountVal.textContent = formatCurrency(emiRounded);
            totalPaymentVal.textContent = formatCurrency(totalRounded);

            // Update circular progress
            const principal = lp;
            const interest = totalPayment - principal;
            const interestPercentage = (interest / totalPayment) * 100;
            
            const circle = document.querySelector('.emi-circle');
            circle.style.background = `conic-gradient(#51CF9D ${100 - interestPercentage}%, #F63A3A ${100 - interestPercentage}%)`;
        }

        // Add event listeners
        [down, loan, rate, tenure].forEach(input => {
            input.addEventListener('input', updateEMI);
        });

        // Initial calculation
        updateEMI();

        // Smooth scroll to EMI calculator
        document.querySelector('.emi-link').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('emi-calculator').scrollIntoView({ 
                behavior: 'smooth',
                block: 'center'
            });
        });
    </script>
</body>
</html>