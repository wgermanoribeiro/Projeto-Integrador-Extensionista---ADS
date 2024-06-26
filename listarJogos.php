<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Listar Jogos</title>
  <link rel="stylesheet" type="text/css" href="cadastraJogo2.css" media="screen" />
</head>

<body>
  <div>
    <h1>Listar Jogos</h1>

    <table class="tabelaLista">
      <tr>
        <td>ID Jogo</td>
        <td>Nome do Jogo</td>
        <td>Produtora</td>
        <td>Ano do Lançamento</td>
        <td>Gênero do Jogo</td>
        <td>Console que Finalizei</td>
        <td>Jogadores Simultaneos</td>
        <td>Finalizado?</td>
        <td>Link Vídeo Youtube</td>
        <td>Ações</td>
      </tr>
      <?php
      require("conecta.php");

      $dados_select = mysqli_query($conn, "SELECT idJogo, nomeJogo, produtora, anoLancamento, generoJogo, consolesDisponiveis, jogadoresSimultaneos, finalizado, linkVideo FROM CADASTROGAMES");

      while ($dado = mysqli_fetch_array($dados_select)) {
        echo '<tr>';
        echo '<td>' . $dado[0] . '</td>';
        echo '<td>' . $dado[1] . '</td>';
        echo '<td>' . $dado[2] . '</td>';
        echo '<td>' . $dado[3] . '</td>';
        echo '<td>' . $dado[4] . '</td>';
        echo '<td>' . $dado[5] . '</td>';
        echo '<td>' . $dado[6] . '</td>';
        echo '<td>' . $dado[7] . '</td>';
        echo '<td>' . $dado[8] . '</td>';


        echo '<td>';
        echo '<a class=botaoEditar href="editarJogo.php ?id=' . $dado['idJogo'] . '">Editar</a>';
        echo '<a class=pontinhosBotao>..</a>';
        echo '<a class=botaoExcluir href="excluirJogo.php ?id=' . $dado['idJogo'] . '" onclick="return confirm(\'Deseja realmente Excluir o registro?\')">Excluir</a>';
        echo '</td>';
        echo '</tr>';
      }
      ?>
    </table>
    <br />
    <a href="index.html"><input class="botaoInicio" type="button" value="Voltar"></a>
  </div>

</body>

</html>