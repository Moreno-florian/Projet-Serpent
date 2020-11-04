<?php
require_once '../Controller/ControllerTestStat.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/library/style.css">
    <meta name="author" content="Florian Moreno">
    <title>Consultation générale</title>
</head>

<body>
    <div class="type3"> Derniers repas :</div>
    <table class="array">

        <tr>
            <th>Poids</th>
            <th>Id serpent</th>

        </tr>

        <tr class="SizeFont">
            <?php foreach ($list as $consult) : ?>

                <td> <?= $consult['Masse']; ?> </td>
                <td> <?= $consult['Id_serpent']; ?></td>

        </tr>

    <?php endforeach ?>

    </table>

</body>

</html>