<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 3 - ex2</title>
</head>

<body>

    <h1>Partie 3 - ex2</h1>

    <p>
    Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.  
Tant que la première variable n'est pas supérieure à 20 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- incrementer la première variable
    </p>

    <?php
        
        // déclaration des variables 
        $int1 = 0;
        $int2 = 1;

        // Affichage en fonctions des conditions demandées
        while($int1 <= 20){

            echo ($int1 * $int2);
            echo  '<br>';
            $int1++;
        }
        
                   

    ?>

</body>

</html>