<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    
<h1> CRUD</h1>

<?php
echo "<p><a href=\"formcad.php\">Cadastrar usuários</a></p>";

//Conectar ao BD
include("conecta.php");

//seleciona todos os dados da tabela lista
$sql = "SELECT * FROM usuario";

//Executa o select
$resultado = mysqli_query($connect,$sql);

//lista os itens
echo '<table border=1>
<tr>
  <th>ID</th>
  <th>Email</th>
  <th>Senha</th>
  <th colspan=2>Opção</th>
</tr>';

while ($dados = mysqli_fetch_assoc($resultado)) {
    echo '<tr>';
    echo '<td>'.$dados['id_usuario'].'</td>';
    echo '<td>'.$dados['email'].'</td>';
    echo '<td>'.$dados['senha'].'</td>';

    echo '<td><a href="formedit?id='.$dados['id_usuario'].'&">Editar</a></td>';
    echo '<td><a href="deleteusuario?id='.$dados['id_usuario'].'">Excluir</a></td>';
    echo '</tr>';
}

echo '</table>';

?>

</body>
</html>