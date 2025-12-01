<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Listings - Service Vehicle</title>
    <link rel="stylesheet" href="./Header_footerstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .user-dashboard-wrapper {
            min-height: 100vh;
        }

        .user-dashboard-header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navigation-back-button {
            background: none;
            border: none;
            font-size: 1.2rem;
            color: #007bff;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .navigation-back-button:hover {
            background: rgba(0, 123, 255, 0.1);
            transform: translateX(-2px);
        }

        .user-dashboard-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: #333;
            margin: 0;
        }

        .user-content-wrapper {
            padding: 2rem 0;
        }

        .user-navigation-panel {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        .profile-display-section {
            text-align: center;
            padding-bottom: 2rem;
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 2rem;
        }

        .user-profile-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-bottom: 1rem;
            border: 3px solid #007bff;
        }

        .navigation-sidebar-menu {
            list-style: none;
        }

        .navigation-menu-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            margin-bottom: 0.5rem;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }

        .navigation-menu-item:hover {
            background: rgba(0, 123, 255, 0.1);
            transform: translateX(5px);
        }

        .navigation-menu-item.selected {
            background-color: #742B88;
            color: white;
        }

        /* Updated Service Card Design */
        .listings-panel {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .listings-header {
            margin-bottom: 2rem;
        }

        .listings-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 0.5rem;
        }

        .listings-subtitle {
            color: #6c757d;
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
            line-height: 1.5;
        }

        /* Tab Navigation */
        .listings-tabs {
            display: flex;
            background: #f8f9fa;
            border-radius: 25px;
            padding: 0.5rem;
            margin-bottom: 2rem;
            gap: 0.5rem;
            overflow-x: auto;
        }

        .tab-item {
            background: none;
            border: none;
            color: #742B88;
            padding: 0.75rem 1.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
            border-bottom: 2px solid transparent;
            white-space: nowrap;
        }

        .tab-item.active {
            color: #000;
            font-weight: 600;
            border-bottom-color: #742B88;
            background: linear-gradient(135deg, #FFFFFF 0%, #FFB1B1 100%);
        }

        /* New Service Card Design - matching the image */
        .service-card {
            background: white;
            border: 2px solid #742B88;
            border-radius: 20px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            max-width:600px;
        }

        .service-card:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
            border-color: #000000;
        }

        .service-card-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .service-card-image {
            width: 60px;
            height: 60px;
            border-radius: 8px;
            object-fit: cover;
            flex-shrink: 0;
        }

        .service-card-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #333;
            margin: 0;
        }

        .service-card-specs {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin: 0.5rem 0;
            flex-wrap: wrap;
        }

        .service-spec-item {
            display: flex;
            align-items: center;
            gap: 0.3rem;
            color: #6c757d;
            font-size: 0.85rem;
        }

        .service-spec-item i {
            font-size: 0.75rem;
        }

        .service-card-info {
            border-top: 1px solid #eee;
            padding-top: 1rem;
            margin-top: 1rem;
        }

        .service-info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .service-id-price {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .service-id {
            color: #6c757d;
            font-size: 0.85rem;
        }

        .service-price {
            font-size: 1.1rem;
            font-weight: 600;
            color: #333;
        }

        .service-status-badge {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.4rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .service-status-badge.active {
            background: #d4edda;
            color: #155724;
        }

        .service-status-badge.booked {
            background: #fff3cd;
            color: #856404;
        }

        .service-status-badge.unavailable {
            background: #f8d7da;
            color: #721c24;
        }

        .status-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: currentColor;
        }

        .service-card-actions {
            display: flex;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .service-action-btn {
            flex: 1;
            padding: 0.6rem 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: white;
            color: #6c757d;
            font-size: 0.85rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .service-action-btn:hover {
            background: #f8f9fa;
            color: #495057;
        }

        .service-action-btn.primary {
            background: #742B88;
            color: white;
            border-color: #742B88;
        }

        .service-action-btn.primary:hover {
            background: #9f57b3ff;
            border-color: #9f57b3ff;
        }

        /* Cards container - grid layout */
        .service-cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
            gap: 1.5rem;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 3rem 2rem;
            color: #6c757d;
        }

        .empty-state i {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            color: #dee2e6;
        }

        .empty-state h4 {
            font-size: 1.25rem;
            margin-bottom: 0.75rem;
            color: #495057;
        }

        .empty-state p {
            font-size: 1rem;
            margin-bottom: 1.5rem;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        .action-btn {
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.85rem;
            color: #6c757d;
        }

        .action-btn:hover {
            background: #e9ecef;
            color: #495057;
        }

        .action-btn.primary {
            background-color: #742B88;
            color: white;
            border-color: #742B88;
        }

        .action-btn.primary:hover {
            background: #9f57b3ff;
            border-color: #9f57b3ff;
        }

        /* Search bar styling */
        .search-bar {
            margin-bottom: 2rem;
        }

        .search-bar .form-control {
            border-radius: 25px;
            padding: 0.75rem 1.5rem;
            border: 2px solid #e9ecef;
        }

        .search-bar .form-control:focus {
            border-color: #742B88;
            box-shadow: 0 0 0 0.2rem rgba(116, 43, 136, 0.25);
        }

        .search-bar .btn {
            border-radius: 25px;
            border: 2px solid #742B88;
            background: #742B88;
            color: white;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .service-cards-grid {
                grid-template-columns: 1fr;
            }

            .service-card {
                max-width: none;
            }

            .service-card-specs {
                justify-content: center;
                text-align: center;
            }

            .service-info-row {
                flex-direction: column;
                gap: 0.75rem;
                align-items: center;
                text-align: center;
            }

            .service-card-actions {
                flex-direction: column;
            }

            .listings-tabs {
                flex-direction: column;
            }

            .tab-item {
                min-width: auto;
                width: 100%;
            }
        }

        @media (max-width: 576px) {
            .user-navigation-panel {
                padding: 1rem;
            }

            .listings-panel {
                padding: 1rem;
            }

            .service-card {
                padding: 1rem;
            }
        }

        /* Loading State */
        .loading-skeleton {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
            border-radius: 4px;
        }

        @keyframes loading {
            0% {
                background-position: 200% 0;
            }
            100% {
                background-position: -200% 0;
            }
        }

        /* Modal Styles */
        .modal-content {
            border-radius: 15px;
            border: none;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }

        .modal-header {
            border-bottom: 1px solid #e9ecef;
            padding: 1.5rem 2rem 1rem;
        }

        .modal-body {
            padding: 1.5rem 2rem;
        }

        .modal-footer {
            border-top: 1px solid #e9ecef;
            padding: 1rem 2rem 1.5rem;
        }

        .btn-outline-secondary {
            border-color: #6c757d;
            color: #6c757d;
        }

        .btn-outline-secondary:hover {
            background: #6c757d;
            border-color: #6c757d;
        }

        .notification-toast {
            position: fixed;
            top: 20px;
            right: 20px;
            background: white;
            border-left: 4px solid #28a745;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            padding: 1rem 1.5rem;
            z-index: 1050;
            min-width: 300px;
            transform: translateX(100%);
            transition: transform 0.3s ease;
        }

        .notification-toast.show {
            transform: translateX(0);
        }

        .notification-toast.success {
            border-left-color: #28a745;
        }

        .notification-toast.warning {
            border-left-color: #ffc107;
        }

        .notification-toast.error {
            border-left-color: #dc3545;
        }
    </style>
</head>

<body>
    <div class="user-dashboard-wrapper">
        <!-- Header -->
        <div class="user-dashboard-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <button id="navigation-back-btn" class="navigation-back-button">
                            <i class="fas fa-arrow-left"></i>
                        </button>
                    </div>
                    <div class="col">
                        <h1 id="current-page-title" class="user-dashboard-title">My Listings (For Service)</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="user-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <!-- Sidebar -->
                    <div class="col-lg-4 col-xl-3 mb-4">
                        <div class="user-navigation-panel">
                            <!-- User Profile Section -->
                            <div class="profile-display-section">
                                <img id="profile-avatar-image" class="user-profile-avatar" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='50' fill='%23007bff'/%3E%3Ctext x='50' y='60' text-anchor='middle' fill='white' font-size='40' font-family='Arial'%3ES%3C/text%3E%3C/svg%3E" alt="User Avatar">

                                <div class="profile-user-info">
                                    <h4 style="font-weight: 600; font-size: 1.3rem; color: #333; margin-bottom: 0.5rem;">Sri Varshini</h4>
                                    <div class="d-flex align-items-center justify-content-center gap-2 mb-3">
                                        <span id="profile-user-id" class="profile-identifier" style="color: #6c757d; font-size: 1rem;">1122333444</span>
                                        <span id="profile-account-status" class="profile-status-badge" style="background: #28a745; color: white; padding: 0.25rem 0.75rem; border-radius: 12px; font-size: 0.8rem; font-weight: 600;">Active</span>
                                    </div>
                                    <a href="#" style="color: #007bff; font-size: 1rem; text-decoration: none; font-weight: 500;">View Full Profile</a>
                                </div>
                            </div>

                            <!-- Navigation Menu -->
                            <div id="navigation-sidebar-menu" class="navigation-sidebar-menu">
                                <div id="nav-profile-information" class="navigation-menu-item" data-page="profile-info">
                                    <span>Profile Information</span>
                                    <i class="fas fa-chevron-right"></i>
                                </div>

                                <div id="nav-rental-bookings" class="navigation-menu-item" data-page="bookings">
                                    <span>My Bookings (Rental)</span>
                                    <i class="fas fa-chevron-right"></i>
                                </div>

                                <div id="nav-listings" class="navigation-menu-item selected" data-page="listings">
                                    <span>My Listings</span>
                                    <i class="fas fa-chevron-right"></i>
                                </div>

                                <div id="nav-saved-vehicles" class="navigation-menu-item" data-page="saved-vehicles">
                                    <span>Saved Vehicles</span>
                                    <i class="fas fa-chevron-right"></i>
                                </div>

                                <div id="nav-notifications-alerts" class="navigation-menu-item" data-page="notifications">
                                    <span>Notifications & Alerts</span>
                                    <i class="fas fa-chevron-right"></i>
                                </div>

                                <div id="nav-help-support-one" class="navigation-menu-item" data-page="help-1">
                                    <span>Help & Support</span>
                                    <i class="fas fa-chevron-right"></i>
                                </div>

                                <div id="nav-help-support-two" class="navigation-menu-item" data-page="help-2">
                                    <span>Help & Support</span>
                                    <i class="fas fa-chevron-right"></i>
                                </div>

                                <div id="nav-security-settings" class="navigation-menu-item" data-page="security">
                                    <span>Security & Settings</span>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main Content -->
                    <div class="col-lg-8 col-xl-9">
                        <div id="primary-content-area">
                            <!-- Service Content will be loaded here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Confirmation Modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirm Action</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="confirmationMessage">Are you sure you want to perform this action?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmActionBtn">Confirm</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <script>
        $(document).ready(function() {
            // Sample data arrays
            const profileUserData = {
                id: "1122333444",
                name: "Sri Varshini",
                status: "Active",
                avatar: "S"
            };

            const serviceListings = [
                {
                    id: "TM-S1234",
                    name: "Maruti Suzuki Swift",
                    serviceType: "Petrol",
                    transmission: "Manual",
                    seats: "5 Seats",
                    price: "₹5,50,000",
                    status: "active",
                    statusText: "Active",
                    image: "https://imgd.aeplcdn.com/370x208/n/cw/ec/130591/swift-exterior-right-front-three-quarter-109.jpeg?isig=0&q=80"
                },
                {
                    id: "TM-H5678",
                    name: "Honda City",
                    serviceType: "Petrol",
                    transmission: "Automatic",
                    seats: "5 Seats",
                    price: "₹12,50,000",
                    status: "booked",
                    statusText: "Booked",
                    bookedUntil: "20th Aug 2025",
                    image: "https://imgd.aeplcdn.com/370x208/n/cw/ec/134287/city-exterior-right-front-three-quarter-76.jpeg?isig=0&q=80"
                },
                {
                    id: "TM-T9012",
                    name: "Toyota Innova",
                    serviceType: "Diesel",
                    transmission: "Manual",
                    seats: "7 Seats",
                    price: "₹18,50,000",
                    status: "unavailable",
                    statusText: "Unavailable",
                    unavailableReason: "Under Maintenance",
                    image: "https://imgd.aeplcdn.com/370x208/n/cw/ec/142515/innova-crysta-exterior-right-front-three-quarter-21.jpeg?isig=0&q=80"
                },
                {
                    id: "TM-H3456",
                    name: "Hyundai Creta",
                    serviceType: "Petrol",
                    transmission: "Automatic",
                    seats: "5 Seats",
                    price: "₹15,50,000",
                    status: "active",
                    statusText: "Active",
                    image: "https://imgd.aeplcdn.com/370x208/n/cw/ec/106815/creta-exterior-right-front-three-quarter-4.jpeg?isig=0&q=80"
                },
                {
                    id: "TM-M7890",
                    name: "Mahindra XUV500",
                    serviceType: "Diesel",
                    transmission: "Manual",
                    seats: "7 Seats",
                    price: "₹16,50,000",
                    status: "active",
                    statusText: "Active",
                    image: "https://imgd.aeplcdn.com/370x208/n/cw/ec/40087/xuv500-exterior-right-front-three-quarter-9.jpeg?isig=0&q=80"
                },
                {
                    id: "TM-T1111",
                    name: "Tata Nexon",
                    serviceType: "Electric",
                    transmission: "Automatic",
                    seats: "5 Seats",
                    price: "₹14,50,000",
                    status: "booked",
                    statusText: "Booked",
                    bookedUntil: "15th Aug 2025",
                    image: "https://imgd.aeplcdn.com/370x208/n/cw/ec/141867/nexon-ev-exterior-right-front-three-quarter-71.jpeg?isig=0&q=80"
                }
            ];

            let currentActiveTab = 'active';

            // Generate service card HTML with new design
            function generateServiceCard(service) {
                let additionalInfo = '';
                if (service.status === 'booked' && service.bookedUntil) {
                    additionalInfo = `<small class="text-muted">Booked until: ${service.bookedUntil}</small>`;
                } else if (service.status === 'unavailable' && service.unavailableReason) {
                    additionalInfo = `<small class="text-muted">Reason: ${service.unavailableReason}</small>`;
                }

                return `
                    <div class="service-card" data-service-id="${service.id}">
                        <div class="service-card-header">
                            <img src="assets/image/car-mylistingspage.png" alt="" class="w-50 h-50">
                            <div>
                                <h3 class="service-card-title">${service.name}</h3>
                                <div class="service-card-specs">
                                    <div class="service-spec-item">
                                        <i class="fas fa-gas-pump"></i>
                                        <span>${service.serviceType}</span>
                                    </div>
                                    <div class="service-spec-item">
                                        <i class="fas fa-cog"></i>
                                        <span>${service.transmission}</span>
                                    </div>
                                    <div class="service-spec-item">
                                        <i class="fas fa-users"></i>
                                        <span>${service.seats}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="service-card-info">
                            <div class="service-info-row">
                                <div class="service-id-price">
                                    <div class="service-id">Listing ID: [#${service.id}]</div>
                                    <div class="service-price">Price: ${service.price}</div>
                                    ${additionalInfo}
                                </div>
                                <div class="service-status-badge ${service.status}">
                                    <div class="status-dot"></div>
                                    ${service.statusText}
                                </div>
                            </div>
                            
                            <div class="service-card-actions">
                                <button class="service-action-btn" data-action="edit-service" data-service-id="${service.id}">
                                    Edit Listing
                                </button>
                                <button class="service-action-btn primary" data-action="mark-sold" data-service-id="${service.id}">
                                    Mark as Sold
                                </button>
                            </div>
                        </div>
                    </div>
                `;
            }

            // Generate the main listings panel
            function generateListingsPanel() {
                return `
                    <div class="listings-panel">
                        <div class="listings-header">
                            <h2 class="listings-title">My Listings (For Service)</h2>
                            <p class="listings-subtitle">
                                Manage all your service listings in one place.<br>
                                Track your active, pending, or sold services, update details, respond to service enquiries, and keep your service business moving smoothly.
                            </p>
                            
                            <div class="listings-tabs">
                                <button class="tab-item active" data-tab="active">Active Listings</button>
                                <button class="tab-item" data-tab="booked">Pending Listings</button>
                                <button class="tab-item" data-tab="unavailable">Sold Services</button>
                                <button class="tab-item" data-tab="inquiries">Service Enquiries</button>
                            </div>
                        </div>
                        
                        <div id="listings-container">
                            <!-- Service listings will be populated here -->
                        </div>
                    </div>
                `;
            }

            // Render service listings based on active tab
            function renderServiceListings(category = 'active') {
                const container = $('#listings-container');
                
                let filteredServices;
                switch(category) {
                    case 'active':
                        filteredServices = serviceListings.filter(service => service.status === 'active');
                        break;
                    case 'booked':
                        filteredServices = serviceListings.filter(service => service.status === 'booked');
                        break;
                    case 'unavailable':
                        filteredServices = serviceListings.filter(service => service.status === 'unavailable');
                        break;
                    case 'inquiries':
                        // Show inquiries view
                        container.html(`
                            <div class="empty-state">
                                <i class="fas fa-envelope"></i>
                                <h4>Service Enquiries</h4>
                                <p>You don't have any service enquiries at the moment. When customers inquire about your services, they'll appear here.</p>
                                <button class="action-btn primary">
                                    <i class="fas fa-plus me-2"></i>Add New Service
                                </button>
                            </div>
                        `);
                        return;
                    default:
                        filteredServices = serviceListings;
                }

                if (filteredServices.length === 0) {
                    // Empty state
                    const emptyStateMessages = {
                        active: {
                            icon: 'fas fa-tools',
                            title: 'No active services found',
                            message: "You don't have any active services at the moment. Add your first service to start getting bookings.",
                            buttonText: "Add New Service"
                        },
                        booked: {
                            icon: 'fas fa-calendar-check',
                            title: 'No pending bookings',
                            message: "You don't have any pending service bookings right now.",
                            buttonText: "View Active Services"
                        },
                        unavailable: {
                            icon: 'fas fa-times-circle',
                            title: 'No sold services',
                            message: "You haven't marked any services as sold yet.",
                            buttonText: "View All Services"
                        }
                    };

                    const emptyState = emptyStateMessages[category];
                    
                    container.html(`
                        <div class="empty-state">
                            <i class="${emptyState.icon}"></i>
                            <h4>${emptyState.title}</h4>
                            <p>${emptyState.message}</p>
                            <button class="action-btn primary" data-action="add-service">
                                <i class="fas fa-plus me-2"></i>${emptyState.buttonText}
                            </button>
                        </div>
                    `);
                } else {
                    // Show service listings in grid
                    const serviceCards = filteredServices.map(service => generateServiceCard(service)).join('');
                    container.html(`<div class="service-cards-grid">${serviceCards}</div>`);
                }
            }

            // Initialize the listings panel
            function initializeListingsPanel() {
                const panelHTML = generateListingsPanel();
                $('#primary-content-area').html(panelHTML);
                renderServiceListings('active');
            }

            // Show notification toast
            function showNotification(message, type = 'success') {
                const toast = $(`
                    <div class="notification-toast ${type}">
                        <div class="d-flex align-items-center">
                            <i class="fas ${type === 'success' ? 'fa-check-circle' : type === 'warning' ? 'fa-exclamation-triangle' : 'fa-times-circle'} me-2"></i>
                            <span>${message}</span>
                        </div>
                    </div>
                `);
                
                $('body').append(toast);
                
                // Trigger animation
                setTimeout(() => {
                    toast.addClass('show');
                }, 100);
                
                // Remove after 3 seconds
                setTimeout(() => {
                    toast.removeClass('show');
                    setTimeout(() => {
                        toast.remove();
                    }, 300);
                }, 3000);
            }

            // Handle tab switching
            $(document).on('click', '.tab-item', function() {
                const tabCategory = $(this).data('tab');
                
                // Update active tab
                $('.tab-item').removeClass('active');
                $(this).addClass('active');
                
                // Update current tab tracking
                currentActiveTab = tabCategory;
                
                // Render listings for this category
                renderServiceListings(tabCategory);
            });

            // Handle service card actions
            $(document).on('click', '[data-action]', function() {
                const action = $(this).data('action');
                const serviceId = $(this).data('service-id');
                
                switch(action) {
                    case 'edit-service':
                        handleEditService(serviceId);
                        break;
                    case 'mark-sold':
                        handleMarkAsSold(serviceId);
                        break;
                    case 'add-service':
                        handleAddService();
                        break;
                    default:
                        console.log('Unknown action:', action);
                }
            });

            // Handle edit service
            function handleEditService(serviceId) {
                const service = serviceListings.find(s => s.id === serviceId);
                if (service) {
                    showNotification(`Opening edit form for ${service.name}`, 'success');
                    // Here you would typically open an edit modal or navigate to edit page
                    console.log('Editing service:', service);
                }
            }

            // Handle mark as sold
            function handleMarkAsSold(serviceId) {
                const service = serviceListings.find(s => s.id === serviceId);
                if (service) {
                    // Show confirmation modal
                    $('#confirmationModalLabel').text('Mark Service as Sold');
                    $('#confirmationMessage').html(`
                        Are you sure you want to mark <strong>${service.name}</strong> as sold?<br>
                        <small class="text-muted">This action will move the service to your sold services list.</small>
                    `);
                    
                    // Store service ID for confirmation
                    $('#confirmActionBtn').data('service-id', serviceId);
                    $('#confirmActionBtn').data('action', 'confirm-sold');
                    
                    // Show modal
                    const modal = new bootstrap.Modal(document.getElementById('confirmationModal'));
                    modal.show();
                }
            }

            // Handle add new service
            function handleAddService() {
                showNotification('Redirecting to add new service form...', 'success');
                // Here you would typically navigate to add service page
                console.log('Adding new service');
            }

            // Handle modal confirmation
            $(document).on('click', '#confirmActionBtn', function() {
                const action = $(this).data('action');
                const serviceId = $(this).data('service-id');
                
                if (action === 'confirm-sold') {
                    // Update service status
                    const serviceIndex = serviceListings.findIndex(s => s.id === serviceId);
                    if (serviceIndex !== -1) {
                        serviceListings[serviceIndex].status = 'unavailable';
                        serviceListings[serviceIndex].statusText = 'Sold';
                        serviceListings[serviceIndex].unavailableReason = 'Sold';
                        
                        // Close modal
                        const modal = bootstrap.Modal.getInstance(document.getElementById('confirmationModal'));
                        modal.hide();
                        
                        // Show success notification
                        showNotification(`${serviceListings[serviceIndex].name} has been marked as sold!`, 'success');
                        
                        // Re-render current tab
                        renderServiceListings(currentActiveTab);
                    }
                }
            });

            // Handle navigation menu items
            $(document).on('click', '.navigation-menu-item', function() {
                const page = $(this).data('page');
                
                // Update selected state
                $('.navigation-menu-item').removeClass('selected');
                $(this).addClass('selected');
                
                // Handle different pages
                switch(page) {
                    case 'listings':
                        $('#current-page-title').text('My Listings (For Service)');
                        initializeListingsPanel();
                        break;
                    case 'profile-info':
                        $('#current-page-title').text('Profile Information');
                        showNotification('Profile Information page loading...', 'success');
                        break;
                    case 'bookings':
                        $('#current-page-title').text('My Bookings (Rental)');
                        showNotification('Bookings page loading...', 'success');
                        break;
                    case 'saved-vehicles':
                        $('#current-page-title').text('Saved Vehicles');
                        showNotification('Saved Vehicles page loading...', 'success');
                        break;
                    case 'notifications':
                        $('#current-page-title').text('Notifications & Alerts');
                        showNotification('Notifications page loading...', 'success');
                        break;
                    case 'help-1':
                    case 'help-2':
                        $('#current-page-title').text('Help & Support');
                        showNotification('Help & Support page loading...', 'success');
                        break;
                    case 'security':
                        $('#current-page-title').text('Security & Settings');
                        showNotification('Security Settings page loading...', 'success');
                        break;
                    default:
                        showNotification('Page not implemented yet', 'warning');
                }
            });

            // Handle back button
            $(document).on('click', '#navigation-back-btn', function() {
                showNotification('Navigating back...', 'success');
                // Here you would typically navigate back to previous page
                console.log('Going back');
            });

            // Handle profile avatar click
            $(document).on('click', '.user-profile-avatar', function() {
                showNotification('Opening profile menu...', 'success');
            });

            // Initialize the dashboard
            initializeListingsPanel();

            // Add some loading animations on card hover
            $(document).on('mouseenter', '.service-card', function() {
                $(this).find('.service-card-image').css('transform', 'scale(1.05)');
            });

            $(document).on('mouseleave', '.service-card', function() {
                $(this).find('.service-card-image').css('transform', 'scale(1)');
            });

            // Add search functionality (placeholder)
            function addSearchBar() {
                const searchBar = `
                    <div class="search-bar">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search your services..." id="serviceSearch">
                            <button class="btn btn-outline-secondary" type="button" id="searchBtn">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                `;
                $('.listings-header').append(searchBar);
            }

            // Handle search
            $(document).on('input', '#serviceSearch', function() {
                const searchTerm = $(this).val().toLowerCase();
                if (searchTerm === '') {
                    renderServiceListings(currentActiveTab);
                    return;
                }

                const filteredServices = serviceListings.filter(service => 
                    service.name.toLowerCase().includes(searchTerm) ||
                    service.serviceType.toLowerCase().includes(searchTerm) ||
                    service.id.toLowerCase().includes(searchTerm)
                );

                if (filteredServices.length === 0) {
                    $('#listings-container').html(`
                        <div class="empty-state">
                            <i class="fas fa-search"></i>
                            <h4>No services found</h4>
                            <p>No services match your search criteria. Try adjusting your search terms.</p>
                            <button class="action-btn" onclick="$('#serviceSearch').val(''); renderServiceListings('${currentActiveTab}');">
                                <i class="fas fa-times me-2"></i>Clear Search
                            </button>
                        </div>
                    `);
                } else {
                    const serviceCards = filteredServices.map(service => generateServiceCard(service)).join('');
                    $('#listings-container').html(`<div class="service-cards-grid">${serviceCards}</div>`);
                }
            });

            // Add keyboard shortcuts
            $(document).on('keydown', function(e) {
                // Ctrl/Cmd + F for search
                if ((e.ctrlKey || e.metaKey) && e.key === 'f') {
                    e.preventDefault();
                    $('#serviceSearch').focus();
                }
                
                // Escape to clear search
                if (e.key === 'Escape' && $('#serviceSearch').is(':focus')) {
                    $('#serviceSearch').val('').trigger('input');
                    $('#serviceSearch').blur();
                }
            });

            // Dynamic status updates (simulate real-time updates)
            function simulateStatusUpdates() {
                setInterval(function() {
                    // Randomly update a service status for demo purposes
                    if (Math.random() > 0.95) { // 5% chance every interval
                        const randomService = serviceListings[Math.floor(Math.random() * serviceListings.length)];
                        const statuses = ['active', 'booked', 'unavailable'];
                        const newStatus = statuses[Math.floor(Math.random() * statuses.length)];
                        
                        if (randomService.status !== newStatus) {
                            randomService.status = newStatus;
                            randomService.statusText = newStatus.charAt(0).toUpperCase() + newStatus.slice(1);
                            
                            // Re-render if we're on the listings page
                            if ($('#primary-content-area .listings-panel').length > 0) {
                                renderServiceListings(currentActiveTab);
                                showNotification(`${randomService.name} status updated to ${randomService.statusText}`, 'success');
                            }
                        }
                    }
                }, 10000); // Check every 10 seconds
            }

            // Start status simulation (uncomment for demo)
            // simulateStatusUpdates();

            console.log('Service Listings Dashboard initialized successfully');
        });
    </script>
</body>
</html>