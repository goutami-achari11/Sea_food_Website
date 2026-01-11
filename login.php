<?php
session_start();
include 'connects.php';
if(isset($_POST['btnsubmit']))
{
$email=test_input($_POST['email']);
$password=test_input($_POST['password']);
//$rpassword=md5($rpassword);

//mysql_connect("localhost", "root","");
$conn=connectdb();

	$sql="Select * from register where email= '".$email."' and password= '".$password."'";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
				while($row=$result->fetch_assoc())
				{
					
				$_SESSION['NAME']=$row['name'];	
				$_SESSION['EMAIL']=$row['email'];
				$_SESSION['PHONE']=$row['phone'];
				$_SESSION['PASSWORD']=$row['password'];	
				}
				header("location: userdb.php");
	}
	else
	{
		
		echo'<script type="text/javascript">alert("Incorrect Username or Password");window.history.back(); </script>';
	
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
