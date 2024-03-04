<?php

// Conexion a la base de datos
include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');
$url_icons = $_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/apis/accu_weather/files/accu_weather_icons.json';
$icons = json_decode(file_get_contents($url_icons), true);

// $sql = "SELECT * FROM 044_accu_weather ORDER BY `accu_weather_inserted_on` DESC LIMIT 7";
$sql = "SELECT * FROM 044_accu_weather
WHERE (DATE(accu_weather_inserted_on), HOUR(accu_weather_inserted_on)) IN 
    (SELECT DATE(MAX(accu_weather_inserted_on)), HOUR(MAX(accu_weather_inserted_on)) 
     FROM 044_accu_weather 
     WHERE DATE(accu_weather_inserted_on) >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)
     GROUP BY DATE(accu_weather_inserted_on))
     ORDER BY `accu_weather_inserted_on` DESC";
     

// SELECT * FROM `044_accu_weather` as acu 
// GROUP BY EXTRACT(DAY FROM `accu_weather_inserted_on`)
// ORDER BY `accu_weather_inserted_on` DESC;

$query = mysqli_query($con, $sql);
$accu_weather = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<article class="p-4 p-md-5">
    <section class="row mt-2 d-flex justify-content-center">
        <h2 class="d-flex justify-content-center fw-bold">Tiempo</h2>
        <div class="col-12 col-sm-12 col-md-12 order-0 py-5 px-0 d-flex justify-content-center gap-5">
            <?php foreach ($accu_weather as $item) { ?>
                <?php
                $current_conditions = json_decode($item["accu_weather_json"], true);
                ?>
                <div class="card-time">
                    <div class="card-time-content">
                        <div class="card-time-img">
                            <?php foreach ($icons as $icon) {
                                if ($icon["IconNumber"] == $current_conditions[0]["WeatherIcon"]) {
                            ?>
                                    <img src="<?php print_r($icon["icon"]) ?>" alt="Imagen del tiempo">
                                <?php } ?>
                            <?php } ?>
                        </div>
                        <div class="card-time-text">
                            <span><?php print_r(date("d-m-Y", strtotime($current_conditions[0]["LocalObservationDateTime"])))?></span>
                            <span>
                                <?php print_r(date("l", strtotime($current_conditions[0]["LocalObservationDateTime"]))); ?>
                            </span>
                            <?php print_r($current_conditions[0]["Temperature"]["Metric"]["Value"]) . " " . print_r($current_conditions[0]["Temperature"]["Metric"]["Unit"]) ?>

                            <span>
                                <?php print_r($current_conditions[0]["WeatherText"]) ?>
                            </span>
                        </div>
                    </div>
                </div>
            <?php } ?>
    </section>
</article>