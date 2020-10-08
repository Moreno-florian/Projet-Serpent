<?php

class DaoDate
{

    public function addDate($Date): void
    {
        $pdo = Dao::getConnection();     // Connection to the DB
        $request = $pdo->prepare("INSERT INTO daterepas (Id_dateRepas,DateRepas,Type,Id_serpent) VALUES (?,?,?,?)");  // Prepare the request to be execute
        try {
            $request->execute(array($Date->get_Id_dateRepas(), $Date->get_DateRepas(), $Date->get_Type(), $Date->get_Id_serpent()));    // Execute the request
        } catch (Exception $e) {
            echo ('Erreur : ' . $e->getMessage() . ' ! ');    // Send the error message.
        }
    }

    public function deleteDate($IdLunch): void
    {
        $pdo = Dao::getConnection();     // Connection to the DB
        $request = $pdo->prepare("DELETE FROM daterepas WHERE Id_dateRepas=?");  // Prepare the request to be execute
        try {
            $request->execute(array($IdLunch));    // Execute the request

        } catch (Exception $e) {
            echo ('Erreur : ' . $e->getMessage() . ' ! ');    // Send the error message.
        }
    }
    public function showDate(): array
    {
        $pdo = Dao::getConnection();     // Connection to the DB
        $request = $pdo->prepare("SELECT DATE_FORMAT(DateRepas, \"%d-%m-%Y\") as trueDate, Type, Id_dateRepas, Nom FROM daterepas INNER JOIN serpent ON dateRepas.Id_serpent=serpent.Id_serpent WHERE dateRepas.Id_serpent=? OR dateRepas.Id_serpent=? OR dateRepas.Id_serpent=? ORDER BY dateRepas DESC LIMIT 5");  // Prepare the request to be execute
        try {
            $request->execute(array(1, 2, 3));    // Execute the request
            while ($line = $request->fetch(PDO::FETCH_ASSOC))   // While all datas are not display the loop keeps going
            {
                $line['trueDate'];
                $line['Type'];
                $line['Id_dateRepas'];
                $line['Nom'];
                $tab[] = $line;  //  $tab is where $line's containt is stocked
            }
            return $tab;
            $request->closeCursor();
        } catch (Exception $e) {
            echo ('Erreur : ' . $e->getMessage() . ' ! ');    // Send the error message.
        }
    }
    public function showOneDate($Id_snake): array
    {
        $pdo = Dao::getConnection(); // Connection to the DB  
        $request = $pdo->prepare("SELECT DATE_FORMAT(DateRepas, \"%d-%m-%Y\") as trueDate, Type, Id_dateRepas, Nom FROM dateRepas INNER JOIN serpent ON dateRepas.Id_serpent=serpent.Id_serpent WHERE dateRepas.Id_serpent=? ORDER BY dateRepas DESC LIMIT 5");  // Prepare the request to be execute
        try {
            $request->execute(array($Id_snake));    // Execute the request
            while ($line = $request->fetch(PDO::FETCH_ASSOC))   // While all datas are not display the loop keeps going
            {
                $line['trueDate'];
                $line['Type'];
                $line['Id_dateRepas'];
                $line['Nom'];
                $tab[] = $line;   //  $tab is where $line's containt is stocked
            }
            return $tab;
            $request->closeCursor();
        } catch (Exception $e) {
            echo ('Erreur : ' . $e->getMessage() . ' ! ');    // Send the error message.
        }
    }
}
