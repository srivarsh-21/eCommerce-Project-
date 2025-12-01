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


    <!-- Header would be included here -->
    
    <div class="main-container">
        <!-- Header -->
        <div id="page-header" class="header d-flex align-items-center">
            <button id="back-button" class="back-btn">
                <i class="fas fa-arrow-left"></i>
            </button>
            <h1 id="page-title" class="header-title">Profile Information</h1>
        </div>
        
        <div class="content-wrapper">
            <!-- Sidebar -->
            <div id="sidebar" class="sidebar">
                <div id="sidebar-profile-info" class="sidebar-item active" data-section="profile-info">
                    <span>Profile Information</span>
                    <i class="fas fa-chevron-right sidebar-arrow"></i>
                </div>
                
                <div id="sidebar-bookings" class="sidebar-item" data-section="bookings">
                    <span>My Bookings (Rental)</span>
                    <i class="fas fa-chevron-right sidebar-arrow"></i>
                </div>
                
                <div id="sidebar-listings" class="sidebar-item" data-section="listings">
                    <span>My Listings</span>
                    <i class="fas fa-chevron-right sidebar-arrow"></i>
                </div>
                
                <div id="sidebar-saved-vehicles" class="sidebar-item" data-section="saved-vehicles">
                    <span>Saved Vehicles</span>
                    <i class="fas fa-chevron-right sidebar-arrow"></i>
                </div>
                
                <div id="sidebar-notifications" class="sidebar-item" data-section="notifications">
                    <span>Notifications & Alerts</span>
                    <i class="fas fa-chevron-right sidebar-arrow"></i>
                </div>
                
                <div id="sidebar-help-1" class="sidebar-item" data-section="help-1">
                    <span>Help & Support</span>
                    <i class="fas fa-chevron-right sidebar-arrow"></i>
                </div>
                
                <div id="sidebar-help-2" class="sidebar-item" data-section="help-2">
                    <span>Help & Support</span>
                    <i class="fas fa-chevron-right sidebar-arrow"></i>
                </div>
                
                <div id="sidebar-security" class="sidebar-item" data-section="security">
                    <span>Security & Settings</span>
                    <i class="fas fa-chevron-right sidebar-arrow"></i>
                </div>
                
                <div id="sidebar-logout" class="sidebar-item" data-section="logout">
                    <span>Logout</span>
                    <i class="fas fa-chevron-right sidebar-arrow"></i>
                </div>
            </div>
            
            <!-- Main Content -->
            <div id="main-content" class="main-content">
                <div id="profile-content" class="profile-content">
                    <!-- Basic Details Card -->
                    <div class="basic-details-card">
                        <div class="card-header-custom">
                            <h3 class="card-title">Basic Details</h3>
                            <button class="edit-button" id="edit-button">
                                <i class="fas fa-edit"></i>
                                <span>Edit</span>
                            </button>
                        </div>
                        
                        <div class="detail-row">
                            <span class="detail-label">Name</span>
                            <span class="detail-value" id="display-name">Sri Varshini</span>
                        </div>
                        
                        <div class="detail-row">
                            <span class="detail-label">Mail Id</span>
                            <span class="detail-value" id="display-email">srivarshini@sgsapp.in</span>
                        </div>
                        
                        <div class="detail-row">
                            <span class="detail-label">Mobile Number</span>
                            <span class="detail-value" id="display-phone">+91 62986 72196</span>
                        </div>
                        
                        <div class="detail-row">
                            <span class="detail-label">Address</span>
                            <span class="detail-value" id="display-address">14, Crosscut Road, Coimbatore</span>
                        </div>
                    </div>
                    
                    <!-- Upload Area -->
                   <div class="upload-area">
    <div class="upload-container" id="upload-container">
        <img id="uploaded-image" class="uploaded-image" src="" alt="Uploaded Image">
        <button class="remove-image-btn" id="remove-image-btn">
            <i class="fas fa-times"></i>
        </button>
        
        <div class="upload-content" id="upload-content">
            <div class="upload-icon">
                <i class="fas fa-image"></i>
            </div>
            <div class="upload-text">Drag and Drop your image here</div>
            <div class="upload-subtext">Maximum 5 MB file size</div>
            <button class="upload-btn">Upload Image</button>
        </div>
        
        <input type="file" id="file-input" class="file-input" accept="image/*">
    </div>
</div>




                </div>
            </div>
        </div>
    </div>


    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    

    <script>

