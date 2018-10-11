<?php

 
	if(isset($_POST['register']))
	{

		include_once 'dbh.inc.php';
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$password_1 = mysqli_real_escape_string($conn,$_POST['password_1']);
		$password_2 = $_POST['password_2'];

		if(empty($username)||empty($email)||empty($password_1))
		{
			header("Location: ../register.php?register=empty");
			exit();

			
		}

		
		else
			{

				if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
					header("Location: ../register.php?register=email");
				
					exit();
				}


				else{
					$sql = "SELECT * FROM users WHERE username = '$username'";
					$res =mysqli_query($conn, $sql);
					$rescheck = mysqli_num_rows($res);
					if($rescheck>0)
					{
						header("Location: ../register.php?register=usertaken");
						exit();
					}
				
				
					else{


							if($password_1 != $password_2)
						{
							header("Location: ../register.php?register=wrongpass");
							exit();
						}
						else
						{
							if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$/",$password_1))
							{
								header("Location: ../register.php?register=wrongform");
							exit();
							}

						
						else{
				
					$hashpwd = password_hash($password_1, PASSWORD_DEFAULT);

					$sql = "INSERT INTO users (username, email , password) VALUES ('$username' , '$email' ,'$hashpwd');";

					$result = mysqli_query($conn,$sql);

					header("Location: ../register.php?register=success");
					    

					exit();
					}	
				}

					}

				}
			}



	}
	else
	{
		header("Location: ../register.php");
		exit();


	}



	?>