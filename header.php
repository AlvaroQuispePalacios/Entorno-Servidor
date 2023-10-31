<?php
    session_start();
    $user = $_SESSION['user']??"amigo";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/student044/dwes/proyectoHotel/styles.css">

    <title>Hotel Los Perdidos</title>
</head>
<body>
    <div class="cabecera">
        <h1 class="titulo">Hotel Los perdidos</h1>
        <div class="contenedor-lista">
            <ul class="lista">
                <li class="itemLista"><a href="/student044/dwes/proyectoHotel/index.php">Inicio</a></li>
                <li class="itemLista"><a href="/student044/dwes/proyectoHotel/forms/form_customer_select.php">Customer Select</a></li>
                <li class="itemLista"><a href="/student044/dwes/proyectoHotel/forms/form_customer_insert.php">Customer Insert</a></li>
                <li class="itemLista"><a href="/student044/dwes/proyectoHotel/forms/form_customer_update_call.php">Customer Update</a></li>
                <li class="itemLista"><a href="/student044/dwes/proyectoHotel/forms/form_customer_delete_call.php">Customer Delete</a></li>
                <li class="itemLista"></li>
                <li class="itemLista"></li>
                <li class="itemLista"></li>
            </ul>
            
        </div>
    </div>
    <h3>
        <?php
            echo $user;
        ?>
    </h3>