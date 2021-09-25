<?php
include __DIR__ . '/php/connect_db.php';

/* utente */
$nomeUtente = $_POST['name'];
$LastNameUtente = $_POST['last_name'];
$mailUtente = $_POST['mail'];
mysqli_query($conn,"INSERT INTO utenti (name, last_name, email) VALUES ('$nomeUtente', '$LastNameUtente', '$mailUtente')");

$conn->close();