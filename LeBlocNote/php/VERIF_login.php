<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/errormessage.css">
</head>
<body>
<?php
require('connect_config.php');
if (isset($_POST['note_id']) && isset($_POST['note_pass'])) {
    $note_id = $_POST['note_id'];
    $note_pass = $_POST['note_pass'];
    if (!empty($note_id) && !empty($note_pass)) {
        $sql_user = "SELECT password FROM users_note WHERE user = '$note_id'";
        $sql_confirm = "SELECT confirm FROM users_note";
        $result_user = mysqli_query($connexion_note, $sql_user);
        $result_confirm = mysqli_query($connexion_note, $sql_confirm);
        $confirmarray = mysqli_fetch_assoc($result_confirm);

        if ($result_user) {
            if (mysqli_num_rows($result_user) == 1) {
                if($confirmarray['confirm'] == 1) {
                    $row = mysqli_fetch_assoc($result_user);
                    $note_pass_hashed = $row['password'];

                    if (password_verify($note_pass, $note_pass_hashed)) {
                        echo "Connexion réussie";
                    } else {
                        include('login.php');
                        print " 
                            <p class='loginpass_wrong'>Mot de passe incorrect</p>
                        ";
                    }
                } else {
                    include('login.php');
                    print " 
                        <p class='loginid_confirm'>Veuillez confirmer votre compte</p>
                    ";
                }

            } else {
                include('login.php');
                print " 
                    <p class='loginid_wrong'>Identifiant incorrect</p>
                ";
            }

        } else {
            echo "Erreur de connexion à la base de données";
        }
    } else {
        include('login.php');
        print " 
        <p class='login_notset'>Veuillez remplir tout les champs</p>
        ";
    }
}
?>
</body>
</html>