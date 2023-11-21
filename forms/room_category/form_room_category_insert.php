<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>
<h2>Crear nueva categoria</h2>
<form action="/student044/dwes/db/room_category/db_room_category_insert.php" method="POST" enctype="multipart/form-data">
    <label for="">Nombre de la categoria de habitacion: </label>
    <input type="text" name="room_category_name">
    <br>
    <label for="">Precio: </label>
    <input type="text" name="room_category_price" >
    <br>
    <label for="">Descripcion: </label>
    <input type="text" name="room_category_description">
    <br>
    <label for="">Imagen de la habitacion: </label>
    <input type="file" name="room_category_img">
    <br>
    <input type="submit" value="Crear categoria">
</form>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>