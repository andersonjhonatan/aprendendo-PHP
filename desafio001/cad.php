<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Resultado da Soma</title>
</head>

<body>


  <section>

    <p><?php echo "O resultado do antecessor e: " . ($_GET["numero"] - 1  ?? 0) ?></p>

    <p><?php echo "O resultado do numero e: " . ($_GET["numero"] ?? 0) ?></p>


    <p><?php echo "O resultado do sucessor e: " . ($_GET["numero"] + 1 ?? 0) ?></p>


    <p><a href="javascript:history.go(-1)">Voltar</a></p>
  </section>


</body>

</html>