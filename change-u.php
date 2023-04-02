<?php 
session_start();

if (isset($_SESSION['first_name']) && isset($_SESSION['email'])) {

    include "config.php";

if (isset($_POST['cu']) && isset($_POST['nu'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$cu = validate($_POST['cu']);
	$nu = validate($_POST['nu']);
    
    if(empty($cu)){
      header("Location: change-username.php?error=Current username is required");
	  exit();
    }else if(empty($nu)){
      header("Location: change-username.php?error=New username is required");
	  exit();
    }else if($cu == $nu){
      header("Location: change-username.php?error=The new username and old username are exact same");
	  exit();
    }else {
    	// hashing the username
    	// $cu = md5($cu);
    	// $nu = md5($nu);
        $fname = $_SESSION['first_name'];

        $sql = "SELECT email
                FROM users WHERE 
                first_name='$fname' AND email='$cu'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE users
        	          SET email='$nu'
        	          WHERE first_name='$fname'";
        	mysqli_query($conn, $sql_2);
        	header("Location: change-username.php?success=Your username/email has been changed successfully");
	        exit();

        }else {
        	header("Location: change-username.php?error=Incorrect username");
	        exit();
        }

    }

    
}else{
	header("Location: change-username.php");
	exit();
}

}else{
     header("Location: index.php");
     exit();
}
?>