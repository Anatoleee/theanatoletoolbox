<?php
require('connect_config_note.php');
if(isset($_POST['note_id']) && isset ($_POST['note_pass'])) {
    $note_id = $_POST['note_id'];
    $note_pass = $_POST['note_pass'];

    if (!empty($note_id) && !empty($note_pass)) {
        $note_pass_hashed = password_hash($note_pass, PASSWORD_DEFAULT);

        $sql_verify = mysqli_query($connexion_note, "SELECT * FROM user_note WHERE user = '$note_id'");

        if(mysqli_num_rows($sql_verify) == 1) {
            include('signup_note.php');
            print " 
              <p class='signupnid_wrong'>Vous avez déjà un compte</p>
              <style>
                  .signupnid_wrong {
                  position: absolute;
                  color: red;
                  font-size: 15px;
                  font-family: 'Oswald', sans-serif;
                  text-align: center;
                  margin: 52.7vh 0 0 45.3%;
                  }
              </style>
        ";
        } else {
        mysqli_query($connexion_note, "INSERT INTO user_note (user, password) VALUES ('$note_id', '$note_pass_hashed')");
        echo "Compte créé";
        }
    } else {
        include('signup_note.php');
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

