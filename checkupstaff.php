<!--References: w3 schools-->
<!DOCTYPE html>

<html class="next" style="background-image: url('capture.jpg');">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="work.css">

<style>
h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body><center>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="staff.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Employee</a>
    <a href="client.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Client</a>
    <a href="hospital.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Hospital</a>
    <a href="checkupstaff.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Staff</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="staff.php" class="w3-bar-item w3-button w3-padding-large">Employee</a>
    <a href="client.php" class="w3-bar-item w3-button w3-padding-large">Client</a>
    <a href="hospital.php" class="w3-bar-item w3-button w3-padding-large">Hospital</a>
    <a href="checkupstaff.php" class="w3-bar-item w3-button w3-padding-large">Staff</a>
  </div>
</div>

    <script>
function checkExpression(stringToCheck)
{
    var expression=/^[0-9]+$/;
    if (stringToCheck.value.match(expression))
    {
         alert('Input successful');
        document.form1.staffID.focus();
        return true;
  
    }else{
        alert('Please enter a number for Employee ID');
        document.form1.staffID.focus()
   }
}
</script>
</br></br></br></br>
  <?php
    include 'database_connection_finalproject.php'; 
    ?>
    <div>
    <h1>Welcome Staff of Switched at birth</h1>
</div>



   

 <div class="no">
  
<!--Create form to get input from users-->
    <form action= "checkupstaff.php" method= "get" id= "form" name="form1" class="no">
   Branch  <input type="radio" name="branch"
<?php if (isset($branch) && $branch=="Tema") echo "checked";?>
value="Switched at Birth Tema">Tema

<input type="radio" name="branch"
<?php if (isset($branch) && $branch=="Accra") echo "checked";?>
value="Switched at Birth Accra">Accra

<input type="radio" name="branch"
<?php if (isset($branch) && $branch=="Takoradi") echo "checked";?>
value="Switched at Birth Takoradi">Takoradi

<input type="radio" name="branch"
<?php if (isset($branch) && $branch=="Saltpond") echo "checked";?>
value="Switched at Birth Saltpond">Saltpond

<input type="radio" name="branch"
<?php if (isset($branch) && $branch=="Keta") echo "checked";?>
value="Switched at Birth Keta">Keta

</br>

    Staff ID <input type = "text" id="query" name= "staffID" placeholder="Enter Staff ID"></br>
    Staff name <input type = "text" id="query" name= "staff_name" placeholder="Enter your name"></br>
    Staff number <input type = "text" id="query" name= "staff_number" placeholder="Enter your number"></br>
    Email<input type = "text" id="query" name= "email" placeholder="Enter your email"></br>
    
    <button type="submit" class="button" name="submit" onclick="checkExpression(document.form1.staffID)"> Submit </button>
    </form>
</div>
    <?php
            //Get and print the information within the searchbox, if any
                if(isset($_GET['staffID'])){
                    $staffID =$_GET['staffID'];
                }
        
    
    
            //Get and print the information within the searchbox, if any
                if(isset($_GET['staff_name'])){
                    $staff_name =$_GET['staff_name'];
                }
        


            //Get and print the information within the searchbox, if any
                if(isset($_GET['staff_number'])){
                    $staff_number =$_GET['staff_number'];
                }
 
            //Get and print the information within the searchbox, if any
                if(isset($_GET['email'])){
                    $email =$_GET['email'];
                }

if (isset($_GET['branch'])) {
  $branch_name= $_GET['branch'];
   
//Insert into check Up staff table
    $sql = "INSERT INTO Checkup_Staff (StaffID,staff_name,staff_number,email, Branch_name)
    VALUES ( '$staffID','$staff_name','$staff_number','$email','$branch_name')";

    if ($connect->query($sql) === TRUE) {
      echo "New record created successfully";
            } 
}

?>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</center></body>



  







</html>