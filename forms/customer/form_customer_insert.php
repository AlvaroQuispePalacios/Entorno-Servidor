<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<?php

function validateText($text)
{
    return htmlspecialchars($text);
}

$errors = array("name" => "", "surname" => "", "phone" => "", "email" => "");

if (isset($_POST["submit"])) {

    $customer_name = validateText($_POST['customer_name']);
    $customer_surname = validateText($_POST['customer_surname']);
    $customer_phone = validateText($_POST['customer_phone']);
    $customer_email = validateText($_POST['customer_email']);
    $customer_password = validateText($_POST['customer_password']);
    $customer_rol = $_POST['customer_rol'];

    // Validar nombre del usuario a crear
    if (empty($customer_name)) {
    } else {
        // $customer_name = validateText($_POST["customer_name"]);
        if (!preg_match('/^[a-zA-Z\s]+$/', $customer_name)) {
            $errors["name"] = "El nombre no es valido";
        }
    }

    // Validar apellido del usuario a crear
    if (empty($_POST["customer_surname"])) {
    } else {
        // $customer_surname = validateText($_POST["customer_surname"]);
        if (!preg_match('/^[a-zA-Z\s]+$/', $customer_surname)) {
            $errors["surname"] = "El apellido no es valido";
        }
    }

    // Validar el teléfono del usuario a crear
    if (empty($_POST["customer_phone"])) {
    } else {
        // $customer_phone = validateText($_POST["customer_phone"]);
        if (!preg_match('/^[0-9]{9}+$/', $customer_phone)) {
            $errors["phone"] = "El teléfono no es valido";
        }
    }

    // Validar email del usuario a crear
    if (empty($_POST["customer_email"])) {
    } else {
        // $customer_email = validateText($_POST["customer_email"]);
        if (!filter_var($customer_email, FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "El email no es valido";
        }
    }

    if (array_filter($errors)) {
        // echo "Hay algun error";

    } else {

        // $customer_name = $_POST['customer_name'];
        // $customer_surname = $_POST['customer_surname'];
        // $customer_phone = $_POST['customer_phone'];
        // $customer_email = $_POST['customer_email'];
        // $customer_password = $_POST['customer_password'];
        // $customer_rol = $_POST['customer_rol'];

        // Include para poder subir archivos
        include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_file.php');

        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');

        //
        $sql = "INSERT INTO 044_customer (customer_id, customer_name, customer_surname, customer_phone, customer_email, customer_password,customer_rol, customer_img) VALUES 
                (DEFAULT, '$customer_name', '$customer_surname', '$customer_phone', '$customer_email', '$customer_password', '$customer_rol', '$path_img')";

        $resultado = mysqli_query($con, $sql);
        mysqli_close($con);

        if ($resultado) {
            // header("location: ". $_SERVER['DOCUMENT_ROOT']."/student044/dwes/db/customer/db_customer_insert.php");
            echo '<div class="alert alert-success" role="alert">Cliente creado correctamente</div>';

        } else {
            // echo "Error al crear el cliente";
        }
    }
}
?>


<h3>Crear a un cliente</h3>

<div class="form">

    <form class="d-flex p-5" action="./form_customer_insert.php" method="POST" enctype="multipart/form-data">
        <div class="container contenedor__form">
            <h4>Datos del cliente</h4>
            <div class="row">

                <div class="col-6">
                    <label for="">Nombre: </label>
                    <input type="text" name="customer_name" required>
                    <div class="text-danger"><?php echo $errors["name"] ?></div>

                    <label for="">Apellido: </label>
                    <input type="text" name="customer_surname" required>
                    <div class="text-danger"><?php echo $errors["surname"] ?></div>

                    <label for="">Telefono: </label>
                    <input type="text" name="customer_phone" required>
                    <div class="text-danger"><?php echo $errors["phone"] ?></div>

                    <label for="">Email: </label>
                    <input type="text" name="customer_email" required>
                    <div class="text-danger"><?php echo $errors["email"] ?></div>

                    <label for="">Contraseña </label>
                    <input type="text" name="customer_password" required>
                    <div class="text-danger"></div>
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