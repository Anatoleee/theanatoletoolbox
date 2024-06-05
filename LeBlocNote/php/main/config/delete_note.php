<?php
session_start();
require '../../config/connect_config.php';

if (isset($_POST['note_id']) && isset($_SESSION['note_id'])) {
    $note_id = $_POST['note_id'];
    $user_id = $_SESSION['note_id'];

    $query = "ALTER TABLE `$user_id` DROP COLUMN `note_$note_id`";
    $result = mysqli_query($connexion_note, $query);

    if ($result) {
        // Rediriger vers la page principale après la suppression
        header('Location: ../leblocnote.php');
    } else {
        echo "Erreur lors de la suppression de la note.";
    }
} else {
    header('Location: ../login/login.php');
}
?>
