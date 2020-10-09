<?php
include_once '../Controller/ControllerDate.php';

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

    <form action="../index.php" method="post">
        <div class="box4">
            <input type="submit" id="size5" value="Accueil">
        </div>
    </form>
    
    <div class="box3">
        <form action="Consultation.php" method="post" id="firstname">
            <select name="firstname" class="font">
                <option value="0" <?php if (isset($_POST['firstname']) and $_POST['firstname'] == 0) echo 'selected' ?>>Tous</option>
                <option value="1" <?php if (isset($_POST['firstname']) and $_POST['firstname'] == 1) echo 'selected' ?>>Snatch</option>
                <option value="3" <?php if (isset($_POST['firstname']) and $_POST['firstname'] == 3) echo 'selected' ?>>Nazca</option>
                <option value="2" <?php if (isset($_POST['firstname']) and $_POST['firstname'] == 2) echo 'selected' ?>>Snow</option>
            </select>

            <div class="box7">
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

        <tr class="SizeFont">
            <?php foreach ($list as $consult) : ?>

                <td> <?= $consult['trueDate']; ?> </td>
                <td> <?= $consult['Type']; ?></td>
                <td> <?= $consult['Nom'] ?></td>
                <td class="tButton">
                    <form action="../Controller/ControllerDelete.php" method="post">
                        <input type="hidden" name="Id_dateRepas" value="<?= $consult['Id_dateRepas'] ?>" />
                        <input type="submit" value="Supprimer" onclick="if (window.confirm('Vous êtes sûr ?')) {return true;} else {return false;}" class="btn btn-danger btn-sm tableBtn" />
                    </form>
                </td>
        </tr>

    <?php endforeach ?>

    </table>

</body>

</html>