<?php
class cours {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }
/************insertion******************* */
    public function createcours($idlesson, $matiere, $niveau, $nbheure, $idt) {
        $sql = "INSERT INTO lessons (idlesson, matiere, niveau, nbheure, idt) 
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
    $stmt->bind_param('isssi', $idlesson, $matiere, $niveau, $nbheure, $idt);
        
        return $stmt->execute();
    }
    

    
    
/**********update*************** */
    public function updatecours($idlesson, $matiere, $niveau, $nbheure, $idt) {
        // Vérifier d'abord si l'événement avec cet identifiant existe dans la base de données
        $check_sql = "SELECT idlesson FROM lessons WHERE idlesson = ?";
        $check_stmt = $this->conn->prepare($check_sql);
        $check_stmt->bind_param('i', $idlesson);
        $check_stmt->execute();
        $check_stmt->store_result();

        // Si la lesson existe, procéder à la mise à jour
        if ($check_stmt->num_rows > 0) {
            // Effectuer la mise à jour des données
            $update_sql = "UPDATE lessons SET matiere=?, niveau=?, nbheure=?, idt=?WHERE idlesson=?";
            $update_stmt = $this->conn->prepare($update_sql);
            $update_stmt->bind_param('ssssssi', $matiere, $niveau, $nbheure, $idt, $idlesson);
            $success = $update_stmt->execute();
            
            if ($success) {
                
            } else {
                return "Error updating event: " . $update_stmt->error;
            }
        } else {
           
            return "cours with ID $idlesson not found.";
        }
    }
    
    /***************delete************** */
    public function deleteCours($idlesson) {
        // Vérifier d'abord si le colab avec cet identifiant existe dans la base de données
        $check_sql = "SELECT idlesson FROM lessons WHERE idlesson = ?";
        $check_stmt = $this->conn->prepare($check_sql);
        $check_stmt->bind_param('i', $idlesson);
        $check_stmt->execute();
        $check_stmt->store_result();

        // Si cours existe, procéder à la suppression
        if ($check_stmt->num_rows > 0) {
            // Supprimer le cours de la base de données
            $delete_sql = "DELETE FROM lessons WHERE idlesson = ?";
            $delete_stmt = $this->conn->prepare($delete_sql);
            $delete_stmt->bind_param('i', $idlesson);
            $success = $delete_stmt->execute();
            
            if ($success) {
                return "cours deleted successfully!";
            } else {
                return "Error deleting cours: " . $delete_stmt->error;
            }
        } else {
            // colab n'existe pas dans la base de données
            return "cours with ID $idlesson not found.";
        }
    }

    /*************affichage*************** */

    public function getAllcours() {
        $lessons = array();

        $sql = "SELECT idlesson, matiere, nbheure, niveau, idt FROM lessons";
        $result = mysqli_query($this->conn, $sql);

        if(mysqli_num_rows($result) > 0) {
            
            while($row = mysqli_fetch_assoc($result)) {
                $collabs[] = $row;
            }
        }

        return $lessons;
    }
    
    
}


?>