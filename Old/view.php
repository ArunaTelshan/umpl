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
				<li class="nav-item"><a class="nav-link" href="index.php">Search</a></li>
				<li class="nav-item"><a class="nav-link" href="add.php">Add</a></li>
				<li class="nav-item active"><a class="nav-link" href="view.php">View</a></li>
				<li class="nav-item"><a class="nav-link" href="edit.php">Update</a></li>
			</ul>
		</div>
	</div>	
</nav>

<div class="container my-5 pt-3">

<?php
	
global $connection;
$result = mysqli_query($connection,"SELECT * FROM `employee` ORDER BY etf_no");

	
echo "
	<table class='table table-hover table-bordered'>
  	<thead class='thead-light'>
    <tr>
      <th scope='col'>ETF No.</th>
      <th scope='col'>Full Name</th>
      <th scope='col'>NIC</th>
      <th scope='col'>Birthday</th>
      <th scope='col'>Joined Date</th>
    </tr>
  	</thead>
  	<tbody>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<th scope='row'>" . $row['etf_no'] . "</th>";
echo "<td class='w-25'>" . $row['name'] . "</td>";
echo "<td>" . $row['nic'] . " V</td>";
echo "<td>" . $row['birthday'] . "</td>";
echo "<td>" . $row['join_date'] . "</td>";
echo "</tr>";
}
echo "  </tbody></table>";		
?>





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

</body>
</html>