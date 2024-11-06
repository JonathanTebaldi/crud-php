<?php
$servername = "localhost";
$user = "root";
$password = "";
$db_name = "academia_crud";  

$conn = mysqli_connect($servername, $user, $password, $db_name);

if(!$conn){
    die("Conexão falhou" . mysqli_connect_error());
}

//echo "Conectou!";

?>

