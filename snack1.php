<!-- Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema: Olimpia Milano - Cantù | 55 - 60 -->

<!-- PHP -->
<?php
  $matches = [
    [
      "squadra di casa" => "Olimpia Milano",
      "squadra ospite" => "Cantù",
      "punti squadra di casa" => 74,
      "punti squadra ospite" => 68
    ],
    [
      "squadra di casa" => "Virtus Bologna",
      "squadra ospite" => "Varese",
      "punti squadra di casa" => 72,
      "punti squadra ospite" => 80
    ]
  ];
  var_dump($matches);
 ?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Array 'matches'</title>
</head>
<body>
  <?php for ($i=0; $i < count($matches); $i++) {
    $squadraUno = $matches[$i]["squadra di casa"];
    $squadraDue = $matches[$i]["squadra ospite"];
    $punteggioCasa = $matches[$i]["punti squadra di casa"];
    $punteggioOspite = $matches[$i]["punti squadra ospite"];
    ?>
    <h2><?php echo $squadraUno .'-' .$squadraDue .' ' .'|' .' ' .$punteggioCasa .'-' .$punteggioOspite; ?></h2>
  <?php } ?>


</body>
</html>
