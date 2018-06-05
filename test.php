<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/bootstrap-datepicker.standalone.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/custom.css">

<!-- JS -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<!--<script type="text/javascript" src="js/custom.js"></script>-->
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>

</head>
<body>
<div class="container">
<div class="row mt-4">

	<form method="post" id="user_form" enctype="multipart/form-data">

	<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-6">
      <select id="emp_name" class="form-control">
              <option selected hidden>Choose...</option>
       <?php 
		  $connection = mysqli_connect('localhost', 'root', '', 'umpl'); 
		  $sql	= "SELECT emp_name FROM emp ORDER BY emp_name ASC";
		  $res	= mysqli_query($connection, $sql);
	
		 	if($res) {
				while($r = mysqli_fetch_assoc($res)) {
					echo '<option>'. $r['emp_name']. '</option>';
				}
			} else {
				echo '<option>No result...</option>';
			} 
		?>
      </select>
    </div>
    <div class="col-sm-4">
      <input type="text" id="iou_no" name="iou_no" class="form-control" placeholder="ETF No...">
    </div>
	</div>


		<input type="submit" id="iou_submit" value="Save" class="btn btn-primary">


	</form>

<script type="text/javascript" language="javascript" >
$(document).ready(function () {
	
	 $("#emp_name").on('change', function() {
		 var emp_name = $(this).val();
		
		 $.post("inc/no_check.php", {iou_name: emp_name} , function(data) {
			 
			 if (data.status == true) {
				$('input[name=iou_no]').val(data.etf_no); 
			 } else {
				$('input[name=iou_no]').val('Error'); 
			 }
		 },'json');
 
	});
	
});
</script>		
		
		
	</div>
</div>
























	
</body>
</html>