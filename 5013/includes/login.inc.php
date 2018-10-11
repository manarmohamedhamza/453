<?php


session_start();

if(isset($_POST['login']))
{
	include 'dbh.inc.php';
	

	$username = mysqli_real_escape_string($conn, $_POST['username']);

	$password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);

	if(empty($username)|| empty($password_1))
	{
	header("Location: ../login.php?login=empty");
		exit();
	}









	else
	{
		$sql = "SELECT * FROM users WHERE username = '$username'";
		$res = mysqli_query($conn, $sql);
		$rescheck =  mysqli_num_rows($res);
		if($rescheck <1)
		{
			header("Location: ../login.php?login=notfound");
		exit();
		}
		else
		{
			if($row = mysqli_fetch_assoc($res))

			{
				$hpass = password_verify($password_1, $row['password']);
				if($hpass == false)
				{
						header("Location: ../login.php?login=wrong_pass");
					exit();
					

				}
				elseif($hpass == true)
				{
					$_SESSION['username'] = $row['username'];
					$_SESSION['usname']=$username;
						header("Location: ../Home.php");
					exit();
				}

			}
		}
	}

}
	else
	{
		header("Location: ../login.php?login=err");
		exit();
	}
