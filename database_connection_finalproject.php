<?php

define("servername","localhost");
define("username","root");
define("password","");
define("dbname","Switched_at_birth_19845");


 
//create connection
$connect=new mysqli(servername, username, password, dbname) ;
//check connection
  if($connect->connect_error){
    die("Connection failed: ".$connect->connect_error);
    return $connect;
  }
//print connection successful if successful


?>