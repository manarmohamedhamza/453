<?php
session_start();

?>




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
		<h2>Login</h2>
	</div>
	<form method="POST" action="includes/login.inc.php" onSubmit="window.location.reload()">
		<div class = "input-group">
			
			<label>Username</label>
			<input type="text" name="username" placeholder="Enter Your Username" > 
		</div>
		
			<div class = "input-group">
			<label>password</label>
			<input type="password" name="password_1" placeholder="Enter Your Password">
			
		</div>
			
			<div class = "input-group">
		<button type = "submit" name="login" class = "btn">login</button>
		</div>
		<p>
			not a member ? <a href="register.php">Sign up</a>
		</p>
		<br/>
		<p>

			<?php

	$fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if(strpos($fullurl, "login=empty") == true)
	{
		echo "<p  class='err'>You didnot fill in all data!</p>";
		exit();
	}
	elseif(strpos($fullurl, "login=notfound") == true)
	{
		echo "<p  class='err'>User is not found!</p>";
		exit();
	}
	elseif(strpos($fullurl, "login=wrong_pass") == true)
	{
		echo "<p  class='err'>You have Entered wrong password!</p>";
		exit();
	}

	?>
		</p>

	</form>


	<!--
	<?php
/*
	$fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if(strpos($fullurl, "login=empty") == true)
	{
		echo "<p  class='err'>You didnot fill in all data!</p>";
		exit();
	}
	elseif(strpos($fullurl, "login=notfound") == true)
	{
		echo "<p  class='err'>User is not found!</p>";
		exit();
	}
	elseif(strpos($fullurl, "login=wrong_pass") == true)
	{
		echo "<p  class='err'>You have Entered wrong password!</p>";
		exit();
	}
*/
	?>-->

</body>
</html>