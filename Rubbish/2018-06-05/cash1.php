<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.standalone.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/custom.css">

<!-- JS -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

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

<div class="container-fluid py-4">

<div class="card-deck">
    <div class="card col-md-6 border-secondary">
    <div class="card-body">
      <h5 class="card-title text-center">Today Summary</h5>
      <hr>
      <p class="card-text">Total Received:
      <span id="received" class="float-right"></span></p>
	  <hr>
      <p class="card-text">Total Issued:
      <span id="issued" class="float-right"></span></p>
	 <div class="progress mb-3" style="height: 2px;">
	  <div class="progress-bar bg-danger" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
      <p class="card-text">Cash on hand:
      <span  id="balance" class="float-right"></span></p>
		<div class="progress mb-3" style="height: 2px;">
		  <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
      <p class="card-text"><small class="text-muted">Total Transactions: </small> <span class="badge badge-dark">9</span>
		  <span class="float-right">
			  <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#cash_modal"><i class="fas fa-plus-circle"></i> Add New</button>
			  <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#iou_modal"><i class="fas fa-exchange-alt"></i> <b>IOU</b></button>

		  </span>
      </p>
    </div>
  </div>
  <div class="card col-md-6 border-secondary">
    <div class="card-body">
	 <form class="form-inline justify-content-center">
		<div class="row">
	 	<div class="col">
			<select class="form-control form-control-sm" id="monthx">
			  <option value="0" selected>All time</option>
			   <?php 
				  $connection = mysqli_connect('localhost', 'root', '', 'umpl'); 
				  $m_list	= "
						SELECT
							MONTH(c_date) AS month,
							MONTHNAME(c_date) AS name
						FROM
							cash
						GROUP BY MONTH(c_date)";
				  $res	= mysqli_query($connection,$m_list);

					if($res) {
						while($r = mysqli_fetch_assoc($res)) {
							echo '<option value="'.$r['month'].'">'. $r['name']. '</option>';
						}
					} 
				?>
			</select>
		 </div>
		  <div class="col">
			<label class="card-title">Summary</label>
		 </div>
		 </div>
	</form>
      <hr>
      <p class="card-text">Received:
      	<span id="t_received" class="float-right"></span></p>
	  <hr>
      <p class="card-text">Issued:
      	<span id="t_issued" class="float-right"></span></p>
      <hr>
      <p class="card-text">Closing Balance:
      	<span id="t_balance" class="float-right"></span></p>
      <hr>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div> 

<div class="modal fade" id="cash_modal" tabindex="-1" role="dialog" aria-labelledby="cash_modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Petty cash entry</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="c_form" action="cash1.php" method="POST" autocomplete="off">
      <div class="modal-body">      
<!----------------------------------- CASH FORM ----------------------------------->
		<div class="form-group row">
			<label for="c_date" class="col-sm-2 col-form-label">Date</label>
			<div class="col-sm-6 pb-2">
				<input type="text" class="form-control pickyDate" placeholder="Date" name="c_date" id="pickyDate" required>
			</div>
			<div class="col-sm-4">
				<input type="number" id="c_no" class="form-control" placeholder="Number.." name="c_no" required> 
				<div id="error-msg"></div>
			</div>
		</div>
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" id="c_submit" value="Save changes" class="btn btn-primary">
      </div>
      </form>      
    </div>
  </div>
</div>

<div class="modal fade" id="iou_modal" tabindex="-1" role="dialog" aria-labelledby="iou_modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">IOU Entry</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="i_form" action="cash1.php" method="POST" autocomplete="off">
      <div class="modal-body">
<!----------------------------------- IOU FORM ----------------------------------->
      <div class="form-group row">
		<label for="emp_name" class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-6">
		  <select id="emp_name"  class="form-control mt-2">
			<option selected hidden>Choose employee...</option>       
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
		<div class="col-sm-4 mt-2">
		  <input type="text" id="iou_no" name="iou_no" class="form-control" placeholder="ETF No..." required>
		</div>
	  </div>
	  <div class="form-group row">
		<label for="iou_date" class="col-sm-2 col-form-label">Date</label>
		<div class="col-sm-6">
		  <input type="text" class="form-control pickyDate mt-2" id="iou_date" name="iou_date" placeholder="Date..." required>
		</div>
		<div class="col-sm-4 mt-2">
		  <input type="text" class="form-control" id="iou_amt" name="iou_amt" placeholder="Amount" required>
		</div>
	  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" id="iou_submit" value="Save changes" class="btn btn-primary">
      </div>
      </form>
    </div>
  </div>
</div>

<hr />

<div class="row">
	<div class="col-md-8 col-sm-12">
		<table class="table">
		  <thead>
			<tr>
			  <th scope="col" width="10%">Num</th>
			  <th scope="col">Name</th>
			  <th scope="col">Date</th>
			  <th scope="col">Receive</th>
			  <th scope="col">Issue</th>
			</tr>
		  </thead>
		  <tbody>
		<?php
		include_once("inc/db.php");

		$total = array();

		// Cash Table ========================================

			$tb_cash = "SELECT
				`c_no`,
				`c_name`,
				`c_date`,
				`c_receive`,
				`c_issue`
			FROM
				`cash`
			ORDER BY
				`c_date`
			DESC
				";    
			$tb_cash_query 	= mysqli_query($connection, $tb_cash);
			$tb_cash_count	= mysqli_num_rows($tb_cash_query);
			if($tb_cash_count > 0){
				while($result  = mysqli_fetch_assoc($tb_cash_query)){

					echo '<td>'.$result["c_id"].'</td>';
					echo '<td>'.$result["c_no"].'</td></tr>';
				}
			} 

		?>
			
			
			
			
		  </tbody>
		</table>
	</div>
	<div class="border-left col-md-4 col-sm-12">
			
		<table class="table">
		  <thead>
			<tr>
			  <th scope="col">Name</th>
			  <th scope="col">Date</th>
			  <th scope="col">Amount</th>
			</tr>
		  </thead>
		  <tbody>
		 <?php
		include_once("inc/db.php");

		$total = array();

		// IOU Table ========================================

			$tb_iou = "SELECT `i_emp`,`i_date`,`i_amt` FROM `iou`";    
			$tb_iou_query 	= mysqli_query($connection, $tb_iou);
			$tb_iou_count	= mysqli_num_rows($tb_iou_query);
			if($tb_iou_count > 0){
				while($result  = mysqli_fetch_assoc($tb_iou_query)){

					$emp_sql = "SELECT substring_index(emp_name, ' ', -1) as lastname FROM emp WHERE etf_no='".$result["i_emp"]."'";
					$emp_qry = mysqli_query($connection, $emp_sql);
					while($res = mysqli_fetch_assoc($emp_qry)){
						echo '<tr><td>'.$res["lastname"].'</td>';
					};

					//echo '<tr><td>'.$result["i_emp"].'</td>';
					echo '<td>'.$result["i_date"].'</td>';
					echo '<td>'.$result["i_amt"].'</td></tr>';
				}
			} 

		?>
		  </tbody>
		</table>
	</div>
</div>



     
      
</div>
 

</body>
</html>