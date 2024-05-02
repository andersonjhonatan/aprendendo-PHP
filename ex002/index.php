<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funções de PHP</title>
</head>

<body>
  <?php echo "Aqui em baixo temos alguns exemplos para ver a funça data sendo chamada"; ?>
  <div>
    <?php echo "Funçoes de PHP"; ?>
  </div>
  <div>
    <?php date_default_timezone_set('America/Sao_Paulo') ?>
    <?php echo "Hoje é dia " . date('d/m/Y'); ?>

    <br />
    <?php echo date('d/m/Y'); ?>
    <?php echo "Hoje é dia " . date('d/m/Y T'); ?>

    <br />

    <?php echo date('H:i:s'); ?>
    <?php echo "Agora sao " . date('H:i:s T'); ?>

    <br />

    <?php echo date('G:i:s'); ?>
    <?php echo "Agora sao " . date('G:i:s T'); ?>

    <br />

  </div>



</body>

</html>