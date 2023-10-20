<?php
    if(isset($_POST['show_customers'])){

        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/db/db_connect.php');
                    
        //Buscar infomacion(SELECT)
        $consulta = ("SELECT * FROM 044_customer");
        $resultado = mysqli_query($con, $consulta);

        $mostrar = mysqli_fetch_all($resultado, MYSQLI_ASSOC);//Utilizando MYSQLI_ASSOC se puede utilizar para el nombre de la columna ejemplo:
        echo sizeof($mostrar);
        echo "<br>";
        echo $mostrar[1]['customer_id'];
        echo "<br>";
        print_r($mostrar);
        mysqli_close($con);
    }
?>