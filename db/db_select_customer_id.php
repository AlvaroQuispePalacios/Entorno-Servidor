<!-- Codigo que buscara los datos del cliente en base al id 
    Estan incluidos en:
-->
<?php
    if(isset($_POST['submit'])){
        $customer_id = $_POST['customer_id'];

        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_connect.php');

        //Query que obtendra los datos 
        $sql = "SELECT * FROM 044_customer WHERE customer_id = $customer_id";

        $resultado = mysqli_query($con, $sql);

        $mostrar = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

        //Capturar los valores del array que es la fila con los datos del cliente que pedimos con el identificador
        $customer_name = $mostrar[0]['customer_name'];
        $customer_surname = $mostrar[0]['customer_surname']; 
        $customer_phone = $mostrar[0]['customer_phone']; 
        $customer_email = $mostrar[0]['customer_email']; 
        $customer_password = $mostrar[0]['customer_password']; 
        $customer_rol = $mostrar[0]['customer_rol'];
        // RECUERDA PONERLO DESPUES CON JAVASCRIPT PARA QUE HAYA UNA PREVISUALIZACION CON JAVASCRIPT
        // $customer_img = $mostrar[0]['customer_img'];
        mysqli_close($con);

    }
?>