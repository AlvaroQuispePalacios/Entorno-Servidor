<?php
session_start();
$user_name = $_SESSION['user_name'] ?? "Duck";
$user_id = $_SESSION['user_id'] ?? "";
$user_rol = $_SESSION['user_rol'] ?? "";
$user_img = $_SESSION['user_img'] ?? "";
?>


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<link rel="stylesheet" href="/student044/dwes/css/styles.css">

	<title>Ducks Hotel</title>
</head>

<body>
	<?php if ($user_rol != 'admin') { ?>
		<header>
			<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary navbar-dark">
				<div class="container-fluid px-5">
					<a class="navbar-brand p-0" href="/student044/dwes/index.php">
						<img class="logo img-fluid rounded-5 p-0" src="/student044/dwes/img/LogoHotelSinFondo.png" alt="Logo">
						<h5 class="text-warning font-monospace m-0 d-inline">
							Hola <?php echo $user_name; ?>
						</h5>
					</a>
					<button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarNavAltMarkup">
						<!-- Condicion que nos muestra ciertas funcionalidades en base a el rol del usuario NULL es un usuario anonimo
					customer es un usuario registrado y admin es un administrador  
				  -->
						<?php
						if ($user_rol == 'customer') { ?>

							<div class="navbar-nav ms-lg-auto">
								<a class="nav-link" href="/student044/dwes/index.php">Inicio</a>
								<a class="nav-link" href="/student044/dwes/forms/room/form_room_select_customer.php">Habitaciones</a>
							</div>

							<!-- Mostrar la foto del usuario -->
							<div class="dropdown ms-1">
								<button class="btn btn-user dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="<?php echo $user_img; ?>" class="btn-user__img">
									<span><?php echo $user_name ?></span>
								</button>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="">Mis reservas</a></li>
									<li><a class="dropdown-item" href="/student044/dwes/db/db_log_out.php">Log Out</a></li>
								</ul>
							</div>
					</div>



				<?php } elseif ($user_rol == 'admin') {; ?>

					<div class="navbar-nav ms-lg-auto">
						<a class="nav-link" href="/student044/dwes/index.php">Inicio</a>


						<div class="dropdown ms-1">
							<button class="btn btn-user dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
								Customers
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="/student044/dwes/db/customer/db_customer_select.php">Select</a></li>
								<li><a class="dropdown-item" href="/student044/dwes/forms/customer/form_customer_insert.php">Insert</a></li>
								<li><a class="dropdown-item" href="/student044/dwes/forms/customer/form_customer_update_call.php">Update</a></li>
								<li><a class="dropdown-item" href="/student044/dwes/forms/customer/form_customer_delete_call.php">Delete</a></li>
							</ul>
						</div>


						<div class="dropdown ms-1">
							<button class="btn btn-user dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
								Rooms
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="/student044/dwes/forms/room/form_room_select.php">Select</a></li>
								<li><a class="dropdown-item" href="/student044/dwes/forms/room/form_room_insert.php">Insert</a></li>
								<li><a class="dropdown-item" href="/student044/dwes/forms/room/form_room_update_call.php">Update</a></li>
								<li><a class="dropdown-item" href="/student044/dwes/forms/room/form_room_delete_call.php">Delete</a></li>
							</ul>
						</div>


						<div class="dropdown ms-1">
							<button class="btn btn-user dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
								Reservations
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="/student044/dwes/db/reservation/db_reservation_select.php">Select</a></li>
								<li><a class="dropdown-item" href="/student044/dwes/forms/reservation/form_reservation_update_call.php">Update</a></li>
								<li><a class="dropdown-item" href="/student044/dwes/forms/reservation/form_reservation_delete_call.php">Delete</a></li>
							</ul>
						</div>


						<div class="dropdown ms-1">
							<button class="btn btn-user dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
								Room Category
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="/student044/dwes/db/room_category/db_room_category_select.php">Select</a></li>
								<li><a class="dropdown-item" href="/student044/dwes/forms/room_category/form_room_category_insert.php">Insert</a></li>
								<li><a class="dropdown-item" href="#">Update</a></li>
								<li><a class="dropdown-item" href="#">Delete</a></li>
							</ul>
						</div>

						<!-- Mostrar la foto del usuario -->
						<div class="dropdown ms-1">
							<button class="btn btn-user dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
								<img src="<?php echo $user_img; ?>" class="btn-user__img">
								<span><?php echo $user_name ?></span>
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="/student044/dwes/db/db_log_out.php">Log Out</a></li>
							</ul>
						</div>
					</div>



				<?php } else { ?>

					<div class="navbar-nav ms-lg-auto">
						<a class="nav-link" href="/student044/dwes/index.php">Inicio</a>
						<a class="nav-link" href="/student044/dwes/forms/room/form_room_select_customer.php">Habitaciones</a>
						<a class="nav-link" href="/student044/dwes/forms/form_login.php">Login</a>
					</div>

				<?php } ?>
				</div>
				</div>
			</nav>

		</header>
	<?php }?>

	<main>

		<?php if($user_rol == 'admin'){?>
			<div class="container-fluid">
				<div class="row">
					<div class="sidemenu d-flex p-2 flex-column justify-content-between col-auto col-sm-3 col-lg-2 bg-dark min-vh-100">
						<div class="sticky-top">
							<div class="d-flex justify-content-center justify-content-sm-start align-items-center">
								<a href="">
									<img class="logo img-fluid rounded-5 p-0" src="/student044/dwes/img/LogoHotelSinFondo.png" alt="Logo">
								</a>
								<a class="d-flex d-none d-sm-inline text-decoration-none mt-1 align-items-center text-white" role="button">
									<div class="fs-2">Hotel</div>
								</a>
							</div>
							<hr class="text-white d-none d-sm-block mt-0">
							<ul class="nav nav-pills flex-column mt-2 mt-sm-0" id="menu">

								<li class="nav-item">
									<a href="#user" data-bs-toggle="collapse" class="nav-link text-white d-flex justify-content-center justify-content-sm-start text-center text-sm-start p-2" aria-current="page">
										<div class="d-flex justify-content-start align-items-center gap-2">
											<img src="<?php echo $user_img?>" class="img-fluid rounded-circle" width="40px">
											<span class="d-none d-sm-inline fs-6 fw-bold"><?php echo $user_name?></span>
										</div>
									</a>

									<ul class="nav collapse ms-0 ms-sm-2 flex-column" id="user" data-bs-parent="#menu">
										<li class="nav-item">
											<a class="nav-link text-white" href="/student044/dwes/db/db_log_out.php" aria-current="page">Log out</a>
										</li>

									</ul>
								</li>

								<li class="nav-item my-sm-1 my-2">
									<a href="#customer" data-bs-toggle="collapse" class="nav-link text-white d-flex justify-content-center justify-content-sm-start text-center text-sm-start" aria-current="page">
										<div class="d-flex justify-content-center align-items-center">
											<svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" fill="white" viewBox="0 0 640 512">
												<<path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z" />
											</svg>
										</div>
										<span class="ms-2 d-none d-sm-inline">Customer</span>
									</a>

									<ul class="nav collapse ms-2 flex-column" id="customer" data-bs-parent="#menu">
										<li class="nav-item">
											<a class="nav-link text-white" href="/student044/dwes/db/customer/db_customer_select.php" aria-current="page">Select</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-white" href="/student044/dwes/forms/customer/form_customer_insert.php" aria-current="page">Insert</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-white" href="/student044/dwes/forms/customer/form_customer_update_call.php" aria-current="page">Update</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-white" href="/student044/dwes/forms/customer/form_customer_delete_call.php" aria-current="page">Delete</a>
										</li>
									</ul>
								</li>

								<li class="nav-item my-sm-1 my-2">
									<a href="#room" data-bs-toggle="collapse" class="nav-link text-white d-flex justify-content-center justify-content-sm-start text-center text-sm-start" aria-current="page">
										<div class="d-flex justify-content-center align-items-center">
											<svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" fill="white" viewBox="0 0 640 512">
												<path d="M32 32c17.7 0 32 14.3 32 32V320H288V160c0-17.7 14.3-32 32-32H544c53 0 96 43 96 96V448c0 17.7-14.3 32-32 32s-32-14.3-32-32V416H352 320 64v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V64C0 46.3 14.3 32 32 32zm144 96a80 80 0 1 1 0 160 80 80 0 1 1 0-160z" />
											</svg>
										</div>
										<span class="ms-2 d-none d-sm-inline">Room</span>
									</a>

									<ul class="nav collapse ms-2 ms-sm-2  flex-column" id="room" data-bs-parent="#menu">
										<li class="nav-item">
											<a class="nav-link text-white" href="/student044/dwes/db/room/db_room_select.php" aria-current="page">Select</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-white" href="/student044/dwes/forms/room/form_room_insert.php" aria-current="page">Insert</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-white" href="/student044/dwes/forms/room/form_room_update_call.php" aria-current="page">Update</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-white" href="/student044/dwes/forms/room/form_room_delete_call.php" aria-current="page">Delete</a>
										</li>
									</ul>
								</li>

								<li class="nav-item my-sm-1 my-2">
									<a href="#room_category" data-bs-toggle="collapse" class="nav-link text-white d-flex justify-content-center justify-content-sm-start text-center text-sm-start" aria-current="page">
										<div class="d-flex justify-content-center align-items-center">
											<svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" fill="white" viewBox="0 0 640 512">
												<path d="M483.2 9.6L524 64h92c13.3 0 24 10.7 24 24s-10.7 24-24 24H512c-7.6 0-14.7-3.6-19.2-9.6L468.7 70.3l-47 99.9c-3.7 7.8-11.3 13.1-19.9 13.7s-16.9-3.4-21.7-10.6L339.2 112H216c-13.3 0-24-10.7-24-24s10.7-24 24-24H352c8 0 15.5 4 20 10.7l24.4 36.6 45.9-97.5C445.9 6.2 453.2 1 461.6 .1s16.6 2.7 21.6 9.5zM320 160h12.7l20.7 31.1c11.2 16.8 30.6 26.3 50.7 24.8s37.9-13.7 46.5-32L461.9 160H544c53 0 96 43 96 96V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V448H352 320 64v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V96C0 78.3 14.3 64 32 64s32 14.3 32 32V352H288V192c0-17.7 14.3-32 32-32zm-144 0a80 80 0 1 1 0 160 80 80 0 1 1 0-160z" />
											</svg>
										</div>
										<span class="ms-2 d-none d-sm-inline">Room Category</span>
									</a>

									<ul class="nav collapse ms-2 ms-sm-2  flex-column" id="room_category" data-bs-parent="#menu">
										<li class="nav-item">
											<a class="nav-link text-white" href="/student044/dwes/db/room_category/db_room_category_select.php" aria-current="page">Select</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-white" href="/student044/dwes/forms/room_category/form_room_category_insert.php" aria-current="page">Insert</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-white" href="#" aria-current="page">Update</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-white" href="#" aria-current="page">Delete</a>
										</li>
									</ul>
								</li>

								<li class="nav-item my-sm-1 my-2">
									<a href="#reservation" data-bs-toggle="collapse" class="nav-link text-white d-flex justify-content-center justify-content-sm-start text-center text-sm-start" aria-current="page">
										<div>
											<svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" fill="white" viewBox="0 0 512 512">
												<path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
											</svg>
										</div>
										<span class="ms-2 d-none d-sm-inline">Reservation</span>
									</a>

									<ul class="nav collapse ms-2 ms-sm-2 flex-column " id="reservation" data-bs-parent="#menu">
										<li class="nav-item">
											<a class="nav-link text-white" href="/student044/dwes/db/reservation/db_reservation_select.php" aria-current="page">Select</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-white" href="/student044/dwes/forms/reservation/form_reservation_insert.php" aria-current="page">Insert</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-white" href="/student044/dwes/forms/reservation/form_reservation_update_call.php" aria-current="page">Update</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-white" href="/student044/dwes/forms/reservation/form_reservation_delete_call.php" aria-current="page">Delete</a>
										</li>
									</ul>
								</li>

							</ul>



						</div>
					</div>
					<div class="col px-0">
		<?php }?>