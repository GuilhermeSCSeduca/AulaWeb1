<?php
//identificar a linguagem PHP//
    $conexao-mysqli_connect('localhost','root','','3pp');
/*/criar a variavel PHP $conexão para guardar o resultado da conexão com o servidor (localhost),
usuário e senha (hoot) e banco de dados*/
if (isset($_POST['consultar'])){

    $codigo=$_POST['codigo'];

$sql=" SELECT * FROM produto WHERE codigo= '$codigo'";

$result=mysqli_query($conexao, $sql);
if ($result) {
While($linha=mysqli_fetch_array($result)){
echo $linha['descricao'].'<br>';
echo $linha['valor'].'<br> <hr>';
    }

}}
?>
