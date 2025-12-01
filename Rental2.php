<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental page 2</title>
    <link rel="stylesheet" href="./Header_footerstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <style>
        .body-rental2{
            margin-top: 170px !important;
            background: #f5f5f5ff;
            margin-left: -190px !important;
        }
        .car-icon {
            width: 20px;
            height: 20px;
        }
        
        .rental-header {
            background: #FFFDFD;
            width:1295px;
            height:131px;
            
        }
        
        .search-btn {
            background: #742B88;
            border: none;
            transition: all 0.2s ease;
        }
        
        .search-btn:hover {
            background: linear-gradient(135deg, #7c4daa, #6b3d99);
            transform: translateY(-1px);
        }
        
        .location-dot {
            width: 6px;
            height: 6px;
            background-color: #666;
            border-radius: 50%;
        }
        
        /* All Filters Header Styles */
        .all-filters-header {
            background: #fafafa;
            border-bottom: 1px solid #e5e5e5;
            padding: 15px 20px;
            font-weight: 600;
            color: #333;
        }
        
        .all-filters-header .filter-icon {
            color: #666;
            font-size: 16px;
            margin-right: 10px;
        }
        
        /* Main Layout Container */
        .main-layout {
            display: flex;
            gap: 30px;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Left Sidebar - Filters */
        .left-sidebar {
            flex: 0 0 350px;
            margin-left:130px;
            padding-right:12px;
        }
        
        .filters-container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: all 0.3s ease;
            width: 100%;
        }
        
        /* Right Sidebar - Content */
        .right-sidebar {
            flex: 1;
            min-width: 0; /* Prevent flex item from overflowing */
        }

        .card{
            height:277px !important;
        }
        .card-body{
            margin-top: -25px;
        }

        .car-details{
            margin-top: -15px;
        }

        .card-body {
            margin-bottom:-20px;
        }
        
        
        .filter-section {
            border-bottom: 1px solid #e5e5e5;
            background: white;
            overflow: hidden;
        }
        
        .filter-section:last-child {
            border-bottom: none;
        }
        
        .filter-title {
            background: #fafafa;
            border-bottom: 1px solid #e5e5e5;
            font-weight: 600;
            color: #333;
            padding: 15px 20px;
        }
        
        .filter-option input[type="checkbox"] {
            width: 18px;
            height: 18px;
            border: 2px solid #d1d5db;
            border-radius: 3px;
            appearance: none;
            cursor: pointer;
            position: relative;
            background: white;
            transition: all 0.2s;
        }
        
        .filter-option input[type="checkbox"]:checked {
            background-color: #742B88;
            border-color: #742B88;
        }
        
        .filter-option input[type="checkbox"]:checked::after {
            content: '✓';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 12px;
            font-weight: bold;
        }
        
        .filter-option label {
            cursor: pointer;
            user-select: none;
            color: #555;
            font-weight: 400;
        }
            
        .rating-circle {
            background: #28a745;
            color: white;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: bold;
        }
        
        .price-amount {
            font-weight: normal;
            color: #003399;
        
        }
        
        .car-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        
        .calendar-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            padding: 20px;
            z-index: 1000;
            display: none;
            width: 300px;
        }
        
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 999;
            display: none;
        }
        
        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
            margin-bottom: 15px;
        }
        
        .day-header {
            text-align: center;
            font-weight: bold;
            padding: 5px;
            font-size: 12px;
            color: #666;
        }
        
        .day {
            text-align: center;
            padding: 8px;
            cursor: pointer;
            border-radius: 5px;
        }
        
        .day:hover:not(.disabled) {
            background: #e0e0e0;
        }
        
        .day.disabled {
            color: #ccc;
            cursor: not-allowed;
        }
        
        .day.selected {
            background: #8b5a96;
            color: white;
        }
        
        .nav-btn {
            background: #f0f0f0;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .nav-btn:hover {
            background: #ddd;
        }
        
        .filter-value {
            background: #742B88;
            color: white;
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 500;
        }

        /* Custom collapse animation */
        .collapse {
            transition: height 0.35s ease;
        }
        
        .collapsing {
            height: 0;
            overflow: hidden;
            transition: height 0.35s ease;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .left-sidebar {
                flex: 0 0 300px;
            }
        }

        @media (max-width: 992px) {
            .main-layout {
                flex-direction: column;
            }
            
            .left-sidebar {
                flex: none;
                position: relative;
                top: auto;
                min-height: auto;
            }
            
            .filters-container {
                max-height: none;
            }
        }


      /* Updated CSS for positioning the Our Offerings section */

