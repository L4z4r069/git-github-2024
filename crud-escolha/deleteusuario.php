<?php

//conectar ao BD
include("conecta.php");

//receber os dados do formulario
$id = $_GET['id'];


$sql = "DELETE FROM usuario WHERE id_usuario = $id";

//executar o comando no BD
mysqli_query($connect, $sql);

if($connect->error){
    die("erro".$connect->error);
} else {
    header("location: listarusuario.php");
}

?>