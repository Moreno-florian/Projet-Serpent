<?php
require_once '../Model/Dao/DBconnection.php';
require_once '../Model/Dao/DaoDate.php';
require_once '../Model/ClassDate.php';


/*$list = (new DaoDate())->addDate();
var_dump($list);*/

/*$list = (new DaoDate())->deleteDate();
var_dump($list);*/


$list = (new DaoDate())->showDate();








/********************************************** */
/*$test= intval($_POST['firstname']); 
//(new DaoDate())->showOneDate($test);
var_dump($test);*/




/************************ Test ADD ************************************** */
/*if (!empty($_POST["date2"]) and empty($_POST["date"])) {
    $NewDate = new Date(null, addslashes(htmlspecialchars(ucfirst($_POST["date"]))), addslashes(htmlspecialchars($_POST["proie"])), addslashes(htmlspecialchars($_POST["firstname"])));
    (new Daodate())->addDate($NewDate);
    header('Location: ../View/Ajout.phtml');
} else {

    echo "<script>alert(\"Veuillez remplir les champs\")</script>";
    header('Refresh: 1; ../View/Ajout.phtml'); //Faire un vrai message d'erreur en javascript
}*/
