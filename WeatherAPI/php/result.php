<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Actual Weather | theanatoletoolbox</title>
    <link rel="stylesheet" href="../css/result.css">
</head>
<body>
<?php
if(isset($_GET['city']) && isset($_GET['weather']) && isset($_GET['temperature'])) {
    $city = $_GET['city'];
    $weather = $_GET['weather'];
    $temperature = $_GET['temperature'];
    ?>
    <div class="container">
        <div class="shadow">
            <div class="img">
                <?php

                if($weather == 'Clear') {
                    $weather = 'Ensoleillé';
                } else if($weather == 'Clouds') {
                    $weather = 'Nuageux';
                } else if($weather == 'Rain') {
                    $weather = 'Pluvieux';
                }

                switch ($weather) {
                    case 'Ensoleillé':
                        echo "<img src='../images/clear.png' class='sun_img_classe'>";
                        break;
                    case 'Nuageux':
                        echo "<img src='../images/cloudy.png' class='clouds_img_classe'>";
                        break;
                    case 'Pluvieux':
                        echo "<img src='../images/rainy.png' class='rain_img_classe'>";
                        break;
                }
                ?>
            </div>
            <div class="separator">---------------------------------------</div>
            <div class="actual_weather_div">
                <p class="actual_weather">Temps à <?php echo htmlspecialchars($city); ?> : <?php echo htmlspecialchars($weather); ?></p>
            </div>
            <br>
            <div class="actual_temperature_div">
                <p class="actual_temperature">Température à <?php echo htmlspecialchars($city); ?> : <?php echo htmlspecialchars($temperature); ?> °C</p>
            </div>
            <a href="weatherapi.php" class="home_button">Voir d'autres villes</a>
        </div>
    </div>
    <?php
} else {
    echo "city_not_specified";
}
?>
</body>
</html>
