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


    .styled-table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
}

.styled-table th,
.styled-table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.styled-table th {
    background-color: #f2f2f2;
    color: #333;
    cursor: pointer;
}

.styled-table tr:nth-child(even) {
    background-color: #f9f9f9;
}

.styled-table tr:hover {
    background-color: #f1f1f1;
}

.styled-table th:hover {
    background-color: #ddd;
}

/* input[type="file"] {
  display: block;
  margin-bottom: 10px;
} */
input[type="submit"] {
  background-color:  #A7C7E7;
  color: white;
  border: none;
  align-items: right;
  padding: 10px 20px;
 justify-content: right;
  text-align: center;
  /* text-decoration: none; */
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  border-radius: 4px;
}

input[type="submit"]:hover {
  background-color:  #6495ED;
}

input[type="file"] {
  background-color:  white;
  color: black;
  border: none;
  padding: 10px 20px;
 justify-content: right;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  border-radius: 4px;
}

.containernew {
  max-width: 100%;
  margin: 10px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        
        <h1>Claim Data </h1>

        <div class="containernew">
        
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="excel"  value="Choose File">
        <input type="submit" name="import" value="Upload File"  >


        </form>
        </div>
       
        <table id="data-table" class="styled-table">
            <thead>
                <tr>
                   
                     <th >Claimid</th>
                    <th >Pateintname</th>
                    <th >DOA</th>
                    <th >DOD</th>
                    <th >ClaimAmount</th>
                </tr></thead>
                <?php
                 $servername = "localhost";
                 $username1 = "root";
                 $password = "";
                 $dbname = "project";
                 
                     $conn = new mysqli($servername, $username1, $password, $dbname);

$rows = mysqli_query($conn, "SELECT * FROM claimdata");
foreach($rows as $row) :
    ?>
    <tbody>
    <tr>
       
<td><?php echo $row["Claimid"]; ?> </td>

<td><?php echo $row["Pateintname"]; ?> </td>
<td><?php echo $row["DOA"]; ?> </td>
<td><?php echo $row["DOD"]; ?> </td>
<td><?php echo $row["ClaimAmount"]; ?> </td>
</tr>
<?php endforeach; ?>
            </tbody>
            
        </table>

        <?php
        if(isset($_POST["import"])) {
            $filename =$_FILES["excel"]["name"];
            $fileExtension =explode(".",$filename);
            $fileExtension = strtolower(end($fileExtension));
            // echo" here is the directory name " , $fileExtension;
            $newFileName =  "new" . $fileExtension;
            $targetDirectory = "upload/" . $filename;
            move_uploaded_file($_FILES["excel"]["tmp_name"], $targetDirectory);


            error_reporting(1);
            ini_set('display_error', 0);
            require "excelReader/excel_reader2.php";
            require "excelReader/SpreadSheetReader.php";
            
            $reader =new SpreadSheetReader($targetDirectory);
            
           
            foreach($reader as $key => $row) {

               
$Claimid = $row[0];


$Pateintname = $row[1];

$DOA = $row[2];

$DOD = $row[3];

$ClaimAmount = $row[4];


// $dateTime = new DateTime($DOD);

// echo "     here is the DOD value   " , $dateTime;

mysqli_query($conn, "INSERT INTO claimdata (Claimid, Pateintname, DOA, DOD, ClaimAmount) VALUES ('$Claimid', '$Pateintname', '$DOA', '$DOD', $ClaimAmount)");
echo '<script>alert("Data Inserted successfully");
window.location.href="http://localhost/wordpress/wp-content/themes/project./claimdata.php";
</script>'; 
        }

           
        }
       
        // header("Location: claimdata.php");

            ?>



        





    </div>

   
</body>
</html>




