<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice13</title>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
    <fieldset>
        <legend><b>Veuillez saisir le prix HT et le taux de TVA</b></legend>
        <table>
            <tr>
                <td>Prix Hors Taxes : </td>
                <td><input type="text" name="prixht" value="<?php echo isset($_POST["prixht"]) ? $_POST["prixht"] : ''; ?>" /></td>
            </tr>
            <tr>
                <td>Taux de TVA (en %) : </td>
                <td><input type="text" name="tva" value="<?php echo isset($_POST["tva"]) ? $_POST["tva"] : ''; ?>" /></td>
            </tr>
            <?php
            if (!empty($_POST['prixht']) && !empty($_POST['tva'])) {
                echo "<tr><td>Montant de la TVA : </td><td><input type=\"text\" value=\"" . round($_POST['prixht'] * $_POST['tva'] / 100, 2) . "\" readonly /></td></tr>";
                echo "<tr><td>Prix TTC : </td><td><input type=\"text\" value=\"" . round($_POST['prixht'] * (1 + $_POST['tva'] / 100), 2) . "\" readonly /></td></tr>";
            } else {
                echo "<tr><td colspan='2'><b>Le formulaire est incomplet !!!</b></td></tr>";
            }
            ?>
            <tr>
                <td></td>
                <td><input type="submit" value="ENVOI" /></td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>
