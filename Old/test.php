<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>

<!-- PHP -->
<?php include "inc/db.php"; 
global $connection ?>

<title>Petty Cash</title>
</head>
<body>

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
<!--				<li class="nav-item active"><a class="nav-link" href="index.php">Search</a></li>-->
			</ul>
		</div>
	</div>	
</nav>
<?php
$today = "SELECT SUM(c_receive) AS receive,SUM(c_issue) AS issue FROM `cash` WHERE c_date = CURRENT_DATE";
$today_query = mysqli_query($connection, $today);
	while($result  = mysqli_fetch_assoc($today_query)){
		$tot_r_t_o = $result["receive"];
		$tot_i_t_o = $result["issue"];
	}

$t_balance = $tot_r_t_o - $tot_i_t_o;
$tot_r_t = number_format($tot_r_t_o,0,".",",");	
$tot_i_t = number_format($tot_i_t_o,0,".",",");	


?>






<div class="container-fluid py-4">
<div class="card-deck">
    <div class="card col-md-6 border-secondary">
    <div class="card-body">
      <h5 class="card-title text-center">Today Summary</h5>
      <hr>
      <p class="card-text">Total Received:<span class="float-right">Rs. <?php echo $tot_r_t; ?>/-</span></p>
	  <hr>
      <p class="card-text">Total Issued:<span class="float-right">Rs.  <?php echo $tot_i_t; ?>/-</span></p>
 <div class="progress mb-3" style="height: 2px;">
  <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
      <p class="card-text">Current Balance:<span class="float-right">Rs. 15,000/-</span></p>
		<div class="progress mb-3" style="height: 2px;">
		  <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
      <span class="float-right">
      <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-plus-circle"></i> Add New</button>
      <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModalCenter1"><i class="fas fa-exchange-alt"></i> <b>IOU</b></button>
      
      </span></p>
    </div>
  </div>
  <div class="card col-md-6 border-secondary">
    <div class="card-body">
      
 <form class="form-inline justify-content-center">
<div class="row">
 <div class="col-">
	<select class="form-control form-control-sm">
	  <option selected>May</option>
	  <option>June</option>
	  <option>Auguest</option>
	  
	</select>
	 </div>
	  <div class="col">
  <label class="card-title">Summary</label>
	 </div>
	 </div>
</form>
     
     
      <hr>
      <p class="card-text">Received:<span class="float-right">Rs. 23,000/-</span></p>
	  <hr>
      <p class="card-text">Issued:<span class="float-right">Rs. 8,000/-</span></p>
      <hr>
      <p class="card-text">Closing Balance:<span class="float-right">Rs. 15,000/-</span></p>
      <hr>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div> 
<hr>
<div class="container">
<table id="example" class="table table-sm table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Name</th>
                <th>Received</th>
                <th>Issued</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2</td>
                <td>2018/04/18</td>
                <td>System Architect</td>
                <td>546</td>
                <td>4564</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2018/04/18</td>
                <td>System Architect</td>
                <td>546</td>
                <td>4564</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2018/04/18</td>
                <td>System Architect</td>
                <td>546</td>
                <td>4564</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2018/04/18</td>
                <td>System Architect</td>
                <td>546</td>
                <td>4564</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2018/04/18</td>
                <td>System Architect</td>
                <td>546</td>
                <td>4564</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2018/04/18</td>
                <td>System Architect</td>
                <td>546</td>
                <td>4564</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2018/04/18</td>
                <td>System Architect</td>
                <td>546</td>
                <td>4564</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2018/04/18</td>
                <td>System Architect</td>
                <td>546</td>
                <td>4564</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2018/04/18</td>
                <td>System Architect</td>
                <td>546</td>
                <td>4564</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2018/04/18</td>
                <td>System Architect</td>
                <td>546</td>
                <td>4564</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2018/04/18</td>
                <td>System Architect</td>
                <td>546</td>
                <td>4564</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2018/04/18</td>
                <td>System Architect</td>
                <td>546</td>
                <td>4564</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2018/04/18</td>
                <td>System Architect</td>
                <td>546</td>
                <td>4564</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2018/04/18</td>
                <td>System Architect</td>
                <td>546</td>
                <td>4564</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2018/04/18</td>
                <td>System Architect</td>
                <td>546</td>
                <td>4564</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2018/04/18</td>
                <td>System Architect</td>
                <td>546</td>
                <td>4564</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2018/04/18</td>
                <td>System Architect</td>
                <td>546</td>
                <td>4564</td>
            </tr>
            
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Name</th>
                <th>Received</th>
                <th>Issued</th>
            </tr>
        </tfoot>
    </table>
