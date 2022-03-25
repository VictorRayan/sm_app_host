<?php

require_once 'connect.php';

/*$username = $_POST['username'];
$pwd = $_POST['pwd'];
*/



mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


$username = "'victorrayan'";
$pwd = "'123'";

$command = "select * from tb_users where username=".$username. "and pwd=".$pwd;
$query = $con->query($command);
$return_data = array("status"=>"not");




if($query){

	$return_data = array("status"=>"ok");

	while($rows = $query->fetch_assoc()){
	
		$return_data = array("id_"=>$rows["id_"], "username"=>$rows['username']);
	}
	if($query->num_rows > 1){

		$return_data = array("status"=>"fatal", "id_" => "", "username"=>"");

	}
	
}
else{

	$return_data = array("status"=>"fail");
}

echo json_encode($return_data);


?>
