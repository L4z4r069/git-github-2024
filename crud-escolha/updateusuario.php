<?php

// Conectar ao BD
include("conecta.php");

//Receber os dados do formulário
$id = $_POST["id"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "UPDATE usuario SET email = '$email', senha = '$senha' WHERE id_usuario = $id";

//executar o comando no BD
mysqli_query($connect,$sql);    

if($connect->error){
    die("erro".$connect->error);
} else {
    header("location: listarusuario.php");
}

?>