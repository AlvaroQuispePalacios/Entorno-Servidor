<?php
    if(isset($_POST['create_room'])){

        $room_category = $_POST['room_category'];

        //Conexion a la base de datos
        include('./db/db_connect.php');
                    
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