<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>True Motors - Your One-Stop Destination for Car Deals</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- <a href="javascript:void(0)" onclick="openOverlay()">Login</a> -->
    <link rel="stylesheet" href="style2.css">
    <script src="script2.js"></script>
    <style>
      /* General Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    line-height: 1.6;
    color: #333;
}


.head-nav {
  background-color: #005F66 !important;
}

.text-purple {
  color: #742B88 important;
}

.btn button{
    border: 1px #742B88 solid !important;
    width:100px !important;
    height:40px !important;
}

.btn button:hover{
    background-color: #742B88;
}

.navbar .nav-link {
  transition: color 0.3s ease, background-color 0.3s ease;
}

.navbar .nav-link:hover {
  color: #ffc107 !important;
  /* Bootstrap warning color or your custom color */
  background-color: rgba(255, 255, 255, 0.1);
  /* subtle background effect */
  border-radius: 6px;
}

.header-hidden {
  transform: translateY(-100%);
  transition: transform 0.3s ease;
}
.min-w-150 {
  min-width: 150px;
}


#searchForm {
  transition: all 0.3s ease;
}

#toggleSearch img {
  cursor: pointer;
}
/* Hero Section */
.ad-banner {
    /* width: 213vh; */
    width:100%;
    height: 100vh;
    overflow: hidden;
}

.ad-banner h1 {
    
    font-size: 30px;
    object-fit: contain;
    overflow: hidden;
    font-weight: 400;
}

.ad-text {
    /* Bootstrap position-absolute, top-20, start-10, translate-middle-y handle this */
   position: absolute;
    bottom:45%;
    /* font-size: 30px; */
    color: black;
}

