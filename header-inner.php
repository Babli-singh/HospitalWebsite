<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title> 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    <style>
    body
        {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            /* background-image: url("https://images.unsplash.com/photo-1523905330026-b8bd1f5f320e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Y2hpbmVzZSUyMGZvb2R8ZW58MHx8MHx8&w=1000&q=80");
             background-position: center; */
             background-image: url("https://aanmc.org/wp-content/uploads/2017/05/Becoming-an-ND.jpg");
             background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            transition: 0.5s;
        }
        body.active
        {
            
             /* background-image: url("https://www.itl.cat/pngfile/big/164-1645988_wallpaper-burger-food-fast-food-burger-special.jpg");
            box-shadow: 0 0 5px #ff1f71, */
            background-image: url("https://www.aamc.org/sites/default/files/styles/scale_and_crop_1200_x_666/public/Public%20Opinion%20Research%201200x666.jpg?itok=Z9g0DOPe");
            box-shadow: 0 0 5px #ff1f71,
                0 0 15px #ff1f71,
                0 0 30px #ff1f71,
                0 0 60px #ff1f71;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .container
        {
            position: relative;
            width: 800px;
            height: 500px;
            margin: 20px;
        
            
        }
        .blueBg
        {
            position: absolute;
            top: 40px;
            width: 100%;
            height: 420px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(255,255,255,0.2);
            box-shadow: 0 5px 45px rgba(0,0,0,0.15);
            
        }
        .blueBg .box
        {
            position: relative;
            width:50%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            
        }
        
         .blueBg .box h2
        {
            color: #fff;
            font-size: 1.2em;
            font-weight: 500;
            margin-bottom: 10px;
            
        }
        .blueBg .box button
        {
            cursor: pointer;
            padding: 10px 20px;
            background: #fff;
            box-shadow: 0 0 5px #fff,
                0 0 15px #fff,
                0 0 30px #fff,
                0 0 60px #fff;
            color: #333;
            font-size: 16px;
            font-weight: 500;
            border: none;
        }
       .formBx
        {
          position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 100%;
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 5px 45px rgba(0,0,0,0.25);
            transition: 0.5s ease-in-out;
            overflow: hidden;
             backdrop-filter:blur(15px);
            
        }
        .formBx.active
        {
            left: 50%;
        }
        .formBx .form
        {
            position: absolute;
            left: 0;
            width: 100%;
            padding: 50px;
            transition: 0.5s;
        }
        .formBx .signinform
        {
            transition-delay: 0.25s;
        }
         .formBx.active .signinform
        {
            left: -100%;
            transition-delay: 0s;
        }
        .formBx .signupform
        {
            left: 100%;
             transition-delay: 0s;
        }
        .formBx.active .signupform
        {
            left: 0;
             transition-delay: 0.25s;
        }
        .formBx .form form
        {
            width: 70%;
            display: flex;
            flex-direction: column;
        }
        .formBx .form form h3
        {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 20px;
            font-weight: 500;
        }
        .formBx .form form input
        {
            width: 100%;
            margin-bottom: 20px;
            padding: 10px;
            outline: none;
            font-size: 16px;
            border: 1px solid #333;
        }
         .formBx .form form input[type="submit"]
        {
            background: #03a9f4;
            border: none;
            color: #fff;
            max-width: 100px;
            cursor:pointer;
        }
        .formBx.active .signupform input[type="submit"]
        {
           background: #f43648; 
        }
         .formBx .form form .forgot
        {
            color: #333;
        }
        @media (max-width:991px)
        {
            .container
            {
                max-width: 400px;
                height: 650px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }
       
    
    </style>
    </head>
<body>














<div>



    <div class="container">
        
        <div class="blueBg">
            <div class="box singin">
                <h2>Already Have an Account</h2>
                <button class="signinBtn">Sign in</button>
            
            </div>
            <div class="box singup">
                <h2>DON'T Have an Account</h2>
                <button class="signupBtn">Sign up</button>
            
            </div>
        
        
        
        </div>
        <div class="formBx">
            <div class="form signinform">
            <form action="<?php echo get_template_directory_uri() ?>./login_process.php" method="post">
                  

                    <h3>Sign In</h3>
                    <input type="text" id="email" name="email" placeholder="username" required>
                    <input type="password" id="password1" name="password1" placeholder="password" required>
                    <input type="submit" value="Login">
                    <a href="<?php echo get_template_directory_uri() ?>./forgetPassword.php" class="forgot">Forgot Password</a>
                </form>
            </div>
            <div class="form signupform">
            <form action="<?php echo get_template_directory_uri() ?>./signup_process.php" method="post">
                    <h3>Sign Up</h3>
                    <input type="text" id="username" name="username" placeholder="username" required>
                    <input type="text" id="email" name="email" placeholder="E-mail Address" required>
                    <input type="password" id="password1" name="password1" placeholder="password" required>
                    <input type="password" id="password2" name="password2" placeholder="Confirm password" required>
                    <input type="submit" value="Register">
                   
                </form>
            </div>
        
        </div>
    </div>
    
    <script>
    const signinBtn = document.querySelector('.signinBtn');
        const signupBtn = document.querySelector('.signupBtn');
        const formBx = document.querySelector('.formBx');
         const body = document.querySelector('body')
        
        
        signupBtn.onclick = function(){
             formBx.classList.add('active')
             body.classList.add('active')
             
            
        }
        
         signinBtn.onclick = function(){
             formBx.classList.remove('active')
             body.classList.remove('active')
            
        }
        
        
        
        
        
    
    </script>
    
    
    </body>
</html>