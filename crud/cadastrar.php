<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuario</title>
</head>
<body>
    <form action="cadastrar.php" method="post">
        Id:<input type="number" name="id">
        Email:<input type="number" name="email">
        Senha:<input type="number" name="senha">
        <p><input type="submit" value="Enviar"></p>

</form>
</body>
</html>

<?php

include("conecta.php")

$id = ["id"];
$email=["email"];
$senha = ["senha"];

$sql = "INSERT INTO usuario(id_usuario, email, senha) value ($id, $email, $senha)";

?>