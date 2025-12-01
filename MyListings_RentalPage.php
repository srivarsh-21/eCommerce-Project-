<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Listings - Saved Vehicle</title>
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
                        <h1 id="current-page-title" class="user-dashboard-title">My Listings (For Rental)</h1>
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
                                <img id="profile-avatar-image" class="user-profile-avatar" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='50' fill='%23007bff'/%3E%3Ctext x='50' y='60' text-anchor='middle' fill='white' font-size='40' font-family='Arial'%3ES%3C/text%3E%3C/svg%3E" alt="User Avatar" style="width: 60px; height: 60px; border-radius: 50%; margin-bottom: 1rem;">

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
                                    <img src="assets/icon/dropdownarrow.png" alt="">
                                </div>

                                <div id="nav-rental-bookings" class="navigation-menu-item" data-page="bookings">
                                    <span>My Bookings (Rental)</span>
                                    <img src="assets/icon/dropdownarrow.png" alt="">
                                </div>

                                <div id="nav-vehicle-listings" class="navigation-menu-item has-dropdown-menu selected" data-page="listings">
                                    <span>My Listings</span>
                                   <img src="assets/icon/dropdownarrow.png" alt="">
                                    <!-- Dropdown for My Listings -->
                                    <div class="navigation-menu-dropdown">
                                        <div class="navigation-dropdown-option" data-option="sell-vehicle">Sell Vehicle</div>
                                        <div class="navigation-dropdown-option" data-option="rental-vehicle">Rental Vehicle</div>
                                        <div class="navigation-dropdown-option" data-option="service">Service</div>
                                    </div>
                                </div>

                                <div id="nav-saved-vehicles" class="navigation-menu-item purple-text" data-page="saved-vehicles">
                                    <span>Saved Vehicles</span>
                                   <img src="assets/icon/dropdownarrow.png" alt="">
                                </div>

                                <div id="nav-notifications-alerts" class="navigation-menu-item" data-page="notifications">
                                    <span>Notifications & Alerts</span>
                                    <img src="assets/icon/dropdownarrow.png" alt="">
                                </div>

                                <div id="nav-help-support-one" class="navigation-menu-item" data-page="help-1">
                                    <span>Help & Support</span>
                                    <img src="assets/icon/dropdownarrow.png" alt="">
                                </div>

                                <div id="nav-help-support-two" class="navigation-menu-item" data-page="help-2">
                                    <span>Help & Support</span>
                                    <img src="assets/icon/dropdownarrow.png" alt="">
                                </div>

                                <div id="nav-security-settings" class="navigation-menu-item" data-page="security">
                                    <span>Security & Settings</span>
                                    <img src="assets/icon/dropdownarrow.png" alt="">
                                </div>

                                <div id="nav-logout-option" class="navigation-menu-item" data-page="logout">
                                    <span>Logout</span>
                                    <img src="assets/icon/dropdownarrow.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main Content -->
                    <div class="col-lg-8 col-xl-9">
                        <div id="primary-content-area">
                            <!-- Rental Vehicle Content will be loaded here -->
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
            const profileUserData = {
                id: "1122333444",
                name: "Sri Varshini",
                status: "Active",
                avatar: "S"
            };

            const rentalVehicleListings = [
                {
                    id: "RNT-MTM1234",
                    name: "Maruthi Suzuki Swift",
                    type: "Petrol",
                    transmission: "Manual",
                    seats: "5 Seats",
                    dailyRate: "₹1,200",
                    weeklyRate: "₹7,500",
                    monthlyRate: "₹25,000",
                    status: "Available",
                    category: "available",
                    totalEarnings: "₹45,000",
                    mileage: "22 kmpl",
                    year: "2021"
                },
                {
                    id: "RNT-HND5678",
                    name: "Honda City",
                    type: "Petrol",
                    transmission: "Automatic",
                    seats: "5 Seats",
                    dailyRate: "₹1,800",
                    weeklyRate: "₹11,500",
                    monthlyRate: "₹38,000",
                    status: "Rented",
                    category: "rented",
                    totalEarnings: "₹78,500",
                    mileage: "18 kmpl",
                    year: "2022",
                    rentedUntil: "15th Aug 2025"
                },
                {
                    id: "RNT-HYD9012",
                    name: "Hyundai Creta",
                    type: "Diesel",
                    transmission: "Automatic",
                    seats: "5 Seats",
                    dailyRate: "₹2,500",
                    weeklyRate: "₹16,000",
                    monthlyRate: "₹52,000",
                    status: "Maintenance",
                    category: "maintenance",
                    totalEarnings: "₹1,25,000",
                    mileage: "20 kmpl",
                    year: "2023",
                    maintenanceReason: "Regular Service"
                },
                {
                    id: "RNT-TOY3456",
                    name: "Toyota Innova Crysta",
                    type: "Diesel",
                    transmission: "Manual",
                    seats: "7 Seats",
                    dailyRate: "₹3,200",
                    weeklyRate: "₹20,000",
                    monthlyRate: "₹65,000",
                    status: "Available",
                    category: "available",
                    totalEarnings: "₹95,000",
                    mileage: "16 kmpl",
                    year: "2022"
                }
            ];

            // Initialize user profile
            function initializeProfileData() {
                $('#profile-user-id').text(profileUserData.id);
                $('#profile-account-status').text(profileUserData.status);
            }

            // Generate rental vehicle card HTML with new compact design
            function generateRentalVehicleCard(vehicle) {
                const statusClass = vehicle.status.toLowerCase().replace(' ', '-');
                
                return `
                    <div class="rental-vehicle-card" data-vehicle-id="${vehicle.id}">
                        <div class="rental-card-content">
                            <div class="rental-vehicle-image">
                               <img src="assets/image/car-mylistingspage.png" alt="Car-Image" >
                            </div>
                            
                            <div class="rental-vehicle-details">
                                <div class="rental-vehicle-header">
                                    <h3 class="rental-vehicle-title">${vehicle.name}</h3>
                                    <span class="rental-status-badge ${statusClass}">${vehicle.status}</span>
                                </div>
                                
                                <div class="rental-vehicle-specs">
                                    <div class="rental-spec-item">
                                        <img src="assets/icon/petrol-icon.png" alt="" class="w-25 h-25 mb-2">
                                        <span>${vehicle.type}</span>
                                    </div>
                                    <div class="rental-spec-item">
                                        <img src="assets/icon/manual-transmission-icon 1.png" alt="" class="w-25 h-25">
                                        <span>${vehicle.transmission}</span>
                                    </div>
                                    <div class="rental-spec-item">
                                        <img src="assets/icon/car-seat-icon 1.png" alt="" class="w-25 h-25">
                                        <span>${vehicle.seats}</span>
                                    </div>
                                </div>
                                
                                <div class="rental-listing-meta">
                                    <span class="rental-listing-id">Listing ID: [#${vehicle.id}]</span>
                                    <div class="rental-price-display">${vehicle.dailyRate}/day</div>
                                </div>
                                
                                <div class="rental-action-buttons">
                                    <button class="rental-btn rental-btn-edit" data-action="edit-rental" data-vehicle-id="${vehicle.id}">
                                        Edit Listing
                                    </button>
                                    <button class="rental-btn rental-btn-manage" data-action="manage-availability" data-vehicle-id="${vehicle.id}">
                                        Manage Rent
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            }

            // Generate the Rental Vehicles panel HTML
            function generateRentalVehiclesPanel() {
                return `
                    <div class="rental-dashboard-panel">
                        <!-- Rental Dashboard Header -->
                        <div class="rental-dashboard-header">
                            <h2 class="rental-dashboard-title">My Listings ( For Rental )</h2>
                            <p class="rental-dashboard-subtitle">
                                Manage all your vehicle listings in one place.<br>
                                Track your active, pending, and sold vehicles. Update details, respond to buyer enquiries, and keep your online sales running smoothly.
                            </p>

                            <!-- Tab Navigation -->
                            <div class="rental-tab-navigation">
                                <button id="rental-tab-active" class="rental-nav-tab active" data-tab="available">Active Listings</button>
                                <button id="rental-tab-pending" class="rental-nav-tab" data-tab="rented">Pending Listings</button>
                                <button id="rental-tab-sold" class="rental-nav-tab" data-tab="maintenance">Sold Vehicles</button>
                                <button id="rental-tab-buyer" class="rental-nav-tab" data-tab="earnings">Buyer Enquiries</button>
                            </div>
                        </div>

                        <!-- Rental Content -->
                        <div class="rental-content-area">
                            <div id="rental-vehicles-container">
                                <!-- Rental vehicle listings will be populated here by jQuery -->
                            </div>
                        </div>
                    </div>
                `;
            }

            // Render rental vehicle listings based on active tab
            function renderRentalVehicleListings(category = 'available') {
                const filteredVehicles = rentalVehicleListings.filter(vehicle => vehicle.category === category);
                const container = $('#rental-vehicles-container');
                
                if (category === 'earnings') {
                    // Show buyer enquiries
                    container.html(`
                        <div class="empty-state">
                            <i class="fas fa-comments"></i>
                            <h4>No buyer enquiries yet</h4>
                            <p>When potential buyers contact you about your listings, their enquiries will appear here.</p>
                        </div>
                    `);
                } else if (filteredVehicles.length === 0) {
                    // Empty state
                    const emptyStateMessages = {
                        available: {
                            icon: 'fas fa-car',
                            title: `No active listings found`,
                            message: "You don't have any active vehicle listings at the moment.",
                            buttonText: "Add New Vehicle",
                            buttonAction: "add-vehicle"
                        },
                        rented: {
                            icon: 'fas fa-clock',
                            title: "No pending listings",
                            message: "All your listings are either active or have been completed.",
                            buttonText: "View Active Listings",
                            buttonAction: "view-available"
                        },
                        maintenance: {
                            icon: 'fas fa-check-circle',
                            title: "No sold vehicles",
                            message: "Your vehicle sale history will appear here once you complete transactions.",
                            buttonText: "View All Listings",
                            buttonAction: "view-all"
                        }
                    };

                    const emptyState = emptyStateMessages[category];
                    
                    container.html(`
                        <div class="empty-state">
                            <i class="${emptyState.icon}"></i>
                            <h4>${emptyState.title}</h4>
                            <p>${emptyState.message}</p>
                            <button class="add-vehicle-btn" data-action="${emptyState.buttonAction}">
                                <i class="fas fa-plus me-2"></i>${emptyState.buttonText}
                            </button>
                        </div>
                    `);
                } else {
                    // Show vehicle listings
                    const vehicleCards = filteredVehicles.map(vehicle => generateRentalVehicleCard(vehicle)).join('');
                    container.html(vehicleCards);
                }
            }

            // Initialize the rental vehicles panel
            function initializeRentalVehiclesPanel() {
                const panelHTML = generateRentalVehiclesPanel();
                $('#primary-content-area').html(panelHTML);
                renderRentalVehicleListings('available');
            }

            // Tab switching functionality
            $(document).on('click', '.rental-nav-tab', function() {
                const targetTab = $(this).data('tab');
                
                // Update active tab
                $('.rental-nav-tab').removeClass('active');
                $(this).addClass('active');
                
                // Render content for selected tab
                renderRentalVehicleListings(targetTab);
            });

            // Handle action buttons
            $(document).on('click', '[data-action]', function() {
                const action = $(this).data('action');
                const vehicleId = $(this).data('vehicle-id');
                
                switch(action) {
                    case 'edit-rental':
                        alert(`Edit rental listing for vehicle: ${vehicleId}`);
                        break;
                    case 'manage-availability':
                        alert(`Manage rent for vehicle: ${vehicleId}`);
                        break;
                    case 'add-vehicle':
                        alert('Redirect to add new vehicle form');
                        break;
                    case 'view-available':
                        $('.rental-nav-tab[data-tab="available"]').click();
                        break;
                    case 'view-all':
                        $('.rental-nav-tab[data-tab="available"]').click();
                        break;
                }
            });

            // Navigation menu functionality
            $(document).on('click', '.navigation-menu-item', function() {
                const page = $(this).data('page');
                
                // Update selected menu item
                $('.navigation-menu-item').removeClass('selected');
                $(this).addClass('selected');
                
                // Handle different pages
                switch(page) {
                    case 'profile-info':
                        $('#current-page-title').text('Profile Information');
                        $('#primary-content-area').html('<div class="rental-dashboard-panel"><h2>Profile Information</h2><p>Profile information content would go here.</p></div>');
                        break;
                    case 'bookings':
                        $('#current-page-title').text('My Bookings (Rental)');
                        $('#primary-content-area').html('<div class="rental-dashboard-panel"><h2>My Bookings</h2><p>Booking history and current reservations would be displayed here.</p></div>');
                        break;
                    case 'listings':
                        $('#current-page-title').text('My Listings (For Rental)');
                        initializeRentalVehiclesPanel();
                        break;
                    case 'saved-vehicles':
                        $('#current-page-title').text('Saved Vehicles');
                        $('#primary-content-area').html('<div class="rental-dashboard-panel"><h2>Saved Vehicles</h2><p>Your saved and favorite vehicles would be shown here.</p></div>');
                        break;
                    case 'notifications':
                        $('#current-page-title').text('Notifications & Alerts');
                        $('#primary-content-area').html('<div class="rental-dashboard-panel"><h2>Notifications & Alerts</h2><p>System notifications and alerts would be displayed here.</p></div>');
                        break;
                    case 'help-1':
                    case 'help-2':
                        $('#current-page-title').text('Help & Support');
                        $('#primary-content-area').html('<div class="rental-dashboard-panel"><h2>Help & Support</h2><p>Help documentation and support resources would be available here.</p></div>');
                        break;
                    case 'security':
                        $('#current-page-title').text('Security & Settings');
                        $('#primary-content-area').html('<div class="rental-dashboard-panel"><h2>Security & Settings</h2><p>Account security settings and preferences would be managed here.</p></div>');
                        break;
                    case 'logout':
                        if(confirm('Are you sure you want to logout?')) {
                            alert('Logout functionality would be implemented here');
                        }
                        break;
                }
            });

            // Dropdown menu functionality
            $(document).on('click', '.has-dropdown-menu', function(e) {
                e.stopPropagation();
                const dropdown = $(this).find('.navigation-menu-dropdown');
                $('.navigation-menu-dropdown').not(dropdown).hide();
                dropdown.toggle();
            });

            $(document).on('click', '.navigation-dropdown-option', function(e) {
                e.stopPropagation();
                const option = $(this).data('option');
                
                // Hide dropdown
                $('.navigation-menu-dropdown').hide();
                
                // Handle dropdown options
                switch(option) {
                    case 'sell-vehicle':
                        $('#current-page-title').text('My Listings (For Sale)');
                        $('#primary-content-area').html('<div class="rental-dashboard-panel"><h2>Vehicle Listings for Sale</h2><p>Your vehicles listed for sale would be displayed here.</p></div>');
                        break;
                    case 'rental-vehicle':
                        $('#current-page-title').text('My Listings (For Rental)');
                        initializeRentalVehiclesPanel();
                        break;
                    case 'service':
                        $('#current-page-title').text('My Service Listings');
                        $('#primary-content-area').html('<div class="rental-dashboard-panel"><h2>Service Listings</h2><p>Your service offerings would be managed here.</p></div>');
                        break;
                }
            });

            // Close dropdowns when clicking outside
            $(document).on('click', function() {
                $('.navigation-menu-dropdown').hide();
            });

            // Back button functionality
            $('#navigation-back-btn').on('click', function() {
                window.history.back();
            });

            // Initialize the application
            initializeProfileData();
            initializeRentalVehiclesPanel();

            console.log('Rental Vehicle Dashboard initialized successfully!');
        });
    </script>
</body>
</html>