<!-- Codigo que buscara los datos del cliente en base al id 
    Estan incluidos en:
-->
<?php
    if(isset($_POST['submit'])){
        $room_id = $_POST['room_id'];

        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/db/db_connect.php');

        //Query que obtendra los datos 
        $sql = "SELECT * FROM 044_room WHERE room_id = $room_id";

        $query = mysqli_query($con, $sql);

        $room = mysqli_fetch_all($query, MYSQLI_ASSOC);

        //Capturar los valores del array que es la fila con los datos del cliente que pedimos con el identificador
        $room_id = $room[0]['room_id'];
        $room_category = $room[0]['room_category']; 
        $room_status = $room[0]['room_status']; 

        mysqli_close($con);

    }
?>