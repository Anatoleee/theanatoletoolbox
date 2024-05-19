<?php
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap');
    </style>
    <meta charset="UTF-8">
    <title>Le Bloc Note | theanatoletoolbox</title>
    <link rel="stylesheet" href="../css/login_note.css">
</head>
<body>
<div class="login_note">
    <div class="shadow_note">
        <form action="verif_login_note.php" method="POST">

            <p class="note_text_login">Connexion au Bloc-Note :</p>

            <div class="note_id_div">
                <input type="text" name="note_id" id="note_id" class="note_id" placeholder="Identifiant">
            </div>

            <div class="note_pass_div">
                <input type="password" name="note_pass" id="note_pass" class="note_pass" placeholder="Mot de passe">
            </div>

            <div class="note_submit_div">
                <button type="submit" class="note_submit">Connexion</button>
            </div>

        </form>

        <div class="or_register">
            <a href="signup_note.php" class="register_link">Ou Inscrivez-vous</a>
        </div>

    </div>
</div>
</body>
</html>


