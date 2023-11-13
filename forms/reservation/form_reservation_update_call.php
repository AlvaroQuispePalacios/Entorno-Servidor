<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/header.php')?>

<h3>Actualizar Reserva</h3>
<form action="/student044/dwes/proyectoHotel/forms/reservation/form_reservation_update.php" method="post">
    <label for="">Identificar reserva: </label>
    <input type="number" min="1" name="reservation_id">

    <input type="submit" value="buscar" name="submit">
</form>



<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/footer.php')?>