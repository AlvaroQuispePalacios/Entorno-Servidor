<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<h3>Crear a un cliente</h3>

<div class="form">
    <form class="d-flex p-5" action="/student044/dwes/db/customer/db_customer_insert.php" method="POST" enctype="multipart/form-data">
        <div class="container contenedor__form">
            <div class="row">

                <div class="col-6">
                    <label for="">Nombre: </label>
                    <input type="text" name="customer_name" required>

                    <label for="">Apellido: </label>
                    <input type="text" name="customer_surname" required>

                    <label for="">Telefono: </label>
                    <input type="text" name="customer_phone" required>

                    <label for="">Email: </label>
                    <input type="text" name="customer_email" required>

                    <label for="">Contraseña </label>
                    <input type="text" name="customer_password" required>


                </div>
                <div class="col-6">

                    <label for="">Rol: </label>
                    <select name="customer_rol" required>
                        <option value="customer">Customer</option>
                        <option value="admin">Admin</option>
                    </select>

                    <label for="">Img: </label>
                    <input type="file" name="file">
                </div>

            </div>
            <div class="row justify-content-center mt-4">
                <input type="submit" name="submit" value="Crear cliente">
            </div>

        </div>
    </form>

</div>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>