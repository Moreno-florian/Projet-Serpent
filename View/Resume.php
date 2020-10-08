<?php
include_once '../Controller/ControllerResume.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./library/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <meta name="author" content="Florian Moreno">
    <title>Résumé </title>


</head>

<body>

    <div class="hidden">
        <form action="Resume.php" method="post">
            <label for="firstname"></label>
            <select name="firstname" class="font">
                <option value="1" <?php if (isset($_POST['firstname']) and $_POST['firstname'] == 1) echo 'selected' ?>> Snatch</option>
                <option value="3" <?php if (isset($_POST['firstname']) and $_POST['firstname'] == 3) echo 'selected' ?>> Nazca</option>
                <option value="2" <?php if (isset($_POST['firstname']) and $_POST['firstname'] == 2) echo 'selected' ?>> Snow</option>
            </select>
            <div class="box4">
                <input type="submit" id="size3" value="Choisir">
            </div>
        </form>
    </div>
    <?php
    $name = "";
    if ((isset($_POST['firstname']) and $_POST['firstname'] == 3)) {
        $name = "Nazca";
    } else if ((isset($_POST['firstname']) and $_POST['firstname'] == 2)) {
        $name = "Snow";
    } else {
        $name = "Snatch";
    }  ?>

    <header>
        <h1 class="tittle2"><img class="imgSize2" src="./img/icone2.png" alt="Snake logo"> Résumé <?php echo ($name); ?><img class="imgSize2" src="./img/icone.png" alt="Snake logo"></h1>
    </header>

    <div class="box3">
        <form action="Resume.php" method="post">
            <label for="firstname"></label>
            <select name="firstname" class="font">
                <option value="1" <?php if (isset($_POST['firstname']) and $_POST['firstname'] == 1) echo 'selected' ?>> Snatch</option>
                <option value="3" <?php if (isset($_POST['firstname']) and $_POST['firstname'] == 3) echo 'selected' ?>> Nazca</option>
                <option value="2" <?php if (isset($_POST['firstname']) and $_POST['firstname'] == 2) echo 'selected' ?>> Snow</option>
            </select>
            <div class="box4">
                <input type="submit" id="size3" value="Choisir">
            </div>
        </form>


        <div class="border">
            <div class="type2">Ses derniers repas :</div>
            <table>
                <tr>
                    <th>Nom </th>
                    <th>Type de proie</th>
                    <th>Date</th>
                    <th>Supprimer</th>
                </tr>

                <tr class="SizeFont">
                    <?php foreach ($list as $consult) : ?>

                        <td> <?= $consult['Nom']; ?> </td>
                        <td> <?= $consult['Type']; ?></td>
                        <td> <?= $consult['trueDate']; ?></td>
                        <td class="hidden"> <?= $consult['Masse']; ?></td>
                        <td class="tButton">
                            <form action="../Controller/ControllerDelete.php" method="post">
                                <input type="hidden" name="Id_dateRepas" value="<?= $consult['Id_dateRepas'] ?>" />
                                <input type="submit" value="Supprimer" onclick="if (window.confirm('Vous êtes sûr ?')) {return true;} else {return false;}" class="btn btn-danger btn-sm tableBtn" />
                            </form>
                        </td>
                </tr>
            <?php endforeach ?>

            </table>
        </div>


        <!-------------------------------------------------------- PARTIE GRAPHIQUE-------------------------------------------------------------------->
        <div class="border">
            <div class="type2"> Son poids :</div>
        </div>

        <div class="graphSize">
            <canvas id="myChart"></canvas>
        </div>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
                data: {
                    labels: ['23/02/2019', '29/05/2019', '25/07/2019', '11/08/2019', '29/10/19', '11/11/2019'],
                    datasets: [{
                        label: 'Evolution <?php echo($name);  ?>',
                        fill: 'false',
                        spanGaps: 'true',
                        borderColor: 'rgb(16, 14, 161)',
                        data: [792, 801, NaN, NaN, 1060, 1035]
                    }]
                },

                // Configuration options go here
                options: {}
            });
        </script>

</body>

</html>