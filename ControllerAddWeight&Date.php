<?php
require_once '../Model/Dao/DBconnection.php';
require_once '../Model/Dao/DaoWeight.php';
require_once '../Model/ClassWeight.php';
/*********************************************************************************************************************************************************/
require_once '../Model/Dao/DBconnection.php';
require_once '../Model/Dao/DaoDate.php';
require_once '../Model/ClassDate.php';

/******************************************************************************************************************************************************** */
if (!empty($_POST["masse"]) and !empty($_POST["date2"]) and empty($_POST["date"])) {

    $newWeight = new Weight(null, addslashes(htmlspecialchars(ucfirst($_POST["masse"]))), addslashes(htmlspecialchars($_POST["date2"])), addslashes(htmlspecialchars(intval($_POST["firstname"]))));    // New Weight object with parameters edited in a form from "view/Weight/formAddWeight.php"F
    (new DaoWeight())->addWeight($newWeight);    // Call function addWeight() from "Dao/daoWeight.php"
    header('Location: ../View/Ajout.php');
} else if (!empty($_POST["date"]) and empty($_POST["date2"]) and empty($_POST["masse"])) {

    $NewDate = new Date(null, addslashes(htmlspecialchars(ucfirst($_POST["date"]))), addslashes(htmlspecialchars($_POST["proie"])), addslashes(htmlspecialchars(intval($_POST["firstname"]))));
    (new Daodate())->addDate($NewDate);
    header('Location: ../View/Ajout.php');
} else {

    echo "<script>alert(\"Veuillez remplir les champs\")</script>";
    header('Refresh: 1; ../View/Ajout.php'); //Faire un vrai message d'erreur en javascript
}
