<!DOCTYPE html>
<html class="next">
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

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="final_project.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="staff.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Employee</a>
    <a href="client.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Client</a>
    <a href="hospital.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Hospital</a>
    <a href="checkupstaff.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Staff</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="staff.php" class="w3-bar-item w3-button w3-padding-large">Staff</a>
    <a href="client.php" class="w3-bar-item w3-button w3-padding-large">Client</a>
    <a href="hospital.php" class="w3-bar-item w3-button w3-padding-large">Hospital</a>
    <a href="checkupstaff.php" class="w3-bar-item w3-button w3-padding-large">Staff</a>
  </div>
</div>

<html style="background-image: url('capture.jpg');">
</br></br></br></br>
    <body><center>
    <h1>Hospital Details</h1>
        <div class="no">
        <form method="POST" action="">
        Hospital ID <input type = "text" id="query" name= "hospitalID" placeholder="Enter the Hospital ID"></br>
        Hospital name <input type = "text" id="query" name= "hospital_name" placeholder="Enter the hospital name"></br>
        Town <input type = "text" id="query" name= "town" placeholder="Enter the town"></br>
        Region<input type = "text" id="query" name= "region" placeholder="Enter the region"></br>
    
         
        

                Personnel name <input type = "text" id="query" name= "personnel_name" placeholder="Enter personnel name"></br>
                <input type="radio" name="personnel_type"
                <?php if (isset($personnel_type) && $personnel_type=="doctor") echo "checked";?>
                value="doctor">Doctor
                <input type="radio" name="personnel_type"
                <?php if (isset($personnel_type) && $personnel_type=="nurse") echo "checked";?>
                value="nurse">Nurse
                <input type="radio" name="personnel_type"
                <?php if (isset($personnel_type) && $personnel_type=="midwife") echo "checked";?>
                value="midwife">Midwife 
                </br>
                Email <input type = "text" id="query" name= "email" placeholder="Enter the email"></br>
                <input type="submit" value= "submit" id= "submit" placeholder= "submit">
                </form>    
        <?php
        include 'database_connection_finalproject.php';
        if(isset($_POST['submit'])){
            //Get and print the information within the searchbox, if any
                if(isset($_POST['hospitalID'])){
                    $hospitalID =$_POST['hospitalID'];
                }
        
    
    
            //Get and print the information within the searchbox, if any
                if(isset($_POST['hospital_name'])){
                    $hospital_name =$_POST['hospital_name'];
                }
        


            //Get and print the information within the searchbox, if any
                if(isset($_POST['town'])){
                    $town =$_POST['town'];
                }
        


            //Get and print the information within the searchbox, if any
                if(isset($_POST['region'])){
                    $region =$_POST['region'];
                }

                
                   
                  $sql = "INSERT INTO Hospital (hospitalID,hospital_name,town,region)
                  VALUES ( '$hospitalID','$hospital_name','$town','$region')";
              
                  if ($connect->query($sql) === TRUE) {
                    echo "New record created successfully";
                          } else {
                      echo "Error: " . $sql . "<br>" . $connect->error;
                  }

                  if(isset($_POST['personnel_type'])){
                    $personnel_type =$_POST['personnel_type'];
                }
        
    
    
            //Get and print the information within the searchbox, if any
                if(isset($_POST['personnel_name'])){
                    $personnel_name =$_POST['personnel_name'];
                }
        


            //Get and print the information within the searchbox, if any
                if(isset($_POST['email'])){
                    $email =$_POST['email'];
                }


                $sql = "INSERT INTO Health_personnel (personnel_name,hospitalID,personnel_type,email)
                VALUES ( '$personnel_name','$hospitalID','$personnel_type','$email')";
            
                if ($connect->query($sql) === TRUE) {
                  echo "New record created successfully";
                        } else {
                    echo "Error: " . $sql . "<br>" . $connect->error;
                }
            }        
?>

                
                

             
        </center> </body>




</html>