<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>True Motors Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;600;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>
<style>
/* Only target the login form container and its children */
#login-form-wrapper * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

#login-form-wrapper {
  font-family: "Poppins", sans-serif;
  background-color: #fff;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: start;
  padding: 0;
  margin: 0;
}

#login-form-wrapper .logo {
  width: 200px;
  max-width: 100%;
  height: auto;
  margin-bottom: 1.5rem;
}

#login-form-wrapper .title {
  font-size: 28px !important;
  font-weight: 600;
  margin-bottom: 1rem;
}

#login-form-wrapper .subtitle {
  font-size: 16px !important;
  color: #000;
  margin-bottom: 1rem;
}

#login-form-wrapper .input-box {
  border: 1px solid #742b88;
  border-radius: 12px;
  width: 100%;
  max-width: 281px;
  height: 44px;
  padding: 0.5rem 1rem;
  font-size: 14px;
  transition: all 0.3s ease;
}

#login-form-wrapper .input-box:focus {
  outline: none;
  border-color: #731d91;
  box-shadow: 0 0 0 0.2rem rgba(115, 29, 145, 0.25);
}

#login-form-wrapper .input-box.is-invalid {
  border-color: #dc3545;
}

#login-form-wrapper .terms {
  font-size: 11px;
  color: #000;
  font-weight: 600;
  margin-bottom: 1rem;
}

#login-form-wrapper .login-button {
  background-color: #731d91;
  border-color: #731d91 !important;
  color: #fff;
  font-size: 16px;
  border-radius: 10px;
  font-weight: 600;
  width: 100%;
  max-width: 260px;
  height: 44px;
  transition: all 0.3s ease;
}

#login-form-wrapper .login-button:hover:not(:disabled) {
  background-color: #5a1773;
  transform: translateY(-2px);
  box-shadow: 0 4px 8px rgba(115, 29, 145, 0.3);
}

#login-form-wrapper .login-button:active:not(:disabled) {
  transform: translateY(0);
}

#login-form-wrapper .login-button:disabled {
  opacity: 0.7;
  cursor: not-allowed;
}

#login-form-wrapper .signup-text {
  font-size: 14px;
  font-weight: 700;
  line-height: 1.5;
  font-family: 'Lato', sans-serif;
  margin-top: 1.5rem;
}

#login-form-wrapper .signup-link {
  color: #00008b;
  font-weight: 600;
  text-decoration: underline;
}

#login-form-wrapper .signup-link:hover {
  color: #000080;
}

#login-form-wrapper .form-container {
  width: 100%;
  max-width: 400px;
  padding: 2rem 1rem;
}

/* Mobile devices (portrait) */
@media (max-width: 576px) {
  #login-form-wrapper .logo {
    width: 150px;
    margin-bottom: 1rem;
  }

  #login-form-wrapper .input-box {
    max-width: 100%;
    font-size: 16px; /* Prevents zoom on iOS */
  }

  #login-form-wrapper .login-button {
    max-width: 100%;
    font-size: 14px;
  }

  #login-form-wrapper .terms {
    font-size: 10px;
  }

  #login-form-wrapper .signup-text {
    font-size: 12px;
  }

  #login-form-wrapper .form-container {
    padding: 1rem;
  }
}

/* Small tablets (portrait) */
@media (min-width: 577px) and (max-width: 768px) {
  #login-form-wrapper .logo {
    width: 180px;
  }

  #login-form-wrapper .form-container {
    padding: 1.5rem;
  }
}

/* Tablets (landscape) and small desktops */
@media (min-width: 769px) and (max-width: 992px) {
  #login-form-wrapper .form-container {
    max-width: 450px;
  }
}

/* Medium to large desktops */
@media (min-width: 993px) {
  #login-form-wrapper .form-container {
    max-width: 500px;
  }
}

/* Extra large screens */
@media (min-width: 1400px) {
  #login-form-wrapper .form-container {
    max-width: 500px;
  }
}

/* Landscape orientation for mobile */
@media (max-height: 600px) and (orientation: landscape) {
  #login-form-wrapper {
    min-height: auto;
    padding-top: 1rem;
    padding-bottom: 1rem;
  }

  #login-form-wrapper .logo {
    width: 120px;
    margin-bottom: 0.5rem;
  }

  #login-form-wrapper .input-box {
    height: 38px;
    margin-bottom: 0.5rem !important;
  }

  #login-form-wrapper .terms {
    margin-bottom: 0.5rem !important;
  }

  #login-form-wrapper .login-button {
    height: 38px;
  }

  #login-form-wrapper .signup-text {
    margin-top: 0.5rem !important;
  }
}

/* High DPI screens */
@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
  #login-form-wrapper .input-box,
  #login-form-wrapper .login-button {
    border-width: 0.5px;
  }
}

/* Reduce motion for accessibility */
@media (prefers-reduced-motion: reduce) {
  #login-form-wrapper * {
    animation: none !important;
    transition: none !important;
  }
}
</style>
<body>
  <div id="login-form-wrapper">
    <div class="form-container text-center">
      <img src="assets/image/True-motor-logo.png" alt="True Motors Logo" class="logo" />
      <h2 class="title text-start fw-semibold">Login</h2>
      <p class="subtitle text-start">Please enter mobile number</p>

      <form>
        <input 
          type="tel" 
          placeholder="Enter mobile number" 
          class="form-control input-box mb-3" 
          inputmode="numeric"
          maxlength="10"
          required 
        />
        <p class="terms text-start">By proceeding, you agree to our terms and conditions</p>
        <button type="submit" class="btn login-button border-dark">Login</button>
      </form>

      <p class="signup-text">
        Don't Have An Account? <a href="javascript:void(0)" onclick="openSignupOverlay()">Sign up</a>
      </p>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
  <script>
  document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('#login-form-wrapper form');
  const mobileInput = document.querySelector('#login-form-wrapper input[type="tel"]');
  const loginButton = document.querySelector('#login-form-wrapper .login-button');

  const mobileRegex = /^[6-9]\d{9}$/;

  mobileInput.addEventListener('keypress', (e) => {
    if (!/[0-9]/.test(e.key) && e.key !== 'Backspace' && e.key !== 'Delete' && e.key !== 'Tab' && e.key !== 'ArrowLeft' && e.key !== 'ArrowRight') {
      e.preventDefault();
    }
  });

  form.addEventListener('submit', (event) => {
    event.preventDefault();

    const mobileNumber = mobileInput.value.trim();

    if (!mobileRegex.test(mobileNumber)) {
      alert('Please enter a valid 10-digit mobile number starting with 6, 7, 8, or 9.');
      mobileInput.focus();
      return;
    }

    loginButton.disabled = true;
    loginButton.textContent = 'Sending OTP...';

    // Simulate OTP sending
    setTimeout(() => {
      loginButton.disabled = false;
      loginButton.textContent = 'Login';
      
      // Close login overlay and open OTP verification overlay
      openOtpVerificationOverlay();
    }, 1000);
  });

  mobileInput.addEventListener('input', () => {
    const value = mobileInput.value.trim();
    if (value.length > 0 && !mobileRegex.test(value)) {
      mobileInput.classList.add('is-invalid');
    } else {
      mobileInput.classList.remove('is-invalid');
    }
  });
});
  </script>
</body>
</html>