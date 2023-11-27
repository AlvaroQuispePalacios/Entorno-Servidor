<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<?php
    if(isset($_POST['submit'])){

        $customer_name = $_POST['customer_name'];
        $customer_surname = $_POST['customer_surname'];
        $customer_phone = $_POST['customer_phone'];
        $customer_email = $_POST['customer_email'];
        $customer_password = $_POST['customer_password'];
        $customer_rol = $_POST['customer_rol'];

        echo '<br>'.$customer_password.'<br>';

        // Include para poder subir archivos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_file.php');

        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_connect.php');
        
                    
        //
        $sql = "INSERT INTO 044_customer (customer_id, customer_name, customer_surname, customer_phone, customer_email, customer_password,customer_rol, customer_img) VALUES 
                (DEFAULT, '$customer_name', '$customer_surname', '$customer_phone', '$customer_email', '$customer_password', '$customer_rol', '$path_img')";

        $resultado = mysqli_query($con, $sql);

        if ($resultado){
            echo "Cliente creado exitosamente";
        }else{
            echo "Error al crear el cliente";
        }
        mysqli_close($con);
    }
?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>