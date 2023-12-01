
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DucksHotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/student044/dwes/css/styles.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="sidemenu d-flex p-2 flex-column justify-content-between col-auto col-sm-3 col-lg-2 bg-dark min-vh-100">
                <div class="mt-3 sticky-top">

                    <a class="d-flex d-none d-sm-inline text-decoration-none mt-1 align-items-center text-white" role="button">
                        <div class="fs-5">DucksHotel</div>
                    </a>

                    <hr class="text-white d-none d-sm-block mt-0">

                    <ul class="nav nav-pills flex-column mt-2 mt-sm-0" id="menu">
                        <!-- Customer -->
                        <li class="nav-item my-sm-1 my-2">
                            <a href="#customer" data-bs-toggle="collapse" class="nav-link text-white d-flex justify-content-start text-center text-sm-start" aria-current="page">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" fill="white" viewBox="0 0 448 512">
                                        <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                    </svg>
                                </div>
                                <span class="ms-2 d-none d-sm-inline">Customer</span>
                            </a>

                            <ul class="nav collapse ms-2 flex-column" id="customer" data-bs-parent="#menu">
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="/student044/dwes/forms/customer/form_customer_select.php" aria-current="page">Select</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#" aria-current="page">Insert</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#" aria-current="page">Update</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#" aria-current="page">Delete</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Room -->
                        <li class="nav-item my-sm-1 my-2">
                            <a href="#room" data-bs-toggle="collapse" class="nav-link text-white d-flex justify-content-start text-center text-sm-start" aria-current="page">
                                <div class="d-flex justify-content-center align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" fill="white" viewBox="0 0 640 512">
                                        <path d="M32 32c17.7 0 32 14.3 32 32V320H288V160c0-17.7 14.3-32 32-32H544c53 0 96 43 96 96V448c0 17.7-14.3 32-32 32s-32-14.3-32-32V416H352 320 64v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V64C0 46.3 14.3 32 32 32zm144 96a80 80 0 1 1 0 160 80 80 0 1 1 0-160z" />
                                    </svg>
                                </div>
                                <span class="ms-2 d-none d-sm-inline">Room</span>
                            </a>

                            <ul class="nav collapse ms-2 ms-sm-2  flex-column" id="room" data-bs-parent="#menu">
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#" aria-current="page">Select</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#" aria-current="page">Insert</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#" aria-current="page">Update</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#" aria-current="page">Delete</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Reservation -->
                        <li class="nav-item my-sm-1 my-2">
                            <a href="#reservation" data-bs-toggle="collapse" class="nav-link text-white d-flex justify-content-start text-center text-sm-start" aria-current="page">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" fill="white" viewBox="0 0 512 512">
                                        <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                                    </svg>
                                </div>
                                <span class="ms-2 d-none d-sm-inline">Reservation</span>
                            </a>

                            <ul class="nav collapse ms-2 ms-sm-2 flex-column" id="reservation" data-bs-parent="#menu">
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#" aria-current="page">Select</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#" aria-current="page">Insert</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#" aria-current="page">Update</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#" aria-current="page">Delete</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col">

