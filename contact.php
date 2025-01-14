<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despre Noi - Sudură și Construcții Metalice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }
        header {
            background-color: #444;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }
       nav {
            display: flex;
            justify-content: center;
            background-color: #444;
            padding: 0.5rem 0;
        }
        nav a {
            color: #fff;
            margin: 0 1rem;
            text-decoration: none;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            padding: 2rem;
            max-width: 800px;
            margin: 0 auto;
        }
        .contact form {
            display: flex;
            flex-direction: column;
        }
        .contact form input,
        .contact form textarea {
            margin-bottom: 15px;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .contact form button {
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 1em;
            border-radius: 5px;
        }
        .contact form button:hover {
            background-color: #555;
        }
        .message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Contact</h1>
    </header>
    <nav>
        <a href="index.html">Acasă</a>
        <a href="servicii.html">Servicii</a>
        <a href="despre-noi.html">Despre Noi</a>
        <a href="galerie.html">Galerie</a>
        <a href="contact.php">Contact</a>
    </nav>
    <div class="container">
        <section id="contact" class="contact">
            <h2>Contact</h2>
            <p>Contactează-ne pentru o ofertă personalizată sau alte informații:</p>
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $nume = htmlspecialchars($_POST['nume']);
                $email = htmlspecialchars($_POST['email']);
                $mesaj = htmlspecialchars($_POST['mesaj']);

                // Adresa ta de e-mail
                $to = "adresa-ta@example.com";
                $subject = "Mesaj de la $nume";
                $body = "Nume: $nume\nEmail: $email\n\nMesaj:\n$mesaj";
                $headers = "From: $email";

                // Trimitere e-mail
                if (mail($to, $subject, $body, $headers)) {
                    echo "<div class='message success'>Mesajul a fost trimis cu succes! Vă mulțumim!</div>";
                } else {
                    echo "<div class='message error'>Mesajul nu a fost trimis. Vă rugăm să ne contactați telefonic.</div>";
                }
            }
            ?>
            <form action="contact.php" method="post">
                <input type="text" name="nume" placeholder="Nume" required>
                <input type="email" name="email" placeholder="Email" required>
                <textarea name="mesaj" placeholder="Mesaj" rows="5" required></textarea>
                <button type="submit">Trimite</button>
            </form>
            <p><strong>Telefon:</strong> +40 761 854 203</p>
        </section>
    </div>
    <footer>
        <p>Va asteptam si va stam la dispozitie!</p>
    </footer>
</body>
</html>