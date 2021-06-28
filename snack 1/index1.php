<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 

$string = [
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
        <?php echo($string); ?>
        </h2>

    </body>
</html>