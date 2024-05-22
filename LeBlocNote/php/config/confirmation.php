<?php

require 'connect_config.php';

if (isset($_GET['user']) && isset($_GET['key']) && !empty($_GET['user']) && !empty($_GET['key'])) {
    $user = htmlspecialchars(urldecode($_GET['user']));
    $key = intval($_GET['key']);

    $sql = "SELECT * FROM users_info WHERE user = '$user' AND confirmkey = '$key'";
    $result = mysqli_query($connexion_note, $sql);
    $userexist = (mysqli_num_rows($result) == 1);

    if ($userexist) {
        $userData = mysqli_fetch_assoc($result);
        if ($userData['confirm'] == 0) {
            mysqli_query($connexion_note, "UPDATE users_info SET confirm = 1 WHERE user = '$user' AND confirmkey = '$key'");
            echo "compte confirmé";
        } else {
            echo "compte deja confirmé";
        }
    } else {
        echo "L'utilisateur n'existe pas !";
    }
}
