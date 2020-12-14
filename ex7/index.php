<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 3 - ex7</title>
</head>

<body>

    <h1>Partie 3 - ex7</h1>

    <p>
    En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.
    </p>

    <?php
        
        // déclaration des variables 
        $int = 1;

        // Affichage en fonctions des conditions demandées
        do{
            echo "{$int} On tient le bon bout !!!! <br>";
            $int += 15;
        }while($int <= 100);
        
                   

    ?>

</body>

</html>