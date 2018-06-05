<?php
include_once("db.php");
if(isset($_POST['etf_no']) && $_POST['etf_no'] != '')
    {
		
		$response = array();
		$etf_no = mysqli_real_escape_string($connection,$_POST['etf_no']);
        $sql  = "select etf_no from employee where employee.etf_no='".$etf_no."'";
        $res    = mysqli_query($connection, $sql);
        $count  = mysqli_num_rows($res);
        if($count > 0)
		{
			$response['status'] = false;
			$response['msg'] = 'Already exists.';
		}
		else
		{
			$response['status'] = true;
			$response['msg'] = 'Available.';
		}
		 echo json_encode($response);
    }
?>