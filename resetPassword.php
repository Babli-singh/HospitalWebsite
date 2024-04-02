<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Forget Password</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
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


  input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 4px;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
  

  input[type="text"] {
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
  <h2>Reset Password</h2>
  <form action="update_password.php" method="post">
    <!-- <input type="email" id="email" name="email" placeholder="Enter your email" required > -->
    <input type="email" id="to" name="email" required  placeholder="Enter your mail here"><br><br>
    <input type="password" id="to" name="newPassword" required  placeholder="new password"><br><br>
    
    <input type="password" id="to" name="confirmPassword" required  placeholder="confirm password"><br><br>
    <div id="emailError" class="error"></div>
    <input type="submit" name ="send" value="Change password">
  </form>
</div>





































</body>
</html>


</body>
</html>


