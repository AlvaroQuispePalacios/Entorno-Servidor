<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>
<h2>Eliminar reservas</h2>
<form action="/student044/dwes/forms/reservation/form_reservation_delete.php" method="post">
    <label>Reserva ID:</label>
    <input type="number" min="1" name="reservation_id">
    <input type="submit" value="Buscar" name="submit">
</form>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>