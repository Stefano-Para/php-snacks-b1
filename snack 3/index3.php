<!-- ## Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
// (!in_array($number, $numberArray));

$numberArray = []; 

for ($i = 0; $i <= 15; $i++) {
    $number = rand(1, 100); 

        if (!in_array($number, $numberArray)) {
            $numberArray[] = $number;
        }

    }
    var_dump($numberArray); 
?>
