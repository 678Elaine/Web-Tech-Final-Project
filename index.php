<!-- References: W3 schools-->
<!DOCTYPE html>
<html lang="en">

  <title>Switched at Birthday Maternity Care Center</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navigation bar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="staff.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Employee</a>
    <a href="client.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Client</a>
    <a href="hospital.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Hospital</a>
    <a href="checkupstaff.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Staff</a>
    
    
    
  </div>
    
  

  <!-- Navigation bar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="staff.php" class="w3-bar-item w3-button w3-padding-large">Employee</a>
    <a href="client.php" class="w3-bar-item w3-button w3-padding-large">Client</a>
    <a href="hospital.php" class="w3-bar-item w3-button w3-padding-large">Hospital</a>
    <a href="checkupstaff.php" class="w3-bar-item w3-button w3-padding-large">Staff</a>
    
  </div>
  
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">SWITCHED AT BIRTH MATERNITY CARE CENTER</h1>
  <p class="w3-xlarge">Their safety is our concern</p>
  <a href="login.php"><button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">View Information</button></a>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>About</h1>
      <h5 class="w3-padding-32">Switched at birth maternity care centre was formed on the 23rd of February, 2001 as a measure to support nursing and pregnant mothers. It was formed after the founders daughter was unfortunately switched with another’s daughter at one hospital. This was the inspiration behind the name ‘Switched at Birth’ and the company as well.</h5>

      <p class="w3-text-grey">Switched at birth is a maternity care centre created to control issues surrounding childbirth, such as having your child changed with someone else's own. This site seeks to make people more accountable for their actions before and after birth by storing adequate information surrounding a child's birth, such as the mother's details, the father's details, the baby's details, and the details of the person who helped you deliver, whether a doctor, or a nurse, or a midwife. It also includes where you gave birth and all routine checkups before birth. All you need to do is provide these details accurately, and we know who to hold accountable for any complications after birth. This also makes it easy for children abandoned at birth to see the truth.</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>Direction</h1>
      <h5 class="w3-padding-32">This website is designed for employees only</h5>

      <p class="w3-text-grey">The sole aim of this website is to store information on our dear mothers who are expecting a child soon and have already given birth. Use the navigation bar above to fill the out the information required. For employee, kindly fill out the necessary details in the necessary forms concerning the mother and her family. All new employees and check up staff, are required to fill our their respective forms as well.</p>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: "Whenever and wherever you intend to give birth, your experience will impact your emotions, your mind, your body, and your spirit for the rest of your life" - Ina May Gaskin</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 
</footer>

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


</body>
</html>

