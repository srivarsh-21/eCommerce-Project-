<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sell Page 2</title>
  <link rel="stylesheet" href="./Header_footerstyle.css">
  <link rel="stylesheet" href="./Edit&add.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
  <header class="bg-light border-bottom fixed-top">
    <!-- Top Header Row -->
    <div class="container">
      <div class="d-flex justify-content-between align-items-end py-2 flex-wrap">

        <!-- Logo -->
        <div class="logo">
          <img src="./assets/image/True-motor-logo.png" alt="True Motors Logo" height="40">
        </div>

        <!-- Toggler + Collapsible Info -->
        <div class="d-flex align-items-end flex-grow-1 justify-content-end">

          <!-- Toggler visible only on small screens -->
          <button class="navbar-toggler position-fixed fixed d-md-none p-1 ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#headerRightContent" aria-controls="headerRightContent" aria-expanded="false"
            aria-label="Toggle navigation" style="width: 32px; height: 32px;">
            <img src="assets/icon/justify.svg" alt="Menu" style="width: 24px; height: 24px;">
          </button>

          <!-- Collapsible content (Right Header Info) -->
          <div class="collapse d-md-flex flex-wrap align-items-center gap-3 ms-md-3 mt-2 mt-md-0 w-100 w-md-auto justify-content-md-end"
            id="headerRightContent">
            <div class="text-end flex-grow-1 flex-md-grow-0 min-w-150">
              <small class="text-muted d-block">Call us at</small>
              <span class="fw-bold">987-654-3210</span>
            </div>

            <img src="./assets/icon/notification.svg" alt="Notification" height="24">

            <div class="text-center">
              <a href="#" class="btn p-0">
                <img src="./assets/icon/login.png" alt="Login Icon" height="30">
              </a>
              <p class="mb-0 small">Hari</p>
            </div>

            <div class="d-flex align-items-center">
              <i class="bi bi-globe me-2"></i>
              <select class="form-select form-select-sm d-inline w-auto border-0 shadow-none">
                <option>English</option>
                <option>Tamil</option>
                <option>Hindi</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark head-nav border-top border-bottom">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a href="#" class="nav-link text-white px-3">Buy Vehicle</a></li>
            <li class="nav-item"><a href="./Sellhome.php" class="nav-link text-white px-3">Sell Vehicle</a></li>
            <li class="nav-item"><a href="./compare_page.php" class="nav-link text-white px-3">Compare</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white px-3">Rental</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white px-3">Vehicle Services</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white px-3">Blogs & News</a></li>
          </ul>

          <!-- Search -->
          <div class="d-flex align-items-center">
            <button id="toggleSearch" class="btn btn-link p-0 me-2" type="button">
              <img src="./assets/icon/Search.png" alt="Search Icon" height="24">
            </button>
            <form id="searchForm" class="d-none d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search vehicles..." aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </nav>
  </header>



  <div style="height: 140px;"></div>
  <div class="container-fluid p-4 px-md-5">
    <img src="./assets/image/Hero.png" alt="Altroz Banner" class="img-fluid w-100" />
  </div>
  <div class="container-fluid py-4 px-5">
    <div class="row g-4">
      <aside class="col-md-3 col-12 order-md-0 order-1">
        <div class="card head-nav image-card text-white p-4 rounded-3 border border-secondary-subtle mb-4"
          style="height: 300px; overflow: hidden; position: relative;">
          <h5 class="text-center fw-semibold mb-2">Help & Support —<br>We’re Here for You!</h5>
          <h6 class="fw-semibold fs-6 mb-2">Need Assistance? We've Got You Back!</h6>
          <p class="small mb-3 me-5 pe-5">For any questions or concerns regarding your vehicle listing, please contact
            our support team at</p>

          <div class="d-flex align-items-center justify-content-between flex-wrap">

            <div class="bg-white text-dark px-3 py-2 rounded-2 small fw-bold d-flex align-items-center gap-2 mb-2">
              <img src="./assets/icon/call.svg" height="16" alt=""> +91 90 4783 4783
            </div>

            <div class="ms-auto align-self-start pt-2 image-container"
              style="position: absolute; bottom: 0px; right: 0;">
              <img src="./assets/image/vecteeyoung-woman-customer-support.png" alt="Support" class="img-fluid"
                style="max-height: 190px; object-fit: contain;">
            </div>

          </div>
        </div>

        <div class="card p-0 border-0">
          <img src="./assets/image/book-a-test-drive.png" class="img-fluid rounded-3" alt="Skoda Test Drive">
        </div>
      </aside>


      <main class="col-md-9 col-12 order-md-1 order-0">
        <div class="d-flex align-items-center gap-3 mb-4">
          <h2 class="mb-0">Sell Vehicle</h2>
          <span class="text-muted">TN 57 BB 1010</span>
        </div>

        <form id="vehicleForm">
          <h5 class="mb-3 fw-bold">Add Or Edit Vehicle</h5>

          <div class="row g-3 mb-4">
            <div class="col-md-4 col-12">
              <select class="form-select" name="addVehicle">
                <option value="">Add Vehicle</option>
                <option value="car">Car</option>
                <option value="bike">Bike</option>
                <option value="truck">Truck</option>
              </select>
            </div>
            <div class="col-md-4 col-12">
              <select class="form-select" name="make">
                <option value="">Select Make</option>
                <option value="maruti">Maruti Suzuki</option>
                <option value="hyundai">Hyundai</option>
                <option value="tata">Tata</option>
                <option value="mahindra">Mahindra</option>
              </select>
            </div>
            <div class="col-md-4 col-12">
              <select class="form-select" name="model">
                <option value="">Select Model</option>
                <option value="swift">Swift</option>
                <option value="baleno">Baleno</option>
                <option value="i20">i20</option>
                <option value="creta">Creta</option>
              </select>
            </div>
          </div>

          <div class="row g-3 mb-4 ">
            <div class="col-md-4 col-12">
              <select class="form-select" name="fuelType">
                <option value="">Fuel Type</option>
                <option value="petrol">Petrol</option>
                <option value="diesel">Diesel</option>
                <option value="cng">CNG</option>
                <option value="electric">Electric</option>
              </select>
            </div>
            <div class="col-md-4 col-12">
              <select class="form-select" name="regYear">
                <option value="">Registration Year</option>
                <option>2024</option>
                <option>2023</option>
                <option>2022</option>
                <option>2021</option>
              </select>
            </div>
            <div class="col-md-4 col-12">
              <input type="text" name="kmsDriven" class="form-control" placeholder="Kms Driven">
            </div>
          </div>

          <div class="row g-3 mb-4 ">
            <div class="col-md-4 col-12">
              <select class="form-select" name="location">
                <option value="">Location</option>
                <option>Chennai</option>
                <option>Coimbatore</option>
                <option>Bangalore</option>
                <option>Hyderabad</option>
              </select>
            </div>
            <div class="col-md-4 col-12">
              <select class="form-select" name="rto">
                <option value="">Select RTO</option>
                <option>TN 01</option>
                <option>TN 09</option>
                <option>TN 37</option>
                <option>TN 57</option>
              </select>
            </div>
            <div class="col-md-4 col-12">
              <input type="date" name="insurance Validity Date" class="form-control">
            </div>
          </div>

          <div class="row g-3 mb-4">
            <div class="col-md-4 col-12">
              <select class="form-select" name="transmission">
                <option value="">Transmission</option>
                <option>Manual</option>
                <option>Automatic</option>
                <option>CVT</option>
              </select>
            </div>
            <div class="col-md-4 col-12">
              <input type="text" name="price" class="form-control" placeholder="Price">
            </div>
            <div class="col-md-4 col-12">
              <select class="form-select" name="emiOption">
                <option value="">EMI Option</option>
                <option>Available</option>
                <option>Not Available</option>
              </select>
            </div>
          </div>

          <div class="image-upload-section mb-4">
            <div class="row g-3">
              <div class="col-md-6 col-12">
                <div class="upload-area p-4 mb-3 rounded text-center fw-medium"
                  style="border: 3px dashed #742B88;" onclick="document.getElementById('fileInput').click()">
                  <p class="upload-text text-muted mb-2">Drag and Drop your image here</p>
                  <div class="upload-icon mb-2">
                    <img src="./assets/icon/image-upload.svg" alt="" class="img-fluid" style="height: 40px;">
                  </div>
                  <p class="upload-text text-muted mb-0">Maximum 5 MB file size</p>
                </div>
              </div>

              <div class="col-md-6 mt-lg-5 pe-lg-5 col-12 text-center">
                <div class="add-more-images rounded p-3 bg-white d-inline-block" onclick="document.getElementById('fileInput').click()">
                  <div class="add-image-icon">
                    <img src="./assets/icon/image-upload.svg" alt="" class="img-fluid" style="height: 32px;">
                  </div>
                  <div class="add-more-text fw-medium mt-2" style="color: #742B88;">Add More Image</div>
                </div>
              </div>
            </div>
            <input type="file" id="fileInput" multiple accept="image/*" style="display: none" />
            <div class="preview-container mt-3" id="previewContainer"></div>
          </div>


          <div class="row g-4">
            <div class="col-md-4 col-12">
              <div class="custom-select-wrapper border rounded p-2 bg-light">
                <button id="featureToggleBtn"
                  class="btn btn-link fw-semibold p-0 mb-2 text-black text-decoration-none d-flex align-items-center"
                  type="button" data-bs-toggle="collapse" data-bs-target="#featureChecklist" aria-expanded="true"
                  aria-controls="featureChecklist">
                  Feature Checklist <span id="featureArrow" class="ms-2 betw">▾</span>
                </button>


                <div class="collapse show" id="featureChecklist">
                  <div class="custom-options">
                    <div class="form-check mb-1">
                      <input class="form-check-input" type="checkbox" value="ac" id="ac">
                      <label class="form-check-label" for="ac">Air Conditioning</label>
                    </div>
                    <div class="form-check mb-1">
                      <input class="form-check-input" type="checkbox" value="abs" id="abs">
                      <label class="form-check-label" for="abs">ABS</label>
                    </div>
                    <div class="form-check mb-1">
                      <input class="form-check-input" type="checkbox" value="airbags" id="airbags">
                      <label class="form-check-label" for="airbags">Airbags</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="gps" id="gps">
                      <label class="form-check-label" for="gps">GPS Navigation</label>
                    </div>
                  </div>
                </div>
              </div>
              <input type="hidden" name="features" id="selected-features">
            </div>



            <div class="col-md-6 col-12">
              <div class="status-section rounded d-flex gap-3 p-3 ">
                <span class="status-label fw-semibold d-block mb-2">Status:</span>
                <div class="status-options gap-3 d-flex">
                  <div class="form-check mb-2 ">
                    <input class="form-check-input" type="checkbox" id="active" name="status" value="active" checked>
                    <label class="form-check-label" for="active">Active</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="inactive" name="status" value="inactive">
                    <label class="form-check-label " for="inactive">Inactive</label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-actions mt-4 d-flex gap-2">
            <button type="submit" class="btn text-white px-5 text-purple-btn ">Save</button>
            <button type="button" class="btn px-5 text-purple-outset-btn" onclick="previewForm()">Preview</button>
          </div>

        </form>
      </main>
    </div>
  </div>

  </div>
  <!-- Footer -->
  <footer class="bg-dark text-white pt-5">
    <div class="container">
      <div class="row gy-4">
        <!-- Brand Info -->
        <div class="col-lg-4">
          <img src="./assets/image/True-motor-logo.png" alt="True Motors Logo" class="img-fluid mb-3" style="max-width: 280px;">
          <p><strong>TrueMotors – Your One-Stop Auto Destination.</strong></p>
          <p>Buy or sell with confidence through our trusted marketplace offering premium vehicles, great service, and a seamless experience.</p>
        </div>

        <!-- Quick Links -->
        <div class="col-6 col-lg-2">
          <h5>Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white-50 text-decoration-none d-block mb-2">About Us</a></li>
            <li><a href="#" class="text-white-50 text-decoration-none d-block mb-2">Contacts</a></li>
            <li><a href="#" class="text-white-50 text-decoration-none d-block mb-2">News</a></li>
            <li><a href="#" class="text-white-50 text-decoration-none d-block mb-2">Testimonials</a></li>
            <li><a href="#" class="text-white-50 text-decoration-none d-block mb-2">Privacy Policy</a></li>
          </ul>
        </div>

        <!-- Discover -->
        <div class="col-6 col-lg-2">
          <h5>Discover</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white-50 text-decoration-none d-block mb-2">Buy vehicle</a></li>
            <li><a href="#" class="text-white-50 text-decoration-none d-block mb-2">Sell vehicle</a></li>
            <li><a href="#" class="text-white-50 text-decoration-none d-block mb-2">Rent vehicle</a></li>
            <li><a href="#" class="text-white-50 text-decoration-none d-block mb-2">Compare vehicle</a></li>
          </ul>
        </div>

        <!-- Help & Support -->
        <div class="col-6 col-lg-2">
          <h5>Help & Support</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white-50 text-decoration-none d-block mb-2">FAQs</a></li>
            <li><a href="#" class="text-white-50 text-decoration-none d-block mb-2">Security</a></li>
            <li><a href="#" class="text-white-50 text-decoration-none d-block mb-2">Terms & Conditions</a></li>
          </ul>
        </div>

        <!-- Connect Section -->
        <div class="col-6 col-lg-2">
          <h5>Let's Connect On:</h5>
          <div class="d-flex flex-wrap flex-md-nowrap mb-3">
            <img src="./assets/image/apple_store.png" alt="Apple Store" class="img-fluid me-2 mb-2" style="width: 110px; border-radius: 8px;">
            <img src="./assets/image/google_play.png" alt="Google Play" class="img-fluid mb-2" style="width: 110px; border-radius: 8px;">
          </div>

          <p>Follow Us:</p>
          <div class="d-flex flex-wrap gap-3">
            <img src="./assets/icon/Facebook.png" alt="Facebook" class="bg-white rounded-circle p-1" style="width: 32px;">
            <img src="./assets/icon/instagram.png" alt="Instagram" class="bg-white rounded-circle p-1" style="width: 32px;">
            <img src="./assets/icon/youtube.png" alt="YouTube" class="bg-white rounded-circle p-1" style="width: 32px;">
            <img src="./assets/icon/linkedin.png" alt="LinkedIn" class="bg-white rounded-circle p-1" style="width: 32px;">
            <img src="./assets/icon/twitter.png" alt="X (Twitter)" class="bg-white rounded-circle p-1" style="width: 32px;">
          </div>

        </div>
      </div>

      <div class="border-top border-secondary mt-4 pt-3 text-center">
        <p class="mb-0">
          <span style="font-size: 28px; font-weight: 600">©</span> 2025 True Motors, All rights reserved
        </p>
      </div>
    </div>
  </footer>

  <script src="./assets/script.js"></script>
  <script>
    // script.js

    document.getElementById('vehicleForm').addEventListener('submit', function(e) {
      e.preventDefault();

      const form = e.target;
      const formData = new FormData(form);
      const data = {};

      // Gather standard form fields
      formData.forEach((value, key) => {
        if (data[key]) {
          // If the field already exists (like checkboxes), convert to array
          if (!Array.isArray(data[key])) {
            data[key] = [data[key]];
          }
          data[key].push(value);
        } else {
          data[key] = value;
        }
      });

      // Feature Checklist
      const selectedFeatures = [];
      document.querySelectorAll('.custom-options input[type="checkbox"]:checked').forEach((checkbox) => {
        selectedFeatures.push(checkbox.value);
      });
      data['features'] = selectedFeatures;

      // Status
      const statusChecked = [];
      document.querySelectorAll('.status-options input[type="checkbox"]:checked').forEach((checkbox) => {
        statusChecked.push(checkbox.value);
      });
      data['status'] = statusChecked;

      // Output or Save
      console.log('Form Data Array:', data);

      // Save to localStorage (example)
      localStorage.setItem('vehicleFormData', JSON.stringify(data));

      alert('Vehicle data saved successfully!');
    });
    // Toggle arrow on collapse show/hide
    const featureCollapse = document.getElementById('featureChecklist');
    const featureArrow = document.getElementById('featureArrow');

    featureCollapse.addEventListener('shown.bs.collapse', () => {
      featureArrow.textContent = '▾';
    });

    featureCollapse.addEventListener('hidden.bs.collapse', () => {
      featureArrow.textContent = '▸';
    });
  </script>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <!-- Your custom script -->
  <script src="./header_footer.js"></script>

</body>

</html>