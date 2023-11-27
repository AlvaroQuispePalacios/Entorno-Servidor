<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<!-- Acuerdate de separar este codigo en otro db_select_customer.php -->
<?php
        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_connect.php');
                    
        //Buscar infomacion(SELECT)
        $sql = ("SELECT * FROM 044_customer");
        $query = mysqli_query($con, $sql);

        $customers = mysqli_fetch_all($query, MYSQLI_ASSOC);//Utilizando MYSQLI_ASSOC se puede utilizar para el nombre de la columna ejemplo:

        mysqli_close($con);
?>

<div class="d-flex justify-content-center align-items-center">

    <table class="border mt-5 text-center">
        <tr class="border p-2">
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Customer Surname</th>
            <th>Customer Phone</th>
            <th>Customer Email</th>
            <th>Customer Password</th>
            <th>Customer Rol</th>
            <th>Customer Image</th>
        </tr>
    
        <?php
            foreach($customers as $customer){ 
        ?>
            <tr class="border">
                <td>
                    <?php print_r($customer['customer_id']);?>
                </td>
                <td>
                    <?php print_r($customer['customer_name']);?>
                </td>
                <td>
                    <?php print_r($customer['customer_surname']);?>
                </td>
                <td>
                    <?php print_r($customer['customer_phone']);?>
                </td>
                <td>
                    <?php print_r($customer['customer_email']);?>
                </td>
                <td>
                    <?php print_r($customer['customer_password']);?>
                </td>
                <td>
                    <?php print_r($customer['customer_rol']);?>
                </td>
                <td>
                    <img src="<?php print_r($customer['customer_img']);?>" alt="img_user" width="150px">
                </td>
            </tr>
            
        <?php
        } 
        ?>
    </table>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>