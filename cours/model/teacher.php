<?php
class teacher {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    // Méthode pour créer un teacher dans la base de données
    public function createteacher($idteacher, $nomteacher, $matiereteacher ,$emailteacher) {
        // Préparation de la requête SQL
        $sql = "INSERT INTO teacher (idteacher, nomteacher, matiereteacher ,emailteacher) 
                VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('isss', $idteacher, $nomteacher,$matiereteacher ,$emailteacher);
        
        // Exécution de la requête
        if ($stmt->execute()) {
            return "teacher ajouté avec succès.";
        } else {
            return "Erreur lors de l'ajout du teacher: " . $stmt->error;
        }
    }

    /***************delete************** */
    public function deleteteacher($idteacher) {
        // Vérifier d'abord si le teacher avec cet identifiant existe dans la base de données
        $check_sql = "SELECT id_teacher FROM teacher WHERE idteacher = ?";
        $check_stmt = $this->conn->prepare($check_sql);
        $check_stmt->bind_param('i', $idteacher);
        $check_stmt->execute();
        $check_stmt->store_result();

        // Si colab existe, procéder à la suppression
        if ($check_stmt->num_rows > 0) {
            // Supprimer le colab de la base de données
            $delete_sql = "DELETE FROM teacher WHERE idteacher = ?";
            $delete_stmt = $this->conn->prepare($delete_sql);
            $delete_stmt->bind_param('i', $idteacher);
            $success = $delete_stmt->execute();
            
            if ($success) {
                return "collab deleted successfully!";
            } else {
                return "Error deleting collab: " . $delete_stmt->error;
            }
        } else {
            // colab n'existe pas dans la base de données
            return "Collab with ID $idteacher not found.";
        }
    }

/**********update*************** */
public function updateteacher($idteacher ,$nomteacher, $matiereteacher, $emailteacher) {
    // Vérifier d'abord si l'événement avec cet identifiant existe dans la base de données
    $check_sql = "SELECT idteacher FROM teacher WHERE idteacher = ?";
    $check_stmt = $this->conn->prepare($check_sql);
    $check_stmt->bind_param('i', $idteacher);
    $check_stmt->execute();
    $check_stmt->store_result();

    // Si le collab existe, procéder à la mise à jour
    if ($check_stmt->num_rows > 0) {
        // Effectuer la mise à jour des données
        $update_sql = "UPDATE teacher SET nomteacher=?, matiereteacher=?, emailteacher=? WHERE idteacher=?";
        $update_stmt = $this->conn->prepare($update_sql);
        $update_stmt->bind_param('ssssii', $nomteacher, $matiereteacher, $emailteacher,$idteacher);
        $success = $update_stmt->execute();
        
        if ($success) {
            
        } else {
            return "Error updating teacher: " . $update_stmt->error;
        }
    } else {
       
        return "part with ID $idteacher not found.";
    }
}



 public function getAllteacher() {
    $teacher = array();

    $sql = "SELECT idteacher , nomteacher, matiere ,email_teacher FROM teacher";
    $result = mysqli_query($this->conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
            $teacher[] = $row;
        }
    }

    return $teacher;
}

}





?>