<!-- Muestra todas las habitaciones -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/header.php')?>
<h3>Habitaciones</h3>
<form action="/student044/dwes/proyectoHotel/db/db_room_select.php" method="post">
    <input type="submit" value="Ver" name="submit">
</form>
<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/footer.php')?>