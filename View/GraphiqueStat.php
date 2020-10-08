<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Serpents - Graphique de poids</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script type="text/javascript" src="js/graph.js"></script>
</head>

<body>

    <main>

        <div id="mystat">
            <input type="hidden" id="goal" value="<?php echo $WeightStat; ?>">
            <input type="hidden" id="pass" value="<?php echo $DateStat; ?>">
            <div class="chart-container">
                <canvas class="Statistiques" id="statsWeightDate" width="700" height="600"> </canvas>
            </div>
        </div>
    </main>

</body>

</html>