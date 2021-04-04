<?php
    $name ="";
    $err_name ="";
    $uname="";
	$err_uname="";
    $pass="";
	$err_pass="";
	$email="";
	$err_email="";
	$err_message="";
	$hasError = false;
  if($_SERVER["REQUEST_METHOD"]=="POST"){
	  if(empty($_POST["name"])){
		  $hasError = true;
		  $err_name = "name required";
	  } else{
		  $name = $_POST["name"];
	  }
	  	   if(empty($_POST["uname"])){
		   $err_uname="Username Required";
		   $hasError = true;
	   }
	   else{
		   $uname = ($_POST["uname"]);
	   }
	  if(empty($_POST["pass"])){
		   $err_pass="Password Required";
		   $hasError = true;
	   }
	   else{
		   $pass = ($_POST["pass"]);
	   }
	   if(empty($_POST["email"])){
		   $err_email="Email ID Required";
		   $hasError = true;
	   }
	   else{
		   $pass =($_POST["email"]);
	   }
	  }
?>
