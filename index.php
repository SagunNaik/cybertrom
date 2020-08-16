<!DOCTYPE html> 
<html lang="en">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<head> 
		<title> 
			Submit your Response 
		</title> 
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <link href="css/main.css" rel="stylesheet">
	</head> 
	
	<body> 
		<div class="btnDiv">
			<a class="btn " href="pages/admin.php" role="button" id="adminpage" title="Admin login">Admin</a>
		</div>
		<div class="center">
			
				<form class="form-response border border-success rounded"  action="pages/upload.php" method="post" enctype="multipart/form-data">
					<div id="lable_div">
					<label><h3>Fill up your personal details</h3></label>
					</div>
					
					<div class="form-group">
						<label>Name </label>
						<input  class="form-control" type="text" name="name" id="name" placeholder="Name here" required>
					</div>

					<div class="form-group">
						<label>Address </label>
						<textarea  class="form-control" type="text" name="address" id="address" placeholder="Address here" required></textarea>
					</div>

					<div class="form-group">
						<label>Mobile No. </label>
						<input  class="form-control" type="tel" name="phone" id="phone" pattern="[0-9]{10}" placeholder="Mobile No. here" required>
					</div>

					<div class="form-group">
						<label>Email </label>
						<input class="form-control" type="email" name="email" id="email" placeholder="Email Address here" required>
					</div>

					<div class="form-group">
						<label>DOB </label>
						<input class="form-control" type="date" name="dob" id="dob" placeholder="Date of Birth" required>
					</div>

					<div class="form-group">
						<label>Select Photo</label>
						<input type="file" name="photo" id="photo" accept="image/*" title="Select image" required>
					</div>
					
					
						<button type="submit" id="submit" name="submit" class="btn btn-primary btn-space ">Submit</button>
						<button type="reset" id="reset" name="reset" class="btn btn-default btn-space">Reset</button>
					
				</form>
			
		</div>
	</body> 

</html> 
