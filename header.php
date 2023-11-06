<?php
    session_start();
    $user_name = $_SESSION['user_name']??"Duck";
    $user_id = $_SESSION['user_id']??"";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/student044/dwes/proyectoHotel/styles.css">

    <title>Ducks</title>
</head>
<body>
    <header>
        <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary navbar-dark">
            <div class="container-fluid text-center">
              <a class="navbar-brand p-0" href="/student044/dwes/proyectoHotel/index.php">
                <img class="logo img-fluid rounded-5 p-0" src="/student044/dwes/proyectoHotel/img/LogoHotelSinFondo.png" alt="Logo">
                <h5 class="text-warning font-monospace m-0 d-inline">
                  Hola <?php echo $user_name;?>
                </h5>
              </a>
              <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarNavAltMarkup">

                <div class="navbar-nav ms-lg-auto">

                  <a class="nav-link" href="/student044/dwes/proyectoHotel/index.php">Home</a>
                  <a class="nav-link" href="/student044/dwes/proyectoHotel/forms/form_customer_login.php">Login</a>
                  <a class="nav-link" href="/student044/dwes/proyectoHotel/forms/form_customer_select.php">Customer Select</a>
                  <a class="nav-link" href="/student044/dwes/proyectoHotel/forms/form_customer_insert.php">Customer Insert</a>
                  <a class="nav-link" href="/student044/dwes/proyectoHotel/forms/form_customer_update_call.php">Customer Update</a>
                  <a class="nav-link" href="/student044/dwes/proyectoHotel/forms/form_customer_delete_call.php">Customer Delete</a>
                  <a class="nav-link" href="/student044/dwes/proyectoHotel/forms/form_room_select.php">Room Select</a>
                  <a class="nav-link" href="/student044/dwes/proyectoHotel/forms/form_room_insert.php">Room Insert</a>
                  <a class="nav-link" href="/student044/dwes/proyectoHotel/db/db_log_out.php">Log Out</a>

                </div>
              </div>
            </div>
          </nav> 
    </header>
    <main>


        