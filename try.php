<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>
<p> Please fill in the baby's details </p>

<form method="POST" action="">
<p> Baby Details </p>   
    Name <input type = "text" id="query" name= "baby_name" placeholder="Your name"></br>
    Weight <input type = "text" id="query" name= "weight" placeholder="Your number"></br>
    Mothers Name <input type = "text" id="query" name= "mother_name" placeholder="Your name"></br>
    Fathers Name <input type = "text" id="query" name= "father_name" placeholder="Your name"></br>
    <input type="radio" name="gender"-->
<?php if (isset($gender) && $gender=="Female") echo "checked";?>
<value="Female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="Male") echo "checked";?>
value="Male">Male

</br>
<select name="Year">
  <option value="">Select year</option>
  <?php for ($i = 1980; $i <=2021; $i++) : ?>
  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
  <?php endfor; ?>
</select>
<select name="Month">
  <option value="">Select month</option>
  <?php for ($i = 1; $i <= 12; $i++) : ?>
  <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
  <?php endfor; ?>
</select>
<select name="Date">
  <option value="">Select date</option>
  <?php for ($i = 1; $i <= 31; $i++) : ?>
  <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
  <?php endfor; ?>
</select>
  </br>
   <button type="submit" name="submit"> Submit </button>
  </form>


  <?php
  include 'database_connection_finalproject.php';
if(isset($_POST['submit'])){
   if(isset($_POST['mother_name'])){
    $mother_name=$_POST['mother_name'];    
}

if(isset($_POST['father_name'])){
    $father_name=$_POST['father_name'];    
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

   if(isset($_POST['submit']))
  {
  $Year = $_POST['Year'];
  $Month = $_POST['Month'];
  $Date = $_POST['Date'];
  if ($Year != '' && $Month != '' && $Date != '') 
     {
     $date = $Year.'-'.$Month.'-'.$Date;}
     $sql="INSERT INTO Baby(baby_name, weight, dob, gender, mothers_name, fathers_name) VALUES  ('$baby_name','$weight','$date','$gender','$mother_name','$father_name')";
     if (mysqli_query($connect,$sql))
     {
        echo "Record added!";
     }
     else
     {
        echo "Error!!!";
     }
}
  else
     {
        echo "Please Select Day, Month and Year!!!";
     }   
  
    }
 
 

   
?>
  </body>
  </html> 