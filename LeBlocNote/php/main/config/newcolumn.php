<?php

require '../../config/connect_config.php';

session_start();

$idnc = $_SESSION['note_id'];

    $result = mysqli_query($connexion_note, "SHOW COLUMNS FROM `$idnc`");
    $num_columns = mysqli_num_rows($result);

    $num_columns = $num_columns -3;

    $new_column_name = "note_" . ($num_columns + 1);

    // Ajouter la nouvelle colonne avec le nom dynamique
    $sql = "ALTER TABLE `$idnc` ADD COLUMN $new_column_name LONGTEXT NOT NULL DEFAULT ''";
    mysqli_query($connexion_note, $sql);

    header('Location: ../leblocnote.php');