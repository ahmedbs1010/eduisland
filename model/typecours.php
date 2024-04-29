<?php
class Typecours {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }
/************insertion******************* */
    public function createtypecours($idlesson, $emailuser, $type) {
        $sql = "INSERT INTO typecours (idlesson, emailuser, type) 
                VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
    $stmt->bind_param('iss', $idlesson, $emailuser, $type);
        
        return $stmt->execute();
    }
    

    
    
/**********update*************** */

    public function updatetypecours($idtypecours, $emailuser, $type) {
        // Vérifier d'abord si l'événement avec cet idtypeentifiant existe dans la base de données
        $check_sql = "SELECT idtypecours FROM typecours WHERE idtypecours = ?";
        $check_stmt = $this->conn->prepare($check_sql);
        $check_stmt->bind_param('i', $idtypecours);
        $check_stmt->execute();
        $check_stmt->store_result();

        // Si la lesson existe, procéder à la mise à jour
        if ($check_stmt->num_rows > 0) {
            // Effectuer la mise à jour des données
            $update_sql = "UPDATE typecours SET emailuser=?, type=? WHERE idtypecours=?";
            $update_stmt = $this->conn->prepare($update_sql);
            $update_stmt->bind_param('ssi', $emailuser, $type,$idtypecours);
            $success = $update_stmt->execute();
            
            if ($success) {
                
            } else {
                return "Error updating event: " . $update_stmt->error;
            }
        } else {
           
            return "typecours with idtype $idtypecours not found.";
        }
    }
    
    /***************delete************** */
    public function deletetypecours($idtypecours) {
        // Vérifier d'abord si le colab avec cet idtypeentifiant existe dans la base de données
        $check_sql = "SELECT idtypecours FROM typecours WHERE idtypecours = ?";
        $check_stmt = $this->conn->prepare($check_sql);
        $check_stmt->bind_param('i', $idtypecours);
        $check_stmt->execute();
        $check_stmt->store_result();

        // Si typecours existe, procéder à la suppression
        if ($check_stmt->num_rows > 0) {
            // Supprimer le typecours de la base de données
            $delete_sql = "DELETE FROM typecours WHERE idtypecours = ?";
            $delete_stmt = $this->conn->prepare($delete_sql);
            $delete_stmt->bind_param('i', $idtypecours);
            $success = $delete_stmt->execute();
            
            if ($success) {
                return "typecours deleted successfully!";
            } else {
                return "Error deleting typecours: " . $delete_stmt->error;
            }
        } else {
            // colab n'existe pas dans la base de données
            return "typecours with idtype $idtypecours not found.";
        }
    }

    /*************affichage*************** */

    public function getAlltypecours() {
        $typecours = array();

        $sql = "SELECT idtypecours , idlesson, emailuser, type FROM typecours";
        $result = mysqli_query($this->conn, $sql);

        if(mysqli_num_rows($result) > 0) {
            
            while($row = mysqli_fetch_assoc($result)) {
                $typecours[] = $row;
            }
        }

        return $typecours;
    }
    
    
}


?>