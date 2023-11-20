<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<?php
    if(isset($_POST['submit'])){

        $customer_id = $_POST['customer_id'];

        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_connect.php');
                    
        //QUERY
        $sql = "DELETE FROM 044_customer WHERE customer_id = $customer_id";

        $resultado = mysqli_query($con, $sql);
        
        // PRINCIPAL
        /*
            -Añadir extras.
            -Añadir que se puedan añador imagenes (Administrador podria subir imagenes de la habitacion)
        */
        /* SECUNDARIO
            -RECUERDA: Vas a agregar la columna customer_status(enabled, disabled)--> Con esto el delete sera pasar el estado de enabled a disabled y no hacer un delete
            
            -RECUERDA: Que un usuario con la el estado "disabled" no puede reservar habitaciones, Si quiere activar su un administrador tiene que hacerlo manualmente(AGREGA UNA CONDICION )
        */
        if($resultado){
            echo "El cliente ha sido eliminado";
        }else{
            echo "No se ha podido elimar al cliente";
        }
        mysqli_close($con);
    }
?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>