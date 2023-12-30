<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice16</title>
</head>
<body>
<?php
function sinus($x, $unit)
{
    switch(strtolower($unit))
    {
        case "r":
            return sin($x);
            break;
        case "d":
            return sin($x / 180 * pi());
            break;
        case "g":
            return sin($x / 200 * pi());
            break;
        default:
            return "Unité non reconnue";
            break;
    }
}
echo sinus(pi() / 6, "r"), "<br />";
echo sinus(60, "d"), "<br />";
echo sinus(100, "g"), "<br />";
?>
</body>
</html>
