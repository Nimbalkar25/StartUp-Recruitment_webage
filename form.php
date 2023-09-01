<?php include("db.php");
include("log.php")?>
<!-- hello commit -->
<!DOCTYPE html>
<html>
<head>
  <title>Recruitment Startup</title>
  <link rel="stylesheet" href="style.css">
  <script src="server.js"></script>
  
</head>
<body>
  <header class="fixed-header">
    <nav>
      <img src="log.png" alt="Company Logo" onclick="scrollToWelcomeSection()">
      <ul>
        <li><a href="#" onclick="scrollToWelcomeSection(); return false;">Home</a></li>
        <li>
          <div class="dropdown-container" onmouseover="showJobList()" onmouseout="hideJobList()">
            <a onclick="preventDefaultClick(event)" class="jobk" href="#">Jobs</a>
            <nav id="jobLinks" class="dropdown_content w-dropdown-list">
              <a href="/role/software-engineer" class="block-link w-dropdown-link">Software Engineer Jobs</a>
              <a href="/role/product-manager" class="block-link w-dropdown-link">Product Manager Jobs</a>
              <a href="/role/data-analyst" class="block-link w-dropdown-link">Data Analyst Jobs</a>
              <!-- Add more job links as needed -->
            </nav>
          </div>
        </li>
        <li><a href="#" onclick="preventDefaultClick(event);scrollToAboutUs()";>About Us</a></li>
        <li><a href="#" onclick="preventDefaultClick(event);openModal('signupModal');closeModal('signinModal')">Contact Us</a></li>
        <li><a href="#" class="btn" id="in" onclick="closeModal('signupModal');openModal('signinModal')">Sign In</a></li>
      </ul>
    </nav>
  </header>


  <section class="hero" id="heroSection">
    <div class="content" >
      <h1>Welcome Recruiters And Job Seekers</h1>
      <p>Find the best software engineers, product managers, data scientists, and more!</p>
      <a href="#" class="btn" onclick="openModal('signupModal')">Sign Up</a>
      <a href="#" class="btn" onclick="preventDefaultClick(event);scrollToAboutUs()">Learn More</a>
    </div>
  </section>

 
  <div class="container">
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
    
          <button type="submit" name="send">Sign Up</button>
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
          
          <button type="submit" name="sign" >Sign In</button>
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



</body>
</html>

