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
printf("\n"."Row number: ".$query->num_rows);

if($query){

	echo "\n".'Login efetuado com sucesso'."\n";

	while($rows = $query->fetch_assoc()){
	
		echo 'id_ -->'.$rows["id"]. ", username --> ".$rows['username']."\n";
	}
	
}
else{

	echo "\n".'Credenciais erradas ou falha de comunicação com o servidor'."\n";
}

?>
