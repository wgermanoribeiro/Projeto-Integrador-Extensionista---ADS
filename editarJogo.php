<?php


// Conexão com o banco de dados
$conexao = mysqli_connect("localhost", "root", "", "projetoads");

// Recebe o ID do jogo da URL
$idJogo = $_GET['id'];

// Consulta o banco de dados para obter os dados do jogo
$sql = "SELECT * FROM CADASTROGAMES WHERE idJogo = $idJogo";
$resultado = mysqli_query($conexao, $sql);
$dadosJogo = mysqli_fetch_assoc($resultado);

// Exibe o formulário com os dados preenchidos
?>

<body>
  <div class="titulo1">
    <h1 id="titulo">Editar Jogo Cadastrado</h1>
    <p id="subtitulo"></p>
    <br />
  </div>

  <link rel="stylesheet" type="text/css" href="cadastraJogo2.css" media="screen" />

  <form action="salvarEditarJogo.php" method="post">
    <div>
      Nome do Jogo: <input type="text" name="nomeJogo" value="<?= $dadosJogo['nomeJogo'] ?>">
    </div>
    <br />
    <div>
      Produtora: <input type="text" name="produtora" value="<?= $dadosJogo['produtora'] ?>">
    </div>
    <br />
    <div>
      Ano do Lançamento: <input type="number" name="anoLancamento" value="<?= $dadosJogo['anoLancamento'] ?>">
    </div>
    <br />
    <div>
      Gênero do Jogo:
      <select input name="generoJogo" value="<?= $dadosJogo['generoJogo'] ?>" id="genero" required>
        <option selected disabled value="">Selecione</option>
        <option>Ação</option>
        <option>Aventura</option>
        <option>Estratégia</option>
        <option>RPG</option>
        <option>Esporte</option>
        <option>Corrida</option>
        <option>Simulação</option>
        <option>FPS</option>
      </select>
    </div>
    <br />
    <div>
      Console que Finalizei:
      <select input name="consolesDisponiveis" value="<?= $dadosJogo['consolesDisponiveis'] ?>" id="console" name="console" required>
        <option>Selecione</option>
        <option>Nintendinho</option>
        <option>Super Nintendo</option>
        <option>Mega Drive</option>
        <option>Sega Saturno</option>
        <option>Playstation</option>
        <option>Nintendo 64</option>
        <option>PC</option>
        <option>GameBoy</option>
      </select>
    </div>
    </div>
    <br />
    <div>
      Jogadores Simultaneos:
      <select input name="jogadoresSimultaneos" value="<?= $dadosJogo['jogadoresSimultaneos'] ?>" id="players" name="players" required>
        <option selected disabled value="">Selecione</option>
        <option>1 Jogador</option>
        <option>2 Jogadores</option>
        <option>Multiplayer Online</option>
      </select>
    </div>
    <br />
    <div>
      Finalizei o Jogo? (Zerei??):
      <select input name="finalizado" value="<?= $dadosJogo['finalizado'] ?>" id="finalizado" name="finalizado" required>
        <option selected disabled value="">Selecione</option>
        <option>Sim</option>
        <option>Não</option>
      </select>
    </div>
    <br />
    <div>
      Link Vídeo Youtube: <input type="url" name="linkVideo" value="<?= $dadosJogo['linkVideo'] ?>">
    </div>
    <br />
    <input type="hidden" name="idJogo" value="<?= $idJogo ?>">
    <input class="botaoInicio" type="submit" value="Salvar Alterações" onclick="return confirm('Deseja realmente salvar as alterações?')">
    <a href="listarJogos.php">
      <input class="botaoInicio" type="button" value="Cancelar" />
    </a>
  </form>
</body>