<?php 
session_start();

if (isset($_SESSION['first_name']) && isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>

</head>
<body>
     <h1>Hello</h1>
     <h1>Name :  <?php echo $_SESSION['first_name']?></h1>
          <h1>Username : <?php echo $_SESSION['email']; ?></h1>
     <nav class="home-nav">
     	<a href="change-password.php">Update Password</a>
     	<a href="change-username.php">Update Username</a>
     	<!-- <a href="change-username.php">Dek</a> -->
     	<a href="delete-account.php">Delete Account</a>
     	<!-- <a href="change-password.php">Update </a>    .$_SESSION['last_name']   -->
        <a href="logout.php">Logout</a>
     </nav>
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>