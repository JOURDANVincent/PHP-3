<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 3 - ex8</title>
</head>

<body>

    <h1>Partie 3 - ex8</h1>

    <p>
    En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.
    </p>

    <?php
        
        // déclaration des variables 
        $int = 200;

        // Affichage en fonctions des conditions demandées
        do{
            echo "{$int} Enfin !!!! <br>";
            $int -= 12;
        }while($int >= 0);
        
    ?>

</body>

</html>