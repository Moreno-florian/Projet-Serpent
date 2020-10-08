<?php
include_once '../Model/Dao/DaoDate.php';
include_once '../Model/Dao/DBconnection.php';
include_once '../Model/ClassDate.php';

/************************************************************************************************************************************************/

if (isset($_POST['Id_dateRepas']) && !empty($_POST['Id_dateRepas'])) {
    $IdLunch = (intval($_POST['Id_dateRepas']));
    (new DaoDate())->deleteDate($IdLunch);

    header('Location: ../View/Consultation.php');
} else {
    echo ("Erreur lors de la suppression");
}
