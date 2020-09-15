<?php
require_once '../Controller/ControllerDate.php';
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
    <form action="../Controller/ControllerTest.php" method="post">
        <div class="box3">
            <label for="firstname"></label>
            <select name="firstname" class="font">
                <option value="0" selected>Tous</option>
                <option value="1">Snatch</option>
                <option value="3">Nazca</option>
                <option value="2">Snow</option>
            </select>
        </div>

        <div class="type3"> Derniers repas :</div>
        <table class="array">

            <tr>
                <th>Date du dernier repas</th>
                <th>Type de proie</th>
                <th>Supprimer</th>

            </tr>

            <?php foreach ($list as $consult) : ?>
                <tr class="SizeFont">
                    <td> <?= $consult['trueDate']; ?> </td>
                    <td> <?= $consult['Type']; ?><input type="submit" id="supp" value="Supp"> </td>
                </tr>
    </form>
<?php endforeach ?>
</table>
</div>









</body>

</html>