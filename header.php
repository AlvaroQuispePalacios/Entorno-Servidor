<?php
    if(isset($_POST['submit'])){
        session_start();
        $user = $_SESSION['user'];
    }
    
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css">
    <title>Hotel Los Perdidos</title>

</head>
<body>
    <div class="cabecera">
        <h1 class="titulo">Hotel Los perdidos</h1>
        <div class="contenedor-lista">
            <ul class="lista">
                <li class="itemLista"><a href="./index.php">Inicio</a></li>
                <li class="itemLista"><a href="./pages/rooms.php">Habitaciones</a></li>
                <li class="itemLista"><a href="#">Contacto</a></li>
            </ul>

        </div>
    </div>
    <h3>
        <?php
            echo htmlspecialchars($user);
        ?>
    </h3>