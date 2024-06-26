<?php


$conexao = mysqli_connect("localhost", "root", "", "projetoads");

// Recebe os dados do formulário editarJogo.php
$idJogo = $_POST['idJogo'];
$novoNomeJogo = $_POST['nomeJogo'];
$novoProdutora = $_POST['produtora'];
$novoAnoLancamento = $_POST['anoLancamento'];
$novoGeneroJogo = $_POST['generoJogo'];
$novoConsolesDisponiveis = $_POST['consolesDisponiveis'];
$novoJogadoresSimultaneos = $_POST['jogadoresSimultaneos'];
$novoFinalizado = $_POST['finalizado'];
$novoLinkVideo = $_POST['linkVideo'];


// Atualiza o nome do jogo no banco de dados
$sql = "UPDATE CADASTROGAMES SET 
nomeJogo = '$novoNomeJogo', 
produtora = '$novoProdutora',
anoLancamento = '$novoAnoLancamento',
generoJogo = '$novoGeneroJogo',
consolesDisponiveis = '$novoConsolesDisponiveis',
jogadoresSimultaneos = '$novoJogadoresSimultaneos',
finalizado = '$novoFinalizado',
linkVideo = '$novoLinkVideo'
  WHERE idJogo = $idJogo";
mysqli_query($conexao, $sql);

// Redireciona de volta à página de listagem listarJogos.php
header("Location: listarJogos.php");
exit;
