<?php
    if(isset($_POST['customer_update_call'])){
        $customer_id = $_POST['customer_id'];

        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/db/db_connect.php');

        //Verificar que el usuario exista(Prueba) Funciona, pero quiero que no me muestre el formulario si no existe el cliente, para eso tengo que pasar el formulario a otro archivo para asi cuando se verifique que el cliente existe entonces llame al formulario que mostrara los datos del cliente y me permitira hacer un UPDATE de sus datos
        /*
        $sql_customer_verification = "SELECT customer_id FROM 044_customer";
        $resultado_customer_verification = mysqli_query($con, $sql_customer_verification);
        $mostrar_customer_verification = mysqli_fetch_all($resultado_customer_verification, MYSQLI_ASSOC);

        for($i = 0; $i < sizeof($mostrar_customer_verification); $i++){
            if($mostrar_customer_verification[$i]['customer_id'] == $customer_id){
                //Query que obtendra los datos 
                $sql = "SELECT * FROM 044_customer WHERE customer_id = $customer_id";

                $resultado = mysqli_query($con, $sql);

                $mostrar = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

                //Capturar los valores del array que es la fila con los datos del cliente que pedimos con el identificador
                $customer_name = $mostrar[0]['customer_name'];
                $customer_surname = $mostrar[0]['customer_surname']; 
                $customer_phone = $mostrar[0]['customer_phone']; 
                $customer_email = $mostrar[0]['customer_email']; 

                // print_r($mostrar);
                // echo $customer_name;
                // echo $customer_surname;
                // echo $customer_phone;
                // echo $customer_email;

                mysqli_close($con);
            }else{
                $customer_name= "";
                $customer_surname= ""; 
                $customer_phone = ""; 
                $customer_email = ""; 
                echo "El cliente no existe";
            }
        }
        */

        //Query que obtendra los datos 
        $sql = "SELECT * FROM 044_customer WHERE customer_id = $customer_id";

        $resultado = mysqli_query($con, $sql);

        $mostrar = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

        //Capturar los valores del array que es la fila con los datos del cliente que pedimos con el identificador
        $customer_name = $mostrar[0]['customer_name'];
        $customer_surname = $mostrar[0]['customer_surname']; 
        $customer_phone = $mostrar[0]['customer_phone']; 
        $customer_email = $mostrar[0]['customer_email']; 

        // print_r($mostrar);
        // echo $customer_name;
        // echo $customer_surname;
        // echo $customer_phone;
        // echo $customer_email;

        mysqli_close($con);

    }
?>

<h3>Actualizar datos del cliente</h3>
<form action="../db/db_customer_update.php" method="POST">
    <label for="">Identificador: </label>
    <input type="text" name="customer_id" readonly value="<?php echo $customer_id?>">
    <br>
    <label for="">Nombre: </label>
    <input type="text" name="customer_name" value="<?php echo $customer_name?>">
    <br>
    <label for="">Apellido: </label>
    <input type="text" name="customer_surname" value="<?php echo $customer_surname?>">
    <br>
    <label for="">Telefono: </label>
    <input type="text" name="customer_phone" value="<?php echo $customer_phone?>">
    <br>
    <label for="">Email: </label>
    <input type="text" name="customer_email" value="<?php echo $customer_email?>">
    <br>
    <input type="submit" name="customer_update" value="Actualizar">
</form>