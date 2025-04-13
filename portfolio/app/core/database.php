<?php 

class Database {
    // Méthode privée pour établir la connexion à la base de données
    private function connect() {
        $dbPath = "/var/www/html/portfolio.db"; // Chemin absolu vers la base de données

        // Vérifier si le fichier de la base de données existe
        if (!file_exists($dbPath)) {
            die("Erreur : Le fichier portfolio.db est introuvable à l'emplacement spécifié.");
        }

        try {
            $con = new PDO("sqlite:" . $dbPath);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Activer les erreurs
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }

        return $con;
    }

    // Méthode publique pour exécuter des requêtes SQL
    public function runQuery($query, $data = [], $data_type = "object") {
        $conn = $this->connect();
        $stm = $conn->prepare($query);

        if ($stm) {
            $check = $stm->execute($data);
            if ($check) {
                if ($data_type === "object") {
                    $data = $stm->fetchAll(PDO::FETCH_OBJ);
                } else {
                    $data = $stm->fetchAll(PDO::FETCH_ASSOC);
                }

                if (is_array($data) && count($data) > 0) {
                    return $data;
                }
            }
        }

        return true; // Retourne true si aucune donnée n'est trouvée
    }
}
