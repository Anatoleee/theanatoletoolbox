<?php
session_start();
require '../../config/connect_config.php';

if (!isset($_SESSION['note_id'])) {
    header('Location: ../login/login.php');
    exit();
}

$idupdt = $_SESSION['note_id'];
$i = mysqli_query($connexion_note, "SELECT * FROM `" . $idupdt . "`");
$a = mysqli_fetch_assoc($i);

$count = count(array_filter(array_keys($a), function($key) {
    return strpos($key, 'note_') === 0;
}));

for ($l = 1; $l <= $count; $l++) {
    if (isset($_POST['note_' . $l])) {
        $note_value = mysqli_real_escape_string($connexion_note, $_POST['note_' . $l]);
        $sql_update = "UPDATE `$idupdt` SET `note_$l` = '$note_value' WHERE 1";
        mysqli_query($connexion_note, $sql_update);
    }
}

header('Location: ../leblocnote.php');
exit();
