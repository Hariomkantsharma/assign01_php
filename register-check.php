<?php 
session_start(); 
include "config.php";

if (isset($_POST['email']) && isset($_POST['password'])
    && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['confirm_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['email']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['confirm_password']);
	$first_name = validate($_POST['first_name']);

	$user_data = 'email='. $uname. '&first_name='. $first_name;
	$last_name = validate($_POST['last_name']);



	if (empty($uname)) {
		header("Location: register.php?error=Email cannot be blank&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: register.php?error=Password cannot be blank&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: register.php?error=Re-enter Password is required&$user_data");
	    exit();
	}

	else if(empty($first_name)){
        header("Location: register.php?error=first_name is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: register.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        // $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE email='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: register.php?error=The username is taken, try another one&$uname");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(email, password, first_name, last_name) VALUES('$uname', '$pass', '$first_name','$last_name')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: register.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: register.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: register.php");
	exit();
}
?>