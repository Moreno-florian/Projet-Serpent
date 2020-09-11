<?php
require_once '../Model/Dao/DBconnection.php';
require_once '../Model/Dao/DaoWeight.php';
require_once '../Model/ClassWeight.php';


/*$list = (new DaoWeight())->addWeight();
var_dump($list);*/

/*$list = (new DaoWeight())->deleteWeight();
var_dump($list);*/

//$list = (new DaoWeight())->showWeight();
/********************************************TEST ADD********************* */
if (!empty($_POST["masse"]) and !empty($_POST["date"])) {
    $newWeight = new Weight(null, addslashes(htmlspecialchars(ucfirst($_POST["masse"]))), addslashes(htmlspecialchars($_POST["date"])), 3);    // New Weight object with parameters edited in a form from "view/Weight/formAddWeight.phtml"
    (new DaoWeight())->addWeight($newWeight);    // Call function addWeight() from "Dao/daoWeight.php"
    header('Location: ../View/Ajout.phtml');
} else {
    echo "<script>alert(\"Veuillez remplir les champs\")</script>";
    header('Refresh: 1; ../View/Ajout.phtml'); //Faire un vrai message d'erreur en javascript
}
