<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us</title>
<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
  }

  .container {
    padding: 50px 0;
  }

  .jumbotron {
    background-color: #007bff;
    color: #fff;
    padding: 30px;
  }

  .team-member {
    margin-bottom: 30px;
  }

  .team-member img {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    object-fit: cover;
  }
</style>
</head>
<body>

<div class="container">
  <div class="jumbotron">
    <h1 class="display-4">About Us</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod libero quis turpis interdum, nec consequat ligula vulputate.</p>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="team-member">
        <img src="https://via.placeholder.com/200" alt="Team Member 1">
        <h3>John Doe</h3>
        <p>CEO & Founder</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="team-member">
        <img src="https://via.placeholder.com/200" alt="Team Member 2">
        <h3>Jane Smith</h3>
        <p>Marketing Manager</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="team-member">
        <img src="https://via.placeholder.com/200" alt="Team Member 3">
        <h3>Mike Johnson</h3>
        <p>Lead Developer</p>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
