<!--REFERENCES: online resources-->
<!DOCTYPE html>

<html style="background-image: url('capture.jpg');">
<link rel="stylesheet" href="work.css">
<head>

    <center><title>LOGIN</title></center>

    

</head>

<body class="color">
<!-- Form created to get log in information from administrator-->
<div class="no">
    <form method="post" action="">
        
            <h1><center>Administrator Login</center></h1>
            <div>
                <input type="text" class="textbox" id="uname" name="uname" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
                <input type="submit" value="Submit" name="submit" id="submit" />
            </div>
        
    </form>
</div>

</body>

<?php
include 'database_connection_finalproject.php'; 
// if the submit button is clicked, check if the value matches that in the database
if(isset($_POST['submit'])){

    $uname = mysqli_real_escape_string($connect,$_POST['uname']);
    $password = mysqli_real_escape_string($connect,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){
// count the records based on the information that was provided
        $sql_query = "select count(*) as cntUser from log_in where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($connect,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];
// if the count is greater than 1, get the information is in the database and therefore head to the next page
        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: home.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>

<center><a href="index.php"><button>Return to Home page</button></a></center>
</html>


