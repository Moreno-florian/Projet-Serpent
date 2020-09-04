<?php
require_once '../Model/Dao/DBconnection.php';
require_once '../Model/Dao/DaoDate.php';

/*$list = (new DaoDate())->addDate();
var_dump($list);*/

/*$list = (new DaoDate())->deleteDate();
var_dump($list);*/

$list = (new DaoDate())->showDate();
var_dump($list);

