
<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'umpl');

$input = filter_input_array(INPUT_POST);
$etf_no = mysqli_real_escape_string($connect, $input["etf_no"]);
$name = mysqli_real_escape_string($connect, $input["name"]);
$p_address = mysqli_real_escape_string($connect, $input["p_address"]);
$t_address = mysqli_real_escape_string($connect, $input["t_address"]);
$nic = mysqli_real_escape_string($connect, $input["nic"]);
$birthday = mysqli_real_escape_string($connect, $input["birthday"]);
$join_date = mysqli_real_escape_string($connect, $input["join_date"]);
$left_date = mysqli_real_escape_string($connect, $input["left_date"]);


if($input["action"] === 'edit')
{
 $query = "UPDATE employee 
 SET etf_no='" . $input['etf_no'] . "', 
 name='" . $input['name'] . "', 
 p_address='" . $input['p_address'] . "', 
 t_address='" . $input['t_address'] . "', 
 nic='" . $input['nic'] . "', 
 birthday='" . $input['birthday'] . "', 
 join_date='" . $input['join_date'] . "', 
 left_date='" . $input['left_date'] . "'
 WHERE id='" . $input['id'] . "'";

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