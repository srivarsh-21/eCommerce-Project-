<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare Cars</title>
    <link rel="stylesheet" href="./Header_footerstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    

</head>

<body>
    <?php
    include './header.php';
    ?>

    <div class="main-container">         
        <!-- Header -->         
        <div id="main-header" class="header d-flex align-items-center">             
            <button id="nav-back-button" class="back-btn">                 
                <i class="fas fa-arrow-left"></i>             
            </button>             
            <h1 id="main-title" class="header-title">Profile Information</h1>         
        </div>

        <div class="content-wrapper d-flex">             
            <!-- Sidebar -->             
            <div id="navigation-sidebar" class="sidebar" style="width: 300px;">                 
                <div id="nav-profile-info" class="sidebar-item active" data-section="profile-info">                     
                    <span>Profile Information</span>                     
                    <i class="fas fa-chevron-right sidebar-arrow"></i>                 
                </div>                                  
                
                <div id="nav-bookings" class="sidebar-item" data-section="bookings">                     
                    <span>My Bookings (Rental)</span>                     
                    <i class="fas fa-chevron-right sidebar-arrow"></i>                 
                </div>                                  
                
                <div id="nav-listings" class="sidebar-item" data-section="listings">                     
                    <span>My Listings</span>                     
                    <i class="fas fa-chevron-right sidebar-arrow"></i>                 
                </div>                                  
                
                <div id="nav-saved-vehicles" class="sidebar-item" data-section="saved-vehicles">                     
                    <span>Saved Vehicles</span>                     
                    <i class="fas fa-chevron-right sidebar-arrow"></i>                 
                </div>                                  
                
                <div id="nav-notifications" class="sidebar-item" data-section="notifications">                     
                    <span>Notifications & Alerts</span>                     
                    <i class="fas fa-chevron-right sidebar-arrow"></i>                 
                </div>                                  
                
                <div id="nav-help-primary" class="sidebar-item" data-section="help-1">                     
                    <span>Help & Support</span>                     
                    <i class="fas fa-chevron-right sidebar-arrow"></i>                 
                </div>                                  
                
                <div id="nav-help-secondary" class="sidebar-item" data-section="help-2">                     
                    <span>Help & Support</span>                     
                    <i class="fas fa-chevron-right sidebar-arrow"></i>                 
                </div>                                  
                
                <div id="nav-security" class="sidebar-item" data-section="security">                     
                    <span>Security & Settings</span>                     
                    <i class="fas fa-chevron-right sidebar-arrow"></i>                 
                </div>                                  
                
                <div id="nav-logout" class="sidebar-item" data-section="logout">                     
                    <span>Logout</span>                     
                    <i class="fas fa-chevron-right sidebar-arrow"></i>                 
                </div>             
            </div>

            <!-- Main Content Area -->
            <div class="flex-grow-1">
                <!-- Profile Information Content (Default) -->
                <div id="profile-info-content" class="main-content active p-4">
                    <h4>Profile Information</h4>
                    <p>Your profile information content goes here...</p>
                </div>

                <!-- My Bookings Content -->
                <div id="bookings-content" class="main-content">
                    <div class="p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <h4 class="fw-bold mb-1">My Booking</h4>
                                <p class="text-muted mb-0">Track and manage all your vehicle bookings in one place.</p>
                                <p class="text-muted small mb-0">View upcoming trips, past rides, payment status, and booking details — anytime, anywhere.</p>
                            </div>
                        </div>

                        <!-- Tabs -->
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

                        <!-- Tab Content -->
                        <div class="tab-content" id="bookingContent">
                            <div class="tab-pane fade show active" id="upcoming" role="tabpanel">
                                <div id="upcoming-bookings">
                                    <!-- Booking cards will be inserted here -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="past" role="tabpanel">
                                <div id="past-bookings">
                                    <!-- Past booking cards will be inserted here -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="cancelled" role="tabpanel">
                                <div id="cancelled-bookings">
                                    <!-- Cancelled booking cards will be inserted here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Other content sections -->
                <div id="listings-content" class="main-content p-4">
                    <h4>My Listings</h4>
                    <p>Your listings content goes here...</p>
                </div>

                <div id="saved-vehicles-content" class="main-content p-4">
                    <h4>Saved Vehicles</h4>
                    <p>Your saved vehicles content goes here...</p>
                </div>

                <div id="notifications-content" class="main-content p-4">
                    <h4>Notifications & Alerts</h4>
                    <p>Your notifications content goes here...</p>
                </div>

                <div id="help-1-content" class="main-content p-4">
                    <h4>Help & Support</h4>
                    <p>Help and support content goes here...</p>
                </div>

                <div id="help-2-content" class="main-content p-4">
                    <h4>Help & Support</h4>
                    <p>Additional help and support content goes here...</p>
                </div>

                <div id="security-content" class="main-content p-4">
                    <h4>Security & Settings</h4>
                    <p>Security and settings content goes here...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <script>
       // Sample booking data
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
            dropLocation: "268, Jayanthi Nagar, Coimbatore Sarjayh Puri, Tamil Nadu 641001",
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
            dropLocation: "268, Jayanthi Nagar, Coimbatore Sarjayh Puri, Tamil Nadu 641001",
            totalAmount: "₹ 3,650",
            status: "cancelled"
        }
    ]
};

