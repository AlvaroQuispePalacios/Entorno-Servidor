<?php
    session_start();
    $user = $_SESSION['user']??"amigo";
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
        <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary navbar-dark text-center">
            <div class="container">
              <a class="navbar-brand" href="/student044/dwes/proyectoHotel/index.php">
                <img class="logo img-fluid rounded-5" src="/student044/dwes/proyectoHotel/img/LogoHotelSinFondo.png" alt="Logo">
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
                  <a class="nav-link" href="/student044/dwes/proyectoHotel/forms/form_reservation_insert.php">Reservation Insert</a>
                  
                </div>
              </div>
            </div>
          </nav> 
    </header>

        <?php echo $user;?>