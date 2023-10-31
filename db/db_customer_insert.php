<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/header.php')?>
<?php
    if(isset($_POST['insert_customer'])){

        $customer_name = $_POST['customer_name'];
        $customer_surname = $_POST['customer_surname'];
        $customer_phone = $_POST['customer_phone'];
        $customer_email = $_POST['customer_email'];

        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/db/db_connect.php');
                    
        //
        $sql = "INSERT INTO 044_customer (customer_id, customer_name, customer_surname, customer_phone, customer_email) VALUES 
                (DEFAULT, '$customer_name', '$customer_surname', '$customer_phone', '$customer_email')";

        $resultado = mysqli_query($con, $sql);

        if ($resultado){
            echo "Cliente creado exitosamente";
            echo "Datos: <br>Nombre: $customer_name <br>Apellido: $customer_surname<br>Telefono: $customer_phone<br>Email: $customer_email";
        }else{
            echo "Error al crear el cliente";
        }
        mysqli_close($con);
    }
?>