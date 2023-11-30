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
        <!-- 
            <div class="row flex-nowrap">
            <div class="bg-dark col-auto col-md-3 col-lg-2 min-vh-100 d-flex flex-column justify-content-between">
                <div class="bg-dark p-2">
                    <a class="d-flex text-decoration-none mt-1 align-items-center text-white">
                        <span class="fs-4 d-none d-sm-inline">SideMenu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mt-4">
                        <li class="nav-item py-2 py-sm-0">
                            <a href="" class="nav-link text-white d-flex justify-content-start">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" fill="white" viewBox="0 0 576 512">
                                        <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                                    </svg>
                                </div>
                                <span class="fs-6 ms-2 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="" class="nav-link text-white d-flex justify-content-start">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" fill="white" viewBox="0 0 448 512">
                                        <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                    </svg>
                                </div>
                                <span class="fs-6 ms-2 d-none d-sm-inline">Customer</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="" class="nav-link text-white d-flex justify-content-start">
                                <div class="d-flex justify-content-center align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" fill="white" viewBox="0 0 640 512">
                                        <path d="M32 32c17.7 0 32 14.3 32 32V320H288V160c0-17.7 14.3-32 32-32H544c53 0 96 43 96 96V448c0 17.7-14.3 32-32 32s-32-14.3-32-32V416H352 320 64v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V64C0 46.3 14.3 32 32 32zm144 96a80 80 0 1 1 0 160 80 80 0 1 1 0-160z" />
                                    </svg>
                                </div>
                                <span class="fs-6 ms-2 d-none d-sm-inline">Room</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 d-flex">
                            <a href="" class="nav-link text-white d-flex justify-content-start">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" fill="white" viewBox="0 0 512 512">
                                        <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                                    </svg>
                                </div>
                                <span class="fs-6 ms-2 d-none d-sm-inline">Reservation</span>

                            </a>
                        </li>
                    </ul>
                </div> 
            -->
        <div class="row">
            <div class="bg-dark col-auto min-vh-100 d-flex flex-column justify-content-between">
                <div>
                    <a class="d-flex text-decoration-none mt-1 align-items-center text-white ms-4" role="button">
                        <span class="fs-4">SideMenu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mt-2 mt-sm-0" id="menu">

                        <li class="nav-item py-2 py-sm-0">
                            <a href="#sidemenu" data-bs-toggle="collapse" class="nav-link text-white d-flex justify-content-start" aria-current="page">
                                <span class="ms-2">Customer</span>
                            </a>
                        </li>

                        <ul class="nav collapse" id="sidemenu" data-bs-parent="#menu">
                            <li class="nav-item">
                                <a class="nav-link" href="#" aria-current="page">Select</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" aria-current="page">Insert</a>
                            </li>
                        </ul>
                        
                    </ul>
                </div>
            </div>
            <div class="col">

            </div>
        </div>
    </div>