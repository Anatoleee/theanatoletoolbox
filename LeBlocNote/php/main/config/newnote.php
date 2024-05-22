<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouvelle note</title>
</head>
<body>

<form action="newnote.php" METHOD="post">
    <input type="text" name="note_input" id="note_input">
    <button type="submit">ecrire</button>
</form>

<?php
session_start();

$note_id = $_SESSION['note_id'];

$note_input = $_POST['note_input'];

require '../../config/connect_config.php';

$result = mysqli_query($connexion_note, "SHOW COLUMNS FROM `$note_id`");
$num_columns = mysqli_num_rows($result);

$num_columns = $num_columns - 4;

$new_column_name = "note_" . ($num_columns + 1);


mysqli_query($connexion_note, "UPDATE `$note_id` SET $new_column_name='$note_input'");

?>

</body>
</html>
