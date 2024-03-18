<?php

// Receber os dados do formulário
$email = $_POST["email"];
$senha = $_POST["senha"];

// conectar ao BD
include("conecta.php");

// Montar o comando SQL
$sql = "INSERT INTO usuario(email, senha) values ('$email', '$senha')";

// Executar o comando SQL
mysqli_query($connect, $sql);

if($connect->error){
    die("erro".$connect->error);
} else {
    header("location: listarusuario.php");
}

?>