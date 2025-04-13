<?php

class Controller {

    // Charger une vue avec gestion des erreurs
    public function load_view($filename, $data = []) {
        // Extraire les données du tableau pour les rendre disponibles dans la vue
        if (is_array($data)) {
            extract($data);
        }

        // Construire le chemin vers la vue
        $viewFile = "../app/views/" . strtolower($filename) . ".php";

        // Inclure la vue si elle existe, sinon inclure une page 404
        if (file_exists($viewFile)) {
            include $viewFile;
        } else {
            include "../app/views/404.php";
        }
    }

    // Charger un modèle avec gestion des erreurs
    public function load_model($model) {
        // Construire le chemin vers le fichier du modèle
        $modelFile = "../app/models/" . ucfirst($model) . ".php";

        // Vérifier si le fichier du modèle existe
        if (file_exists($modelFile)) {
            require_once $modelFile;

            // Vérifier si la classe correspondante existe
            if (class_exists($model)) {
                return new $model(); // Retourner une instance de la classe du modèle
            } else {
                // Gestion d'erreur si la classe n'existe pas
                die("Erreur : La classe modèle '$model' n'existe pas dans $modelFile.");
            }
        }

        // Gestion d'erreur si le fichier n'existe pas
        die("Erreur : Le fichier modèle '$modelFile' est introuvable.");
    }
}
