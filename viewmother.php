<!DOCTYPE html>
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
  <a href="viewemployees.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Employees</a>
    <a href="viewbaby.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Baby</a>
    <a href="viewmother.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Mother</a>
    <a href="viewfather.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Father</a>
    <a href="viewhealthpersonnel.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Health personnel</a>
    <a href="viewcheckupstaff.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Check-up Staff</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="home.php" class="w3-bar-item w3-button w3-padding-large">Review</a>
  <a href="viewemployees.php" class="w3-bar-item w3-button w3-padding-large">Employees</a>
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
//Get information from Mother table
        $result3 = $connect->query("SELECT * FROM Mother ");
    //print the data out in a table
            echo'
                <h3> Results</h3>
                <table class="table table-dark table-striped table-bordered">';

            echo'<thead>
                <tr>
                    <td> mother_id</td>
                    <td> mothers_name</td>
                    <td> mothers_number </td>
                    <td> email </td>
                    <td> employeeID </td>
                    <td> staffID </td>
                </tr>
             <thead>';
     
     
     
         while ($search3 = $result3->fetch_assoc()) : ?>
             <tr>
                 <td>
                 <!--print the table data-->
                 <?php echo $search3['mother_id']; ?></td>
                 <td><?php echo $search3['mothers_name']; ?></td>
                 <td><?php echo $search3['mothers_number']; ?></td>
                 <td><?php echo $search3['email']; ?></td>
                 <td><?php echo $search3['employeeID']; ?></td>
                 <td><?php echo $search3['staffID']; ?>
         <td>
                <td>
                 <!--delete button-->
                    <button type="button"><a href="viewmother.php?delete=<?php echo $search3['mother_id']; ?>">Delete</a></button>
                    
                 </td>
             </tr>

        <?php endwhile;?>    
        
        <?php
             if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    //delete from the mother table
    $sql = "DELETE FROM Mother WHERE mother_id=$id";

    if ($connect->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } 
}?>

</html>        