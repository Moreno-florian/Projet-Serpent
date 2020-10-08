<?php

/*********************************************************** DAO **************************************************************/
include_once '../Model/Dao/DaoStat.php'; // To call DaoStat class code.



if (isset($_POST['firstname'])) {
    $list = (new DaoStat())->showWeightStat($_POST['firstname']);    // Call function showGoal() from "Dao/daoStat.php"
    foreach ($list as $stat) {
        $WeightStat = $stat['poids'];
    }

    $list = (new DaoStat())->showDateStat($_POST['firstname']);    // Call function showPass() from "Dao/daoStat.php"
    foreach ($list as $stat) {
        $DateStat = $stat['total passes'];
    }
} else {

    $list = (new DaoStat())->showWeightStat(date("Y") . "/" . (date("Y") + 1));    // Call function showGoal() from "Dao/daoStat.php"
    foreach ($list as $stat) {
        $WeightStat = $stat['total buts'];
    }

    $list = (new DaoStat())->showDateStat(date("Y") . "/" . (date("Y") + 1));    // Call function showPass() from "Dao/daoStat.php"
    foreach ($list as $stat) {
        $DateStat = $stat['total passes'];
    }
}

if (!isset($DateStat)) {
    $DateStat = 0;
}
if (!isset($WeightStat)) {
    $WeightStat = 0;
}

include_once "../View/GraphiqueStat.php";       // Go to page "view/Stadium/statList.phtml"
