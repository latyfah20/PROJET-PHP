<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10</title>
</head>
<body>
    <?php
    /* EXERCICE 8*/
    $tab = array(
        "Dupont" => array("Latyfah", "Plateau", 19),
        "Schmoll" => array("KHADIJA", "DAKAR", 21),
        "Smith" => array("CHEIKH", "KENIOTO", 23)
    );

    foreach ($tab as $cle => $valeur) {
        echo "Elément $cle : <br>";
        foreach ($valeur as $ind => $val) {
            echo "élément $ind : $val <br>";
        }
    }
    ?>


    <?php
    /* EXERCICE 9*/
    $tabAssoc = array(
        "Dupont" => array("prenom" => "LATYFAH", "ville" => "Plateau", "age" => 19),
        "Schmoll" => array("prenom" => "Khadija", "ville" => "Dakar", "age" => 20),
        "Smith" => array("prenom" => "cheikh", "ville" => "KENIOTO", "age" => 23)
    );

    foreach ($tabAssoc as $cle => $valeur) {
        echo "Element $cle : <br>";
        foreach ($valeur as $cle2 => $val) {
            echo "$cle2 : $val <br>";
        }
    }
    ?>
</body>
</html>
