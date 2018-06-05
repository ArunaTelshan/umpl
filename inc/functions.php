<?php 
include "db.php"; 

function search_func() {
	global $connection;
	
if(isset($_POST['submit'])) {

	$search = $_POST['search'];
	$check_id_or_name = "
	SELECT * FROM employee 
	WHERE (name = '$search') OR (etf_no = '$search')";

	$result=mysqli_query($connection,$check_id_or_name);
	$rowcount=mysqli_num_rows($result);

	if($rowcount != 0) {
			while($rows=mysqli_fetch_array($result)) {     
				
			$etf_no = $rows['etf_no'];
			$name = $rows['name'];
			$p_address = $rows['p_address'];
			$t_address = $rows['t_address'];
			$nic =$rows['nic'];
			$bday = $rows['birthday'];
			$joined = $rows['join_date'];
			$left = $rows['left_date'];
			

			echo "<table class='table'>
			<tbody>
			<tr><th>ETF No :</th><td>$etf_no</td></tr>
			<tr><th>Full Name :</th><td>$name</td></tr>
			<tr><th>Permant Address :</th><td>$p_address</td></tr>
			<tr><th>Tempory Address :</th><td>$t_address</td></tr><tr>
			<th>NIC :</th><td>$nic</td></tr>
			<tr><th>Birthday :</th><td>$bday</td></tr>
			<th>Joined Date :</th><td>$joined</td></tr>
			<tr><th>Left Date :</th><td>$left</td></tr>
			</tbody>
			</table>";	
			}
	}  else {
	echo '
	<div class="container">
	<div class="alert alert-danger alert-dismissible fade show col-md-10 text-center" role="alert">
  	<strong>Sorry!</strong> No matches found. Try again.
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  	</button></div></div>';
			}
}
}










































?>