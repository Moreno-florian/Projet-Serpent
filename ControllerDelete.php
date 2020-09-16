<?php
require_once '../Model/Dao/DBconnection.php';
require_once '../Model/Dao/DaoDate.php';
require_once '../Model/ClassDate.php';
require_once '../View/Consultation.php';



if (isset($_POST['test'])) {

    $test = intval($_POST['test']);       // Transform id value from string to integer

    //(new DaoDate())->deleteDate($test);      // Call function deleteStadium() from 'Dao/daoStadium.php'
    var_dump($test);
    // header('Location: ../View/Ajout.phtml');      // Go to page "view/Stadium/stadiumList.phtml"
} else {
    echo ("erreur");
    //header('Location: ../View/Ajout.phtml');    // Go to page "view/Play/homePage"
}
