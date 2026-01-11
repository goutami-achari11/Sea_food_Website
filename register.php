
<?php
// Start session
session_start();

// Database connection
$host = 'localhost';
$db = 'sea_food';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
	$phone = trim($_POST['phone']);
    $password = $_POST['password'];
   
if (!preg_match("/^[A-Za-z\s]+$/", $name)) {
    echo "<script>
        alert('Name must contain only letters and spaces.');
        window.history.back(); // Go back to form
    </script>";
    exit;
}
    // Basic validation
    if (empty($name) || empty($email) || empty($password)) {
        echo "Please fill in all fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    } 
 else {
        // Hash the password
        //$hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Check if username or email already exists
        $check_sql = "SELECT uid FROM register WHERE name=? OR email=? ";
        $stmt = $conn->prepare($check_sql);
        $stmt->bind_param("ss",$name, $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            echo "Username or email already taken.";
        } else {
            // Insert user
            $insert_sql = "INSERT INTO register (name, email,phone, password) VALUES (?,?, ?, ?)";
            $stmt = $conn->prepare($insert_sql);
            $stmt->bind_param("ssss", $name, $email,$phone, $password);
            if ($stmt->execute()) {
                echo "Registration successful! You can now log in.";
                header("Location: login.html");
                exit(); // Make sure to exit after redirecting
            } else {
                echo "Error: " . $stmt->error;
            }
        }

        $stmt->close();
    }
}

$conn->close();
?>