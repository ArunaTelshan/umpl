<?php session_start(); ?>
<?php if(!$_SESSION['username']){
	header("Location: ../umpl/login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/typeaheadjs.css" rel="stylesheet">

<!-- JS -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/typeahead.bundle.js"></script>

<script type="text/javascript">
	
$(document).ready(function(){
 $('#etf_no').keyup(function() {
 var usercheck = $(this).val();
     $('#usercheck').html('');
	 
 $.post("inc/check.php", {etf_no: usercheck} , function(data) {
	 if (data.status == true) {
		 $('#etf_no').removeClass('is-invalid').addClass('is-valid');
		 $('#usercheck').removeClass('invalid-feedback').addClass('valid-feedback');
		 $('#submit-btn').removeClass('disabled').prop("disabled", false);
	 } else {
		 $('#etf_no').removeClass('is-valid').addClass('is-invalid');
		 $('#usercheck').removeClass('valid-feedback').addClass('invalid-feedback');
		 $('#submit-btn').addClass('disabled').prop("disabled", true);
	 }
	 
 $('#usercheck').html(data.msg);  
	 
 },'json');
 });
});
	

	
</script>

<!-- PHP -->
<?php include "inc/db.php"; ?>
<?php include "inc/functions.php"; ?>

<title>Employee Database</title>
</head>
<body>

<?php 
	global $connection;
	if($connection) {
	echo '<div class="bg-success text-light pt-1 pb-1 text-center">successfuly connected to database</div>';		
	} else {
	echo '<div class="bg-danger text-light pt-1 pb-1 text-center">failed to connect to database</div>';	
	} 
    ?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark bg-faded">
	<div class="container">
		<a class="navbar-brand" href="#">UMPL (Pvt) Ltd</a>
		<button 
		type="button" 
		class="navbar-toggler" 
		data-toggle="collapse" 
		data-target=".navbar-collapse">		
		<span class="navbar-toggler-icon"></span>
		</button>		
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="nav navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link" href="index.php">Search</a></li>
				<li class="nav-item active"><a class="nav-link" href="add.php">Add</a></li>
				<li class="nav-item"><a class="nav-link" href="view.php">View</a></li>
				<li class="nav-item"><a class="nav-link" href="edit.php">Update</a></li>
			</ul>
		</div>
	</div>	
</nav>

<div class="container pt-5 px-4">
	<form action="add.php" method="post">
  	
   	<div class="form-group row">
	  <label for="etf_no" class="col-sm-2 col-form-label">ETF No.</label>
	  <div class="col-sm-6">
	  
		<input id="etf_no" type="number" class="form-control " placeholder="ETF Number" name="etf_no" required>
		<div id="usercheck" class=""></div>
		
	  </div>
	  
	</div>    

	<div class="form-group row">
	  <label for="name" class="col-sm-2 col-form-label">Name</label>
	  <div class="col-sm-10">
		<input type="text" class="form-control inputs" placeholder="Full name with initials..." name="name" required>
	  </div>
	</div>	

	<div class="form-group row">
	  <label for="p_address" class="col-sm-2 col-form-label">Address 1</label>
	  <div class="col-sm-10">
	<textarea class="form-control  inputs" rows="3" placeholder="Permanant Address" name="p_address" ></textarea>
	  </div>
	</div> 

	<div class="form-group row">
	  <label for="r_address" class="col-sm-2 col-form-label">Address 2</label>
	  <div class="col-sm-10">
	<textarea class="form-control inputs" rows="3" placeholder="Tempory Address" name="t_address"></textarea>
	  </div>
	</div> 

	<div class="form-group row">
	  <label for="nic" class="col-sm-2 col-form-label">NIC</label>
	  <div class="col-sm-10">
		<input type="number" class="form-control inputs" placeholder="National Identity Card Number without V"  name="nic" required>
	  </div>
	</div>

	<div class="form-group row">
	  <label for="amount" class="col-sm-2 col-form-label">Birthday</label>
	  <div class="col-sm-4">
		<input type="text" class="form-control inputs" placeholder="Birthday"  name="bday"
		onfocus="(this.type='date')" onblur="(this.type='text')">
	  </div>
	</div>	

	<div class="form-group row">
  
	  <label for="amount" class="col-sm-2 col-form-label">Joined Date</label>
	  <div class="col-sm-4">
		<input type="text" class="form-control inputs" placeholder="Joined Date"  name="joined"
		onfocus="(this.type='date')" onblur="(this.type='text')" required>
	  </div>
	  	  <label for="amount" class="col-sm-2 col-form-label">Left Date</label>
	  <div class="col-sm-4">
		<input type="text" class="form-control inputs" placeholder="Left Date"  name="left"
		onfocus="(this.type='date')" onblur="(this.type='text')">
	  </div>
	</div>	
	
	<div class="form-group row">
	  <div class="offset-sm-2 col-sm-10">
		<input type="submit" name="submit" value="Submit" class="btn btn-primary w-50" id="submit-btn">
		<input type="reset" value="Reset" class="btn btn-danger ">
	  </div>
	</div>
	
	</form>
	
	
	

	
	<?php
	
		
	if(isset($_POST['submit'])) {
		
	$etf_no = $_POST['etf_no'];
	$name = $_POST['name'];	
	$p_address = $_POST['p_address'];
	$t_address = $_POST['t_address'];	
	$nic = $_POST['nic'];		
	$bday = $_POST['bday'];		
	$joined = $_POST['joined'];	
	$left = $_POST['left'];	
		
	global $connection;
		
		$query = "INSERT INTO employee(etf_no,name,p_address,t_address,nic,birthday,join_date,left_date)";
		$query .= "VALUE ('$etf_no', '$name','$p_address', '$t_address', '$nic', '$bday', '$joined', '$left')";
		
		$result = mysqli_query($connection, $query); 
		if($result) {
			echo 'Success';
		} else {
			echo 'failed';
		}
	}
	
	
	?>

</div>


</body>
</html>