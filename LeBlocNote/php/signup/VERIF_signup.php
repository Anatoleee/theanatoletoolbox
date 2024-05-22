<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/errormessage.css">
</head>
<body>
<?php
session_start();
require '../../../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require('../config/connect_config.php');

if(isset($_POST['note_id']) && isset ($_POST['note_pass'])) {
    $note_id = $_POST['note_id'];
    $note_pass = $_POST['note_pass'];

    $_SESSION['note_id'] = $note_id;

    if (!empty($note_id) && !empty($note_pass)) {
        $note_pass_hashed = password_hash($note_pass, PASSWORD_DEFAULT);

        $sql_verify = mysqli_query($connexion_note, "SELECT * FROM users_info WHERE user = '$note_id'");

        if(mysqli_num_rows($sql_verify) == 1) {

            include('signup.php');
            sleep(3);
            header('Location: signup.php');
            print " 
            <p class='signupnid_alrdyxst'>Vous avez déjà un compte</p>
            ";
        } else {
            $longeurkey = 16;
            $key = "";
            for ($i=1; $i<$longeurkey; $i++) {
                $key .= mt_rand(0,9);
            }

            $message = '<a href="localhost/theanatoletoolbox/LeBlocNote/php/config/confirmation.php?user=' . urlencode($note_id) . '&key=' . $key . '">Cliquez ici pour confirmer votre compte</a>';

            mysqli_query($connexion_note, "INSERT INTO users_info (user, password, confirmkey) VALUES ('$note_id', '$note_pass_hashed', '$key')");

            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host= 'smtp.mail.me.com';
                $mail->SMTPAuth=true;
                $mail->Username='anatole.capelle@icloud.com';
                $mail->Password='pndi-fbrn-wfuq-qykq';
                $mail->SMTPSecure= PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port=587;
                $mail->setFrom('anatole.capelle@icloud.com', 'no-reply | theanatoletoolbox');
                $mail->addAddress($note_id, $note_id);
                $mail->isHTML(true);
                $mail->Subject='Code de confirmation';
                $mail->Body=$message;
                $mail->send();
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

            mysqli_query($connexion_note, "CREATE TABLE `$note_id` (id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            username VARCHAR(30) NOT NULL, password VARCHAR(30) NOT NULL)");

            mysqli_query($connexion_note, "INSERT INTO `$note_id` (username, password) VALUES ('$note_id', '$note_pass_hashed')");

            header('Location: ../main/leblocnote.php');
        }
    } else {
        include('signup.php');
        sleep(3);
        header('Location: signup.php');
        print " 
        <p class='signupnid_notset'>Veuillez remplir tout les champs</p>
        ";
    }
}
?>
</body>
</html>