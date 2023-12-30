<?php
echo "<table border=\"1\" >";
echo "<caption><b>Confirmation de vos coordonnées</b></caption>";
foreach($_POST as $cle=>$val)
{
echo "<tr> <td> $cle :  </td> <td>".stripslashes($val)
."</td></tr>";
}
echo "</table>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 12</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend><b>Veuillez saisir vos coordonnées </b></legend>
                <table>
                    <tr>
                        <td>Nom : </td>
                            <td><input type="text" name="nom" /></td>
                     </tr>
                         <tr>
                           <td>Prénom : </td>
                                <td> <input type="text" name="prenom" /></td>
                         </tr>
                              <tr>
                                <td>Adresse : </td>
                                    <td><input type="text" name="adresse" /></td>
                              </tr>
                                <tr>
                                    <td>Ville :</td>
                                         <td><input type="text" name="ville" /></td>
                                </tr>
                                <tr>
                                    <td>Code postal :</td>
                                        <td><input type="text" name="code" maxlength="5"/></td>
                                    </tr>
                                    <tr>
                                        <td>VALIDER</td>
                                            <td><input type="submit" value="ENVOI" /></td>
                                    </tr>
                </table>
        </fieldset>
    </form>
</body>
</html>