<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 3 - ex6</title>
</head>

<body>

    <h1>Partie 3 - ex6</h1>

    <p>
    En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.
    </p>

    <?php
        
        // déclaration des variables 
        $int = 20;

        // Affichage en fonctions des conditions demandées
        do{
            echo "{$int} C\'est presque bon !!!! <br>";
            $int--;
        }while($int != 0);
        
                   

    ?>

</body>

</html>