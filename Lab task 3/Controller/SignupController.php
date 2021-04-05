<?php
     require_once'models/db _config.php';
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
			   $hasError = true;
		      $err_uname="Username Required";
		   
	   }
	   else{
		   $uname = ($_POST["uname"]);
	   }
	  if(empty($_POST["pass"])){
		  $hasError = true;
		   $err_pass="Password Required";
		   
	   }
	   else{
		   $pass = ($_POST["pass"]);
	   }
	   if(empty($_POST["email"])){
		   $hasError = true;
		   $err_email="Email ID Required";
		   
	   }
	   else{
		   $pass =($_POST["email"]);
	   }
	  
	  if(!$hasError){
		  insertUser($name,$uname,$pass,$email);
		  
	  }
  }
	  function insertUser($name,$uname,$pass,$email){
		  $query = "INSERT INTO users VALUES (NULL,'$name','$uname','$pass','$email')";
		 
		  execute($query);
	  }
  
	  
?>
