<link rel="stylesheet" type="text/css" href="cadastraJogo2.css" media="screen" />

<?php
require("conecta.php");

$nomeJogo = $_POST['nomedojogo'];
$produtora = $_POST['produtora'];
$anoLancamento = $_POST['ano_lancamento'];
$generoJogo = $_POST['genero'];
$consolesDisponiveis = $_POST['console'];
$jogadoresSimultaneos = $_POST['players'];
$finalizado = $_POST['finalizado'];
$linkVideo = $_POST['video'];



$sql = "INSERT INTO cadastrogames (nomeJogo, produtora, anoLancamento, generoJogo, consolesDisponiveis, jogadoresSimultaneos, finalizado, linkVideo)
    VALUES ('$nomeJogo', '$produtora', '$anoLancamento', '$generoJogo', '$consolesDisponiveis', '$jogadoresSimultaneos', '$finalizado', '$linkVideo')";

if ($conn->query($sql) === TRUE) {
  echo "<div class=inicio><h1>Jogo Inserido com Sucesso</h1></div>";
  echo "<div class=titulo1><a href='index.html'><input type='button' class='botaoInicio' value='Início'></a>";
  echo '<a class=pontinhosBotao>..</a>';
  echo "<a href='listarJogos.php'><input type='button' class='botaoInicio' value='Listar Jogos'></a></div>";
} else {
  echo "<div><h3>OCORREU UM ERRO: </h3></div>: " . $sql . "<br>" . $conn->error;
}
