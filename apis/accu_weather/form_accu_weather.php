<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<?php
if (isset($_POST["submit"])) {
    $url = "https://dataservice.accuweather.com/currentconditions/v1/305482?apikey=tw93fBWL0LAm3HS0NbvgkHjH0rpv0Nlz&details=true";
    $json = file_get_contents($url);
    $datos = json_decode($json, true);
    $date_now = date("Y-m-d H:i:s");  

    // Conexion a la base de datos
    include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');

    $sql = "INSERT INTO 044_accu_weather (accu_weather_id, accu_weather_inserted_on, accu_weather_json) VALUES 
    (DEFAULT, '$date_now', '$json')";

    $query = mysqli_query($con, $sql);

    if ($query) {
        echo "Actualizado correctamente";
    } else {
        echo "Ha ocurrido un error";
    }
}
?>


<form action="/student044/dwes/apis/accu_weather/form_accu_weather.php" method="POST">
    <input type="submit" name="submit" value="submit">
</form>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>