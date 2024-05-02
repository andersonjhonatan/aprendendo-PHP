<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=
  , initial-scale=1.0">
  <title>Sintaxe NowDoc e Heredoc</title>
</head>

<body>

  <h1>
    Aprendendo Sintaxe NowDoc e Heredoc
  </h1>

  <?php echo "Sintaxe Heredoc"; ?>
  <hr />
  <?php
  // Heredoc ela aceita a interpretaçoes de texto com variavies ou unicode que seria 
  $name = "John";
  $date = date('Y');
  $string = <<<EOT
    Olá eu sou, $name!
    Eu estou estudando php no ano de $date \u{2728}
  EOT;
  echo $string;
  ?>

  <hr />

  <?php
  // Já a sintaxe NowDoc ela é quase igual a heredoc so que ela nao interpreta as variaveis e nem o conteúdo de variaveis, ele fala exatamente o que o texto estar sendo passado !

  echo "Sintaxe NowDoc";

  ?>

  <hr />

  <?php
  $name = "John";
  $string = <<<'EOT'
    Hello, $name!
    This is a multiline string.
  EOT;

  echo $string;

  ?>

</body>

</html>