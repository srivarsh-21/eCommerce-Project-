<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Listings - Rental Vehicle</title>
    <link rel="stylesheet" href="./Header_footerstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>


        body {
            font-family: 'Poppins', sans-serif;
            margin-top: 150px;
            background-color: #f8f9fa;
        }
        
        /* Profile Card Styles */
        .profile-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            overflow: hidden;
        }
        
        .profile-avatar {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #742B88, #a855f7);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
        }
        
        /* Sidebar Styles */
        .sidebar-item {
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
            cursor: pointer;
            color: #333;
            transition: all 0.3s ease;
        }
        
        .sidebar-item:hover {
            background-color: #f8f9fa;
        }
        
        .sidebar-item.active {
            background-color: #742B88;
            color: white;
        }
        
        /* Content Section Styles */
        .content-section {
            display: none;
        }
        
        .content-section.active {
            display: block;
        }

        /* Modern Saved Vehicles Styles */
        .page-header {
            background:#f8f9fa;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 30px;
        }

        .page-title {
            font-size: 2rem;
            font-weight: 700;
            color: #111010ff;
            margin-bottom: 10px;
        }

        .page-subtitle {
            color: #000000;
            font-size: 1.3rem;
            font-weight: 400;
            margin-bottom: 0;
            line-height: 1.6;
        }

    



        .saved-vehicles-btn {
            
            color: #000000;
            font-weight: 600;
            border-bottom-color: #742B88;
            border-bottom-width: 3px;
            background: linear-gradient(135deg, #FFFFFF 0%, #FFB1B1 100%);
            border-top: none;
            border-left: none;
            border-right: none;
            padding: 10px 25px;
            margin-top: 20px; 
            font-weight: 500;
            border-radius: 0;
            

        }

         .saved-vehicles-btn:hover{
            background-color: #9d35baff;
            
        }

        .saved-vehicles-hr{
            position: relative !important;
            margin-top:0px !important;
        }

        .vehicle-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .vehicle-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            position: relative;
            margin-bottom: 20px;
        }

        .vehicle-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }

        .vehicle-image-section {
            position: relative;
            background-color: #ffffff;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .vehicle-image-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -20%;
            width: 120%;
            height: 120%;
            background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.1) 50%, transparent 70%);
            border-radius: 50%;
        }

        .vehicle-image {
            width: 180px;
            height: 120px;
            z-index: 2;
            position: relative;
        }

        .heart-icon {
            position: absolute;
            top: 15px;
            right: 15px;
            background: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            /* transition: all 0.3s ease;
            z-index: 3;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);  */
        }  

        /* .heart-icon:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        } */

        .heart-icon i {
            color: #742B88;
            font-size: 18px;
        }

        .vehicle-details {
            padding: 20px;
        }

        .vehicle-name {
            font-size: 1.1rem;
            font-weight: 400;
            color: #040084;
            margin-bottom: 8px;
        }

        .vehicle-specs {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 12px;
        }

        .vehicle-price {
            font-size: 1.2rem;
            font-weight: 700;
            color: #040084;
            margin-bottom: 8px;
        }

        .vehicle-location {
            display: flex;
            align-items: center;
            color: #666;
            font-size: 0.85rem;
            margin-bottom: -10px;
            margin-left: 115px;
        }

        .vehicle-location img {
           width:20px;
           height:20px;
        }


        .emi-info {
            font-size: 0.85rem;
            color: #040084;
            margin-bottom: 15px;
        }

        .card-actions {
            display: flex;
            justify-content: center;
            padding-top: 15px;
            border-top: 1px dashed #000000;
        }

         .card-actions .my-border{
            border-top: 1px dashed #000000;
            margin: 20px 0; 
         }

        .view-seller-btn {

            color: #742B88;
            border: none;
            font-size: 0.85rem;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 5px;
        }

    

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #666;
        }

        .empty-state i {
            font-size: 4rem;
            color: #ddd;
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .vehicle-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .page-header {
                padding: 20px;
            }
            
            .page-title {
                font-size: 1.5rem;
            }
        }

        
        
    </style>
</head>

