<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 3 - ex5</title>
</head>

<body>

    <h1>Partie 3 - ex5</h1>

    <p>
    En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.
    </p>

    <?php
        
        // déclaration des variables 
        $int = 1;

        // Affichage en fonctions des conditions demandées
        do{
            echo "{$int} On y arrive presque <br>";
            $int++;
        }while($int != 15);
        
                   

    ?>

</body>

</html>