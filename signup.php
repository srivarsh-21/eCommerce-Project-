<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>True Motors Sign Up</title>
  <!-- <link rel="stylesheet" href="signup.css" /> -->
 <!-- <script src="signup.js"></script> -->

</head>
<style>
   body {
  margin: 0;
  font-family: Arial, sans-serif;
  background: #fff;
  display: flex;
  margin-top: 50px;
  justify-content: center;
  height: 100vh;
}

.container {
  width: 60%;
  max-width: 350px;
  text-align: center;
  
}

.logo img {
  width: 200px;
  margin-bottom: 20px;
}

h2 {
  margin: 10px 0 20px;
  font-weight: 500;
}

form input {
  display: block;
  width: 100%;
  padding: 12px;
  margin: 12px 0;
  border: 1.5px solid #ccc;
  border-radius: 8px;
  font-size: 15px;
  /* border-style: groove; */
}

button {
  width: 375px;
  background-color: #6e2b87;
  color: #fff;
  padding: 14px;
  border: none;
  border-radius: 8px;
  font-weight: bold;
  font-size: 15px;
  cursor: pointer;
  margin-top: 10px;
}

hr {
  margin: 25px -12px;
  border: none;
  border-top: 1px solid #ccc;
  width: 400px;
}

.bottom-text {
  font-size: 13px;
  color: #333;
  font-weight: 600; 
  /* text-decoration: underline;  */
}

.bottom-text .link{
    margin-top:10px;;
}


.bottom-text a {
  color: #004aad;
  text-decoration: underline;
  margin: 0 5px;
}

/* .bottom-text a:hover {
  text-decoration: underline;
} */


@media (max-width: 600px) {
  body {
    margin-top: 20px;
    padding: 10px;
    height: auto;
    align-items: flex-start;
  }

  .container {
    width: 100%;
    max-width: 90%;
  }

  .logo img {
    width: 150px;
  }

  form input {
    padding: 10px;
    font-size: 14px;
  }

  button {
    width: 100%;
    font-size: 14px;
    padding: 12px;
  }

  hr {
    width: 100%;
    margin: 25px 0;
  }

  .bottom-text {
    font-size: 12px;
    text-align: center;
  }
}

 
</style>
<body>

  <div class="container">
    <div class="logo">
      <img src="true motors logo.png" alt="True Motors Logo" />
    </div>

    <h2 style="text-align: left;">Sign Up</h2>

    <form>
      <input type="text" placeholder="Name" required />
      <input type="tel" placeholder="Mobile Number" required />
      <input type="email" placeholder="Email" required />
      <button type="submit">GET STARTED</button>
    </form>

    <hr/>

    <p class="bottom-text">
      Already have an Account? <a href="#" onclick="openAuthPanel('login.php')">Login</a><br/>
      <a href="#" class="link">T&C's</a> <a href="#" class="link">Privacy policy</a>
    </p>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    const name = form.querySelector('input[placeholder="Name"]').value.trim();
    const mobile = form.querySelector('input[placeholder="Mobile Number"]').value.trim();
    const email = form.querySelector('input[placeholder="Email"]').value.trim();

    if (!name || !mobile || !email) {
      alert("Please fill in all fields.");
      return;
    }

    // Basic mobile number validation (Indian format)
    const mobileRegex = /^[6-9]\d{9}$/;
    if (!mobileRegex.test(mobile)) {
      alert("Please enter a valid 10-digit mobile number.");
      return;
    }

    // Basic email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      alert("Please enter a valid email address.");
      return;
    }

    // Success message
    alert(`Welcome, ${name}! You have successfully signed up.`);
    
    // You can add real signup logic here (e.g., fetch/AJAX to server)
    form.reset();
  });
});

  </script>
</body>
</html>
