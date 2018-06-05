<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "umpl");
$query = "SELECT name FROM employee";
$result = mysqli_query($connect, $query);
$data = array();
while($row = mysqli_fetch_assoc($result)) {
	  $data[] = $row["name"];
 	}
json_encode($data);

?>