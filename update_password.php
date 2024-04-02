<?php


$dsn = "mysql:host=localhost;dbname=project";
$username1 = "root";
$password = "";


    $pdo = new PDO($dsn, $username1, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST['email'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    // Validate input
    if (empty($email) || empty($newPassword) || empty($confirmPassword)) {
        echo "All fields are required.";
        exit;
    }

    // Check if new password and confirm password match
    if ($newPassword !== $confirmPassword) {
        echo "New password and confirm password do not match.";
        exit;
    }

    // Fetch user data based on email
    $sql = "SELECT * FROM projectdata WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        echo "User not found.";
        exit;
    }

    // Hash the new password
   // $hashedPassword = password_hash($newPassword, $confirmPassword);

    // Update password in the database
    $updateSql = "UPDATE projectdata SET password1 = :newPassword , password2 = :newPassword WHERE email = :email";
    $updateStmt = $pdo->prepare($updateSql);
    $updateStmt->bindParam(':newPassword', $newPassword);
    $updateStmt->bindParam(':email', $email);

    if ($updateStmt->execute()) {
        echo "Password updated successfully.";
    } else {
        echo "Error updating password.";
    }
} else {
    // If the form is not submitted, redirect to the password update page
    header("Location: password_update_form.php");
    exit;
}
?>
