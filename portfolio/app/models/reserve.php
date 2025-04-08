<?php
// pu  blic function update($POST, $FILES) {
    //     $_SESSION['error'] = "";
    //     $arr['id'] = (int)$POST->id;
    //     $arr['title'] = ucwords($POST->title);
    //     $arr['description'] = ucwords($POST->description);
    //     // show($POST->title);die;
    //     // Validation
    //     if (empty($arr['title'])) {
    //         $_SESSION['error'] .= "Please enter a valid title. <br>";
    //     }
    //     if (empty($arr['description'])) {
    //         $_SESSION['error'] .= "Please enter a valid description. <br>";
    //     }
        
    
    //     $imgs = "";
    
    //     $sizeMax = 20 * 1024 * 1024; // Limite en bytes (20 Mo)
    //     $allowed = ["image/jpeg", "image/jpg", "image/png"];
    //     $folder = "portfolio_uploads/";
    
    //     if (!file_exists($folder)) {
    //         mkdir($folder, 0777, true);
    //     }

    //     $cportf = $this->runQuery("SELECT * FROM portfolios WHERE id=:id",['id'=>$POST->id]);
    
    //     if ($cportf) {
    //         $images = ['image1','image2','image3','image3','image4','image5'];
    //         $old_path = str_replace("index.php", "", $_SERVER['SCRIPT_FILENAME']);

    //         // foreach ($images as $key) {
    //         //     $current_img = $cportf[0]->$key;
    //         //     $img_root = $old_path . $current_img;
    //         //     // Supprimez l'image si elle existe et n'est pas un répertoire
    //         //     if (!empty($imgs) && isset($img_root)) {
    //         //         remove_image($img_root);
    //         //     }                 
    //         // }
    //         foreach ($images as $key) {
    //             $current_img = $cportf[0]->$key; // Image actuelle du portfolio
    //             $img_root = $old_path . $current_img;

    //             if (!empty($current_img) && file_exists($img_root)) {
    //                 remove_image($img_root);
    //             }
    //         }
//     $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
// $limit = 5;
// $offset = ($page - 1) * $limit;
//   
// try {
//     // Connexion à la base de données SQLite
//     $pdo = new PDO("sqlite:example.db");
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     // Définir les paramètres pour la limite
//     $limit = 5; // Nombre maximum de résultats à récupérer
//     $offset = 0; // Commencer à partir du premier résultat

//     // Requête SQL avec LIMIT et OFFSET
//     $sql = "SELECT * FROM votre_table LIMIT :limit OFFSET :offset";
//     $stmt = $pdo->prepare($sql);

//     // Lier les paramètres
//     $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
//     $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);

//     // Exécuter la requête
//     $stmt->execute();