$(document).ready(function() {
    // Profile data object
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
    
    // Function to display uploaded image
    function displayUploadedImage(file) {
        if (file && file.type.startsWith('image/')) {
            // Check file size (5MB limit)
            if (file.size > 5 * 1024 * 1024) {
                alert('File size exceeds 5MB limit. Please choose a smaller image.');
                return;
            }
            
            const reader = new FileReader();
            reader.onload = function(e) {
                const uploadContainer = $('#upload-container');
                const uploadedImage = $('#uploaded-image');
                const uploadContent = $('#upload-content');
                const removeBtn = $('#remove-image-btn');
                
                // Set image source and show it
                uploadedImage.attr('src', e.target.result);
                uploadedImage.show();
                
                // Hide upload content and show remove button
                uploadContent.hide();
                removeBtn.show();
                
                // Add has-image class for styling
                uploadContainer.addClass('has-image');
                
                console.log('Image displayed successfully');
            };
            reader.readAsDataURL(file);
        } else {
            alert('Please select a valid image file.');
        }
    }
    
    // Function to remove uploaded image
    function removeUploadedImage() {
        const uploadContainer = $('#upload-container');
        const uploadedImage = $('#uploaded-image');
        const uploadContent = $('#upload-content');
        const removeBtn = $('#remove-image-btn');
        const fileInput = $('#file-input');
        
        // Hide image and remove button
        uploadedImage.hide().attr('src', '');
        removeBtn.hide();
        
        // Show upload content
        uploadContent.show();
        
        // Remove has-image class
        uploadContainer.removeClass('has-image');
        
        // Clear file input
        fileInput.val('');
        
        console.log('Image removed successfully');
    }
    
    // Show/Hide profile content based on section
    function showProfileContent(section) {
        if (section === 'profile-info') {
            $('#profile-content').show();
            $('#page-title').text('Profile Information');
        } else {
            $('#profile-content').hide();
            // Update page title based on section
            const sectionTitles = {
                'bookings': 'My Bookings (Rental)',
                'listings': 'My Listings',
                'saved-vehicles': 'Saved Vehicles',
                'notifications': 'Notifications & Alerts',
                'help-1': 'Help & Support',
                'help-2': 'Help & Support',
                'security': 'Security & Settings',
                'logout': 'Logout'
            };
            $('#page-title').text(sectionTitles[section] || 'Dashboard');
        }
    }
    
    // Event Handlers
    $('#back-button').on('click', function() {
        console.log('Back button clicked');
        alert('Navigate back functionality would be implemented here');
    });
    
    $('#edit-button').on('click', function() {
        if (profileData.ui.currentSection === 'profile-info') {
            alert('Edit functionality would be implemented here');
        }
    });
    
    // Sidebar navigation
    $('.sidebar-item').on('click', function() {
        const $this = $(this);
        const section = $this.attr('data-section');
        
        // Remove active class from all items
        $('.sidebar-item').removeClass('active');
        // Add active class to clicked item
        $this.addClass('active');
        
        // Add click animation
        $this.addClass('clicked');
        setTimeout(() => {
            $this.removeClass('clicked');
        }, 150);
        
        profileData.ui.currentSection = section;
        console.log('Section changed to:', section);
        
        // Show/hide profile content based on section
        showProfileContent(section);
        
        // Handle different sections
        if (section === 'logout') {
            if (confirm('Are you sure you want to logout?')) {
                console.log('Logout confirmed');
                alert('Logout functionality would be implemented here');
            }
        } else if (section !== 'profile-info') {
            console.log('Navigate to section:', section);
            alert(`Navigate to ${$this.find('span').text()} section`);
        }
    });
    
    // Upload functionality - Updated
    $('#upload-container, .upload-btn').on('click', function(e) {
        // Don't trigger if clicking on the image or remove button
        if (!$(e.target).is('#uploaded-image, #remove-image-btn')) {
            $('#file-input').click();
        }
    });
    
    // File input change event - Updated
    $('#file-input').on('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            console.log('File selected:', file.name);
            displayUploadedImage(file);
        }
    });
    
    // Remove image button event
    $('#remove-image-btn').on('click', function(e) {
        e.stopPropagation();
        removeUploadedImage();
    });
    
    // Drag and drop functionality - Updated
    $('#upload-container').on('dragover', function(e) {
        e.preventDefault();
        if (!$(this).hasClass('has-image')) {
            $(this).css('background', '#f0f8ff');
        }
    });
    
    $('#upload-container').on('dragleave', function(e) {
        e.preventDefault();
        if (!$(this).hasClass('has-image')) {
            $(this).css('background', '#fafafa');
        }
    });
    
    $('#upload-container').on('drop', function(e) {
        e.preventDefault();
        $(this).css('background', '#fafafa');
        
        const files = e.originalEvent.dataTransfer.files;
        if (files.length > 0) {
            const file = files[0];
            console.log('File dropped:', file.name);
            displayUploadedImage(file);
        }
    });
    
    // Initialize
    showProfileContent('profile-info');
    
    console.log('Profile Information page initialized successfully');
});

    </script>





















     <?php
    include './footer.php'
    ?>
 </body>