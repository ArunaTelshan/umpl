<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'umpl');

$input = filter_input_array(INPUT_POST);

$etf_no = mysqli_real_escape_string($connect, $input["etf_no"]);
$name = mysqli_real_escape_string($connect, $input["name"]);
$nic = mysqli_real_escape_string($connect, $input["nic"]);
$p_address = mysqli_real_escape_string($connect, $input["p_address"]);
$t_address = mysqli_real_escape_string($connect, $input["t_address"]);
$birthday = mysqli_real_escape_string($connect, $input["birthday"]);
$join_date = mysqli_real_escape_string($connect, $input["join_date"]);
$left_date = mysqli_real_escape_string($connect, $input["left_date"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE employee 
 SET etf_no = '".$etf_no."', 
 name = '".$name."', 
 nic = '".$nic."' , 
 p_address = '".$p_address."',  
 t_address = '".$t_address."', 
 birthday = '".$birthday."',  
 join_date = '".$join_date."', 
 left_date = '".$left_date."'
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM employee 
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>