.search-section {
            padding: 20px 0;
        }
        
        .search-container {
            display: flex;
            align-items: center;
            gap: 8px;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .buy-dropdown {
            background: linear-gradient(135deg, #2c7865, #1e5a4d);
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
            font-weight: 500;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.2s ease;
            min-width: 80px;
            text-align: center;
        }
        
        .buy-dropdown:hover {
            background: linear-gradient(135deg, #1e5a4d, #2c7865);
            transform: translateY(-1px);
        }
        
        .filter-dropdown {
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px 16px;
            font-size: 14px;
            color: #333;
            cursor: pointer;
            transition: all 0.2s ease;
            min-width: 120px;
        }
        
        .filter-dropdown:hover {
            border-color: #7b1fa2;
            box-shadow: 0 0 0 2px rgba(123, 31, 162, 0.1);
        }
        
        .filter-dropdown:focus {
            outline: none;
            border-color: #7b1fa2;
            box-shadow: 0 0 0 2px rgba(123, 31, 162, 0.2);
        }
        
        .location-icon {
            color: #666;
            font-size: 16px;
            margin-right: 4px;
        }
        
        .search-btn {
            background: linear-gradient(135deg, #7b1fa2, #9c27b0);
            border: none;
            color: white;
            padding: 10px 24px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.2s ease;
            min-width: 100px;
        }
        
        .search-btn:hover {
            background: linear-gradient(135deg, #6a1b9a, #7b1fa2);
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(123, 31, 162, 0.3);
        }
        
        .dropdown-arrow {
            margin-left: 8px;
            font-size: 12px;
        }
        
        @media (max-width: 768px) {
            .search-container {
                flex-wrap: wrap;
                gap: 10px;
                padding: 0 15px;
            }
            
            .filter-dropdown, .buy-dropdown, .search-btn {
                flex: 1;
                min-width: 100px;
            }
        }

.buy-dropdown {
    /* Bootstrap d-flex, align-items-center, bg-success, text-white, px-4, py-3, rounded-start-pill, position-relative handle this */
    width: 15%; /* Keep original width for desktop */
    height: 75%; 
}

.buy-btn {
    background: none;
    border: none;
    outline: none;  
    color: white;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
}

.arrow {
    width: 0;
    height: 0;
    border-top: 20px solid transparent;
    border-bottom: 20px solid transparent;
    border-left: 15px solid #066;
    margin-left: 6px;
}

/* .location-selector { */
    /* Bootstrap d-flex, align-items-center, border, rounded-pill, p-3, bg-white handle this */
/* } */

.location-selector select {
    border: none;
    outline: none;
    font-size: 16px;
    background: none;
    color: #333;
    margin-left: 8px;
}

/* .search-input { */
    /* Bootstrap d-flex, align-items-center, border, rounded-pill, p-3, bg-white, flex-grow-1 handle this */
/* } */

.search-input input {
    border: none;
    outline: none;
    font-size: 16px;
    width: 100%;
    margin-left: 8px;
}

.search-btn {
    background-color: #7b1fa2;
    color: white;
    border: none;
    border-radius: 12px;
    padding: 14px 32px;
    font-size: 18px;
    cursor: pointer;
    font-weight: 500;
}


/* Banner Section */
.banner {
  width: 85%;
  margin-top:50px;
  margin-left:110px;
  overflow: hidden;
}

.banner img {
  width: 100%;
  height: auto;
}

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
  font-size: 1.8rem;
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
  background: #eee;
  margin: 3px 5px 3px 0;
  padding: 4px 8px;
  font-size: 0.75rem;
  border-radius: 6px;
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

/* Upcoming Cars Section */
.upcoming-section {
  max-width: 1300px;
  margin: 40px auto;
  padding: 40px 80px;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  border-style: groove;
}

.upcoming-section h3 {
  margin-bottom: 20px;
  font-size: 1.8rem;
  padding-left: 10px;
}

.upcar-carousel {
  /* Bootstrap d-flex, flex-nowrap, overflow-auto handle this */
  gap: 50px;
  scrollbar-width: none; /* For Firefox */
}

.upcar-carousel::-webkit-scrollbar {
  display: none; /* For Chrome, Safari, Opera */
}

.upcar-card {
  /* Bootstrap bg-white, rounded-3, shadow-sm, flex-shrink-0 handle this */
  min-width: 350px;
  width: 25%;
  height: 18%;
  transition: transform 0.3s ease;
}

.upcar-card:hover {
  transform: scale(1.03);
}

.upcar-card img {
  /* Bootstrap img-fluid, w-100, rounded-top handle this */
  height: 180px; 
  object-fit: cover; 
}

.upcar-info {
  padding: 15px;
}

.upcar-info h4 {
  font-size: 1.1rem;
  margin: 0;
  font-weight: 600;
}

.upcar-info .brand {
  font-size: 0.95rem;
  color: #555;
  margin-top: 4px;
  text-decoration: underline;
}

.upcar-info .prize {
  margin-top: 8px;
  font-weight: bold;
  font-size: 1rem;
}

/* Car Action Section */
/* .car-action-section { */
  /* Bootstrap d-flex, justify-content-center, flex-wrap, gap-5, my-5 handle this */
/* } */

.card {
  width: 500px;
  padding: 25px;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  position: relative;
  text-align: left;
}

.buy-card {
  background-color: #e6f0fb;
}

.sell-card {
  background-color: #ffe6ee;
}

.card h3 {
  font-size: 2rem;
  font-weight: bold;
  color: #000;
  margin-bottom: 10px;
}

.card p {
  font-size: 1.2rem;
  margin-bottom: 20px;
  color: #333;
}

.action-row {
  /* Bootstrap d-flex, align-items-center, justify-content-between handle this */
  margin-top: 15px;
}

.buy-btn1 {
  background-color: #003366;
  color: #fff;
  padding: 10px 20px;
  border: none;
  font-size: 15px;
  border-radius: 12px;
  cursor: pointer;
}

.sell-btn {
  background-color: #5c2b00;
  color: #fff;
  padding: 10px 20px;
  font-size: 15px;
  border: none;
  border-radius: 12px;
  cursor: pointer;
}

/* Why True Motors Section */
.why-choose-us {
            text-align: center;
            max-width: 1200px;
            margin: 50px auto;
            padding: 60px 20px;
            background: #fff;
        }

        .why-choose-us h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 60px;
            color: #0f0f0f;
            font-family: 'Poppins', sans-serif;
        }

        .features-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 30px;
            flex-wrap: wrap;
        }

        .feature-item {
            flex: 1;
            min-width: 250px;
            max-width: 280px;
            text-align: center;
            padding: 20px 15px;
            background: #fff;
            border-radius: 12px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 25px;
            background: #f8f9ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .feature-icon img {
            width: 45px;
            height: 45px;
            object-fit: contain;
        }

        .feature-item h3 {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #2c3e50;
            line-height: 1.3;
            font-family: 'Poppins', sans-serif;
        }

        .feature-item p {
            font-size: 0.95rem;
            color: #6c757d;
            line-height: 1.6;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

/* Compare Section */
.compare-section {
  border: 1px solid #e0e0e0;
  padding: 20px;
  border-style:groove;
  border-radius: 12px;
  background: white;
  position: relative;
  margin:70px;
}

.compare-section h2 {
  margin-bottom: 20px;
}

.compare-wrapper {
  /* Bootstrap d-flex, flex-nowrap, overflow-auto, pb-3, position-relative handle this */
  gap: 20px;
  scroll-behavior: smooth;
}

.compare-card {
  width: 400px;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.2);
  background: #fff;
  overflow: hidden;
  flex-shrink: 0;
  margin: 0 auto; 
}

.car-images {
  /* Bootstrap d-flex, position-relative handle this */
  height: 160px;
}

.car-img {
  width: 50%;
  height: 100%;
  object-fit: cover;
}

/* .compare-icon { */
  /* Bootstrap position-absolute, top-50, start-50, translate-middle, bg-purple, text-white, rounded-circle, p-2, fs-5, z-1 handle this */
/* } */

/* .car-info { */
  /* Bootstrap d-flex, justify-content-between, p-3 handle this */
/* } */

.car-details {
  width: 48%;
}

.car-details h3 {
  margin: 0;
  font-size: 16px;
  font-weight: 600;
}

.car-details p {
  margin: 4px 0;
  font-size: 14px;
}

.note {
  font-size: 12px;
  color: #666;
}

/* .scroll-icon { */
  /* Bootstrap position-absolute, top-50, end-0, translate-middle-y, bg-white, rounded-circle, shadow-sm, p-2, fs-5, cursor-pointer, z-1 handle this */
/* } */

/* Brands Section */
.brands-section {
  border: 1px solid #ccc;
  padding: 50px;
  border-radius: 16px;
  text-align: center;
  max-width: 1420px;
  margin: 0 auto;
  background: #fff;
  font-family: Arial, sans-serif;
  border-style: groove;
}

.brands-section h2 {
  font-size: 40px;
  margin-bottom: 40px;
}

.brands-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(120px, 2fr));
  gap: 120px;
  justify-items: center;
  margin-bottom: 5px;
}

.brand {
  background: transparent;
  padding: 2px;
  border-radius: 12px;
  transition: 0.3s ease;
}

.brand img {
  width: 80px;
  height: 80px;
  object-fit: contain;
}

.brand p {
  margin-top: 4px;
  font-size: 14px;
  font-weight: bold;
  color: #000;
}

.hidden {
  display: none;
}

.view-more {
  color: #6a0dad;
  font-weight: 500;
  cursor: pointer;
  text-decoration: underline;
}

/* Footer */
.footer {
  background: #333;
  color: #fff;
  padding: 70px 40px 20px;
  font-family: Arial, sans-serif;
  margin-top: 20px; 
}

.footer-content {
  /* Bootstrap d-flex, flex-wrap, align-items-start, justify-content-between, gap-4 handle this */
  max-width: 1500px;
  margin: 0 auto;
}

.footer-col {
  flex: 1 1 180px;
  min-width: 180px;
}

.brand-info {
  flex: 2 1 300px;
  max-width: 350px;
}

.footer-logo {
  width: 280px;
  margin-bottom: 20px;
}

.footer-col h4 {
  font-size: 18px;
  margin-bottom: 15px;
}

.footer-col ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-col ul li {
  margin-bottom: 18px;
}

.footer-col ul li a {
  color: #ddd;
  text-decoration: none;
  font-size: 16px;
}

.footer-col ul li a:hover {
  color: #817a7a9f;
}

/* .connect .store-buttons { */
  /* Bootstrap d-flex, gap-2, flex-wrap, mb-3 handle this */
/* } */

.connect .store-buttons img {
  width: 110px;
  margin: 5px 10px 15px 0;
  border-radius: 8px;
}

/* .social-icons { */
  /* Bootstrap d-flex, gap-3 handle this */
/* } */

.social-icons img {
  width: 32px;
  height: 32px;
  background: #fff;
  border-radius: 50%;
  padding: 5px;
}

.footer-bottom {
  border-top: 1px solid #888;
  margin-top: 30px;
  padding-top: 20px;
  text-align: center;
  font-size: 16px;
  color: #ccc;
}


/* ===============================================
   RESPONSIVE MEDIA QUERIES
   =============================================== */

/* Large Desktop Screens (1400px and above) */
@media (min-width: 1400px) {
    .container, .container-fluid {
        max-width: 1320px;
    }
    
    .ad-text h1 {
        font-size: 4rem;
        margin-left: 80px !important;
    }
    
    .car-carousel {
        gap: 60px;
    }
    
    .upcar-carousel {
        gap: 60px;
    }
    
    .features-container {
        max-width: 1500px;
    }
    
    .stats-container {
        max-width: 1500px;
    }
}

/* Desktop Screens (1200px - 1399px) */
@media (max-width: 1399px) and (min-width: 1200px) {
    .ad-text h1 {
        font-size: 3.5rem;
    }
    
    .banner {
        width: 90%;
    }
    
    .top-rated-section,
    .upcoming-section {
        padding: 40px 50px;
    }
    
    .features-container {
        max-width: 1300px;
    }
}

/* Large Tablet Screens (992px - 1199px) */
@media (max-width: 1199px) and (min-width: 992px) {
    .ad-text h1 {
        font-size: 3rem;
        margin-left: 30px !important;
    }
    
    .banner {
        width: 95%;
        margin-left: auto;
        margin-right: auto;
    }
    
    .top-rated-section,
    .upcoming-section {
        padding: 30px 40px;
        margin: 30px 20px;
    }
    
    .car-carousel,
    .upcar-carousel {
        gap: 30px;
    }
    
    .car-card,
    .upcar-card {
        min-width: 300px;
    }
    
    .features-container {
        gap: 15px;
        max-width: 1200px;
    }
    
    .feature-card {
        width: 150px;
        margin: 10px;
    }
    
    .stats-container {
        margin: 50px 20px;
        padding: 35px 20px;
        max-width: 1200px;
    }
    
    .compare-section {
        margin: 50px 20px;
    }
    
    .compare-card {
        width: 350px;
    }
    
    .brands-grid {
        gap: 30px;
        grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
    }
    
    .brands-section {
        max-width: 1200px;
    }
}

/* Medium Tablet Screens (768px - 991px) */
@media (max-width: 991px) and (min-width: 768px) {
    .ad-banner {
        height: 70vh;
    }
    
    .ad-text h1 {
        font-size: 48px;
        margin-top: 30px;
        margin-left: 20px !important;
        /* margin-bottom: 30px !important; */
    }
    
    .search-container {
        flex-wrap: wrap;
        gap: 12px;
    }
    
    .filter-dropdown, 
    .buy-dropdown {
        flex: 1 1 calc(50% - 6px);
        min-width: 140px;
    }
    
    .search-btn {
        flex: 1 1 100%;
        margin-top: 8px;
    }
    
    .banner {
        width: 100%;
        margin: 30px 0;
    }
    
    .top-rated-section,
    .upcoming-section {
        padding: 25px 20px;
        margin: 25px 15px;
    }
    
    .top-rated-section h3,
    .upcoming-section h3 {
        font-size: 1.5rem;
    }
    
    .car-carousel,
    .upcar-carousel {
        gap: 20px;
    }
    
    .car-card,
    .upcar-card {
        min-width: 280px;
        width: 80%;
    }
    
    .car-action-section {
        flex-direction: column;
        gap: 25px;
    }
    
    .card {
        width: 100%;
        max-width: 500px;
    }
    
    .card h3 {
        font-size: 1.8rem;
    }
    
    .card p {
        font-size: 1.1rem;
    }
    
    .why-true-motors h2 {
        font-size: 2.2rem;
    }
    
    .why-true-motors p {
        font-size: 1.6rem;
    }
    
    .features-container {
        justify-content: center;
        gap: 20px;
    }
    
    .feature-card {
        width: 140px;
        margin: 8px;
    }
    
    .feature-card img {
        height: 110px;
    }
    
    .stats-container {
        flex-direction: column;
        gap: 25px;
        margin: 40px 15px;
    }
    
    .stat-box {
        min-width: 200px;
    }
    
    .why-choose-us {
        margin: 40px auto;
    }
    
    .why-choose-us h2 {
        font-size: 2rem;
        margin-bottom: 35px;
    }
    
    .features {
        justify-content: center;
        gap: 25px;
    }
    
    .feature {
        min-width: 200px;
        max-width: 300px;
    }
    
    .compare-section {
        margin: 40px 15px;
        padding: 15px;
    }
    
    .compare-card {
        width: 320px;
    }
    
    .brands-section {
        padding: 40px 15px;
        margin: 40px 15px;
    }
    
    .brands-section h2 {
        font-size: 32px;
    }
    
    .brands-grid {
        gap: 25px;
        grid-template-columns: repeat(auto-fit, minmax(90px, 1fr));
    }
    
    .brand img {
        width: 70px;
        height: 70px;
    }
    
    .footer {
        padding: 50px 20px 15px;
    }
    
    .footer-content {
        gap: 25px;
    }
    
    .footer-col {
        flex: 1 1 calc(50% - 15px);
    }
    
    .brand-info {
        flex: 1 1 100%;
        max-width: 100%;
        margin-bottom: 20px;
    }
}

/* Small Tablet/Large Phone Screens (576px - 767px) */
@media (max-width: 767px) and (min-width: 576px) {
    .ad-banner {
        height: 60vh;
    }
    
    .ad-text h1 {
        font-size: 48px;
        margin-left: 35px !important;
        /* margin-bottom: 20px !important; */
    }
    
    .search-container {
        flex-direction: column;
        gap: 10px;
        padding: 0 20px;
    }
    
    .filter-dropdown,
    .buy-dropdown,
    .search-btn {
        width: 100%;
        min-width: auto;
    }
    
    .banner {
        width: 100%;
        margin: 20px 0;
    }
    
    .top-rated-section,
    .upcoming-section {
        padding: 20px 15px;
        margin: 20px 10px;
    }
    
    .top-rated-section h3,
    .upcoming-section h3 {
        font-size: 1.4rem;
    }
    
    .car-carousel,
    .upcar-carousel {
        gap: 15px;
    }
    
    .car-card,
    .upcar-card {
        min-width: 250px;
        width: 85%;
    }
    
    .car-info {
        padding: 12px;
    }
    
    .upcar-info {
        padding: 12px;
        height: auto;
    }
    
    .card {
        padding: 20px;
    }
    
    .card h3 {
        font-size: 1.6rem;
    }
    
    .card p {
        font-size: 1rem;
    }
    
    .action-row {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }
    
    .why-true-motors h2 {
        font-size: 1.8rem;
    }
    
    .why-true-motors p {
        font-size: 1.3rem;
    }
    
    .features-container {
        flex-direction: column;
        gap: 15px;
        padding: 30px 15px;
    }
    
    .feature-card {
        width: 130px;
    }
    
    .stats-container {
        flex-direction: column;
        gap: 20px;
        margin: 30px 10px;
        padding: 30px 15px;
    }
    
    .why-choose-us h2 {
        font-size: 1.8rem;
        margin-bottom: 30px;
    }
    
    .features {
        flex-direction: column;
        gap: 20px;
        align-items: center;
    }
    
    .feature {
        max-width: 100%;
    }
    
    .compare-section {
        margin: 30px 10px;
        padding: 15px;
    }
    
    .compare-card {
        width: 280px;
    }
    
    .car-images {
        height: 140px;
    }
    
    .brands-section {
        padding: 30px 10px;
        margin: 30px 10px;
    }
    
    .brands-section h2 {
        font-size: 28px;
        margin-bottom: 30px;
    }
    
    .brands-grid {
        gap: 20px;
        grid-template-columns: repeat(auto-fit, minmax(80px, 1fr));
    }
    
    .brand img {
        width: 60px;
        height: 60px;
    }
    
    .footer-content {
        flex-direction: column;
        gap: 20px;
    }
    
    .footer-col,
    .brand-info {
        flex: 1 1 100%;
        max-width: 100%;
    }
    
    .connect .store-buttons {
        justify-content: center;
    }
    
    .social-icons {
        justify-content: center;
    }
}

/* Mobile Screens (320px - 575px) */
@media (max-width: 575px) {
    body {
        font-size: 14px;
    }
    
    /* Header adjustments for mobile */
    .navbar-nav {
        text-align: center;
    }
    
    .navbar-nav .nav-link {
        padding: 10px 15px;
        font-size: 16px;
    }
    
    .min-w-150 {
        min-width: 120px;
    }
    
    /* Hero Section */
    .ad-banner {
        height: 40vh;
        min-height: 300px;
    }
    .ad-banner {
        height: 40vh;
        min-height: 300px;
    }
    
    .ad-text {
        position: static !important;
        transform: none !important;
        padding: 20px;
        text-align: center;
    }
    
    .ad-text h1 {
        font-size: 1.5rem;
        margin: 20px 0 !important;
        line-height: 1.3;
    }
    
    /* Search Section */
    .search-section {
        margin-bottom: 30px;
    }
    
    .search-container {
        flex-direction: column;
        gap: 12px;
        padding: 0 15px;
    }
    
    .filter-dropdown,
    .buy-dropdown,
    .search-btn {
        width: 100%;
        padding: 12px 16px;
        font-size: 16px;
        min-width: auto;
    }
    
    /* Banner */
    .banner {
        width: 100%;
        margin: 15px 0;
        padding: 0 10px;
    }
    
    /* Sections */
    .top-rated-section,
    .upcoming-section {
        padding: 15px 10px;
        margin: 15px 5px;
    }
    
    .top-rated-section h3,
    .upcoming-section h3 {
        font-size: 1.3rem;
        margin-bottom: 15px;
    }
    
    /* Car Carousels */
    .car-carousel,
    .upcar-carousel {
        gap: 12px;
        padding-bottom: 10px;
    }
    
    .car-card,
    .upcar-card {
        min-width: 220px;
        width: 75%;
    }
    
    .car-info,
    .upcar-info {
        padding: 10px;
    }
    
    .car-info h4 {
        font-size: 0.9rem;
    }
    
    .tags span {
        font-size: 0.7rem;
        padding: 3px 6px;
        margin: 2px 3px 2px 0;
    }
    
    .price {
        font-size: 1rem;
    }
    
    .emi {
        font-size: 0.8rem;
    }
    
    .upcar-card img {
        height: 140px;
    }
    
    .upcar-info {
        height: auto;
        min-height: 80px;
    }
    
    .upcar-info h4 {
        font-size: 1rem;
    }
    
    /* Action Cards */
    .car-action-section {
        gap: 20px;
        margin: 30px 0;
        padding: 0 10px;
    }
    
    .card {
        padding: 15px;
        width: 100%;
    }
    
    .card h3 {
        font-size: 1.4rem;
        line-height: 1.2;
    }
    
    .card p {
        font-size: 0.9rem;
        margin-bottom: 15px;
    }
    
    .action-row {
        flex-direction: column;
        gap: 12px;
        text-align: center;
    }
    
    .buy-btn1,
    .sell-btn {
        width: 100%;
        padding: 12px 20px;
    }
    
    /* Why True Motors */
    .why-true-motors {
        margin: 25px 0;
        padding: 0 15px;
    }
    
    .why-true-motors h2 {
        font-size: 1.6rem;
        line-height: 1.2;
    }
    
    .why-true-motors p {
        font-size: 1.1rem;
        line-height: 1.3;
    }
    
    /* Features Container */
    .features-container {
        flex-direction: column;
        gap: 15px;
        padding: 25px 10px;
        margin: 25px 5px;
    }
    
    .feature-card {
        width: 120px;
    }
    
    .feature-card img {
        height: 100px;
    }
    
    .feature-card p {
        font-size: 14px;
        margin-top: 10px;
    }
    
    /* Stats Container */
    .stats-container {
        flex-direction: column;
        gap: 15px;
        margin: 25px 5px;
        padding: 25px 10px;
    }
    
    .stat-box {
        min-width: 150px;
    }
    
    .stat-box h2 {
        font-size: 28px;
    }
    
    .stat-box p {
        font-size: 12px;
    }
    
    /* Why Choose Us */
    .why-choose-us {
        margin: 25px auto;
        padding: 0 10px;
    }
    
    .why-choose-us h2 {
        font-size: 1.6rem;
        margin-bottom: 25px;
        line-height: 1.2;
    }
    
    .features {
        flex-direction: column;
        gap: 20px;
        align-items: center;
    }
    
    .feature {
        max-width: 100%;
        text-align: center;
    }
    
    .feature h3 {
        font-size: 1.1rem;
    }
    
    .feature p {
        font-size: 0.9rem;
    }
    
    .feature-icon img {
        width: 40px;
        height: 40px;
        margin-top: 10px;
    }
    
    /* Compare Section */
    .compare-section {
        margin: 25px 5px;
        padding: 10px;
    }
    
    .compare-section h2 {
        font-size: 1.4rem;
        margin-bottom: 15px;
    }
    
    .compare-wrapper {
        gap: 15px;
    }
    
    .compare-card {
        width: 250px;
    }
    
    .car-images {
        height: 120px;
    }
    
    .car-info {
        padding: 10px;
    }
    
    .car-details h3 {
        font-size: 14px;
    }
    
    .car-details p {
        font-size: 12px;
    }
    
    .note {
        font-size: 10px;
    }
    
    /* Brands Section */
    .brands-section {
        padding: 25px 5px;
        margin: 25px 5px;
    }
    
    .brands-section h2 {
        font-size: 24px;
        margin-bottom: 25px;
    }
    
    .brands-grid {
        gap: 15px;
        grid-template-columns: repeat(auto-fit, minmax(70px, 1fr));
    }
    
    .brand {
        padding: 5px;
    }
    
    .brand img {
        width: 50px;
        height: 50px;
    }
    
    .view-more {
        font-size: 14px;
        margin-top: 15px;
    }
    
    /* Footer */
    .footer {
        padding: 30px 15px 15px;
    }
    
    .footer-content {
        flex-direction: column;
        gap: 20px;
        text-align: center;
    }
    
    .footer-col,
    .brand-info {
        flex: 1 1 100%;
        max-width: 100%;
    }
    
    .footer-logo {
        width: 200px;
    }
    
    .footer-col h4 {
        font-size: 16px;
        margin-bottom: 12px;
    }
    
    .footer-col ul li {
        margin-bottom: 12px;
    }
    
    .footer-col ul li a {
        font-size: 14px;
    }
    
    .connect .store-buttons {
        justify-content: center;
        gap: 8px;
    }
    
    .connect .store-buttons img {
        width: 90px;
    }
    
    .social-icons {
        justify-content: center;
        gap: 10px;
    }
    
    .social-icons img {
        width: 28px;
        height: 28px;
    }
    
    .footer-bottom {
        font-size: 14px;
        margin-top: 20px;
        padding-top: 15px;
    }
}

/* Extra Small Mobile Screens (280px - 319px) */
@media (max-width: 319px) {
    .ad-text h1 {
        font-size: 1.3rem;
    }
    
    .search-container {
        padding: 0 10px;
    }
    
    .car-card,
    .upcar-card {
        min-width: 200px;
        width: 90%;
    }
    
    .compare-card {
        width: 220px;
    }
    
    .footer-logo {
        width: 180px;
    }
    
    .connect .store-buttons img {
        width: 80px;
    }
    
    .brands-grid {
        grid-template-columns: repeat(auto-fit, minmax(60px, 1fr));
    }
    
    .brand img {
        width: 45px;
        height: 45px;
    }
}

/* Landscape Mobile Orientation */
@media (max-height: 500px) and (orientation: landscape) {
    .ad-banner {
        height: 80vh;
    }
    
    .ad-text h1 {
        font-size: 48px;
    }
    
    .features-container {
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
    }
    
    .stats-container {
        flex-direction: row;
        flex-wrap: wrap;
    }
}

/* High DPI/Retina Display Adjustments */
@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .feature-card img,
    .brand img,
    .social-icons img {
        image-rendering: -webkit-optimize-contrast;
        image-rendering: crisp-edges;
    }
}

