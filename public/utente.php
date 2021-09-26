<?php
include __DIR__ . '/php/connect_db.php';

/* utente */
$nomeUtente = $_POST['name'];
$LastNameUtente = $_POST['last_name'];
$mailUtente = $_POST['mail'];
mysqli_query($conn,"INSERT INTO utenti (name, last_name, email) VALUES ('$nomeUtente', '$LastNameUtente', '$mailUtente')");

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit-icons.min.js"></script>
</head>
<body class="uk-container  uk-padding uk-background-muted uk-width-1-2@s uk-margin">
    <div class="uk-text-center">
        <h2>I dati sono stati salvati con successo.</h2>
        <a class="uk-button uk-button-primary uk-margin" href="http://localhost:81/Edusogno-esercizio/public/">Torna alla form</a>
    </div>
</body>
</html>