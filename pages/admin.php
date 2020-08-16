<?php 
session_start();

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <head>
 	<title>Admin Login</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
           <link href="../css/main.css" rel="stylesheet">

 </head>
 <body>
 	<div class="center" id="formDiv">
 		<form class="form-response border border-success rounded" action="process.php" method="post">
 			<div class="form-group form-img mb-4">
 				<img src="../img/placeholder.png" alt="Site logo" />
 			</div>

 			<div class="form-group">
 				<label>Username </label>
 				<input class="form-control" type="text" name="username"  id="username" placeholder="E.g: abc or abc@cc.com" required>
 			</div>
 			
 			<div class="form-group">
 				<label>Password </label>
 				<input class="form-control"  type="password" name="password" id="password" placeholder="Your Password here " required>
 			</div>

 			<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
 		</form>
 		
 	</div>
 
 </body>
 </html>