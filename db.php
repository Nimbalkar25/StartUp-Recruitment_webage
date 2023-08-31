<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user_info";

    // Create a new connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get data from the form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Hash the password
    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    // Prepare and execute the SQL query
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: signup.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header("Location: form.php");
    }
    // Close the connection
    $conn->close();
}
?>
