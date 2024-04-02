<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .container1 {
            max-width: 100%;
            margin: 10px auto;
            height: 500px;
            padding: 20px;
           background-color: #0066b2;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

       

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 97%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            resize: vertical;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        #message {
            display: none;
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
        }

        .success {
            background-color: #28a745;
        }

        .error {
            background-color: #dc3545;
        }
        body {
  /* background-image: url('https://media.istockphoto.com/id/1308682666/vector/blue-gradient-soft-background.jpg?s=612x612&w=0&k=20&c=CBSD2BDe2uMi-Zm65ny6KoPKXsTPdk5K8wt_vMIb3Hc=');
  background-repeat: no-repeat; */
  background-color: #89CFF0;
}




    </style>
</head>

<body >
    <div class="container1"><img   align="right"  src="https://images.theconversation.com/files/304957/original/file-20191203-66986-im7o5.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=926&fit=clip" height="100%" > <h1 style="color:#F0F8FF;">Advance HealthCare made personal</h1>

<p style="color:#F0F8FF;">
  We’re a creative company that focuses on establishing long-term relationships with customers.
</p></div>
    <div class="container">
        <h1>Contact Us</h1>
        <form id="contactForm">
            <div class="form-group">
               
                <input type="text" id="name" name="name" placeholder="Enter your name here" required>
            </div>
            <div class="form-group">
               
                <input type="text" id="email" name="email" placeholder="Enter your email address" required>
            </div>
            <div class="form-group">
                
                <textarea id="name" name="message" rows="5" placeholder="Enter message" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
        <div id="statusMessage"></div>
    </div>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function (e) {
            e.preventDefault();
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var message = document.getElementById('message').value;

            // You can add your validation logic here before sending the form data

            var formData = new FormData();
            formData.append('name', name);
            formData.append('email', email);
            formData.append('message', message);

            fetch('YOUR_BACKEND_URL', {
                method: 'POST',
                body: formData
            })
                .then(response => {
                    if (response.ok) {
                        return response.text();
                    } else {
                        throw new Error('Something went wrong');
                    }
                })
                .then(data => {
                    document.getElementById('statusMessage').textContent = data;
                    document.getElementById('statusMessage').className = 'success';
                    document.getElementById('contactForm').reset();
                })
                .catch(error => {
                    document.getElementById('statusMessage').textContent = error.message;
                    document.getElementById('statusMessage').className = 'error';
                });
        });
    </script>
</body>

</html>
