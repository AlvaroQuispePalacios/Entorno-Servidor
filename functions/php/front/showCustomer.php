<?php
function showCustomer($dbCustomer)
{
?>

    <div class="card" style="width: 18rem;">
        <div class="d-flex justify-content-center">
            <img src="<?php print_r($dbCustomer['customer_img']) ?>" class="card-img-top" alt="" style="padding:1rem; width:12rem">
        </div>

        <div class="card-body">
            <h5 class="card-title"><?php echo $dbCustomer["customer_name"] . " " . $dbCustomer["customer_surname"] ?></h5>
            <p class="card-text">
            <ul>
                <li>ID: <?php echo ($dbCustomer["customer_id"]) ?></li>
                <li>Phone: <?php echo ($dbCustomer["customer_phone"]) ?></li>
                <li>Email: <?php echo ($dbCustomer["customer_email"]) ?></li>
                <li>Password: <?php echo ($dbCustomer["customer_password"]) ?></li>
                <li>Rol: <?php echo ($dbCustomer["customer_rol"]) ?></li>
            </ul>
            </p>
            <div class="d-flex justify-content-end gap-2">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/miniForms/mini_form_customer_update.php') ?>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/miniForms/mini_form_customer_delete.php') ?>
            </div>

        </div>
    </div>
<?php } ?>