<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<!-- Acuerdate de separar este codigo en otro db_select_customer.php -->
<?php

//Conexion a la base de datos
include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');

//Buscar infomacion(SELECT)
$sql = ("SELECT * FROM 044_customer");
$query = mysqli_query($con, $sql);

$customers = mysqli_fetch_all($query, MYSQLI_ASSOC); //Utilizando MYSQLI_ASSOC se puede utilizar para el nombre de la columna ejemplo:

mysqli_close($con);
?>

<div class="title">
    Customer
</div>

<div class="search">
    <form>
        <label>Nombre:</label>
        <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
    </form>
</div>


<div class="d-flex justify-content-around flex-wrap gap-2" id="searchCustomer">

</div>


<script>
    function showHint(str) {
        if (str.length == 0) {
            document.getElementById("searchName").innerHTML = "";
            return;
        } else {
            let http = new XMLHttpRequest();
            http.onreadystatechange = () => {
                if (http.readyState == 4 && http.status == 200) {
                    document.getElementById("searchCustomer").innerHTML = http.responseText;
                    console.log(http.responseText);
                }
            };
            http.open("GET", "/student044/dwes/db/customer/ajax_db_customer_select.php?q=" + str, true);
            http.send();
        }
    }
</script>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>