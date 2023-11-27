<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<h2>Crear nueva categoria</h2>
<div class="contenedor-form">
    <div class="form">
        <div class="form">
            <form action="/student044/dwes/db/room_category/db_room_category_insert.php" method="POST" enctype="multipart/form-data">
                <label for="">Nombre de la categoria de habitacion: </label>
                <input type="text" name="room_category_name">
                
                <label for="">Precio: </label>
                <input type="text" name="room_category_price" >
                
                <label for="">Descripcion: </label>
                <input type="text" name="room_category_description">
                
                <label for="">Imagen de la habitacion: </label>
                <input type="file" name="file"> 
                
                <input type="submit" name="submit" value="Crear categoria">
            </form>
        </div>
    </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>