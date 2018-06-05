<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<table style="width:50%">
  <tr>
    <th>Name</th>
    <th>Date</th> 
    <th>Amount</th>
  </tr>

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
 
</table>















	
</body>
</html>
