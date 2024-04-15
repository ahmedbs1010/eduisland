

<?php

require '../config.php';

class reclamsC
{

    public function listreclam()
    {
        $sql = "SELECT * FROM reclam";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deletereclam($id)
    {
        $sql = "DELETE FROM reclam WHERE idR = :idR";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idR', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }


    function addreclam($reclams)
    {
        $sql = "INSERT INTO reclam  
        VALUES (NULL, :idU,:subjectt, :descriptionn,:feedback)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'idR' => $reclams->getIdR(),
                'subjectt' => $reclams->getSubject(),
                'descriptionn' => $reclams->getDescription(),
                'feedback' => $reclams->getFeedback(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    function showreclam($idR)
    {
        $sql = "SELECT * from reclam where idR = $idR";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $reclams = $query->fetch();
            return $reclams;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

function updatereclam($reclams, $idR, $idU)
{   
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
            'UPDATE reclam SET 
                idU = :idU, 
                subjectt = :subjectt, 
                descriptionn = :descriptionn, 
                feedback = :feedback
            WHERE idR= :idR'
        );
        
        $query->execute([
            'idR' => $idR,
            'idU' => $idU,
            'subjectt' => $reclams->getSubject(),
            'descriptionn' => $reclams->getDescription(),
            'feedback' => $reclams->getFeedback(),
        ]);
        
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        // Handle exceptions properly, for example:
        echo "Error updating record: " . $e->getMessage();
    }
}



}