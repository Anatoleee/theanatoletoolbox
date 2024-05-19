<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'theanatoletoolbox');
define('DB_TABLE', 'user_note');

$connexion_note = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if (!$connexion_note) {
    die('Erreur de connexion à la base de données');
}
?>