<body>
    <?php include './header.php'; ?>
    
    <!-- Main Container -->
    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="profile-card">
                    <div class="p-3 border-bottom d-flex align-items-center">
                        <div class="profile-avatar me-3">S</div>
                        <div>
                            <h6 class="mb-1">Sri Varshini <i class="bi bi-pencil-square"></i></h6>
                            <small class="text-muted">ID2334444 <span class="badge bg-success">Active</span></small>
                            <br><small class="text-muted">Valid Till 15 Sept</small>
                        </div>
                    </div>
                    <ul class="list-unstyled mb-0">
                        <li class="sidebar-item d-flex justify-content-between align-items-center" data-section="profile">
                            Profile Information
                            <i class="bi bi-chevron-right"></i>
                        </li>
                        <li class="sidebar-item d-flex justify-content-between align-items-center" data-section="bookings">
                            My Bookings
                            <i class="bi bi-chevron-right"></i>
                        </li>
                        <li class="sidebar-item d-flex justify-content-between align-items-center" data-section="listings">
                            My Listings
                            <i class="bi bi-chevron-down"></i>
                        </li>
                        <li class="sidebar-item active d-flex justify-content-between align-items-center" data-section="saved-vehicles">
                            Saved Vehicles
                            <i class="bi bi-chevron-right"></i>
                        </li>
                        <li class="sidebar-item d-flex justify-content-between align-items-center" data-section="notifications">
                            Notifications & Alerts
                            <i class="bi bi-chevron-right"></i>
                        </li>
                        <li class="sidebar-item d-flex justify-content-between align-items-center" data-section="support">
                            Help & Support
                            <i class="bi bi-chevron-right"></i>
                        </li>
                        <li class="sidebar-item d-flex justify-content-between align-items-center" data-section="security">
                            Security & Settings
                            <i class="bi bi-chevron-right"></i>
                        </li>
                        <li class="sidebar-item d-flex justify-content-between align-items-center" data-section="logout">
                            Logout
                            <i class="bi bi-chevron-right"></i>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9">
                <!-- Profile Information Section -->
                <div id="profile-section" class="content-section">
                    <div class="card">
                        <div class="card-header">
                            <h3>Profile Information</h3>
                        </div>
                        <div class="card-body">
                            <p>Your profile information will be displayed here.</p>
                        </div>
                    </div>
                </div>

                <!-- My Bookings Section -->
                <div id="bookings-section" class="content-section">
                    <div class="card">
                        <div class="card-header">
                            <h3>My Bookings</h3>
                        </div>
                        <div class="card-body">
                            <p>Your booking history will be displayed here.</p>
                        </div>
                    </div>
                </div>

                <!-- My Listings Section -->
                <div id="listings-section" class="content-section">
                    <div class="card">
                        <div class="card-header">
                            <h3>My Listings</h3>
                        </div>
                        <div class="card-body">
                            <p>Your vehicle listings will be displayed here.</p>
                        </div>
                    </div>
                </div>

                <!-- Saved Vehicles Section -->
                <div id="saved-vehicles-section" class="content-section active">
                    <!-- Page Header -->
                    <div class="page-header">
                        <h1 class="page-title">Saved Vehicles</h1>
                        <p class="page-subtitle">
                            Your saved cars, all in one place!<br>
                            Easily keep track of the vehicles you love. Compare, revisit, and book when you're ready — hassle-free! 
                        </p>
                        <button class="btn saved-vehicles-btn">
                            Saved Vehicles
                        </button><hr class="saved-vehicles-hr">
                    </div>

                    <!-- Vehicle Grid -->
                    <div class="vehicle-grid" id="vehicleGrid">
                        <!-- Vehicle cards will be populated by jQuery -->
                    </div>

                    <!-- Empty State (hidden by default) -->
                    <div class="empty-state" id="emptyState" style="display: none;">
                        <i class="bi bi-heart"></i>
                        <h3>No Saved Vehicles</h3>
                        <p>You haven't saved any vehicles yet. Start browsing to find your perfect car!</p>
                    </div>
                </div>

                <!-- Other sections -->
                <div id="notifications-section" class="content-section">
                    <div class="card">
                        <div class="card-header">
                            <h3>Notifications & Alerts</h3>
                        </div>
                        <div class="card-body">
                            <p>Your notifications will be displayed here.</p>
                        </div>
                    </div>
                </div>

                <div id="support-section" class="content-section">
                    <div class="card">
                        <div class="card-header">
                            <h3>Help & Support</h3>
                        </div>
                        <div class="card-body">
                            <p>Help and support information will be displayed here.</p>
                        </div>
                    </div>
                </div>

                <div id="security-section" class="content-section">
                    <div class="card">
                        <div class="card-header">
                            <h3>Security & Settings</h3>
                        </div>
                        <div class="card-body">
                            <p>Security settings will be displayed here.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Vehicle data array
            let savedVehicles = [
                {
                    id: 1,
                    title: "Maruti Suzuki Swift VXI 2021",
                    price: "9.2",
                    fuel: "Petrol",
                    transmission: "Manual",
                    km: "25,000",
                    emi: "13,470",
                    location: "Coimbatore",
                    image: "assets/image/Maruti-Suzuki-New-Swift.png"
                },
                {
                    id: 2,
                    title: "Maruti Suzuki Swift VXI 2021",
                    price: "9.2",
                    fuel: "Petrol",
                    transmission: "Manual",
                    km: "25,000",
                    emi: "13,470",
                    location: "Coimbatore",
                    image: "assets/image/Maruti-Suzuki-New-Swift.png"
                },
                {
                    id: 3,
                    title: "Maruti Suzuki Swift VXI 2021",
                    price: "9.2",
                    fuel: "Petrol",
                    transmission: "Manual",
                    km: "25,000",
                    emi: "13,470",
                    location: "Coimbatore",
                    image: "assets/image/Maruti-Suzuki-New-Swift.png"
                }
            ];

            // Function to render vehicle cards with modern design
            function renderVehicleCards() {
                const container = $('#vehicleGrid');
                container.empty();
                
                savedVehicles.forEach(function(vehicle, index) {
                    const vehicleCard = `
                        <div class="vehicle-card" data-vehicle-id="${vehicle.id}" style="opacity: 0; transform: translateY(20px);">
                            <div class="vehicle-image-section">
                                <img src="${vehicle.image}" alt="${vehicle.title}" class="vehicle-image">
                                <div class="heart-icon" data-vehicle-id="${vehicle.id}">
                                    <i class="bi bi-heart-fill"></i>
                                </div>
                            </div>
                            <div class="vehicle-details">
                                <h3 class="vehicle-name">${vehicle.title}</h3>
                                <div class="vehicle-specs">${vehicle.km} km | ${vehicle.fuel} | ${vehicle.transmission}</div>
                               <div class="vehicle-flex-price-location d-flex">
                                <div class="vehicle-price">₹ ${vehicle.price} <span style="font-size: 0.8rem; font-weight: 400;">Lakh</span></div>
                                <div class="vehicle-location">
                                     <img src="assets/icon/location.png" alt="location-icon">
                                    ${vehicle.location}
                                </div></div>
                                <div class="emi-info">EMI ₹${vehicle.emi}/mo</div>
                                <div class="card-actions  my-border">
                                    <a href="#" class="view-seller-btn" data-vehicle-id="${vehicle.id}">
                                        View Seller Details
                                        <i class="bi bi-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    `;
                    container.append(vehicleCard);
                    
                    // Animate card appearance
                    setTimeout(() => {
                        const card = container.find(`[data-vehicle-id="${vehicle.id}"]`);
                        card.css({
                            'transition': 'all 0.5s ease',
                            'opacity': '1',
                            'transform': 'translateY(0)'
                        });
                    }, index * 150);
                });
                
                // Check if grid is empty
                checkEmptyState();
            }

            function checkEmptyState() {
                const grid = $('#vehicleGrid');
                const emptyState = $('#emptyState');
                
                if (savedVehicles.length === 0) {
                    grid.hide();
                    emptyState.show();
                } else {
                    grid.show();
                    emptyState.hide();
                }
            }

            function removeVehicle(heartIcon) {
                const vehicleId = $(heartIcon).data('vehicle-id');
                const card = $(heartIcon).closest('.vehicle-card');
                const vehicle = savedVehicles.find(v => v.id == vehicleId);
                
                if (confirm(`Remove ${vehicle.title} from saved vehicles?`)) {
                    card.css({
                        'transition': 'all 0.3s ease',
                        'transform': 'scale(0.95)',
                        'opacity': '0'
                    });
                    
                    setTimeout(() => {
                        // Remove from array
                        savedVehicles = savedVehicles.filter(v => v.id != vehicleId);
                        card.remove();
                        checkEmptyState();
                        console.log('Updated saved vehicles:', savedVehicles);
                    }, 300);
                }
            }

            // Sidebar navigation
            $('.sidebar-item').click(function() {
                $('.sidebar-item').removeClass('active');
                $(this).addClass('active');
                $('.content-section').removeClass('active');
                
                const section = $(this).data('section');
                $(`#${section}-section`).addClass('active');
                
                if (section === 'saved-vehicles') {
                    renderVehicleCards();
                }
                
                if (section === 'logout') {
                    if (confirm('Are you sure you want to logout?')) {
                        console.log('Logout clicked');
                    }
                }
            });

            // Vehicle card interactions
            $(document).on('click', '.heart-icon', function() {
                removeVehicle(this);
            });

            $(document).on('click', '.view-seller-btn', function(e) {
                e.preventDefault();
                const vehicleId = $(this).data('vehicle-id');
                const vehicle = savedVehicles.find(v => v.id == vehicleId);
                
                console.log('View seller details for vehicle:', vehicle);
                alert(`Viewing seller details for ${vehicle.title}`);
            });

            // Global functions for external use
            window.getSavedVehicles = function() {
                return savedVehicles;
            };

            window.addSavedVehicle = function(vehicle) {
                vehicle.id = Math.max(...savedVehicles.map(v => v.id), 0) + 1;
                savedVehicles.push(vehicle);
                renderVehicleCards();
                console.log('Added new vehicle:', vehicle);
            };

            window.removeSavedVehicle = function(vehicleId) {
                savedVehicles = savedVehicles.filter(v => v.id != vehicleId);
                renderVehicleCards();
                console.log('Removed vehicle with ID:', vehicleId);
            };

            // Initial render
            renderVehicleCards();
            
            console.log('Saved Vehicles Data:', savedVehicles);
        });
    </script>

    <?php include './footer.php'; ?>
</body>
</html>