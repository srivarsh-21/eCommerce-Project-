<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Accounts Page</title>
    <link rel="stylesheet" href="./Header_footerstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    
</head>

<body>

   <?php
    include './header.php';
    ?>

    <div class="dashboard-container">
        

        <div class="content-area" style="margin-top: 120px;">
            <div class="container-fluid">
                <div class="row">
                    <!-- Updated Sidebar -->
                    <div class="col-md-3 ">
                        <div class="profile-card sidebar1">
                            <div class="p-3 border-bottom d-flex align-items-center">
                                <div class="profile-avatar me-3">S</div>
                                <div>
                                    <h6 class="mb-1">Sri Varshini <i class="bi bi-pencil-square"></i></h6>
                                    <small class="text-muted">ID2334444 <span class="badge ">Active</span></small>
                                    <br>
                                    <!-- <small class="text-muted">Valid Till 15 Sept</small> -->
                                     <a href="" class="view-profile">View Full Profile</a>
                                </div>
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li class="sidebar-item d-flex justify-content-between align-items-center active rounded-4 ms-3 me-3 mt-3" data-section="profile">
                                    Profile Information
                                    <i class="bi bi-chevron-right"></i>
                                </li>
                                <li class="sidebar-item d-flex justify-content-between align-items-center rounded-4 ms-3 me-3 mt-3" data-section="bookings">
                                    My Bookings (Rental)
                                    <i class="bi bi-chevron-right"></i>
                                </li>
                                <li class="sidebar-item listings-parent d-flex justify-content-between align-items-center rounded-4 ms-3 me-3 mt-3" data-section="listings">
                                    My Listings
                                    <i class="bi bi-chevron-down"></i>
                                </li>
                                <!-- Dropdown menu for My Listings -->
                                <div class="dropdown-menu-custom" id="listings-dropdown">
                                    <a href="#" class="dropdown-item-custom rounded-4 ms-3 me-3 mt-3" data-listing-type="sell">Sell Vehicle</a>
                                    <a href="#" class="dropdown-item-custom rounded-4 ms-3 me-3 mt-3" data-listing-type="rental">Rental Vehicle</a>
                                    <a href="#" class="dropdown-item-custom rounded-4 ms-3 me-3 mt-3" data-listing-type="service">Vehicle Service</a>
                                </div>
                                <li class="sidebar-item d-flex justify-content-between align-items-center rounded-4 ms-3 me-3 mt-3" data-section="saved-vehicles">
                                    Saved Vehicles
                                    <i class="bi bi-chevron-right"></i>
                                </li>
                                <li class="sidebar-item d-flex justify-content-between align-items-center rounded-4 ms-3 me-3 mt-3" data-section="notifications">
                                    Notifications & Alerts
                                    <i class="bi bi-chevron-right"></i>
                                </li>
                                <li class="sidebar-item d-flex justify-content-between align-items-center rounded-4 ms-3 me-3 mt-3" data-section="support">
                                    Help & Support
                                    <i class="bi bi-chevron-right"></i>
                                </li>
                                <li class="sidebar-item d-flex justify-content-between align-items-center rounded-4 ms-3 me-3 mt-3" data-section="security">
                                    Security & Settings
                                    <i class="bi bi-chevron-right"></i>
                                </li>
                                <li class="sidebar-item d-flex justify-content-between align-items-center rounded-4 ms-3 me-3 mt-3" data-section="logout">
                                    Logout
                                    <i class="bi bi-chevron-right"></i>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Main Content -->
                    <div class="col-md-9 maincontent">
                        <!-- <div class="main-content"> -->
                        <!-- Profile Information Section -->
                        <div id="profile-section" class="content-section active">
                            <div id="main-content-area">
                                <!-- Profile content will be loaded here -->
                            </div>
                        </div>
                        
                        <!-- My Bookings Section -->
                        <div id="bookings-section" class="content-section">
                            <div id="bookings-content-area">
                                <!-- Bookings content will be loaded here -->
                            </div>
                        </div>
                        
                        <!-- My Listings Section -->
                        <div id="listings-section" class="content-section">
                            <div id="listings-content-area">
                                <!-- Listings content will be loaded here -->
                                 <!-- My Listings Section -->
                        <div id="listings-section" class="content-section active">
                            <div id="listings-content-area">
                                <!-- Demo Listings Panel -->
                                <div class="listings-panel">
                                    <!-- Listings Header -->
                                    <div class="listings-header">
                                        <h2 class="listings-title">My Listings (For Sellers)</h2>
                                        <p class="listings-subtitle">
                                            Manage all your vehicle listings in one place.<br>
                                            Track your active, pending, or sold vehicles, update details, respond to buyer enquiries, and keep your sales moving smoothly.
                                        </p>

                                        <!-- Tab Navigation -->
                                        <div class="tab-navigation">
                                            <button id="tab-active-listings" class="nav-tab active" data-tab="active">Active Listings</button>
                                            <button id="tab-pending-listings" class="nav-tab" data-tab="pending">Pending Listings</button>
                                            <button id="tab-sold-vehicles" class="nav-tab" data-tab="sold">Sold Vehicles</button>
                                            <button id="tab-buyer-enquiries" class="nav-tab" data-tab="enquiries">Buyer Enquiries</button>
                                        </div>
                                        <hr class="tab-navigation-hr">
                                    </div>

                                    <!-- Listings Content -->
                                    <div class="listings-content">
                                        <div id="vehicle-listings-container">
                                            <!-- Demo Vehicle Cards - Mobile Responsive -->
                                            <div class="vehicle-card">
                                                <div class="vehicle-details">
                                                    <div class="vehicle-image">
                                                        <img src="https://images.unsplash.com/photo-1568844293986-8d0400bd4745?w=300&h=200&fit=crop" alt="car-image">
                                                    </div>
                                                    
                                                    <div class="vehicle-info">
                                                        <h3 class="vehicle-name">Maruthi Suzuki Swift</h3>
                                                        <div class="vehicle-specs">
                                                            <div class="spec-item">
                                                                <i class="fas fa-gas-pump" style="color: #666; width: 22px; height: 22px; display: flex; align-items: center; justify-content: center;"></i>
                                                                <span>Petrol</span>
                                                            </div>
                                                            <div class="spec-item">
                                                                <i class="fas fa-cog" style="color: #666; width: 22px; height: 22px; display: flex; align-items: center; justify-content: center;"></i>
                                                                <span>Manual</span>
                                                            </div>
                                                            <div class="spec-item">
                                                                <i class="fas fa-users" style="color: #666; width: 22px; height: 22px; display: flex; align-items: center; justify-content: center;"></i>
                                                                <span>5 Seats</span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="listing-id">Listing ID: [#MTM-S1234]</div>
                                                        <div class="vehicle-flex">
                                                            <div class="vehicle-price">Price: ₹5,50,000</div>
                                                            <span class="status-badge">Active</span>
                                                        </div>
                                                        
                                                        <div class="action-buttons">
                                                            <button class="btn-edit" data-action="edit" data-vehicle-id="MTM-S1234">
                                                                Edit Listing
                                                            </button>
                                                            <button class="btn-sold" data-action="mark-sold" data-vehicle-id="MTM-S1234">
                                                                Mark as Sold
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="vehicle-card">
                                                <div class="vehicle-details">
                                                    <div class="vehicle-image">
                                                        <img src="https://images.unsplash.com/photo-1568844293986-8d0400bd4745?w=300&h=200&fit=crop" alt="car-image">
                                                    </div>
                                                    
                                                    <div class="vehicle-info">
                                                        <h3 class="vehicle-name">Honda City</h3>
                                                        <div class="vehicle-specs">
                                                            <div class="spec-item">
                                                                <i class="fas fa-gas-pump" style="color: #666; width: 22px; height: 22px; display: flex; align-items: center; justify-content: center;"></i>
                                                                <span>Petrol</span>
                                                            </div>
                                                            <div class="spec-item">
                                                                <i class="fas fa-cog" style="color: #666; width: 22px; height: 22px; display: flex; align-items: center; justify-content: center;"></i>
                                                                <span>Manual</span>
                                                            </div>
                                                            <div class="spec-item">
                                                                <i class="fas fa-users" style="color: #666; width: 22px; height: 22px; display: flex; align-items: center; justify-content: center;"></i>
                                                                <span>5 Seats</span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="listing-id">Listing ID: [#MTM-S1235]</div>
                                                        <div class="vehicle-flex">
                                                            <div class="vehicle-price">Price: ₹8,50,000</div>
                                                            <span class="status-badge">Active</span>
                                                        </div>
                                                        
                                                        <div class="action-buttons">
                                                            <button class="btn-edit" data-action="edit" data-vehicle-id="MTM-S1235">
                                                                Edit Listing
                                                            </button>
                                                            <button class="btn-sold" data-action="mark-sold" data-vehicle-id="MTM-S1235">
                                                                Mark as Sold
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="vehicle-card">
                                                <div class="vehicle-details">
                                                    <div class="vehicle-image">
                                                        <img src="https://images.unsplash.com/photo-1568844293986-8d0400bd4745?w=300&h=200&fit=crop" alt="car-image">
                                                    </div>
                                                    
                                                    <div class="vehicle-info">
                                                        <h3 class="vehicle-name">Hyundai Creta</h3>
                                                        <div class="vehicle-specs">
                                                            <div class="spec-item">
                                                                <i class="fas fa-gas-pump" style="color: #666; width: 22px; height: 22px; display: flex; align-items: center; justify-content: center;"></i>
                                                                <span>Diesel</span>
                                                            </div>
                                                            <div class="spec-item">
                                                                <i class="fas fa-cog" style="color: #666; width: 22px; height: 22px; display: flex; align-items: center; justify-content: center;"></i>
                                                                <span>Automatic</span>
                                                            </div>
                                                            <div class="spec-item">
                                                                <i class="fas fa-users" style="color: #666; width: 22px; height: 22px; display: flex; align-items: center; justify-content: center;"></i>
                                                                <span>5 Seats</span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="listing-id">Listing ID: [#HYD-CR567]</div>
                                                        <div class="vehicle-flex">
                                                            <div class="vehicle-price">Price: ₹12,75,000</div>
                                                            <span class="status-badge" style="background: #ffc107; color: #000;">Pending</span>
                                                        </div>
                                                        
                                                        <div class="action-buttons">
                                                            <button class="btn-edit" data-action="edit" data-vehicle-id="HYD-CR567">
                                                                Edit Listing
                                                            </button>
                                                            <button class="btn-sold" data-action="mark-sold" data-vehicle-id="HYD-CR567">
                                                                Mark as Sold
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                            </div>
                        </div>
                    
                        <!-- Saved Vehicles Section -->
                        <div id="saved-vehicles-section" class="content-section">
                            <div class="p-4" style="background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                                <h4 class="fw-bold mb-3">Saved Vehicles</h4>
                                <p class="text-muted mb-4">Keep track of vehicles you're interested in. Compare, shortlist, and make informed decisions.</p>
                                <div id="saved-vehicles-container" class="vehicle-cards-container">
                                    <!-- Saved vehicle cards will be rendered here -->
                                </div>
                            </div>
                        </div>
                        
                        <!-- Notifications Section -->
                        <div id="notifications-section" class="content-section">
                            <div class="text-center py-5" style="background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); padding: 3rem;">
                                <i class="fas fa-bell fa-3x text-muted mb-3"></i>
                                <h4 class="text-muted">Notifications & Alerts</h4>
                                <p class="text-muted">Stay updated with important notifications and alerts.</p>
                            </div>
                        </div>
        
                        <!-- Support Section -->
                        <div id="support-section" class="content-section">
                            <div class="text-center py-5" style="background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); padding: 3rem;">
                                <i class="fas fa-headset fa-3x text-muted mb-3"></i>
                                <h4 class="text-muted">Help & Support</h4>
                                <p class="text-muted">Get assistance and support for your queries.</p>
                            </div>
                        </div>
                       
                        <!-- Security Section -->
                        <div id="security-section" class="content-section">
                            <div class="text-center py-5" style="background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); padding: 3rem;">
                                <i class="fas fa-shield-alt fa-3x text-muted mb-3"></i>
                                <h4 class="text-muted">Security & Settings</h4>
                                <p class="text-muted">Manage your account security and settings.</p>
                            </div>
                        </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <script>
$(document).ready(function() {
    // Sample data arrays
    const userProfile = {
        id: "1122333444",
        name: "Sri Varshini",
        status: "Active",
        avatar: "S"
    };

    const vehicleListings = [
        {
            id: "MTM-S1234",
            name: "Maruthi Suzuki Swift",
            type: "Petrol",
            transmission: "Manual",
            seats: "5 Seats",
            price: "₹5,50,000",
            status: "Active",
            category: "active"
        },
        {
            id: "MTM-S1235",
            name: "Honda City",
            type: "Petrol",
            transmission: "Manual",
            seats: "5 Seats",
            price: "₹8,50,000",
            status: "Active",
            category: "active"
        },
        {
            id: "HYD-CR567",
            name: "Hyundai Creta",
            type: "Diesel",
            transmission: "Automatic",
            seats: "5 Seats",
            price: "₹12,75,000",
            status: "Pending",
            category: "pending"
        },
        {
            id: "TOY-INN890",
            name: "Toyota Innova",
            type: "Diesel",
            transmission: "Manual",
            seats: "7 Seats",
            price: "₹18,50,000",
            status: "Sold",
            category: "sold"
        }
    ];

    const bookingsData = {
        upcoming: [
            {
                id: "LRT186423",
                carName: "Hyundai Santro MT",
                carImage: "https://images.unsplash.com/photo-1568844293986-8d0400bd4745?w=200&h=150&fit=crop",
                fuel: "Petrol",
                transmission: "Manual",
                seats: "5-Seats",
                distance: "438 kms included, Without fuel",
                extraKms: "Extra Kms @ ₹ 20/Km",
                location: "Coimbatore",
                startDate: "Sat 19 Oct",
                startTime: "06:00 AM Wednesday",
                endDate: "Sun 20 Oct", 
                endTime: "11:30 AM Saturday",
                pickupLocation: "268, Jayanthi Nagar, Coimbatore, Sarjayh Puri, Tamil Nadu 641001",
                dropLocation: "268, Jayanthi Nagar, Coimbatore Sarjayh Puri, Tamil Nadu 641001",
                totalAmount: "₹ 3,650",
                status: "confirmed"
            },
            {
                id: "LRT186424",
                carName: "Hyundai Santro MT",
                carImage: "https://images.unsplash.com/photo-1568844293986-8d0400bd4745?w=200&h=150&fit=crop",
                fuel: "Petrol",
                transmission: "Manual", 
                seats: "5-Seats",
                distance: "438 kms included, Without fuel",
                extraKms: "Extra Kms @ ₹ 20/Km",
                location: "Coimbatore",
                startDate: "Mon 21 Oct",
                startTime: "09:00 AM Monday",
                endDate: "Tue 22 Oct",
                endTime: "06:00 PM Tuesday", 
                pickupLocation: "268, Jayanthi Nagar, Coimbatore, Sarjayh Puri, Tamil Nadu 641001",
                dropLocation: "268, Jayanthi Nagar, Coimbatore, Sarjayh Puri, Tamil Nadu 641001",
                totalAmount: "₹ 3,650",
                status: "confirmed"
            },
            {
                id: "LRT186425",
                carName: "Hyundai Santro MT",
                carImage: "https://images.unsplash.com/photo-1568844293986-8d0400bd4745?w=200&h=150&fit=crop",
                fuel: "Petrol",
                transmission: "Manual",
                seats: "5-Seats", 
                distance: "438 kms included, Without fuel",
                extraKms: "Extra Kms @ ₹ 20/Km",
                location: "Coimbatore",
                startDate: "Wed 23 Oct",
                startTime: "07:30 AM Wednesday",
                endDate: "Thu 24 Oct",
                endTime: "08:00 PM Thursday",
                pickupLocation: "268, Jayanthi Nagar, Coimbatore, Sarjayh Puri, Tamil Nadu 641001", 
                dropLocation: "268, Jayanthi Nagar, Coimbatore Sarjayh Puri, Tamil Nadu 641001",
                totalAmount: "₹ 3,650",
                status: "confirmed"
            }
        ],
        past: [
            {
                id: "LRT186420",
                carName: "Hyundai Santro MT",
                carImage: "https://images.unsplash.com/photo-1568844293986-8d0400bd4745?w=200&h=150&fit=crop",
                fuel: "Petrol",
                transmission: "Manual",
                seats: "5-Seats",
                distance: "438 kms included, Without fuel",
                extraKms: "Extra Kms @ ₹ 20/Km",
                location: "Coimbatore",
                startDate: "Mon 14 Oct",
                startTime: "09:00 AM Monday",
                endDate: "Tue 15 Oct",
                endTime: "06:00 PM Tuesday",
                pickupLocation: "268, Jayanthi Nagar, Coimbatore, Sarjayh Puri, Tamil Nadu 641001",
                dropLocation: "268, Jayanthi Nagar, Coimbatore Sarjayh Puri, Tamil Nadu 641001", 
                totalAmount: "₹ 3,650",
                status: "completed"
            }
        ],
        cancelled: [
            {
                id: "LRT186421",
                carName: "Hyundai Santro MT", 
                carImage: "https://images.unsplash.com/photo-1568844293986-8d0400bd4745?w=200&h=150&fit=crop",
                fuel: "Petrol",
                transmission: "Manual",
                seats: "5-Seats",
                distance: "438 kms included, Without fuel",
                extraKms: "Extra Kms @ ₹ 20/Km",
                location: "Coimbatore",
                startDate: "Fri 18 Oct",
                startTime: "10:00 AM Friday",
                endDate: "Sat 19 Oct", 
                endTime: "07:00 PM Saturday",
                pickupLocation: "268, Jayanthi Nagar, Coimbatore, Sarjayh Puri, Tamil Nadu 641001",
                dropLocation: "268, Jayanthi Nagar, Coimbatore, Sarjayh Puri, Tamil Nadu 641001",
                totalAmount: "₹ 3,650",
                status: "cancelled"
            }
        ]
    };

    const savedVehiclesData = [
        {
            id: 1,
            title: "Maruti Suzuki Swift VXI 2021",
            price: "₹ 9.2 Lakh",
            fuel: "Petrol",
            transmission: "Manual",
            km: "25,000",
            emi: "₹14,470/mo",
            location: "Coimbatore",
            image: "https://images.unsplash.com/photo-1568844293986-8d0400bd4745?w=300&h=200&fit=crop"
        },
        {
            id: 2,
            title: "Maruti Suzuki Swift VXI 2021",
            price: "₹ 9.2 Lakh",
            fuel: "Petrol", 
            transmission: "Manual",
            km: "25,000",
            emi: "₹14,470/mo",
            location: "Coimbatore",
            image: "https://images.unsplash.com/photo-1568844293986-8d0400bd4745?w=300&h=200&fit=crop"
        },
        {
            id: 3,
            title: "Maruti Suzuki Swift VXI 2021",
            price: "₹ 9.2 Lakh",
            fuel: "Petrol",
            transmission: "Manual", 
            km: "25,000",
            emi: "₹14,470/mo",
            location: "Coimbatore",
            image: "https://images.unsplash.com/photo-1568844293986-8d0400bd4745?w=300&h=200&fit=crop"
        }
    ];

    const rentalVehicleData = [
        {
            id: "TM-R003",
            name: "Maruti Swift",
            category: "Car",
            fuelType: "Petrol",
            transmission: "Manual",
            pricePerDay: "₹1200",
            availability: "Available",
            status: "active"
        },
        {
            id: "TM-R004",
            name: "Honda City",
            category: "Car",
            fuelType: "Petrol",
            transmission: "Automatic",
            pricePerDay: "₹1800",
            availability: "Available",
            status: "active"
        },
        {
            id: "TM-R005",
            name: "Toyota Innova",
            category: "Car",
            fuelType: "Diesel",
            transmission: "Manual",
            pricePerDay: "₹2500",
            availability: "Booked",
            status: "booked"
        },
        {
            id: "TM-R006",
            name: "Hyundai Creta",
            category: "Car",
            fuelType: "Petrol",
            transmission: "Automatic",
            pricePerDay: "₹2200",
            availability: "Available",
            status: "active"
        },
        {
            id: "TM-R007",
            name: "Mahindra XUV500",
            category: "Car",
            fuelType: "Diesel",
            transmission: "Manual",
            pricePerDay: "₹2800",
            availability: "Available",
            status: "active"
        },
        {
            id: "TM-R008",
            name: "Tata Nexon",
            category: "Car",
            fuelType: "Electric",
            transmission: "Automatic",
            pricePerDay: "₹1900",
            availability: "Available",
            status: "active"
        }
    ];

    const serviceVehicleData = [
        {
            bookingId: "SV-001",
            customerName: "Sathiya",
            vehicleType: "Maruti Swift",
            serviceType: "General Service",
            dateTime: "18-Jun-2025, 10:00 AM",
            status: "Scheduled",
            assignedTechnician: "Harish"
        },
        {
            bookingId: "SV-002",
            customerName: "Sheik",
            vehicleType: "Maruti Swift",
            serviceType: "General Service",
            dateTime: "18-Jun-2025, 10:00 AM",
            status: "In Progress",
            assignedTechnician: "Sekar"
        },
        {
            bookingId: "SV-003",
            customerName: "Abi",
            vehicleType: "Maruti Swift",
            serviceType: "General Service",
            dateTime: "18-Jun-2025, 10:00 AM",
            status: "Completed",
            assignedTechnician: "Rakesh"
        },
        {
            bookingId: "SV-004",
            customerName: "Santhosh",
            vehicleType: "Maruti Swift",
            serviceType: "General Service",
            dateTime: "18-Jun-2025, 10:00 AM",
            status: "Completed",
            assignedTechnician: "Nandha"
        },
        {
            bookingId: "SV-005",
            customerName: "Bala",
            vehicleType: "Maruti Swift",
            serviceType: "General Service",
            dateTime: "18-Jun-2025, 10:00 AM",
            status: "In Progress",
            assignedTechnician: "Guna"
        },
        {
            bookingId: "SV-006",
            customerName: "Mohan",
            vehicleType: "Maruti Swift",
            serviceType: "General Service",
            dateTime: "18-Jun-2025, 10:00 AM",
            status: "Scheduled",
            assignedTechnician: "Sathish"
        }
    ];

    const profileData = {
        personal: {
            name: "Sri Varshini",
            email: "srivarshini@sgsapp.in",
            phone: "+91 62986 72196",
            address: "14, Crosscut Road, Coimbatore"
        },
        ui: {
            isEditMode: false,
            currentSection: "profile-info"
        }
    };

    // Initialize user profile
    function initializeUserProfile() {
        $('#user-identifier').text(userProfile.id);
        $('#account-status').text(userProfile.status);
    }

    // Generate vehicle card HTML
    function generateVehicleCard(vehicle) {
        return `
            <div class="vehicle-card" data-vehicle-id="${vehicle.id}">
                <div class="vehicle-details">
                    <div class="vehicle-image">
                        <img src="assets/image/car-mylistingspage.png" alt="car-mylistingsimage" style="margin-right:50px;">
                    </div>
                    
                    <div class="vehicle-info">
                        <h3 class="vehicle-name">${vehicle.name}</h3>
                        <div class="vehicle-specs">
                            <div class="spec-item">
                                <img src="assets/icon/petrol-icon.png" alt="petrol-icon" style="width:22px; height:22px; margin-bottom:6px;">
                                <span>${vehicle.type}</span>
                            </div>
                            <div class="spec-item">
                               <img src="assets/icon/manual-transmission-icon 1.png" alt="transmission-icon" style="width:22px; height:22px;">
                                <span>${vehicle.transmission}</span>
                            </div>
                            <div class="spec-item">
                                <img src="assets/icon/car-seat-icon 1.png" alt="seat-icon" style="width:22px; height:22px; margin-left:10px;">
                                <span>${vehicle.seats}</span>
                            </div>
                        </div>
                        
                        <div class="listing-id" style="margin-top:-10px;">Listing ID: [#${vehicle.id}]</div>
                        <div class="vehicle-flex d-flex gap-3">
                            <div class="vehicle-price">Price: ${vehicle.price}</div>
                            <span class="status-badge">${vehicle.status}</span>
                        </div>
                        
                        <div class="action-buttons">
                            <button class="btn-edit mt-3" data-action="edit" data-vehicle-id="${vehicle.id}">
                                Edit Listing
                            </button>
                            <button class="btn-sold mt-3" data-action="mark-sold" data-vehicle-id="${vehicle.id}">
                                Mark as Sold
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }

    // Generate the My Listings panel HTML
    function generateListingsPanel() {
        return `
            <div class="listings-panel">
                <div class="listings-header">
                    <h2 class="listings-title">My Listings (For Sellers)</h2>
                    <p class="listings-subtitle">
                        Manage all your vehicle listings in one place.<br>
                        Track your active, pending, or sold vehicles, update details, respond to buyer enquiries, and keep your sales moving smoothly.
                    </p>

                    <div class="tab-navigation">
                        <button id="tab-active-listings" class="nav-tab active" data-tab="active">Active Listings</button>
                        <button id="tab-pending-listings" class="nav-tab" data-tab="pending">Pending Listings</button>
                        <button id="tab-sold-vehicles" class="nav-tab" data-tab="sold">Sold Vehicles</button>
                        <button id="tab-buyer-enquiries" class="nav-tab" data-tab="enquiries">Buyer Enquiries</button>
                    </div>
                    <hr class="tab-navigation-hr">
                </div>

                <div class="listings-content">
                    <div id="vehicle-listings-container">
                    </div>
                </div>
            </div>
        `;
    }

    // Render vehicle listings based on active tab
    function renderVehicleListings(category) {
        category = category || 'active';
        const filteredVehicles = vehicleListings.filter(vehicle => vehicle.category === category);
        const container = $('#vehicle-listings-container');
        
        if (filteredVehicles.length === 0) {
            container.html(`
                <div class="text-center py-5">
                    <i class="fas fa-car fa-3x text-muted mb-3"></i>
                    <h4 class="text-muted">No ${category} listings found</h4>
                    <p class="text-muted">Your ${category} vehicle listings will appear here.</p>
                </div>
            `);
        } else {
            const vehicleCards = filteredVehicles.map(vehicle => generateVehicleCard(vehicle)).join('');
            container.html(vehicleCards);
        }
    }

    // Function to create booking card HTML
    function createBookingCard(booking) {
        const statusClass = booking.status === 'confirmed' ? 'status-confirmed' : 
                          booking.status === 'completed' ? 'status-completed' : 'status-cancelled';
        
        return `
            <div class="booking-card-v2">
                <div class="booking-row">
                    <div class="car-image-section">
                        <img src="assets/image/mybookings(rental)-img.png" class="car-image-v2" style="width: 150px; height:150px; padding:0px;">
                    </div>
                    
                    <div class="car-details-section">
                        <h5 class="car-name-v2">${booking.carName}</h5>
                        
                        <div class="car-specs-row">
                            <div class="spec-item-v2">
                                 <img src="assets/icon/petrol-icon.png" alt="petrol-icon" style="width:22px; height:22px; margin-bottom:6px;">
                                <span>${booking.fuel}</span>
                            </div>
                            <div class="spec-item-v2">
                                <img src="assets/icon/manual-transmission-icon 1.png" alt="transmission-icon" style="width:22px; height:22px;">
                                <span>${booking.transmission}</span>
                            </div>
                            <div class="spec-item-v2">
                                <img src="assets/icon/car-seat-icon 1.png" alt="seat-icon" style="width:22px; height:22px;">
                                <span>${booking.seats}</span>
                            </div>
                        </div>
                        
                        <div class="distance-info-v2">
                            <div>${booking.distance}</div>
                            <div>${booking.extraKms}</div>
                        </div>
                        
                        <div class="total-amount-v2">
                            <span class="total-label-v2">Total</span>
                            <span class="total-price-v2">${booking.totalAmount}</span>
                        </div>
                    </div>
                    
                    <div class="location-pin-section">
                       <img src="assets/icon/location (2).png" alt="location" style="width:18px; height:20px;">
                        <div class="location-name-v2">${booking.location}</div>
                    </div>
                    
                    <div class="booking-info-section">
                        <div class="booking-id-section">
                            <span class="booking-id-label">Booking ID:</span>
                            <a href="#" class="booking-id-link-v2">${booking.id}</a>
                        </div>
                        
                        <div class="dates-section">
                            <div class="date-column">
                                <div class="date-header">Start Date</div>
                                <div class="date-info">
                                    <div class="date-value-v2">${booking.startDate}</div>
                                    <div class="time-value-v2">${booking.startTime}</div>
                                    <div class="address-short">${booking.pickupLocation.split(',')[0]}, ${booking.pickupLocation.split(',')[1]}</div>
                                </div>
                            </div>
                            
                            <div class="date-column">
                                <div class="date-header">End Date</div>
                                <div class="date-info">
                                    <div class="date-value-v2">${booking.endDate}</div>
                                    <div class="time-value-v2">${booking.endTime}</div>
                                    <div class="address-short">${booking.dropLocation.split(',')[0]}, ${booking.dropLocation.split(',')[1]}</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="status-section">
                            <span class="booking-status-v2 ${statusClass}">${booking.status.charAt(0).toUpperCase() + booking.status.slice(1)}</span>
                            <a href="#" class="view-details-link-v2">View Full Detail.....</a>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }

    // Function to load bookings for a specific tab
    function loadBookings(type) {
        const container = $(`#${type}-bookings`);
        const bookings = bookingsData[type] || [];
        
        if (bookings.length === 0) {
            container.html('<p class="text-muted text-center py-4">No bookings found.</p>');
            return;
        }
        
        let html = '';
        bookings.forEach(booking => {
            html += createBookingCard(booking);
        });
        
        container.html(html);
    }

    // Generate Profile Information panel HTML
    function generateProfilePanel() {
        return `
            <div class="container-fluid">
                <div class="profile-container">
                    <h1 class="page-title fw-bold ms-3">Profile Information</h1>
                    
                    <div class="basic-details-card">
                        <div class="card-header-custom">
                            <h3 class="card-title">Basic Details</h3>
                            <button class="edit-button" id="edit-button">
                                <img src="assets/icon/edit icon.png" alt="edit-icon" style="width:15px; height:15px;">
                                <span>Edit</span>
                            </button>
                        </div>
                        
                        <div class="card-body-custom">
                            <div class="detail-row">
                                <span class="detail-label">Name</span>
                                <span class="detail-value" id="display-name">Sri Varshini</span>
                            </div>
                            
                            <div class="detail-row">
                                <span class="detail-label">Mail Id</span>
                                <span class="detail-value" id="display-email">srivarshinisgs@app.in</span>
                            </div>
                            
                            <div class="detail-row">
                                <span class="detail-label">Mobile Number</span>
                                <span class="detail-value" id="display-phone">+91 98765 43210</span>
                            </div>
                            
                            <div class="detail-row">
                                <span class="detail-label">Address</span>
                                <span class="detail-value" id="display-address">Coimbatore</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="image-upload-section">
                        <div class="upload-icon">
                           <img src="assets/icon/image-upload.png" alt="image-icon">
                        </div>
                        <div class="upload-text">Drag and Drop your image here</div>
                        <div class="upload-subtitle">Maximum 5 MB file size</div>
                        <button class="btn upload-button" id="upload-button">
                            Upload Image
                        </button>
                        <input type="file" id="file-input" accept="image/*" style="display: none;">
                    </div>
                </div>
            </div>                
        `;
    }

    // Generate My Bookings panel HTML
    function generateBookingsPanel() {
        return `
            <div class="bookings-panel" style="background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                <div class="p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <h4 class="fw-bold mb-1">My Booking</h4>
                            <p class="text-muted mb-0">Track and manage all your vehicle bookings in one place.</p>
                            <p class="text-muted small mb-0">View upcoming trips, past rides, payment status, and booking details – anytime, anywhere.</p>
                        </div>
                    </div>

                    <ul class="nav nav-tabs booking-tabs mb-4" id="bookingTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="upcoming-tab" data-bs-toggle="tab" data-bs-target="#upcoming" type="button">Upcoming Bookings</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="past-tab" data-bs-toggle="tab" data-bs-target="#past" type="button">Past Booking</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="cancelled-tab" data-bs-toggle="tab" data-bs-target="#cancelled" type="button">Cancelled Booking</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="bookingContent">
                        <div class="tab-pane fade show active" id="upcoming" role="tabpanel">
                            <div id="upcoming-bookings"></div>
                        </div>
                        <div class="tab-pane fade" id="past" role="tabpanel">
                            <div id="past-bookings"></div>
                        </div>
                        <div class="tab-pane fade" id="cancelled" role="tabpanel">
                            <div id="cancelled-bookings"></div>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }

    // Generate Notifications panel
    function generateNotificationsPanel() {
        return `
            <div class="notifications-panel" style="background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); padding: 2rem;">
                <div class="notifications-header" style="margin-bottom: 2rem;">
                    <h2 style="font-size: 1.5rem; font-weight: 700; color: #000; margin-bottom: 0.6rem;">Notification & Alerts</h2>
                    <p style="color: #000; font-size: 16px; margin-bottom: 10px; line-height: 1.5; font-weight:400;">Stay updated, stay informed.</p>
                    <p style="color: #000; font-size: 16px; margin-bottom: 0; line-height: 1.5; font-weight:400;">Get important updates about your bookings, listings, offers, and account activity – all in one place.</p>
                </div>

                <div class="notification-section container-md rounded-4" style="margin-bottom: 2rem; background-color:#F8F8F8;">
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: #000; margin-bottom: 1rem;">Booking Updates</h4>
                    
                    <div class="notification-item" style="display: flex; align-items: center; justify-content: space-between; padding: 0.75rem 0; border-bottom: 1px none #f0f0f0;">
                        <div class="notification-content">
                            <div style="font-size: 16px; color: #000; font-weight:400;">• Receive alerts about upcoming bookings, pick-up & drop-off reminders, changes, or cancellations.</div>
                        </div>
                        <div class="toggle-switch">
                            <label class="switch" style="position: relative; display: inline-block; width: 50px; height: 24px;">
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="notification-item" style="display: flex; align-items: center; justify-content: space-between; padding: 0.75rem 0; border-bottom: 1px none #f0f0f0;">
                        <div class="notification-content">
                            <div style="font-size: 16px; color: #000; font-weight:400;">• Get payment confirmations and invoice updates instantly.</div>
                        </div>
                    </div>
                </div>

                <div class="notification-section container-md rounded-4" style="margin-bottom: 2rem; background-color:#F8F8F8;">
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: #000; margin-bottom: 1rem;">Seller Alerts</h4>
                    
                    <div class="notification-item" style="display: flex; align-items: center; justify-content: space-between; padding: 0.75rem 0; border-bottom: 1px none #f0f0f0;">
                        <div class="notification-content">
                            <div style="font-size: 16px; color: #000; font-weight:400;">• Stay notified when you receive a new buyer enquiry.</div>
                        </div>
                    </div>
                    
                    <div class="notification-item" style="display: flex; align-items: center; justify-content: space-between; padding: 0.75rem 0; border-bottom: 1px none #f0f0f0;">
                        <div class="notification-content">
                            <div style="font-size: 16px; color: #000; font-weight:400;">• Get status updates on your vehicle listings (approved, pending, or sold).</div>
                        </div>
                        <div class="toggle-switch">
                            <label class="switch" style="position: relative; display: inline-block; width: 50px; height: 24px;">
                                <input type="checkbox" checked style="opacity: 0; width: 0; height: 0;">
                                <span class="slider" style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #742B88; transition: .4s; border-radius: 24px;"></span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="notification-item" style="display: flex; align-items: center; justify-content: space-between; padding: 0.75rem 0; border-bottom: 1px none #f0f0f0;">
                        <div class="notification-content">
                            <div style="font-size: 16px; color: #000; font-weight:400;">• Track messages and negotiations easily.</div>
                        </div>
                    </div>
                </div>

                <div class="notification-section container-md rounded-4" style="margin-bottom: 2rem; background-color:#F8F8F8;">
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: #000; margin-bottom: 1rem;">Offers & Promotions</h4>
                    
                    <div class="notification-item" style="display: flex; align-items: center; justify-content: space-between; padding: 0.75rem 0; border-bottom: 1px none #f0f0f0;">
                        <div class="notification-content">
                            <div style="font-size: 16px; color: #000; font-weight:400;">• Get exclusive deals, discount codes, and seasonal offers.</div>
                        </div>
                        <div class="toggle-switch">
                            <label class="switch" style="position: relative; display: inline-block; width: 50px; height: 24px;">
                                <input type="checkbox" checked style="opacity: 0; width: 0; height: 0;">
                                <span class="slider" style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #742B88; transition: .4s; border-radius: 24px;"></span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="notification-item" style="display: flex; align-items: center; justify-content: space-between; padding: 0.75rem 0; border-bottom: 1px none #f0f0f0;">
                        <div class="notification-content">
                            <div style="font-size: 16px; color: #000; font-weight:400;">• Be the first to know about new launches or new services.</div>
                        </div>
                    </div>
                </div>

                <div class="notification-section container-md rounded-4" style="background-color:#F8F8F8;">
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: #000; margin-bottom: 1rem;">Account & Security Alerts</h4>
                    
                    <div class="notification-item" style="display: flex; align-items: center; justify-content: space-between; padding: 0.75rem 0; border-bottom: 1px none #f0f0f0;">
                        <div class="notification-content">
                            <div style="font-size: 16px; color: #000; font-weight:400;">• Receive login notifications for unusual activity.</div>
                        </div>
                    </div>
                    
                    <div class="notification-item" style="display: flex; align-items: center; justify-content: space-between; padding: 0.75rem 0; border-bottom: 1px none #f0f0f0;">
                        <div class="notification-content">
                            <div style="font-size: 16px; color: #000; font-weight:400;">• Get alerts for password changes or profile updates.</div>
                        </div>
                        <div class="toggle-switch">
                            <label class="switch" style="position: relative; display: inline-block; width: 50px; height: 24px;">
                                <input type="checkbox" checked style="opacity: 0; width: 0; height: 0;">
                                <span class="slider" style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #742B88; transition: .4s; border-radius: 24px;"></span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="notification-item" style="display: flex; align-items: center; justify-content: space-between; padding: 0.75rem 0;">
                        <div class="notification-content">
                            <div style="font-size: 16px; color: #000; font-weight:400;">• Stay informed about policy changes or important announcements.</div>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }

    // Generate Support panel
    function generateSupportPanel() {
        return `
            <div class="support-panel" style="background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); padding: 2rem;">
                <div class="support-header" style="margin-bottom: 2rem;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #000; margin-bottom: 0.5rem;">Help & Support – True Motors</h2>
                    <p style="color: #000; font-size: 16px; margin-bottom: 10px; line-height: 1.5; font-weight: 400;">We're here to help you every step of the way.</p>
                    <p style="color: #000; font-size: 16px; margin-bottom: 0; line-height: 1.5;">Got questions, issues, or feedback? Find answers quickly or connect with our support team for personalized assistance.</p>
                </div>

                <div class="support-section" style="margin-bottom: 2.5rem;">
                    <h4 style="font-size: 1.2rem; font-weight: 400; color: #000; margin-bottom: 1rem;">Call Us Directly</h4>
                    
                    <div style="margin-bottom: 1rem;">
                        <p style="color: #000; font-size: 16px; margin-bottom: 0.5rem;">• Speak with our customer care team for urgent help.</p>
                        <div style="display: flex; align-items: center; margin-bottom: 0.5rem;">
                            <div>• </div>
                            <img src="assets/icon/phone-icon.png" alt="phone-icon" style="width:25px; height:25px;">
                            <span style="font-weight: 400; color: #000; font-size: 16px;">Customer Support: +91-90873-90873</span>
                        </div>
                        <p style="color: #000; font-size: 16px; margin: 0;">• Available 9 AM – 9 PM IST</p>
                    </div>
                </div>

                <div class="support-section" style="margin-bottom: 2.5rem;">
                    <h4 style="font-size: 1.2rem; font-weight: 400; color: #000; margin-bottom: 1rem;">Email Support</h4>
                    
                    <div style="margin-bottom: 1rem;">
                        <p style="color: #000; font-size: 16px; margin-bottom: 0.5rem;">• For detailed queries or document submissions.</p>
                        <div style="display: flex; align-items: center; margin-bottom: 0.5rem;">
                            <div>• </div>
                            <img src="assets/icon/emailenvelope-icon.png" alt="email-icon" style="width:25px; height:18px;">
                            <a href="mailto:support@truemotors.com" style="font-weight: 400; color: #000; text-decoration: none;">support@truemotors.com</a>
                        </div>
                    </div>
                </div>

                <div class="support-section">
                    <h4 style="font-size: 1.2rem; font-weight: 400; color: #000; margin-bottom: 1rem;">Feedback & Suggestions</h4>
                    <p style="color: #000; font-size: 16px; margin-bottom: 1.5rem; font-weight: 400;">Share your feedback to help us improve your TrueMotors experience.</p>
                    
                    <div class="feedback-form">
                        <textarea 
                            id="feedback-textarea" 
                            placeholder="Type your feedback here..."
                            style="width: 100%; min-height: 150px; padding: 1rem; border: 2px solid #e9ecef; border-radius: 10px; font-size: 14px; font-family: 'Poppins', sans-serif; resize: vertical; margin-bottom: 1rem; transition: border-color 0.3s ease;"
                            onfocus="this.style.borderColor='#742B88'"
                            onblur="this.style.borderColor='#e9ecef'"
                        ></textarea>
                        
                        <button 
                            id="submit-feedback-btn"
                            style="background: #742B88; color: white; border: none; padding: 0.75rem 2rem; border-radius: 25px; font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 2px 10px rgba(116, 43, 136, 0.3); margin-left:52rem;"
                            onmouseover="this.style.background='#5a1f6b'; this.style.boxShadow='0 4px 15px rgba(116, 43, 136, 0.4)'"
                            onmouseout="this.style.background='#742B88'; this.style.boxShadow='0 2px 10px rgba(116, 43, 136, 0.3)'"
                        >
                            Submit a Feedback
                        </button>
                    </div>
                </div>
            </div>

        `;
    }

    // Generate Security panel
    function generateSecurityPanel() {
        return `
            <div class="security-panel" style="background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); padding: 2rem;">
                <div class="security-header" style="margin-bottom: 2rem;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #000; margin-bottom: 0.5rem;">Security & Settings – TrueMotors</h2>
                    <p style="color: #000; font-size: 16px; margin-bottom: 10px; line-height: 1.5; font-weight: 400;">Stay private and identity-secured.</p>
                    <p style="color: #000; font-size: 16px; margin-bottom: 0; line-height: 1.5; font-weight: 400;">Manage your account security, privacy settings, and personal preferences – all in one place.</p>
                </div>

                <div class="settings-menu">
                    <div class="settings-item-container" style="margin-bottom: 0.5rem;">
                        <div class="settings-item" data-action="change-mobile" style="display: flex; justify-content: space-between; align-items: center; padding: 1.2rem 1.5rem; background: #F8F8F8; border-radius: 12px; cursor: pointer; transition: all 0.3s ease;">
                            <div class="settings-item-content">
                                <h5 style="font-size: 1rem; font-weight: 600; color: #000; margin-bottom: 0;">Change Mobile Number</h5>
                            </div>
                            <div class="settings-item-arrow">
                                <i class="fas fa-chevron-right dropdown-arrow" style="color: #742B88; font-size: 0.9rem; transition: transform 0.3s ease;"></i>
                            </div>
                        </div>
                        <div class="settings-dropdown" style="display: none; background: white; border: 1px solid #e0e0e0; border-radius: 0 0 12px 12px; padding: 1.5rem; margin-top: -12px; border-top: none; text-align:center;">
                            <h2 style="color: #000; margin-bottom: 0.3rem; font-size: 1.3rem; font-weight:400;">Forgot Password</h2>
                            <div style="margin-top: 5px;">
                                <p>No worries, we'll send you reset instructions.</p>
                            </div>
                            <div style="margin-bottom: 1rem;">
                                <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; font-size: 1.2rem;">Mobile Number or Mail</label>
                                <input type="text" id="new-mobile" placeholder="Enter your mobile number or mail" style="width: 500px; height:50px; padding: 0.75rem; border: 1px solid #742B88; background: #f8f9fa; font-size: 0.9rem;">
                            </div>
                    
                            <div style="text-align: right;">
                                <button class="security-action-btn" data-action="send-otp" style="background: #742B88; color: white; border: none; padding: 0.75rem 1.5rem; border-radius: 8px; cursor: pointer; font-weight: 600; font-size: 0.9rem;">Send OTP</button>
                            </div>
                        </div>
                    </div>

                    <div class="settings-item-container" style="margin-bottom: 0.5rem;">
                        <div class="settings-item" data-action="two-factor" style="display: flex; justify-content: space-between; align-items: center; padding: 1.2rem 1.5rem; background: #F8F8F8; border-radius: 12px; cursor: pointer; transition: all 0.3s ease;">
                            <div class="settings-item-content">
                                <h5 style="font-size: 1rem; font-weight: 600; color: #000; margin-bottom: 0;">Two Factor Authentication</h5>
                            </div>
                            <div class="settings-item-arrow">
                                <i class="fas fa-chevron-right dropdown-arrow" style="color: #742B88; font-size: 0.9rem; transition: transform 0.3s ease;"></i>
                            </div>
                        </div>
                        <div class="settings-dropdown" style="display: none; background: white; border: 1px solid #e0e0e0; border-radius: 0 0 12px 12px; padding: 1.5rem; margin-top: -12px; border-top: none;">
                            <p style="color: #666; margin-bottom: 1.5rem; font-size: 0.9rem;">Add an extra layer of security to your account with two-factor authentication.</p>
                            <div style="display: flex; justify-content: space-between; align-items: center; padding: 1rem; background: #f8f9fa; border-radius: 8px; margin-bottom: 1rem;">
                                <div>
                                    <h6 style="margin: 0; font-weight: 600; font-size: 0.9rem;">SMS Authentication</h6>
                                    <small style="color: #666; font-size: 0.8rem;">Receive codes via SMS</small>
                                </div>
                                <label class="switch" style="position: relative; display: inline-block; width: 50px; height: 24px;">
                                    <input type="checkbox" style="opacity: 0; width: 0; height: 0;">
                                    <span class="slider" style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #ccc; transition: .4s; border-radius: 24px;"></span>
                                </label>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: center; padding: 1rem; background: #f8f9fa; border-radius: 8px; margin-bottom: 1.5rem;">
                                <div>
                                    <h6 style="margin: 0; font-weight: 600; font-size: 0.9rem;">Email Authentication</h6>
                                    <small style="color: #666; font-size: 0.8rem;">Receive codes via email</small>
                                </div>
                                <label class="switch" style="position: relative; display: inline-block; width: 50px; height: 24px;">
                                    <input type="checkbox" style="opacity: 0; width: 0; height: 0;">
                                    <span class="slider" style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #ccc; transition: .4s; border-radius: 24px;"></span>
                                </label>
                            </div>
                            <div style="text-align: right;">
                                <button class="security-action-btn" data-action="save-2fa" style="background: #742B88; color: white; border: none; padding: 0.75rem 1.5rem; border-radius: 8px; cursor: pointer; font-weight: 600; font-size: 0.9rem;">Save Changes</button>
                            </div>
                        </div>
                    </div>

                    <div class="settings-item-container" style="margin-bottom: 0.5rem;">
                        <div class="settings-item" data-action="privacy-setting" style="display: flex; justify-content: space-between; align-items: center; padding: 1.2rem 1.5rem; background: #F8F8F8; border-radius: 12px; cursor: pointer; transition: all 0.3s ease;">
                            <div class="settings-item-content">
                                <h5 style="font-size: 1rem; font-weight: 600; color: #000; margin-bottom: 0;">Privacy Setting</h5>
                            </div>
                            <div class="settings-item-arrow">
                                <i class="fas fa-chevron-right dropdown-arrow" style="color: #742B88; font-size: 0.9rem; transition: transform 0.3s ease;"></i>
                            </div>
                        </div>
                        <div class="settings-dropdown" style="display: none; background: white; border: 1px solid #e0e0e0; border-radius: 0 0 12px 12px; padding: 1.5rem; margin-top: -12px; border-top: none;">
                            <p style="color: #666; margin-bottom: 1.5rem; font-size: 0.9rem;">Control your privacy and data sharing preferences.</p>
                            <div style="display: flex; justify-content: space-between; align-items: center; padding: 1rem; background: #f8f9fa; border-radius: 8px; margin-bottom: 1rem;">
                                <div>
                                    <h6 style="margin: 0; font-weight: 600; font-size: 0.9rem;">Profile Visibility</h6>
                                    <small style="color: #666; font-size: 0.8rem;">Make your profile visible to other users</small>
                                </div>
                                <label class="switch" style="position: relative; display: inline-block; width: 50px; height: 24px;">
                                    <input type="checkbox" checked style="opacity: 0; width: 0; height: 0;">
                                    <span class="slider" style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #742B88; transition: .4s; border-radius: 24px;"></span>
                                </label>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: center; padding: 1rem; background: #f8f9fa; border-radius: 8px; margin-bottom: 1rem;">
                                <div>
                                    <h6 style="margin: 0; font-weight: 600; font-size: 0.9rem;">Contact Information Sharing</h6>
                                    <small style="color: #666; font-size: 0.8rem;">Allow sellers/buyers to see your contact details</small>
                                </div>
                                <label class="switch" style="position: relative; display: inline-block; width: 50px; height: 24px;">
                                    <input type="checkbox" checked style="opacity: 0; width: 0; height: 0;">
                                    <span class="slider" style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #742B88; transition: .4s; border-radius: 24px;"></span>
                                </label>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: center; padding: 1rem; background: #f8f9fa; border-radius: 8px; margin-bottom: 1.5rem;">
                                <div>
                                    <h6 style="margin: 0; font-weight: 600; font-size: 0.9rem;">Activity Status</h6>
                                    <small style="color: #666; font-size: 0.8rem;">Show when you're online or recently active</small>
                                </div>
                                <label class="switch" style="position: relative; display: inline-block; width: 50px; height: 24px;">
                                    <input type="checkbox" style="opacity: 0; width: 0; height: 0;">
                                    <span class="slider" style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #ccc; transition: .4s; border-radius: 24px;"></span>
                                </label>
                            </div>
                            <div style="text-align: right;">
                                <button class="security-action-btn" data-action="save-privacy" style="background: #742B88; color: white; border: none; padding: 0.75rem 1.5rem; border-radius: 8px; cursor: pointer; font-weight: 600; font-size: 0.9rem;">Save Settings</button>
                            </div>
                        </div>
                    </div>

                    <div class="settings-item-container" style="margin-bottom: 0.5rem;">
                        <div class="settings-item" data-action="delete-account" style="display: flex; justify-content: space-between; align-items: center; padding: 1.2rem 1.5rem; background: #F8F8F8; border-radius: 12px; cursor: pointer; transition: all 0.3s ease;">
                            <div class="settings-item-content">
                                <h5 style="font-size: 1rem; font-weight: 600; color: #000; margin-bottom: 0;">Delete Account</h5>
                            </div>
                            <div class="settings-item-arrow">
                                <i class="fas fa-chevron-right dropdown-arrow" style="color: #742B88; font-size: 0.9rem; transition: transform 0.3s ease;"></i>
                            </div>
                        </div>
                        <div class="settings-dropdown" style="display: none; background: white; border: 1px solid #e0e0e0; border-radius: 0 0 12px 12px; padding: 1.5rem; margin-top: -12px; border-top: none;">
                            <div style="text-align: center; margin-bottom: 1.5rem;">
                                <i class="fas fa-exclamation-triangle" style="font-size: 2.5rem; color: #dc3545; margin-bottom: 1rem;"></i>
                                <h5 style="color: #dc3545; margin-bottom: 0.5rem; font-size: 1.1rem;">Warning: This action cannot be undone!</h5>
                            </div>
                            <p style="color: #666; margin-bottom: 1rem; font-size: 0.9rem;">Deleting your account will:</p>
                            <ul style="color: #666; margin-bottom: 1.5rem; padding-left: 1.5rem; font-size: 0.9rem;">
                                <li>Permanently remove all your data</li>
                                <li>Cancel all active bookings and listings</li>
                                <li>Remove access to your account history</li>
                                <li>Delete all saved vehicles and preferences</li>
                            </ul>
                            <div style="margin-bottom: 1.5rem;">
                                <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; font-size: 0.9rem;">Type "DELETE" to confirm:</label>
                                <input type="text" id="delete-confirmation" placeholder="Type DELETE here" style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 8px; font-size: 0.9rem;">
                            </div>
                            <div style="text-align: right;">
                                <button class="security-action-btn" data-action="confirm-delete" style="background: #dc3545; color: white; border: none; padding: 0.75rem 1.5rem; border-radius: 8px; cursor: pointer; font-weight: 600; font-size: 0.9rem;">Delete Account</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }

    // Generate Saved Vehicles panel
    function generateSavedVehiclesPanel() {
        return `
            <div class="saved-vehicles-panel" style="background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); padding: 2rem;">
                <div class="saved-vehicles-header" style="margin-bottom: 2rem;">
                    <h1 style="font-size: 2rem; font-weight: 700; color: #333; margin-bottom: 0.5rem;">Saved Vehicles</h1>
                    <p style="color: #666; font-size: 1rem; line-height: 1.6; margin-bottom: 0.5rem;">Your saved cars, all in one place!</p>
                    <p style="color: #666; font-size: 1rem; line-height: 1.6; margin-bottom: 1rem;">Easily keep track of the vehicles you love. Compare, revisit, and book when you're ready – hassle-free.</p>
                    
                    <div class="saved-vehicles-tab">
                        Saved Vehicles
                    </div>
                </div>

                <div class="saved-vehicles-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
                    ${savedVehiclesData.map(vehicle => createSavedVehicleCard(vehicle)).join('')}
                </div>
            </div>
        `;
    }

    // Create saved vehicle card
    function createSavedVehicleCard(vehicle) {
        return `
            <div class="saved-vehicle-card" data-vehicle-id="${vehicle.id}" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: transform 0.3s ease, box-shadow 0.3s ease; position: relative;">
                <div class="heart-icon" style="position: absolute; top: 1rem; right:-25px; z-index: 2; cursor: pointer;">
                    <img src="assets/icon/like-icon.png" alt="like-icon" class="w-25 h-25 ms-2">
                </div>
                
                <div class="vehicle-image-container" style="position: relative; height: 180px; overflow: hidden;">
                    <div style="position: absolute; top: 0; left: 0; width: 40px; height: 40px; background: #1e40af; border-radius: 0 0 100% 0; z-index: 1;"></div>
                    <img src="assets/image/Maruti-Suzuki-New-Swift.png" alt="saved-vehicle-image" style="width:250px; height:150px; margin-top:20px; margin-left:30px;">
                </div>
                
                <div class="vehicle-details-save" style="padding: 15px;">
                    <h5 style="font-weight: 400; color: #2101AF; margin-bottom: 0.5rem; font-size: 1rem;">${vehicle.title}</h5>
                    <p style="color: #000; font-size: 0.9rem; margin-bottom: 0.5rem;">${vehicle.km} km | ${vehicle.fuel} | ${vehicle.transmission}</p>
                    
                    <div style="color: #040084; font-weight: 400; font-size: 1.2rem; margin-bottom: 0.5rem;">${vehicle.price}</div>
                    
                    <div style="display:flex;">
                        <div style="color: #040084; font-size: 0.9rem; margin-bottom: 1rem; border:none; box-shadow:none;">
                            EMI ${vehicle.emi}
                        </div>

                        <div style="display: flex; border:none; box-shadow:none; align-items: center; gap: 0.3rem; color: #3C3C3C; font-size: 0.9rem; margin-bottom: 1rem; margin-left:40px;">
                            <img src="assets/icon/location.png" alt="location-icon" style="width:18px; height:18px;">
                            <span>${vehicle.location}</span>
                        </div>
                    </div>
                    
                    <div style="width:100%; text-align:center; margin-top:1rem;">
                        <hr style="border: none; border-top: 2px dashed #555; margin-bottom:0.75rem;">
                        <button class="view-seller-btn" data-vehicle-id="${vehicle.id}" 
                            style="background: none; border: none; box-shadow:none; color: purple; font-weight: 600; cursor: pointer; transition: all 0.3s ease; font-size: 0.95rem;">
                            View Seller Details 
                            <img src="assets/icon/rightslideicon.png" alt="rightslide-icon" style="width:18px; height:18px;">
                        </button>
                    </div>
                </div>
            </div>
        `;
    }

    // Generate Rental Management Panel
    function generateRentalManagementPanel() {
        return `
            <div class="rental-management-panel" style="background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); padding: 2rem;">
                <div class="rental-header" style="display: flex; justify-content: between; align-items: flex-start; margin-bottom: 2rem; gap: 1rem; flex-wrap: wrap;">
                    <div class="rental-title-section" style="flex: 1; min-width: 300px;">
                        <h1 style="font-size: 1.8rem; font-weight: 700; color: #333; margin-bottom: 0.5rem;">My Listings ( For Rental Vehicle)</h1>
                        <p style="color: #666; margin-bottom: 1rem; line-height: 1.5;">View, add, edit, or remove rental vehicles easily to keep your listings up to date.</p>
                    </div>
                    <div class="rental-actions" style="display: flex; gap: 1rem; align-items: center; flex-wrap: wrap;">
                        <div class="rental-nav" style="display: flex; align-items: center; gap: 0.5rem; color: #666; font-size: 0.9rem;">
                            <span>To Rental</span>
                            <img src="assets/icon/nextbar-icon.png" alt="rightbar-icon" style="width:11px; height:11px;">
                        </div>
                        <button class="add-vehicle-btn" style="background: #742B88; color: white; border: none; padding: 0.75rem 1.5rem; border-radius: 8px; cursor: pointer; font-weight: 600; font-size: 0.9rem; display: flex; align-items: center; gap: 0.5rem; white-space: nowrap;">
                            + Add Vehicle
                        </button>
                        <button class="filter-btn" style="background: white; color: #742B88; border: 1px solid #742B88; padding: 0.75rem 1.5rem; border-radius: 8px; cursor: pointer; font-weight: 600; font-size: 0.9rem; white-space: nowrap;">
                            Filter ▼
                        </button>
                    </div>
                </div>

                <div class="rental-tabs mb-5">
                    <button class="rental-tab active" data-tab="active">
                        Active Listings
                    </button>
                    <button class="rental-tab" data-tab="bookings">
                        Bookings Management
                    </button>
                    <button class="rental-tab" data-tab="owner">
                        Owner Management
                    </button>
                    <button class="rental-tab" data-tab="payments">
                        Payments & Refunds
                    </button>
                    <button class="rental-tab" data-tab="reviews">
                        Customer Reviews Panel
                    </button>
                </div>
                <hr class="rental-tab-hr">

                <div class="rental-table-container" style="background: white; border-radius: 12px; overflow: hidden; border: 1px solid #e0e0e0;">
                    <table class="rental-table" style="width: 100%; border-collapse: collapse;">
                        <thead style="background: #f8f9fa; border-bottom: 2px solid #e0e0e0;">
                            <tr>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #333; font-size: 0.9rem; border-right: 1px solid #e0e0e0;">Vehicle ID</th>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #333; font-size: 0.9rem; border-right: 1px solid #e0e0e0;">Vehicle Name</th>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #333; font-size: 0.9rem; border-right: 1px solid #e0e0e0;">Category</th>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #333; font-size: 0.9rem; border-right: 1px solid #e0e0e0;">Fuel Type</th>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #333; font-size: 0.9rem; border-right: 1px solid #e0e0e0;">Transmission</th>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #333; font-size: 0.9rem; border-right: 1px solid #e0e0e0;">Price / Day</th>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #333; font-size: 0.9rem; border-right: 1px solid #e0e0e0;">Availability</th>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #333; font-size: 0.9rem;">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="rental-table-body">
                        </tbody>
                    </table>
                </div>
            </div>
        `;
    }

    // Generate rental table rows
    function generateRentalTableRows(vehicles) {
        return vehicles.map(vehicle => `
            <tr style="border-bottom: 1px solid #f0f0f0; transition: background-color 0.2s ease;" onmouseover="this.style.backgroundColor='#f8f9fa'" onmouseout="this.style.backgroundColor='white'">
                <td style="padding: 1rem; color: #333; font-weight: 500; font-size: 0.9rem; border-right: 1px solid #f0f0f0;">${vehicle.id}</td>
                <td style="padding: 1rem; color: #333; font-weight: 500; font-size: 0.9rem; border-right: 1px solid #f0f0f0;">${vehicle.name}</td>
                <td style="padding: 1rem; color: #333; font-size: 0.9rem; border-right: 1px solid #f0f0f0;">${vehicle.category}</td>
                <td style="padding: 1rem; color: #333; font-size: 0.9rem; border-right: 1px solid #f0f0f0;">${vehicle.fuelType}</td>
                <td style="padding: 1rem; color: #333; font-size: 0.9rem; border-right: 1px solid #f0f0f0;">${vehicle.transmission}</td>
                <td style="padding: 1rem; color: #333; font-weight: 500; font-size: 0.9rem; border-right: 1px solid #f0f0f0;">${vehicle.pricePerDay}</td>
                <td style="padding: 1rem; border-right: 1px solid #f0f0f0;">
                    <span style="padding: 0.4rem 0.8rem; border-radius: 20px; font-size: 0.8rem; font-weight: 500; ${
                        vehicle.availability === 'Available' 
                            ? 'background: #d4edda; color: #155724;' 
                            : 'background: #fff3cd; color: #856404;'
                    }">
                        ${vehicle.availability}
                    </span>
                </td>
                <td style="padding: 1rem;">
                    <button class="edit-rental-btn" data-vehicle-id="${vehicle.id}" style="background: none; border: 1px solid #742B88; color: #742B88; padding: 0.4rem 0.8rem; border-radius: 6px; cursor: pointer; font-size: 0.8rem; font-weight: 500; transition: all 0.2s ease; display: inline-flex; align-items: center; gap: 0.3rem;">
                        <img src="assets/icon/edit-icon.png" alt="edit-icon" style="width:16px; height:16px;">
                        edit
                    </button>
                </td>
            </tr>
        `).join('');
    }

    // Generate Service Vehicle Panel
    function generateServiceVehiclePanel() {
        return `
            <div class="service-vehicle-panel" style="background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); padding: 2rem;">
                <div class="service-header" style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 2rem; flex-wrap: wrap; gap: 1rem;">
                    <div class="service-title-section" style="flex: 1; min-width: 300px;">
                        <h1 style="font-size: 2rem; font-weight: 700; color: #333; margin-bottom: 0.5rem;">My Listings ( For Service Vehicle)</h1>
                    </div>
                    <div class="service-actions" style="display: flex; gap: 1rem; align-items: center; flex-wrap: wrap;">
                        <div class="service-nav" style="display: flex; align-items: center; gap: 0.5rem; color: #666; font-size: 0.9rem;">
                            <span>To Service</span>
                            <img src="assets/icon/nextbar-icon.png" alt="right-bar-icon" style="width:11px; height:11px;">
                        </div>
                        <button class="add-service-center-btn" style="background: #742B88; color: white; border: none; padding: 0.75rem 1.5rem; border-radius: 8px; cursor: pointer; font-weight: 600; font-size: 0.9rem; display: flex; align-items: center; gap: 0.5rem; white-space: nowrap;">
                            + Add Service Center
                        </button>
                        <button class="service-filter-btn" style="background: white; color: #666; border: 1px solid #ddd; padding: 0.75rem 1.5rem; border-radius: 8px; cursor: pointer; font-weight: 600; font-size: 0.9rem; white-space: nowrap; display: flex; align-items: center; gap: 0.5rem;">
                            Filter ▼
                        </button>
                    </div>
                </div>

                <div class="service-tabs" style="display: flex; gap: 0.5rem; margin-bottom: 1rem;">
                    <button class="service-tab active" data-tab="active">
                        Active Listings
                    </button>
                    <button class="service-tab" data-tab="service-center">
                        Service Center
                    </button>
                    <button class="service-tab" data-tab="view-service">
                        View Service
                    </button>
                </div>

                <div class="service-table-container" style="background: white; border-radius: 0 12px 12px 12px; overflow: hidden; border: 1px solid #e0e0e0;">
                    <table class="service-table" style="width: 100%; border-collapse: collapse;">
                        <thead style="background: #f8f9fa; border-bottom: 2px solid #e0e0e0;">
                            <tr>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #333; font-size: 0.9rem; border-right: 1px solid #e0e0e0;">Booking ID</th>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #333; font-size: 0.9rem; border-right: 1px solid #e0e0e0;">Customer Name</th>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #333; font-size: 0.9rem; border-right: 1px solid #e0e0e0;">Vehicle Type</th>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #333; font-size: 0.9rem; border-right: 1px solid #e0e0e0;">Service Type</th>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #333; font-size: 0.9rem; border-right: 1px solid #e0e0e0;">Date & Time</th>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #333; font-size: 0.9rem; border-right: 1px solid #e0e0e0;">Status</th>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #333; font-size: 0.9rem; border-right: 1px solid #e0e0e0;">Assigned Technician</th>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #333; font-size: 0.9rem;">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="service-table-body">
                        </tbody>
                    </table>
                </div>
            </div>
        `;
    }

    // Generate service table rows
    function generateServiceTableRows(bookings) {
        return bookings.map(booking => {
            let statusStyle = '';
            let statusText = booking.status;
            
            switch(booking.status.toLowerCase()) {
                case 'scheduled':
                    statusStyle = 'background: #fff3cd; color: #856404; border: 1px solid #ffeaa7;';
                    break;
                case 'in progress':
                    statusStyle = 'background: #d1ecf1; color: #0c5460; border: 1px solid #bee5eb;';
                    break;
                case 'completed':
                    statusStyle = 'background: #d4edda; color: #155724; border: 1px solid #c3e6cb;';
                    break;
                default:
                    statusStyle = 'background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb;';
            }

            return `
                <tr style="border-bottom: 1px solid #f0f0f0; transition: background-color 0.2s ease;" onmouseover="this.style.backgroundColor='#f8f9fa'" onmouseout="this.style.backgroundColor='white'">
                    <td style="padding: 1rem; color: #333; font-weight: 500; font-size: 0.9rem; border-right: 1px solid #f0f0f0;">${booking.bookingId}</td>
                    <td style="padding: 1rem; color: #333; font-weight: 500; font-size: 0.9rem; border-right: 1px solid #f0f0f0;">${booking.customerName}</td>
                    <td style="padding: 1rem; color: #333; font-size: 0.9rem; border-right: 1px solid #f0f0f0;">${booking.vehicleType}</td>
                    <td style="padding: 1rem; color: #333; font-size: 0.9rem; border-right: 1px solid #f0f0f0;">${booking.serviceType}</td>
                    <td style="padding: 1rem; color: #333; font-size: 0.9rem; border-right: 1px solid #f0f0f0;">${booking.dateTime}</td>
                    <td style="padding: 1rem; border-right: 1px solid #f0f0f0;">
                        <span style="padding: 0.4rem 0.8rem; border-radius: 4px; font-size: 0.8rem; font-weight: 500; ${statusStyle}">
                            ${statusText}
                        </span>
                    </td>
                    <td style="padding: 1rem; color: #333; font-size: 0.9rem; border-right: 1px solid #f0f0f0;">${booking.assignedTechnician}</td>
                    <td style="padding: 1rem;">
                        <button class="edit-service-btn" data-booking-id="${booking.bookingId}" style="background: none; border: 1px solid #742B88; color: #742B88; padding: 0.4rem 0.8rem; border-radius: 6px; cursor: pointer; font-size: 0.8rem; font-weight: 500; transition: all 0.2s ease; display: inline-flex; align-items: center; gap: 0.3rem;">
                            ✏️ edit
                        </button>
                    </td>
                </tr>
            `;
        }).join('');
    }

    // Create logout modal
    function createLogoutModal() {
        const logoutModal = $(`
            <div id="logout-modal" class="logout-modal-overlay">
                <div class="logout-modal-container">
                    <div class="logout-modal-content">
                        <h3 class="logout-modal-title">Are you sure want to Logout?</h3>
                        <div class="logout-modal-buttons">
                            <button id="logout-yes-btn" class="logout-btn logout-btn-yes">YES</button>
                            <button id="logout-no-btn" class="logout-btn logout-btn-no">NO</button>
                        </div>
                    </div>
                </div>
            </div>
        `);
        $('body').append(logoutModal);
    }

    // Show/hide logout modal
    function showLogoutModal() {
        if ($('#logout-modal').length === 0) {
            createLogoutModal();
        }
        $('#logout-modal').addClass('show').css('display', 'flex');
        $('body').css('overflow', 'hidden');
    }

    function hideLogoutModal() {
        $('#logout-modal').removeClass('show');
        setTimeout(() => {
            $('#logout-modal').css('display', 'none');
            $('body').css('overflow', 'auto');
        }, 300);
    }

    // MAIN NAVIGATION FUNCTION - Controls which section displays
    function showSection(section) {
        // Hide ALL content sections
        $('.content-section').removeClass('active').hide();
        
        // Remove active from all sidebar items
        $('.sidebar-item').removeClass('active');
        
        // Close My Listings dropdown
        $('.listings-parent').removeClass('dropdown-open');
        $('#listings-dropdown').removeClass('show');
        
        // Show the requested section
        switch(section) {
            case 'profile':
                $('#profile-section').addClass('active').show();
                $('.sidebar-item[data-section="profile"]').addClass('active');
                $('#profile-section').html('<div id="main-content-area"></div>');
                $('#main-content-area').html(generateProfilePanel());
                setTimeout(initializeProfileImageUpload, 100);
                break;
                
            case 'bookings':
                $('#bookings-section').addClass('active').show();
                $('.sidebar-item[data-section="bookings"]').addClass('active');
                $('#bookings-section').html('<div id="bookings-content-area"></div>');
                $('#bookings-content-area').html(generateBookingsPanel());
                setTimeout(() => {
                    loadBookings('upcoming');
                    loadBookings('past');
                    loadBookings('cancelled');
                    $('[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
                        const target = $(e.target).attr('data-bs-target').replace('#', '');
                        loadBookings(target);
                    });
                    initializeBookingsEvents();
                }, 100);
                break;
                
            case 'saved-vehicles':
                $('#saved-vehicles-section').addClass('active').show();
                $('.sidebar-item[data-section="saved-vehicles"]').addClass('active');
                $('#saved-vehicles-section').html(generateSavedVehiclesPanel());
                setTimeout(initializeSavedVehiclesEvents, 100);
                break;
                
            case 'notifications':
                $('#notifications-section').addClass('active').show();
                $('.sidebar-item[data-section="notifications"]').addClass('active');
                $('#notifications-section').html(generateNotificationsPanel());
                setTimeout(initializeNotificationToggles, 100);
                break;
                
            case 'support':
                $('#support-section').addClass('active').show();
                $('.sidebar-item[data-section="support"]').addClass('active');
                $('#support-section').html(generateSupportPanel());
                setTimeout(initializeSupportEvents, 100);
                break;
                
            case 'security':
                $('#security-section').addClass('active').show();
                $('.sidebar-item[data-section="security"]').addClass('active');
                $('#security-section').html(generateSecurityPanel());
                setTimeout(initializeSecurityEvents, 100);
                break;
                
            case 'logout':
                showLogoutModal();
                break;
        }
    }

    // Show My Listings subsection
    function showListingsSubsection(type) {
        // Hide ALL content sections
        $('.content-section').removeClass('active').hide();
        
        // Show listings section
        $('#listings-section').addClass('active').show();
        
        // Set active in sidebar
        $('.sidebar-item').removeClass('active');
        $('.listings-parent').addClass('active');
        
        switch(type) {
            case 'sell':
                $('#listings-section').html('<div id="listings-content-area"></div>');
                $('#listings-content-area').html(generateListingsPanel());
                setTimeout(() => {
                    renderVehicleListings('active');
                    initializeListingsEvents();
                }, 100);
                break;
                
            case 'rental':
                $('#listings-section').html('<div id="listings-content-area"></div>');
                $('#listings-content-area').html(generateRentalManagementPanel());
                setTimeout(() => {
                    $('#rental-table-body').html(generateRentalTableRows(rentalVehicleData));
                    initializeRentalEvents();
                }, 100);
                break;
                
            case 'service':
                $('#listings-section').html('<div id="listings-content-area"></div>');
                $('#listings-content-area').html(generateServiceVehiclePanel());
                setTimeout(() => {
                    $('#service-table-body').html(generateServiceTableRows(serviceVehicleData));
                    initializeServiceEvents();
                }, 100);
                break;
        }
    }

    // Initialize listings events
    function initializeListingsEvents() {
        $(document).off('click', '.nav-tab').on('click', '.nav-tab', function() {
            const tabCategory = $(this).data('tab');
            $('.nav-tab').removeClass('active');
            $(this).addClass('active');
            
            let category = 'active';
            if (tabCategory === 'pending') category = 'pending';
            else if (tabCategory === 'sold') category = 'sold';
            else if (tabCategory === 'enquiries') category = 'enquiries';
            
            renderVehicleListings(category);
        });

        $(document).off('click', '.btn-edit').on('click', '.btn-edit', function() {
            const vehicleId = $(this).data('vehicle-id');
            alert('Edit listing for vehicle: ' + vehicleId);
        });

        $(document).off('click', '.btn-sold').on('click', '.btn-sold', function() {
            const vehicleId = $(this).data('vehicle-id');
            if (confirm('Mark vehicle ' + vehicleId + ' as sold?')) {
                const vehicle = vehicleListings.find(v => v.id === vehicleId);
                if (vehicle) {
                    vehicle.status = 'Sold';
                    vehicle.category = 'sold';
                    renderVehicleListings('active');
                    alert('Vehicle marked as sold successfully!');
                }
            }
        });
    }

    // Initialize rental events
    function initializeRentalEvents() {
        $(document).off('click', '.rental-tab').on('click', '.rental-tab', function() {
            const targetTab = $(this).data('tab');
            $('.rental-tab').removeClass('active').css({'background': 'transparent', 'color': '#742B88', 'box-shadow': 'none'});
            $(this).addClass('active').css({'background': 'linear-gradient(135deg, #FFFFFF 0%, #FFB1B1 100%)', 'color': '#000', 'font-weight':'600'});
            
            switch(targetTab) {
                case 'active':
                    $('#rental-table-body').html(generateRentalTableRows(rentalVehicleData));
                    break;
                case 'bookings':
                    $('#rental-table-body').html('<tr><td colspan="8" style="padding: 3rem; text-align: center; color: #666;"><i class="fas fa-calendar-check" style="font-size: 3rem; margin-bottom: 1rem; color: #dee2e6;"></i><h4>Bookings Management</h4><p>Manage your rental bookings and reservations here.</p></td></tr>');
                    break;
                case 'owner':
                    $('#rental-table-body').html('<tr><td colspan="8" style="padding: 3rem; text-align: center; color: #666;"><i class="fas fa-user-tie" style="font-size: 3rem; margin-bottom: 1rem; color: #dee2e6;"></i><h4>Owner Management</h4><p>Manage vehicle owners and partnerships here.</p></td></tr>');
                    break;
                case 'payments':
                    $('#rental-table-body').html('<tr><td colspan="8" style="padding: 3rem; text-align: center; color: #666;"><i class="fas fa-credit-card" style="font-size: 3rem; margin-bottom: 1rem; color: #dee2e6;"></i><h4>Payments & Refunds</h4><p>Track payments, refunds, and financial transactions here.</p></td></tr>');
                    break;
                case 'reviews':
                    $('#rental-table-body').html('<tr><td colspan="8" style="padding: 3rem; text-align: center; color: #666;"><i class="fas fa-star" style="font-size: 3rem; margin-bottom: 1rem; color: #dee2e6;"></i><h4>Customer Reviews Panel</h4><p>View and manage customer reviews and ratings here.</p></td></tr>');
                    break;
            }
        });

        $(document).off('click', '.edit-rental-btn').on('click', '.edit-rental-btn', function() {
            const vehicleId = $(this).data('vehicle-id');
            alert('Edit rental vehicle: ' + vehicleId);
        });

        $(document).off('click', '.add-vehicle-btn').on('click', '.add-vehicle-btn', function() {
            alert('Add new rental vehicle');
        });

        $(document).off('click', '.filter-btn').on('click', '.filter-btn', function() {
            alert('Open filter options');
        });
    }

    // Initialize service events
    function initializeServiceEvents() {
        $(document).off('click', '.service-tab').on('click', '.service-tab', function() {
            const targetTab = $(this).data('tab');
            $('.service-tab').removeClass('active').css({'background': 'transparent', 'color': '#742B88', 'box-shadow': 'none'});
            $(this).addClass('active').css({'background': '#ffcccb', 'color': '#000', 'font-weight': '600'});
            
            switch(targetTab) {
                case 'active':
                    $('#service-table-body').html(generateServiceTableRows(serviceVehicleData));
                    break;
                case 'service-center':
                    $('#service-table-body').html('<tr><td colspan="8" style="padding: 3rem; text-align: center; color: #666;"><i class="fas fa-tools" style="font-size: 3rem; margin-bottom: 1rem; color: #dee2e6;"></i><h4>Service Center Management</h4><p>Manage your service centers, locations, and service offerings here.</p></td></tr>');
                    break;
                case 'view-service':
                    $('#service-table-body').html('<tr><td colspan="8" style="padding: 3rem; text-align: center; color: #666;"><i class="fas fa-eye" style="font-size: 3rem; margin-bottom: 1rem; color: #dee2e6;"></i><h4>View Service Details</h4><p>View detailed service reports, history, and analytics here.</p></td></tr>');
                    break;
            }
        });

        $(document).off('click', '.edit-service-btn').on('click', '.edit-service-btn', function() {
            const bookingId = $(this).data('booking-id');
            alert('Edit service booking: ' + bookingId);
        });

        $(document).off('click', '.add-service-center-btn').on('click', '.add-service-center-btn', function() {
            alert('Add new service center functionality');
        });

        $(document).off('click', '.service-filter-btn').on('click', '.service-filter-btn', function() {
            alert('Open filter options for service bookings');
        });
    }

    // Initialize saved vehicles events
    function initializeSavedVehiclesEvents() {
        $(document).off('click', '.heart-icon').on('click', '.heart-icon', function(e) {
            e.stopPropagation();
            const vehicleCard = $(this).closest('.saved-vehicle-card');
            const vehicleId = vehicleCard.data('vehicle-id');
            
            if (confirm('Remove this vehicle from your saved list?')) {
                vehicleCard.css({'transform': 'scale(0.8)', 'opacity': '0'});
                setTimeout(() => {
                    vehicleCard.remove();
                    if ($('.saved-vehicle-card').length === 0) {
                        $('.saved-vehicles-grid').html('<div style="grid-column: 1 / -1; text-align: center; padding: 3rem; color: #666;"><i class="fas fa-heart" style="font-size: 3rem; margin-bottom: 1rem; color: #dee2e6;"></i><h4>No Saved Vehicles</h4><p>Start exploring and save vehicles you\'re interested in.</p></div>');
                    }
                }, 300);
            }
        });
        
        $(document).off('click', '.view-seller-btn').on('click', '.view-seller-btn', function(e) {
            e.stopPropagation();
            const vehicleId = $(this).data('vehicle-id');
            alert('View seller details for vehicle ID: ' + vehicleId);
        });

        $(document).off('click', '.saved-vehicle-card').on('click', '.saved-vehicle-card', function(e) {
            if (!$(e.target).closest('.heart-icon, .view-seller-btn').length) {
                const vehicleId = $(this).data('vehicle-id');
                alert('View full vehicle details for ID: ' + vehicleId);
            }
        });
    }

    // Initialize bookings events
    function initializeBookingsEvents() {
        $(document).off('click', '.booking-id-link-v2').on('click', '.booking-id-link-v2', function(e) {
            e.preventDefault();
            const bookingId = $(this).text();
            alert('View booking details for: ' + bookingId);
        });

        $(document).off('click', '.view-details-link-v2').on('click', '.view-details-link-v2', function(e) {
            e.preventDefault();
            alert('View full booking details');
        });
    }

    // Initialize notification toggles
    function initializeNotificationToggles() {
        $(document).off('change', '.switch input[type="checkbox"]').on('change', '.switch input[type="checkbox"]', function() {
            const isChecked = $(this).is(':checked');
            const slider = $(this).siblings('.slider');
            
            if (isChecked) {
                slider.css('background-color', '#742B88');
            } else {
                slider.css('background-color', '#ccc');
            }
        });

        // Initialize all checked toggles
        $('.switch input[type="checkbox"]:checked').each(function() {
            $(this).siblings('.slider').css('background-color', '#742B88');
        });

        // Add slider animation on click
        $('.switch input[type="checkbox"]').siblings('.slider').before(
            '<span class="slider-button" style="position: absolute; content: ""; height: 18px; width: 18px; left: 3px; bottom: 3px; background-color: white; transition: .4s; border-radius: 50%;"></span>'
        );

        $('.switch input[type="checkbox"]:checked').siblings('.slider-button').css('transform', 'translateX(26px)');
    }

    // Initialize support events
    function initializeSupportEvents() {
        $(document).off('click', '#submit-feedback-btn').on('click', '#submit-feedback-btn', function() {
            const feedback = $('#feedback-textarea').val().trim();
            
            if (feedback === '') {
                alert('Please enter your feedback before submitting.');
                return;
            }
            
            // Simulate feedback submission
            alert('Thank you for your feedback!\n\nYour message has been received and our team will review it shortly.');
            $('#feedback-textarea').val('');
        });

        // Add character counter to textarea
        $('#feedback-textarea').on('input', function() {
            const length = $(this).val().length;
            const maxLength = 500;
            
            if (!$('#char-counter').length) {
                $(this).after(`<div id="char-counter" style="text-align: right; font-size: 0.8rem; color: #666; margin-top: 0.5rem;"></div>`);
            }
            
            $('#char-counter').text(`${length}/${maxLength} characters`);
            
            if (length > maxLength) {
                $('#char-counter').css('color', '#dc3545');
            } else {
                $('#char-counter').css('color', '#666');
            }
        });
    }

    // Initialize security events
    function initializeSecurityEvents() {
        $(document).off('click', '.settings-item').on('click', '.settings-item', function() {
            const container = $(this).closest('.settings-item-container');
            const dropdown = container.find('.settings-dropdown');
            const arrow = $(this).find('.dropdown-arrow');
            
            if (dropdown.is(':visible')) {
                dropdown.slideUp(300);
                arrow.css('transform', 'rotate(0deg)');
                $(this).css('border-radius', '12px');
            } else {
                $('.settings-dropdown').slideUp(300);
                $('.dropdown-arrow').css('transform', 'rotate(0deg)');
                $('.settings-item').css('border-radius', '12px');
                
                dropdown.slideDown(300);
                arrow.css('transform', 'rotate(90deg)');
                $(this).css('border-radius', '12px 12px 0 0');
            }
        });

        // Send OTP button
        $(document).off('click', '[data-action="send-otp"]').on('click', '[data-action="send-otp"]', function() {
            const mobileOrEmail = $('#new-mobile').val().trim();
            
            if (mobileOrEmail === '') {
                alert('Please enter your mobile number or email address.');
                return;
            }
            
            alert('OTP has been sent to: ' + mobileOrEmail);
        });

        // Save 2FA button
        $(document).off('click', '[data-action="save-2fa"]').on('click', '[data-action="save-2fa"]', function() {
            alert('Two-factor authentication settings saved successfully!');
        });

        // Save privacy button
        $(document).off('click', '[data-action="save-privacy"]').on('click', '[data-action="save-privacy"]', function() {
            alert('Privacy settings saved successfully!');
        });

        // Delete account button
        $(document).off('click', '[data-action="confirm-delete"]').on('click', '[data-action="confirm-delete"]', function() {
            const confirmation = $('#delete-confirmation').val().trim();
            
            if (confirmation !== 'DELETE') {
                alert('Please type "DELETE" to confirm account deletion.');
                return;
            }
            
            if (confirm('This action cannot be undone. Are you absolutely sure you want to delete your account?')) {
                alert('Account deletion request submitted. You will receive a confirmation email shortly.');
                $('#delete-confirmation').val('');
            }
        });

        // Toggle switches for security settings
        $(document).off('change', '.switch input[type="checkbox"]').on('change', '.switch input[type="checkbox"]', function() {
            const isChecked = $(this).is(':checked');
            const slider = $(this).siblings('.slider');
            
            if (isChecked) {
                slider.css('background-color', '#742B88');
            } else {
                slider.css('background-color', '#ccc');
            }
        });
    }

    // Initialize profile image upload
    function initializeProfileImageUpload() {
        $(document).off('click', '#upload-button').on('click', '#upload-button', function() {
            $('#file-input').click();
        });

        $(document).off('change', '#file-input').on('change', '#file-input', function(e) {
            const file = e.target.files[0];
            
            if (file) {
                if (file.size > 5 * 1024 * 1024) {
                    alert('File size must be less than 5MB');
                    return;
                }
                
                if (!file.type.match('image.*')) {
                    alert('Please select an image file');
                    return;
                }
                
                alert('Image uploaded successfully: ' + file.name);
            }
        });

        // Edit button functionality
        $(document).off('click', '#edit-button').on('click', '#edit-button', function() {
            const isEditing = $(this).find('span').text() === 'Edit';
            
            if (isEditing) {
                // Enable editing mode
                $(this).find('span').text('Save');
                $(this).css('background', '#28a745');
                
                // Replace display values with input fields
                const name = $('#display-name').text();
                const email = $('#display-email').text();
                const phone = $('#display-phone').text();
                const address = $('#display-address').text();
                
                $('#display-name').html(`<input type="text" id="edit-name" value="${name}" style="border: 1px solid #ddd; padding: 0.5rem; border-radius: 6px; width: 100%;">`);
                $('#display-email').html(`<input type="email" id="edit-email" value="${email}" style="border: 1px solid #ddd; padding: 0.5rem; border-radius: 6px; width: 100%;">`);
                $('#display-phone').html(`<input type="tel" id="edit-phone" value="${phone}" style="border: 1px solid #ddd; padding: 0.5rem; border-radius: 6px; width: 100%;">`);
                $('#display-address').html(`<input type="text" id="edit-address" value="${address}" style="border: 1px solid #ddd; padding: 0.5rem; border-radius: 6px; width: 100%;">`);
            } else {
                // Save changes
                const newName = $('#edit-name').val();
                const newEmail = $('#edit-email').val();
                const newPhone = $('#edit-phone').val();
                const newAddress = $('#edit-address').val();
                
                // Update profile data
                profileData.personal.name = newName;
                profileData.personal.email = newEmail;
                profileData.personal.phone = newPhone;
                profileData.personal.address = newAddress;
                
                // Display updated values
                $('#display-name').text(newName);
                $('#display-email').text(newEmail);
                $('#display-phone').text(newPhone);
                $('#display-address').text(newAddress);
                
                $(this).find('span').text('Edit');
                $(this).css('background', '#742B88');
                
                alert('Profile updated successfully!');
            }
        });
    }

    // Sidebar navigation
    $(document).off('click', '.sidebar-item:not(.listings-parent)').on('click', '.sidebar-item:not(.listings-parent)', function() {
        const section = $(this).data('section');
        showSection(section);
    });

    // My Listings dropdown toggle
    $(document).off('click', '.listings-parent').on('click', '.listings-parent', function(e) {
        e.stopPropagation();
        const isOpen = $(this).hasClass('dropdown-open');
        
        if (isOpen) {
            $(this).removeClass('dropdown-open');
            $('#listings-dropdown').removeClass('show');
            $(this).find('.bi-chevron-down').css('transform', 'rotate(0deg)');
        } else {
            $(this).addClass('dropdown-open');
            $('#listings-dropdown').addClass('show');
            $(this).find('.bi-chevron-down').css('transform', 'rotate(180deg)');
        }
    });

    // My Listings dropdown items
    $(document).off('click', '.dropdown-item-custom').on('click', '.dropdown-item-custom', function(e) {
        e.preventDefault();
        e.stopPropagation();
        const listingType = $(this).data('listing-type');
        showListingsSubsection(listingType);
    });

    // Logout modal events
    $(document).on('click', '#logout-yes-btn', function() {
        hideLogoutModal();
        alert('Logging out...');
        // Add actual logout functionality here
        window.location.href = 'login.php';
    });

    $(document).on('click', '#logout-no-btn', function() {
        hideLogoutModal();
    });

    $(document).on('click', '.logout-modal-overlay', function(e) {
        if ($(e.target).hasClass('logout-modal-overlay')) {
            hideLogoutModal();
        }
    });

    // Initialize app
    function initializeApp() {
        initializeUserProfile();
        showSection('profile');
    }

    // Start the application
    initializeApp();
});
    </script>

     <?php
    include './footer.php'
    ?>

</body>
</html>