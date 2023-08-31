<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['sign'])) {
    $input = $_POST['input'];
    $password = $_POST['password'];

    // Replace with your database credentials
    $servername = "localhost";
    $username = "root";
    $db_password = ""; // Enter your actual database password
    $dbname = "user_info";

    $conn = new mysqli($servername, $username, $db_password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE (email = ? OR username = ?) AND password = ?");
    $stmt->bind_param("sss", $input, $input, $password);
    $stmt->execute();

    // Get the result from the prepared statement
    $result = $stmt->get_result();

    if ($result->num_rows == TRUE) {
        // Correct credentials
        header("Location: signin.php");
        exit();
    } else {
        // Invalid credentials
        echo "<script>
                alert('Invalid login credentials. Please try again.');
                setTimeout(function() {
                    window.location.href = 'form.php';
                }, 1000); // 2000 milliseconds = 2 seconds
            </script>";
    }

    $stmt->close();
    $conn->close();
}
?>
