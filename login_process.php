<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $password1 = $_POST["password1"];

    // Validate and sanitize data
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $password = htmlspecialchars(trim($password1));

    // // Simulated user credentials (replace with actual database validation)
    // $validEmail = 'user@example.com';
    // $validPassword = 'password'; // You should hash passwords in production

    // // Check if the credentials are valid
    // if ($email === $validEmail && $password1 === $validPassword) {
    //     // Set session variables (you can store additional user info here)
    //     $_SESSION['email'] = $email;

    //     // Redirect to the dashboard or another page upon successful login
    //     header("Location: dashboard.php");
    //     exit;
    // } else {

    //     echo $validEmail,$email, $password1 , $validPassword;
    //     echo "Invalid email or password. Please try again.";
    // }



    $servername = "localhost";
$username1 = "root";
$password = "";
$dbname = "project";

    $conn = new mysqli($servername, $username1, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT  email, password1 FROM projectdata";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $usernew =$row["email"];
        $newpassword = $row["password1"];
        // echo " - mail: " . $row["email"]. " " . $row["password1"]. "<br>";
        // echo  $usernew, "<br>", $newpassword  ;
        if($usernew=== $email && $newpassword=== $password1) {

            echo '<script>alert("login successfully");
            window.location.href="http://localhost/wordpress/";
            </script>'; 
      }
      else{
        echo '<script>alert("Invalid username and password");
        window.location.href="http://localhost/wordpress/loftyhealthcare/about/";
        </script>'; 
      }
      
    } 
}


} else {
    // Redirect to the login form if accessed directly without submitting
    header("Location: login_form.php");
    exit;
}
?>
