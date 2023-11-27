
<?php
    if(isset($_POST['submit'])){
        $room_category_name = $_POST['room_category_name'];
        $room_category_price = $_POST['room_category_price'];
        $room_category_description = $_POST['room_category_description'];
        
        // Include para poder subir archivos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_file.php');

        // Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_connect.php');

        $sql = "INSERT INTO 044_room_category
        (room_category_id, room_category_name, room_category_price, room_category_description, room_category_img)
        VALUES
        (DEFAULT, '$room_category_name', '$room_category_price', '$room_category_description', '$path_img')";

        $query = mysqli_query($con, $sql);

        if($query){
            
            echo "<br>"."categoria creada con exito";
        }else {
            echo "error en crear la categoria";
        }

    }
?>