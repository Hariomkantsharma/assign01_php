<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	
</head>
<body>
     <form action="register-check.php" method="post">
     	<h2>Register</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>first_name</label>
          <?php if (isset($_GET['first_name'])) { ?>
               <input type="text" 
                      name="first_name" 
                      placeholder="first_name"
                      value="<?php echo $_GET['first_name']; ?>"><br><BR><BR>
          <?php }else{ ?>
               <input type="text" 
                      name="first_name" 
                      placeholder="first_name"><br><BR><BR>
          <?php }?>

          <label>last_name</label>
          <?php if (isset($_GET['last_name'])) { ?>
               <input type="text" 
                      name="last_name" 
                      placeholder="last_name"
                      value="<?php echo $_GET['last_name']; ?>"><br><BR><BR>
          <?php }else{ ?>
               <input type="text" 
                      name="last_name" 
                      placeholder="last_name"><br><BR><BR>
          <?php }?>

          <label>Email</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="text" 
                      name="email" 
                      placeholder="email"
                      value="<?php echo $_GET['email']; ?>"><br><BR><BR>
          <?php }else{ ?>
               <input type="text" 
                      name="email" 
                      placeholder="email"><br><BR><BR>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br><BR><BR>

          <label>Confirm Password</label>
          <input type="password" 
                 name="confirm_password" 
                 placeholder="confirm_Password"><br><BR><BR>

     	<button type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>