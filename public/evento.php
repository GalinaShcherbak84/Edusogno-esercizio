<?php
include __DIR__ . '/php/connect_db.php';

/* evento */
$nomeEvento = $_POST['name_event'];
$descrizioneEvento = $_POST['description'];
$dataEvento = $_POST['date'];
$oraEvento = $_POST['time'];
mysqli_query($conn,"INSERT INTO eventi (name_event, description_event, date_event, time_event) VALUES ('$nomeEvento', '$descrizioneEvento', '$dataEvento', '$oraEvento')");

$conn->close();