/* Print Styles */
@media print {
    .navbar,
    .search-section,
    .overlay,
    .footer {
        display: none !important;
    }
    
    .ad-banner {
        height: auto;
        page-break-after: always;
    }
    
    body {
        font-size: 12pt;
        line-height: 1.4;
    }
    
    .top-rated-section,
    .upcoming-section,
    .car-action-section,
    .compare-section,
    .brands-section {
        page-break-inside: avoid;
        margin: 20pt 0;
    }
}

/* Accessibility and Motion Preferences */
@media (prefers-reduced-motion: reduce) {
    *,
    *::before,
    *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }
    
    .car-card:hover,
    .upcar-card:hover {
        transform: none;
    }
    
    .buy-dropdown:hover,
    .search-btn:hover {
        transform: none;
    }
}

/* High Contrast Mode */
@media (prefers-contrast: high) {
    .card,
    .car-card,
    .upcar-card,
    .compare-card {
        border: 2px solid #000;
    }
    
    .search-btn,
    .buy-btn1,
    .sell-btn {
        border: 2px solid #fff;
    }
}

/* Dark Mode Support (Ready for implementation) */
@media (prefers-color-scheme: dark) {
    /* Uncomment and customize for dark mode support
    body {
        background-color: #121212;
        color: #ffffff;
    }
    
    .top-rated-section,
    .upcoming-section,
    .card,
    .car-card,
    .upcar-card {
        background-color: #1e1e1e;
        color: #ffffff;
    }
    
    .footer {
        background-color: #000000;
    }
    */
}


