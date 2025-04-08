<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupération des données du formulaire
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    // Destinataire de l'email
    $to = "destinataire@example.com"; // Remplacez par l'adresse e-mail réelle du destinataire

    // Corps de l'email
    $email_message = "
    Nom de l'envoyeur : $name
    Email de l'envoyeur : $email
    
    Objet : $subject
    
    Message :
    $message
    ";

    // En-têtes de l'email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envoi de l'email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Email envoyé avec succès.";
    } else {
        echo "Erreur : L'email n'a pas pu être envoyé.";
    }
} else {
    echo "Méthode non valide.";
}
?>
