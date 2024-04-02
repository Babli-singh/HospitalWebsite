<?php


$length = 5; // Specify the length of the token (in bytes)

// Generate a random token
$token = bin2hex(random_bytes($length));


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];

    // Validate and sanitize data
    $username = htmlspecialchars(trim($username));
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $password1 = htmlspecialchars(trim($password1));
    $password2 = htmlspecialchars(trim($password2));

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<script>alert("Something wrong")</script>'; 
        exit; // Stop further execution
    }

    // Hash the password for storage
   // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Process the data (e.g., store it in a database)
    // Here, you would typically insert this data into your database
    // For example, using PDO to connect to a MySQL database
    
    $dsn = "mysql:host=localhost;dbname=project";
    $username1 = "root";
    $password = "";

    try {
        $pdo = new PDO($dsn, $username1, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO projectdata (username, email, password1,password2,token) VALUES (?, ?, ?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username, $email, $password1, $password2,$token]);

        // echo "Sign up successful!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
    // Display a success message
    echo '<script>alert("SignUp successfully");
    window.location.href="http://localhost/wordpress/";
    </script>'; 
} else {
    // Redirect to the sign-up form if accessed directly without submitting
    header("Location: header-inner.php");
    exit;
}
?>