/* why cars section responsive*/
/* Large Desktop Screens (1400px and above) */
        @media (min-width: 1400px) {
            .why-choose-us {
                max-width: 1400px;
                padding: 80px 40px;
            }

            .why-choose-us h2 {
                font-size: 3rem;
                margin-bottom: 80px;
            }

            .features-row {
                gap: 40px;
            }

            .feature-item {
                min-width: 300px;
                max-width: 320px;
                padding: 30px 20px;
            }

            .feature-icon {
                width: 90px;
                height: 90px;
                margin-bottom: 30px;
            }

            .feature-icon img {
                width: 50px;
                height: 50px;
            }

            .feature-item h3 {
                font-size: 1.4rem;
                margin-bottom: 20px;
            }

            .feature-item p {
                font-size: 1rem;
            }
        }

        /* Desktop Screens (1200px - 1399px) */
        @media (max-width: 1399px) and (min-width: 1200px) {
            .why-choose-us {
                padding: 70px 30px;
            }

            .why-choose-us h2 {
                font-size: 2.8rem;
                margin-bottom: 70px;
            }

            .features-row {
                gap: 35px;
            }

            .feature-item {
                min-width: 280px;
                max-width: 300px;
                padding: 25px 18px;
            }

            .feature-icon {
                width: 85px;
                height: 85px;
            }

            .feature-icon img {
                width: 48px;
                height: 48px;
            }

            .feature-item h3 {
                font-size: 1.3rem;
            }
        }

        /* Large Tablet Screens (992px - 1199px) */
        @media (max-width: 1199px) and (min-width: 992px) {
            .why-choose-us {
                padding: 60px 25px;
            }

            .why-choose-us h2 {
                font-size: 2.5rem;
                margin-bottom: 50px;
            }

            .features-row {
                gap: 25px;
            }

            .feature-item {
                min-width: 220px;
                max-width: 260px;
                padding: 20px 15px;
            }

            .feature-icon {
                width: 75px;
                height: 75px;
                margin-bottom: 20px;
            }

            .feature-icon img {
                width: 42px;
                height: 42px;
            }

            .feature-item h3 {
                font-size: 1.2rem;
                margin-bottom: 12px;
            }

            .feature-item p {
                font-size: 0.9rem;
            }
        }

        /* Medium Tablet Screens (768px - 991px) */
        @media (max-width: 991px) and (min-width: 768px) {
            .why-choose-us {
                padding: 50px 20px;
            }

            .why-choose-us h2 {
                font-size: 2.2rem;
                margin-bottom: 40px;
            }

            .features-row {
                justify-content: center;
                gap: 30px;
            }

            .feature-item {
                flex: 1 1 calc(50% - 15px);
                min-width: 300px;
                max-width: 350px;
                margin-bottom: 30px;
            }

            .feature-icon {
                width: 70px;
                height: 70px;
                margin-bottom: 18px;
            }

            .feature-icon img {
                width: 40px;
                height: 40px;
            }

            .feature-item h3 {
                font-size: 1.15rem;
                margin-bottom: 10px;
            }

            .feature-item p {
                font-size: 0.88rem;
            }
        }

        /* Small Tablet/Large Phone Screens (576px - 767px) */
        @media (max-width: 767px) and (min-width: 576px) {
            .why-choose-us {
                padding: 40px 15px;
            }

            .why-choose-us h2 {
                font-size: 2rem;
                margin-bottom: 35px;
            }

            .features-row {
                flex-direction: column;
                align-items: center;
                gap: 25px;
            }

            .feature-item {
                flex: none;
                width: 100%;
                max-width: 400px;
                min-width: auto;
                padding: 25px 20px;
                margin-bottom: 0;
            }

            .feature-icon {
                width: 65px;
                height: 65px;
                margin-bottom: 15px;
            }

            .feature-icon img {
                width: 38px;
                height: 38px;
            }

            .feature-item h3 {
                font-size: 1.1rem;
                margin-bottom: 10px;
            }

            .feature-item p {
                font-size: 0.85rem;
                max-width: 350px;
                margin: 0 auto;
            }
        }

        /* Mobile Screens (320px - 575px) */
        @media (max-width: 575px) {
            .why-choose-us {
                padding: 35px 10px;
                margin: 30px auto;
            }

            .why-choose-us h2 {
                font-size: 1.8rem;
                margin-bottom: 30px;
                line-height: 1.2;
                padding: 0 10px;
            }

            .features-row {
                flex-direction: column;
                align-items: center;
                gap: 20px;
            }

            .feature-item {
                width: 100%;
                max-width: 320px;
                padding: 20px 15px;
                border: 1px solid #f0f0f0;
                border-radius: 8px;
            }

            .feature-item:hover {
                transform: translateY(-2px);
            }

            .feature-icon {
                width: 60px;
                height: 60px;
                margin-bottom: 12px;
            }

            .feature-icon img {
                width: 35px;
                height: 35px;
            }

            .feature-item h3 {
                font-size: 1rem;
                margin-bottom: 8px;
                line-height: 1.3;
            }

            .feature-item p {
                font-size: 0.82rem;
                line-height: 1.5;
                max-width: 280px;
                margin: 0 auto;
            }
        }

        /* Extra Small Mobile Screens (280px - 319px) */
        @media (max-width: 319px) {
            .why-choose-us {
                padding: 30px 8px;
            }

            .why-choose-us h2 {
                font-size: 1.6rem;
                margin-bottom: 25px;
                padding: 0 5px;
            }

            .feature-item {
                max-width: 280px;
                padding: 18px 12px;
            }

            .feature-icon {
                width: 55px;
                height: 55px;
                margin-bottom: 10px;
            }

            .feature-icon img {
                width: 32px;
                height: 32px;
            }

            .feature-item h3 {
                font-size: 0.95rem;
                margin-bottom: 6px;
            }

            .feature-item p {
                font-size: 0.8rem;
                max-width: 250px;
            }
        }

        /* Landscape Mobile Orientation */
        @media (max-height: 500px) and (orientation: landscape) and (max-width: 991px) {
            .why-choose-us {
                padding: 30px 15px;
            }

            .why-choose-us h2 {
                font-size: 1.8rem;
                margin-bottom: 25px;
            }

            .features-row {
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
                gap: 15px;
            }

            .feature-item {
                flex: 1 1 calc(50% - 10px);
                min-width: 200px;
                max-width: 250px;
                padding: 15px 10px;
            }

            .feature-icon {
                width: 50px;
                height: 50px;
                margin-bottom: 8px;
            }

            .feature-icon img {
                width: 30px;
                height: 30px;
            }

            .feature-item h3 {
                font-size: 0.9rem;
                margin-bottom: 5px;
            }

            .feature-item p {
                font-size: 0.75rem;
                line-height: 1.4;
            }
        }

        /* High DPI/Retina Display Adjustments */
        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
            .feature-icon img {
                image-rendering: -webkit-optimize-contrast;
                image-rendering: crisp-edges;
            }
        }

        /* Print Styles */
        @media print {
            .why-choose-us {
                page-break-inside: avoid;
                margin: 20pt 0;
                padding: 20pt;
                background: white !important;
            }

            .why-choose-us h2 {
                font-size: 18pt;
                margin-bottom: 15pt;
            }

            .features-row {
                flex-direction: row;
                gap: 15pt;
            }

            .feature-item {
                flex: 1;
                padding: 10pt;
                border: 1pt solid #ccc;
            }

            .feature-icon {
                width: 30pt;
                height: 30pt;
                background: #f5f5f5 !important;
            }

            .feature-item h3 {
                font-size: 12pt;
                margin-bottom: 5pt;
            }

            .feature-item p {
                font-size: 10pt;
            }
        }

        /* Accessibility and Motion Preferences */
        @media (prefers-reduced-motion: reduce) {
            .feature-item {
                transition: none;
            }

            .feature-item:hover {
                transform: none;
            }
        }

        /* High Contrast Mode */
        @media (prefers-contrast: high) {
            .feature-item {
                border: 2px solid #000;
                background: #fff;
            }

            .feature-item h3 {
                color: #000;
            }

            .feature-item p {
                color: #333;
            }

            .feature-icon {
                border: 2px solid #000;
                background: #fff !important;
            }

            .feature-icon img {
                filter: none !important;
            }
        }

        /* Dark Mode Support */
        @media (prefers-color-scheme: dark) {
            .why-choose-us {
                background: #1a1a1a;
                color: #fff;
            }

            .why-choose-us h2 {
                color: #fff;
            }

            .feature-item {
                background: #2a2a2a;
                border: 1px solid #333;
            }

            .feature-item h3 {
                color: #fff;
            }

            .feature-item p {
                color: #ccc;
            }

            .feature-item:hover {
                background: #333;
                box-shadow: 0 8px 25px rgba(255, 255, 255, 0.1);
            }
        }

        /* login overlay */
        /* Background overlay (covers entire site including header) */
.overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.55);
  z-index: 9999; /* <---- KEY PART: higher than header */
  display: none;
  overflow: hidden;
}

/* Slide-in right panel */
.login-panel {
  position: absolute;
  top: 0;
  right: -450px; /* hidden initially */
  width: 450px;
  height: 100%;
  background: #fff;
  box-shadow: -4px 0 12px rgba(0,0,0,0.3);
  transition: right 0.5s ease;
  padding: 40px 30px;
  overflow-y: auto;
}

/* When overlay is active */
.overlay.show .login-panel {
  right: 0;
}

/* Close button */
.close {
  position: absolute;
  top: 20px;
  left: 20px;
  font-size: 24px;
  color: #333;
  cursor: pointer;
}

/* Prevent body scroll when overlay open */
body.modal-open {
  overflow: hidden;
}

/* otp overlay */
* OTP Input Styles */
.otp-inputs input:focus {
  border: 2px solid #731d91 !important;
  background-color: #fff !important;
  outline: none;
  box-shadow: 0 0 0 3px rgba(115, 29, 145, 0.1);
}

