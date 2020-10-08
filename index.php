<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./View/library/style.css">
    <meta name="author" content="Florian Moreno">
    <title>Consultation générale</title>
</head>

<body>
    <div id="background">
        <div class="box5">
            <form action="./View/Ajout.php" method="post">
                <label for="firstname"></label>
                <div class="box6">
                    <input type="submit" id="size4" value="Ajout">
                </div>
            </form>


            <form action="View/Consultation.php" method="post">
                <label for="firstname"></label>
                <select name="firstname" class="hidden">
                    <option value="0" <?php if (isset($_POST['firstname'])) ?>>Tous</option>
                </select>
                <div class="box6">
                    <input type="submit" id="size4" value="Consultation">
                </div>
            </form>


            <form action="View/Resume.php" method="post">
                <label for="firstname"></label>
                <select name="firstname" class="hidden">
                    <option value="3" <?php if (isset($_POST['firstname'])) ?>>Nazca</option>
                </select>
                <div class="box6">
                    <input type="submit" id="size4" value="Resume">
                </div>
            </form>


            <form action="./View/Graphique.php" method="post">
                <label for="firstname"></label>
                <div class="box6">
                    <input type="submit" id="size4" value="Graphique">
                </div>
            </form>
        </div>

        <h1 id="welcome">BIENVENUE</h1>
    </div>
</body>

</html>