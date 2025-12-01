<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Book a Test Drive – True Motors</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background-color: #f5f5f5;
      font-family: 'Poppins', sans-serif;
    }
 

    .card {
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
    }

    .card h2{
      color: #742B88;
    }

    .car-img {
      max-width: 100%;
      height: auto;
    }

    .rightsidebar h4{
     color:#2101AF !important;
    }

    .rightsidebar .rupee{
     color: #040084;
    }

    .rightsidebar .emi{
     color: #040084;
    }

    .rightsidebar .a{
     color: #742B88;
     text-decoration: none;
    }

    .rightsidebar img{
        width:24px;
        height:24px;
        top:289px;
        left:368px;
    }

    .center-icon{
        text-align: center;
        margin-top: 20px;
    }

    .info-section {
      padding: 20px;
    }

    .info-section .para {
     color:#8b8181;
    }

    .form-section {
      padding: 20px;
    }
    .form-control, .form-select {
      border-radius: 8px;
    }
    .btn-primary {
      border-radius: 8px;
      font-weight: 500;
    }
    .contact-icons i {
      margin-right: 8px;
      color: #000;
    }
    .contact-icons i.bi-envelope {
      color: #6f42c1;
    }
    .info-section ul {
      padding-left: 20px;
    }

  </style>
</head>
<body>

  <div class="container w-50 py-5">
    <!-- Top Section -->
    <div class="card p-4 mb-4 ">
      <h2 class="fw-bold">Book a Test Drive – True Motors</h4>
      <p class="mb-2">Experience Your Dream Vehicle Before You Decide</p>
      <p class="mb-5">At True Motors, we believe in helping you make the right choice. Book a test drive with us and feel the comfort, performance, and style of your favourite vehicle before making it yours.</p>
      <div class="row align-items-center d-flex">
        <div class="col-md-4 text-center w-50 ">
          <img src="assets/image/Maruti-Suzuki-New-Swift.png" alt="Swift" class="car-img ">
        </div>
        <div class="col-md-6 rightsidebar">
          <h4 class="text-primary">Maruti Suzuki Swift VXI 2021</h4>
          <p class="mb-1">25,000 km | Petrol | <a href="#" class="a">Manual</a></p>
          <p class="mb-1 rupee"><strong>₹9.2 Lakh</strong></p>
          <p class="mb-1 emi">EMI ₹13,470/mo</p>
          <p class="mb-0"><img src="assets/icon/location.png" alt="Location icon"> Coimbatore</p>
        </div>
      </div>
    <div class="center-icon">
        <h4 class="fw-bold ">Request a Test Drive</h2>
    </div>
  <div class="container w-100 py-4 ">
    <div class="row">
      <!-- Left Column -->
      <div class="col-md-6 info-section">
        <h4 class="fw-bold fs-2">Book a<br>Test Drive</h4>
        <p class="para">Experience Your Dream Vehicle Before You Decide</p>
        <ul class="text-muted">
          <li>Wide range of vehicles to choose from</li>
          <li>Flexible time slots as per your convenience</li>
          <li>Sanitized vehicles and safe test-drive process</li>
          <li>Expert guidance from our sales team</li>
        </ul>

        <p class="fw-bold mt-4 fs-5">Visit Our Showrooms</p>
        <p>Prefer walking in? Visit any of our branches to book a test drive instantly.</p>

        <p class="fw-semibold mt-4 fs-5 ">Need Assistance?</p>
        <p class="contact-icons">
          <i class="bi bi-telephone-fill"></i> +91-XXXXXXXXXX <br>
          <i class="bi bi-envelope-fill"></i> support@truemotors.com
        </p>
      </div>

      
      <!-- Right Column -->

<div class="col-md-6 form-section shadow p-4 bg-white rounded ">
  <form>
    <div class="mb-3">
      <label for="fullName" class="form-label">Full Name</label>
      <input type="text" class="form-control" id="fullName" placeholder="Full Name" required>
    </div>
    <div class="mb-3">
      <label for="contactNumber" class="form-label">Contact Number</label>
      <input type="tel" class="form-control" id="contactNumber" placeholder="Contact Number" required>
    </div>
    <div class="mb-3">
      <label for="emailAddress" class="form-label">Email Address</label>
      <input type="email" class="form-control" id="emailAddress" placeholder="Email Address" required>
    </div>
    <div class="mb-3">
      <label for="selectVehicle" class="form-label">Select Vehicle</label>
      <select class="form-select" id="selectVehicle">
        <option selected disabled>Select Vehicle</option>
        <option>Cars</option>
        <option>Bikes</option>
        <option>E-Vehicles</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="preferredDate" class="form-label">Preferred Date</label>
      <input type="date" class="form-control" id="preferredDate" placeholder="dd-mm-yyyy">
    </div>
    <div class="mb-3">
      <label for="yourLocation" class="form-label">Your Location / Nearest Branch</label>
      <input type="text" class="form-control" id="yourLocation" placeholder="Your Location / Nearest Branch">
    </div>
    <div class="mb-3">
      <label for="preferredTimeSlot" class="form-label">Preferred Time Slot</label>
      <input type="text" class="form-control" id="preferredTimeSlot" placeholder="Preferred Time Slot">
    </div>
    <button type="submit" class="btn btn-primary w-100 mt-3">Book Test Drive</button>
  </form>
</div>
</div>
  </div>
  </div>
  </div>

  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    form.addEventListener("submit", function (e) {
      e.preventDefault(); // Prevent default form submission

      // Get form field values
      const fullName = document.getElementById("fullName").value.trim();
      const contactNumber = document.getElementById("contactNumber").value.trim();
      const emailAddress = document.getElementById("emailAddress").value.trim();
      const selectedVehicle = document.getElementById("selectVehicle").value;
      const preferredDate = document.getElementById("preferredDate").value;
      const yourLocation = document.getElementById("yourLocation").value.trim();
      const preferredTimeSlot = document.getElementById("preferredTimeSlot").value.trim();

      // Simple validation check
      if (!fullName || !contactNumber || !emailAddress || !selectedVehicle || selectedVehicle === "Select Vehicle") {
        alert("Please fill in all required fields.");
        return;
      }

      // Basic email format check
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(emailAddress)) {
        alert("Please enter a valid email address.");
        return;
      }

      // Contact number check
      const contactPattern = /^[6-9]\d{9}$/;
      if (!contactPattern.test(contactNumber)) {
        alert("Please enter a valid 10-digit Indian contact number.");
        return;
      }

      // Submission success message
      alert("Thank you, " + fullName + "! Your test drive request has been submitted successfully.");

      // Reset form after submission
      form.reset();
    });
  });
</script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
