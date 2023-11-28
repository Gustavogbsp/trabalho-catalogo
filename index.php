<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Trabalho</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body>

      <form action="cadastrar.php" method="POST" class="m-6">
  
  <div class="title">
  <header>Sistema de catálogo de jogos</header>
  </div>

<div class="conteudo">

  <div class="box">

    <div class="codigo">
    <p>Digite o codigo do jogo:</p>
  <input class="input" type="text" placeholder="Nome" name="txtCodigo">
    </div>

    <br>
    
  <div class="nome">
    <p>Digite o nome do jogo:</p>
  <input class="input" type="text" placeholder="Nome" name="txtNomeJogo">
  </div>
  
  <br>
  
  <div class="valor">
    <p>Digite o valor do jogo:</p>
  <input class="input" type="text" placeholder="Valor" name="txtValorJogo">
  </div>
  
  <br>

  <div class="memória">
    <p>Digite a memória do jogo:</p>
<input class="input" type="text" placeholder="Memória" name="txtMemoriaJogo">
  </div>
  
  <br>

  <div class="tipo">
    <p>Digite o gênero do jogo:</p>
  <input class="input" type="text" placeholder="Tipo" name="txtTipoJogo">
  </div>

  </div>
  
</div>

  <br>

          <button type="submit" class="button is-primary">Cadastrar</button>
        <a class="button is-warning" href="listar.php">Listar dados</a>
  
</body>

</html>
