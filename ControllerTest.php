<?php
require_once '../Model/Dao/DBconnection.php';
require_once '../Model/Dao/DaoDate.php';
require_once '../Model/ClassDate.php';
require_once '../View/Consultation.php';



$idSnake = intval($_POST['firstname']);       // Transform id value from string to integer
(new DaoDate())->deleteDate($idSnake); 
header('Location: ../View/Consultation.php');
