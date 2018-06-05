<?php

$data 			= array();
$connection = mysqli_connect('localhost', 'root', '', 'umpl'); 

// Cash Insert ===================================================================

if(isset($_POST['c_no'])){
	
		$c_date = $_POST['c_date'];
		$c_no = $_POST['c_no'];
		$c_name = $_POST['c_name'];
		$c_receive = $_POST['c_receive'];
		$c_issue = $_POST['c_issue'];

	$query = "INSERT INTO cash(c_no,c_name,c_date,c_receive,c_issue)";
	$query .= "VALUE ('$c_no','$c_name','$c_date','$c_receive','$c_issue')";

	$result = mysqli_query($connection, $query);

	if($result){
		$data['success'] = true;
		$data['message'] = 'Success!';
	} else {
		$data['success'] = false;
		$data['message'] = 'Error occoured!';
	}
	
	echo json_encode($data);	
}

// IOU Insert ===================================================================

if(isset($_POST['iou_no'])){
	
		$iou_date = $_POST['iou_date'];
		$iou_no = $_POST['iou_no'];
		$iou_amt = $_POST['iou_amt'];

	$query = "INSERT INTO iou(i_emp,i_date,i_amt)";
	$query .= "VALUE ('$iou_no','$iou_date','$iou_amt')";

	$result = mysqli_query($connection, $query);

	if($result){
		$data['success'] = true;
		$data['message'] = 'Success!';
	} else {

		$data['success'] = false;
		$data['message'] = 'Error occoured!';
	}
	
	echo json_encode($data);	
}

?>