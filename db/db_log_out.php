<?php
    session_start();
    unset($_SESSION['user_name']);
    unset($_SESSION['user_id']);
    header('Location: /student044/dwes/proyectoHotel/index.php');
?>