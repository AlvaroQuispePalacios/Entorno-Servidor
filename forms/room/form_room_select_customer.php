<!-- Muestra todas las habitaciones -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<!-- <h3>Habitaciones</h3> -->
<div class="container-fluid d-flex justify-content-center h-90 py-5">
    <div class="contenedor__formulario__habitaciones row d-flex justify-content-center align-items-center mb-3">
        <div class="col-12 col-lg-8 position-relative p-0">
            <img class="img__habitaciones img-fluid opacity-75" src="/student044/dwes/img/rooms.jpg">

            <p class="fs-1 position-absolute top-50 start-50 translate-middle fw-bold">HABITACIONES</p>

        </div>
        <div class="d-flex align-items-center h-100 col-12 col-lg-4 p-2">
            <form class="w-100" action="/student044/dwes/db/room/db_room_select_customer.php" method="post">
                <div class="form-floating mb-3">
                    <input type="date" class="form-control " id="floatingDate" name="date_in" required>
                    <label for="floatingDate">Llegada</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="floatingDate" name="date_out" required>
                    <label for="floatingDate">Salida</label>
                </div>
                <!-- <div class="form__date">
                        <div class="date date-in">
                            <label for="">Llegada:</label>
                            <input type="date" name="date_in" placeholder="Dia Entrada" required>
                        </div>
                        <div class="date date-out">
                            <label for="">Salida:</label>
                            <input type="date" name="date_out" placeholder="Dia Salida" required>
                        </div>
                    </div>
                    -->
                <div class="submit">
                    <input class="btn btn-primary w-100" type="submit" value="Ver" name="submit">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>