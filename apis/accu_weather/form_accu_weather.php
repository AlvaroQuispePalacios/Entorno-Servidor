<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<?php
    if(isset($_POST["submit"])){
        
    }
?>


<form action="/student044/dwes/apis/accu_weather/db_accu_weather.php" method="POST">
    <input type="submit" name="submit" value="submit">
</form>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>
