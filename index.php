<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<!-- SLIDER -->
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./img/slider1.jpg" class="d-block w-100 slider__img">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="./img/slider2.jpg" class="d-block w-100 slider__img">
            <div class=" carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="./img/slider3.jpg" class="d-block w-100 slider__img">
            <div class=" carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- CARD TIME -->
<div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/apis/accu_weather/db_accu_weather.php') ?>
    <!-- <button onclick="getJsonApi()">Llamar a la API</button> -->
</div>

<!-- CARD ROOM -->
<div class="p-4 p-md-5">
    <div class="row mt-2">
        <div class="col-12 col-sm-12 col-md-6 card-room__img "></div>
        <div class="col-12 col-sm-12 col-md-6 order-0 d-flex flex-column justify-content-center align-items-center py-5 px-0">
            <h2 class="fw-bold">Habitaciones</h2>
            <p class="text-start card_room_text">
                Bienvenido a un enclave de elegancia y sofisticación, donde el lujo encuentra su máxima expresión: nuestras exclusivas habitaciones de <span class="fw-bold">Ducks Hotel</span>. Diseñadas con un toque de opulencia y atención meticulosa a cada detalle, nuestras estancias ofrecen un refugio de confort y distinción.
            </p>
        </div>
    </div>
</div>

<div class="p-4 p-md-5">
    <div class="row mt-2">

        <div class="col-12 col-sm-12 col-md-6 order-0 d-flex flex-column justify-content-center align-items-center py-5 px-0">
            <h2 class="fw-bold">Comentarios</h2>
            <p class="text-start card_room_text">

                En <span class="fw-bold">Ducks Hotel</span>, nos esforzamos por ofrecer experiencias excepcionales a nuestros huéspedes. Valoramos sinceramente sus comentarios, ya que nos ayudan a mejorar continuamente nuestros servicios. A continuación, encontrará opiniones reales de huéspedes que han compartido su experiencia con nosotros. Estamos encantados de compartir sus comentarios y esperamos que le ayuden a tomar una decisión informada sobre su próxima estancia con nosotros.
                <br>
                <br>
                Nota: Todas las opiniones son reales y verificadas por nuestro equipo.
            </p>
        </div>
        <!-- Contenedor de los card de los comentarios  -->
        <div class="col-12 col-sm-12 col-md-6 d-flex gap-3 flex-wrap">
            <?php
                include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/comment/db_comment_select_customer.php');
            ?>
        </div>
    </div>
</div>


<!-- <script>
    function getJsonApi() {
        let http = new XMLHttpRequest();
        http.onreadystatechange = () => {
            if (http.readyState == 4 && http.status == 200) {
                let jsonFromApi = JSON.parse(http.responseText);
                console.log(jsonFromApi);
            }
        };
        http.open("GET", "http://dataservice.accuweather.com/currentconditions/v1/305482?apikey=tw93fBWL0LAm3HS0NbvgkHjH0rpv0Nlz", true);
        http.send();
    }
</script> -->

<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>