.otp-inputs input.filled {
  background-color: #e8f0fe !important;
  border-color: #731d91 !important;
}

.resend-otp:hover:not(.disabled) {
  color: #0052cc !important;
  text-decoration: underline !important;
}

.resend-otp.disabled {
  color: #999 !important;
  pointer-events: none;
  cursor: not-allowed;
}

.verify-otp-btn:hover:not(:disabled) {
  background: #5a1773 !important;
  transform: translateY(-2px);
  box-shadow: 0 4px 12px rgba(116, 43, 136, 0.3);
}

.verify-otp-btn:disabled {
  opacity: 0.6;
  cursor: not-allowed;
}

   

    </style>
</head>
<body class="">
     <?php
    include './header.php';
    ?>
    <link rel="stylesheet" href="./header_footer.css">
    

    <!-- Hero Section -->
    <section class="ad-banner position-relative">
        <img src="assets/image/car-banner.jpg" class="img-fluid w-100 h-100 object-fit-cover ad-bg" alt="Ad Banner">
        <div class="ad-text position-absolute border-start translate-middle-y text-black" style="max-width: 900px; font-size:30px;">
            <h1 class="fw-bold">"Your One–Stop Destination for Car Deals!"</h1>
        </div>
    </section>

    
    <section class="search-section container rounded-5 bg-light w-50  shadow float" style="height:60px; margin-bottom: 50px;">
       
            <div class="search-container">
                <!-- Buy Dropdown -->
                <button class="buy-dropdown">
                    Buy <span class="dropdown-arrow">▼</span>
                </button>
                
                <!-- Location Selector -->
                <select class="filter-dropdown">
                    <option value="">📍 Coimbatore</option>
                    <option value="chennai">📍 Chennai</option>
                    <option value="bangalore">📍 Bangalore</option>
                    <option value="mumbai">📍 Mumbai</option>
                    <option value="delhi">📍 Delhi</option>
                </select>
                
                <!-- Select Brand -->
                <select class="filter-dropdown">
                    <option value="">Select Brand</option>
                    <option value="toyota">Toyota</option>
                    <option value="honda">Honda</option>
                    <option value="maruti">Maruti Suzuki</option>
                    <option value="hyundai">Hyundai</option>
                    <option value="tata">Tata</option>
                    <option value="mahindra">Mahindra</option>
                    <option value="ford">Ford</option>
                    <option value="volkswagen">Volkswagen</option>
                </select>
                
                <!-- Select Model -->
                <select class="filter-dropdown">
                    <option value="">Select Model</option>
                    <option value="sedan">Sedan</option>
                    <option value="suv">SUV</option>
                    <option value="hatchback">Hatchback</option>
                    <option value="coupe">Coupe</option>
                    <option value="convertible">Convertible</option>
                    <option value="wagon">Wagon</option>
                </select>
                
                <!-- Search Button -->
                <button class="search-btn rounded-pill px-1 py-1 fw-bold ms-2">
                    Search
                </button>
            </div>
           </section>


    <!-- Overlay for OTP Verification Page -->
    <div class="overlay position-fixed top-0 end-0 w-100 h-100 bg-white shadow-lg overflow-auto p-4" id="otpOverlay" style="max-width: 500px; right: -100%; transition: right 0.5s ease-in-out; display: none;">
        <div class="otp-form text-center">
            <h2 class="mb-4">OTP Verification</h2>
            <input type="text" class="form-control mb-3 mx-auto" style="width: 80%;" placeholder="Enter the code" id="otpCode">
            <button class="btn btn-primary" style="background-color: #9C27B0;" onclick="showBuyVehiclePage()">Verify</button>
            <p class="mt-3"><a href="#" onclick="resendOTP()">Resend OTP</a> (00:30s)</p>
        </div>
    </div>

    <!-- Buy Vehicle Page -->
    <div class="buy-vehicle-page container-fluid py-4 text-center" id="buyVehiclePage" style="display: none;">
        <h2 class="mb-4">Buy Vehicle</h2>
        <p class="mb-4">Welcome to the Buy Vehicle page! Explore our latest car deals.</p>
        <div class="search-bar-container d-flex justify-content-center">
            <div class="search-bar d-flex align-items-center bg-white rounded-pill shadow-lg p-2 w-100" style="max-width: 1200px;">
                <div class="buy-dropdown d-flex align-items-center bg-success text-white px-4 py-3 rounded-start-pill position-relative">
                    <button class="buy-btn btn text-white fw-bold border-0">Buy ▼</button>
                    <div class="arrow ms-2"></div>
                </div>
                <div class="location-selector d-flex align-items-center border border-secondary rounded-pill p-3 bg-white ms-2">
                    <i class="bi bi-geo-alt me-2"></i>
                    <select class="form-select border-0 bg-transparent">
                        <option>Coimbatore</option>
                        <option>Chennai</option>
                        <option>Bangalore</option>
                    </select>
                </div>
                <div class="search-input d-flex align-items-center border border-secondary rounded-pill p-3 bg-white flex-grow-1 ms-2">
                    <i class="bi bi-search me-2"></i>
                    <input type="text" class="form-control border-0" placeholder='Search Cars by "Year"' />
                </div>
                <button class="search-btn btn btn-primary rounded-pill px-4 py-3 fw-bold ms-2" style="background-color: #7b1fa2;">Search</button>
            </div>
        </div>
    </div>

    <!-- Banner Section -->
    <div class="banner container-fluid mt-5 mx-auto overflow-hidden">
        <img src="assets/image/Hero.png" class="img-fluid w-100 h-auto" alt="Altroz Banner" />
    </div>

    <!-- Top Cars Section -->
    <div class="top-rated-section container mt-4 p-4 bg-white rounded-3 border shadow-sm">
        <h3 class="mb-4 fs-4">Top Rated Cars</h3>
        <div class="car-carousel d-flex flex-nowrap overflow-auto pb-3">
            <!-- Car Card 1 -->
            <div class="car-card bg-white rounded-3 shadow-sm flex-shrink-0 me-4" style="min-width: 350px; width: 25%;">
                <img src="assets/image/car1-image.png" class="img-fluid w-100 rounded-top" alt="Car 1">
                <div class="car-info p-3">
                    <h4 class="fs-6 mb-2">Hyundai Grand i10 Nios sportz</h4>
                    <div class="tags mb-2">
                        <span class="badge bg-light text-dark me-1">3k km</span>
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
                        <span class="badge bg-light text-dark me-1">3k km</span>
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
                <img src="assets/image/car3-image.jpg" class="img-fluid w-100 rounded-top" style="height:55%" alt="Car 3">
                <div class="car-info p-3">
                    <h4 class="fs-6 mb-2">Hyundai Grand i10 Nios sportz</h4>
                    <div class="tags mb-2">
                        <span class="badge bg-light text-dark me-1">3k km</span>
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

    <!-- Upcoming Cars Section -->
    <div class="upcoming-section container mt-4 p-4 bg-white rounded-3 border shadow-sm">
        <h3 class="mb-4 fs-4">Upcoming Cars</h3>
        <div class="upcar-carousel d-flex flex-nowrap overflow-auto pb-3">
            <!-- Car Card 1 -->
            <div class="upcar-card bg-white rounded-3 shadow-sm flex-shrink-0 me-4" style="min-width: 350px; width: 25%;">
                <img src="assets/image/upcoming-car1.png" class="img-fluid w-100 rounded-top" style="height:190px;" alt="Car 1">
                <div class="upcar-info p-3" style="height:95px;">
                    <h4 class="fs-6 fw-bold mb-1">Benz</h4>
                    <p class="text-muted mb-1">Mercedes-Benz EQS</p>
                    <p class="fw-bold fs-6">₹ 1,400/day</p>
                </div>
            </div>

            <!-- Car Card 2 -->
            <div class="upcar-card bg-white rounded-3 shadow-sm flex-shrink-0 me-4" style="min-width: 350px; width: 25%;">
                <img src="assets/image/upcoming-car2.png" class="img-fluid w-100 rounded-top" style="height:190px;" alt="Swift">
                <div class="upcar-info p-3" style="height:95px;">
                    <h4 class="fs-6 fw-bold mb-1">Maruthi Suzuki</h4>
                    <p class="text-muted mb-1">Swift</p>
                    <p class="fw-bold fs-6">₹ 1,400/day</p>
                </div>
            </div>

            <!-- Car Card 3 -->
            <div class="upcar-card bg-white rounded-3 shadow-sm flex-shrink-0" style="min-width: 350px; width: 25%;">
                <img src="assets/image/upcoming-car3.png" class="img-fluid w-100 rounded-top" style="height:190px;" alt="Hyundai Creta">
                <div class="upcar-info p-3" style="height:95px;">
                    <h4 class="fs-6 fw-bold mb-1">Hyundai Creta</h4>
                    <p class="text-muted mb-1">Manual, Petrol, 5 Seats</p>
                    <p class="fw-bold fs-6">₹ 1,700/day</p>
                </div>
            </div>
        </div>
    </div>

    <div class="car-action-section d-flex justify-content-center flex-wrap gap-5 my-5">
        <div class="card p-4 rounded-3 shadow-sm text-start buy-card" style="width: 500px; background-color: #e6f0fb;">
            <h3 class="fs-2 fw-bold text-dark mb-2">Are You Looking <br> For a Vehicle ?</h3>
            <p class="fs-5 text-dark mb-4">We are committed to providing our customers with exceptional service.</p>
            <div class="d-flex align-items-center justify-content-between action-row">
                <img src="assets/icon/electric-car.svg.png" class="me-2" style="width:60px;" alt="electric car">
                <button class="buy-btn1 btn text-white px-4 py-2 rounded-3 border-0" style="background-color: #003366;">Buy a Vehicle</button>
            </div>
        </div>

        <div class="card p-4 rounded-3 shadow-sm text-start sell-card" style="width: 500px; background-color: #ffe6ee;">
            <h3 class="fs-2 fw-bold text-dark mb-2">Do You Want to <br> Sell a Vehicle ?</h3>
            <p class="fs-5 text-dark mb-4">We are committed to providing our customers with exceptional service.</p>
            <div class="d-flex align-items-center justify-content-between action-row">
                <img src="assets/icon/electric-car2.svg.png" class="me-2" style="width:55px;" alt="electric car 2">
                <button class="sell-btn btn text-white px-4 py-2 rounded-3 border-0" style="background-color: #5c2b00;">Sell a Vehicle</button>
            </div>
        </div>
    </div>

    <div class="why-true-motors text-center mt-5">
        <h2 class="fs-1 fw-bold">Why True Motors</h2>
        <p class="fs-3 mt-2">True Motors offers high quality vehicles with peace of mind guaranteed</p>
    </div>

    <div class="features-container d-flex justify-content-around align-items-center bg-white my-4 mx-auto p-4 rounded-4 shadow-lg flex-wrap" style="max-width: 1400px;">
        <div class="feature-card d-flex flex-column align-items-center m-3" style="width: 170px;">
            <img src="assets/image/1year_warranty.png" class="img-fluid rounded-3 shadow-sm" style="height: 130px; object-fit: cover;" alt="1 Year Warranty">
            <p class="mt-3 fw-bold text-purple text-center" style="color: #5c1f9f;">1 Year warranty</p>
        </div>
        <div class="feature-card d-flex flex-column align-items-center m-3" style="width: 170px;">
            <img src="assets/image/easy Emi.png" class="img-fluid rounded-3 shadow-sm" style="height: 130px; object-fit: cover;" alt="Easy EMI Option">
            <p class="mt-3 fw-bold text-purple text-center" style="color: #5c1f9f;">Easy EMI Option</p>
        </div>
        <div class="feature-card d-flex flex-column align-items-center m-3" style="width: 170px;">
            <img src="assets/image/take_test_drive.png" class="img-fluid rounded-3 shadow-sm" style="height: 130px; object-fit: cover;" alt="Take Test Drive">
            <p class="mt-3 fw-bold text-purple text-center" style="color: #5c1f9f;">Take test<br>drive</p>
        </div>
        <div class="feature-card d-flex flex-column align-items-center m-3" style="width: 170px;">
            <img src="assets/image/sell_vech.png" class="img-fluid rounded-3 shadow-sm" style="height: 130px; object-fit: cover;" alt="Sell Vehicle">
            <p class="mt-3 fw-bold text-purple text-center" style="color: #5c1f9f;">Sell vehicle<br>stress free</p>
        </div>
        <div class="feature-card d-flex flex-column align-items-center m-3" style="width: 170px;">
            <img src="assets/image/buy-used_vech.png" class="img-fluid rounded-3 shadow-sm" style="height: 130px; object-fit: cover;" alt="Buy Used Vehicle">
            <p class="mt-3 fw-bold text-purple text-center" style="color: #5c1f9f;">Buy used<br>vehicle</p>
        </div>
    </div>

    <div class="stats-container bg-light-purple p-4 my-5 mx-auto rounded-4 d-flex justify-content-around align-items-center flex-wrap" style="background-color: #f2e6f7; max-width: 1400px;">
        <div class="stat-box text-center m-2" style="min-width: 100px;">
            <h2 class="fs-1 fw-bold text-dark mb-0">836k</h2>
            <p class="fs-6 mt-2 fw-bold text-dark text-uppercase letter-spacing-1">CARS FOR SALE</p>
        </div>
        <div class="stat-box text-center m-2" style="min-width: 100px;">
            <h2 class="fs-1 fw-bold text-dark mb-0">738k</h2>
            <p class="fs-6 mt-2 fw-bold text-dark text-uppercase letter-spacing-1">DEALER REVIEWS</p>
        </div>
        <div class="stat-box text-center m-2" style="min-width: 100px;">
            <h2 class="fs-1 fw-bold text-dark mb-0">100k</h2>
            <p class="fs-6 mt-2 fw-bold text-dark text-uppercase letter-spacing-1">VISITORS PER DAY</p>
        </div>
        <div class="stat-box text-center m-2" style="min-width: 100px;">
            <h2 class="fs-1 fw-bold text-dark mb-0">238k</h2>
            <p class="fs-6 mt-2 fw-bold text-dark text-uppercase letter-spacing-1">VERIFIED DEALERS</p>
        </div>
    </div>

    <section class="why-choose-us">
        <h2>Why Choose Us?</h2>
        <div class="features-row">
            <div class="feature-item">
                <div class="feature-icon">
                    <img src=".\assets\icon\f1.png" alt="Special Financing Offers">
                </div>
                <h3>Special Financing Offers</h3>
                <p>Our stress-free finance department that can find financial solutions to save you money.</p>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <img src="assets/icon/f2.png" alt="Trusted Car Dealership">
                </div>
                <h3>Trusted Car Dealership</h3>
                <p>Our stress-free finance department that can find financial solutions to save you money.</p>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <img src="assets/icon/f3.png" alt="Transparent Pricing">
                </div>
                <h3>Transparent Pricing</h3>
                <p>Our stress-free finance department that can find financial solutions to save you money.</p>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <img src="assets/icon/f4.png" alt="Expert Car Service">
                </div>
                <h3>Expert Car Service</h3>
                <p>Our stress-free finance department that can find financial solutions to save you money.</p>
            </div>
        </div>
    </section>

    <div class="compare-section container border border-secondary rounded-3 p-4 my-5 position-relative" style="border-style:groove;">
        <h2 class="mb-4">Compare</h2>
        <div class="compare-wrapper d-flex flex-nowrap overflow-auto pb-3 position-relative">
            <!-- Compare Card 1 -->
            <div class="compare-card bg-white rounded-3 shadow-lg flex-shrink-0 me-4" style="width: 400px;">
                <div class="car-images d-flex position-relative" style="height: 160px;">
                    <img src="assets/image/car5-image.png" class="img-fluid w-50 h-100 object-fit-cover car-img left-img" alt="Maruti Swift" />
                    <div class="compare-icon position-absolute top-50 start-50 translate-middle bg-purple text-white rounded-circle p-2 fs-5 z-1" style="background-color: #8f4de9;">↔</div>
                    <img src="assets/image/car1-image.png" class="img-fluid w-50 h-100 object-fit-cover car-img right-img" alt="Hyundai i10" />
                </div>
                <div class="car-info d-flex justify-content-between p-3">
                    <div class="car-details w-50">
                        <h3 class="fs-6 fw-bold mb-1">Maruti Suzuki</h3>
                        <p class="fs-6 mb-1">Swift</p>
                        <p class="fw-bold fs-5 mb-1">₹ 6.36 Lakh</p>
                        <p class="fs-6 mb-1">Petrol</p>
                        <p class="fs-6 text-muted note">Ex Showroom Price</p>
                    </div>
                    <div class="car-details w-50">
                        <h3 class="fs-6 fw-bold mb-1">Hyundai</h3>
                        <p class="fs-6 mb-1">i10 Nios Sportz 1.2</p>
                        <p class="fw-bold fs-5 mb-1">₹ 8.49 Lakh</p>
                        <p class="fs-6 mb-1">Petrol</p>
                        <p class="fs-6 text-muted note">Ex Showroom Price</p>
                    </div>
                </div>
            </div>

            <!-- Compare Card 2 -->
            <div class="compare-card bg-white rounded-3 shadow-lg flex-shrink-0 me-4" style="width: 400px;">
                <div class="car-images d-flex position-relative" style="height: 160px;">
                    <img src="assets/image/car5-image.png" class="img-fluid w-50 h-100 object-fit-cover car-img left-img" alt="Maruti Swift" />
                    <div class="compare-icon position-absolute top-50 start-50 translate-middle bg-purple text-white rounded-circle p-2 fs-5 z-1" style="background-color: #8f4de9;">↔</div>
                    <img src="assets/image/car1-image.png" class="img-fluid w-50 h-100 object-fit-cover car-img right-img" alt="Hyundai i10" />
                </div>
                <div class="car-info d-flex justify-content-between p-3">
                    <div class="car-details w-50">
                        <h3 class="fs-6 fw-bold mb-1">Maruti Suzuki</h3>
                        <p class="fs-6 mb-1">Swift</p>
                        <p class="fw-bold fs-5 mb-1">₹ 6.36 Lakh</p>
                        <p class="fs-6 mb-1">Petrol</p>
                        <p class="fs-6 text-muted note">Ex Showroom Price</p>
                    </div>
                    <div class="car-details w-50">
                        <h3 class="fs-6 fw-bold mb-1">Hyundai</h3>
                        <p class="fs-6 mb-1">i10 Nios Sportz 1.2</p>
                        <p class="fw-bold fs-5 mb-1">₹ 8.49 Lakh</p>
                        <p class="fs-6 mb-1">Petrol</p>
                        <p class="fs-6 text-muted note">Ex Showroom Price</p>
                    </div>
                </div>
            </div>

            <!-- Compare Card 3 -->
            <div class="compare-card bg-white rounded-3 shadow-lg flex-shrink-0" style="width: 400px;">
                <div class="car-images d-flex position-relative" style="height: 160px;">
                    <img src="assets/image/car5-image.png" class="img-fluid w-50 h-100 object-fit-cover car-img left-img" alt="Maruti Swift" />
                    <div class="compare-icon position-absolute top-50 start-50 translate-middle bg-purple text-white rounded-circle p-2 fs-5 z-1" style="background-color: #8f4de9;">↔</div>
                    <img src="assets/image/car1-image.png" class="img-fluid w-50 h-100 object-fit-cover car-img right-img" alt="Hyundai i10" />
                </div>
                <div class="car-info d-flex justify-content-between p-3">
                    <div class="car-details w-50">
                        <h3 class="fs-6 fw-bold mb-1">Maruti Suzuki</h3>
                        <p class="fs-6 mb-1">Swift</p>
                        <p class="fw-bold fs-5 mb-1">₹ 6.36 Lakh</p>
                        <p class="fs-6 mb-1">Petrol</p>
                        <p class="fs-6 text-muted note">Ex Showroom Price</p>
                    </div>
                    <div class="car-details w-50">
                        <h3 class="fs-6 fw-bold mb-1">Hyundai</h3>
                        <p class="fs-6 mb-1">i10 Nios Sportz 1.2</p>
                        <p class="fw-bold fs-5 mb-1">₹ 8.49 Lakh</p>
                        <p class="fs-6 mb-1">Petrol</p>
                        <p class="fs-6 text-muted note">Ex Showroom Price</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-icon position-absolute top-50 end-0 translate-middle-y bg-white rounded-circle shadow-sm p-2 fs-5 cursor-pointer z-1">❯</div>
    </div>

    <div class="brands-section border border-secondary p-5 rounded-4 text-center mx-auto my-5" style="max-width: 1420px; border-style: groove;">
        <h2 class="fs-1 mb-4">Explore Popular Brands</h2>
        <div class="brands-grid d-grid gap-5 justify-content-center">
            <!-- Visible Brands -->
            <div class="brand p-1 rounded-3 transition-transform">
                <img src="assets/image/Mahindra.png" class="img-fluid" style="width:120px" alt="Mahindra">
            </div>
            <div class="brand p-1 rounded-3 transition-transform">
                <img src="assets/image/toyota.png" class="img-fluid" style="width:60px" alt="Toyota">
            </div>
            <div class="brand p-1 rounded-3 transition-transform">
                <img src="assets/image/Tata.png" class="img-fluid" style="width:120px;" alt="Tata">
            </div>
            <div class="brand p-1 rounded-3 transition-transform">
                <img src="assets/image/Hyundai (2).png" class="img-fluid" style="width:110px;" alt="Hyundai">
            </div>
            <div class="brand p-1 rounded-3 transition-transform">
                <img src="assets/image/Suzuki_logo.png" class="img-fluid" style="width:80px;" alt="Suzuki">
            </div>
            <div class="brand p-1 rounded-3 transition-transform">
                <img src="assets/image/Honda.png" class="img-fluid" style="width:120px;" alt="Honda">
            </div>
            <div class="brand p-1 rounded-3 transition-transform">
                <img src="assets/image/Ford.png" class="img-fluid" style="width:100px;" alt="Ford">
            </div>
            <div class="brand p-1 rounded-3 transition-transform">
                <img src="assets/image/Fiat.png" class="img-fluid" style="width:100px;" alt="Fiat">
            </div>
            <div class="brand p-1 rounded-3 transition-transform">
                <img src="assets/image/Nissan.png" class="img-fluid" style="width:65px;" alt="Nissan">
            </div>
            <div class="brand p-1 rounded-3 transition-transform">
                <img src="assets/image/Kia.png" class="img-fluid" style="width:90px; height:90px;" alt="Kia">
            </div>

            <!-- Hidden Brands (Initially Hidden) -->
            <div class="brand hidden p-1 rounded-3 transition-transform">
                <img src="assets/image/bmw-logo.png" class="img-fluid" alt="BMW">
            </div>
            <div class="brand hidden p-1 rounded-3 transition-transform">
                <img src="audi.png" class="img-fluid" alt="Audi">
            </div>
            <div class="brand hidden p-1 rounded-3 transition-transform">
                <img src="mercedes.png" class="img-fluid" alt="Mercedes">
            </div>
            <div class="brand hidden p-1 rounded-3 transition-transform">
                <img src="volkswagen.png" class="img-fluid" alt="Volkswagen">
            </div>
        </div>
        <p class="view-more text-purple fw-bold text-decoration-underline mt-3 cursor-pointer" onclick="toggleBrands()">View More Brands</p>
    </div>



