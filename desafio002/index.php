<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 02 </title>
</head>

<body>

  <?php
  $min = 0;
  $max = 100;

  /* ja aqui o rand ele funciona se o max é maior do que o minimo */

  $num = rand($min, $max);

  echo  "Gerando um numero aleatorio, entre o $min e $max... ";
  echo "O numero aleatorio foi $num"


  ?>

  <br />

  <?php

  $min = 0;
  $max = 100;

  /* o max aqui tem que ser mair do que oi minimo  */

  $num = mt_rand($min, $max);

  echo  "Gerando um numero aleatorio com o mt-rand poie ele é mais rapido , entre o $min e $max... ";
  echo "O numero aleatorio foi $num"



  ?>

  <br />


  <?php

  $min = 0;
  $max = 100;

  /* randon int gera numeros aleatorioos criptografados seguros  */

  /* so usar o random int para criptografar  */

  $num = random_int($min, $max);

  echo  "Gerando um numero criptografado random_int poie ele é muito lento, entre o $min e $max... ";
  echo "O numero aleatorio foi $num"



  ?>

</body>

</html>