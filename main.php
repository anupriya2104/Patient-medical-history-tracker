<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Global Hospitals - Registration</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    /* Navbar Styles */
    .navbar {
      background-color: #00aaff;
      padding: 1rem 1.5rem;
    }
    .navbar-brand {
      color: white;
      font-weight: bold;
      font-size: 1.5rem;
    }
    .navbar-nav .nav-link {
      color: #e6f3ff;
      font-weight: 500;
      margin-right: 1rem;
    }
    .navbar-nav .nav-link:hover {
      color: white;
    }
    .search-bar {
      border-radius: 5px;
      border: 1px solid #ddd;
      padding: 0.25rem 0.5rem;
      color: #333;
      background-color: #f0f8ff;
    }
    .btn-login {
      color: #333;
      border: 1px solid #00aaff;
      padding: 0.4rem 1rem;
      border-radius: 5px;
      background: white;
      margin-right: 0.5rem;
    }
    .btn-login:hover {
      background-color: #0a6ea0;
      color: white;
      border-color: #00aaff;
    }
    .btn-signup {
      background-color: #ffc107;
      color: black;
      padding: 0.4rem 1rem;
      border-radius: 5px;
      font-weight: bold;
      border: none;
    }
    .btn-signup:hover {
      background-color: #e0a800;
      color: white;
    }

    /* Registration Styles */
    .registration-container {
      background-color: white;
      border-radius: 1rem;
      margin-top: 2rem;
      padding: 2rem;
      box-shadow: 3px 20px 100px 5px rgba(0,0,0, 0.2);
    }
    .register-left {
      text-align: center;
      color: #00aaff;
      padding: 2rem;
    }
    .register-left img {
      margin-bottom: 2rem;
      width: 80%;
      animation: float 3s ease-in-out infinite;
    }
    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
      100% { transform: translateY(0px); }
    }
    .nav-tabs {
      border: none;
      margin-bottom: 2rem;
    }
    .nav-tabs .nav-link {
      border: 2px solid #00aaff;
      border-radius: 2rem;
      padding: 0.5rem 2rem;
      color: #00aaff;
      margin-right: 1rem;
    }
    .nav-tabs .nav-link.active {
      background-color: #00aaff;
      color: white;
    }
    .form-control {
      border-radius: 0.75rem;
      padding: 0.75rem;
      margin-bottom: 1rem;
      border: 1px solid #ddd;
    }
    .form-control:focus {
      box-shadow: 0 0 0 0.2rem rgba(0, 170, 255, 0.25);
      border-color: #00aaff;
    }
    .btnRegister {
      background-color: #ffc107;
      color: black;
      padding: 0.75rem 2rem;
      border-radius: 2rem;
      border: none;
      font-weight: bold;
      transition: all 0.3s ease;
    }
    .btnRegister:hover {
      background-color: #e0a800;
      color: white;
      transform: translateY(-2px);
    }
    .radio.inline {
      margin-right: 1rem;
    }
    .register-heading {
      color: #005f99;
      margin-bottom: 2rem;
      text-align: center;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg pb-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="fas fa-hospital-symbol"></i> Global Hospitals</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-3">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
        <li class="nav-item"><a class="nav-link" href="faq.html">FAQs</a></li>
      </ul>
      <form class="d-flex ms-auto pb-1" style="gap: 0.5rem;">
      <input class="form-control me-2 search-bar" type="search" placeholder="Search..." aria-label="Search" style="flex: 1; width: auto; max-width: 300px;">
        <button class="btn btn-login" type="button" style="height: 40px; width: 100px;">Login</button>
        <button class="btn btn-signup" type="button" style="height: 40px; width: 100px;">Sign-up</button>
      </form>
    </div>
  </div>
</nav>

<!-- Registration Container -->
<div class="container registration-container">
  <div class="row">
    <div class="col-md-3 register-left">
      <img src="#" alt="Global Hospitals"/>
      <h3>Welcome</h3>
      <p>Join our healthcare family today!</p>
    </div>
    <div class="col-md-9">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#patient">Patient</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#patient-login">Patient Login</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#doctor">Doctor</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#admin">Lab</a></li>
      </ul>
      
      <div class="tab-content">
        <!-- Patient Registration Form -->
        <div class="tab-pane fade show active" id="patient">
          <h3 class="register-heading">Register as Patient</h3>
          <form method="post" action="func2.php">
            <div class="row">
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="First Name *" name="fname" required/>
                <input type="email" class="form-control" placeholder="Your Email *" name="email"/>
                <input type="password" class="form-control" placeholder="Password *" id="password" name="password" required/>
                <div class="form-group">
                  <div class="maxl">
                    <label class="radio inline"> 
                      <input type="radio" name="gender" value="Male" checked>
                      <span> Male </span> 
                    </label>
                    <label class="radio inline"> 
                      <input type="radio" name="gender" value="Female">
                      <span>Female </span> 
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Last Name *" name="lname" required/>
                <input type="tel" class="form-control" placeholder="Your Phone *" name="contact"/>
                <input type="password" class="form-control" placeholder="Confirm Password *" name="cpassword" id="cpassword"/>
                <input type="submit" class="btnRegister" name="patsub1" value="Register"/>
              </div>
            </div>
          </form>
        </div>

        <!-- Patient Login Form -->
        <div class="tab-pane fade" id="patient-login">
          <h3 class="register-heading">Patient Login</h3>
          <form method="post" action="patient-login.php">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <input type="email" class="form-control" placeholder="Email *" name="email" required/>
                <input type="password" class="form-control" placeholder="Password *" name="password" required/>
                <input type="submit" class="btnRegister" name="patsub" value="Login"/>
              </div>
            </div>
          </form>
        </div>

        <!-- Doctor Login Form -->
        <div class="tab-pane fade" id="doctor">
          <h3 class="register-heading">Login as Doctor</h3>
          <form method="post" action="admin-panel.php">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Username *" name="username3" required/>
                <input type="password" class="form-control" placeholder="Password *" name="password3" required/>
                <input type="submit" class="btnRegister" name="docsub1" value="Login"/>
              </div>
            </div>
          </form>
        </div>

        <!-- Lab Assistant Login Form -->
        <div class="tab-pane fade" id="admin">
          <h3 class="register-heading">Login as Lab Assist</h3>
          <form method="post" action="admin-panel.php">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Username *" name="username1" required/>
                <input type="password" class="form-control" placeholder="Password *" name="password2" required/>
                <input type="submit" class="btnRegister" name="adsub" value="Login"/>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
function check() {
  const password = document.getElementById('password');
  const confirm = document.getElementById('cpassword');
  if (password && confirm && password.value === confirm.value) {
    confirm.setCustomValidity('');
  } else if (confirm) {
    confirm.setCustomValidity('Passwords do not match');
  }
}

document.getElementById('password')?.addEventListener('change', check);
document.getElementById('cpassword')?.addEventListener('keyup', check);
</script>

</body>
</html>
