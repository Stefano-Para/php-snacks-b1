<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 

$squadre = [
    [
        "squadraCasa" => [
            "nome" => "Neo Tokyo Tre",
            "punti" => 42
        ],
        "squadraOspite" => [
            "nome" => "Paperopolese",
            "punti" => 38
        ]
    ],
    [
        "squadraCasa" => [
            "nome" => "Genowa",
            "punti" => "1000000"
        ],
        "squadraOspite" => [
            "nome" => "Sawona",
            "punti" => "1"
        ]
    ],
]; 

// prima prova 
$squadraCasaUno = $squadre[0][squadraCasa][nome];
$squadraOspiteUno = $squadre[0][squadraOspite][nome];
$squadreUno = $squadre[0][squadraCasa][nome] . " - " . $squadre[0][squadraOspite][nome];
$punteggioUno = " | " . $squadre[0][squadraCasa][punti] . " - ". $squadre[0][squadraOspite][punti];
$primaGiornata = $squadreUno . $punteggioUno;

$squadreDue = $squadre[1][squadraCasa][nome] . " - " . $squadre[1][squadraOspite][nome];
$punteggioDue = " | " . $squadre[1][squadraCasa][punti] . " - ". $squadre[1][squadraOspite][punti];
$secondaGiornata = $squadreDue . $punteggioDue;


// seconda prova 
echo "<ul>";
for ($i = 0; $i < count($squadre); $i++) {
    echo "<h2>" . $squadre[$i][squadraCasa][nome] . "</h2>";
    echo "<h2>" . "Punteggio: " . $squadre[$i][squadraCasa][punti] . "</h2>";
}
echo "</ul>";



?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    
    <body>
        <h2>

        <!-- prima prova  -->
        <?php
        echo '<pre>';
        
        echo($primaGiornata);
        echo("\r\n" );
        echo($secondaGiornata);
        
        echo '</pre>';
        ?>
        </h2>

    </body>
</html>