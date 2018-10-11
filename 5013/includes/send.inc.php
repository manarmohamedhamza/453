

<?php
session_start();

if(isset($_POST['send']))
	{
$fr_user = $_SESSION['usname'];
	include 'dbh.inc.php';
		$to = mysqli_real_escape_string($conn,$_POST['to_user']);
		$sub = mysqli_real_escape_string($conn,$_POST['sub']);
		$con = mysqli_real_escape_string($conn,$_POST['messag']);
		$date = date("Y/m/d");


		if(empty($to)||empty($sub)||empty($con))
		{
			header("Location: ../send.php?send=empty");
			exit();

			
		}
		else{
					$sql = "SELECT * FROM users WHERE username = '$to'";
					$res =mysqli_query($conn, $sql);
					$rescheck = mysqli_num_rows($res);
					if($rescheck==0)
					{
						header("Location: ../send.php?send=not");
						exit();
					}

					else
					{
						//$hashmsg = password_hash($con, PASSWORD_DEFAULT);
						$hashmsg=base64_encode($con);
							$sql = "INSERT INTO message (fr_user, to_user , msg,date,readn,sub) VALUES ('$fr_user' , '$to' ,'$hashmsg','$date','0','$sub');";

					$result = mysqli_query($conn,$sql);
					//echo "<p  class='err'>Your message sent successfully</p>";

					//header("Location: ../send.php?send=sucess");
					header("Location: ../Home.php?send=sucess");
					    

					exit();

					}
				}
	

}

else
	{
		header("Location: ../send.php");
		exit();


	}

?>