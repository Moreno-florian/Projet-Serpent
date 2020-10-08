<?php

class DaoStat
{
    public function showDateStat($Id_snake): array
    {
        $pdo = Dao::getConnection();     // Connection to the DB
        $tab = [];
        $request = $pdo->prepare("SELECT Id_poids, Masse, Date, Id_serpent FROM poids WHERE Id_serpent=?)"); // Prepare the request to be execute

        try {
            $request->execute(array($Id_snake));    // Execute the request


            while ($line = $request->fetch(PDO::FETCH_ASSOC))   // While all datas are not display the loop keeps going
            {
                $line['Id_poids'];
                $line['Masse'];
                $line['Date'];
                $line['Id_serpent'];
                $tab[] = $line;  //  $tab is where $line's containt is stocked
            }

            return $tab;
            $request->closeCurosr();
        } catch (Exception $e) {
            echo ('Erreur : ' . $e->getMessage() . ' ! ');    // Send the error message.		
        }
    }

    public function showWeightStat($Id_snake): array
    {
        $pdo = Dao::getConnection();     // Connection to the DB
        $tab = [];
        $request = $pdo->prepare("SELECT Id_dateRepas, DateRepas, Type, Id_serpent FROM daterepas WHERE Id_serpent=? "); // Prepare the request to be execute

        try {
            $request->execute(array($Id_snake));    // Execute the request


            while ($line = $request->fetch(PDO::FETCH_ASSOC))   // While all datas are not display the loop keeps going
            {
                $line['Id_dateRepas'];
                $line['DateRepas'];
                $line['Type'];
                $line['Id_serpent'];

                $tab[] = $line;  //  $tab is where $line's containt is stocked
            }

            return $tab;
            $request->closeCursor();
        } catch (Exception $e) {
            echo ('Erreur : ' . $e->getMessage() . ' ! ');    // Send the error message.		
        }
    }
}
