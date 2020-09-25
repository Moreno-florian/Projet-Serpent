<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./library/style.css">
    <meta name="author" content="Florian Moreno">
    <title>Ajout Repas/Poids</title>
</head>

<body>

    <header>
        <h1><img src="./img/serpentlogo2.png" alt="Snake logo"> Ajouter <img src="./img/serpentlogo.png" alt="Snake logo"></h1>
    </header>

    <form action="../Controller/ControllerAddWeight&Date.php" method="post">
        <div class="box3">
            <label for="firstname" class="firstname"></label>
            <select name="firstname" class="font2">
                <option value=1 <?php if (isset($_POST['firstname']) and $_POST['firstname'] == 1)  ?>>Snatch</option>
                <option value=3 selected <?php if (isset($_POST['firstname']) and $_POST['firstname'] == 3) ?>>Nazca</option>
                <option value=2 <?php if (isset($_POST['firstname']) and $_POST['firstname'] == 2)  ?>>Snow</option>
            </select>
        </div>


        <div class="type">Ajouter un repas :</div>
        <div id="container">
            <div class="box">
                <label for="date"> Date : </label>
                <input type="date" name="date" id="date">
            </div>

            <div class="box">
                <label for="proie"> Type : </label>
                <select name="proie" class="font">
                    <option value="Rat adulte">Rat adulte</option>
                    <option value="Rat moyen" selected>Rat moyen</option>
                    <option value="Souris">Souris</option>
                </select>
            </div>
            <div class="box">
                <input type="submit" id="size" value="Ok">
            </div>
        </div>

        <div class="type">Ajouter un poids :</div>

        <div id="container">


            <div class="box">
                <label for="date2"> Date : </label>
                <input type="date" name="date2" id="date2">
            </div>
            <div class="bo">
                <label for="masse"> Poids : </label>
                <input type="text" name="masse" id="masse">
            </div>
            <div class="Gr">Gr</div>
            <input type="submit" id="size2" value="Ok">
        </div>
    </form>



</body>

</html>