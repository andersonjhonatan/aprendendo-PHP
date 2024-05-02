<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos Primitivos em PHP</title>
</head>

<body>


  <h1>Tipos Primitivos em PHP</h1>

  <?php echo "Escalares em PHP"; ?>

  <br />

  <?php echo "String"; ?>
  <?php echo "Int ou Integer"; ?>
  <?php echo "Float, Double ou Real"; ?>
  <?php echo "Boolean ou Bool"; ?>

  <hr />


  <div>
    <?php
    $nome = "ANDERSON";
    var_dump($nome);

    ?>

    <?php
    $valorInt = 10;
    var_dump($valorInt);

    ?>

    <?php

    $valorFloat = 10.5;
    var_dump($valorFloat);

    ?>

    <?php
    $casado = true;
    var_dump($casado);
    ?>
  </div>

  <hr />

  <div>

    <h1>Como Forçar a tipagem da variavel em PHP</h1>

    <?php

    $nome = (int) "ANDERSON";
    var_dump($nome);

    ?>


    <?php

    $valor = (float) 10;
    var_dump($valor);

    ?>


    <?php

    $casado = (bool) false;
    var_dump($casado);

    ?>


    <?php

    //agora quando eu uso o echo para mostrar o tipo do bolean se for false e null ou 0 ja true e 1
    $casadoTeste = (bool) true;

    echo "Essa pessoa é casada? " . $casadoTeste;

    //var_dump($casadoTeste)

    ?>


  </div>


</body>

</html>