<?php

class Database {
    private $dbPath = "/var/www/html/public/portfolio.db"; // Chemin absolu vers la base de données

    private function connect() {
        // Vérifier si la base de données existe
        if (!file_exists($this->dbPath)) {
            $this->initializeDatabase(); // Créer la base de données et les tables
        }

        try {
            $con = new PDO("sqlite:" . $this->dbPath);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }

        return $con;
    }

    private function initializeDatabase() {
        try {
            $con = new PDO("sqlite:" . $this->dbPath);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Créer les tables si elles n'existent pas
            $con->exec("
                CREATE TABLE IF NOT EXISTS users (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    name TEXT NOT NULL,
                    password TEXT NOT NULL,
                    email TEXT NOT NULL,
                    role TEXT NOT NULL
                );

                CREATE TABLE IF NOT EXISTS abouts (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    texts TEXT NOT NULL
                );

                CREATE TABLE IF NOT EXISTS blog_comments (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    firstname TEXT NOT NULL,
                    comment TEXT NOT NULL,
                    blog_id INTEGER NOT NULL
                );

                CREATE TABLE IF NOT EXISTS blogs (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    title TEXT NOT NULL,
                    descriptions TEXT NOT NULL,
                    image BLOB NOT NULL,
                    date TEXT NOT NULL
                );

                CREATE TABLE IF NOT EXISTS portfolio_comments (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    name TEXT NOT NULL,
                    message TEXT NOT NULL,
                    portfolio_id INTEGER NOT NULL
                );

                CREATE TABLE IF NOT EXISTS portfolios (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    title TEXT NOT NULL,
                    description TEXT NOT NULL,
                    image1 BLOB NOT NULL,
                    image2 BLOB NOT NULL,
                    image3 BLOB NOT NULL,
                    image4 BLOB NOT NULL,
                    image5 BLOB NOT NULL
                );
            ");
            echo "Base de données et tables créées avec succès.";
        } catch (PDOException $e) {
            die("Erreur lors de la création de la base de données : " . $e->getMessage());
        }
    }

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

        return true;
    }
}