.offerings-area {
    padding: 20px 20px;
    background-color: #f8f9fa;
    max-width: 1320px;
    margin: 32px 0 35px 200px; /* Adjust margin-left value as needed */
    border-radius: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Center the container within the offerings area */
.offerings-area .container {
    width: 100%;
    max-width: 1200px; /* Control the maximum width */
    margin: 0 auto; /* Center the container */
}

/* Center the text content in the header section */
.offerings-area .left-content {
    text-align: center; /* Center align the text */
    margin-bottom: 20px;
}

.offerings-area .right-content {
    text-align: center; /* Center align the description */
    margin-bottom: 30px;
}

/* Ensure the row is centered */
.offerings-area .row {
    justify-content: center; /* Center the columns */
    margin: 0 auto;
}

/* Center the offering items */
.offering-item {
    background: white;
    border: 2px solid #A4A4A4;
    border-radius: 15px;
    padding: 40px 25px;
    text-align: center;
    height: 100%;
    transition: all 0.3s ease;
    cursor: pointer;
    margin: 0 auto 30px auto; /* Center the item and add bottom margin */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

/* Center the offering symbol */
.offering-symbol {
    width: 96px;
    height: 96px;
    margin: 0 auto 25px auto; /* Center horizontally */
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f8f9fa;
    border-radius: 50%;
    position: relative;
}

.symbol{
    width:70px;
    height:70px;
}

/* Responsive adjustments for better centering */
@media (min-width: 1200px) {
    .offerings-area {
        margin: 32px auto 35px auto; /* Ensure centering on large screens */
        padding: 80px 40px;
    }
    
    /* Keep text left-aligned on desktop for better readability */
    .offerings-area .left-content,
    .offerings-area .right-content {
        text-align: left;
    }
    
    .offering-item {
        text-align: left; /* Left align content on desktop */
        margin-bottom: 0;
    }
    
    .offering-symbol {
        margin-right: auto;
        margin-left: 0;
    }
}

@media (max-width: 1199px) {
    .offerings-area {
        margin: 32px auto 35px auto; /* Center on all screen sizes */
    }
}

@media (max-width: 991px) {
    .offerings-area {
        margin: 32px auto 35px auto;
        text-align: center;
    }
    
    .offerings-area .container {
        padding: 0 15px;
    }
}

@media (max-width: 767px) {
    .offerings-area {
        margin: 20px auto 25px auto;
        padding: 40px 20px;
    }
}

@media (max-width: 575px) {
    .offerings-area {
        margin: 15px auto 20px auto;
        padding: 30px 15px;
    }
}

      /* Similar cars */
      .main-container {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            /* margin-right: -50px; */
            /* margin: 20px; */
            /* max-width: 1800px; */
        }

        .page-title {
            font-size: 32px;
            font-weight: 700;
            color: #2c3e50;
            text-align: center;
            margin: 30px 0;
        }

        /* .card-row{
            gap:20px;
        } */

        .car-card1 {
            background: white;
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 20px;
            position: relative;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
            margin-bottom: 30px;
            height: 100%;
        }

        .car-card1:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .car-badge {
            position: absolute;
            top: 10px;
            left: 15px;
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            border-radius: 50% 50% 50% 0;
            z-index: 3;
        }

        .heart-icon {
            position: absolute;
            top: 15px;
            right: 15px;
            color: #e91e63;
            font-size: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .heart-icon:hover {
            color: #ad1457;
            transform: scale(1.2);
        }

        .car-image {
            width: 100%;
            height: 230px;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            /* margin: 15px 0 20px 0; */
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .car-illustration {
            border-radius: 6px;
            position: relative;
            transition: transform 0.3s ease;
        }

        .car-card1:hover .car-illustration {
            transform: scale(1.05);
        }

        .car-title {
            font-weight: 600;
            font-size: 16px;
            color: #2c3e50;
            margin-bottom: 12px;
            line-height: 1.4;
        }

        .car-details {
            font-size: 13px;
            color: #6c757d;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .car-price {
            font-size: 20px;
            font-weight: 700;
            color: #27ae60;
            margin-bottom: 12px;
        }

        .car-rating {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 12px;
        }

        .stars {
            color: #f39c12;
            font-size: 16px;
            font-weight: bold;
            letter-spacing: 2px;
            text-shadow: 0 1px 2px rgba(0,0,0,0.1);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .stars:hover {
            transform: scale(1.1);
        }

        .star-individual {
            display: inline-block;
            transition: all 0.2s ease;
        }

        .star-individual:hover {
            color: #e67e22;
            transform: scale(1.2);
        }

        .star-individual.filled {
            color: #f39c12;
        }

        .star-individual.empty {
            color: #bdc3c7;
        }

        .star-individual.hover-highlight {
            color: #e67e22;
        }

        .rating-number {
            font-size: 12px;
            color: #6c757d;
            font-weight: 500;
        }

        .emi-info {
            font-size: 12px;
            color: #6c757d;
            margin-bottom: 12px;
            padding: 6px 12px;
            background: #f8f9fa;
            border-radius: 20px;
            display: inline-block;
        }

        .location {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 12px;
            color: #6c757d;
            margin-bottom: 20px;
        }

        .location-icon {
            color: #e91e63;
        }

        .view-details {
            /* width: 100%; */
            /* padding: 12px 4px 12px 4px; */
            /* background: linear-gradient(135deg, #667eea, #764ba2); */
            color:#742B88;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            text-align: center;
            display: block;
            transition: all 0.3s ease;
        }

        .view-details:hover {
            /* background: linear-gradient(135deg, #5a67d8, #6b46c1); */
            color: black;
            text-decoration: none;
            transform: translateY(-2px);
        }

        /* FAQ Section */

        .faq-section {
    margin: 50px 0 30px 0;
}

.faq-title {
    font-size: 24px;
    font-weight: 600;
    color: #2c3e50;
    text-align: center;
    margin-bottom: 40px;
}

.faq-item {
    border: 2px solid #e9ecef;
    border-radius: 12px;
    margin-bottom: 20px;
    background: white;
    overflow: hidden;
    transition: all 0.3s ease;
}

.faq-item:hover {
    border-color: #667eea;
}

.faq-question {
    padding: 25px;
    font-size: 16px;
    color: #2c3e50;
    cursor: pointer;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-weight: 500;
    transition: all 0.3s ease;
}

.faq-question:hover {
    background: linear-gradient(135deg, #f8f9ff, #f0f4ff);
}

/* Updated dropdown arrow styles */
.faq-arrow {
    width: 0;
    height: 0;
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
    border-top: 10px solid #667eea;
    transition: transform 0.3s ease;
    flex-shrink: 0;
    margin-left: 15px;
}

.faq-arrow.rotated {
    transform: rotate(180deg);
}

/* Alternative: If you prefer a chevron-style arrow using Font Awesome */
.faq-chevron {
    font-size: 16px;
    color: #667eea;
    transition: transform 0.3s ease;
    flex-shrink: 0;
    margin-left: 15px;
}

.faq-chevron.rotated {
    transform: rotate(180deg);
}

.faq-answer {
    padding: 0 25px;
    background: #f8f9fa;
    border-top: 1px solid #e9ecef;
    max-height: 0;
    overflow: hidden;
    transition: all 0.4s ease;
}

.faq-answer.show {
    max-height: 200px;
    padding: 20px 25px;
}

.faq-answer p {
    color: #6c757d;
    font-size: 14px;
    line-height: 1.6;
    margin: 0;
}

/* Mobile responsive adjustments */
@media (max-width: 768px) {
    .faq-question {
        padding: 15px;
        font-size: 14px;
    }
    
    .faq-arrow {
        border-left-width: 6px;
        border-right-width: 6px;
        border-top-width: 8px;
    }
    
    .faq-answer {
        padding: 15px 15px 0 15px;
    }
    
    .faq-answer.show {
        padding: 15px;
    }
    
    .faq-answer p {
        font-size: 13px;
    }
}

        /* Mobile Responsivesness */

        /* Mobile Responsive CSS - Add these styles to your existing CSS */

/* Base mobile adjustments */
@media (max-width: 768px) {
    body-rental2 {
        margin-top: 120px !important;
        margin-left: 0 !important;
        padding: 0 10px;
    }
    
    /* Header adjustments */
    .rental-header {
        width: 100% !important;
        height: auto !important;
        margin: 0 10px;
    }
    
    /* Search form mobile layout */
    .rental-header .row.g-0 {
        flex-direction: column;
    }
    
    .rental-header .col-md-3 {
        width: 100% !important;
        border-bottom: 1px solid #e5e5e5 !important;
        border-right: none !important;
    }
    
    .rental-header .col-md-3:last-child {
        border-bottom: none !important;
    }
    
    .rental-header .p-3 {
        padding: 15px !important;
    }
    
    .search-btn {
        width: 100% !important;
        height: 45px !important;
        margin: 0 !important;
    }
    
    /* Main layout mobile */
    .main-layout {
        flex-direction: column;
        padding: 0 5px;
        gap: 20px;
    }
    
    /* Left sidebar mobile */
    .left-sidebar {
        flex: none;
        margin-left: 0 !important;
        padding-right: 0 !important;
        order: 2; /* Move filters below content */
    }
    
    .filters-container {
        margin-bottom: 20px;
    }
    
    .filter-title {
        font-size: 16px;
        padding: 12px 15px;
    }
    
    .filter-section .p-3 {
        padding: 15px !important;
    }
    
    .filter-option {
        margin-bottom: 10px;
    }
    
    /* Right sidebar mobile */
    .right-sidebar {
        order: 1; /* Show content first */
        padding: 0 5px;
    }
    
    /* Cars grid mobile */
    .right-sidebar .row.g-3 {
        margin: 0;
    }
    
    .right-sidebar .col-lg-6 {
        padding: 0 5px;
        margin-bottom: 15px;
    }
    
    /* Card mobile adjustments */
    .card {
        height: auto !important;
        margin: 0 5px 15px 5px;
    }
    
    .car-image {
        height: 150px !important;
    }
    
    .card-body {
        padding: 12px !important;
        margin-top: -15px !important;
    }
    
    .card-title {
        font-size: 14px;
        margin-bottom: 5px;
    }
    
    .card-text {
        font-size: 12px;
    }
    
    .car-details {
        margin-top: -10px !important;
        font-size: 11px;
    }
    
    .price-amount {
        font-size: 14px;
    }
    
    .rating-circle {
        width: 20px;
        height: 20px;
        font-size: 10px;
    }
}

/* Extra small mobile devices */
@media (max-width: 576px) {
    body {
        margin-top: 100px !important;
        padding: 0 5px;
    }
    
    /* Header extra small mobile */
    .rental-header {
        margin: 0 5px;
        padding: 10px !important;
    }
    
    .rental-header .p-3 {
        padding: 10px !important;
    }
    
    .form-label {
        font-size: 12px;
    }
    
    .form-control {
        font-size: 12px;
        padding: 8px;
    }
    
    /* Main content adjustments */
    .right-sidebar h2 {
        font-size: 18px;
        text-align: center;
        margin-bottom: 15px;
    }
    
    /* Single column layout for cards */
    .right-sidebar .col-lg-6 {
        width: 100%;
        padding: 0 2px;
    }
    
    .card {
        margin: 0 0 12px 0;
    }
    
    .car-image {
        height: 120px !important;
    }
    
    .card-body {
        padding: 10px !important;
    }
    
    /* Filter adjustments for small screens */
    .filter-title {
        font-size: 14px;
        padding: 10px 12px;
    }
    
    .filter-section .p-3 {
        padding: 12px !important;
    }
    
    .filter-option {
        font-size: 13px;
    }
    
    .filter-option input[type="checkbox"] {
        width: 16px;
        height: 16px;
    }
    
    /* Calendar popup mobile */
    .calendar-popup {
        width: 90% !important;
        max-width: 300px;
        padding: 15px;
    }
    
    .calendar-grid {
        font-size: 12px;
    }
    
    .day {
        padding: 6px;
    }
}

/* Offerings section mobile responsive */
@media (max-width: 992px) {
    .offerings-area {
        margin: 20px 10px 25px 10px !important;
        padding: 30px 15px !important;
        text-align: center;
    }
    
    .offerings-area .container {
        padding: 0;
    }
    
    .offerings-area .left-content,
    .offerings-area .right-content {
        text-align: center !important;
        margin-bottom: 20px;
    }
    
    .area-heading {
        font-size: 18px;
    }
    
    .primary-title {
        font-size: 22px;
        line-height: 1.3;
    }
    
    .details-paragraph {
        font-size: 14px;
        line-height: 1.5;
    }
    
    .offering-item {
        margin-bottom: 20px;
        padding: 25px 15px;
        text-align: center !important;
    }
    
    .offering-symbol {
        margin: 0 auto 15px auto !important;
        width: 70px;
        height: 70px;
    }
    
    .symbol {
        width: 50px !important;
        height: 50px !important;
    }
    
    .offering-name {
        font-size: 18px;
        margin-bottom: 10px;
    }
    
    .offering-details {
        font-size: 13px;
        line-height: 1.4;
    }
}

@media (max-width: 768px) {
    .offerings-area {
        margin: 15px 5px 20px 5px !important;
        padding: 20px 10px !important;
    }
    
    .primary-title {
        font-size: 20px;
    }
    
    .details-paragraph {
        font-size: 13px;
    }
    
    .offering-item {
        padding: 20px 12px;
    }
    
    .offering-symbol {
        width: 60px;
        height: 60px;
    }
    
    .symbol {
        width: 40px !important;
        height: 40px !important;
    }
    
    .offering-name {
        font-size: 16px;
    }
    
    .offering-details {
        font-size: 12px;
    }
}

/* Similar cars section mobile responsive */
@media (max-width: 992px) {
    .main-container {
        margin: 10px;
        border-radius: 8px;
    }
    
    .page-title {
        font-size: 24px;
        margin: 20px 0;
    }
    
    .car-card1 {
        margin-bottom: 20px;
        padding: 15px;
    }
    
    .car-image {
        height: 180px !important;
    }
    
    .car-title {
        font-size: 15px;
    }
    
    .car-details {
        font-size: 12px;
    }
    
    .car-price {
        font-size: 18px;
    }
    
    .view-details {
        font-size: 13px;
        padding: 10px;
    }
}

@media (max-width: 768px) {
    .container-fluid .container {
        padding: 0 10px;
    }
    
    .page-title {
        font-size: 20px;
        margin: 15px 0;
    }
    
    .car-card1 {
        padding: 12px;
        margin-bottom: 15px;
    }
    
    .car-image {
        height: 150px !important;
        margin: 10px 0 15px 0;
    }
    
    .car-illustration img {
        width: 150px !important;
    }
    
    .car-title {
        font-size: 14px;
        margin-bottom: 8px;
    }
    
    .car-details {
        font-size: 11px;
        margin-bottom: 8px;
    }
    
    .car-price {
        font-size: 16px;
        margin-bottom: 8px;
    }
    
    .emi-info {
        font-size: 11px;
        margin-bottom: 8px;
    }
    
    .location {
        font-size: 11px;
        margin-bottom: 15px;
    }
    
    .view-details {
        font-size: 12px;
        padding: 8px;
    }
    
    /* FAQ section mobile */
    .faq-section {
        margin: 30px 0 20px 0;
    }
    
    .faq-title {
        font-size: 20px;
        margin-bottom: 25px;
    }
    
    #faq-container {
        margin-left: 0 !important;
        padding: 0 10px;
    }
    
    .faq-question {
        padding: 15px;
        font-size: 14px;
    }
    
    .faq-answer {
        padding: 15px 15px 0 15px;
    }
    
    .faq-answer.show {
        padding: 15px;
    }
    
    .faq-answer p {
        font-size: 13px;
    }
}

@media (max-width: 576px) {
    .page-title {
        font-size: 18px;
    }
    
    /* Single column for similar cars */
    .car-card1 {
        width: 100%;
        margin: 0 0 12px 0;
    }
    
    .car-image {
        height: 130px !important;
    }
    
    .car-illustration img {
        width: 120px !important;
    }
    
    .car-title {
        font-size: 13px;
    }
    
    .car-details {
        font-size: 10px;
    }
    
    .car-price {
        font-size: 15px;
    }
    
    .faq-title {
        font-size: 18px;
    }
    
    .faq-question {
        padding: 12px;
        font-size: 13px;
    }
    
    .faq-answer p {
        font-size: 12px;
    }
}

/* Modal mobile responsive */
@media (max-width: 768px) {
    .modal-dialog {
        margin: 10px;
        max-width: calc(100% - 20px);
    }
    
    .modal-body {
        padding: 15px;
    }
    
    .modal-body .row {
        flex-direction: column;
    }
    
    .modal-body .col-md-4,
    .modal-body .col-md-8 {
        width: 100%;
        text-align: center;
        margin-bottom: 20px;
    }
    
    .modal-body .col-md-8 {
        text-align: left;
    }
    
    .info-item {
        margin-bottom: 15px !important;
        font-size: 14px;
    }
    
    .modal-footer {
        padding: 10px 15px;
        flex-direction: column;
        gap: 10px;
    }
    
    .modal-footer .btn {
        width: 100%;
        margin: 0;
    }
}

/* Touch-friendly adjustments for mobile */
@media (max-width: 768px) {
    .filter-option {
        min-height: 44px;
        display: flex;
        align-items: center;
        padding: 5px 0;
    }
    
    .btn {
        min-height: 44px;
        font-size: 14px;
    }
    
    .search-btn {
        min-height: 48px;
    }
    
    .card {
        cursor: pointer;
        transition: transform 0.2s ease;
    }
    
    .card:active {
        transform: scale(0.98);
    }
    
    /* Larger tap targets */
    .heart-icon {
        font-size: 24px !important;
        padding: 8px;
        top: 10px;
        right: 10px;
    }
    
    .view-details {
        min-height: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .faq-question {
        min-height: 50px;
        display: flex;
        align-items: center;
    }
}

/* Landscape phone adjustments */
@media (max-width: 896px) and (orientation: landscape) {
    body {
        margin-top: 80px !important;
    }
    
    .rental-header {
        height: auto !important;
    }
    
    .card {
        height: auto !important;
    }
    
    .car-image {
        height: 120px !important;
    }
}

/* Hide/adjust elements for very small screens */
@media (max-width: 480px) {
    .car-details span:nth-child(2),
    .car-details span:nth-child(4) {
        display: none; /* Hide separator pipes on very small screens */
    }
    
    .car-details {
        display: flex;
        gap: 8px;
    }
    
    /* Simplify filter display */
    .all-filters-header {
        padding: 12px 15px;
        font-size: 14px;
    }
    
    .filter-value {
        font-size: 10px;
        padding: 2px 6px;
    }
}

/* Print styles (bonus) */
@media print {
    .left-sidebar,
    .rental-header,
    .offerings-area,
    .faq-section {
        display: none;
    }
    
    .main-layout {
        flex-direction: column;
    }
    
    .card {
        break-inside: avoid;
        margin-bottom: 20px;
    }


}

/* ========================================
   COMPREHENSIVE MOBILE RESPONSIVENESS
   FOR CAR RENTAL PAGE
   ======================================== */

/* ==========================================
   1. GLOBAL MOBILE ADJUSTMENTS
   ========================================== */

/* Tablets and below (992px) */
@media (max-width: 992px) {
    .body-rental2 {
        margin-top: 140px !important;
        margin-left: 0 !important;
        padding: 0 15px;
    }
    
    /* Ensure full width usage */
    .container-fluid {
        padding: 0 10px;
    }
}

/* Mobile devices (768px) */
@media (max-width: 768px) {
    .body-rental2 {
        margin-top: 120px !important;
        margin-left: 0 !important;
        padding: 0 10px;
    }
    
    body {
        overflow-x: hidden;
    }
}

/* Small mobile devices (576px) */
@media (max-width: 576px) {
    .body-rental2 {
        margin-top: 100px !important;
        padding: 0 5px;
    }
}

/* ==========================================
   2. HEADER SECTION RESPONSIVENESS
   ========================================== */

/* Tablets */
@media (max-width: 992px) {
    .rental-header {
        width: 100% !important;
        height: auto !important;
        margin: 0 10px 20px 10px;
        padding: 15px !important;
    }
}

/* Mobile */
@media (max-width: 768px) {
    .rental-header {
        width: 100% !important;
        height: auto !important;
        margin: 0 5px 15px 5px;
        padding: 10px !important;
        border-radius: 8px;
    }
    
    /* Stack search form vertically */
    .rental-header .row.g-0 {
        flex-direction: column;
    }
    
    .rental-header .col-md-3 {
        width: 100% !important;
        border-bottom: 1px solid #e5e5e5 !important;
        border-right: none !important;
    }
    
    .rental-header .col-md-3:last-child {
        border-bottom: none !important;
    }
    
    .rental-header .p-3 {
        padding: 12px 15px !important;
    }
    
    .form-label {
        font-size: 13px;
        margin-bottom: 5px;
    }
    
    .form-control {
        font-size: 13px;
        padding: 8px 10px;
        height: auto;
    }
    
    /* Search button full width */
    .search-btn {
        width: 100% !important;
        height: 48px !important;
        margin: 0 !important;
        border-radius: 8px !important;
        font-size: 15px;
        min-height: 48px;
    }
    
    /* Calendar icon adjustment */
    .fa-calendar {
        top: 38px !important;
        right: 15px !important;
    }
}

/* Small mobile */
@media (max-width: 576px) {
    .rental-header {
        margin: 0 0 12px 0;
        padding: 8px !important;
    }
    
    .rental-header .p-3 {
        padding: 10px 12px !important;
    }
    
    .form-label {
        font-size: 12px;
    }
    
    .form-control {
        font-size: 12px;
        padding: 6px 8px;
    }
    
    .search-btn {
        height: 44px !important;
        font-size: 14px;
    }
}

/* ==========================================
   3. MAIN LAYOUT RESPONSIVENESS
   ========================================== */

/* Tablets */
@media (max-width: 992px) {
    .main-layout {
        flex-direction: column;
        padding: 0 10px;
        gap: 25px;
    }
    
    .left-sidebar {
        flex: none;
        margin-left: 0 !important;
        padding-right: 0 !important;
        order: 2;
        width: 100%;
    }
    
    .right-sidebar {
        order: 1;
        padding: 0;
    }
}

/* Mobile */
@media (max-width: 768px) {
    .main-layout {
        padding: 0 5px;
        gap: 20px;
    }
    
    .left-sidebar {
        margin-bottom: 20px;
    }
}

/* Small mobile */
@media (max-width: 576px) {
    .main-layout {
        padding: 0 2px;
        gap: 15px;
    }
}

/* ==========================================
   4. FILTERS SECTION RESPONSIVENESS
   ========================================== */

/* Tablets */
@media (max-width: 992px) {
    .filters-container {
        margin-bottom: 20px;
        border-radius: 8px;
    }
    
    .all-filters-header {
        padding: 14px 18px;
        font-size: 15px;
    }
    
    .filter-title {
        font-size: 15px;
        padding: 13px 18px;
    }
    
    .filter-section .p-3 {
        padding: 15px 18px !important;
    }
}

/* Mobile */
@media (max-width: 768px) {
    .filters-container {
        border-radius: 6px;
    }
    
    .all-filters-header {
        padding: 12px 15px;
        font-size: 14px;
    }
    
    .all-filters-header img {
        width: 18px !important;
        height: 18px !important;
    }
    
    .filter-title {
        font-size: 14px;
        padding: 12px 15px;
    }
    
    .filter-section .p-3 {
        padding: 12px 15px !important;
    }
    
    .filter-option {
        margin-bottom: 12px;
        min-height: 44px;
        display: flex;
        align-items: center;
        padding: 5px 0;
    }
    
    .filter-option input[type="checkbox"] {
        width: 20px;
        height: 20px;
        flex-shrink: 0;
    }
    
    .filter-option label {
        font-size: 14px;
        margin-left: 8px;
    }
    
    /* Action buttons */
    .filters-container .p-3.border-top {
        padding: 15px !important;
    }
    
    .filters-container .btn {
        font-size: 14px;
        padding: 12px;
        min-height: 48px;
    }
    
    /* Selected filters display */
    #selectedFiltersContainer {
        margin-top: 15px;
        padding: 12px !important;
        border-radius: 6px;
    }
    
    .filter-value {
        font-size: 11px;
        padding: 3px 8px;
    }
}

/* Small mobile */
@media (max-width: 576px) {
    .all-filters-header {
        padding: 10px 12px;
        font-size: 13px;
    }
    
    .filter-title {
        font-size: 13px;
        padding: 10px 12px;
    }
    
    .filter-section .p-3 {
        padding: 10px 12px !important;
    }
    
    .filter-option {
        font-size: 13px;
    }
    
    .filter-option input[type="checkbox"] {
        width: 18px;
        height: 18px;
    }
    
    .filter-option label {
        font-size: 13px;
    }
    
    .filters-container .btn {
        font-size: 13px;
        padding: 10px;
        min-height: 44px;
    }
}

/* ==========================================
   5. CAR CARDS GRID RESPONSIVENESS
   ========================================== */

/* Tablets */
@media (max-width: 992px) {
    .right-sidebar h2 {
        font-size: 22px;
        margin-bottom: 20px;
        text-align: center;
    }
    
    .right-sidebar .row.g-3 {
        margin: 0 -5px;
    }
    
    .right-sidebar .col-lg-6 {
        padding: 0 5px;
        margin-bottom: 15px;
    }
}

/* Mobile - 2 columns */
@media (max-width: 768px) {
    .right-sidebar h2 {
        font-size: 20px;
        text-align: center;
        margin-bottom: 15px;
        padding: 0 10px;
    }
    
    .right-sidebar .row.g-3 {
        margin: 0 -3px;
    }
    
    .right-sidebar .col-lg-6 {
        width: 50%;
        padding: 0 3px;
        margin-bottom: 12px;
    }
    
    .card {
        height: auto !important;
        margin: 0 0 10px 0;
    }
    
    .car-image {
        height: 140px !important;
    }
    
    .card-body {
        padding: 10px !important;
        margin-top: -12px !important;
    }
    
    .card-title {
        font-size: 13px;
        margin-bottom: 4px;
        line-height: 1.3;
    }
    
    .card-text {
        font-size: 11px;
        margin-bottom: 6px;
    }
    
    .car-details {
        margin-top: -8px !important;
        font-size: 10px;
        gap: 4px;
    }
    
    .rating-circle {
        width: 18px;
        height: 18px;
        font-size: 9px;
    }
    
    .price-amount {
        font-size: 13px;
        font-weight: 600;
    }
    
    .car-details .text-muted {
        font-size: 9px;
    }
}

/* Small mobile - 1 column */
@media (max-width: 576px) {
    .right-sidebar h2 {
        font-size: 18px;
        margin-bottom: 12px;
    }
    
    .right-sidebar .col-lg-6 {
        width: 100%;
        padding: 0 2px;
        margin-bottom: 10px;
    }
    
    .card {
        margin: 0 0 8px 0;
    }
    
    .car-image {
        height: 130px !important;
    }
    
    .card-body {
        padding: 8px !important;
        margin-top: -10px !important;
    }
    
    .card-title {
        font-size: 12px;
    }
    
    .card-text {
        font-size: 10px;
    }
    
    .car-details {
        font-size: 9px;
        flex-wrap: wrap;
    }
    
    /* Hide separator pipes on very small screens */
    .car-details span:nth-child(2),
    .car-details span:nth-child(4) {
        display: none;
    }
    
    .price-amount {
        font-size: 12px;
    }
}

/* ==========================================
   6. CALENDAR POPUP RESPONSIVENESS
   ========================================== */

@media (max-width: 768px) {
    .calendar-popup {
        width: 90% !important;
        max-width: 320px;
        padding: 15px;
    }
    
    .calendar-grid {
        font-size: 13px;
        gap: 3px;
    }
    
    .day {
        padding: 8px 4px;
        font-size: 12px;
    }
    
    .day-header {
        font-size: 11px;
        padding: 4px;
    }
    
    .nav-btn {
        padding: 6px 10px;
        font-size: 14px;
    }
    
    #month-year {
        font-size: 14px;
    }
    
    .calendar-popup .btn {
        font-size: 13px;
        padding: 8px 15px;
    }
}

@media (max-width: 576px) {
    .calendar-popup {
        width: 95% !important;
        max-width: 300px;
        padding: 12px;
    }
    
    .calendar-grid {
        font-size: 12px;
    }
    
    .day {
        padding: 6px 2px;
        font-size: 11px;
    }
}

/* ==========================================
   7. OFFERINGS SECTION RESPONSIVENESS
   ========================================== */

@media (max-width: 1200px) {
    .offerings-area {
        margin: 30px 20px 30px 20px !important;
        padding: 60px 30px !important;
    }
}

@media (max-width: 992px) {
    .offerings-area {
        margin: 25px 15px 25px 15px !important;
        padding: 40px 20px !important;
        text-align: center;
    }
    
    .offerings-area .left-content,
    .offerings-area .right-content {
        text-align: center !important;
        margin-bottom: 20px;
    }
    
    .area-heading {
        font-size: 16px;
    }
    
    .primary-title {
        font-size: 22px;
        line-height: 1.4;
    }
    
    .details-paragraph {
        font-size: 14px;
        line-height: 1.6;
        padding: 0 10px;
    }
    
    .offering-item {
        margin-bottom: 20px;
        padding: 30px 20px;
        text-align: center !important;
    }
    
    .offering-symbol {
        margin: 0 auto 20px auto !important;
        width: 80px;
        height: 80px;
    }
    
    .symbol {
        width: 60px !important;
        height: 60px !important;
    }
    
    .offering-name {
        font-size: 18px;
        margin-bottom: 12px;
    }
    
    .offering-details {
        font-size: 13px;
        line-height: 1.5;
    }
}

@media (max-width: 768px) {
    .offerings-area {
        margin: 20px 10px 20px 10px !important;
        padding: 30px 15px !important;
        border-radius: 20px;
    }
    
    .area-heading {
        font-size: 14px;
    }
    
    .primary-title {
        font-size: 20px;
        line-height: 1.3;
    }
    
    .details-paragraph {
        font-size: 13px;
        line-height: 1.5;
    }
    
    .offering-item {
        padding: 25px 15px;
        margin-bottom: 15px;
    }
    
    .offering-symbol {
        width: 70px;
        height: 70px;
        margin-bottom: 15px;
    }
    
    .symbol {
        width: 50px !important;
        height: 50px !important;
    }
    
    .offering-name {
        font-size: 16px;
        margin-bottom: 10px;
    }
    
    .offering-details {
        font-size: 12px;
    }
}

@media (max-width: 576px) {
    .offerings-area {
        margin: 15px 5px 15px 5px !important;
        padding: 25px 12px !important;
        border-radius: 15px;
    }
    
    .area-heading {
        font-size: 13px;
    }
    
    .primary-title {
        font-size: 18px;
    }
    
    .details-paragraph {
        font-size: 12px;
        padding: 0 5px;
    }
    
    .offering-item {
        padding: 20px 12px;
        margin-bottom: 12px;
    }
    
    .offering-symbol {
        width: 60px;
        height: 60px;
    }
    
    .symbol {
        width: 45px !important;
        height: 45px !important;
    }
    
    .offering-name {
        font-size: 15px;
    }
    
    .offering-details {
        font-size: 11px;
    }
}

/* ==========================================
   8. SIMILAR CARS SECTION RESPONSIVENESS
   ========================================== */

@media (max-width: 992px) {
    .main-container {
        margin: 20px 10px;
        border-radius: 10px;
        padding: 15px;
    }
    
    .page-title {
        font-size: 26px;
        margin: 20px 0;
    }
    
    .car-card1 {
        margin-bottom: 20px;
        padding: 18px;
    }
    
    .car-image {
        height: 200px !important;
    }
}

@media (max-width: 768px) {
    .container-fluid .container {
        padding: 0 10px;
    }
    
    .page-title {
        font-size: 22px;
        margin: 15px 0;
    }
    
    .car-card1 {
        padding: 15px;
        margin-bottom: 15px;
    }
    
    .car-badge {
        width: 38px;
        height: 38px;
        top: 8px;
        left: 12px;
    }
    
    .heart-icon {
        font-size: 22px !important;
        padding: 8px;
        top: 12px;
        right: 12px;
    }
    
    .car-image {
        height: 170px !important;
        margin: 12px 0 15px 0;
    }
    
    .car-illustration img {
        width: 160px !important;
        max-width: 90%;
    }
    
    .car-title {
        font-size: 15px;
        margin-bottom: 8px;
    }
    
    .car-details {
        font-size: 12px;
        margin-bottom: 10px;
        gap: 6px;
    }
    
    .car-price {
        font-size: 18px;
        margin-bottom: 10px;
    }
    
    .car-rating {
        margin-bottom: 10px;
    }
    
    .stars {
        font-size: 15px;
    }
    
    .rating-number {
        font-size: 11px;
    }
    
    .emi-info {
        font-size: 11px;
        margin-bottom: 10px;
        padding: 5px 10px;
    }
    
    .location {
        font-size: 11px;
        margin-bottom: 15px;
    }
    
    .view-details {
        font-size: 13px;
        padding: 10px 8px;
        min-height: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
}

@media (max-width: 576px) {
    .page-title {
        font-size: 20px;
        margin: 12px 0;
    }
    
    .car-card1 {
        width: 100%;
        margin: 0 0 12px 0;
        padding: 12px;
    }
    
    .car-badge {
        width: 35px;
        height: 35px;
    }
    
    .car-image {
        height: 140px !important;
        margin: 10px 0 12px 0;
    }
    
    .car-illustration img {
        width: 130px !important;
    }
    
    .car-title {
        font-size: 14px;
        margin-bottom: 6px;
    }
    
    .car-details {
        font-size: 11px;
        margin-bottom: 8px;
    }
    
    .car-price {
        font-size: 16px;
        margin-bottom: 8px;
    }
    
    .stars {
        font-size: 14px;
    }
    
    .emi-info {
        font-size: 10px;
        padding: 4px 8px;
    }
    
    .location {
        font-size: 10px;
    }
    
    .view-details {
        font-size: 12px;
        padding: 8px 6px;
    }
}

/* ==========================================
   9. FAQ SECTION RESPONSIVENESS
   ========================================== */

@media (max-width: 992px) {
    .faq-section {
        margin: 40px 0 25px 0;
    }
    
    .faq-title {
        font-size: 22px;
        margin-bottom: 30px;
    }
    
    #faq-container {
        margin-left: 0 !important;
        padding: 0 15px;
    }
}

@media (max-width: 768px) {
    .faq-section {
        margin: 30px 0 20px 0;
    }
    
    .faq-title {
        font-size: 20px;
        margin-bottom: 25px;
    }
    
    #faq-container {
        padding: 0 10px;
    }
    
    .faq-item {
        margin-bottom: 15px;
        border-radius: 10px;
    }
    
    .faq-question {
        padding: 15px;
        font-size: 14px;
        min-height: 50px;
        display: flex;
        align-items: center;
    }
    
    .faq-arrow {
        border-left-width: 7px;
        border-right-width: 7px;
        border-top-width: 9px;
    }
    
    .faq-chevron {
        font-size: 15px;
    }
    
    .faq-answer {
        padding: 15px 15px 0 15px;
    }
    
    .faq-answer.show {
        max-height: 250px;
        padding: 15px;
    }
    
    .faq-answer p {
        font-size: 13px;
        line-height: 1.5;
    }
}

@media (max-width: 576px) {
    .faq-section {
        margin: 25px 0 15px 0;
    }
    
    .faq-title {
        font-size: 18px;
        margin-bottom: 20px;
    }
    
    #faq-container {
        padding: 0 5px;
    }
    
    .faq-item {
        margin-bottom: 12px;
        border-radius: 8px;
    }
    
    .faq-question {
        padding: 12px;
        font-size: 13px;
    }
    
    .faq-arrow {
        border-left-width: 6px;
        border-right-width: 6px;
        border-top-width: 8px;
    }
    
    .faq-chevron {
        font-size: 14px;
    }
    
    .faq-answer {
        padding: 12px 12px 0 12px;
    }
    
    .faq-answer.show {
        padding: 12px;
    }
    
    .faq-answer p {
        font-size: 12px;
        line-height: 1.4;
    }
}

/* ==========================================
   10. MODAL RESPONSIVENESS
   ========================================== */

@media (max-width: 768px) {
    .modal-dialog {
        margin: 10px;
        max-width: calc(100% - 20px);
    }
    
    .modal-header {
        padding: 15px;
    }
    
    .modal-title {
        font-size: 16px;
    }
    
    .modal-body {
        padding: 15px;
    }
    
    .modal-body .row {
        flex-direction: column;
    }
    
    .modal-body .col-md-4,
    .modal-body .col-md-8 {
        width: 100%;
        text-align: center;
        margin-bottom: 20px;
    }
    
    .modal-body .col-md-8 {
        text-align: left;
    }
    
    .seller-avatar i {
        font-size: 100px !important;
    }
    
    .info-item {
        margin-bottom: 15px !important;
        font-size: 14px;
    }
    
    .car-details-summary {
        padding: 15px !important;
    }
    
    .car-details-summary h5 {
        font-size: 16px;
    }
    
    .modal-footer {
        padding: 10px 15px;
        flex-direction: column;
        gap: 10px;
    }
    
    .modal-footer .btn {
        width: 100%;
        margin: 0;
        min-height: 44px;
    }
}

@media (max-width: 576px) {
    .modal-header {
        padding: 12px;
    }
    
    .modal-title {
        font-size: 15px;
    }
    
    .modal-body {
        padding: 12px;
    }
    
    .seller-avatar i {
        font-size: 80px !important;
    }
    
    .info-item {
        font-size: 13px;
    }
    
    .car-details-summary {
        padding: 12px !important;
    }
    
    .car-details-summary h5 {
        font-size: 15px;
    }
    
    .car-details-summary p {
        font-size: 12px;
    }
}

/* ==========================================
   11. TOUCH-FRIENDLY IMPROVEMENTS
   ========================================== */

@media (max-width: 768px) {
    /* Larger tap targets */
    .filter-option {
        min-height: 44px;
        padding: 8px 0;
    }
    
    .btn {
        min-height: 44px;
        font-size: 14px;
    }
    
    .search-btn {
        min-height: 48px;
    }
    
    /* Card interactions */
    .card {
        cursor: pointer;
        transition: transform 0.2s ease;
    }
    
    .card:active {
        transform: scale(0.98);
    }
    
    .car-card1:active {
        transform: scale(0.98) translateY(0);
    }
    
    /* Larger icons for touch */
    .heart-icon {
        padding: 10px;
        font-size: 24px !important;
    }
    
    .view-details {
        min-height: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 12px;
    }
    
    .faq-question {
        min-height: 50px;
    }
    
    /* Star rating touch targets */
    .star-individual {
        padding: 5px;
        margin: 0 2px;
    }
}

/* ==========================================
   12. LANDSCAPE ORIENTATION
   ========================================== */

@media (max-width: 896px) and (orientation: landscape) {
    .body-rental2 {
        margin-top: 80px !important;
    }
    
    .rental-header {
        height: auto !important;
    }
    
    .card {
        height: auto !important;
    }
    
    .car-image {
        height: 120px !important;
    }
    
    .offerings-area {
        padding: 30px 20px !important;
    }
}

/* ==========================================
   13. VERY SMALL SCREENS (< 400px)
   ========================================== */

@media (max-width: 400px) {
    .body-rental2 {
        margin-top: 90px !important;
        padding: 0 3px;
    }
    
    .rental-header {
        padding: 8px !important;
        margin: 0 0 10px 0;
    }
    
    .card-title {
        font-size: 11px;
    }
    
    .price-amount {
        font-size: 11px;
    }
    
    .car-details {
        font-size: 8px;
    }
    
    .primary-title {
        font-size: 16px;
    }
    
    .offering-name {
        font-size: 14px;
    }
    
    .page-title {
        font-size: 18px;
    }
}

/* ==========================================
   14. PRINT STYLES
   ========================================== */

@media print {
    .left-sidebar,
    .rental-header,
    .offerings-area,
    .faq-section,
    .heart-icon,
    .view-details,
    .search-btn {
        display: none;
    }
    
    .main-layout {
        flex-direction: column;
    }
    
    .card,
    .car-card1 {
        break-inside: avoid;
        margin-bottom: 20px;
        page-break-inside: avoid;
    }
    
    .body-rental2 {
        margin: 0 !important;
    }
}



    </style>
</head>
<body class="body-rental2">
     <?php
    include './header.php';
    ?>

    <!-- Rental Header -->
     <div class="">          
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="rental-header text-white rounded-3 p-3 mb-4">
                    <!-- Search Form -->
                    <div class="row g-0 bg-white rounded-3 overflow-hidden">
                        <div class="col-md-3 border-end">
                            <div class="p-3 position-relative bg-white">
                                <label class="form-label small text-black fw-bolder label1">Pickup Location</label>
                                <input type="text" class="form-control border-0 bg-transparent ps-4" value="Coimbatore" readonly>
                            </div>
                        </div>
                        
                        <div class="col-md-3 border-end">
                            <div class="p-3 position-relative bg-white">
                                <label class="form-label small text-black fw-bolder">Pickup</label>
                                <input type="text" class="form-control border-0 bg-transparent" id="pickup-date" value="Sat 5 July 2025" readonly>
                                <i class="fas fa-calendar position-absolute" style="top: 35px; right: 20px; cursor: pointer;"></i>
                            </div>
                        </div>
                        
                        <div class="col-md-3 border-end">
                            <div class="p-3 position-relative bg-white">
                                <label class="form-label small text-black fw-bolder">Return</label>
                                <input type="text" class="form-control border-0 bg-transparent" id="return-date" value="Sun 6 July 2025" readonly>
                                <i class="fas fa-calendar position-absolute" style="top: 35px; right: 20px; cursor: pointer;"></i>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="h-100 d-flex align-items-center bg-white">
                                <button class="btn search-btn text-white fw-semibold h-50 w-75 rounded-4 ms-4">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Calendar Popup -->
    <div class="overlay" id="overlay"></div>
    <div class="calendar-popup" id="calendar">
        <div class="d-flex justify-content-between align-items-center mb-3 ">
            <button class="nav-btn" id="prev-month">‹</button>
            <div class="fw-bold" id="month-year"></div>
            <button class="nav-btn" id="next-month">›</button>
        </div>
        <div class="calendar-grid" id="calendar-grid"></div>
        <div class="d-flex justify-content-end gap-2">
            <button class="btn btn-secondary" id="cancel-btn">Cancel</button>
            <button class="btn btn-primary" id="select-btn">Select</button>
        </div>
    </div>

    <!-- Main Layout with Flexbox -->
    <div class="main-layout">
        <!-- Left Sidebar - Filters -->
        <div class="left-sidebar">
            <div class="filters-container">
                <!-- All Filters Header -->
                <div class="all-filters-header align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="assets/icon/filter-icon.png" alt="filter-icon" style="width:20px; height:20px; ">
                        <span class="fw-medium align-items-center">All Filters</span>
                    </div>
                </div>
                
                <!-- Body Type Filter -->
                <div class="filter-section">
                    <div class="filter-title">Body Type</div>
                    <div class="p-3">
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="filter-option d-flex align-items-center gap-2" onclick="selectFilter('bodyType', 'SUV', 'suv')">
                                    <input type="checkbox" id="suv">
                                    <label for="suv" class="form-label mb-0">SUV</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="filter-option d-flex align-items-center gap-2" onclick="selectFilter('bodyType', 'Sedan', 'sedan')">
                                    <input type="checkbox" id="sedan">
                                    <label for="sedan" class="form-label mb-0">Sedan</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="filter-option d-flex align-items-center gap-2" onclick="selectFilter('bodyType', 'MUV', 'muv')">
                                    <input type="checkbox" id="muv">
                                    <label for="muv" class="form-label mb-0">MUV</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="filter-option d-flex align-items-center gap-2" onclick="selectFilter('bodyType', 'Hatchback', 'hatchback')">
                                    <input type="checkbox" id="hatchback">
                                    <label for="hatchback" class="form-label mb-0">Hatchback</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Fuel Type Filter -->
                <div class="filter-section">
                    <div class="filter-title">Fuel Type</div>
                    <div class="p-3">
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="filter-option d-flex align-items-center gap-2" onclick="selectFilter('fuelType', 'Diesel', 'diesel')">
                                    <input type="checkbox" id="diesel">
                                    <label for="diesel" class="form-label mb-0">Diesel</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="filter-option d-flex align-items-center gap-2" onclick="selectFilter('fuelType', 'Petrol', 'petrol')">
                                    <input type="checkbox" id="petrol">
                                    <label for="petrol" class="form-label mb-0">Petrol</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="filter-option d-flex align-items-center gap-2" onclick="selectFilter('fuelType', 'Electric', 'electric')">
                                    <input type="checkbox" id="electric">
                                    <label for="electric" class="form-label mb-0">Electric</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Transmission Type Filter -->
                <div class="filter-section">
                    <div class="filter-title">Transmission Type</div>
                    <div class="p-3">
                        <div class="d-flex flex-column gap-3">
                            <div class="filter-option d-flex align-items-center gap-2" onclick="selectFilter('transmission', 'Automatic', 'automatic')">
                                <input type="checkbox" id="automatic">
                                <label for="automatic" class="form-label mb-0">Automatic</label>
                            </div>
                            <div class="filter-option d-flex align-items-center gap-2" onclick="selectFilter('transmission', 'Manual', 'manual')">
                                <input type="checkbox" id="manual">
                                <label for="manual" class="form-label mb-0">Manual</label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Seating Capacity Filter -->
                <div class="filter-section">
                    <div class="filter-title">Seating Capacity</div>
                    <div class="p-3">
                        <div class="row g-3">
                            <div class="col-4">
                                <div class="filter-option d-flex align-items-center gap-2" onclick="selectFilter('seatingCapacity', '4', 'seat4')">
                                    <input type="checkbox" id="seat4">
                                    <label for="seat4" class="form-label mb-0">4</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="filter-option d-flex align-items-center gap-2" onclick="selectFilter('seatingCapacity', '5', 'seat5')">
                                    <input type="checkbox" id="seat5">
                                    <label for="seat5" class="form-label mb-0">5</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="filter-option d-flex align-items-center gap-2" onclick="selectFilter('seatingCapacity', '6', 'seat6')">
                                    <input type="checkbox" id="seat6">
                                    <label for="seat6" class="form-label mb-0">6</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="filter-option d-flex align-items-center gap-2" onclick="selectFilter('seatingCapacity', '7', 'seat7')">
                                    <input type="checkbox" id="seat7">
                                    <label for="seat7" class="form-label mb-0">7</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="filter-option d-flex align-items-center gap-2" onclick="selectFilter('seatingCapacity', '9', 'seat9')">
                                    <input type="checkbox" id="seat9">
                                    <label for="seat9" class="form-label mb-0">9</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Fuel Plan Filter -->
                <div class="filter-section">
                    <div class="filter-title">Fuel Plan</div>
                    <div class="p-3">
                        <div class="d-flex flex-column gap-3">
                            <div class="filter-option d-flex align-items-center gap-2" onclick="selectFilter('fuelPlan', 'With Fuel', 'withFuel')">
                                <input type="checkbox" id="withFuel">
                                <label for="withFuel" class="form-label mb-0">With Fuel</label>
                            </div>
                            <div class="filter-option d-flex align-items-center gap-2" onclick="selectFilter('fuelPlan', 'Without Fuel', 'withoutFuel')">
                                <input type="checkbox" id="withoutFuel">
                                <label for="withoutFuel" class="form-label mb-0">Without Fuel</label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="p-3 border-top">
                    <button class="btn  w-100 mb-2" style="background:#742B88; color:white;" id="applyBtn" onclick="applyFilters()" disabled>Apply Filters</button>
                    <button class="btn w-100" style="border:1px solid #742B88;" onclick="clearAllFilters()">Clear All Filters</button>
                </div>
            </div>

            <!-- Selected Filters Display -->
            <div class="bg-light rounded-3 p-3 mt-3" id="selectedFiltersContainer" style="display: none;">
                <h6 class="fw-semibold mb-2">Selected Filters:</h6>
                <div id="selectedFiltersDisplay">
                    <div class="text-muted small fst-italic text-center py-2">No filters selected</div>
                </div>
            </div>
        </div>

        <!-- Right Sidebar - Main Content -->
        <div class="right-sidebar">
            <div class="mb-4">
                <h2 class="h4">Cars available in Coimbatore</h2>
            </div>
            
            <!-- Cars Grid -->
            <div class="row g-3 mb-5">
                <div class="col-lg-6 col-lg-5" >
                    <div class="card">
                        <img src="assets/image/car1-image.png" class="card-img-top car-image" alt="Hyundai Grand i10 Nios sports">
                        <div class="card-body ">
                            <h5 class="card-title">Hyundai Grand</h5>
                            <p class="card-text text-muted small">i10 Nios sports</p>
                            <div class="d-flex justify-content-between align-items-center car-details">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="rating-circle">4</div>
                                    <span class="small text-muted">Comfortable</span>
                                </div>
                                <div class="text-end">
                                    <div class="price-amount">₹1400/day</div>
                                    <div class="small text-muted">4.5/5</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-lg-5">
                    <div class="card">
                        <img src="assets/image/car2-image.png" class="card-img-top car-image" alt="Hyundai Grand i10 Nios sports">
                        <div class="card-body">
                            <h5 class="card-title">Hyundai Grand</h5>
                            <p class="card-text text-muted small">i10 Nios sports</p>
                            <div class="d-flex justify-content-between align-items-center car-details">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="rating-circle">4</div>
                                    <span class="small text-muted">Comfortable</span>
                                </div>
                                <div class="text-end">
                                    <div class="price-amount">₹1400/day</div>
                                    <div class="small text-muted">4.5/5</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-lg-5">
                    <div class="card">
                        <img src="assets/image/car2-image.png" class=" car-image" alt="Hyundai Grand i10 Nios sports">
                        <div class="card-body">
                            <h5 class="card-title">Hyundai Grand</h5>
                            <p class="card-text text-muted small">i10 Nios sports</p>
                            <div class="d-flex justify-content-between align-items-center car-details">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="rating-circle">4</div>
                                    <span class="small text-muted">Comfortable</span>
                                </div>
                                <div class="text-end">
                                    <div class="price-amount">₹1400/day</div>
                                    <div class="small text-muted">4.5/5</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-lg-5">
                    <div class="card ">
                        <img src="assets/image/car3-image.png" class="card-img-top car-image" alt="Hyundai Grand i10 Nios sports">
                        <div class="card-body">
                            <h5 class="card-title">Hyundai Grand</h5>
                            <p class="card-text text-muted small">i10 Nios sports</p>
                            <div class="d-flex justify-content-between align-items-center car-details">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="rating-circle">4</div>
                                    <span class="small text-muted">Comfortable</span>
                                </div>
                                <div class="text-end">
                                    <div class="price-amount">₹1400/day</div>
                                    <div class="small text-muted">4.5/5</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-lg-5">
                    <div class="card ">
                        <img src="assets/image/car1-image.png" class="card-img-top car-image" alt="Hyundai Grand i10 Nios sports">
                        <div class="card-body">
                            <h5 class="card-title">Hyundai Grand</h5>
                            <p class="card-text text-muted small">i10 Nios sports</p>
                            <div class="d-flex justify-content-between align-items-center car-details">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="rating-circle">4</div>
                                    <span class="small text-muted">Comfortable</span>
                                </div>
                                <div class="text-end">
                                    <div class="price-amount">₹1400/day</div>
                                    <div class="small text-muted">4.5/5</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-lg-5">
                    <div class="card">
                        <img src="assets/image/car2-image.png" class="card-img-top car-image" alt="Hyundai Grand i10 Nios sports">
                        <div class="card-body">
                            <h5 class="card-title">Hyundai Grand</h5>
                            <p class="card-text text-muted small">i10 Nios sports</p>
                            <div class="d-flex justify-content-between align-items-center car-details">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="rating-circle">4</div>
                                    <span class="small text-muted">Comfortable</span>
                                </div>
                                <div class="text-end">
                                    <div class="price-amount">₹1400/day</div>
                                    <div class="small text-muted">4.5/5</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             </div>
    </div>
            
       
     <!-- our offerings card -->     
    <section class="offerings-area" style="margin-right:85px; padding:40px 0px 30px 5px;">         
        <div class="container ms-5">             
            <div class="row">                 
                <div class="col-lg-5 col-md-12">                     
                    <div class="left-content">                         
                        <h3 class="area-heading">Our Services</h3>                         
                        <h2 class="primary-title">Our Premier Services for<br>Your car rental needs</h2>                     
                    </div>                 
                </div>                 
                <div class="col-lg-7 col-md-12">                     
                    <div class="right-content">                         
                        <p class="details-paragraph">                             
                            Looking for a reliable vehicle for your next trip, daily commute, or <br>                             
                            special occasion? True Motors makes it easy to rent cars and bikes at <br>                             
                            the best rates — quickly and hassle-free.                         
                        </p>                     
                    </div>                 
                </div>             
            </div>                          
            <div class="row mt-5">                 
                <div class="col-lg-4 col-md-6 mb-4">                     
                    <div class="offering-item motion-item" data-offering="maintenance">                         
                        <div class="offering-symbol">                             
                            <img src="assets/image/rentalpg-ourservices-1.png " alt="Well-Maintained Car" class="symbol">                         
                        </div>                         
                        <h4 class="offering-name">Well-Maintained Car</h4>                         
                        <p class="offering-details">                             
                            Every car is inspected &<br>                             
                            maintained to perfection. Enjoy a<br>                             
                            worry-free ride.                         
                        </p>                     
                    </div>                 
                </div>                                  
                <div class="col-lg-4 col-md-6 mb-4">                     
                    <div class="offering-item motion-item" data-offering="payments">                         
                        <div class="offering-symbol">                             
                            <img src="assets/image/rentalpg-ourservices-2.png" alt="Secure Payments" class="symbol">                         
                        </div>                         
                        <h4 class="offering-name">Secure Payments</h4>                         
                        <p class="offering-details">                             
                            Pay safely with trusted gateways.<br>                             
                            Fast, encrypted & hassle-free<br>                             
                            transactions.                         
                        </p>                     
                    </div>                 
                </div>                                  
                <div class="col-lg-4 col-md-6 mb-4">                     
                    <div class="offering-item motion-item" data-offering="support">                         
                        <div class="offering-symbol">                             
                            <img src="assets/image/rentalpg-ourservices-3.png" alt="24/7 Support" class="symbol">                         
                        </div>                         
                        <h4 class="offering-name">24/7 Support</h4>                         
                        <p class="offering-details">                             
                            Ride worry-free with our nonstop<br>                             
                            support team.<br>                             
                            We've got your back, 24/7.                         
                        </p>                     
                    </div>                 
                </div>             
            </div>         
        </div>     
    </section>

  <!-- Similar cars & FAQ-->
   <div class="container-fluid">
        <!-- <div class="main-container"> -->
            <div class="container ">
                <h1 class="page-title">Similar Cars</h1>
                
                <div class="row card-row" id="cars-container">
                    <!-- Cars will be dynamically loaded here -->
                </div>

                <div class="faq-section">
                    <h2 class="faq-title">Frequently Asked Questions</h2>
                    <div id="faq-container" style="margin-left:90px;">
                        <!-- FAQ items will be dynamically loaded here -->
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>

    <!-- Seller Details Modal -->
    <div class="modal fade" id="sellerDetailsModal" tabindex="-1" aria-labelledby="sellerDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="sellerDetailsModalLabel">
                        <i class="fas fa-user-circle me-2"></i>Seller Details
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="seller-avatar mb-3">
                                <i class="fas fa-user-circle" style="font-size: 120px; color: #6c757d;"></i>
                            </div>
                            <div class="seller-rating">
                                <div class="stars mb-2" id="sellerStars">★★★★☆</div>
                                <small class="text-muted">Seller Rating</small>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="seller-info">
                                <h4 id="sellerName" class="mb-3">Loading...</h4>
                                
                                <div class="info-item mb-3">
                                    <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                    <strong>Location:</strong>
                                    <span id="sellerLocation">Loading...</span>
                                </div>
                                
                                <div class="info-item mb-3">
                                    <i class="fas fa-phone text-success me-2"></i>
                                    <strong>Phone:</strong>
                                    <span id="sellerPhone">Loading...</span>
                                </div>
                                
                                <div class="info-item mb-3">
                                    <i class="fas fa-envelope text-primary me-2"></i>
                                    <strong>Email:</strong>
                                    <span id="sellerEmail">Loading...</span>
                                </div>
                                
                                <div class="info-item mb-3">
                                    <i class="fas fa-calendar-alt text-info me-2"></i>
                                    <strong>Member Since:</strong>
                                    <span id="sellerMemberSince">Loading...</span>
                                </div>
                                
                                <div class="info-item mb-3">
                                    <i class="fas fa-car text-warning me-2"></i>
                                    <strong>Cars Sold:</strong>
                                    <span id="sellerCarsSold">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="car-details-summary bg-light p-3 rounded">
                                <h5 class="mb-3">
                                    <i class="fas fa-car me-2 text-primary"></i>Car Details
                                </h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-2"><strong>Model:</strong> <span id="modalCarTitle">Loading...</span></p>
                                        <p class="mb-2"><strong>Price:</strong> <span id="modalCarPrice" class="text-success fw-bold">Loading...</span></p>
                                        <p class="mb-2"><strong>Distance:</strong> <span id="modalCarDistance">Loading...</span></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-2"><strong>Fuel Type:</strong> <span id="modalCarFuel">Loading...</span></p>
                                        <p class="mb-2"><strong>Transmission:</strong> <span id="modalCarTransmission">Loading...</span></p>
                                        <p class="mb-2"><strong>EMI:</strong> <span id="modalCarEMI">Loading...</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="fas fa-times me-1"></i>Close
                    </button>
                    <button type="button" class="btn btn-success" id="contactSeller">
                        <i class="fas fa-phone me-1"></i>Contact Seller
                    </button>
                    <button type="button" class="btn btn-primary" id="scheduleVisit">
                        <i class="fas fa-calendar-plus me-1"></i>Schedule Visit
                    </button>
                </div>
            </div>
        </div>
    </div>

    

    <?php
            include './footer.php'
            ?>

<!-- jQuery CDN (required for your existing $(document).ready and other jQuery usage) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap JS Bundle (should be at the end of body) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="./header_footer.js"></script>
    
    <script>

        // Search Bar
        let currentDate = new Date();
        let selectedDate = null;
        let activeField = null;
        
        const months = ['January', 'February', 'March', 'April', 'May', 'June', 
                       'July', 'August', 'September', 'October', 'November', 'December'];
        const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

        // Initialize calendar
        function init() {
            // Add event listeners to calendar icons
            document.querySelectorAll('.fa-calendar').forEach((icon, index) => {
                icon.addEventListener('click', function() {
                    activeField = index === 0 ? 'pickup' : 'return';
                    showCalendar();
                });
            });

            // Add event listeners to input fields
            document.getElementById('pickup-date').addEventListener('click', function() {
                activeField = 'pickup';
                showCalendar();
            });

            document.getElementById('return-date').addEventListener('click', function() {
                activeField = 'return';
                showCalendar();
            });

            // Calendar navigation
            document.getElementById('prev-month').addEventListener('click', function() {
                currentDate.setMonth(currentDate.getMonth() - 1);
                renderCalendar();
            });

            document.getElementById('next-month').addEventListener('click', function() {
                currentDate.setMonth(currentDate.getMonth() + 1);
                renderCalendar();
            });

            // Calendar actions
            document.getElementById('cancel-btn').addEventListener('click', hideCalendar);
            document.getElementById('select-btn').addEventListener('click', selectDate);
            document.getElementById('overlay').addEventListener('click', hideCalendar);
        }

        function showCalendar() {
            document.getElementById('overlay').style.display = 'block';
            document.getElementById('calendar').style.display = 'block';
            renderCalendar();
        }

        function hideCalendar() {
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('calendar').style.display = 'none';
            selectedDate = null;
        }

        function renderCalendar() {
            const monthYear = document.getElementById('month-year');
            monthYear.textContent = `${months[currentDate.getMonth()]} ${currentDate.getFullYear()}`;

            const grid = document.getElementById('calendar-grid');
            grid.innerHTML = '';

            // Add day headers
            days.forEach(day => {
                const dayHeader = document.createElement('div');
                dayHeader.className = 'day-header';
                dayHeader.textContent = day;
                grid.appendChild(dayHeader);
            });

            // Get first day of month and number of days
            const firstDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
            const lastDay = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);
            const startDate = new Date(firstDay);
            startDate.setDate(startDate.getDate() - firstDay.getDay());

            const today = new Date();
            today.setHours(0, 0, 0, 0);

            // Create calendar days
            for (let i = 0; i < 42; i++) {
                const cellDate = new Date(startDate);
                cellDate.setDate(startDate.getDate() + i);

                const dayCell = document.createElement('div');
                dayCell.className = 'day';
                dayCell.textContent = cellDate.getDate();

                // Disable past dates
                if (cellDate < today) {
                    dayCell.classList.add('disabled');
                } else {
                    dayCell.addEventListener('click', function() {
                        // Remove previous selection
                        document.querySelectorAll('.day.selected').forEach(d => {
                            d.classList.remove('selected');
                        });
                        
                        // Add selection to clicked day
                        dayCell.classList.add('selected');
                        selectedDate = new Date(cellDate);
                    });
                }

                // Highlight different month days
                if (cellDate.getMonth() !== currentDate.getMonth()) {
                    dayCell.style.color = '#ccc';
                }

                grid.appendChild(dayCell);
            }
        }

        function selectDate() {
            if (!selectedDate) {
                alert('Please select a date');
                return;
            }

            const options = { weekday: 'short', day: 'numeric', month: 'long', year: 'numeric' };
            const formattedDate = selectedDate.toLocaleDateString('en-US', options);

            if (activeField === 'pickup') {
                document.getElementById('pickup-date').value = formattedDate;
            } else {
                document.getElementById('return-date').value = formattedDate;
            }

            hideCalendar();
        }

        // Search functionality
        function performSearch() {
            const pickupLocation = document.querySelector('.form-control[value="Coimbatore"]').value;
            const pickupDate = document.getElementById('pickup-date').value;
            const returnDate = document.getElementById('return-date').value;

            console.log('Search Parameters:', {
                location: pickupLocation,
                pickup: pickupDate,
                return: returnDate
            });
            
            alert(`Searching for cars:\nLocation: ${pickupLocation}\nPickup: ${pickupDate}\nReturn: ${returnDate}`);
        }

    

        // Initialize when page loads
        document.addEventListener('DOMContentLoaded', init);
        
        // Filter functionality
        let selectedFilters = {
            bodyType: null,
            fuelType: null,
            transmission: null,
            seatingCapacity: null,
            fuelPlan: null
        };
        
        // Category mappings for display
        const categoryNames = {
            bodyType: 'Body Type',
            fuelType: 'Fuel Type',
            transmission: 'Transmission',
            seatingCapacity: 'Seating Capacity',
            fuelPlan: 'Fuel Plan'
        };
        
        function selectFilter(category, value, elementId) {
            // If the same filter is clicked, deselect it
            if (selectedFilters[category] === value) {
                selectedFilters[category] = null;
                document.getElementById(elementId).checked = false;
            } else {
                // Clear previous selection in this category
                clearCategorySelection(category);
                
                // Set new selection
                selectedFilters[category] = value;
                document.getElementById(elementId).checked = true;
            }
            
            updateDisplay();
        }
        
        function clearCategorySelection(category) {
            // Get all checkboxes in the category and uncheck them
            const categoryCheckboxes = getCategoryCheckboxes(category);
            categoryCheckboxes.forEach(checkbox => {
                checkbox.checked = false;
            });
        }
        
        function getCategoryCheckboxes(category) {
            const categoryMap = {
                bodyType: ['suv', 'sedan', 'muv', 'hatchback'],
                fuelType: ['diesel', 'petrol', 'electric'],
                transmission: ['automatic', 'manual'],
                seatingCapacity: ['seat4', 'seat5', 'seat6', 'seat7', 'seat9'],
                fuelPlan: ['withFuel', 'withoutFuel']
            };
            
            return categoryMap[category].map(id => document.getElementById(id));
        }
        
        function updateDisplay() {
            const display = document.getElementById('selectedFiltersDisplay');
            const container = document.getElementById('selectedFiltersContainer');
            const applyBtn = document.getElementById('applyBtn');
            
            // Get active filters
            const activeFilters = Object.entries(selectedFilters).filter(([key, value]) => value !== null);
            
            if (activeFilters.length === 0) {
                container.style.display = 'none';
                applyBtn.disabled = true;
            } else {
                container.style.display = 'block';
                display.innerHTML = activeFilters.map(([category, value]) => 
                    `<div class="d-flex justify-content-between align-items-center py-1 border-bottom">
                        <span class="small text-muted">${categoryNames[category]}:</span>
                        <span class="filter-value">${value}</span>
                    </div>`
                ).join('');
                applyBtn.disabled = false;
            }
        }
        
        function clearAllFilters() {
            // Reset all selections
            selectedFilters = {
                bodyType: null,
                fuelType: null,
                transmission: null,
                seatingCapacity: null,
                fuelPlan: null
            };
            
            // Uncheck all checkboxes
            document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
                checkbox.checked = false;
            });
            
            updateDisplay();
        }
        
        function applyFilters() {
            const activeFilters = Object.entries(selectedFilters).filter(([key, value]) => value !== null);
            
            if (activeFilters.length === 0) {
                alert('Please select at least one filter to apply.');
                return;
            }
            
            const filterSummary = activeFilters.map(([category, value]) => 
                `${categoryNames[category]}: ${value}`
            ).join('\n');
            
            alert(`Applying ${activeFilters.length} filter(s):\n\n${filterSummary}`);
        }
        
        // Initialize filter display on page load
        document.addEventListener('DOMContentLoaded', function() {
            updateDisplay();
        });


           // our offerings card       
        $(document).ready(function() {             
            // Offering data             
            var offeringsData = {                 
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
                $('.motion-item').each(function() {                     
                    var elementTop = $(this).offset().top;                     
                    var elementBottom = elementTop + $(this).outerHeight();                     
                    var viewportTop = $(window).scrollTop();                     
                    var viewportBottom = viewportTop + $(window).height();                      
                    if (elementBottom > viewportTop && elementTop < viewportBottom) {                         
                        $(this).addClass('shown');                     
                    }                 
                });             
            }              
            // Initial animation check             
            animateOnScroll();              
            // Animate on scroll             
            $(window).scroll(function() {                 
                animateOnScroll();             
            });              
            // Offering card click handler             
            $('.offering-item').on('click', function() {                 
                var offeringKey = $(this).data('offering');                 
                var offering = offeringsData[offeringKey];                                  
                // Remove active class from all cards                 
                $('.offering-item').removeClass('border-primary');                                  
                // Add active styling to clicked card                 
                $(this).addClass('border-primary');                                  
                // Create feature list                 
                var featuresList = offering.features.map(function(feature) {                     
                    return '• ' + feature;                 
                }).join('\n');                                  
                // Display offering information                 
                alert('Service: ' + offering.title + '\n\n' +                       
                      'Description: ' + offering.description + '\n\n' +                       
                      'Key Features:\n' + featuresList);             
            });              
            // Initialize tooltips             
            $('.offering-item').each(function() {                 
                var offeringKey = $(this).data('offering');                 
                var offering = offeringsData[offeringKey];                 
                $(this).attr('title', 'Click to learn more about ' + offering.title);             
            });              
            console.log('Responsive Offerings Section Initialized!');         
        });

        // Similar Cars

        // Car data
        const carsData = [
            {
                id: 1,
                title: "Maruti Suzuki Swift VXI 2021",
                distance: "25,000 km",
                fuelType: "Petrol",
                transmission: "Manual",
                price: "₹5.2 Lakh",
                rating: 4.5,
                emiAmount: "₹5,470/mo",
                location: "Coimbatore",
                image: "assets/image/car1-image.png"
            },
            {
                id: 2,
                title: "Maruti Suzuki Swift VXI 2021",
                distance: "25,000 km",
                fuelType: "Petrol",
                transmission: "Manual",
                price: "₹5.2 Lakh",
                rating: 4.5,
                emiAmount: "₹5,470/mo",
                location: "Coimbatore",
                // carColor: "blue-car"
            },
            {
                id: 3,
                title: "Maruti Suzuki Swift VXI 2021",
                distance: "25,000 km",
                fuelType: "Petrol",
                transmission: "Manual",
                price: "₹5.2 Lakh",
                rating: 4.5,
                emiAmount: "₹5,470/mo",
                location: "Coimbatore",
                // carColor: "black-car"
            },
            {
                id: 4,
                title: "Maruti Suzuki Swift VXI 2021",
                distance: "25,000 km",
                fuelType: "Petrol",
                transmission: "Manual",
                price: "₹5.2 Lakh",
                rating: 4.5,
                emiAmount: "₹5,470/mo",
                location: "Coimbatore",
                // carColor: "white-car"
            }
        ];

        // Seller data
        const sellersData = {
            1: {
                name: "Rajesh Kumar",
                location: "Coimbatore, Tamil Nadu",
                phone: "+91 98765 43210",
                email: "rajesh.kumar@email.com",
                memberSince: "January 2020",
                carsSold: "12",
                rating: 4.3
            },
            2: {
                name: "Priya Sharma", 
                location: "Coimbatore, Tamil Nadu",
                phone: "+91 87654 32109",
                email: "priya.sharma@email.com",
                memberSince: "March 2019",
                carsSold: "8",
                rating: 4.7
            },
            3: {
                name: "Arjun Reddy",
                location: "Coimbatore, Tamil Nadu", 
                phone: "+91 76543 21098",
                email: "arjun.reddy@email.com",
                memberSince: "June 2021",
                carsSold: "15",
                rating: 4.5
            },
            4: {
                name: "Meera Nair",
                location: "Coimbatore, Tamil Nadu",
                phone: "+91 65432 10987", 
                email: "meera.nair@email.com",
                memberSince: "September 2018",
                carsSold: "20",
                rating: 4.8
            }
        };
        const faqData = [
            {
                id: 1,
                question: "How long does it take to sell?",
                answer: "Typically, cars are sold within 15-30 days from the date of listing. However, the actual time may vary depending on factors such as car condition, pricing, market demand, and location. Premium and well-maintained vehicles often sell faster."
            },
            {
                id: 2,
                question: "Is there any inspection fee?",
                answer: "No, there is no inspection fee charged to sellers. Our certified technicians will conduct a comprehensive 200-point inspection of your vehicle completely free of cost. This inspection helps us provide an accurate valuation and ensures transparency for potential buyers."
            },
            {
                id: 3,
                question: "Do I need to visit your office?",
                answer: "No, you don't need to visit our office. We offer doorstep services where our representatives will come to your location for vehicle inspection, documentation, and final paperwork. You can complete the entire selling process from the comfort of your home."
            }
        ];

        // Generate interactive star rating HTML
        function generateInteractiveStars(rating, carId) {
            let starsHtml = '';
            
            for (let i = 1; i <= 5; i++) {
                const starClass = i <= rating ? 'filled' : 'empty';
                const starSymbol = i <= rating ? '★' : '☆';
                starsHtml += `<span class="star-individual ${starClass}" data-rating="${i}" data-car-id="${carId}">${starSymbol}</span>`;
            }
            
            return starsHtml;
        }

        // Generate static star rating HTML (for seller ratings)
        function generateStars(rating) {
            const fullStars = Math.floor(rating);
            const hasHalfStar = rating % 1 !== 0;
            let starsHtml = '';
            
            // Add filled stars
            for (let i = 0; i < fullStars; i++) {
                starsHtml += '★';
            }
            
            // Add half star if needed
            if (hasHalfStar) {
                starsHtml += '☆';
            }
            
            // Add empty stars
            const emptyStars = 5 - Math.ceil(rating);
            for (let i = 0; i < emptyStars; i++) {
                starsHtml += '☆';
            }
            
            return starsHtml;
        }

        // Update car rating
        function updateCarRating(carId, newRating) {
            const carIndex = carsData.findIndex(car => car.id == carId);
            if (carIndex !== -1) {
                carsData[carIndex].rating = newRating;
                
                // Update the rating number display
                $(`.car-card .car-rating .rating-number[data-car-id="${carId}"]`).text(newRating.toFixed(1));
                
                // Show success message
                showRatingMessage(carId, newRating);
            }
        }

        // Show rating confirmation message
        function showRatingMessage(carId, rating) {
            const carCard = $(`.car-card .star-individual[data-car-id="${carId}"]`).closest('.car-card');
            
            // Remove any existing message
            carCard.find('.rating-message').remove();
            
            // Add success message
            const message = $(`
                <div class="rating-message alert alert-success alert-dismissible fade show mt-2" role="alert" style="font-size: 12px; padding: 8px;">
                    <i class="fas fa-check-circle me-1"></i>
                    You rated this car ${rating} star${rating !== 1 ? 's' : ''}!
                    <button type="button" class="btn-close" style="font-size: 10px;" data-bs-dismiss="alert"></button>
                </div>
            `);
            
            carCard.find('.location').after(message);
            
            // Auto remove message after 3 seconds
            setTimeout(() => {
                message.fadeOut(300, function() {
                    $(this).remove();
                });
            }, 3000);
        }

        // Show seller details modal
        function showSellerDetails(carId) {
            const car = carsData.find(c => c.id == carId);
            const seller = sellersData[carId];
            
            if (car && seller) {
                // Update modal with seller information
                $('#sellerName').text(seller.name);
                $('#sellerLocation').text(seller.location);
                $('#sellerPhone').text(seller.phone);
                $('#sellerEmail').text(seller.email);
                $('#sellerMemberSince').text(seller.memberSince);
                $('#sellerCarsSold').text(seller.carsSold);
                $('#sellerStars').html(generateStars(seller.rating));
                
                // Update modal with car information
                $('#modalCarTitle').text(car.title);
                $('#modalCarPrice').text(car.price);
                $('#modalCarDistance').text(car.distance);
                $('#modalCarFuel').text(car.fuelType);
                $('#modalCarTransmission').text(car.transmission);
                $('#modalCarEMI').text(car.emiAmount);
                
                // Show the modal
                $('#sellerDetailsModal').modal('show');
            }
        }

        // Generate car illustration
        function generateCarIllustration(colorClass) {
            return `
                <div class="car-illustration ${colorClass}" >
                <img src="assets/image/Maruti-Suzuki-New-Swift.png" alt="car-image" style="width:200px;">
                
                </div>
            `;
        }

        // Load cars using jQuery
        function loadCars() {
            let carsHtml = '';
            
            $.each(carsData, function(index, car) {
                carsHtml += `
                    <div class="col-lg-3 col-md-5 col-sm-6" >
                        <div class="car-card1" >
                            <div class="car-badge"></div>
                            <i class="heart-icon far fa-heart" data-car-id="${car.id}"></i>
                            
                            <div class="car-image1">
                                ${generateCarIllustration(car.carColor)}
                            </div>
                            
                            <div class="car-title">${car.title}</div>
                            <div class="car-details">
                                <span>${car.distance}</span>
                                <span>|</span>
                                <span>${car.fuelType}</span>
                                <span>|</span>
                                <span>${car.transmission}</span>
                            </div>
                            <div class="car-price">${car.price}</div>
                            <div class="car-rating">
                                <span class="stars" data-car-id="${car.id}">${generateInteractiveStars(car.rating, car.id)}</span>
                                <span class="rating-number" data-car-id="${car.id}">${car.rating}</span>
                            </div>
                            <div class="emi-info">EMI ${car.emiAmount}</div>
                            <div class="location">
                                <i class="location-icon fas fa-map-marker-alt"></i>
                                <span>${car.location}</span>
                            </div>
                            <a href="#" class="view-details" data-car-id="${car.id}">
                                View Seller Details <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                `;
            });
            
            $('#cars-container').html(carsHtml);
        }

        // Load FAQ using jQuery
       function loadFAQ() {
    let faqHtml = '';
    
    $.each(faqData, function(index, faq) {
        faqHtml += `
            <div class="faq-item">
                <button class="faq-question" data-faq-id="${faq.id}">
                    <span>${faq.id}. ${faq.question}</span>
                    <!-- Option 1: CSS Triangle Arrow -->
                    <div class="faq-arrow"></div>
                    
                    <!-- Option 2: Font Awesome Chevron (uncomment to use instead of triangle) -->
                    <!-- <i class="fas fa-chevron-down faq-chevron"></i> -->
                </button>
                <div class="faq-answer" data-faq-id="${faq.id}">
                    <p>${faq.answer}</p>
                </div>
            </div>
        `;
    });
    
    $('#faq-container').html(faqHtml);
}


        // jQuery Document Ready
        $(document).ready(function() {
            // Load cars and FAQ
            loadCars();
            loadFAQ();

            // Star rating interaction handlers
            $(document).on('mouseenter', '.star-individual', function() {
                const rating = $(this).data('rating');
                const carId = $(this).data('car-id');
                
                // Highlight stars up to hovered star
                $(`.star-individual[data-car-id="${carId}"]`).each(function(index) {
                    const starRating = $(this).data('rating');
                    if (starRating <= rating) {
                        $(this).removeClass('filled empty').addClass('hover-highlight');
                        $(this).text('★');
                    } else {
                        $(this).removeClass('filled hover-highlight').addClass('empty');
                        $(this).text('☆');
                    }
                });
            });

            $(document).on('mouseleave', '.stars', function() {
                const carId = $(this).data('car-id');
                const currentRating = carsData.find(car => car.id == carId).rating;
                
                // Reset to original rating
                $(`.star-individual[data-car-id="${carId}"]`).each(function(index) {
                    const starRating = $(this).data('rating');
                    if (starRating <= currentRating) {
                        $(this).removeClass('empty hover-highlight').addClass('filled');
                        $(this).text('★');
                    } else {
                        $(this).removeClass('filled hover-highlight').addClass('empty');
                        $(this).text('☆');
                    }
                });
            });

            $(document).on('click', '.star-individual', function() {
                const rating = $(this).data('rating');
                const carId = $(this).data('car-id');
                
                // Update the rating
                updateCarRating(carId, rating);
                
                // Update visual display immediately
                $(`.star-individual[data-car-id="${carId}"]`).each(function() {
                    const starRating = $(this).data('rating');
                    if (starRating <= rating) {
                        $(this).removeClass('empty hover-highlight').addClass('filled');
                        $(this).text('★');
                    } else {
                        $(this).removeClass('filled hover-highlight').addClass('empty');
                        $(this).text('☆');
                    }
                });
                
                console.log(`Car ${carId} rated ${rating} stars`);
            });

            // Heart icon click handler
            $(document).on('click', '.heart-icon', function() {
                const carId = $(this).data('car-id');
                $(this).toggleClass('far fas');
                
                if ($(this).hasClass('fas')) {
                    console.log(`Car ${carId} added to favorites`);
                } else {
                    console.log(`Car ${carId} removed from favorites`);
                }
            });

            // View details click handler
            $(document).on('click', '.view-details', function(e) {
                e.preventDefault();
                const carId = $(this).data('car-id');
                showSellerDetails(carId);
            });

            // Contact seller handler
            $(document).on('click', '#contactSeller', function() {
                const sellerPhone = $('#sellerPhone').text();
                alert(`Calling ${sellerPhone}...`);
                // In real application, this would initiate a phone call
                window.open(`tel:${sellerPhone.replace(/\s/g, '')}`);
            });

            // Schedule visit handler  
            $(document).on('click', '#scheduleVisit', function() {
                const sellerName = $('#sellerName').text();
                alert(`Scheduling visit with ${sellerName}...`);
                // In real application, this would open a calendar/booking interface
            });

            // FAQ toggle handler with dropdown functionality
           $(document).on('click', '.faq-question', function() {
    const faqId = $(this).data('faq-id');
    const answer = $(`.faq-answer[data-faq-id="${faqId}"]`);
    const arrow = $(this).find('.faq-arrow, .faq-chevron'); // Works for both arrow types
    const isCurrentlyOpen = answer.hasClass('show');
    
    // Close all FAQ answers and reset arrows
    $('.faq-answer').removeClass('show');
    $('.faq-arrow, .faq-chevron').removeClass('rotated');
    
    // If the clicked FAQ wasn't open, open it
    if (!isCurrentlyOpen) {
        answer.addClass('show');
        arrow.addClass('rotated');
    }
    
    console.log(`FAQ ${faqId} toggled`);
});
function loadFAQWithChevron() {
    let faqHtml = '';
    
    $.each(faqData, function(index, faq) {
        faqHtml += `
            <div class="faq-item">
                <button class="faq-question" data-faq-id="${faq.id}">
                    <span>${faq.id}. ${faq.question}</span>
                    <i class="fas fa-chevron-down faq-chevron"></i>
                </button>
                <div class="faq-answer" data-faq-id="${faq.id}">
                    <p>${faq.answer}</p>
                </div>
            </div>
        `;
    });
    
    $('#faq-container').html(faqHtml);
}

            // Add smooth scroll animations
            $('.car-card').each(function(index) {
                $(this).css({
                    'opacity': '0',
                    'transform': 'translateY(30px)'
                }).delay(index * 100).animate({
                    // 'opacity': '1'
                }, 500).queue(function() {
                    $(this).css('transform', 'translateY(0)');
                    $(this).dequeue();
                });
            });
        });


    </script>
</body>
</html>