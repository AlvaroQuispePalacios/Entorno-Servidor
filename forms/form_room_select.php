<!-- Muestra todas las habitaciones -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>
<h3>Habitaciones</h3>

<form action="/student044/dwes/db/db_room_select.php" method="post"> 
    <!-- Agrega dos input de fechas para la fecha de entra y salida, muestra las habitaciones disponibles basado en las fechas de el usuario, cuando muestre las habitaciones en el boton para reservar tendras las fechas, el room_id, y el customer_id(Solo se puede reservar si el usuario ha hecho el login)-->
    <label for="">Entrada:</label>
    <input type="date" name="date_in" required>
    <label for="">Salida:</label>
    <input type="date" name="date_out" required>
    <input type="submit" value="Ver" name="submit">
</form>
<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>