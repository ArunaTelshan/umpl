<?php
include_once("db.php");

// Cash number check ==========================================================

if(isset($_POST['c_no']) && $_POST['c_no'] != '')
    {
		$response = array();
		$c_no = mysqli_real_escape_string($connection,$_POST['c_no']);
        $sql  = "SELECT c_no FROM cash WHERE c_no='".$c_no."'";
        $res    = mysqli_query($connection, $sql);
        $count  = mysqli_num_rows($res);
        if($count > 0)
		{
			$response['status'] = false;
			$response['msg'] = 'Already added.';
		}
		else
		{
			$response['status'] = true;
			$response['msg'] = 'Available.';
		}
		 echo json_encode($response);
    }

// Fetch ETF no by IOU Name ===================================================

if(isset($_POST['iou_name'])) {
	$resp = array();
//	$iou_name = 'BDK KUMARA';
	$iou_name = $_POST['iou_name'];
	$sql  = "SELECT etf_no FROM emp WHERE emp_name='".$iou_name."'";
	$result    = mysqli_query($connection, $sql);

	if($result) {
		while($r = mysqli_fetch_assoc($result)) {
			$resp['status'] = true;
			$resp['etf_no'] = $r['etf_no'];
		}
	} else {
		$resp['status'] = false;
		$resp['etf_no'] = 'Error';
	}
	 echo json_encode($resp);
}



















?>