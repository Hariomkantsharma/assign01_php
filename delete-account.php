<?php 
session_start();

if (isset($_SESSION['first_name']) && isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Account</title>
	
</head>
<body>
    <form action="delete-a.php" method="post">
     	<h2>Delete Account</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

     	<label>Username/email</label>
     	<input type="name" 
     	       name="cud" 
     	       placeholder="current username">
     	       <br>
				<BR>
				<BR>

     	<label>Password</label>
     	<input type="password" 
     	       name="pd" 
     	       placeholder="password">
     	       <br>
				<BR>
				<BR>


     	<button type="submit">Delete</button>
          <a href="home.php" class="ca">HOME</a>
     </form>
</body>
</html>

<?php 
}else{
     header("Location: logout.php");
     exit();
}
 ?>