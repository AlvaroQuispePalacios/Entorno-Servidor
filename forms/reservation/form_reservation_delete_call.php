<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>
<h2>Eliminar reservas</h2>
<div class="p-5">
    <div class="contenedor__form">
        <form action="/student044/dwes/forms/reservation/form_reservation_delete.php" method="post">
            <h4 class="text-center">Reserva ID:</h4>
            <div class="d-flex flex-column justify-content-center align-items-center">
                <input class="w-50" type="number" min="1" name="reservation_id">
                <input class="w-50" type="submit" value="Buscar" name="submit">

            </div>
        </form>
    </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>