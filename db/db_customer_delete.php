<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/header.php')?>

<?php
    if(isset($_POST['submit'])){

        $customer_id = $_POST['customer_id'];

        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/db/db_connect.php');
                    
        //QUERY
        $sql = "DELETE FROM 044_customer WHERE customer_id = $customer_id";

        $resultado = mysqli_query($con, $sql);
        
        
        if($resultado){
            echo "El cliente ha sido eliminado";
        }else{
            echo "No se ha podido elimar al cliente";
        }
        mysqli_close($con);
    }
?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/footer.php')?>