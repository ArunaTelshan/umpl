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
				<li class="nav-item active"><a class="nav-link" href="index.php">Search</a></li>
				<li class="nav-item"><a class="nav-link" href="add.php">Add</a></li>
				<li class="nav-item"><a class="nav-link" href="view.php">View</a></li>
				<li class="nav-item"><a class="nav-link" href="edit.php">Update</a></li>
				<li class="nav-item"><a class="nav-link" href="edit.php">Update</a></li>
				
			</ul>
		</div>
	</div>	
</nav>

<div class="container pt-5">
	<form action="index.php" method="post">
	<div class="row mb-4">	  
		  <div id="bloodhound" class="col-sm-8 col-xs-8 col-md-8 col-lg-8 ">
			  <input 
			  type="text" 
			  class="form-control typeahead mb-2" 
			  placeholder="Search Employee by Name or ETF No" 
			  autocomplete="off"
			  name="search">
			  </div>   
		 
	 <div class="col-sm-4 col-xs-4 col-md-4 col-lg-4">
	<div class="text-center">

	<div class="btn-group d-flex" role="group">
	<input class="btn btn-secondary w-100" type="submit" name="submit" value="Search">
	<input type="submit" value="Reset" class="btn btn-danger">
	</div>
		
	</div>
	</div>	  
		  
	</div>
	</form>

<?php search_func(); ?>

</div>

<script>
<?php include "names.php"; ?>
var states = <?php echo json_encode($data); ?>;	

var states = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.whitespace,
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  // `states` is an array of state names defined in "The Basics"
  local: states
});

$('#bloodhound .typeahead').typeahead({
  hint: true,
  highlight: false,
  minLength: 1
},
{
  name: 'states',
  source: states
});
</script>

<script>
    $('.input').keypress(function(e) {
        if(e.which == 13) {
            jQuery(this).blur();
            jQuery('#submit').focus().click();
        }
    });
</script>

</body>
</html>