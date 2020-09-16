<?php
require_once '../Model/Dao/DBconnection.php';
require_once '../Model/Dao/DaoWeight.php';
require_once '../Model/ClassWeight.php';
/*********************************************************************************************************************************************************/
require_once '../Model/Dao/DBconnection.php';
require_once '../Model/Dao/DaoDate.php';
require_once '../Model/ClassDate.php';
/*********************************************************************************************************************************************************/
switch (key($_GET)) {
    case 'ControllerTest':
        $list = (new DaoDate())->showDate();
        include_once "../View/Ajout.phtml";
        break;

    case 'brique':
        if ($_POST['firstname'] == 2) {
            echo ("Firstname=2");
        } else {
            echo ("Ok, on est dans la branche de firstname =2");
        }

        break;
}
