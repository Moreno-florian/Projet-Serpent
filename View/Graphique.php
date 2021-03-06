<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="library/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <meta name="author" content="Florian Moreno">
    <title>Graphique</title>
</head>

<body>
    <header>
        <h1 class="tittle"><img class="imgSize" src="./img/icone2.png" alt="Snake logo"> Courbes de poids générale <img class="imgSize" src="./img/icone.png" alt="Snake logo"></h1>
    </header>


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
                labels: ['01/12/2013', '16/12/2013', '29/12/2013', '05/02/2014', '18/02/2014', '19/03/2014', '07/04/2014', '02/07/2014', '16/08/2014', '28/09/2014', '10/11/2014', '29/12/2014', '29/03/2015', '12/07/2015', '09/08/2015', '09/09/2015', '16/10/2015', '27/01/2016', '11/03/2016', '02/04/2016', '08/05/2016', '15/06/2016', '07/08/2016', '22/09/2016', '14/10/2016', '13/12/2016', '24/01/2017', '24/02/2017', '13/04/2017', '07/05/2017', '10/11/2017', '20/06/2017', '31/07/2017', '14/08/2017', '09/09/2017', '06/11/2017', '17/01/2018', '23/03/2018', '24/05/2019', '22/07/2019', '25/07/2019', '11/0819', '29/10/19', '11/11/19', '15/04/2020'],
                datasets: [{
                        label: 'Evolution Snow',
                        fill: 'false',
                        spanGaps: 'true',
                        borderColor: 'rgb(255, 99, 132)',
                        data: [364, 347, 390, 460, 493, 553, 596, 810, 953, 968, 1047, 1035, 1048, 1347, 1221, 1269, 1301, 1328, 1465, 1556, 1470, 1423, 1589, 1538, 1520, 1534, 1524, 1472, 1611, 1478, 1634, 1525, 1730, 1586, 1629, 1660, 1633, 1643, 2142, 1808, 1808, 2196, NaN, 2003, 1803]
                    },
                    {
                        label: 'Evolution Snatch',
                        fill: 'false',
                        spanGaps: 'true',
                        borderColor: 'rgb(99, 30, 15)',
                        data: [618, 711, 773, 767, 759, 778, 835, 1002, 1154, 1233, 1253, 1240, 1457, 1647, 1478, 1538, 1525, 1494, 1565, 1519, 1525, 1709, 1828, 1872, 1810, 1790, 1720, 1875, 1715, 1854, 2193, 1942, 1980, 2093, 1950, 1882, 1985, 2242, 2253, 2253, 2408, NaN, 2322, 2045]
                    },
                    {
                        label: 'Evolution Nazca',
                        fill: 'false',
                        spanGaps: 'true',
                        borderColor: 'rgb(16, 14, 161)',
                        data: [NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 792, 801, 1060]
                    }
                ]
            },

            // Configuration options go here
            options: {}
        });
    </script>

</body>

</html>