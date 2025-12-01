<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>OTP Verification - True Motors</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Reset and Base Styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #fff;
      overflow: hidden;
      height: 100vh;
    }

    /* Container Styles */
    .otp-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 2rem 1rem;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }

    .otp-content {
      width: 100%;
      text-align: center;
    }

    /* Logo Styles */
    .logo {
      margin-bottom: 2.5rem;
    }

    .logo img {
      width: 200px;
      max-width: 100%;
      height: auto;
    }

    /* Message Styles */
    .message {
      font-size: 19px;
      text-align: left;
      margin-bottom: 1.5rem;
      font-weight: 500;
      color: #333;
      line-height: 1.4;
    }

    /* Enter Label */
    .enter-label {
      display: block;
      text-align: left;
      font-size: 16px;
      margin-bottom: 1.5rem;
      color: #201c1cd5;
      font-weight: 500;
    }

    /* OTP Input Container */
    .otp-inputs {
      display: flex;
      justify-content: center;
      gap: 15px;
      margin-bottom: 1.5rem;
      flex-wrap: nowrap;
    }

    .otp-inputs input {
      width: 50px;
      height: 50px;
      font-size: 20px;
      text-align: center;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
      transition: all 0.2s ease;
      background-color: #f8f9fa;
      font-weight: 600;
    }

    .otp-inputs input:focus {
      border: 2px solid #731d91;
      background-color: #fff;
      box-shadow: 0 0 0 3px rgba(115, 29, 145, 0.1);
    }

    .otp-inputs input.filled {
      background-color: #e8f0fe;
      border-color: #731d91;
    }

    /* Actions Container */
    .actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
      font-size: 14px;
    }

    .resend {
      color: #0066ee;
      text-decoration: none;
      font-weight: 500;
      transition: all 0.2s ease;
    }

    .resend:hover:not(.disabled) {
      color: #0052cc;
      text-decoration: underline;
    }

    .resend.disabled {
      color: #999;
      pointer-events: none;
      cursor: not-allowed;
    }

    .timer {
      color: #666;
      font-size: 14px;
      font-weight: 500;
    }

    /* Verify Button */
    .verify-btn {
      background: #742B88;
      color: #fff;
      padding: 14px 32px;
      border: none;
      border-radius: 10px;
      width: 100%;
      max-width: 300px;
      height: 50px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      display: block;
      margin: 0 auto;
    }

    .verify-btn:hover:not(:disabled) {
      background: #5a1773;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(116, 43, 136, 0.3);
    }

    .verify-btn:active:not(:disabled) {
      transform: translateY(0);
    }

    .verify-btn:disabled {
      opacity: 0.6;
      cursor: not-allowed;
    }

    /* Error Message */
    .error-message {
      color: #dc3545;
      font-size: 14px;
      margin-top: 0.5rem;
      display: none;
      text-align: center;
    }

    .error-message.show {
      display: block;
    }

    /* ===============================================
       RESPONSIVE MEDIA QUERIES
       =============================================== */

    /* Extra Small Mobile (320px - 374px) */
    @media (max-width: 374px) {
      .otp-container {
        padding: 1.5rem 0.75rem;
      }

      .logo img {
        width: 150px;
      }

      .message {
        font-size: 16px;
        margin-bottom: 1.25rem;
      }

      .enter-label {
        font-size: 14px;
        margin-bottom: 1.25rem;
      }

      .otp-inputs {
        gap: 10px;
      }

      .otp-inputs input {
        width: 45px;
        height: 45px;
        font-size: 18px;
      }

      .actions {
        font-size: 12px;
        margin-bottom: 1.5rem;
      }

      .verify-btn {
        max-width: 100%;
        font-size: 15px;
        height: 48px;
        padding: 12px 24px;
      }
    }

    /* Small Mobile (375px - 575px) */
    @media (min-width: 375px) and (max-width: 575px) {
      .otp-container {
        padding: 1.75rem 1rem;
      }

      .logo img {
        width: 170px;
      }

      .message {
        font-size: 17px;
      }

      .enter-label {
        font-size: 15px;
      }

      .otp-inputs {
        gap: 12px;
      }

      .otp-inputs input {
        width: 48px;
        height: 48px;
        font-size: 19px;
      }

      .verify-btn {
        max-width: 280px;
      }
    }

    /* Medium Mobile / Large Phone (576px - 767px) */
    @media (min-width: 576px) and (max-width: 767px) {
      .otp-container {
        padding: 2rem 1.5rem;
        max-width: 450px;
      }

      .logo img {
        width: 180px;
      }

      .message {
        font-size: 18px;
      }

      .otp-inputs {
        gap: 14px;
      }

      .otp-inputs input {
        width: 52px;
        height: 52px;
        font-size: 20px;
      }

      .verify-btn {
        max-width: 300px;
        height: 52px;
      }
    }

    /* Tablet Portrait (768px - 991px) */
    @media (min-width: 768px) and (max-width: 991px) {
      .otp-container {
        padding: 2.5rem 2rem;
        max-width: 500px;
      }

      .logo img {
        width: 200px;
      }

      .message {
        font-size: 19px;
      }

      .otp-inputs {
        gap: 18px;
      }

      .otp-inputs input {
        width: 55px;
        height: 55px;
        font-size: 22px;
      }

      .actions {
        font-size: 15px;
      }

      .verify-btn {
        max-width: 320px;
        height: 54px;
        font-size: 17px;
      }
    }

    /* Tablet Landscape / Small Desktop (992px - 1199px) */
    @media (min-width: 992px) and (max-width: 1199px) {
      .otp-container {
        padding: 3rem 2rem;
        max-width: 520px;
      }

      .logo img {
        width: 220px;
      }

      .message {
        font-size: 20px;
        margin-bottom: 1.75rem;
      }

      .enter-label {
        font-size: 17px;
      }

      .otp-inputs {
        gap: 20px;
      }

      .otp-inputs input {
        width: 58px;
        height: 58px;
        font-size: 24px;
      }

      .verify-btn {
        max-width: 340px;
        height: 56px;
        font-size: 18px;
      }
    }

    /* Desktop (1200px and above) */
    @media (min-width: 1200px) {
      .otp-container {
        padding: 3rem 2rem;
        max-width: 550px;
      }

      .logo img {
        width: 230px;
      }

      .message {
        font-size: 20px;
      }

      .enter-label {
        font-size: 17px;
      }

      .otp-inputs {
        gap: 22px;
      }

      .otp-inputs input {
        width: 60px;
        height: 60px;
        font-size: 24px;
      }

      .verify-btn {
        max-width: 350px;
        height: 56px;
        font-size: 18px;
      }
    }

    /* Landscape Orientation for Mobile */
    @media (max-height: 600px) and (orientation: landscape) {
      .otp-container {
        min-height: auto;
        padding: 1.5rem 1rem;
      }

      .logo {
        margin-bottom: 1rem;
      }

      .logo img {
        width: 140px;
      }

      .message {
        font-size: 15px;
        margin-bottom: 1rem;
      }

      .enter-label {
        font-size: 14px;
        margin-bottom: 1rem;
      }

      .otp-inputs {
        margin-bottom: 1rem;
        gap: 10px;
      }

      .otp-inputs input {
        width: 42px;
        height: 42px;
        font-size: 18px;
      }

      .actions {
        margin-bottom: 1rem;
        font-size: 12px;
      }

      .verify-btn {
        height: 44px;
        font-size: 15px;
        max-width: 250px;
      }
    }

    /* High DPI / Retina Displays */
    @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
      .otp-inputs input {
        border-width: 0.5px;
      }

      .otp-inputs input:focus {
        border-width: 1.5px;
      }
    }

    /* Accessibility - Reduced Motion */
    @media (prefers-reduced-motion: reduce) {
      * {
        animation: none !important;
        transition: none !important;
      }

      .verify-btn:hover {
        transform: none;
      }
    }

    /* Dark Mode Support */
    @media (prefers-color-scheme: dark) {
      body {
        background-color: #1a1a1a;
        color: #fff;
      }

      .message,
      .enter-label {
        color: #e0e0e0;
      }

      .otp-inputs input {
        background-color: #2a2a2a;
        border-color: #444;
        color: #fff;
      }

      .otp-inputs input:focus {
        background-color: #333;
        border-color: #9b4fc9;
      }

      .timer {
        color: #999;
      }
    }

    /* Print Styles */
    @media print {
      .otp-container {
        min-height: auto;
      }

      .verify-btn,
      .actions {
        display: none;
      }
    }
  </style>
