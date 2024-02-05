<?php
// function readFile($path){
//     if(file_exists($path)){
//         return fread(fopen($path, "r"), filesize($path));
//     }
// }

// if (isset($_POST["submit"])) {
// }

$current_conditions_file = $_SERVER['DOCUMENT_ROOT'] . "/student044/dwes/apis/accu_weather/accu_weather.json";
$current_conditions_json = fopen($current_conditions_file, "r");
$current_conditions;
if (file_exists($current_conditions_file)) {
    $current_conditions = json_decode(fread($current_conditions_json, filesize($current_conditions_file)), true);
}
print_r($current_conditions[0]);
echo "<br>";
fclose($current_conditions_json);

?>


<article class="p-4 p-md-5">
    <section class="row mt-2">
        <div class="col-12 col-sm-12 col-md-6 d-flex flex-column justify-content-center align-items-center py-5 px-0">
            <h2 class="fw-bold">Tiempo</h2>
            <p class="text-start card_room_text">
                Bienvenido a un enclave de elegancia y sofisticación, donde el lujo encuentra su máxima expresión: nuestras exclusivas habitaciones de <span class="fw-bold">Ducks Hotel</span>. Diseñadas con un toque de opulencia y atención meticulosa a cada detalle, nuestras estancias ofrecen un refugio de confort y distinción.
            </p>
        </div>
        <div class="col-12 col-sm-12 col-md-6 order-0 py-5 px-0 d-flex gap-2">

            <div class="card-time">
                <div class="card-time-content">
                    <div class="card-time-img">
                        <img src="/student044/dwes/img/freddy.webp" alt="Imagen del tiempo">
                    </div>
                    <div class="card-time-text">
                        <?php print_r($current_conditions[0]["Temperature"]["Metric"]["Value"]) . " " . print_r($current_conditions[0]["Temperature"]["Metric"]["Unit"]) ?>

                        <span>
                            <?php print_r($current_conditions[0]["WeatherText"]) ?>
                        </span>

                    </div>
                </div>
                <!-- <h4 class="card-time-title">Fecha</h4> -->
            </div>

            <div class="card-time">
                <div class="card-time-content">
                    <div class="card-time-img">
                        <img src="/student044/dwes/img/freddy.webp" alt="Imagen del tiempo">
                    </div>
                    <div class="card-time-text">
                        34.C
                    </div>
                </div>
            </div>

            <div class="card-time">
                <div class="card-time-content">
                    <div class="card-time-img">
                        <img src="/student044/dwes/img/freddy.webp" alt="Imagen del tiempo">
                    </div>
                    <div class="card-time-text">
                        34.C
                    </div>
                </div>
            </div>

            <div class="card-time">
                <div class="card-time-content">
                    <div class="card-time-img">
                        <img src="/student044/dwes/img/freddy.webp" alt="Imagen del tiempo">
                    </div>
                    <div class="card-time-text">
                        34.C
                    </div>
                </div>
            </div>


            <div class="card-time">
                <div class="card-time-content">
                    <div class="card-time-img">
                        <img src="/student044/dwes/img/freddy.webp" alt="Imagen del tiempo">
                    </div>
                    <div class="card-time-text">
                        34.C
                    </div>
                </div>
            </div>

            <div class="card-time">
                <div class="card-time-content">
                    <div class="card-time-img">
                        <img src="/student044/dwes/img/freddy.webp" alt="Imagen del tiempo">
                    </div>
                    <div class="card-time-text">
                        34.C
                    </div>
                </div>
            </div>

            <div class="card-time">
                <div class="card-time-content">
                    <div class="card-time-img">
                        <img src="/student044/dwes/img/freddy.webp" alt="Imagen del tiempo">
                    </div>
                    <div class="card-time-text">
                        34.C
                    </div>
                </div>
            </div>

    </section>
</article>

<!-- <div class="p-4 p-md-5">
    <div class="row mt-2">
        <div class="col-12 col-sm-12 col-md-6 card-room__img "></div>
        <div class="col-12 col-sm-12 col-md-6 order-0 d-flex flex-column justify-content-center align-items-center p-5">
            <h2 class="fw-bold">Habitaciones</h2>
            <p class="text-start card_room_text">
                Bienvenido a un enclave de elegancia y sofisticación, donde el lujo encuentra su máxima expresión: nuestras exclusivas habitaciones de <span class="fw-bold">Ducks Hotel</span>. Diseñadas con un toque de opulencia y atención meticulosa a cada detalle, nuestras estancias ofrecen un refugio de confort y distinción.
            </p>
        </div>
    </div>
</div> -->