<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 11</title>
</head>
<body>
<?php
/* EXERCICE 8 */
$tab = array(
    "Dupont" => array("prenom" => "Latyfah", "ville" => "Plateau", "age" => 19),
    "Schmoll" => array("prenom" => "Khadija", "ville" => "dakar", "age" => 20),
    "Smith" => array("prenom" => "Cheikh", "ville" => "kenioto", "age" => 23)
);

foreach ($tab as $nom => $infos) {
    echo "Personne: $nom <br />";
    foreach ($infos as $cle => $valeur) {
        echo "$cle: $valeur <br />";
    }
    echo "<hr />";
}
?>

<?php
/* EXERCICE 9*/
$tab = array(
    "Dupont" => array("prenom" => "Latyfah", "ville" => "Plateau", "age" => 19),
    "Schmoll" => array("prenom" => "Khadija", "ville" => "dakar", "age" => 20),
    "Smith" => array("prenom" => "Cheikh", "ville" => "kenioto", "age" => 23)
);

foreach ($tab as $nom => $infos) {
    echo "Personne: $nom <br />";
    foreach ($infos as $cle => $valeur) {
        echo "$cle: $valeur <br />";
    }
    echo "<hr />";
}
?>
</body>
</html>
