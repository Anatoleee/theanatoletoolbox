<?php

if(isset($_POST['city_input'])) {
    $city = $_POST['city_input'];
    $curl = curl_init('https://api.openweathermap.org/data/2.5/weather?q=' . $city . '&appid=50e07a212796dc579d3c5cd1184e9148&units=metric');
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($curl);
    curl_close($curl);
    $data = json_decode($data, true);

    if(isset($data['weather'][0]['main'])) {
        $temperature = $data['main']['temp'];
        $weather = $data['weather'][0]['main'];
        header('Location: result.php?city=' . urlencode($city) . '&weather=' . urlencode($weather) . '&temperature=' . urlencode($temperature));
        exit();
    } else {
        echo "city_not_found";
    }
} else {
    echo "city_not_specified";
}