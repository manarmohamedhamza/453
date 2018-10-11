
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
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


	<title>InBox</title>
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
h1{
 position: center;
  padding-top: 200px;
  padding-left: 40%;
  

  color: #fff;
  
  position: center;

  font-size: 50px;
}

</style>
</head>
<body>
  <?php
    
    if(!isset($_SERVER['HTTP_REFERER'])){
   
    header("location: index.php");
    exit;
}


    ?>

<ul>
  <li><a class="active" >Profile</a></li>

  <li style="float: right;"><a href="logout.php">Logout</a></li>
     <li style="float: right;"><a href="send.php">Send Msg</a></li>
    <li style="float: right;"><a href="Home.php">Home</a></li>
</ul>
<div class = "input-group">
			<?php
			include 'includes/inbox.inc.php';

			?>
	
</div>

</body>
</html>