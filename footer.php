    <?php if ($user_rol == 'admin') { ?>
        </div>
        </div>
        </div>
    <?php } ?>
    </main>

    <footer class="footer container-fluid ">
        <?php if($user_rol == 'admin'){?>

        <?php }else{?>

            <div class="footer__content row">
    
                <div class="footer__logo col-12 col-lg-2 d-flex justify-content-center">
                    <img src="/student044/dwes/img/LogoHotelSinFondo.png" alt="" class="img-fluid">
                </div>
    
                <div class="footer__contact col-12 col-lg-5 d-flex align-items-center">
                    <div class="row">
                        <div class="d-flex align-items-center col-12 col-lg-4 order-lg-2 mb-4 mb-lg-0">
                            <button class="button w-100">IR A CONTACTO</button>
                        </div>
                        <div class="col-12 col-lg-8">
                            <p class="text-start p-0 fs-5">
                                Contacta con nosotros
                            </p>
                            <p class=" p-0">
                                Oficinas centrales: Donde tu quieras | Menorca | España
                                (+34) 666 032 000 | Departamento comercial: (+34) 735 560 800
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="footer__button d-flex justify-content-end align-items-center col-12 col-lg-5">
                    <button class="button col-12 col-lg-5">RESERVAS DE GRUPO</button>
                </div>
    
                <div class="footer__link d-flex row col-12 text-center mt-4">
                    <ul class="d-flex justify-content-center gap-4 list-unstyled ">
                        <li><a href="/student044/dwes/manual_developer.php">Manual de desarrollador</a></li>
                        <li><a href="/student044/dwes/manual_user.php">Manual de usuario</a></li>
                        <li>Politica de cookeis</li>
                        <li>Condiciones generales de reserva</li>
                    </ul>
                </div>
            </div>
        <?php }?>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="/student044/dwes/js/roomsAvailable.js"></script>

    <script src="/student044/dwes/js/previewReservation.js"></script>
    </body>

    </html>