<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice3</title>
</head>
<body>
    
<?php
// Avec l'instruction WHILE
$nb = 999;
$x = -1;
$coup = 0;

while ($x != $nb) {
    $x = rand(0, 1000);
    $coup++;
}
echo "$nb trouvé en $coup coups ";
?>


<?php
// Avec l'instruction FOR
$nb = 999;
$x = -1;
for ($coup = 1; $x != $nb; $coup++) {
    $x = rand(0, 1000);
}
echo "$nb trouvé en $coup coups ";
?>
</body>
</html>
