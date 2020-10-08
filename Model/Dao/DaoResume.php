<?php
class DaoResume
{

    public function showOneResume($IdSerpent)
    {
        $pdo = Dao::getConnection();     // Connection to the DB
        $request = $pdo->prepare("SELECT Nom,Type,Id_dateRepas, DATE_FORMAT(DateRepas, \"%d-%m-%Y\") as trueDate, Masse FROM daterepas INNER JOIN poids ON daterepas.Id_serpent=poids.Id_serpent INNER JOIN serpent ON daterepas.Id_serpent=serpent.Id_serpent WHERE serpent.Id_serpent=?");
        try {
            $request->execute(array($IdSerpent));    // Execute the request
            while ($line = $request->fetch(PDO::FETCH_ASSOC))   // While all datas are not display the loop keeps going
            {
                $line['Nom'];
                $line['Type'];
                $line['Id_dateRepas'];
                $line['trueDate'];
                $line['Masse'];
                $tab[] = $line;  //  $tab is where $line's containt is stocked
            }
            return $tab;
            $request->closeCursor();
        } catch (Exception $e) {
            echo ('Erreur : ' . $e->getMessage() . ' ! ');    // Send the error message.
        }
    }
}
