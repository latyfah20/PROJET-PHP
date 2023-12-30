<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice4</title>
</head>
<body>
    <?php
        function PPCM($a, $b){
            $res = $a * $b;
            
            while ($b != 0){
                $temp = $b;
                $b = $a % $b;
                $a = $temp;
            }
            
            $result = $res / $a;
            return $result;
        }
        $nombre1 = 15;
        $nombre2 = 25;
        $ppcm_result = PPCM($nombre1, $nombre2);
        echo "Le PPCM de $nombre1 et $nombre2 est : $ppcm_result";
    ?>
</body>
</html>
