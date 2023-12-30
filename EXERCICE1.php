<?php
function estNomValide($nomVariable) {
    return preg_match('/^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$/', $nomVariable) === 1;
}

$variables = array(
    'mavar',
    '$mavar',
    '$var5',
    '$_mavar',
    '$_5var',
    '$__élément1',
    '$hotel4*'
);

foreach ($variables as $variable) {
    echo "$variable : ";
    if (estNomValide(ltrim($variable, '$'))) {
        echo "Nom valide";
    } else {
        echo "Nom invalide";
    }
    echo "<br>";
}
?>
