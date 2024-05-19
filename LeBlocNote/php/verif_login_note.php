<?php
require('connect_config_note.php');
if (isset($_POST['note_id']) && isset($_POST['note_pass'])) {
    $note_id = $_POST['note_id'];
    $note_pass = $_POST['note_pass'];
    if (!empty($note_id) && !empty($note_pass)) {
        // Récupérer le hachage de mot de passe associé à l'utilisateur depuis la base de données
        $sql = "SELECT password FROM user_note WHERE user = '$note_id'";
        $result = mysqli_query($connexion_note, $sql);

        if ($result) {
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                $note_pass_hashed = $row['password'];

                if (password_verify($note_pass, $note_pass_hashed)) {
                    echo "Connexion réussie";
                } else {
                    include('login_note.php');
                    print " 
                <p class='loginid_wrong'>Mot de passe incorrect</p>
                
                <style>
                    .loginid_wrong {
                        position: absolute;
                        color: red;
                        font-size: 15px;
                        font-family: 'Oswald', sans-serif;
                        text-align: center;
                        margin: 52.7vh 0 0 45.3%;
                    }
                </style>
            ";
                }
            } else {
                include('login_note.php');
                print " 
                <p class='loginid_wrong'>Identifiant incorrect</p>
                
                <style>
                    .loginid_wrong {
                        position: absolute;
                        color: red;
                        font-size: 15px;
                        font-family: 'Oswald', sans-serif;
                        text-align: center;
                        margin: 52.7vh 0 0 45.3%;
                    }
                </style>
            ";
            }

        } else {
            echo "Erreur de connexion à la base de données";
        }
    } else {
        include('login_note.php');
        print " 
          <p class='signupnid_notset'>Veuillez remplir tout les champs</p>
                
          <style>
              .signupnid_notset {
              position: absolute;
              color: red;
              font-size: 15px;
              font-family: 'Oswald', sans-serif;
              text-align: center;
              margin: 52.7vh 0 0 45.3%;
              }
          </style>
    ";
    }
}
?>