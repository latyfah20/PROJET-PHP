<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice14</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }

        form {
            margin-top: 50px;
        }

        fieldset {
            border: 1px solid #ccc;
            width: 300px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
        }

        legend {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 15px;
        }

        table {
            margin: auto;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: #fff;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Bienvenue dans notre site d'agence immobiliére :</h1>
    <?php
    if (isset($_POST["choix"])) {
        switch ($_POST["choix"]) {
            case "Vendre":
                header("Location: vente.html");
                exit;
                break;
            case "Acheter":
                header("Location: achat.html");
                exit;
                break;
            case "Louer":
                header("Location: location.html");
                exit;
                break;
            default:
                break;
        }
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <fieldset>
            <legend><b>Veuillez faire votre choix </b></legend>
            <table>
                <tr>
                    <td><input type="submit" name="choix" value="Vendre" /></td>
                    <td><input type="submit" name="choix" value="Acheter" /></td>
                    <td><input type="submit" name="choix" value="Louer" /></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
