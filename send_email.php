<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nume = htmlspecialchars($_POST['nume']);
    $email = htmlspecialchars($_POST['email']);
    $mesaj = htmlspecialchars($_POST['mesaj']);

    // Adresa ta de e-mail
    $to = "hrisculiviuandrei@gmail.com";
    $subject = "Mesaj de la $nume";
    $body = "Nume: $nume\nEmail: $email\n\nMesaj:\n$mesaj";
    $headers = "From: $email";

    // Trimitere e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Mesajul a fost trimis cu succes!'); window.location.href='contact.html';</script>";
    } else {
        echo "<script>alert('Mesajul nu a fost trimis. Vă rugăm să ne contactați telefonic.'); window.location.href='contact.html';</script>";
    }
}
?>
