<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/header.php')?>

<h3>Actualizar habitacion</h3>
<form action="/student044/dwes/proyectoHotel/forms/form_room_update.php" method="POST">

    <label for="">Identificador habitacion:</label>
    <input type="number" min="1" name="room_id">

    <input type="submit" name="submit" value="Buscar">
</form>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/footer.php')?>