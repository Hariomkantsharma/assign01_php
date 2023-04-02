<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
     <form action="login.php" method="post">
     	<h1>LOGIN</h1>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email</label>
     	<input type="text" name="email" placeholder="email"><br>
		<BR>
		<BR>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>
		 <BR>
		 <BR>

     	<button type="submit">Login</button>
          <a href="register.php" class="ca">Create an account</a>
     </form>
</body>
</html>