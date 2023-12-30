<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice15</title>
</head>
<body>
<?php
function initmajuscule(&$tab)
{
foreach($tab as $ind=>$val)
{
$tab[$ind]=ucfirst(strtolower($val));
}
return $tab;
}
$tabch= array("cErVeau","enfin","ChoiX","mbouP");
print_r(initmajuscule($tabch));
?>
</body>
</html>