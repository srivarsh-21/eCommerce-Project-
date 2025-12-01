<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service Booking Confirmation</title>
  <style>

    body {
      font-family: Arial, sans-serif;
      background-color: #f5f6f8;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 900px;
      margin: 40px auto;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
      padding: 20px 30px;
      display: flex;
      gap: 20px;
    }

    .left {
      flex: 1;
    }

    .right {
      flex: 1.2;
      border-left: 1px solid #ddd;
      padding-left: 20px;
    }

    h2 {
      color: #2ca14d;
      margin-bottom: 10px;
    }

    .subtitle {
      color: #555;
      font-size: 14px;
      margin-bottom: 20px;
    }

    .booking-box {
      background: #f9fafc;
      border: 1px solid #e2e2e2;
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 20px;
    }

    .booking-box h3 {
      margin-top: 0;
      margin-bottom: 15px;
    }

    .booking-box p {
      margin: 8px 0;
      font-size: 14px;
    }

    .booking-box span {
      font-weight: bold;
    }

    .special {
      font-style: italic;
      color: #666;
    }

    img {
      width: 100%;
      border-radius: 8px;
      margin-top: 10px;
    }

    h4 {
      margin-top: 0;
      margin-bottom: 10px;
      font-size: 18px;
      color: #333;
    }

    ol {
      padding-left: 20px;
      font-size: 14px;
      color: #444;
    }

    ol li {
      margin-bottom: 12px;
    }

    .view-btn {
      display: inline-block;
      margin-top: 10px;
      padding: 10px 18px;
      background: #2ca14d;
      color: white;
      text-decoration: none;
      border-radius: 6px;
      font-size: 14px;
    }

    .view-btn:hover {
      background: #238a3e;
    }
  </style>
</head>
<body>


  <div class="container">
    <!-- Left Section -->
    <div class="left">
      <h2>Service Booking Confirmed!</h2>
      <p class="subtitle">Your booking is confirmed. Our team will contact you shortly.</p>

      <div class="booking-box">
        <h3>Booking Summary</h3>
        <p><span>Vehicle:</span> Toyota Innova Crysta</p>
        <p><span>Service Type:</span> General Service</p>
        <p><span>Preferred Date & Time:</span> 24/08/25 / 9 AM – 6 PM</p>
        <p><span>Service Location:</span> Coimbatore</p>
        <p class="special"><span>Special Instruction:</span> Engine noise while accelerating.</p>
      </div>

      <img src="image 586.png" alt="Mechanic working on car">

      <a href="#" class="view-btn">View Your Booking »</a>
    </div>

    <!-- Right Section -->
    <div class="right">
      <h4>Service Booking – Terms & Conditions</h4>
      <ol>
        <li><b>Booking Confirmation</b><br>
          • Your booking is confirmed based on the details provided.<br>
          • Changes in booking (reschedule/cancellation) can be done up to 2 hours before your scheduled time.
        </li>
        <li><b>Vehicle Pickup & Drop</b><br>
          • Ensure your vehicle is ready at the pickup time and location if you have chosen home pickup & drop.<br>
          • Remove all valuables from the vehicle before handing it over to our service partner.
        </li>
        <li><b>Service Scope</b><br>
          • The final service charges may vary based on actual inspection and service requirements.<br>
          • Only genuine parts or manufacturer-approved alternatives will be used for replacements.
        </li>
        <li><b>Payments</b><br>
          • Full payment must be completed before the vehicle is released post-service.<br>
          • Any additional services or part replacements will be informed and charged separately.
        </li>
        <li><b>Liability</b><br>
          • TrueMotors is not responsible for pre-existing damages or mechanical failures unrelated to the service performed.<br>
          • Warranty on parts and service is as per the manufacturer’s or service partner’s policy.
        </li>
        <li><b>Cancellation Policy</b><br>
          • Cancellations within 2 hours of scheduled time may attract cancellation charges as per our policy.
        </li>
        <li><b>Disputes</b><br>
          • For any concerns or disputes regarding your service, please contact our support team for resolution.
        </li>
      </ol>
    </div>
  </div>
</body>
</html>
