<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "sea_food");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get and sanitize inputs
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

// PHP name validation (same as JS)
if (!preg_match("/^[A-Za-z\s]+$/", $name)) {
    echo "<script>
        alert('Name must contain only letters and spaces.');
        window.history.back(); // Go back to form
    </script>";
    exit;
}

// Insert into database
$sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
        alert('Your feedback was submitted successfully!');
        window.location.href = 'userdb.php'; // Redirect to homepage
    </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
