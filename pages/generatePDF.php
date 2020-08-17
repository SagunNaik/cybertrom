<?php 
require_once '../vendor/autoload.php';
include ("../dbConnect.php");
	$dir="../dummy_pic/";

	if(isset($_GET['file']))
	{
		$file=$_GET['file'];
		$pos=strpos($file,"@");
		$uid=substr($file,($pos+1));
		$uid=stripcslashes($uid);
		//echo "<script>alert('$file <br> $t ');</script>";
		$sql="select * from userresponse where Uid=$uid";
		$result=$conn->query($sql) or die("faild to query".mysql_error());
		$row=$result->fetch_array();
		//echo $row['name'];

		//Create new PDF variable
		$mpdf=new \Mpdf\Mpdf();

		//data format
		$data="";

		//add data 
		$data.='<!DOCTYPE html>
				<html >
				<head>
					<style>
					.container{
						border: 2px solid gray; padding-bottom:50px;
					}
					.h2d{margin-left: auto;margin-right: auto; text-align: center;}
					.image{display:block;border: 2px solid gray; float: right;margin-right: 25px;}
					.name{margin-top: 25px;}
					.ndiv{padding: 10px;margin-left:5px;}
					</style>
				</head>
			<body >
				<div class="container">
					<div class="h2d"><strong><h2>Response Details</h2></strong></div>
					<div>
						<img src="'.$dir.$row["photo"].'" width="100" height="100" class="image">
					</div>
					
					<div class="name ndiv">
						<strong>Name:</strong>     '.$row["name"].'

					</div>
					<div class="ndiv">
						<strong>Address:</strong>     '.$row["address"].'
					</div>

					<div class="ndiv">
						<strong>Contact No.:</strong>     '.$row["phone"].'
					</div>

					<div class="ndiv">
						<strong>Date of Birth:</strong>     '.$row["dob"].'
					</div>

					<div class="ndiv">
						<strong>Email:</strong>     '.$row["email"].'
					</div>

				</div>
				</body>
	</html>
	';

	//write pdf
	$mpdf->WriteHTML($data);

	//output PDF
	$filename=$row["name"].".pdf";
	$mpdf->output($filename,"D");
	//$mpdf->output($filename,"I");

	header("refresh:1;url=adminHome.php");

	echo "pdf created";

	}





 ?>