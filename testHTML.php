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
<div class="box3">
            <label for="firstname"></label>
            <select name="firstname" class="font">
                <option value="0" selected>Tous</option>
                <option value="1">Snatch</option>
                <option value="3">Nazca</option>
                <option value="2">Snow</option>
            </select>
        </div>
<body>
    <div id="list" class="matchList">

        <h2>Liste des repas</h2>

        <table>
            <tr class="border">
                <th>Date du dernier repas</th>
                <th>Type de proie</th>
                <th class="tButton" colspan="3"></th>
            </tr>

            <?php foreach ($list as $match) : ?>
                <tr>
                    <td> <?= $match['trueDate']; ?> </td>
                    <td> <?= $match['Type']; ?> </td>
                </tr>
            <?php endforeach ?>
            
        </table>

</body>

</html>