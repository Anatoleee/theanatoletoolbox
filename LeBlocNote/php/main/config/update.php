<?php
session_start();

require '../../config/connect_config.php';

$idupdt = $_SESSION['note_id'];
$i = mysqli_query($connexion_note, "SELECT * FROM `" . $idupdt . "`");
$a = mysqli_fetch_assoc($i);

$count = count(array_filter(array_keys($a), function($key) {
    return strpos($key, 'note_') === 0;
}));

for ($l = 1; $l <= $count; $l++) {
    $note_value = $_POST['note_' . $l];
    mysqli_query($connexion_note, "UPDATE `$idupdt` SET `note_" . $l . "` = '" . $note_value . "'");
}

header('Location: ../leblocnote.php');