<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/header.php')?>

<?php
    if(isset($_POST['submit'])){
        
        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/db/db_connect.php');

        $room_id = $_POST['room_id'];

        $sql = "DELETE FROM 044_room WHERE room_id = '$room_id'";

        $query = mysqli_query($con, $sql);

        if($query){
            echo "La habitacion ha sido elimninada";
            
        }else{
            echo "Error al eliminar la habitacion";
        }


    }
?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/footer.php')?>