<!-- Login Overlay -->
<div id="loginOverlay" class="overlay">
  <div class="login-panel">
    <span class="close">&times;</span>
    <?php include 'login.php'; ?>
  </div>
</div>

<!-- Signup Overlay -->
<div id="signupOverlay" class="overlay">
  <div class="login-panel">
    <span class="close" id="closeSignup">&times;</span>
    <div style="width: 100%; max-width: 100%; text-align: center;">
      <div class="logo">
        <img src="true motors logo.png" alt="True Motors Logo" style="width: 200px; margin-bottom: 20px;" />
      </div>

      <h2 style="text-align: left; margin: 10px 0 20px; font-weight: 500;">Sign Up</h2>

      <form id="signupForm">
        <input type="text" id="signupName" placeholder="Name" required style="display: block; width: 100%; padding: 12px; margin: 12px 0; border: 1.5px solid #ccc; border-radius: 8px; font-size: 15px; box-sizing: border-box;" />
        <input type="tel" id="signupMobile" placeholder="Mobile Number" required style="display: block; width: 100%; padding: 12px; margin: 12px 0; border: 1.5px solid #ccc; border-radius: 8px; font-size: 15px; box-sizing: border-box;" />
        <input type="email" id="signupEmail" placeholder="Email" required style="display: block; width: 100%; padding: 12px; margin: 12px 0; border: 1.5px solid #ccc; border-radius: 8px; font-size: 15px; box-sizing: border-box;" />
        <button type="submit" style="width: 100%; background-color: #6e2b87; color: #fff; padding: 14px; border: none; border-radius: 8px; font-weight: bold; font-size: 15px; cursor: pointer; margin-top: 10px;">GET STARTED</button>
      </form>

      <hr style="margin: 25px 0; border: none; border-top: 1px solid #ccc;"/>

      <p style="font-size: 13px; color: #333; font-weight: 600;">
        Already have an Account? <a href="javascript:void(0)" id="switchToLogin" style="color: #004aad; text-decoration: underline; margin: 0 5px;">Login</a><br/>
        <a href="#" style="color: #004aad; text-decoration: underline; margin: 0 5px; margin-top: 10px; display: inline-block;">T&C's</a> 
        <a href="#" style="color: #004aad; text-decoration: underline; margin: 0 5px;">Privacy policy</a>
      </p>
    </div>
  </div>
