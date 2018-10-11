<?php
session_start();

?>




<!DOCTYPE html>
<html>
<head>
	<title>Send page </title>
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


		<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #f3f3f3;
    font-size: 150%;
}

li {
    float: left;
}

li a {
    display: block;
    color: #666;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #ddd;
}

li a.active {
    color: 666;
    background-color: #f3f3f3;
}
.home
{
    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) ,url("img.jpg");
  height: 100vh;
   background-repeat: no-repeat;
    background-size:  cover;
  background-position: center;
}
.button
{
  position: center;
  padding-top: 80px;
  padding-left: 40%;
  color: #fff;
}
.btns{
  border: 1px solid #fff;
  padding: 10px 30px;
  color:  #fff;
  margin-left: 10px;
  text-decoration: none;
  transition: 0.6s ease;
}
.btns:hover{
  background-color: #fff;
  color: #000;

}


</style>
</head>
<body>
<ul>
  <li><a class="active" >Profile</a></li>

  <li style="float: right;"><a href="logout.php">Logout</a></li>
     <li style="float: right;"><a href="InBox.php">InBox</a></li>
      <li style="float: right;"><a href="Home.php">Home</a></li>
 
</ul>
	<div class ="header">
		<?php

		if(!isset($_SERVER['HTTP_REFERER'])){
 
    header("location: index.php");
    exit;
}



else
{
if(isset($_SESSION['usname']) && !empty($_SESSION['usname']));
{

	

	echo "<h1> Welcome ".$_SESSION['usname']."</h1> ";




}}

		?>
		<h2>Send Message</h2>
	</div>
	<form method="POST" action="includes/send.inc.php" onSubmit="window.location.reload()">
		<div class = "input-group">
			<table>
			<tr>
			<td>To:Username</td>
			<td><Input type = 'text' name ='to_user' placeholder='Enter username'/></td>
			</tr>
			<tr>
			<td>Subject:</td>
			<td><Input type = 'text' name ='sub' placeholder='Enter The subject'/></td>
			</tr>
			<tr>
			<td>Msg_Content</td>
			<td><textarea name='messag' cols='50' rows='10'></textarea></td>
			</tr>
			</table>
		</div>
			
			<div class = "input-group">
		<button type = "submit" name="send" class = "btn">Send</button>
		</div>
		
<br/>
	
	<?php

	$fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if(strpos($fullurl, "send=empty") == true)
	{
		echo "<p  class='err'>You didnot fill in all data!</p>";
		exit();
	}
	elseif(strpos($fullurl, "send=not") == true)
	{
		echo "<p  class='err'>User is not found!</p>";
		exit();
	}
/*	elseif(strpos($fullurl, "send=sucess") == true)
	{
		echo "<p  class='err'>Your message sent successfully</p>";
		
					
		exit();
	}*/

	?>
</form>
</body>
</html>