</div>
    
    
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
  
</div>









<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Daily Record Entry</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container">
       <form action="cash.php" method="POST">
      <div class="modal-body pt-4 py-4">
      

		<div class="form-group row">
			<label for="c_date" class="col-sm-2 col-form-label">Date</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" placeholder="Date" name="c_date" id="pickyDate" required>
			</div>
			<div class="col-sm-4">
				<input type="number" class="form-control" placeholder="Number.." name="c_no" required>
			</div>
		</div>
		 <script type="text/javascript">
			var date = new Date();

			var day = date.getDate();
			var month = date.getMonth() + 1;
			var year = date.getFullYear();

			if (month < 10) month = "0" + month;
			if (day < 10) day = "0" + day;
			var today = year + "-" + month + "-" + day;
			document.getElementById('pickyDate').value = today;
		 </script>
		 <script type="text/javascript">
			$(document).ready(function () {
				$('#pickyDate').datepicker({
					autoclose: true,
					weekStart: 1,
					daysOfWeekHighlighted: "0,6",
					todayHighlight: true,
					format: "yyyy-mm-dd"
				});
			});
		</script>

		<div class="form-group row">
			<label for="c_name" class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" placeholder="Name"  name="c_name" required>
			</div>
		</div>

		<div class="form-group row">
			<legend class="col-form-label col-sm-2 pt-0">Type</legend>
			<div class="col-sm-10">
			 <div class="custom-control custom-radio custom-control-inline">
			  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" value="receive">
			  <label class="custom-control-label" for="customRadioInline1">Receive</label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
			  <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input" value="issue">
			  <label class="custom-control-label" for="customRadioInline2">Issue</label>
			</div>
			</div>
		</div> 

		<div class="form-group row">
			<label for="amount" class="col-sm-2 col-form-label">Amount</label>
			<div class="col-sm-10">
				<input type="number" class="form-control" placeholder="Amount"  name="c_amount" required>
			</div>
		</div>

      </div>
      <div class="modal-footer">
        <input type="reset" value="Close" class="btn btn-danger" data-dismiss="modal">
        <input type="submit" name="cash_submit" value="Save" class="btn btn-primary">
      </div>
      </form>
      </div>
    </div>
  </div>
</div>

<?php
global $connection;
if(isset($_POST['cash_submit'])){

$no = $_POST['c_no'];
$name = $_POST['c_name'];
$date = $_POST['c_date'];
	
	if ($_POST['customRadioInline1'] == 'receive') {
		$receive = $_POST['c_amount'];
		$issue = 0;
	}
	
	if ($_POST['customRadioInline1'] == 'issue') {
		$receive = 0;
		$issue = $_POST['c_amount'];
	}

	$query = "INSERT INTO cash(c_no,c_name,c_date,c_receive,c_issue)";
	$query .= "VALUE ('$no','$name','$date','$receive','$issue')";
	$result = mysqli_query($connection, $query);
		
	if(!$result){
	echo $no . '<br>';
	echo $name . '<br>';
	echo $date . '<br>';
	echo $receive . '<br>';
	echo $issue . '<br>';
	}	
}
	

?>







</body>
</html>