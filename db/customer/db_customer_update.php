<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<?php
    if(isset($_POST['submit'])){

        $customer_id = $_POST['customer_id'];
        $customer_name = $_POST['customer_name'];
        $customer_surname = $_POST['customer_surname'];
        $customer_phone = $_POST['customer_phone'];
        $customer_email = $_POST['customer_email'];
        $customer_password = $_POST['customer_password'];
        $customer_rol = $_POST['customer_rol'];

        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_file.php');

        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_connect.php');
                    
        //
        $sql = "UPDATE 044_customer SET customer_name = '$customer_name', customer_surname = '$customer_surname', customer_phone = '$customer_phone', customer_email = '$customer_email', customer_password = '$customer_password', customer_rol = '$customer_rol', customer_img = '$path_img' WHERE customer_id = $customer_id";

        $resultado = mysqli_query($con, $sql);

    }
?>

<?php if($resultado){ ?>
    <?php echo "actualizado"?>
<?php }else {?>
    <?php echo "error"?>
<?php }?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>