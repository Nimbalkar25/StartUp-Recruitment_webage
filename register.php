<php 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Employee Registration</title>
  <link rel="stylesheet" href="register.css">
</head>
<body>
  <h2>Employee Registration</h2>
  <form action="process_employee_registration.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="gender">Gender:</label>
    <select id="gender" name="gender" required>
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select><br>

    <label for="qualification">Qualification:</label>
    <input type="text" id="qualification" name="qualification" required><br>

    <label for="date_of_birth">Date of Birth:</label>
    <input type="date" id="date_of_birth" name="date_of_birth" required><br>

    <label for="address">Address:</label>
    <textarea id="address" name="address" required></textarea><br>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" required><br>

    <label for="resume">Upload Resume:</label>
    <input type="file" id="resume" name="resume" accept=".pdf, .doc, .docx" required><br>

    <label for="experience">Years of Experience:</label>
    <input type="number" id="experience" name="experience" min="0" required><br>

    <!-- If the applicant has work experience, ask for details -->
    <div id="experience-details">
      <h3>Work Experience Details</h3>
      
      <label for="current_company">Current/Last Company:</label>
      <input type="text" id="current_company" name="current_company" required><br>

      <label for="ctc">CTC (Cost to Company):</label>
      <input type="text" id="ctc" name="ctc" required><br>

      <label for="notice_period">Notice Period:</label>
      <input type="text" id="notice_period" name="notice_period" required><br>

      <!-- You can add fields for all previous work experience here -->
    </div>

    <!-- Add more fields as needed for employee registration -->

    <button type="submit" name="register">Register</button>
  </form>
</body>
</html>
