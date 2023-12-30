<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice17</title>
</head>
<body>
<?php
function tabmulti($tab,$bord)
{
echo "<table border=\"$bord\" width=\"90%\"><tbody>";
foreach($tab as $cle=>$tab2)
{
echo "<tr><th>$cle</th> ";
foreach($tab2 as $ind=>$val)
{
echo "<td>$val </td>";
}
echo "</tr>";
}
echo "</tbody> </table>";
}
$tab1 =
array("Senegal"=>array("dakar","kaffrine","fatick","diourbel","tambacunda"),
"Mali"=>array("Mopti","Gao","Bamako","San","Sikasso"
),
"Maroc"=>array("Fes","Marrakech","Rabt","Meknés","Casablanca")
);
tabmulti($tab1,1);
?>
</body>
</html>