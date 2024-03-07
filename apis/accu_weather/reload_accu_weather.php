<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<?php

$url = "https://dataservice.accuweather.com/currentconditions/v1/305482?apikey=tw93fBWL0LAm3HS0NbvgkHjH0rpv0Nlz&details=true";
$json = file_get_contents($url);
$datos = json_decode($json, true);
$date_now = date("Y-m-d");  

copy($url, $_SERVER['DOCUMENT_ROOT'] . "/student044/dwes/apis/accu_weather/files/accu_weather.json");
copy($url, $_SERVER['DOCUMENT_ROOT'] . "/student044/dwes/apis/accu_weather/files/accu_weather_" . $date_now . ".json");

include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');

$date_inserted_on = date("Y-m-d H:i:s");

$sql = "INSERT INTO 044_accu_weather (accu_weather_id, accu_weather_inserted_on, accu_weather_json) VALUES 
(DEFAULT, '$date_inserted_on', '$json')";
$query = mysqli_query($con, $sql);

if($query){
    echo "actualizado correctamente";
}else{
    echo "error";
}

?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>
