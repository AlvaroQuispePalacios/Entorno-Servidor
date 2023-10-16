<?php
    if(isset($_POST['submit'])){

        // $date_in = $_POST['date_in'];
        // $date_out = $_POST['date_out'];
        // echo $date_in;
        // echo $date_out;

        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/db/db_connect.php');
                    
        //Buscar infomacion(SELECT)
        $consulta = ("SELECT room_id, room_category , room_category_name, room_category_price, room_category_description FROM 044_room INNER JOIN 044_room_category ON 044_room.room_category = 044_room_category.room_category_id;");
        $resultado = mysqli_query($con, $consulta);

        $mostrar = mysqli_fetch_all($resultado, MYSQLI_ASSOC);//Utilizando MYSQLI_ASSOC se puede utilizar para el nombre de la columna ejemplo:
        //$mostrar[1]['nombre_columna']
        //Mostrar informacion de la base de datos
        // echo $mostrar[0][0];
        // echo $mostrar[0][1];
        // echo $mostrar[0][2];
        print_r($mostrar);
        mysqli_close($con);
    }
?>