<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-image: url("https://img.freepik.com/free-photo/health-still-life-with-copy-space_23-2148854034.jpg");
        font-family: Arial, sans-serif;
        background-repeat: no-repeat;
        background-size: 100%;
        margin: 0;
        padding: 0;
    }


    .container {
    display: flex;
    justify-content: space-around;
    margin-top: 20px;
}

    .sidebar {
        border: 1px solid #ccc;
    width: 150px;
    height: 100vh;
  
    background-color: rgba(255,255,255,0.2);
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 200px;
    color: black;
    transition: width 0.3s ease;
    overflow-y: auto;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar a {
    font-size:150%;
    float: left;
  color: black;
  text-align: left;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* .sidebar a:hover {
    color: #0056b3; 
} */

.sidebar a:hover {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border: 1px solid #ccc;
  background-color: #F0F8FF;
  width: 100%;
  color: #7CB9E8;
  box-sizing: border-box;
 
  font-family:monospace;
}

.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar li {
    padding: 30px 20px;
}




.content {
    flex: 1;
    padding: 20px;
}
/* Toggle Button Styles */
.toggle-btn {
    position: fixed;
    top: 20px;
    left: 20px;
    background-color: #333;
    color: #fff;
    border: none;
    cursor: pointer;
    padding: 10px 15px;
    z-index: 999;
}

.toggle-btn:hover {
    background-color: #555;
}

/* Sidebar Opened State */
.sidebar-opened {
    width: 250px;
}

/* Sidebar Closed State */
.sidebar-closed {
    width: 0;
}
.content {
        background-color: #F0FFFF;
        padding: 20px;
    }
    h1 {
        margin-top: 0;
    }



    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 30px 30px;
  width: fit-content;
  text-align: center;
  background-color: white;
}



.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 60px 60px;
  width: fit-content;
  text-align: center;
  background-color: white;
  height: 100%;
}
/* Responsive columns - one column layout (vertical) on small screens */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}


</style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            
            <h1>Dashboard</h1>
            <ul >
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">AboutUs</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="ContactUs.php">ContactUs</a></li>
                <li><a href="report.php">Reports</a></li>
                <li><a href="claimdata.php">Claim submitted</a></li>
            </ul>
        </div>
       
        <div class="content">
        
        <h1>Reports </h1>

        <div class="content">
        <div class="row">
  <div class="column">
    <div class="card">

    <img src="https://img.freepik.com/free-photo/beautiful-young-female-doctor-looking-camera-office_1301-7807.jpg?size=626&ext=jpg&ga=GA1.1.1224184972.1711929600&semt=sph" width="200" height="200">
        <h3>Ligula tristique quis risus</h3>
<p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p></div>
 
    </div>
  </div>
        </div>
        </div>

        <div class="row">
  <div class="column">
    <div class="card1">

    <img src="https://media.istockphoto.com/id/1364075546/photo/empty-corridor-in-modern-hospital-with-information-counter-and-hospital-bed-in-rooms-3d.jpg?s=612x612&w=0&k=20&c=xxFDmIVpH1wJaaiorpvfzec4RRggSb48PDb_dU9bTjo=" width="200" height="200">
        <h3>Ligula tristique quis risus</h3>
<p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p></div>
 
    </div>
  </div>
        </div>
        </div>

        





    </div>

   
</body>
</html>




