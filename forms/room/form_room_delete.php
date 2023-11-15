<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<!-- Datos de la habitacion room_id, room_category, room_status -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_select_room_id.php')?>

<h3>Eliminar una habitacion</h3>

<form action="/student044/dwes/db/room/db_room_delete.php" method="POST">
    
    <label for="">Identificador Habitacion</label>
    <input type="text" name="room_id" value="<?php echo $room_id;?>" readonly>
    
    <br>
    
    <label for="">Categoria de habitacion: </label>
    <input type="text" value="<?php echo $room_category;?>" readonly>
    
    <br>
    
    <label for="">Estado habitacion: </label>
    <input type="text" value="<?php echo $room_status;?>" readonly>

    <input type="submit" value="Eliminar" name="submit">

</form>


<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>