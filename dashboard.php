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
    /* .container {
        display: grid;
        grid-template-columns: 1fr 3fr;
        grid-template-rows: auto;
        grid-gap: 20px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    } */



    .container {
    display: flex;
    justify-content: space-around;
    margin-top: 20px;
}

section {
    background-color: #f4f4f4;
    border-radius: 5px;
    padding: 20px;
    margin-bottom: 20px;
}

.info-list {
    margin-top: 10px;
}

/* Style for each item in the info list */
.info-item {
    margin-bottom: 5px;
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


.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

.content {
    flex: 1;
    padding: 20px;
}


.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
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
        background-color: #f4f4f4;
        padding: 20px;
    }
    h1 {
        margin-top: 0;
    }
    /* .card {
        background-color: #F0FFFF;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
    } */


    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 30px 30px;
  width: fit-content;
  text-align: center;
  background-color: white;
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
        <div class="row">
  <div class="column">
    <div class="card">
        <img src="https://cdn.pixabay.com/photo/2020/08/03/09/51/graph-5459687_640.png" width="200" height="200">
        <h3>Ligula tristique quis risus</h3>
<p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p></div>
  </div>
  <div class="column">
    <div class="card">
    <img src="https://datavizproject.com/wp-content/uploads/types/Line-Graph.png" width="200" height="200">
       <h3>Nullam id dolor elit id nibh</h3>
<p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p></div>
  </div>
  <div class="column">
    <div class="card">
    <img src="https://images.ctfassets.net/pdf29us7flmy/2wG8ah2H71AaboKXxJikkC/76e80c9d3833d1054bc327db256e69a0/GOLD-6487-CareerGuide-Batch04-Images-GraphCharts-02-Bar.png?w=720&q=100&fm=jpg" width="200" height="200">
       <h3>Ultricies fusce porta elit</h3>
<p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p></div>
  </div>
 
</div>
        </div>
    </div>

    <script>
        // Sample data for the dashboard
        const totalUsers = 100;
        const totalOrders = 50;
        const recentOrders = ['Order 1 - $100', 'Order 2 - $150', 'Order 3 - $75'];

        // Update the dashboard with sample data
        document.getElementById('totalUsers').textContent = totalUsers;
        document.getElementById('totalOrders').textContent = totalOrders;
        
        const recentOrdersList = document.getElementById('recentOrders');
        recentOrders.forEach(order => {
            const listItem = document.createElement('li');
            listItem.textContent = order;
            recentOrdersList.appendChild(listItem);
        });
    </script>
    <script>
    // JavaScript function to toggle the sidebar
    function toggleSidebar() {
        const sidebar = document.querySelector('.sidebar');
        sidebar.classList.toggle('sidebar-opened');
        sidebar.classList.toggle('sidebar-closed');
    }
</script>
</body>
</html>
