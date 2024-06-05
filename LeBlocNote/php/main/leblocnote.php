<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test Main</title>
    <link rel="stylesheet" href="css/leblocnote.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>
<body>
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

        } else {
            header('Location: ../login/login.php');
        }
    } else {
        header('Location: ../login/login.php');
        print "<p>Veuillez confirmer votre compte</p>";
    }
    ?>
    <div class="global_note">
            <?php
                for ($h = 1; $h <= $count; $h++) {
                    // Vérifiez si la clé existe avant d'afficher l'élément
                    if (isset($a['note_' . $h])) {
                        echo "
                    <form action='./config/update.php' method='POST'>
                    <div class='div_note'>
                    <textarea id='note_$h' name='note_$h' class='class_note'>" . htmlspecialchars($a['note_' . $h]) . "</textarea>
                    <p class='text_note'>-----------------------------------</p>
                    <button type='submit' class='updt_button'>Mettre à jour</button>
                    </form>
                    <form action='./config/delete_note.php' method='POST'>
                        <input type='hidden' name='note_id' value='" . $h . "'>
                        <button type='submit' class='delete_button'>Supprimer</button>
                    </form>
                    </div>";
                    }
                }
            ?>
    </div>
    <form action="./config/accueil.php" method="POST">
        <button type="submit" class="home_button">Accueil</button>
    </form>
    <form action="./config/logout.php" method="POST">
        <button type="submit" class="logout_button">Déconnexion</button>
    </form>
    <form action="./config/newcolumn.php" method="POST">
        <button type="submit" class="newclmn_button">Nouvelle Note</button>
</body>
</html>
