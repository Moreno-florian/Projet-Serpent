<?php
require_once '../Controller/ControllerDate.php';
//require_once '../Controller/ControllerTest.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./library/style.css">
    <meta name="author" content="Florian Moreno">
    <title>Consultation générale</title>
</head>

<body>
    <header>
        <h1 class="titre"><img src="./img/logoSerpent2.png" alt="Snake logo"> Consultation <img src="./img/logoSerpent.png" alt="Snake logo"></h1>
    </header>


    <div class="box3">
        <form action="../Controller/ControllerTest.php" method="post">
            <label for="firstname"></label>
            <select name="firstname" class="font">
                <option value="0" <?php if (isset($_POST['firstname']) and $_POST['firstname'] == 0) ?>>Tous</option>
                <option value="1" <?php if (isset($_POST['firstname']) and $_POST['firstname'] == 1) ?>>Snatch</option>
                <option value="3" selected <?php if (isset($_POST['firstname']) and $_POST['firstname'] == 3)  ?>>Nazca</option>
                <option value="2" <?php if (isset($_POST['firstname']) and $_POST['firstname'] == 2)  ?>>Snow</option>
            </select>

            <div class="box4">
                <input type="submit" id="size3" value="Choisir">

            </div>
        </form>
    </div>


    <div class="type3"> Derniers repas :</div>
    <table class="array">

        <tr>
            <th>Date du dernier repas</th>
            <th>Type de proie</th>
            <th>Serpent</th>
            <th class="hidden">Id date</th>
            <th>Supprimer</th>
        </tr>

        <?php foreach ($list as $consult) : ?>
            <tr class="SizeFont">
                <td> <?= $consult['trueDate']; ?> </td>
                <td> <?= $consult['Type']; ?></td>
                <td> <?= $consult['Nom'] ?></td>
                <td class="hidden"> <?= $consult['Id_dateRepas']; ?> </td>
                <td class="tButton">
                    <form action="../Controller/ControllerDelete.php" method="post">
                        <input type="hidden" name="Id_dateRepas" value="<?= $consult['Id_dateRepas'] ?>" />
                        <input type="submit" value="Supprimer" onclick="if (window.confirm('Vous êtes sûr ?')) {return true;} else {return false;}" class="btn btn-danger btn-sm tableBtn" />
                    </form>
                </td>
            </tr>

        <?php endforeach ?>
        </form>
    </table>

</body>

</html>