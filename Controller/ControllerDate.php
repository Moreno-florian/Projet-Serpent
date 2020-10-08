<?php

include_once '../Model/Dao/DBconnection.php';
include_once '../Model/Dao/DaoDate.php';
include_once '../Model/ClassDate.php';
/*********************************************************************************************************************************************************/

if ((isset($_POST['firstname']) && empty($_POST['firstname'])) || (!isset($_POST['firstname']))) {

    $list = (new DaoDate())->showDate();
} else if (isset($_POST['firstname']) && !empty($_POST['firstname'])) {
    $Id = (intval($_POST['firstname']));
    $list = (new DaoDate())->showOneDate($Id);
}
