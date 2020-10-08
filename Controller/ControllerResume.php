<?php
include_once '../Model/Dao/DBconnection.php';
include_once '../Model/Dao/DaoResume.php';
include_once '../Model/ClassDate.php';
/************************************************************************************************************************************************/

 if (isset($_POST['firstname']) && !empty($_POST['firstname'])) {
    $IdSerpent = (intval($_POST['firstname']));
    $list = (new DaoResume())->showOneResume($IdSerpent);

}

