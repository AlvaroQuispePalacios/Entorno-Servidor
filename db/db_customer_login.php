<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/header.php')?>
<?php
    
    if(isset($_POST['submit'])){

        $customer_email = $_POST['customer_email'];
        $pwd = $_POST['pwd'];

        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/db/db_connect.php');
        
        //Query que obtendra los datos 
        $sql = "SELECT * FROM 044_customer WHERE customer_email = '$customer_email' AND customer_password = '$pwd'";

        $resultado = mysqli_query($con, $sql);

        $mostrar = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        
        $_SESSION['user_name'] = $mostrar[0]['customer_name'];
        
        $_SESSION['user_id'] = $mostrar[0]['customer_id'];
        print_r($mostrar);
        //Toma 
        // $user = $mostrar[0]['customer_id'];
        // echo $user;
        // if(empty($mostrar)){
        //     echo "No existe";
        // }

        mysqli_close($con);

    }
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/footer.php')?>