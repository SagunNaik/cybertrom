<?php 
session_start();
include ("../dbConnect.php");

/*Create dir for images */
$dir_name="../dummy_pic";

	if(!is_dir($dir_name))
	{
		mkdir($dir_name);
	}

$tragetDir=$dir_name."/";
$name=$_POST['name'];
$addr=$_POST['address'];
$email=$_POST['email'];
$mobileno=$_POST['phone'];
$dob=$_POST['dob'];
$upload_status=1;

/*Unique File name creation for user*/
$pos=strpos($email,"@");
$filename=substr($email,0,($pos+1));
$filename=$filename.substr($mobileno,0, 8);
$image_ext=strtolower(pathinfo(basename($_FILES["photo"]["name"]),PATHINFO_EXTENSION));
$filename=$filename.".".$image_ext;


/*PREPARING SQL QUERY*/
$name=stripcslashes($name);
$addr=stripcslashes($addr);
$email=stripcslashes($email);
$mobileno=stripcslashes($mobileno);
$dob=stripcslashes($dob);



$INSERT="insert into userresponse (name,address,phone,email,dob,photo) VALUES ('$name','$addr','$mobileno','$email','$dob','$filename')";

//check if file is a image file
if(isset($_POST["submit"]))
{
	$check=getimagesize($_FILES["photo"]["tmp_name"]);
	if($check!==false)
	{
		$upload_status=1;
	}
	else{
		$upload_status=0;
	}
}

//check file existance

if(file_exists($tragetDir.$filename))
{
	echo "<script>alert('File already exists.......');</script>";
	$upload_status=0;
}


// Move the file to dir
if($upload_status==0)
{
	echo "<script>alert('Failed to upload file.......');</script>";
}
else{
	if($conn->query($INSERT)==TRUE){
		if(move_uploaded_file($_FILES["photo"]["tmp_name"], $tragetDir.$filename))
		{
			echo "<script>alert('Thank you !!! Your response has been recorded...');</script>";
		}
		else{
			echo "<script>alert('Failed to upload file.......');</script>";

			/*IF image upload fails then delete inserted record from db*/
			$sql="select * from userresponse where email='$email'";
			$result=$conn->query($sql) or die("faild to query".mysql_error());
			$row=mysql_fetch_array($result);
			$uid=$row['Uid'];
			$sql="delete from userresponse where Uid='$uid'";
		}
	}
	else{
		echo "<script>alert('Failed to query database.......');</script>";
	}
}
// close db connection
$conn->close();

header('refresh:1;url=../index.php');


 ?>