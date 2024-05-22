<?php
session_start();
$id = $_SESSION['note_id'];
require '../../config/connect_config.php';
if (isset($_POST['note_id'])) {

    $table = $id;

    $noteId = $_POST['note_id'];
    // Traitez la suppression de la note avec l'ID $noteId
    echo "La note avec l'ID $noteId sera supprimée.";

    // Utilisation de la clause ALTER TABLE pour supprimer la colonne
    $query = "ALTER TABLE `$id` DROP COLUMN note_$noteId";
    if(mysqli_query($connexion_note, $query)) {
        echo "La colonne note_$noteId a été supprimée avec succès.";
        header('Location: ../leblocnote.php');
    } else {
        echo "Erreur lors de la suppression de la colonne: " . mysqli_error($connexion_note);
    }
} else {
    echo "Aucune note spécifiée pour suppression.";
}