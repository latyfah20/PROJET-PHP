<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
</head>
<body>
<?php
$nombre = 15 ; 
for ($i=1 ; $i<=$nombre ; $i++) {
    if ($nombre % $i == 0 ) 
    echo "$i , "  ; 

}
echo " sont l'ensemble des diviseurs du nombre "  ;
?> 
</body>
</html>