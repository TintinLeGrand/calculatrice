<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg" href="calculatrice.svg" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css" />
    <title>Calculatrice - Ethan</title>
</head>

<body>
    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="post">
        <div id="calculette">
            <div class="case1">
                Valeur 1
                <input type="number" class="entree" name="num1" size="10" value="0" />
            </div>
            <select type="select" name="symbole">
                <option value="addition">+</option>
                <option value="soustraction">-</option>
                <option value="multiplication">x</option>
                <option value="division">÷</option>
            </select>
            <div class="case2">
                Valeur 2
                <input type="number" class="entree" name="num2" size="10" value="0" />
            </div>
        </div>
        <div class="boutons">
            <input type="reset" value="Supprimer"></input>
            <input type="submit" value="Calculer"></input>
        </div>
    </form>

    <?php

    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['symbole'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $symbole = $_POST['symbole'];

        if (is_numeric($num1) & is_numeric($num2)) {
            if ($symbole != null) {
                switch ($symbole) {
                    case "addition":
                        $result = $num1 + $num2;
                        break;
                    case "multiplication":
                        $result = $num1 * $num2;
                        break;
                    case "soustraction":
                        $result = $num1 - $num2;
                        break;
                    case "division":
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                            break;
                        } else {
                            $result = "La division par zéro n'est pas défini.";
                        }
                        break;
                    default :
                    break;
                }
                echo ("<b>$result</b>");
            }
        } else {
            echo ("Problème d'entrées.");
        }

    }
    ?>
</body>

</html>