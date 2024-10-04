<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function scegliColore($lettera){

        switch($lettera){

            case 'r' :
                return 'red';

            case 'g' :
                return 'green';
                    
            case 'b' :
                return 'blue';

            default :
                return 'black';

        }

    }

    $lettera = "r";

    scegliColore($lettera);



    echo "<p style = 'color: " . scegliColore($lettera) . "'>Questo paragrafo ha la proprietà color con valore " . scegliColore($lettera) . "</p>"




    ?>
</body>
</html>