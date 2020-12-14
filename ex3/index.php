<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 3 - ex3</title>
</head>

<body>

    <h1>Partie 3 - ex3</h1>

    <p>
    Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.  
Tant que la première variable n'est pas inférieure ou égale à 10 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- décrémenter la première variable
    </p>

    <?php
        
        // déclaration des variables 
        $int1 = 100;
        $int2 = 1;

        // Affichage en fonctions des conditions demandées
        while($int1 > 10) {
            echo ($int1 * $int2);
            echo  '<br>';
            $int1--;
        }
        
                   

    ?>

</body>

</html>