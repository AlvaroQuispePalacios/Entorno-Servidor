<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<h3>Actualizar Reserva</h3>
<div class="contenedor-form">
    <div class="form">
        <form action="/student044/dwes/forms/reservation/form_reservation_update.php" method="post">
            <label for="">Identificar reserva: </label>
            <input type="number" min="1" name="reservation_id">
        
            <input type="submit" value="buscar" name="submit">
        </form>
    </div>
</div>



<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>