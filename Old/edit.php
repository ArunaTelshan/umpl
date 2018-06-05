<?php session_start(); ?>
<?php if(!$_SESSION['username']){
	header("Location: ../umpl/login.php");
}
?>
<?php
$connect = mysqli_connect("localhost", "root", "", "umpl");
$query = "SELECT * FROM employee ORDER BY id ASC";
$result = mysqli_query($connect, $query);
?>
<html>  
<head>  
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- CSS --> 
	<link rel="stylesheet" href="css/bootstrap.min.css" /> 
	<link rel="stylesheet" href="css/bootstrap-datepicker.standalone.css" />  
	<link rel="stylesheet" href="css/fontawesome-all.css" /> 
	
<!-- JS -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.tabledit.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
	   <script>  
$(document).ready(function(){  
    $('#editable_table').Tabledit({
	hideIdentifier: true,
	url:'inc/edit.php',
    columns:{
    identifier:[0, "id"],
    editable:[
		[1, 'etf_no'], 
		[2, 'name'], 
		[3, 'nic'], 
		[4, 'p_address'], 
		[5, 't_address'], 
		[6, 'birthday'], 
		[7, 'join_date'], 
		[8, 'left_date']
	]
      },
		             buttons: {
                edit: {
                    class: 'btn btn-sm btn-secondary',
                    html: '<span class="fas fa-edit"></span> Edit',
                    action: 'edit'
                },
                delete: {
                    class: 'btn btn-sm btn-danger',
                    html: '<span class="fas fa-trash-alt"></span>',
                    action: 'delete'
                },
                save: {
                    class: 'btn btn-sm btn-warning mt-1',
                    html: '<span class="fas fa-save"></span> Save'
                },
                restore: {
                    class: 'btn btn-sm btn-warning mt-1',
                    html: 'Restore',
                    action: 'restore'
                },
                confirm: {
                    class: 'btn btn-sm btn-warning mt-1',
                    html: '<span class="fas fa-exclamation-triangle"></span> Confirm'
                }
            },
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      },
	   onDraw: function() {
			// Select all inputs of second column and apply datepicker each of them
			$('table tr td:nth-child(n+7) input').each(function() {
			  $(this).datepicker({
				format: 'yyyy-mm-dd',
				todayHighlight: true
			  });
			});
  		}
     	});
 
});  
 </script> 
<title>Employee Database</title>
</head>
<body>

<?php 
	global $connect;
	if($connect) {
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

<div class="container-fluid">  
<br />  
<br />  
<br />  
           
           
   <div class="table-responsive-sm">  
    <h3 align="center">Edit &amp; Delete Employee Details</h3><br />  
    <table id="editable_table" class="table table-bordered table-hover">
     <thead class="thead-light">
      <tr>
       <th>ID</th>
       <th>ETF No.</th>
       <th>Name</th>
       <th>NIC</th>
       <th>P-Address</th>
       <th>T-Address</th>
       <th>Birthday</th>
       <th>Joined</th>
       <th>Left</th>
      </tr>
     </thead>
     <tbody>
     <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["id"].'</td>
       <td>'.$row["etf_no"].'</td>
       <td>'.$row["name"].'</td>
       <td>'.$row["nic"].'</td>
       <td>'.$row["p_address"].'</td>
       <td>'.$row["t_address"].'</td>
       <td>'.$row["birthday"].'</td>
       <td>'.$row["join_date"].'</td>
       <td>'.$row["left_date"].'</td>
      </tr>
      ';
     }
     ?>
     </tbody>
    </table>
   </div>
 
  </div>  
 </body>  
</html>  