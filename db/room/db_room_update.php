<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/header.php')?>

<?php
    if(isset($_POST['submit'])){

        $room_id = $_POST['room_id'];
        $room_category = $_POST['room_category'];
        $room_status = $_POST['room_status'];

        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/db/db_connect.php');

        $sql = "UPDATE 044_room SET room_category = '$room_category', room_status = '$room_status' WHERE room_id = $room_id";
        $query =mysqli_query($con, $sql);
        if($query){
            echo "Se ha actualizado correctamente";
        }else {
            echo "No se ha podido actualizar";
        }
    }
?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/footer.php')?>