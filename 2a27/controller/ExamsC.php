<?php

require '../config.php';

class ExamsC
{

    public function listExams()
    {
        $sql = "SELECT * FROM exams";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteExams($ide)
    {
        $sql = "DELETE FROM exams WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $ide);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }


    function addExams($exams)
    {
        $sql = "INSERT INTO exams  
        VALUES (NULL, :typee,:langue, :nom,:niveau)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'typee' => $exams->getType(),
                'langue' => $exams->getLangue(),
                'nom' => $exams->getNom(),
                'niveau' => $exams->getNiveau(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    function showExams($id)
    {
        $sql = "SELECT * from exams where id = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $exams = $query->fetch();
            return $exams;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    function updateExams($exams, $id)
    {   
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE exams SET 
                    typee = :typee, 
                    langue = :langue, 
                    nom = :nom, 
                    niveau = :niveau
                WHERE id= :id'
            );
            
            $query->execute([
                'id' => $id,
                'typee' => $exams->getType(),
                'langue' => $exams->getLangue(),
                'nom' => $exams->getNom(),
                'niveau' => $exams->getNiveau(),
            ]);
            
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}