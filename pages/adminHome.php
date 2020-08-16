<?php
session_start();
include ("../dbConnect.php");
	$dir="../dummy_pic/";

	if(isset($_GET['page']))
	{
		$page=$_GET['page'];
	}
	else{
		$page=1;
	}

	$records_per_page=5;
	$start_from=($page-1)*$records_per_page;
	//echo "<script>alert('$page_no');</script>";
	$sql="select * from userresponse limit $start_from,$records_per_page";
	$result=$conn->query($sql) or die("faild to query".mysql_error());
 ?>
 <!DOCTYPE html>
 <html lang="en">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <head>
 	<title>Home</title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
     <link href="../css/main.css" rel="stylesheet">
 </head>
 	
 <body>
 	<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top ">
 		<div class="container">
	 		<a class="navbar-brand " ><img class="img-fluid rounded-circle" src="../img/placeholder.png" width="40" height="40" /></a>
			<span class="navbar-text" id="dis">System User Console </span>
			<span >
				<?php
					echo "<div class='grtng'>  Welcome   ".$_SESSION['name'];
				  ?>
 			</span>
			<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="collapse_target"> 
				<span class="navbar-text user-name" id="user-name"></span>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item ">
					<a class="nav-link btn btn-primary btn-sm" href="logout.php" role="button" id="logoutBtn">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="table-responsive" id="ResultQueryTable">
			<table class="table">
				<tr class="table-row">
					<th>Photo</th>
					<th colspan="2">Name</th>
					<th>Download</th>
				</tr>
				
				<?php 
						while($row=$result->fetch_assoc())
						{
							$rand=rand(0,9999);
							$str=$rand."%".rand(0,9588)."@".$row['Uid'];
							//echo "<script>alert('$str');</script>";
							$param=$dir.$row['photo'];
							echo '<tr class="dyanmic">';
							echo '<th><img class="img-th rounded-circle" src="'.$param.'" width="60" height="60" /></th>';
							echo '<th colspan="2">'.$row["name"].'</th>';
							echo '<th><a href="generatePDF.php?file='.$str.'" target="_blank">Click Here</a></th>';
							echo '</tr>';

						}
				?>			
	
			</table>
			<?php  
			$result=$conn->query("select * from userresponse") or die("Failed to query ".mysql_error());
			$count=mysqli_num_rows($result);

			mysqli_free_result($result);
			$page_no=ceil($count/$records_per_page);

			if($page>1)
			{
				echo '<a class=" btn btn-warning btn-sm btn-space-page " role="button" href="adminHome.php?page='.($page-1).'">Prev</a>';
			}

			for($i=1;$i<$page_no;$i++){
				echo '<a class=" btn btn-primary btn-sm btn-space-page " role="button" href="adminHome.php?page='.$i.'">'.$i.'</a>';
			}

			if($page!=$page_no)
			{
				echo '<a class="btn btn-success btn-sm btn-space-page " role="button" href="adminHome.php?page='.($page+1).'">Next</a>';
			}

		?>
		</div>
	</div>
 </body>
</html>