<?php

//Receber o id da escolha
$id = $_GET['id'];

//Conectar ao BD
include("conecta.php");

//seleciona todos os dados da tabela lista
$sql = "SELECT * FROM usuario WHERE id_usuario=$id";

//Executa o select
$resultado = mysqli_query($connect,$sql);

//Gera o vetor com os dados buscados
$dados = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    
<h1> Editar </h1>

<form action="updateusuario.php" method="post">
    Informe o id do usuario:
        <input type="text" value="<?php echo $dados['id_usuario'];?>" name="id"/> <br>
    Infrome um email novo:
        <input type="text" value="<?php echo $dados['email'];?>" name="email"/> <br>
    Informe uma senha nova:
        <input type="text" value="<?php echo $dados['senha'];?>" name="senha"/> <br>
    <input type="submit" value="Editar"/>
</form>

</body>
</html>