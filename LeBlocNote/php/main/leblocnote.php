<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test Main</title>
    <link rel="stylesheet" href="css/leblocnote.css">
</head>
<body>
<form action="./config/update.php" method="POST">
<?php
session_start();

require '../config/connect_config.php';

$id = $_SESSION['note_id'];

$sql_confirm = "SELECT confirm FROM users_info WHERE user = '$id'";
$result_confirm = mysqli_query($connexion_note, $sql_confirm);
$confirmarray = mysqli_fetch_assoc($result_confirm);


if($confirmarray['confirm'] == 1) {

    if (isset($_SESSION['note_id'])) {

        $i = mysqli_query($connexion_note, "SELECT * FROM `" . $id . "`");
        $a = mysqli_fetch_assoc($i);

        $count = count(array_filter(array_keys($a), function ($key) {
            return strpos($key, 'note_') === 0;
        }));

        for ($h = 1; $h <= $count; $h++) {
            print "<textarea id='note_$h' name='note_$h'>" . htmlspecialchars($a['note_' . $h]) . "</textarea>";
        }

    } else {
        header('Location: ../login/login.php');
    }
} else {
    header('Location: ../login/login.php');
    print "<p>Veuillez confirmer votre compte</p>";
}

?>
    <br>
    <button type="submit">Mettre à jour</button>
</form>

<form action="./config/newcolumn.php" method="POST">
    <button type="submit">nouvelle colonne</button>
</form>

</body>
</html>