</div>


 <!-- OTP Verification Overlay -->
<div id="otpVerificationOverlay" class="overlay">
  <div class="login-panel">
    <span class="close" id="closeOtpVerification">&times;</span>
    <div class="otp-content" style="width: 100%; max-width: 100%; text-align: center; padding: 20px 0;">
      <div class="logo" style="margin-bottom: 2rem;">
        <img src="assets/image/True-motor-logo.png" alt="True Motors Logo" style="width: 200px; max-width: 100%;" />
      </div>

      <p class="message" style="font-size: 19px; text-align: left; margin-bottom: 1.5rem; font-weight: 500; color: #333; line-height: 1.4;">
        An OTP code has been sent to your mobile number
      </p>

      <label class="enter-label" style="display: block; text-align: left; font-size: 16px; margin-bottom: 1.5rem; color: #201c1cd5; font-weight: 500;">
        Enter the code
      </label>
      
      <div class="otp-inputs" style="display: flex; justify-content: center; gap: 15px; margin-bottom: 1.5rem;">
        <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]" autocomplete="off" 
               style="width: 50px; height: 50px; font-size: 20px; text-align: center; border: 1px solid #ccc; border-radius: 8px; background-color: #f8f9fa; font-weight: 600;">
        <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]" autocomplete="off"
               style="width: 50px; height: 50px; font-size: 20px; text-align: center; border: 1px solid #ccc; border-radius: 8px; background-color: #f8f9fa; font-weight: 600;">
        <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]" autocomplete="off"
               style="width: 50px; height: 50px; font-size: 20px; text-align: center; border: 1px solid #ccc; border-radius: 8px; background-color: #f8f9fa; font-weight: 600;">
        <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]" autocomplete="off"
               style="width: 50px; height: 50px; font-size: 20px; text-align: center; border: 1px solid #ccc; border-radius: 8px; background-color: #f8f9fa; font-weight: 600;">
      </div>

      <div class="error-message" id="otpErrorMessage" style="color: #dc3545; font-size: 14px; margin-top: 0.5rem; display: none; text-align: center;"></div>

      <div class="actions" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; font-size: 14px;">
        <a href="#" class="resend-otp" style="color: #0066ee; text-decoration: none; font-weight: 500;">Resend OTP</a>
        <span class="otp-timer" style="color: #666; font-weight: 500;">01:00</span>
      </div>

      <button class="verify-otp-btn" style="background: #742B88; color: #fff; padding: 14px 32px; border: none; border-radius: 10px; width: 100%; max-width: 300px; height: 50px; font-size: 16px; font-weight: 600; cursor: pointer; display: block; margin: 0 auto;">
        Verify
      </button>
    </div>
  </div>
</div>


    <!-- Bootstrap JS CDN (Bundle includes Popper) -->
    
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
<?php
            include './footer.php'
            ?>
<!-- jQuery CDN (required for your existing $(document).ready and other jQuery usage) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap JS Bundle (should be at the end of body) -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./header_footer.js"></script>




