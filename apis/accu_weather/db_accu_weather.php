<?php

// Conexion a la base de datos
include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');

$sql = "SELECT * FROM 044_accu_weather
        WHERE DATE(accu_weather_inserted_on) >= CURDATE() - INTERVAL 7 DAY 
        AND accu_weather_inserted_on = (
            SELECT MAX(accu_weather_inserted_on) 
            FROM 044_accu_weather 
            WHERE DATE(accu_weather_inserted_on) = DATE(accu_weather_inserted_on)
        )
        GROUP BY DATE(accu_weather_inserted_on)
        ORDER BY MAX(accu_weather_inserted_on) DESC;";

$query = mysqli_query($con, $sql);
$accu_weather = mysqli_fetch_all($query, MYSQLI_ASSOC);

$accu_weather_decode = json_decode($accu_weather[0]["accu_weather_json"], true);
print_r($accu_weather_decode);
?>

<article class="p-4 p-md-5">
    <section class="row mt-2 d-flex justify-content-center">
        <h2 class="d-flex justify-content-center fw-bold">Tiempo</h2>
        <div class="col-12 col-sm-12 col-md-12 order-0 py-5 px-0 d-flex justify-content-center gap-5">
            <?php foreach($accu_weather_decode as $current_conditions)?>
            <div class="card-time">
                <div class="card-time-content">
                    <div class="card-time-img">
                        <img src="/student044/dwes/img/freddy.webp" alt="Imagen del tiempo">
                    </div>
                    <div class="card-time-text">
                        <span>
                            <?php print_r(date("l", strtotime($current_conditions["LocalObservationDateTime"])));?>
                        </span>
                        <?php print_r($current_conditions["Temperature"]["Metric"]["Value"]) . " " . print_r($current_conditions["Temperature"]["Metric"]["Unit"]) ?>

                        <span>
                            <?php print_r($current_conditions["WeatherText"]) ?>
                        </span>
                    </div>
                </div>
            </div>
    </section>
</article>