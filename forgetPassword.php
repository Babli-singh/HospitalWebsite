<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Forget Password</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-image: url("https://static.vecteezy.com/system/resources/previews/023/460/068/large_2x/medical-doctor-background-illustration-ai-generative-free-photo.jpg");
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  .container {
    background-color: rgba(255,255,255,0.2);
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
  }
  
  h2 {
    text-align: center;
    margin-bottom: 20px;
  }
  
  input[type="email"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 4px;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
  
  input[type="submit"] {
    width: 100%;
    padding: 10px;
    border-radius: 4px;
    border: none;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
  }
  
  input[type="submit"]:hover {
    background-color: #0056b3;
  }
  
  .error {
    color: red;
    margin-top: 5px;
  }
</style>
</head>
<body>

<div class="container">
  <h2>Forget Password</h2>
  <form  method="post">
    <!-- <input type="email" id="email" name="email" placeholder="Enter your email" required > -->
    <input type="email" id="to" name="email" required  placeholder="Enter your email"><br><br>
    <div id="emailError" class="error"></div>
<input type="submit" name ="send" value="Send Email">
  </form>
</div>

<!-- <script>
document.getElementById('forgetForm').addEventListener('submit', function(event) {
  event.preventDefault();
  var email = document.getElementById('email').value;
  var emailError = document.getElementById('emailError');

  // Simple email validation
  if (!isValidEmail(email)) {
    emailError.textContent = 'Please enter a valid email address.';
    return;
  }

  // Submit the form if validation passes
  // In this example, we're just logging the email to console
  console.log('Submitted email:', email);
  // You can add your logic here to handle the forget password functionality
  
  // Clear error messages
  emailError.textContent = '';
});

function isValidEmail(email) {
  // Very basic email validation, you can enhance it further
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}
</script> -->



<!-- <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
<script>
(function() {
  emailjs.init("singhbabli778@gmail.com"); // Replace YOUR_USER_ID with your EmailJS user ID
  
  document.getElementById('forgetForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Fetch values from form
    var to = document.getElementById('to').value;
    console.log(to);
    // var subject = document.getElementById('subject').value;
    var message = document.getElementById("kindly find bellow link").value;

    // Prepare email parameters
    var emailParams = {
      to_email: to,
      //subject: subject,
      //message: message
    };

    // Send email
    emailjs.send("singhjyoti96675@gmail.com", "kindly find blow lonk", emailParams)
    
      .then(function(response) {
        alert("Email sent successfully!");
        // Clear form fields after successful submission
        document.getElementById('to').value = '';
        //document.getElementById('subject').value = '';
       // document.getElementById('message').value = '';
      }, function(error) {
        console.error("Email send failed:", error);
        alert("Email send failed. Please try again later.");
      });
  });
})();
</script> -->

</body>
</html>


</body>
</html>


<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['send']))
{




  
  $useremail = $_POST['email'];
$newmail =$useremail;
 
  
  //Load Composer's autoloader
  require 'phpmailer\PHPMailer.php';
  require 'phpmailer\Exception.php';
  require 'phpmailer\SMTP.php';
  
  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);
  
  try {
      //Server settings
    //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'kdmhospital51@gmail.com';                     //SMTP username
      $mail->Password   = 'shup uaaf xlxh ufbt';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
      //Recipients
      $mail->setFrom('kdmhospital51@gmail.com', 'forgetPassword');
      $mail->addAddress($newmail, 'my website');     //Add a recipient
      
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Password Reset mail';
      $mail->Body    = "
      Hi there,

      There was a request to change your password!
      
      If you did not make this request then please ignore this email.
      
      Otherwise, please click this link to change your password: https:/RCMBharat.com";
      // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  
      $mail->send();
     

      echo '<script>alert("Message sent successfully!");
      </script>';
      echo $newmail;

      header("Location: resetPassword.php");




  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }


}

?>