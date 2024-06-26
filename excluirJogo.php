<?php

// Conexão com o banco de dados
$conexao = mysqli_connect("localhost", "root", "", "projetoads");

// Recebe o ID do jogo a ser excluído
$idJogo = $_GET['id'];

// Executa a consulta SQL e faz a exclusão do registro
$sql = "DELETE FROM CADASTROGAMES WHERE idJogo = $idJogo";
mysqli_query($conexao, $sql);

// Redireciona de volta à página de listagem
header("Location: listarJogos.php");
exit;
