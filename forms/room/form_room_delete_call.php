<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<h2>Eliminar una habitacion</h2>
<form action="/student044/dwes/forms/room/form_room_delete.php" method="POST">
    <label for="">Identificador habitacion:</label>
    <input type="number" min="1" name="room_id">
    <input type="submit" value="Buscar" name="submit">
</form>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>