<?php include("db.php");
include("log.php")?>
<!-- hello commit -->
<!DOCTYPE html>
<html>
<head>
  <title>Recruitment Startup</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="server.js"></script>
  
</head>
<body>
  <header class="fixed-header">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="log.png" alt="Company Logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#" onclick="scrollToWelcomeSection(); return false;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/role/software-engineer">Software Engineer Jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/role/product-manager">Product Manager Jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/role/data-analyst">Data Analyst Jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" onclick="preventDefaultClick(event);scrollToAboutUs()">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" onclick="preventDefaultClick(event);openModal('signupModal');closeModal('signinModal')">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn" id="in" href="#" onclick="closeModal('signupModal');openModal('signinModal')">Sign In</a>
      </li>
    </ul>
  </div>
</nav>

</header>


  <section class="hero" id="heroSection">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h1>Welcome Recruiters And Job Seekers</h1>
          <p>Find the best software engineers, product managers, data scientists, and more!</p>
          <a href="#" class="btn btn-primary" onclick="openModal('signupModal')">Sign Up</a>
          <a href="#" class="btn btn-primary" onclick="preventDefaultClick(event);scrollToAboutUs()">Learn More</a>
        </div>
      </div>
    </div>
  </section>

 
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
        <div class="services">
          <div class="services-icon">
            <img class="" src="https://d383au3bye3rv1.cloudfront.net/static/images/optimized/feature_icon_2.png" data-src="https://d383au3bye3rv1.cloudfront.net/static/images/optimized/feature_icon_2.png" height="60" width="60" alt="Service">
          </div>
          <div class="services-description">
            <h1>Step 1: Complete Profile</h1>
            <p>Once you are approved, we showcase you to leading Indian technology startups</p>
          </div>
        </div>
      </div>

      <div class="col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
        <div class="services">
          <div class="services-icon">
            <img class="icon-2" src="https://d383au3bye3rv1.cloudfront.net/static/images/optimized/icon1.png" data-src="https://d383au3bye3rv1.cloudfront.net/static/images/optimized/icon1.png" height="60" width="60" alt="Service">
          </div>
          <div class="services-description">
            <h1>Step 2: Receive Job Offers</h1>
            <p>Companies start sending interview requests. Talk to only the ones you like.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
        <div class="services">
          <div class="services-icon">
            <img class="icon-3" src="https://d383au3bye3rv1.cloudfront.net/static/images/optimized/icon2.png" data-src="https://d383au3bye3rv1.cloudfront.net/static/images/optimized/icon2.png" height="60" width="60" alt="Service">
          </div>
          <div class="services-description">
            <h1>Step 3: Accept Dream Job</h1>
            <p>Compare your offers and accept the best one. Hired!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="features">
    <h2>Key Features</h2>
    <div class="feature">
      <img src="ailogo.png" alt="AI-driven Candidate Matching">
      <h3>AI-driven Candidate Matching</h3>
      <p>Utilize advanced algorithms to match job requirements with the best candidates.</p>
    </div>
    <div class="feature">
      <img src="global.png" alt="Global Talent Pool">
      <h3>Global Talent Pool</h3>
      <p>Access a diverse pool of software engineers, product managers, data scientists, etc., from around the world.</p>
    </div>
    <div class="feature">
      <img src="real.jpg" alt="Real-time Collaboration">
      <h3>Real-time Collaboration</h3>
      <p>Seamlessly collaborate with your team to make hiring decisions.</p>
    </div>
  </section>

  <!-- Signup Modal -->
  <div id="signupModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('signupModal')">&times;</span>
      <section class="signup-section">
        <h2>Sign Up</h2>
        <form id="signup-form" action="db.php" method="POST">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
    
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
    
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
    
          <button type="submit" class="btn btn-primary" name="send">Sign Up</button>
        </form>
      </section>
      <p>Already have an account? <a href="#" onclick="closeModal('signupModal');openModal('signinModal')">Sign In</a></p>
    </div>
    </div>
    
    <!-- Signin Modal -->
    <div id="signinModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('signinModal')">&times;</span>
      <section class="signin-section">
        <h2>Sign In</h2>
        <form id="signin-form" action ="log.php" method="POST">
          <label for="signin-username">Username/Email:</label>
          <input type="text" name="input" id="input"  required>
    
          <label for="signin-password">Password:</label>
          <input type="password" name="password" id="signin-password"  required>
          
          <button type="submit" class="btn btn-primary" name="sign">Sign In</button>
          </form>
          <p><a href="#">Forgot Password?</a></p>
          </section>
          </div>
          </div>

  <section class="recruiters" id="recruitersSection">
    <div class="content">
      <h2>Recruiters</h2>
      <p>Are you a recruiter looking to find the perfect candidates for your company? Look no further! Our platform provides access to a global talent pool of software engineers, product managers, data scientists, and more.</p>
      <p>Our AI-driven candidate matching system ensures that you get the best candidates who match your job requirements. Collaborate with your team in real-time to make hiring decisions and find the perfect fit for your company.</p>
      <div class="search-box">
        <input type="text" id="searchField" placeholder="Search employees">
        <button class="btn" onclick="searchEmployees()">Search</button>
      </div>
    </div>
  </section>

  <section class="about-us" id="aboutUsSection">
    <div class="content">
      <h2>About Us</h2>
      <p>Welcome to our company! We are a team of passionate recruiters dedicated to finding the best talent for your company's needs. With years of experience in the industry, we have a deep understanding of what it takes to match the right candidates with the right positions.</p>
      <p>Our mission is to connect top companies with top talent, creating lasting and successful partnerships. We believe that finding the right people is the key to success, and we are here to help you every step of the way.</p>
    </div>
  </section>
  

  <!-- Your footer -->
  <footer>
    <div class="footer-content">
       2023 Recruiters & Recruitment
    </div>
  </footer>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

