


<?php


$user = $_SESSION['usname'];
	include 'dbh.inc.php';

echo'	<link rel="stylesheet" type="text/css" href="style.css">';
$sql = "SELECT * FROM message WHERE to_user = '$user' order by id desc";
		$res = mysqli_query($conn, $sql);
		$rescheck =  mysqli_num_rows($res);

		if($rescheck !=0)
		{
			echo "<table border=1 solid white width = 100% >";
			echo"<tr>";
			
			echo "<td><font color=black> From </font></td>";
			echo "<td> Subject </td>";
			echo "<td> message </td>";
			echo "<td> Date</td>";
			echo "</tr>";

			while($rescheck = mysqli_fetch_assoc($res))
			{
				$id = $rescheck["id"];
					$de_msg = $rescheck["msg"];
				$mssg = base64_decode($de_msg);
				echo "<tr>";
				
				echo "<td>".$from =$rescheck ["fr_user"]."</td>";
			
				echo "<td>".$subj = $rescheck['sub']."</a></td>";

				echo "<td>".$mssg."</a></td>";
				echo "<td>".$data =$rescheck ['date']."</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		else
		{
			
			echo "<p>you haven't recived any messages </p>";
		

		}





?>