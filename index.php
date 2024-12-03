<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo</title>
</head>
<body>
    <!-- Exo1 -->
    <h2>Exo1</h2>
    <?php 
    $nombre = 0;
    for ($nombre = 0; $nombre <= 25 ; $nombre++){
        echo $nombre . " ";
    }?>

    <!-- Exo2 -->
    <h2>Exo2</h2>
    <?php
    $nombre = 25;
    while( $nombre > 0 ){
        echo $nombre-- . " ";
    }?>

    <!-- Exo3 -->
    <h2>Exo3</h2>
    <?php 
    $x = 1;
    $y = 1;

    for ($y = 1; $y <= 25; $y++){

        for ($x = 1; $x <= $y; $x++){
            echo $x . " ";
        }
        echo "<br>";
    }?>

    <!-- Exo4 -->
    <h2>Exo4</h2>
    <?php
    $nombre1 = 0;
    $nombre2 = 0;

    for ($nombre1 = 0; $nombre1 <= 30; $nombre1++){
        $nombre2 = $nombre1+$nombre2;
    }
    echo $nombre2;
    ?>

    <!-- Exo5 -->
    <h2>Exo5</h2>
    <?php 
    $nombre = rand(1,100);
    function EstPair($nombre){
        if($nombre % 2 == 0){
            return true;
        }else {
            return false;
        }
    }
    if (EstPair($nombre)){
        echo "Le nombre " . $nombre . " est pair";
    }else {
        echo "Le nombre " . $nombre . " est impair";
    }?>

    <!-- Exo6 -->
    <h2>Exo6</h2>
    <?php
    $nombre = 0;
    for ($nombre = 1; $nombre <= 20; $nombre++){
        if (EstPair($nombre)){
            echo $nombre . " ";
        }else {
        }
    }?>

    <!-- Exo7 -->
    <h2>Exo7</h2>
    <?php
    function Pythagore($x, $y){
        $hypo = (($x*$x)+($y*$y));
        return $hypo; 
    }?>

    <!-- Exo8 -->
    <h2>Exo8</h2>
    <?php 
    $heure = rand(0,24);
    if ($heure >= 0 && $heure < 12){
        echo "Il est " . $heure . " heures donc c'est le matin";
    }else if ($heure >= 12 && $heure < 17){
        echo "Il est " . $heure . " heures donc c'est l'après midi";
    }else if ($heure >= 17 && $heure < 24){
        echo "Il est " . $heure . " heures donc c'est le soir";
    }else {
        echo "Cette heure n'existe pas";
    }?>

    <!-- Exo9 -->
    <h2>Exo9</h2>
    <?php
    $nombre = rand(1,100);
    echo (EstPair($nombre)) ? "Le nombre " . $nombre . " est pair" : "Le nombre " . $nombre . " est impair";
    ?>

    <!-- Exo10 -->
    <h2>Exo10</h2>
    <?php 
    $Number = 1;
    for ($Number = 1; $Number <=100; $Number++){
        if ($Number % 3 == 0 && $Number % 5 == 0){
            echo "foobar" . "<br>";
        }else if ($Number % 3 == 0){
            echo "foo" . "<br>";
        }else if ($Number % 5 == 0){
            echo "bar" . "<br>";
        }else {
            echo $Number . "<br>";
        }
    }?>

    <!-- Exo11 -->
    <h2>Exo11</h2>
    <?php 
    $identitePersonne = [
        'nom' => 'Croft',
        'prenom' => 'Lara',
        'metier' => 'Archéologue'
    ];
    echo "<h1>C'est un plaisir de vous voir " . $identitePersonne['prenom'] . ' ' . $identitePersonne['nom'] . ' (' . $identitePersonne['metier'] . ')</h1>';
    ?>

    <!-- Exo12 -->
    <h2>Exo12é</h2>


</body>
</html>