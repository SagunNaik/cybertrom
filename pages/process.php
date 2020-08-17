<?php 
session_start();
include('../dbConnect.php');

$username=$_POST["username"];
$pass=$_POST["password"];
$_SESSION['user']="admin";
$flag=-1;

//prevention towards SQL injection
$username=stripcslashes($username);
$pass=stripcslashes($pass);

//query
$sql="select * from systemUser where username='$username' and password='$pass'";
$result=$conn->query($sql) or die("faild to query".mysql_error());

$row=mysqli_fetch_array($result);

if($username==$row["username"])
{
	$flag=1;
	$_SESSION['name']=$row["Name"];
	$_SESSION['loign_status']=TRUE;
	
	// close db connection
	$conn->close();
	header('Location: adminHome.php');
}
else
{
	echo '<script>alert("Login Failed... Check your Credential !!")</script>';
	$flag=0;	
}
if($flag==0)
{
	// close db connection
	$conn->close();

	header('Location: admin.php');
}
// close db connection
$conn->close();
 ?>