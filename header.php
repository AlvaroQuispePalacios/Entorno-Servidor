<?php
    session_start();
    $user_name = $_SESSION['user_name']??"Duck";
    $user_id = $_SESSION['user_id']??"";
    $user_rol = $_SESSION['user_rol']??"";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/student044/dwes/css/styles.css">

    <title>Ducks Hotel</title>
</head>
<body>
    <header>
        <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary navbar-dark">
            <div class="container-fluid">
              <a class="navbar-brand p-0" href="/student044/dwes/index.php">
                <img class="logo img-fluid rounded-5 p-0" src="/student044/dwes/img/LogoHotelSinFondo.png" alt="Logo">
                <h5 class="text-warning font-monospace m-0 d-inline">
                  Hola <?php echo $user_name;?>
                </h5>
              </a>
              <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <!-- Condicion que nos muestra ciertas funcionalidades en base a el rol del usuario NULL es un usuario anonimo
                customer es un usuario registrado y admin es un administrador  
              -->
                <?php
                  if($user_rol == 'customer'){ ?>

                    <div class="navbar-nav ms-lg-auto">
                      <a class="nav-link" href="/student044/dwes/index.php">Home</a>
                      <a class="nav-link" href="/student044/dwes/forms/form_room_select.php">Habitaciones</a>
                      <a class="nav-link" href="/student044/dwes/db/db_log_out.php">Log Out</a>
                    </div>



                <?php } elseif($user_rol == 'admin') { ;?>

                    <div class="navbar-nav ms-lg-auto">
                      <a class="nav-link" href="/student044/dwes/index.php">Home</a>

                      <!-- CRUD CUSTOMERS -->
                      <div class="dropdown ms-1">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Customers
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/student044/dwes/forms/customer/form_customer_select.php">Select</a></li>
                          <li><a class="dropdown-item" href="/student044/dwes/forms/customer/form_customer_insert.php">Insert</a></li>
                          <li><a class="dropdown-item"  href="/student044/dwes/forms/customer/form_customer_update_call.php">Update</a></li>
                          <li><a class="dropdown-item"  href="/student044/dwes/forms/customer/form_customer_delete_call.php">Delete</a></li>
                        </ul>
                      </div>

                      <!-- CRUD ROOMS-->
                      <div class="dropdown ms-1">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Rooms
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/student044/dwes/forms/form_room_select.php">Select</a></li>
                          <li><a class="dropdown-item" href="/student044/dwes/forms/room/form_room_insert.php">Insert</a></li>
                          <li><a class="dropdown-item" href="/student044/dwes/forms/room/form_room_update_call.php">Update</a></li>
                          <li><a class="dropdown-item" href="/student044/dwes/forms/room/form_room_delete_call.php">Delete</a></li>
                        </ul>
                      </div>

                      <!-- CRUD RESERVATION-->
                      <div class="dropdown ms-1">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Reservations
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/student044/dwes/forms/reservation/form_reservation_select.php">Select</a></li>
                          <!-- <li><a class="dropdown-item" href="/student044/dwes/forms/form_room_insert.php">Insert</a></li>-->
                          <li><a class="dropdown-item" href="/student044/dwes/forms/reservation/form_reservation_update_call.php">Update</a></li>
                          <li><a class="dropdown-item" href="/student044/dwes/forms/reservation/form_reservation_delete_call.php">Delete</a></li>
                        </ul>
                      </div>
                      <a class="nav-link" href="/student044/dwes/db/db_log_out.php">Log Out</a>
                    </div> 


                <?php } else {?>

                      <div class="navbar-nav ms-lg-auto">
                        <a class="nav-link" href="/student044/dwes/index.php">Home</a>
                        <a class="nav-link" href="/student044/dwes/forms/form_room_select.php">Habitaciones</a>
                        <a class="nav-link" href="/student044/dwes/forms/form_login.php">Login</a>
                      </div>

                <?php }?>
              </div>
            </div>
          </nav> 
          
    </header>
    <main>