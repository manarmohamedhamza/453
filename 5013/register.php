





<!DOCTYPE html>
<html>
<head>
	<title>user registration system</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/
		jquery/3.3.1/jquery.min.js"></script>
		
<script>

 jQuery(document).ready(function($) {
 window.history.pushState(null, "", window.location.href);        
        window.onpopstate = function() {
            window.history.pushState(null, "", window.location.href);
        };
    });

</script>
</head>
<body>

	<div class ="header">
		<h2>Registration</h2>
	</div>
	<form method="POST" action="includes/signup.inc.php" onSubmit="window.location.reload()">

		
		<div class = "input-group">
			<label>Username</label>
			<input type="text" name="username" placeholder="Username"  >
			
		</div>
			<div class = "input-group">
			<label>Email</label>
			<input type="text" name="email" placeholder="Email">
			
		</div>
			<div class = "input-group">
			<label>password</label>
			<input type="password" name="password_1" placeholder="password ex:User@user12">
			
		</div>
			<div class = "input-group">
			<label>confirm password</label>
			<input type="password" name="password_2" placeholder="RETYPE password">
		</div>
			<div class = "input-group">
		<button type = "submit" name="register" class = "btn">Register</button>
		</div>
		<p>
			Already a member ? <a href="login.php">Sign in</a>

		</p>
		<br/>
		<p>
			<?php

	$fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if(strpos($fullurl, "register=empty") == true)
	{
		echo "<p  class='err'>You didnot fill in all data!</p>";
		exit();
	}
	elseif(strpos($fullurl, "register=wrongform") == true)
	{
		echo "<p  class='err'> Reenter the password in Write format!</p>";
		exit();
	}
	elseif(strpos($fullurl, "register=wrongpass") == true)
	{
		echo "<p  class='err'>Passwords are not matching!</p>";
		exit();
	}
	elseif(strpos($fullurl, "register=usertaken") == true)
	{
		echo "<p  class='err'>Username already exist</p>";
		exit();
	}
	elseif(strpos($fullurl, "register=email") == true)
	{
		echo "<p  class='err'>Kindily enter a valid email!</p>";
		exit();
	}
	elseif(strpos($fullurl, "register=success") == true)
	{
		header("Location: login.php");
					    

					exit();
	}

	?>
		</p>

	</form>

	

</body>
</html>