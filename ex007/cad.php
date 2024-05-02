<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado do Processamento</title>
</head>

<body>

  <header>
    <h1>Resutaldo do Processamento</h1>
  </header>


  <main>
    <?php
    // essa dica é para quando for colocar um default na variável de entrada de dados 
    //$nome = $_GET["nome"] ?? " Sem nome informado";
    //$sobrenome = $_GET["sobrenome"] ?? " Sem sobrenome informado";

    $nome = $_GET["nome"] ?? "Sem nome informado";
    $sobrenome = $_GET["sobrenome"] ?? "Sem sobrenome informado";

    echo "<p>O nome completo e: $nome $sobrenome</p>";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
  </main>

</body>

</html>