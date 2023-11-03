<!-- Muestra todas las habitaciones -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/header.php')?>
<h3>Habitaciones</h3>
<form action="/student044/dwes/proyectoHotel/db/db_room_select.php" method="post"> 
    <!-- Agrega dos input de fechas para la fecha de entra y salida, muestra las habitaciones disponibles basado en las fechas de el usuario, cuando muestre las habitaciones en el boton para reservar tendras las fechas, el room_id, y el customer_id(Solo se puede reservar si el usuario ha hecho el login)-->
    <input type="submit" value="Ver" name="submit">
</form>
<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/footer.php')?>