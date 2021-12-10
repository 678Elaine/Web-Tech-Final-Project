<!DOCTYPE html>
<html lang="en">

<html class="next" style="background-image: url('capture.jpg');">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">


<style>
h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body class="next"><center>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
  <a href="home.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Review</a>
  <a href="any.php" class="w3-bar-item w3-button w3-padding-large w3-white">Employees</a>
    <a href="viewbaby.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Baby</a>
    <a href="viewmother.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Mother</a>
    <a href="viewfather.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Father</a>
    <a href="viewhealthpersonnel.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Health personnel</a>
    <a href="viewcheckupstaff.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Check-up Staff</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="print.php" class="w3-bar-item w3-button w3-padding-large">Review</a>
  
  <a href="home.php" class="w3-bar-item w3-button w3-padding-large">Employees</a>
    <a href="viewbaby.php" class="w3-bar-item w3-button w3-padding-large">Baby</a>
    <a href="viewmother.php" class="w3-bar-item w3-button w3-padding-large">Mother</a>
    <a href="viewfather.php" class="w3-bar-item w3-button w3-padding-large">Father</a>
    <a href="viewhealthpersonnel.php" class="w3-bar-item w3-button w3-padding-large">Health personnel</a>
    <a href="viewcheckupstaff.php" class="w3-bar-item w3-button w3-padding-large">Check-Up Staff</a>
  </div>
</div>

</br></br></br></br>


        <?php
    
 include 'database_connection_finalproject.php'; 
$result = $connect->query("SELECT * FROM Employees ");
    //print the data out in a table
            echo'
                <h3> Results</h3>
                <table class="table table-dark table-striped">';

            echo'<thead>
                <tr>
                    <td> employeeID</td>
                    <td> employee_name </td>
                    <td> employee_number </td>
                    <td> email </td>
                    <td> Branch_name </td>
                </tr>
             <thead>';
     
     
     
         while ($search = $result->fetch_assoc()) : ?>
             <tr>
                 <td>
                 <!--print the table data-->
                     <?php echo $search['employeeID']; ?></td>
                 <td><?php echo $search['employee_name']; ?></td>
                 <td><?php echo $search['employee_number']; ?></td>
                 <td><?php echo $search['email']; ?></td>
                 <td><?php echo $search['Branch_name']; ?>
         <td>
                <td>
                 <!--delete button-->
                    <button type="button"><a href="any.php?delete=<?php echo $search['employeeID']; ?>">Delete</a></button>
                    
                 </td>
             </tr>

        <?php endwhile;?>     
        
        <?php
        if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    //Delete from the Employees
    $sql = "DELETE FROM Employees WHERE employeeID=$id";

    if ($connect->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } 
}
?>

</body>
</html>