// Updated function to create booking card HTML matching Image 2 design
function createBookingCard(booking) {
    const statusClass = booking.status === 'confirmed' ? 'status-confirmed' : 
                      booking.status === 'completed' ? 'status-completed' : 'status-cancelled';
    
    return `
        <div class="booking-card-v2">
            <div class="booking-row">
                <!-- Car Image -->
                <div class="car-image-section">
                    <img src="${booking.carImage}" alt="${booking.carName}" class="car-image-v2">
                </div>
                
                <!-- Car Details -->
                <div class="car-details-section">
                    <h5 class="car-name-v2">${booking.carName}</h5>
                    
                    <!-- Car Specs -->
                    <div class="car-specs-row">
                        <div class="spec-item-v2">
                            <i class="fas fa-gas-pump"></i>
                            <span>${booking.fuel}</span>
                        </div>
                        <div class="spec-item-v2">
                            <i class="fas fa-cog"></i>
                            <span>${booking.transmission}</span>
                        </div>
                        <div class="spec-item-v2">
                            <i class="fas fa-users"></i>
                            <span>${booking.seats}</span>
                        </div>
                    </div>
                    
                    <!-- Distance Info -->
                    <div class="distance-info-v2">
                        <div>${booking.distance}</div>
                        <div>${booking.extraKms}</div>
                    </div>
                    
                    <!-- Total Amount -->
                    <div class="total-amount-v2">
                        <span class="total-label-v2">Total</span>
                        <span class="total-price-v2">${booking.totalAmount}</span>
                    </div>
                </div>
                
                <!-- Location Pin -->
                <div class="location-pin-section">
                    <i class="fas fa-map-marker-alt location-pin-icon"></i>
                    <div class="location-name-v2">${booking.location}</div>
                </div>
                
                <!-- Booking Info -->
                <div class="booking-info-section">
                    <div class="booking-id-section">
                        <span class="booking-id-label">Booking ID:</span>
                        <a href="#" class="booking-id-link-v2">${booking.id}</a>
                    </div>
                    
                    <!-- Date Section -->
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
                    
                    <!-- Status and View Details -->
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

// Initialize the page
$(document).ready(function() {
    // Load initial bookings
    loadBookings('upcoming');
    loadBookings('past');
    loadBookings('cancelled');

    // Sidebar navigation with specific handling for bookings
    $('.sidebar-item').on('click', function() {
        const section = $(this).data('section');
        
        // Update sidebar active state
        $('.sidebar-item').removeClass('active');
        $(this).addClass('active');
        
        // Hide all content sections
        $('.main-content').removeClass('active');
        
        // Show selected content section
        if (section === 'bookings') {
            // Specifically show bookings content
            $('#bookings-content').addClass('active');
            $('#main-title').text('My Bookings (Rental)');
        } else if (section === 'logout') {
            // Handle logout
            if (confirm('Are you sure you want to logout?')) {
                // Add your logout logic here
                window.location.href = 'logout.php'; // or your logout URL
            }
            return;
        } else {
            // Show other content sections
            $(`#${section}-content`).addClass('active');
            
            // Update header title
            const title = $(this).find('span').text();
            $('#main-title').text(title);
        }
    });

    // Tab switching within bookings
    $('[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
        const target = $(e.target).attr('data-bs-target').replace('#', '');
        loadBookings(target);
    });

    // Back button
    $('#nav-back-button').on('click', function() {
        window.history.back();
    });

    // Click handlers for booking actions
    $(document).on('click', '.booking-id-link-v2', function(e) {
        e.preventDefault();
        const bookingId = $(this).text();
        // Add your booking details view logic here
        console.log('View booking details for: ' + bookingId);
    });

    $(document).on('click', '.view-details-link-v2', function(e) {
        e.preventDefault();
        // Add your view full details logic here
        console.log('View full booking details');
    });
});
    </script>

    <?php
    include './footer.php'
    ?>

</body>