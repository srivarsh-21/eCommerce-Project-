<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Showcase - Bootstrap</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            line-height: 1.6;
        }

        .header-banner {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            color: white;
        }

        .header-logo {
            font-size: 1.5rem;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .header-subtitle {
            font-size: 0.75rem;
            color: #bdc3c7;
        }

        .price-starts {
            font-size: 0.75rem;
            color: #bdc3c7;
        }

        .price-amount {
            font-size: 1.125rem;
            font-weight: bold;
        }

        .booking-btn {
            background: #e74c3c;
            border: none;
            font-size: 0.75rem;
            text-transform: uppercase;
            transition: background 0.3s ease;
        }

        .booking-btn:hover {
            background: #c0392b;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #2c3e50;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .post-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .post-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }

        .car-image {
            width: 100%;
            height: 120px;
            object-fit: contain;
        }

        .car-description {
            font-size: 0.8125rem;
            color: #555;
            line-height: 1.5;
            min-height: 60px;
        }

        .learn-more {
            color: #3498db;
            font-size: 0.75rem;
            text-decoration: none;
            font-weight: 500;
        }

        .learn-more:hover {
            text-decoration: underline;
            color: #2980b9;
        }

        .upcoming-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            border: none;
        }

        .upcoming-card:hover {
            transform: translateY(-8px);
        }

        .upcoming-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .upcoming-brand {
            font-size: 1.125rem;
            font-weight: bold;
            color: #2c3e50;
        }

        .upcoming-details {
            font-size: 0.75rem;
            color: #7f8c8d;
        }

        .upcoming-price {
            font-size: 0.875rem;
            color: #27ae60;
            font-weight: 600;
        }

        .nav-arrow {
            background: rgba(255,255,255,0.9);
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            cursor: pointer;
            font-size: 1.125rem;
            color: #2c3e50;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: background 0.3s ease;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
        }

        .nav-arrow:hover {
            background: white;
        }

        .nav-prev {
            left: -20px;
        }

        .nav-next {
            right: -20px;
        }

        .hero-banner {
            width: 100%;
            max-width: 1200px;
            height: auto;
            object-fit: cover;
        }

        .carousel-container {
            position: relative;
            overflow: hidden;
        }

        .carousel-track {
            display: flex;
            transition: transform 0.3s ease;
            width: 100%;
        }

        .carousel-slide {
            min-width: 100%;
            flex: 0 0 auto;
        }

        @media (min-width: 768px) {
            .carousel-slide {
                min-width: 33.333%;
            }
        }

        @media (max-width: 767px) {
            .nav-arrow {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Banner -->
    <div class="container-fluid p-0">
        <img src="assets/image/banner car.png" alt="Car Banner" class="hero-banner d-block mx-auto">
    </div>

    <!-- Main Container -->
     <div class="container py-5">
        <!-- Our Post Section -->
        <div class="text-center mb-5">
            <h2 class="section-title">OUR POST</h2>
        </div>
        
        <div class="row g-4 mb-5">
            <!-- Post Card 1 -->
            <div class="col-sm-6 col-lg-3">
                <div class="card post-card h-100">
                    <div class="card-body d-flex flex-column">
                        <img src="assets/image/blog & news img1.png" alt="Maruti Suzuki VITARA" class="car-image mb-3">
                        <p class="car-description flex-grow-1">The Maruti Suzuki VITARA is equipped with an armload of safety features.</p>
                        <a href="#" class="learn-more">Learn More...</a>
                    </div>
                </div>
            </div>

            <!-- Post Card 2 -->
            <div class="col-sm-6 col-lg-3">
                <div class="card post-card h-100">
                    <div class="card-body d-flex flex-column">
                        <img src="assets/image/blog & news img2.png" alt="Maruti Suzuki Jimny" class="car-image mb-3">
                        <p class="car-description flex-grow-1">The Maruti Suzuki Jimny is equipped with an armload of safety features.</p>
                        <a href="#" class="learn-more">Learn More...</a>
                    </div>
                </div>
            </div>

            <!-- Post Card 3 -->
            <div class="col-sm-6 col-lg-3">
                <div class="card post-card h-100">
                    <div class="card-body d-flex flex-column">
                        <img src="assets/image/Be & News - img3.png" alt="Hyundai CRETA Electric" class="car-image mb-3">
                        <p class="car-description flex-grow-1">Get an immersive experience with Hyundai CRETA Electric. Its bold, beautiful and sporty look.</p>
                        <a href="#" class="learn-more">Learn More...</a>
                    </div>
                </div>
            </div>

            <!-- Post Card 4 -->
            <div class="col-sm-6 col-lg-3">
                <div class="card post-card h-100">
                    <div class="card-body d-flex flex-column">
                        <img src="assets/image/Be & News - img4.png" alt="KIA" class="car-image mb-3">
                        <p class="car-description flex-grow-1">The KIA is equipped with an armload of safety features.</p>
                        <a href="#" class="learn-more">Learn More...</a>
                    </div>
                </div>
            </div>

            <!-- Second Row - Post Cards 5-8 -->
            <div class="col-sm-6 col-lg-3">
                <div class="card post-card h-100">
                    <div class="card-body d-flex flex-column">
                        <img src="assets/image/blog & news img1.png" alt="Maruti Suzuki VITARA" class="car-image mb-3">
                        <p class="car-description flex-grow-1">The Maruti Suzuki VITARA is equipped with an armload of safety features.</p>
                        <a href="#" class="learn-more">Learn More...</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card post-card h-100">
                    <div class="card-body d-flex flex-column">
                        <img src="assets/image/blog & news img2.png" alt="Maruti Suzuki Jimny" class="car-image mb-3">
                        <p class="car-description flex-grow-1">The Maruti Suzuki Jimny is equipped with an armload of safety features.</p>
                        <a href="#" class="learn-more">Learn More...</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card post-card h-100">
                    <div class="card-body d-flex flex-column">
                        <img src="assets/image/Be & News - img3.png" alt="Hyundai CRETA Electric" class="car-image mb-3">
                        <p class="car-description flex-grow-1">Get an immersive experience with Hyundai CRETA Electric. Its bold, beautiful and sporty look.</p>
                        <a href="#" class="learn-more">Learn More...</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card post-card h-100">
                    <div class="card-body d-flex flex-column">
                        <img src="assets/image/Be & News - img4.png" alt="KIA" class="car-image mb-3">
                        <p class="car-description flex-grow-1">The KIA is equipped with an armload of safety features.</p>
                        <a href="#" class="learn-more">Learn More...</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Upcoming Cars Section -->
        <div class="text-center mb-5">
            <h2 class="section-title">Upcoming Cars</h2>
        </div>
        
        <div class="position-relative">
            <!-- <div class="carousel-container">
                <button class="nav-arrow nav-prev d-none d-md-block" id="prevBtn">‹</button>
                
                <div class="carousel-track" id="carouselTrack">
                    <div class="carousel-slide">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="card upcoming-card">
                                    <img src="image copy 14.png" alt="Mercedes Benz EQS" class="upcoming-image">
                                    <div class="card-body">
                                        <h5 class="upcoming-brand mb-1">Benz</h5>
                                        <p class="upcoming-details mb-2">Mercedes Benz EQS</p> 
                                        <p class="upcoming-price mb-0">₹1400/day+</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card upcoming-card">
                                    <img src="image copy 15.png" alt="Maruti Suzuki Swift" class="upcoming-image">
                                    <div class="card-body">
                                        <h5 class="upcoming-brand mb-1">Maruti Suzuki</h5>
                                        <p class="upcoming-details mb-2">Swift</p>
                                        <p class="upcoming-price mb-0">₹1400/day</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card upcoming-card">
                                    <img src="image copy 16.png" alt="Hyundai Creta" class="upcoming-image">
                                    <div class="card-body">
                                        <h5 class="upcoming-brand mb-1">Hyundai Creta</h5>
                                        <p class="upcoming-details mb-2">Manual, Petrol, 5 Seats</p>
                                        <p class="upcoming-price mb-0">₹1400/day</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    
                    <!-- Additional slides can be added here -->
                     <!-- <div class="carousel-slide">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="card upcoming-card">
                                    <img src="image copy 14.png" alt="Mercedes Benz EQS" class="upcoming-image">
                                    <div class="card-body">
                                        <h5 class="upcoming-brand mb-1">BMW</h5>
                                        <p class="upcoming-details mb-2">BMW X5</p> 
                                        <p class="upcoming-price mb-0">₹2000/day+</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card upcoming-card">
                                    <img src="image copy 15.png" alt="Audi A6" class="upcoming-image">
                                    <div class="card-body">
                                        <h5 class="upcoming-brand mb-1">Audi</h5>
                                        <p class="upcoming-details mb-2">A6 Sedan</p>
                                        <p class="upcoming-price mb-0">₹1800/day</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card upcoming-card">
                                    <img src="image copy 16.png" alt="Toyota Camry" class="upcoming-image">
                                    <div class="card-body">
                                        <h5 class="upcoming-brand mb-1">Toyota</h5>
                                        <p class="upcoming-details mb-2">Camry Hybrid</p>
                                        <p class="upcoming-price mb-0">₹1600/day</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button class="nav-arrow nav-next d-none d-md-block" id="nextBtn">›</button>
            </div>  -->
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Carousel functionality
        let currentSlide = 0;
        const track = document.getElementById('carouselTrack');
        const slides = track.querySelectorAll('.carousel-slide');
        const totalSlides = slides.length;

        function updateCarousel() {
            const translateX = -currentSlide * 100;
            track.style.transform = `translateX(${translateX}%)`;
        }

        document.getElementById('prevBtn').addEventListener('click', () => {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateCarousel();
        });

        document.getElementById('nextBtn').addEventListener('click', () => {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateCarousel();
        });

        // Auto-rotate carousel every 5 seconds
        setInterval(() => {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateCarousel();
        }, 5000);

        // Learn more functionality
        document.querySelectorAll('.learn-more').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                alert('Learn more page would open here');
            });
        });

        // Car card click functionality
        document.querySelectorAll('.upcoming-card').forEach(card => {
            card.addEventListener('click', () => {
                alert('Car details page would open here');
            });
        });
    </script>
</body>
</html>