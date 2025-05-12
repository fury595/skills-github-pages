<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "agence.sapphirecircle@gmail.com";
    $subject = "Nouvelle candidature - Sapphire Circle";
    $body = "Nom : $nom\nEmail : $email\n\nMessage :\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        // Redirection vers la page de remerciement
        header("Location: merci.html");
        exit();
    } else {
        echo "<h2>Erreur : votre message n’a pas pu être envoyé.</h2>";
    }
}
?>