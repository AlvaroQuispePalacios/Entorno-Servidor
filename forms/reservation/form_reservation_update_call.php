<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<h3>Actualizar Reserva</h3>
<div class="p-5">
    <div class="contenedor__form">
        <form action="/student044/dwes/forms/reservation/form_reservation_update.php" method="post">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h4>Identificar reserva: </h4>
                <input class="w-50" type="number" min="1" name="reservation_id">
            
                <input type="submit" value="buscar" name="submit">

            </div>
        </form>
    </div>
</div>



<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>