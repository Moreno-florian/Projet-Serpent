<?php
require_once './ControllerDate.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test affichage</title>
</head>

<body>
    <div id="list" class="matchList">

        <h2>Liste des repas</h2>

        <table>
            <tr class="toHidden">
                <th>Date du dernier repas</th>
                <th class="tButton" colspan="3"></th>
            </tr>

            <?php foreach ($list as $match) : ?>
                <tr>
                    <td> <?= $match['trueDate']; ?> </td>
                </tr>
            <?php endforeach ?>
        </table>

</body>

</html>