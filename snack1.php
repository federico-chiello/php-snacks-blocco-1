<!-- Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema: Olimpia Milano - Cantù | 55 - 60 -->

<!-- PHP -->
<?php
// Creo un array di array riferito a delle squadre di basket.
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
    ],
    [
      "squadra di casa" => "Virtus Roma",
      "squadra ospite" => "Treviso",
      "punti squadra di casa" => 65,
      "punti squadra ospite" => 74
    ],
    [
      "squadra di casa" => "Trieste",
      "squadra ospite" => "Libertas Forlì",
      "punti squadra di casa" => 86,
      "punti squadra ospite" => 82
    ]
  ];
  // var_dump($matches);
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
  <!-- Uso del ciclo for per stampare successivamente il contenuto di ogni array. -->
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