//     // Récupérer les résultats
//     $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//     // Afficher les résultats
//     foreach ($results as $row) {
//         print_r($row);
//     }
// } catch (PDOException $e) {
//     echo "Erreur : " . $e->getMessage();
// }
// 



    //     }

    
    //     foreach ($FILES as $key => $img) {
    //         if ($img['error'] == 0 && in_array($img['type'], $allowed)) {
    //             if ($img['size'] < $sizeMax) {
    //                 // Générer un nom unique pour chaque image
    //                 $ext = pathinfo($img['name'], PATHINFO_EXTENSION); // Récupérer l'extension
    //                 $uniqueName = uniqid("img_", true) . "." . $ext;    // Générer un nouveau nom
    //                 $dest = $folder . $uniqueName;
    
    //                 // Déplacer le fichier vers le dossier de destination
    //                 move_uploaded_file($img['tmp_name'], $dest);
    
    //                 // Assigner le chemin à l'élément approprié
    //                 $arr[$key] = $dest;
    //                 $imgs .= "," . $key . "=:" .$key;
    //             } else {
    //                 $_SESSION['error'] .= $key . " is too large. ";
    //             }
    //         }
    //     }
    
    //     if (!isset($_SESSION['error']) || $_SESSION['error'] == "") {
    //         $sql = "UPDATE portfolios SET title=:title, description=:description $imgs WHERE id=:id"; 
    //         // show($imgs);die;
    //         return $this->runQuery($sql, $arr);
    //     }
    // }
    
    // public function update($POST, $FILES) {
    //     $_SESSION['error'] = "";
    //     $arr['id'] = (int)$POST->id;
    //     $arr['title'] = ucwords($POST->title);
    //     $arr['description'] = ucwords($POST->description);

    //     // Validation des entrées
    //     if (empty($arr['title'])) {
    //         $_SESSION['error'] .= "Please enter a valid title. <br>";
    //     }
    //     if (empty($arr['description'])) {
    //         $_SESSION['error'] .= "Please enter a valid description. <br>";
    //     }

    //     $imgs = "";

    //     // Configuration pour le téléchargement des images
    //     $sizeMax = 20 * 1024 * 1024; // Limite en bytes (20 Mo)
    //     $allowed = ["image/jpeg", "image/jpg", "image/png"];
    //     $folder = "portfolio_uploads/";

    //     if (!file_exists($folder)) {
    //         mkdir($folder, 0777, true);
    //     }

    //     // Récupérer les données existantes du portfolio
    //     $cportf = $this->runQuery("SELECT * FROM portfolios WHERE id=:id", ['id' => $POST->id]);

    //     // Supprimer les anciennes images si elles existent
    //     if ($cportf) {
    //         $images = ['image1', 'image2', 'image3', 'image4', 'image5']; // Correction du tableau
    //         $old_path = str_replace("index.php", "", $_SERVER['SCRIPT_FILENAME']);

    //         foreach ($images as $key) {
    //             $current_img = $cportf[0]->$key;
    //             $img_root = $old_path . $current_img;

    //             // Supprimer uniquement si l'image existe
    //             if (!empty($current_img) && file_exists($img_root)) {
    //                 remove_image($img_root);
    //             }
    //         }
    //     }

    //     // Gestion du téléchargement des nouvelles images
    //     foreach ($FILES as $key => $img) {
    //         if ($img['error'] == 0 && in_array($img['type'], $allowed)) {
    //             if ($img['size'] < $sizeMax) {
    //                 // Générer un nom unique pour chaque image
    //                 $ext = pathinfo($img['name'], PATHINFO_EXTENSION);
    //                 $uniqueName = uniqid("img_", true) . "." . $ext;
    //                 $dest = $folder . $uniqueName;

    //                 // Déplacer le fichier vers le dossier de destination
    //                 if (move_uploaded_file($img['tmp_name'], $dest)) {
    //                     $arr[$key] = $dest; // Assigner le chemin correctement
    //                     $imgs .= ", " . $key . "=:" . $key;
    //                 } else {
    //                     $_SESSION['error'] .= "Failed to upload image: " . $key . ".<br>";
    //                 }
    //             } else {
    //                 $_SESSION['error'] .= $key . " is too large. <br>";
    //             }
    //         }
    //     }

    //     // Mise à jour des données dans la base de données si aucune erreur n'existe
    //     if (!isset($_SESSION['error']) || $_SESSION['error'] == "") {
    //         $sql = "UPDATE portfolios SET title=:title, description=:description $imgs WHERE id=:id"; 
    //         return $this->runQuery($sql, $arr);
    //     } else {
    //         return false; // Retourne false en cas d'erreurs
    //     }
    // }

    function update($POST, $FILES) {
        $_SESSION['error'] = "";
        $arr['id'] = (int)$POST->id;
        $arr['title'] = ucwords($POST->title);
        $arr['description'] = ucwords($POST->description);

        // Validation des entrées
        if (empty($arr['title'])) {
            $_SESSION['error'] .= "Please enter a valid title. <br>";
        }
        if (empty($arr['description'])) {
            $_SESSION['error'] .= "Please enter a valid description. <br>";
        }

        $imgs = "";

        $sizeMax = 20 * 1024 * 1024; // Limite en bytes (20 Mo)
        $allowed = ["image/jpeg", "image/jpg", "image/png"];
        $folder = "portfolio_uploads/";

        if (!file_exists($folder)) {
            mkdir($folder, 0777, true);
        }

        // Récupérer les données existantes du portfolio
        $cportf = $this->runQuery("SELECT * FROM portfolios WHERE id=:id", ['id' => $POST->id]);

        // Gestion des nouvelles images
        foreach ($FILES as $key => $img) {
            if ($img['error'] == 0 && in_array($img['type'], $allowed)) {
                if ($img['size'] < $sizeMax) {
                    // Générer un nom unique pour chaque image
                    $ext = pathinfo($img['name'], PATHINFO_EXTENSION);
                    $uniqueName = uniqid("img_", true) . "." . $ext;
                    $dest = $folder . $uniqueName;

                    // Déplacer le fichier vers le dossier de destination
                    if (move_uploaded_file($img['tmp_name'], $dest)) {
                        // Supprimer l'ancienne image associée à cette clé (si elle existe)
                        $current_img = $cportf[0]->$key; // Récupérer l'image actuelle
                        $img_root = str_replace("index.php", "", $_SERVER['SCRIPT_FILENAME']) . $current_img;

                        if (!empty($current_img) && file_exists($img_root)) {
                            remove_image($img_root);
                        }

                        // Assigner le chemin de la nouvelle image
                        $arr[$key] = $dest;
                        $imgs .= ", " . $key . "=:" . $key;
                    } else {
                        $_SESSION['error'] .= "Failed to upload image: " . $key . ".<br>";
                    }
                } else {
                    $_SESSION['error'] .= $key . " is too large. <br>";
                }
            }
        }

        // Mise à jour des données dans la base de données
        if (!isset($_SESSION['error']) || $_SESSION['error'] == "") {
            $sql = "UPDATE portfolios SET title=:title, description=:description $imgs WHERE id=:id"; 
            return $this->runQuery($sql, $arr);
        } else {
            return false;
        }
    }

    ?>