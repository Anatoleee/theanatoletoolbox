<?php
session_start();

$id = $_SESSION['note_id'];

require '../../config/connect_config.php';

    $result = mysqli_query($connexion_note, "SHOW COLUMNS FROM `$id`");
    $num_columns = mysqli_num_rows($result);

    $num_columns = $num_columns -3;

    $new_column_name = "note_" . ($num_columns + 1);

    // Ajouter la nouvelle colonne avec le nom dynamique
    $sql = "ALTER TABLE `$id` ADD COLUMN $new_column_name LONGTEXT NOT NULL DEFAULT ''";
    mysqli_query($connexion_note, $sql);

    header('Location: ../leblocnote.php');