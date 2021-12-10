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
  <a href="any.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Employees</a>
    <a href="viewbaby.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Baby</a>
    <a href="viewmother.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Mother</a>
    <a href="viewfather.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Father</a>
    <a href="viewhealthpersonnel.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hoverwhite">Health personnel</a>
    <a href="viewcheckupstaff.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Check-up Staff</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="home.php" class="w3-bar-item w3-button w3-padding-large">Review</a>
  <a href="any.php" class="w3-bar-item w3-button w3-padding-large">Employees</a>
    <a href="viewbaby.php" class="w3-bar-item w3-button w3-padding-large">Baby</a>
    <a href="viewmother.php" class="w3-bar-item w3-button w3-padding-large">Mother</a>
    <a href="viewfather.php" class="w3-bar-item w3-button w3-padding-large">Father</a>
    <a href="viewhealthpersonnel.php" class="w3-bar-item w3-button w3-padding-large">Health personnel</a>
    <a href="viewcheckupstaff.php" class="w3-bar-item w3-button w3-padding-large">Check-up staff</a>

  </div>
</div>
</br></br></br></br>

<?php
include 'database_connection_finalproject.php'; 
        $result5 = $connect->query("SELECT * FROM Checkup_Staff ");
    //print the data out in a table
            echo'
                <h3> Results</h3>
                <table class="table table-dark table-striped table-bordered">';

            echo'<thead>
                <tr>
                    <td> StaffID</td>
                    <td> staff_name </td>
                    <td> email </td>
                    <td> staff_number </td>
                    <td> Branch_name </td>
                </tr>
             <thead>';
     
     
     
         while ($search5 = $result5->fetch_assoc()) : ?>
             <tr>
                 <td>
                 <!--print the table data-->
                     <?php echo $search5['StaffID']; ?></td>
                 <td><?php echo $search5['staff_name']; ?></td>
                 <td><?php echo $search5['email']; ?></td>
                 <td><?php echo $search5['staff_number']; ?></td>
                 <td><?php echo $search5['Branch_name']; ?>
         <td>
                <td>
                 <!--delete button-->
                    <button type="button"><a href="viewcheckupstaff.php?delete=<?php echo $search5['StaffID']; ?>">Delete</a></button>
                    
                 </td>
             </tr>

        <?php endwhile;?>    
        
        <?php
             if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    //Delete from the check up staff table
    $sql = "DELETE FROM Checkup_Staff WHERE StaffID=$id";

    if ($connect->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
         echo "Error deleting record: " . $connect->error;
    }
}?>

</html>