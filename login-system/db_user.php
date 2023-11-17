<?php

$sname="localhost";
$uame="root";
$password="";

$db_name="teste_db";

$conn = mysqli_connect($sname, $uame, $password, $db_name);

if(!$conn){
    echo "CONEXÃO FALHOU, TENTE NOVAMENTE EM INSTANTES.";
}

?>