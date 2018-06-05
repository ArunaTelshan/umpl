<?php
include_once("db.php");

if(isset($_POST['month'])) {
$total = array();
	
// Today IOU total ========================================
	
	$iou_today = "
			SELECT
				SUM(i_amt) AS amount
			FROM
				`iou`
			WHERE
				i_date = CURRENT_DATE";    
	$iou_query 	= mysqli_query($connection, $iou_today);
	$iou_count	= mysqli_num_rows($iou_query);
	if($iou_count > 0){
		while($result  = mysqli_fetch_assoc($iou_query)){
			$today_iou	= $result["amount"];
		}
	} else {
		$today_iou	= 0;
	}

$total['today_iou'] = $today_iou;

// Today total summary ========================================

	$today = "
			SELECT
				SUM(c_receive) AS receive,
				SUM(c_issue) AS issue
			FROM
				`cash`
			WHERE
				c_date = CURRENT_DATE";    
	$today_query = mysqli_query($connection, $today);
	$count  = mysqli_num_rows($today_query);
	if($count > 0){
		while($result  = mysqli_fetch_assoc($today_query)){
			$total['receive']	= number_format($result["receive"],0,".",",");

			$total_issue		= $result["issue"] + $total['today_iou'];
			$total['issue']		= number_format($total_issue,0,".",",");

		}
	} else {
		$total['receive']	= 0;
		$total['issue']	 	= 0;
	}

// All time iou summary ================================================================

	$iou_all = "
			SELECT
				SUM(i_amt) AS amount
			FROM
				`iou`";    
	$iou_all_query 	= mysqli_query($connection, $iou_all);
	$iou_all_count	= mysqli_num_rows($iou_all_query);
	if($iou_all_count > 0){
		while($iou_result  = mysqli_fetch_assoc($iou_all_query)){
			$all_iou	= $iou_result["amount"];
		}
	} else {
		$all_iou	= 0;
	}

	$total['all_iou'] = $all_iou;

// All time cash summary ===============================================================

	$all_total = "
	SELECT
		SUM(c_receive) AS all_receive,
		SUM(c_issue) AS all_issue
	FROM
		cash"; 

	$all_query = mysqli_query($connection,$all_total);
	$all_count  = mysqli_num_rows($all_query);

	if($all_count > 0)
	{
		while($all_result  = mysqli_fetch_assoc($all_query)){
			
			$total['all_receive'] = number_format($all_result["all_receive"],0,".",",");
			
			$all_issue			= $all_result["all_issue"] + $total['all_iou'];
			$total['all_issue']	= number_format($all_issue,0,".",",");
			
			$t_balance			= $all_result["all_receive"] - $all_issue;
			$total['balance'] = number_format($t_balance,0,".",",");
		}
	}
	else
	{
		$total['all_receive'] 	= 0;
		$total['all_issue'] 	= 0;
		$total['balance'] 		= 0;
	}


if($_POST['month'] == 0) {

// All summary ===========================================
		
		$total['t_receive'] = $total['all_receive'];
		$total['t_issue'] 	= $total['all_issue'];
		$total['t_balance'] = $total['balance'];

} else {
		
// Monthly cash summary ========================================

	$year = date("Y");
	$month = $_POST['month'];
//	$month = 6;

	$m_total = "
			SELECT
				YEAR(c_date) AS Y,
				MONTH(c_date) AS M,
				SUM(c_receive) AS receive,
				SUM(c_issue) AS issue
			FROM
				cash
			WHERE
				YEAR(c_date) = '$year' AND MONTH(c_date) = '$month'
			GROUP BY
				YEAR(c_date),
				MONTH(c_date)"; 
	
	$iou_total = "
			SELECT
				YEAR(i_date) AS Y,
				MONTH(i_date) AS M,
				SUM(i_amt)
			FROM
				iou
			WHERE
				YEAR(i_date) = '$year' AND MONTH(i_date) = '$month'
			GROUP BY
				YEAR(i_date),
				MONTH(i_date)"; 
	
	$i_query = mysqli_query($connection,$iou_total);
	$i_count  = mysqli_num_rows($i_query);
	if($i_count > 0) {
		while($i_result  = mysqli_fetch_assoc($i_query)){
			$total['i_receive'] = $i_result["SUM(i_amt)"];
		}
	} else {
		$total['i_receive'] = 0;
	}

	$m_query = mysqli_query($connection,$m_total);
	$m_count  = mysqli_num_rows($m_query);
	if($m_count > 0)
	{
		while($m_result  = mysqli_fetch_assoc($m_query)){
			
			$total['t_receive'] = number_format($m_result["receive"],0,".",",");
			$total_m_issue		= $m_result["issue"] + $total['i_receive'];
			$total['t_issue'] 	= number_format($total_m_issue,0,".",",");
			$t_balance			= $m_result["receive"] - $m_result["issue"];
			$total['t_balance'] = number_format($t_balance,0,".",",");
		}
	}
	else
	{
		$total['t_receive'] = 0;
		$total['t_issue'] = 0;
		$total['t_balance'] = 0;
	}
}
	
echo json_encode($total);
	
}

?>