<script>
    //  function showLoginOverlay() {
    //         document.getElementById('loginOverlay').classList.add('show');
    //     }

        function showOTPOverlay() {
            document.getElementById('loginOverlay').classList.remove('show');
            document.getElementById('otpOverlay').classList.add('show');
        }

        function showBuyVehiclePage() {
            document.getElementById('otpOverlay').classList.remove('show');
            document.getElementById('buyVehiclePage').classList.add('show');
        }

        function resendOTP() {
            // Replaced alert with a custom message box or modal if this were a full Bootstrap app.
            // For now, keeping the original functionality as per the request to not change design.
            // In a real Bootstrap app, you'd use a Bootstrap modal for this.
            alert("OTP resent successfully!"); 
        }

        // Function to toggle brands visibility (from original script)
        function toggleBrands() {
            const hiddenBrands = document.querySelectorAll('.brands-grid .hidden');
            const viewMoreBtn = document.querySelector('.view-more');

            hiddenBrands.forEach(brand => {
                brand.classList.toggle('hidden');
            });

            if (viewMoreBtn.textContent === 'View More Brands') {
                viewMoreBtn.textContent = 'View Less Brands';
            } else {
                viewMoreBtn.textContent = 'View More Brands';
            }
        }


        document.addEventListener('DOMContentLoaded', function() {
            const buyBtn = document.querySelector('.buy-dropdown');
            const searchBtn = document.querySelector('.search-btn');
            const selectors = document.querySelectorAll('.filter-dropdown');
            
            // Buy button click effect
            buyBtn.addEventListener('click', function() {
                this.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 100);
            });
            
            // Search button functionality
            searchBtn.addEventListener('click', function() {
                const location = selectors[0].value;
                const brand = selectors[1].value;
                const model = selectors[2].value;
                
                // Animation effect
                this.style.transform = 'scale(0.98)';
                this.innerHTML = 'Searching...';
                
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                    this.innerHTML = 'Search';
                    
                    // Show results (demo)
                    alert(`Searching for:\nLocation: ${location || 'Coimbatore'}\nBrand: ${brand || 'Any'}\nModel: ${model || 'Any'}`);
                }, 800);
            });
            
            // Dropdown hover effects
            selectors.forEach(selector => {
                selector.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-1px)';
                });
                
                selector.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });


        // Login overlay
    
  const overlay = document.getElementById("loginOverlay");
  const loginBtn = document.getElementById("loginBtn");
  const closeBtn = document.querySelector(".close");

  // open
  loginBtn.onclick = function() {
    overlay.style.display = "block";
    document.body.classList.add("modal-open");
    setTimeout(() => overlay.classList.add("show"), 10);
  };

  // close
  closeBtn.onclick = function() {
    overlay.classList.remove("show");
    document.body.classList.remove("modal-open");
    setTimeout(() => overlay.style.display = "none", 500);
  };

  // close when clicking outside
  window.onclick = function(e) {
    if (e.target === overlay) {
      overlay.classList.remove("show");
      document.body.classList.remove("modal-open");
      setTimeout(() => overlay.style.display = "none", 500);
    }
  };


// signupovelray

// Signup Overlay functionality
const signupOverlay = document.getElementById("signupOverlay");
const closeSignupBtn = document.getElementById("closeSignup");
const switchToLoginLink = document.getElementById("switchToLogin");

// Function to open signup overlay (called from login.php)
function openSignupOverlay() {
  // Close login overlay first
  const loginOverlay = document.getElementById("loginOverlay");
  if (loginOverlay) {
    loginOverlay.classList.remove("show");
    setTimeout(() => {
      loginOverlay.style.display = "none";
    }, 500);
  }
  
  // Open signup overlay
  signupOverlay.style.display = "block";
  document.body.classList.add("modal-open");
  setTimeout(() => signupOverlay.classList.add("show"), 10);
}

// Close signup overlay
if (closeSignupBtn) {
  closeSignupBtn.onclick = function() {
    signupOverlay.classList.remove("show");
    document.body.classList.remove("modal-open");
    setTimeout(() => signupOverlay.style.display = "none", 500);
  };
}

// Switch from signup to login
if (switchToLoginLink) {
  switchToLoginLink.onclick = function(e) {
    e.preventDefault();
    // Close signup overlay
    signupOverlay.classList.remove("show");
    setTimeout(() => {
      signupOverlay.style.display = "none";
      // Open login overlay
      const loginOverlay = document.getElementById("loginOverlay");
      loginOverlay.style.display = "block";
      document.body.classList.add("modal-open");
      setTimeout(() => loginOverlay.classList.add("show"), 10);
    }, 500);
  };
}

// Close when clicking outside
window.addEventListener('click', function(e) {
  if (e.target === signupOverlay) {
    signupOverlay.classList.remove("show");
    document.body.classList.remove("modal-open");
    setTimeout(() => signupOverlay.style.display = "none", 500);
  }
});

// Handle signup form submission
document.getElementById('signupForm')?.addEventListener('submit', function(e) {
  e.preventDefault();
  
  const name = document.getElementById('signupName').value.trim();
  const mobile = document.getElementById('signupMobile').value.trim();
  const email = document.getElementById('signupEmail').value.trim();
  
  // Basic validation
  const mobileRegex = /^[6-9]\d{9}$/;
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
  if (!name) {
    alert('Please enter your name');
    return;
  }
  
  if (!mobileRegex.test(mobile)) {
    alert('Please enter a valid 10-digit mobile number');
    return;
  }
  
  if (!emailRegex.test(email)) {
    alert('Please enter a valid email address');
    return;
  }
  
  // Simulate form submission (replace with actual API call)
  alert('Signup successful! Please login.');
  
  // Close signup and open login
  signupOverlay.classList.remove("show");
  setTimeout(() => {
    signupOverlay.style.display = "none";
    const loginOverlay = document.getElementById("loginOverlay");
    loginOverlay.style.display = "block";
    setTimeout(() => loginOverlay.classList.add("show"), 10);
  }, 500);
});


//   OTp Verification overlay
const otpVerificationOverlay = document.getElementById("otpVerificationOverlay");
const closeOtpVerificationBtn = document.getElementById("closeOtpVerification");
const otpInputs = document.querySelectorAll('#otpVerificationOverlay .otp-inputs input');
const resendOtpLink = document.querySelector('.resend-otp');
const otpTimerSpan = document.querySelector('.otp-timer');
const verifyOtpBtn = document.querySelector('.verify-otp-btn');
const otpErrorMessage = document.getElementById('otpErrorMessage');

let otpCountdownTime = 60;
let otpTimer;

// Function to open OTP verification overlay (called from login form)
function openOtpVerificationOverlay() {
  // Close login overlay first
  const loginOverlay = document.getElementById("loginOverlay");
  if (loginOverlay) {
    loginOverlay.classList.remove("show");
    setTimeout(() => {
      loginOverlay.style.display = "none";
    }, 500);
  }
  
  // Open OTP verification overlay
  otpVerificationOverlay.style.display = "block";
  document.body.classList.add("modal-open");
  setTimeout(() => otpVerificationOverlay.classList.add("show"), 10);
  
  // Start timer and focus first input
  startOtpTimer();
  otpInputs[0].focus();
}

// Close OTP verification overlay
if (closeOtpVerificationBtn) {
  closeOtpVerificationBtn.onclick = function() {
    otpVerificationOverlay.classList.remove("show");
    document.body.classList.remove("modal-open");
    clearInterval(otpTimer);
    setTimeout(() => otpVerificationOverlay.style.display = "none", 500);
  };
}

// Close when clicking outside
window.addEventListener('click', function(e) {
  if (e.target === otpVerificationOverlay) {
    otpVerificationOverlay.classList.remove("show");
    document.body.classList.remove("modal-open");
    clearInterval(otpTimer);
    setTimeout(() => otpVerificationOverlay.style.display = "none", 500);
  }
});

// OTP Input handling
otpInputs.forEach((input, index) => {
  input.addEventListener('input', (e) => {
    input.value = input.value.replace(/[^0-9]/g, '');
    
    if (input.value) {
      input.classList.add('filled');
    } else {
      input.classList.remove('filled');
    }
    
    if (input.value.length === 1 && index < otpInputs.length - 1) {
      otpInputs[index + 1].focus();
    }
    
    otpErrorMessage.style.display = 'none';
  });

  input.addEventListener('keydown', (e) => {
    if (e.key === 'Backspace' && !input.value && index > 0) {
      otpInputs[index - 1].focus();
      otpInputs[index - 1].value = '';
      otpInputs[index - 1].classList.remove('filled');
    }
  });

  input.addEventListener('paste', (e) => {
    e.preventDefault();
    const pastedData = e.clipboardData.getData('text').replace(/[^0-9]/g, '');
    
    if (pastedData.length === 4) {
      otpInputs.forEach((inp, idx) => {
        inp.value = pastedData[idx] || '';
        if (inp.value) inp.classList.add('filled');
      });
      otpInputs[3].focus();
    }
  });
});

// Start OTP Timer
function startOtpTimer() {
  let secondsLeft = otpCountdownTime;
  resendOtpLink.classList.add('disabled');
  otpTimerSpan.textContent = '01:00';
  clearInterval(otpTimer);

  otpTimer = setInterval(() => {
    secondsLeft--;
    const min = Math.floor(secondsLeft / 60);
    const sec = secondsLeft % 60;
    otpTimerSpan.textContent = `0${min}:${sec < 10 ? '0' + sec : sec}`;

    if (secondsLeft <= 0) {
      clearInterval(otpTimer);
      otpTimerSpan.textContent = 'Expired';
      resendOtpLink.classList.remove('disabled');
    }
  }, 1000);
}

// Resend OTP
resendOtpLink.addEventListener('click', (e) => {
  e.preventDefault();
  
  if (resendOtpLink.classList.contains('disabled')) return;

  console.log("Resending OTP...");

  otpInputs.forEach(input => {
    input.value = '';
    input.classList.remove('filled');
  });
  otpInputs[0].focus();

  otpErrorMessage.style.display = 'none';
  clearInterval(otpTimer);
  startOtpTimer();

  const originalText = resendOtpLink.textContent;
  resendOtpLink.textContent = 'OTP Sent!';
  setTimeout(() => {
    resendOtpLink.textContent = originalText;
  }, 2000);
});

// Verify OTP
verifyOtpBtn.addEventListener('click', () => {
  const enteredOtp = Array.from(otpInputs).map(input => input.value).join('');
  
  if (enteredOtp.length < 4) {
    otpErrorMessage.textContent = 'Please enter the complete 4-digit OTP';
    otpErrorMessage.style.display = 'block';
    otpInputs[0].focus();
    return;
  }

  verifyOtpBtn.disabled = true;
  verifyOtpBtn.textContent = 'Verifying...';

  // Simulate verification
  setTimeout(() => {
    verifyOtpBtn.textContent = 'Verified!';
    verifyOtpBtn.style.backgroundColor = '#28a745';
    
    setTimeout(() => {
      alert('OTP verified successfully!');
      // Close overlay
      otpVerificationOverlay.classList.remove("show");
      document.body.classList.remove("modal-open");
      clearInterval(otpTimer);
      setTimeout(() => {
        otpVerificationOverlay.style.display = "none";
        verifyOtpBtn.disabled = false;
        verifyOtpBtn.textContent = 'Verify';
        verifyOtpBtn.style.backgroundColor = '#742B88';
      }, 500);
    }, 1000);
  }, 1500);
});

</script>

</body>
</html>










































































