</head>
<body>
  <div class="otp-container">
    <div class="otp-content">
      <div class="logo">
        <img src="assets/image/True-motor-logo.png" alt="True Motors Logo" />
      </div>

      <p class="message">An OTP code has been sent to your mobile number</p>

      <label class="enter-label">Enter the code</label>
      
      <div class="otp-inputs">
        <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]" autocomplete="off">
        <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]" autocomplete="off">
        <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]" autocomplete="off">
        <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]" autocomplete="off">
      </div>

      <div class="error-message" id="errorMessage"></div>

      <div class="actions">
        <a href="#" class="resend">Resend OTP</a>
        <span class="timer">01:00</span>
      </div>

      <button class="verify-btn">Verify</button>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const inputs = document.querySelectorAll('.otp-inputs input');
    const resendLink = document.querySelector('.resend');
    const timerSpan = document.querySelector('.timer');
    const verifyBtn = document.querySelector('.verify-btn');
    const errorMessage = document.getElementById('errorMessage');

    let countdownTime = 60;
    let timer;

    // Focus control and input validation
    inputs.forEach((input, index) => {
      // Input event - only allow numbers
      input.addEventListener('input', (e) => {
        input.value = input.value.replace(/[^0-9]/g, '');
        
        // Add filled class for visual feedback
        if (input.value) {
          input.classList.add('filled');
        } else {
          input.classList.remove('filled');
        }
        
        // Auto-focus next input
        if (input.value.length === 1 && index < inputs.length - 1) {
          inputs[index + 1].focus();
        }
        
        // Hide error message when user starts typing
        errorMessage.classList.remove('show');
      });

      // Keydown event - handle backspace
      input.addEventListener('keydown', (e) => {
        if (e.key === 'Backspace' && !input.value && index > 0) {
          inputs[index - 1].focus();
          inputs[index - 1].value = '';
          inputs[index - 1].classList.remove('filled');
        }
      });

      // Paste event - handle pasting OTP
      input.addEventListener('paste', (e) => {
        e.preventDefault();
        const pastedData = e.clipboardData.getData('text').replace(/[^0-9]/g, '');
        
        if (pastedData.length === 4) {
          inputs.forEach((inp, idx) => {
            inp.value = pastedData[idx] || '';
            if (inp.value) inp.classList.add('filled');
          });
          inputs[3].focus();
        }
      });
    });

    // Start OTP Timer
    function startTimer() {
      let secondsLeft = countdownTime;
      resendLink.classList.add('disabled');
      timerSpan.textContent = '01:00';
      clearInterval(timer);

      timer = setInterval(() => {
        secondsLeft--;
        const min = Math.floor(secondsLeft / 60);
        const sec = secondsLeft % 60;
        timerSpan.textContent = `0${min}:${sec < 10 ? '0' + sec : sec}`;

        if (secondsLeft <= 0) {
          clearInterval(timer);
          timerSpan.textContent = 'Expired';
          resendLink.classList.remove('disabled');
        }
      }, 1000);
    }

    // Generate fake OTP
    function generateOTP() {
      return Math.floor(1000 + Math.random() * 9000).toString();
    }

    // Resend OTP logic
    resendLink.addEventListener('click', (e) => {
      e.preventDefault();
      
      if (resendLink.classList.contains('disabled')) return;

      const newOtp = generateOTP();
      console.log("New OTP sent:", newOtp);

      // Clear OTP inputs
      inputs.forEach(input => {
        input.value = '';
        input.classList.remove('filled');
      });
      inputs[0].focus();

      // Hide error message
      errorMessage.classList.remove('show');

      // Restart timer
      clearInterval(timer);
      startTimer();

      // Show feedback
      const originalText = resendLink.textContent;
      resendLink.textContent = 'OTP Sent!';
      setTimeout(() => {
        resendLink.textContent = originalText;
      }, 2000);
    });

    // Verify OTP click
    verifyBtn.addEventListener('click', () => {
      const enteredOtp = Array.from(inputs).map(input => input.value).join('');
      
      if (enteredOtp.length < 4) {
        errorMessage.textContent = 'Please enter the complete 4-digit OTP';
        errorMessage.classList.add('show');
        inputs[0].focus();
        return;
      }

      // Disable button during verification
      verifyBtn.disabled = true;
      verifyBtn.textContent = 'Verifying...';

      // Simulate verification (replace with actual API call)
      setTimeout(() => {
        // Success scenario
        verifyBtn.textContent = 'Verified!';
        verifyBtn.style.backgroundColor = '#28a745';
        
        setTimeout(() => {
          alert('OTP verified successfully!');
          // Redirect or close overlay here
          verifyBtn.disabled = false;
          verifyBtn.textContent = 'Verify';
          verifyBtn.style.backgroundColor = '#742B88';
        }, 1000);
      }, 1500);
    });

    // Initialize timer on load
    startTimer();

    // Focus first input on load
    inputs[0].focus();
  </script>
</body>
</html>