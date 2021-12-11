<!--References: Online Resources-->
<!DOCTYPE html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="work.css">


<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="staff.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Employee</a>
    <a href="client.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Client</a>
    <a href="hospital.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Hospital</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Staff</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="staff.php" class="w3-bar-item w3-button w3-padding-large">Employee</a>
    <a href="client.php" class="w3-bar-item w3-button w3-padding-large">Client</a>
    <a href="hospital.php" class="w3-bar-item w3-button w3-padding-large">Hospital</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Staff</a>
  </div>
</div>
<script>
function checkExpression(stringToCheck)
{
    var expression=/^[0-9]+$/;
    if (stringToCheck.value.match(expression))
    {
         alert('Input successful');
        document.form1.employeeID.focus();
        return true;
  
    }else{
        alert('Please enter a number for Employee ID');
        document.form1.employeeID.focus()
   }
}
</script>

<html style="background-image: url('capture.jpg');" >
<div >
    <h1> Welcome client of Switched at birth</h1>



    <body ><center>

 
    <h1> Client details</h1>

    <div class="no">

<!--Create form to accept information from users-->
    <form method="POST" action="" name="form1">
    Mothers name <input type = "text" id="query" name= "mother_name" placeholder="Mothers name"></br>
    Mothers number <input type = "text" id="query" name= "mother_number" placeholder="Mothers number"></br>
    Mothers Email <input type = "text" id="query" name= "mother_email" placeholder="Mothers email"></br>
    EmployeeID<input type = "text" id="query" name= "employee_id" placeholder="The Employee ID"></br>
    StaffID<input type = "text" id="query" name= "staff_id" placeholder="The Staff ID"></br>

    Fathers Name <input type = "text" id="query" name= "father_name" placeholder="Fathers name"></br>
    Fathers Number <input type = "text" id="query" name= "father_number" placeholder="Fathers number"></br>
    Fathers Email <input type = "text" id="query" name= "father_email" placeholder="Fathers email"></br>

   Baby's Name <input type = "text" id="query" name= "baby_name" placeholder="Name of Baby"></br>
    Baby's Weight <input type = "text" id="query" name= "weight" placeholder="Weight of Baby"></br>
    Health Personnel <input type = "text" id="query" name= "healthpersonnel" placeholder="Health Personnel"></br></br>
    <input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male

</br></br>
<select name="Year">
  <option value="">Select year</option>
  <?php for ($i = 1980; $i <=2021; $i++) : ?>
  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
  <?php endfor; ?>
</select>
  </br></br>
<select name="Month">
  <option value="">Select month</option>
  <?php for ($i = 1; $i <= 12; $i++) : ?>
  <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
  <?php endfor; ?>
</select>
  </br></br>
<select name="Date">
  <option value="">Select date</option>
  <?php for ($i = 1; $i <= 31; $i++) : ?>
  <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
  <?php endfor; ?>
</select>
  </br>
   <input type="submit" name="submit" onclick="checkExpression(document.form1.employee_id)">
</form>
  </div>
  
   <?php
   if(isset($_POST['submit'])){
            //Get and print the information within the searchbox, if any
                if(isset($_POST['mother_name'])){
                     $mother_name=$_POST['mother_name'];    
                }
        


            //Get and print the information within the searchbox, if any
                if(isset($_POST['mother_number'])){
                     $mother_number=$_POST['mother_number'];     
                }
        


            //Get and print the information within the searchbox, if any
                if(isset($_POST['mother_email'])){
                     $mother_email=$_POST['mother_email'];
                }
        


            //Get and print the information within the searchbox, if any
                if(isset($_POST['employee_id'])){
                     $employee_id=$_POST['employee_id'];  
                }
        


            //Get and print the information within the searchbox, if any
                if(isset($_POST['staff_id'])){
                     $staff_id=$_POST['staff_id'];   
                }
        



    
include 'database_connection_finalproject.php';
//Insert into the Mothers table
$sql = "INSERT INTO Mother (mothers_name,mothers_number,email,employeeID,staffID)
VALUES ( '$mother_name','$mother_number','$mother_email','$employee_id','$staff_id')";

if ($connect->query($sql) === TRUE) {
  echo "New record created successfully";
} 

   
            //Get and print the information within the searchbox, if any
                if(isset($_POST['father_name'])){
                     $father_name=$_POST['father_name'];    
                }
     
            //Get and print the information within the searchbox, if any
                if(isset($_POST['father_number'])){
                     $father_number=$_POST['father_number'];
                }
   
            //Get and print the information within the searchbox, if any
                if(isset($_POST['father_email'])){
                     $father_email=$_POST['father_email'];   
                }
 

//insert into Father table
$sql = "INSERT INTO Father (fathers_name,fathers_number,email)
VALUES ( '$father_name','$father_number','$father_email')";

if ($connect->query($sql) === TRUE) {
  echo "New record created successfully";
} 

     if(isset($_POST['baby_name'])){
        $baby_name=$_POST['baby_name'];
     }
     if(isset($_POST['weight'])){
     $weight=$_POST['weight'];   
    }

    if(isset($_POST['gender'])){
        $gender=$_POST['gender'];
        }

    if(isset($_POST['healthpersonnel'])){
       $healthpersonnel=$_POST['healthpersonnel'];
        }

  
  //get information from the form and insert into Baby table
  if(isset($_POST['submit']))
  {
  $Year = $_POST['Year'];
  $Month = $_POST['Month'];
  $Date = $_POST['Date'];
  if ($Year != '' && $Month != '' && $Date != '') 
     {
     $date = $Year.'-'.$Month.'-'.$Date;}
     $sql="INSERT INTO Baby (baby_name, weight, dob, gender, mothers_name, fathers_name, personnel_name) VALUES  ('$baby_name','$weight','$date','$gender','$mother_name','$father_name', '$healthpersonnel')";
     if (mysqli_query($connect,$sql))
     {
        echo "Record added!";
     }
    
}
  else
     {
        echo "Please Select Day, Month and Year!!!";
     }   
  
 
 
 

   }

    ?>


</center>
  </body>
  </div> 
</html>