<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<?php
    if(isset($_POST['submit'])){

        $room_category = $_POST['room_category'];

        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_connect.php');
                    
        //Buscar infomacion(INSERT)
        $sql = ("INSERT INTO 044_room (room_id, room_category, room_status) VALUES 
                    (DEFAULT, $room_category, 'READY')");
        $resultado = mysqli_query($con, $sql);
        if ($resultado){
            echo "Habitacion creada";
        }else{
            echo "Error al crear la habitacion";
        }
        mysqli_close($con);
    }
?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>