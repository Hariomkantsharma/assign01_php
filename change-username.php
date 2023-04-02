<?php 
session_start();

if (isset($_SESSION['first_name']) && isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Username</title>
	
</head>
<body>
    <form action="change-u.php" method="post">
     	<h2>Change Username</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

     	<label>Current Username/email</label>
     	<input type="name" 
     	       name="cu" 
     	       placeholder="current username/emal">
     	       <br>
				<BR>
				<BR>

     	<label>New Username</label>
     	<input type="name" 
     	       name="nu" 
     	       placeholder="new username">
     	       <br>
				<BR>
				<BR>

     	<button type="submit">CHANGE</button>
          <a href="home.php" class="ca">HOME</a>
     </form>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>