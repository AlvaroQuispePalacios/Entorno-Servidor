<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/header.php')?>

<?php
    if(isset($_POST['submit'])){
        $customer_id = $_POST['customer_id'];

        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/db/db_connect.php');
                    
        //
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

<h2>Eliminar un cliente</h2>
<form action="../db/db_customer_delete.php" method="POST">
    <h4>Datos del cliente</h4>
    <label for="">Identificador: </label>
    <input type="text" name="customer_id" readonly value="<?php echo $customer_id?>">
    <br>
    <label for="">Nombre: </label>
    <input type="text"  readonly value="<?php echo $customer_name?>">
    <br>
    <label for="">Apellido: </label>
    <input type="text" readonly value="<?php echo $customer_surname?>">
    <br>
    <label for="">Telefono: </label>
    <input type="text"  readonly value="<?php echo $customer_phone?>">
    <br>
    <label for="">Email: </label>
    <input type="text"  readonly value="<?php echo $customer_email?>">
    <br>
    <input type="submit" name="submit" value="Eliminar permanentemente">
</form>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/footer.php')?>