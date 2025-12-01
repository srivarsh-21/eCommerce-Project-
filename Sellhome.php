

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell home page</title>
    <link rel="stylesheet" href="./Header_footerstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
 
    <style>
       


        .bottom-banner{
            height:80px;
        }

        .card{
            width:178px;
            height:120px;
        }
/* Get your  cras best price */
       
        /* Top Rated Section */
.top-rated-section {
  max-width: 1300px;
  margin: 40px auto;
  padding-top: 40px;
  padding-left: 80px;
  padding-bottom: 40px;
  background: #fff;
  border-radius: 12px;
  border-style: groove;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.top-rated-section h3 {
  margin-bottom: 20px;
  font-size: 24px;
  font-weight: 500;
}

.car-carousel {
  /* Bootstrap d-flex, flex-nowrap, overflow-auto handle this */
  gap: 50px; /* Custom gap */
}

.car-card {
  /* Bootstrap bg-white, rounded-3, shadow-sm, flex-shrink-0 handle this */
  min-width: 350px;
  width:25%;
  height:20%;
  transition: transform 0.3s ease;
}

.car-card:hover {
  transform: scale(1.03);
}

/* .car-card img { */
  /* Bootstrap img-fluid, w-100, rounded-top handle this */
/* } */

.car-info {
  padding: 15px;
}

.car-info h4 {
  font-size: 1rem;
  margin: 0 0 10px 0;
}

.tags span {
  /* Bootstrap badge classes handle this */
  display: inline-block;
  margin: 3px 5px 3px 0;
  padding: 4px 8px;
  font-size: 0.75rem;
  border-radius: 6px;
}

.badge{
     background-color: #905f9dff;
     box-shadow: #6366f1;
}

.price {
  font-weight: bold;
  font-size: 1.1rem;
  margin-top: 10px;
}

.emi {
  font-size: 0.9rem;
  color: gray;
}

    
       

         /* process card */

       .process-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            height: 100%;
            transition: transform 0.3s ease;
            position: relative;
            cursor: pointer;
        }
        
        .process-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
        
        .process-image {
            height: 200px;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        
        .step-number {
            position: absolute;
            top: 15px;
            left: 15px;
            background: white;
            color: #6366f1;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 16px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }
        
        .process-content {
            padding: 1.5rem;
        }
        
        .process-title {
            color: #742B88;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 0.75rem;
        }
        
        .process-description {
            color: #666;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.5;
            margin: 0;
        }
        
        .section-title {
            color: #333;
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 2rem;
        }
        
        @media (max-width: 768px) {
            .process-image {
                height: 180px;
            }
            
            .section-title {
                font-size: 1.5rem;
            }
            
            .process-content {
                padding: 1.25rem;
            }
        }

        /* why true motors */

        .why-true-motors-card {
    background: white;
    border-radius: 15px;
    padding: 1.5rem 1rem;
    text-align: center;
    width: 100%;
    max-width: 200px;
    height: auto;
    min-height: 220px;
    transition: transform 0.3s ease;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.why-true-motors-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
}

.why-card-image {
    width: 100%;
    max-width: 120px;
    height: auto;
    max-height: 120px;
    object-fit: contain;
    border-radius: 10px;
    margin-bottom: 1rem;
    display: block;
}

.why-card-title {
    color: #6366f1;
    font-size: 14px;
    font-weight: 600;
    margin: 0;
    line-height: 1.3;
    text-align: center;
}

.section-header {
    text-align: center;
    margin-bottom: 2rem;
}

.section-title {
    font-size: 2rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 0.5rem;
}

.section-subtitle {
    color: #666;
    font-size: 1rem;
}

.cards-container {
    max-width: 1300px;
    margin: 0 auto;
    background: #f8f9fa;
    border: 1px solid #e9ecef;
    border-radius: 1rem;
    padding: 2rem 1rem;
}

/* Mobile Responsive Styles */
@media (max-width: 576px) {
    .cards-container {
        padding: 1.5rem 0.5rem;
    }
    
    .why-true-motors-card {
        padding: 1rem 0.5rem;
        min-height: 180px;
        max-width: 150px;
    }
    
    .why-card-image {
        max-width: 80px;
        max-height: 80px;
        margin-bottom: 0.75rem;
    }
    
    .why-card-title {
        font-size: 12px;
    }
    
    .section-title {
        font-size: 1.5rem;
    }
    
    .section-subtitle {
        font-size: 0.9rem;
    }
}

@media (max-width: 768px) {
    .cards-container {
        padding: 1.5rem 1rem;
    }
    
    .why-true-motors-card {
        max-width: 170px;
    }
    
    .why-card-image {
        max-width: 100px;
        max-height: 100px;
    }
    
    .section-title {
        font-size: 1.75rem;
    }
}

@media (min-width: 992px) {
    .why-true-motors-card {
        max-width: 200px;
    }
}

/* Ensure proper spacing between cards */
.row.g-3 > * {
    padding: 0.5rem;
}

/* Center alignment for all breakpoints */
.row.justify-content-center {
    display: flex;
    justify-content: center;
    align-items: stretch;
}

    /* Testimonials Section */
.testimonials-maincard {
            margin: 40px auto;
            max-width: 1400px;
            padding: 0 20px;
        }

        .testimonials-maincard h2 {
            font-size: 36px;
            font-weight: 700;
            color: #000000;
            margin-bottom: 40px;
            text-align: center;
        }

        .testimonials {
            padding: 50px 40px;
            background: white;
            border-radius: 16px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            gap: 30px;
            justify-items: center;
            align-items: stretch;
        }

        .testimonial-card {
            padding: 30px;
            min-height: 200px;
            width: 100%;
            max-width: 580px;
            border-radius: 16px;
            border: 1px solid #e0e0e0;
            background: #f8f9fa;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .customer-info {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .customer-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 18px;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .customer-details h4 {
            font-size: 1.1rem;
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

        .rating-text {
            color: #666;
            font-size: 14px;
            font-weight: 500;
        }

        .testimonial-text {
            font-style: italic;
            color: #555;
            line-height: 1.7;
            font-size: 15px;
            margin: 0;
            flex-grow: 1;
        }

        /* Mobile Responsive Styles */
        @media (max-width: 992px) {
            .testimonials-grid {
                grid-template-columns: 1fr;
                gap: 25px;
                max-width: 600px;
                margin: 0 auto;
            }
            
            .testimonials {
                padding: 40px 30px;
            }
            
            .testimonial-card {
                max-width: 100%;
                min-height: 180px;
            }
        }

        @media (max-width: 768px) {
            .testimonials-maincard {
                margin: 30px auto;
                padding: 0 15px;
            }
            
            .testimonials-maincard h2 {
                font-size: 28px;
                margin-bottom: 30px;
            }
            
            .testimonials {
                padding: 30px 20px;
                border-radius: 12px;
            }
            
            .testimonial-card {
                padding: 25px 20px;
                min-height: 160px;
            }
            
            .customer-avatar {
                width: 45px;
                height: 45px;
                font-size: 16px;
            }
            
            .customer-details h4 {
                font-size: 1rem;
            }
            
            .testimonial-text {
                font-size: 14px;
                line-height: 1.6;
            }
        }

        @media (max-width: 576px) {
            .testimonials-maincard h2 {
                font-size: 24px;
                line-height: 1.3;
            }
            
            .testimonials {
                padding: 25px 15px;
            }
            
            .testimonial-card {
                padding: 20px 15px;
                min-height: 150px;
            }
            
            .customer-info {
                margin-bottom: 15px;
            }
            
            .customer-avatar {
                width: 40px;
                height: 40px;
                font-size: 14px;
                margin-right: 12px;
            }
            
            .customer-details h4 {
                font-size: 0.95rem;
                margin-bottom: 5px;
            }
            
            .testimonial-text {
                font-size: 13px;
            }
            
            .star {
                font-size: 14px;
            }
            
            .rating-text {
                font-size: 12px;
            }
        }

        @media (max-width: 480px) {
            .testimonials-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .testimonials-maincard h2 {
                font-size: 22px;
                padding: 0 10px;
            }
        }

        /* Ensure equal height cards */
        .testimonials-grid {
            align-items: stretch;
        }

        /* Animation for loading */
        .testimonial-card {
            opacity: 0;
            animation: fadeInUp 0.6s ease forwards;
        }

        .testimonial-card:nth-child(1) {
            animation-delay: 0.1s;
        }

        .testimonial-card:nth-child(2) {
            animation-delay: 0.2s;
        }

        .testimonial-card:nth-child(3) {
            animation-delay: 0.3s;
        }

        .testimonial-card:nth-child(4) {
            animation-delay: 0.4s;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

/* Why Choose Us Section */
.why-choose-us {
    text-align: center;
    max-width: 1200px;
    margin: 0 auto;
}

.why-choose-us h2 {
    font-size: 40px;
    font-weight: 700;
    margin-bottom: 50px;
    color: #050B20;
}

.feature {
    background: white;
    padding: 2rem 1.5rem;
    border-radius: 15px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
}

.feature:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
}

.feature-icon {
    width: 80px;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px auto;
    border-radius: 50%;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.feature-image {
    width: 50px;
    height: 50px;
    object-fit: contain;
}

.feature h3 {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 15px;
    color: #333;
}

.feature p {
    font-size: 1rem;
    color: #666;
    line-height: 1.6;
    margin: 0;
}

/* Mobile Responsive Styles */
@media (max-width: 576px) {
    .why-choose-us h2 {
        font-size: 28px;
        margin-bottom: 30px;
    }
    
    .feature {
        padding: 1.5rem 1rem;
        margin-bottom: 1rem;
    }
    
    .feature-icon {
        width: 60px;
        height: 60px;
        margin-bottom: 15px;
    }
    
    .feature-image {
        width: 40px;
        height: 40px;
    }
    
    .feature h3 {
        font-size: 1.1rem;
        margin-bottom: 10px;
    }
    
    .feature p {
        font-size: 0.9rem;
    }
}

@media (max-width: 768px) {
    .why-choose-us h2 {
        font-size: 32px;
        margin-bottom: 40px;
    }
    
    .feature {
        padding: 1.75rem 1.25rem;
    }
    
    .feature-icon {
        width: 70px;
        height: 70px;
    }
    
    .feature-image {
        width: 45px;
        height: 45px;
    }
}

@media (min-width: 992px) {
    .feature {
        min-height: 280px;
    }
}

/* Ensure equal height cards */
.row.g-4 {
    --bs-gutter-y: 1.5rem;
}

.feature {
    min-height: 250px;
}

/* Center alignment for all breakpoints */
.row.justify-content-center {
    display: flex;
    justify-content: center;
    align-items: stretch;
}

/* Hover effects for icons */
.feature:hover .feature-icon {
    background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
}

.feature:hover .feature-icon .feature-image {
    filter: brightness(0) invert(1);
}

.feature:hover h3 {
    color: #6366f1;
}

     /* faq questions */

    .faq-container {
            max-width: 800px;
            margin: 50px auto;
            background: #f8f9fa;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .faq-title {
            text-align: center;
            font-weight: bold;
            font-size: 2rem;
            margin-bottom: 30px;
            color: #333;
        }
        
        .faq-item {
            background: white;
            border-radius: 10px;
            margin-bottom: 15px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        
        .faq-question {
            padding: 20px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: none;
            background: white;
            width: 100%;
            text-align: left;
            font-size: 1rem;
            color: #333;
            transition: background-color 0.3s ease;
        }
        
        .faq-question:hover {
            background-color: #f8f9fa;
        }
        
        .faq-question.active {
            background-color: #e7f3ff;
        }
        
        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
            background-color: #f8f9fa;
        }
        
        .faq-answer.show {
            padding: 20px;
            max-height: 200px;
        }
        
        .chevron {
            transition: transform 0.3s ease;
            color: #666;
        }
        
        .chevron.rotate {
            transform: rotate(180deg);
        }
        
        .question-number {
            font-weight: bold;
            margin-right: 10px;
            color: #007bff;
        }


        /* Compare cards */
        .compare-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin: 20px auto;
            max-width: 1200px;
            overflow: hidden;
        }
        
        .compare-header {
            padding: 20px 25px;
            border-bottom: 1px solid #e9ecef;
            background: #fff;
        }
        
        .compare-header h2 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
        }
        
        .car-card {
            background: white;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            padding: 0;
            margin-bottom: 15px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .car-card:hover {
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transform: translateY(-2px);
        }
        
        .car-image-container {
            position: relative;
            height: 120px;
            overflow: hidden;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }
        
        .car-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .car-card:hover .car-image {
            transform: scale(1.05);
        }
        
        .compare-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #8e44ad;
            color: white;
            border: none;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .compare-badge:hover {
            background: #9b59b6;
            transform: scale(1.1);
        }
        
        .car-details {
            padding: 20px;
        }
        
        .brand-model {
            font-size: 18px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 4px;
        }
        
        .car-variant {
            font-size: 14px;
            color: #7f8c8d;
            margin-bottom: 8px;
        }
        
        .car-price {
            font-size: 16px;
            font-weight: 600;
            color: #27ae60;
            margin-bottom: 8px;
        }
        
        .car-specs {
            display: flex;
            gap: 15px;
            margin-bottom: 12px;
        }
        
        .spec-item {
            font-size: 13px;
            color: #6c757d;
            display: flex;
            align-items: center;
            gap: 4px;
        }
        
        .action-buttons {
            display: flex;
            gap: 8px;
        }
        
        .btn-outline-primary {
            border: 1.5px solid #3498db;
            color: #3498db;
            font-size: 13px;
            padding: 6px 12px;
            border-radius: 6px;
            transition: all 0.3s ease;
        }
        
        .btn-outline-primary:hover {
            background: #3498db;
            color: white;
            transform: translateY(-1px);
        }
        
        .navigation-arrows {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid #dee2e6;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10;
        }
        
        .navigation-arrows:hover {
            background: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }
        
        .nav-left {
            left: -20px;
        }
        
        .nav-right {
            right: -20px;
        }
        
        .comparison-wrapper {
            position: relative;
            padding: 25px;
            overflow-x: auto;
        }
        
        .cars-grid {
            display: flex;
            gap: 20px;
            min-width: 100%;
        }
        
        .car-card {
            flex: 0 0 280px;
            min-width: 280px;
        }
        
        @media (max-width: 768px) {
            .compare-container {
                margin: 10px;
                border-radius: 8px;
            }
            
            .compare-header {
                padding: 15px 20px;
            }
            
            .compare-header h2 {
                font-size: 20px;
            }
            
            .comparison-wrapper {
                padding: 15px;
            }
            
            .cars-grid {
                gap: 15px;
            }
            
            .car-card {
                flex: 0 0 250px;
                min-width: 250px;
            }
            
            .car-details {
                padding: 15px;
            }
            
            .navigation-arrows {
                display: none;
            }
        }
        
        @media (max-width: 576px) {
            .car-card {
                flex: 0 0 220px;
                min-width: 220px;
            }
            
            .brand-model {
                font-size: 16px;
            }
            
            .car-specs {
                flex-direction: column;
                gap: 5px;
            }
        }
        
        /* Custom scrollbar for horizontal scroll */
        .comparison-wrapper::-webkit-scrollbar {
            height: 8px;
        }
        
        .comparison-wrapper::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }
        
        .comparison-wrapper::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 4px;
        }
        
        .comparison-wrapper::-webkit-scrollbar-thumb:hover {
            background: #a1a1a1;
        }

        /* Additional styles for header and footer compatibility */
        .dark-blue-bg {
            background-color: #003399;
        }
        
        .text-purple {
            color: #6366f1;
        }
        
        .text-purple-btn {
            background-color: #6366f1;
            color: white;
            border: none;
        }
        
        .text-purple-btn:hover {
            background-color: #5a5bf0;
            color: white;
        }



    


         
    </style>
</head>

<body>

    <?php
    include './header.php';
    ?>

    <!-- Sell Car Section -->
    <div class="container my-5 pt-5">
        <div class="container">
            <div class="altroz-banner mb-4 mt-5">
                <img src="./assets/image/Hero.png" alt="Altroz Banner" class="img-fluid rounded" >
            </div>
            <div class="bottom-banner dark-blue-bg text-white rounded-3 p-0 shadow d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                    <img src="./assets/image/banner_car.png" class="img-fluid" style="width:186px; height:124px; margin-bottom:7px;"
                        alt="Car">
                </div>
                <div class="text-center px-3">
                    <h3 class="h5">Sell Your Car Instantly <br>Best price. Free inspection. Instant payment.</h3>
                </div>
                <div>
                    <button class="btn btn-light fw-bold px-4 py-2 me-5 mt-3 mt-md-0">Get Free Quote</button>
                </div>
            </div>
        </div>


        <div class="container my-5 p-4 rounded-3 w-75 shadow text-center" style="background-color: #F6DFDF;">
            <h3 class=" fw-bold mb-3" style="color:#003399; font-weight:700; font-size:24px;">Get Your Car's Best Price Now</h3>

            <div class="row justify-content-center mb-4">
                <div class="col-md-6">
                    <input type="text" class="form-control form-control-lg rounded-4 bg-transparent border-black"
                        placeholder="Enter Your Car Registration Number"  style="color:#747171; font-size:16px; width:550px; height:80px; margin-left:-60px;">
                </div>
                <div class="col-auto mt-3 mt-md-0" style="margin-left:45px;">
                    <button class="btn text-purple-btn btn-lg rounded-4 px-4" style="width:235px; height:80px; ">Sell Your Car</button>
                </div>
            </div>

            <h5 class=" mb-4" style="font-weight:500;">Your easiest car selling experience starts at TrueMotors.</h5>

            <div class="row text-center g-5 w-75 justify-content-center mx-auto">
                <div class="col-sm-6 col-md-3">
                    <img src="./assets/image/price instantly.png" class="mb-2" style="height: 100px; width:100px;" alt="get price">
                    <h6>Get the best price instantly</h6>
                </div>
                <div class="col-sm-6 col-md-3">
                    <img src="./assets/image/Feature.png" class="mb-2" style="height: 100px; width:100px;" alt="feature-focussed">
                    <h6>Feature-focused</h6>
                </div>
                <div class="col-sm-6 col-md-3">
                    <img src="./assets/image/Trust-building.png" class="mb-2" style="height: 100px; width:100px;" alt="trust-building">
                    <h6>Trust-building</h6>
                </div>
                <div class="col-sm-6 col-md-3">
                    <img src="./assets/image/Problem-solving.png" class="mb-2" style="height: 100px; width:100px;" alt="problem-solving">
                    <h6>Problem-solving</h6>
                </div>
            </div>
        </div>

        <div class="container my-5 border border-black p-5 rounded-3 ">
            <h2 class="text-center fw-bold mb-4" style="font-size:40px;">Explore Popular Brands</h2>
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-5 text-center">
                <div class="col">
                    <div class="card  border-0">
                        <div class="card-body d-flex align-items-center justify-content-center brand-logo-container">
                            <img src="./assets/image/Mahindra.png" class="img-fluid" alt="Mahindra" style="width:96px; height:54px;">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card  border-0">
                        <div class="card-body d-flex align-items-center justify-content-center brand-logo-container">
                            <img src="./assets/image/toyota.png" class="img-fluid  " alt="Toyota" style="width:96px; height:54px;">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card  border-0">
                        <div class="card-body d-flex align-items-center justify-content-center brand-logo-container">
                            <img src="./assets/image/Tata.png" class="img-fluid " alt="Tata" style="width:96px; height:54px;">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0">
                        <div class="card-body d-flex align-items-center justify-content-center brand-logo-container">
                            <img src="./assets/image/Hyundai (2).png" class="img-fluid " alt="Hyundai" style="width:96px; height:54px;">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card  border-0">
                        <div class="card-body d-flex align-items-center justify-content-center brand-logo-container">
                            <img src="./assets/image/Suzuki_logo.png" class="img-fluid " alt="Suzuki" style="width:96px; height:54px;">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card  border-0">
                        <div class="card-body d-flex align-items-center justify-content-center brand-logo-container">
                            <img src="./assets/image/Honda.png" class="img-fluid mb-5 " alt="Honda" style="width:96px; height:54px;">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card  border-0">
                        <div class="card-body d-flex align-items-center justify-content-center brand-logo-container">
                            <img src="./assets/image/Ford.png" class="img-fluid " alt="Ford" style="width:96px; height:54px;">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0">
                        <div class="card-body d-flex align-items-center justify-content-center brand-logo-container">
                            <img src="./assets/image/Fiat.png" class="img-fluid " alt="Fiat" style="width:96px; height:54px;">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card  border-0">
                        <div class="card-body d-flex align-items-center justify-content-center brand-logo-container">
                            <img src="./assets/image/Nissan.png" class="img-fluid " alt="Nissan" style="width:96px; height:54px;">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card  border-0">
                        <div class="card-body d-flex align-items-center justify-content-center brand-logo-container">
                            <img src="./assets/image/Kia.png" class="img-fluid " alt="Kia" style="width:96px; height:54px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="text-purple">View More Brands</a>
            </div>
        </div>

    </div>
    

    <!-- Top Cars Section -->
    <div class="top-rated-section container mt-4 p-4 bg-white rounded-3 border shadow-sm">
        <h3 class="mb-4 fs-4">Top Rated Cars</h3>
        <div class="car-carousel d-flex flex-nowrap overflow-auto pb-3">
            <!-- Car Card 1 -->
            <div class="car-card bg-white rounded-3 shadow-sm flex-shrink-0 me-4" style="min-width: 350px; width: 25%;">
                <img src="assets/image/car1-image.png" class="img-fluid w-100 rounded-top" alt="Car 1">
                <div class="car-info p-3">
                    <h4 class="fs-6 mb-2" >Hyundai Grand i10 Nios sportz</h4>
                    <div class="tags mb-2">
                        <span class="badge bg-light text-dark me-1" >31k km</span>
                        <span class="badge bg-light text-dark me-1">Petrol</span>
                        <span class="badge bg-light text-dark me-1">Manual</span>
                        <span class="badge bg-light text-dark">1st Owner</span>
                    </div>
                    <p class="price fw-bold fs-5 mb-1">₹ 6.98 Lakh</p>
                    <p class="emi text-muted fs-6">EMI: ₹ 12,901/m*</p>
                </div>
            </div>

            <!-- Car Card 2 -->
            <div class="car-card bg-white rounded-3 shadow-sm flex-shrink-0 me-4" style="min-width: 350px; width: 25%;">
                <img src="assets/image/car2-image.png" class="img-fluid w-100 rounded-top" style="height:70%" alt="Car 2">
                <div class="car-info p-3">
                    <h4 class="fs-6 mb-2">Hyundai Grand i10 Nios sportz</h4>
                    <div class="tags mb-2">
                        <span class="badge bg-light text-dark me-1">31k km</span>
                        <span class="badge bg-light text-dark me-1">Petrol</span>
                        <span class="badge bg-light text-dark me-1">Manual</span>
                        <span class="badge bg-light text-dark">1st Owner</span>
                    </div>
                    <p class="price fw-bold fs-5 mb-1">₹ 6.98 Lakh</p>
                    <p class="emi text-muted fs-6">EMI: ₹ 12,901/m*</p>
                </div>
            </div>

            <!-- Car Card 3 -->
            <div class="car-card bg-white rounded-3 shadow-sm flex-shrink-0" style="min-width: 350px; width: 25%;">
                <img src="assets/image/car3-image.png" class="img-fluid w-100 rounded-top" style="height:55%" alt="Car 3">
                <div class="car-info p-3">
                    <h4 class="fs-6 mb-2">Hyundai Grand i10 Nios sportz</h4>
                    <div class="tags mb-2">
                        <span class="badge bg-light text-dark me-1">31k km</span>
                        <span class="badge bg-light text-dark me-1">Petrol</span>
                        <span class="badge bg-light text-dark me-1">Manual</span>
                        <span class="badge bg-light text-dark">1st Owner</span>
                    </div>
                    <p class="price fw-bold fs-5 mb-1">₹ 6.98 Lakh</p>
                    <p class="emi text-muted fs-6">EMI: ₹ 12,901/m*</p>
                </div>
            </div>
        </div>
    </div>


<!-- process cards -->

    <div class="container my-5 py-4">
        <h2 class="section-title">Process of Selling Cars</h2>
        <div class="mx-5 row row-cols-1 row-cols-md-3 g-4" id="processOfSellingCarsContainer">
            <!-- Cards will be loaded here by jQuery -->
             <!-- Card 1: Get price online -->
<div class="col">
    <div class="process-card">
        <div class="process-image" style="background-image: url('./assets/image/get-price-online.jpg');">
            <div class="step-number">1</div>
        </div>
        <div class="process-content">
            <h3 class="process-title">Get price online</h3>
            <p class="process-description">Answer some question about your car to help us understand its condition</p>
        </div>
    </div>
</div>

<!-- Card 2: Car inspection -->
<div class="col">
    <div class="process-card">
        <div class="process-image" style="background-image: url('./assets/image/car-inspection.jpg');">
            <div class="step-number">2</div>
        </div>
        <div class="process-content">
            <h3 class="process-title">Car inspection</h3>
            <p class="process-description">Our car expert will physically verify your cars condition and give you the final offer</p>
        </div>
    </div>
</div>

<!-- Card 3: Car pick up & payment -->
<div class="col">
    <div class="process-card">
        <div class="process-image" style="background-image: url('./assets/image/car-pickup-payment.jpg');">
            <div class="step-number">3</div>
        </div>
        <div class="process-content">
            <h3 class="process-title">Car pick up & payment</h3>
            <p class="process-description">We will transfer the amount directly to your bank account before your car is picked up</p>
        </div>
    </div>
</div>
        </div>
    </div>


     <!-- Why True motors Section -->
    <div class="container my-5">
    <div class="section-header">
        <h2 class="section-title">Why True Motors</h2>
        <p class="section-subtitle">True Motors offers high quality vehicles with peace of mind guaranteed</p>
    </div>

    <div class="cards-container">
        <div class="row g-3 justify-content-center">
            <!-- 1 Year Warranty Card -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="why-true-motors-card">
                    <img src="assets/image/1year_warranty.png" alt="1 Year Warranty" class="why-card-image">
                    <h6 class="why-card-title">1 Year warranty</h6>
                </div>
            </div>

            <!-- Easy EMI Option Card -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="why-true-motors-card">
                    <img src="assets/image/easy Emi.png" alt="Easy EMI Option" class="why-card-image">
                    <h6 class="why-card-title">Easy EMI Option</h6>
                </div>
            </div>

            <!-- Take Test Drive Card -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="why-true-motors-card">
                    <img src="assets/image/take_test_drive.png" alt="Take test drive" class="why-card-image">
                    <h6 class="why-card-title">Take test drive</h6>
                </div>
            </div>

            <!-- Sell Vehicle Stress Free Card -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="why-true-motors-card">
                    <img src="assets/image/sell_vech.png" alt="Sell vehicle stress free" class="why-card-image">
                    <h6 class="why-card-title">Sell vehicle stress free</h6>
                </div>
            </div>

            <!-- Buy Used Vehicle Card -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="why-true-motors-card">
                    <img src="assets/image/buy-used_vech.png" alt="Buy used vehicle" class="why-card-image">
                    <h6 class="why-card-title">Buy used vehicle</h6>
                </div>
            </div>
        </div>
    </div>
</div>

          <!-- Why choose us -->

    <section class="why-choose-us container my-5">
    <h2 class="display-5 fw-bold mb-5 text-dark text-start">Why Choose Us?</h2>
    
    <div class="row g-4 justify-content-center">
        <!-- Feature 1: Special Financing Offers -->
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="feature text-center h-100">
                <div class="icon-placeholder feature-icon mb-3">
                    <img src="assets/icon/f1.png" class="img-fluid feature-image" alt="Special Financial">
                </div>
                <h3 class="fs-5 fw-bold mb-3">Special Financing Offers</h3>
                <p class="fs-6 text-secondary">Our stress-free finance department that can find financial solutions to save you money.</p>
            </div>
        </div>

        <!-- Feature 2: Trusted Car Dealership -->
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="feature text-center h-100">
                <div class="icon-placeholder feature-icon mb-3">
                    <img src="assets/icon/f2.png" class="img-fluid feature-image" alt="Trusted Car Dealership">
                </div>
                <h3 class="fs-5 fw-bold mb-3">Trusted Car Dealership</h3>
                <p class="fs-6 text-secondary">Our stress-free finance department that can find financial solutions to save you money.</p>
            </div>
        </div>

        <!-- Feature 3: Transparent Pricing -->
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="feature text-center h-100">
                <div class="icon-placeholder feature-icon mb-3">
                    <img src="assets/icon/f3.png" class="img-fluid feature-image" alt="Transparent Pricing">
                </div>
                <h3 class="fs-5 fw-bold mb-3">Transparent Pricing</h3>
                <p class="fs-6 text-secondary">Our stress-free finance department that can find financial solutions to save you money.</p>
            </div>
        </div>

        <!-- Feature 4: Expert Car Service -->
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="feature text-center h-100">
                <div class="icon-placeholder feature-icon mb-3">
                    <img src="assets/icon/f4.png" class="img-fluid feature-image" alt="Expert Car Service">
                </div>
                <h3 class="fs-5 fw-bold mb-3">Expert Car Service</h3>
                <p class="fs-6 text-secondary">Our stress-free finance department that can find financial solutions to save you money.</p>
            </div>
        </div>
    </div>
</section>


         <!-- FAQ Section -->
       <div class="container-fluid">
             <h2 class="faq-title">Frequently Asked Questions</h2>
        <div class="faq-container">   
            <div class="faq-item" data-question="1">
                <button class="faq-question" type="button">
                    <span>
                        <span class="question-number">1.</span>
                        How long does it take to sell?
                    </span>
                    <i class="fas fa-chevron-down chevron"></i>
                </button>
                <div class="faq-answer">
                    <p>The time to sell varies depending on market conditions, property type, and pricing strategy. On average, properties sell within 30-60 days when priced competitively. We'll provide a detailed market analysis to help set realistic expectations for your specific situation.</p>
                </div>
            </div>
            
            <div class="faq-item" data-question="2">
                <button class="faq-question" type="button">
                    <span>
                        <span class="question-number">2.</span>
                        Is there any inspection fee?
                    </span>
                    <i class="fas fa-chevron-down chevron"></i>
                </button>
                <div class="faq-answer">
                    <p>Inspection fees are typically paid by the buyer, not the seller. However, as a seller, you may choose to get a pre-listing inspection to identify any issues beforehand. This usually costs between $300-$500 but can help avoid surprises during negotiations.</p>
                </div>
            </div>
            
            <div class="faq-item" data-question="3">
                <button class="faq-question" type="button">
                    <span>
                        <span class="question-number">3.</span>
                        Do I need to visit your office?
                    </span>
                    <i class="fas fa-chevron-down chevron"></i>
                </button>
                <div class="faq-answer">
                    <p>While visiting our office is not mandatory, we're happy to meet you there if you prefer. We can handle most of the process remotely through digital signatures and virtual meetings. However, an in-person consultation can be valuable for discussing your specific needs and market strategy.</p>
                </div>
            </div>

           

           
        </div>
    </div>


    <!-- Testimonials Section -->
     <section class="testimonials-maincard">
        <h2 class="section-title">User Reviews & Ratings - What Our Customers Say</h2>

        <div class="testimonials">
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="customer-info">
                        <div class="customer-avatar">
                            PS
                        </div>
                        <div class="customer-details">
                            <h4>🏍️ Priya S. – Coimbatore</h4>
                            <div class="rating">
                                <div class="stars">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>
                                <span class="rating-text">(4.5/5)</span>
                            </div>
                        </div>
                    </div>
                    <p class="testimonial-text">"Great range of bikes and quick service!" Found the exact model I was looking for, and they delivered it on time. Customer support was responsive even after the sale.</p>
                </div>

                <div class="testimonial-card">
                    <div class="customer-info">
                        <div class="customer-avatar">
                            RK
                        </div>
                        <div class="customer-details">
                            <h4>🚗 Rajesh K. – Chennai</h4>
                            <div class="rating">
                                <div class="stars">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>
                                <span class="rating-text">(4.8/5)</span>
                            </div>
                        </div>
                    </div>
                    <p class="testimonial-text">"Excellent car buying experience! The team was professional and helped me find the perfect vehicle within my budget. Highly recommend True Motors for anyone looking for quality used cars."</p>
                </div>

                
               
            </div>
        </div>
    </section>


     <!-- Compare cards -->
    <div class="container-fluid">
        <div class="compare-container">
            <div class="compare-header">
                <h2>Compare</h2>
            </div>
            
            <div class="comparison-wrapper">
                <div class="cars-grid" id="carsGrid">
                    <!-- Car cards will be populated by jQuery -->
                </div>
                
                <div class="navigation-arrows nav-left" id="navLeft">
                    <i class="fas fa-chevron-left"></i>
                </div>
                <div class="navigation-arrows nav-right" id="navRight">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
        </div>
    </div>
            

            

     <?php
        include './footer.php'?>

<!-- jQuery CDN (required for your existing $(document).ready and other jQuery usage) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap JS Bundle (should be at the end of body) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- <script src="./detail.js"></script> -->
    <script src="./header_footer.js"></script>

    <script>

    $(document).ready(function() {
            // Data for the selling process steps
            var sellingProcessData = [
                {
                    step: 1,
                    title: "Get price online",
                    description: "Answer some question about your car to help us understand its condition",
                    image: "./assets/image/process-sell-cars-img1.png"
                },
                {
                    step: 2,
                    title: "Car inspection",
                    description: "Our car expert will physically verify your cars condition and give you the final offer", 
                    image: "./assets/image/process-sell-cars-img2.png"
                },
                {
                    step: 3,
                    title: "Car pick up & payment",
                    description: "We will transfer the amount directly to your bank account before your car is picked up",
                    image: "./assets/image/process-sell-cars-img3.png"
                }
            ];

            // Function to create process cards HTML
            function createProcessCards(data) {
                var cardsHTML = '';
                
                // Loop through each process step
                for (var i = 0; i < data.length; i++) {
                    var process = data[i];
                    
                    cardsHTML += '<div class="col">' +
                        '<div class="process-card" data-step="' + process.step + '">' +
                            '<div class="process-image" style="background-image: url(\'' + process.image + '\');">' +
                                '<div class="step-number">' + process.step + '</div>' +
                            '</div>' +
                            '<div class="process-content">' +
                                '<h3 class="process-title">' + process.title + '</h3>' +
                                '<p class="process-description">' + process.description + '</p>' +
                            '</div>' +
                        '</div>' +
                    '</div>';
                }
                
                return cardsHTML;
            }

            // Load the process cards into the container
            $('#processOfSellingCarsContainer').html(createProcessCards(sellingProcessData));
            
            // Add click event handlers for the cards
            $(document).on('click', '.process-card', function() {
                var stepNumber = $(this).data('step');
                var stepTitle = $(this).find('.process-title').text();
                
                console.log('Clicked on step: ' + stepNumber + ' - ' + stepTitle);
                
                // Add your custom click functionality here
                switch(stepNumber) {
                    case 1:
                        // Handle step 1 click - maybe open price estimation form
                        console.log('Opening price estimation form...');
                        // Example: window.location.href = 'price-estimation.php';
                        break;
                    case 2:
                        // Handle step 2 click - maybe show inspection booking
                        console.log('Opening inspection booking...');
                        // Example: window.location.href = 'book-inspection.php';
                        break;
                    case 3:
                        // Handle step 3 click - maybe show payment process info
                        console.log('Showing payment process info...');
                        // Example: window.location.href = 'payment-info.php';
                        break;
                }
            });

            // Add hover effects with additional animation
            $(document).on('mouseenter', '.process-card', function() {
                $(this).find('.step-number').css('transform', 'scale(1.1)');
            });
            
            $(document).on('mouseleave', '.process-card', function() {
                $(this).find('.step-number').css('transform', 'scale(1)');
            });

            // Optional: Add loading animation
            function showLoadingAnimation() {
                $('#processOfSellingCarsContainer').html('<div class="text-center"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>');
            }

            // Optional: Simulate loading delay (remove this in production)
            // showLoadingAnimation();
            // setTimeout(function() {
            //     $('#processOfSellingCarsContainer').html(createProcessCards(sellingProcessData));
            // }, 1000);
        });

        // why choose motors
        // Add any interactive functionality here if needed
        document.addEventListener('DOMContentLoaded', function() {
            // Optional: Add click handlers for cards
            const cards = document.querySelectorAll('.why-true-motors-card');
            
            cards.forEach(card => {
                card.addEventListener('click', function() {
                    const title = this.querySelector('.why-card-title').textContent;
                    console.log(`Clicked on: ${title}`);
                    // Add your navigation or modal logic here
                });
            });
        });


        // FAQ Section
        
    $(document).ready(function() {
    // FAQ toggle functionality
    $('.faq-question').click(function() {
        const $this = $(this);
        const $answer = $this.siblings('.faq-answer');
        const $chevron = $this.find('.chevron');
        const $faqItem = $this.parent('.faq-item');
        
        // Close all other FAQ items
        $('.faq-question').not($this).removeClass('active');
        $('.faq-answer').not($answer).slideUp(300).removeClass('show');
        $('.chevron').not($chevron).removeClass('rotate');
        
        // Toggle current FAQ item
        $this.toggleClass('active');
        $chevron.toggleClass('rotate');
        
        // Use slideToggle for smooth dropdown effect
        if ($answer.hasClass('show')) {
            $answer.slideUp(300, function() {
                $answer.removeClass('show');
            });
        } else {
            $answer.slideDown(300, function() {
                $answer.addClass('show');
            });
        }
        
        // Get values using jQuery
        const questionNumber = $faqItem.data('question');
        const questionText = $this.find('span').first().text().trim();
        const isExpanded = $answer.hasClass('show') || $answer.is(':visible');
        
        // Log the values
        console.log({
            questionNumber: questionNumber,
            questionText: questionText,
            isExpanded: isExpanded,
            timestamp: new Date().toISOString()
        });
        
        // Get answer text if expanded
        if (isExpanded) {
            const answerText = $answer.find('p').text().trim();
            console.log('Answer:', answerText);
        }
    });
    
    // Function to get all FAQ data
    function getAllFAQData() {
        const faqData = [];
        $('.faq-item').each(function() {
            const $item = $(this);
            const questionNumber = $item.data('question');
            const questionText = $item.find('.faq-question span').first().text().trim();
            const answerText = $item.find('.faq-answer p').text().trim();
            const isExpanded = $item.find('.faq-answer').hasClass('show');
            
            faqData.push({
                number: questionNumber,
                question: questionText,
                answer: answerText,
                isExpanded: isExpanded
            });
        });
        return faqData;
    }
    
    // Make function globally available
    window.getFAQData = getAllFAQData;
});



        // Compare cards
       $(document).ready(function() {
            // Car data
            const carsData = [
                {
                    brand: "Maruti Suzuki",
                    model: "Swift",
                    price: "₹ 6.36 Lakh",
                    fuel: "Petrol",
                    image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='120' viewBox='0 0 200 120'%3E%3Crect width='200' height='120' fill='%23e74c3c'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' fill='white' font-size='14' font-family='Arial'%3EMaruti Swift%3C/text%3E%3C/svg%3E",
                    showroomPrice: "Ex Showroom Price",
                    compareSelected: true
                },
                {
                    brand: "Hyundai",
                    model: "i10 Nios Sportz 1.2",
                    price: "₹ 8.49 Lakh",
                    fuel: "Petrol",
                    image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='120' viewBox='0 0 200 120'%3E%3Crect width='200' height='120' fill='%23ecf0f1'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' fill='%23333' font-size='14' font-family='Arial'%3EHyundai i10%3C/text%3E%3C/svg%3E",
                    showroomPrice: "Ex Showroom Price",
                    compareSelected: true
                },
                {
                    brand: "Maruti Suzuki",
                    model: "Swift",
                    price: "₹ 6.36 Lakh",
                    fuel: "Petrol",
                    image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='120' viewBox='0 0 200 120'%3E%3Crect width='200' height='120' fill='%23e74c3c'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' fill='white' font-size='14' font-family='Arial'%3EMaruti Swift%3C/text%3E%3C/svg%3E",
                    showroomPrice: "Ex Showroom Price",
                    compareSelected: true
                },
                {
                    brand: "Hyundai",
                    model: "i10 Nios Sportz 1.2",
                    price: "₹ 8.49 Lakh",
                    fuel: "Petrol",
                    image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='120' viewBox='0 0 200 120'%3E%3Crect width='200' height='120' fill='%23ecf0f1'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' fill='%23333' font-size='14' font-family='Arial'%3EHyundai i10%3C/text%3E%3C/svg%3E",
                    showroomPrice: "Ex Showroom Price",
                    compareSelected: true
                },
                {
                    brand: "Maruti Suzuki",
                    model: "Swift",
                    price: "₹ 6.36 Lakh",
                    fuel: "Petrol",
                    image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='120' viewBox='0 0 200 120'%3E%3Crect width='200' height='120' fill='%23e74c3c'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' fill='white' font-size='14' font-family='Arial'%3EMaruti Swift%3C/text%3E%3C/svg%3E",
                    showroomPrice: "Ex Showroom Price",
                    compareSelected: true
                },
                {
                    brand: "Hyundai",
                    model: "i10 Nios Sportz 1.2",
                    price: "₹ 8.49 Lakh",
                    fuel: "Petrol",
                    image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='120' viewBox='0 0 200 120'%3E%3Crect width='200' height='120' fill='%23ecf0f1'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' fill='%23333' font-size='14' font-family='Arial'%3EHyundai i10%3C/text%3E%3C/svg%3E",
                    showroomPrice: "Ex Showroom Price",
                    compareSelected: true
                }
            ];

            // Generate car cards
            function generateCarCards() {
                let cardsHtml = '';
                
                carsData.forEach((car, index) => {
                    cardsHtml += `
                        <div class="car-card" data-index="${index}">
                            <div class="car-image-container">
                                <img src="${car.image}" alt="${car.brand} ${car.model}" class="car-image">
                                <button class="compare-badge ${car.compareSelected ? 'selected' : ''}" data-index="${index}">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <div class="car-details">
                                <div class="brand-model">${car.brand}</div>
                                <div class="car-variant">${car.model}</div>
                                <div class="car-price">${car.price}</div>
                                <div class="car-specs">
                                    <div class="spec-item">
                                        <i class="fas fa-gas-pump"></i>
                                        ${car.fuel}
                                    </div>
                                </div>
                                <div class="action-buttons">
                                    <button class="btn btn-outline-primary btn-sm">${car.showroomPrice}</button>
                                </div>
                            </div>
                        </div>
                    `;
                });
                
                $('#carsGrid').html(cardsHtml);
            }

            // Initialize cards
            generateCarCards();

            // Compare button toggle functionality
            $(document).on('click', '.compare-badge', function() {
                const index = $(this).data('index');
                const $badge = $(this);
                const $icon = $badge.find('i');
                
                // Toggle selection
                carsData[index].compareSelected = !carsData[index].compareSelected;
                
                if (carsData[index].compareSelected) {
                    $badge.addClass('selected');
                    $icon.removeClass('fa-plus').addClass('fa-check');
                    
                    // Animation effect
                    $badge.css('transform', 'scale(1.2)');
                    setTimeout(() => {
                        $badge.css('transform', 'scale(1)');
                    }, 200);
                } else {
                    $badge.removeClass('selected');
                    $icon.removeClass('fa-check').addClass('fa-plus');
                }
                
                // Update selected count (you can use this for further functionality)
                const selectedCount = carsData.filter(car => car.compareSelected).length;
                console.log(`${selectedCount} cars selected for comparison`);
            });

            // Navigation functionality
            let scrollPosition = 0;
            const scrollAmount = 300;
            
            $('#navRight').on('click', function() {
                const $wrapper = $('.comparison-wrapper');
                const maxScroll = $wrapper[0].scrollWidth - $wrapper.outerWidth();
                
                scrollPosition = Math.min(scrollPosition + scrollAmount, maxScroll);
                $wrapper.animate({ scrollLeft: scrollPosition }, 300);
                updateNavigationButtons();
            });
            
            $('#navLeft').on('click', function() {
                const $wrapper = $('.comparison-wrapper');
                
                scrollPosition = Math.max(scrollPosition - scrollAmount, 0);
                $wrapper.animate({ scrollLeft: scrollPosition }, 300);
                updateNavigationButtons();
            });

            // Update navigation button states
            function updateNavigationButtons() {
                const $wrapper = $('.comparison-wrapper');
                const maxScroll = $wrapper[0].scrollWidth - $wrapper.outerWidth();
                
                $('#navLeft').toggle(scrollPosition > 0);
                $('#navRight').toggle(scrollPosition < maxScroll);
            }

            // Initial navigation button state
            updateNavigationButtons();

            // Update navigation on window resize
            $(window).on('resize', function() {
                updateNavigationButtons();
            });

            // Smooth scroll on manual scrolling
            $('.comparison-wrapper').on('scroll', function() {
                scrollPosition = $(this).scrollLeft();
                updateNavigationButtons();
            });

            // Card hover effects
            $(document).on('mouseenter', '.car-card', function() {
                $(this).addClass('shadow-lg');
            }).on('mouseleave', '.car-card', function() {
                $(this).removeClass('shadow-lg');
            });

            // Price button click handler
            $(document).on('click', '.btn-outline-primary', function() {
                const $card = $(this).closest('.car-card');
                const index = $card.data('index');
                const car = carsData[index];
                
                // You can add functionality here, like showing detailed pricing
                alert(`Showing detailed pricing for ${car.brand} ${car.model}`);
            });

            // Touch/swipe support for mobile
            let startX = 0;
            let scrollLeft = 0;
            let isDown = false;

            $('.comparison-wrapper').on('mousedown touchstart', function(e) {
                isDown = true;
                startX = (e.pageX || e.originalEvent.touches[0].pageX) - $(this).offset().left;
                scrollLeft = $(this).scrollLeft();
            });

            $('.comparison-wrapper').on('mouseleave mouseup touchend', function() {
                isDown = false;
            });

            $('.comparison-wrapper').on('mousemove touchmove', function(e) {
                if (!isDown) return;
                e.preventDefault();
                const x = (e.pageX || e.originalEvent.touches[0].pageX) - $(this).offset().left;
                const walk = (x - startX) * 2;
                $(this).scrollLeft(scrollLeft - walk);
            });
        });

        
    </script>


    
    
</body>

</html>