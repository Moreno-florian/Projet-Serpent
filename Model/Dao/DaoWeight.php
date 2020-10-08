<?php

class DaoWeight
{

    public function addWeight($test): void
    {
        $pdo = Dao::getConnection();     // Connection to the DB
        $request = $pdo->prepare("INSERT INTO poids (Id_poids,Masse,Date,Id_serpent) VALUES (?,?,?,?)");  // Prepare the request to be execute
        try {
            $request->execute(array(null, $test->get_Weight(), $test->get_Date(),  $test->get_Id_serpent()));    // Execute the request
        } catch (Exception $e) {
            echo ('Erreur : ' . $e->getMessage() . ' ! ');    // Send the error message.
        }
    }

    public function deleteWeight(): void
    {
        $pdo = Dao::getConnection();     // Connection to the DB
        $request = $pdo->prepare("DELETE FROM poids WHERE Id_serpent=?");  // Prepare the request to be execute
        try {
            $request->execute(array(3));    // Execute the request
        } catch (Exception $e) {
            echo ('Erreur : ' . $e->getMessage() . ' ! ');    // Send the error message.
        }
    }
    public function showWeight(): array
    {
        $pdo = Dao::getConnection();     // Connection to the DB
        $request = $pdo->prepare("SELECT Masse FROM poids WHERE Id_serpent=?");  // Prepare the request to be execute
        try {
            $request->execute(array(3));    // Execute the request
            while ($line = $request->fetch(PDO::FETCH_ASSOC))   // While all datas are not display the loop keeps going
            {
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
