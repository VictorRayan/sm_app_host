<?php
require_once 'server_login.php';

$con = new mysqli($server, $user, $pwd, $database);

if($con->connect_error){
    echo 'Erro ao tentar comunicar-se com nossos servidores, tente novamente mais tarde :(';   

}
else{

    echo 'Conectado a tabela: tb_users';

}

?>
