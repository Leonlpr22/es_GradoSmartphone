<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php


    $modello = "iphone 15 pro max";
    $grado = rand(1,4);


    echo "<h1>grado: $grado</h1>";




    switch ($grado){


        case 1:
            echo "<h2> $modello perfetto, pari al nuovo.</h2>";
            break;
        case 2:
            echo "<h2> $modello in ottime condizioni.</h2>";
            break;
        case 3:
            echo "<h2> $modello con graffi e/o segni di usura.</h2>";
            break;
        case 4:
            echo "<h2 style= 'color: red;'>errore: grado non riconosciuto</h2>";
            break;
    }




    ?>




</body>
</html>
