<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<?php
    if(isset($_POST['submit'])){

        $customer_id = $_POST['customer_id'];
        $customer_name = $_POST['customer_name'];
        $customer_surname = $_POST['customer_surname'];
        $customer_phone = $_POST['customer_phone'];
        $customer_email = $_POST['customer_email'];

        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_connect.php');
                    
        //
        $sql = "UPDATE 044_customer SET customer_name = '$customer_name', customer_surname = '$customer_surname', customer_phone = '$customer_phone', customer_email = '$customer_email' WHERE customer_id = $customer_id";

        $resultado = mysqli_query($con, $sql);
        if($resultado){
            echo "Los datos se han actualizado";
        }else{
            echo "No se han podido actualizar los datos";
        }
        mysqli_close($con);
    }
?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>