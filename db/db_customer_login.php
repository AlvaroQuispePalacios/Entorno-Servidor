<?php
    if(isset($_POST['form_customer_login'])){
        $user = $_POST['user'];
        $pwd = $_POST['pwd'];

        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/db/db_connect.php');
        
        //Query que obtendra los datos 
        $sql = "SELECT customer_name FROM 044_customer WHERE customer_email='$user' AND customer_password='$pwd'";

        $resultado = mysqli_query($con, $sql);

        $mostrar = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

        //
        print_r($mostrar);
        // if(empty($mostrar)){
        //     echo "No existe";
        // }

        mysqli_close($con);

    }
?>
