<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>



<div class=" d-flex justify-content-center align-items-center p-3 pt-0">

    <section class="rounded row mt-3 border">

        <article class="login-card-background-img d-flex justify-content-center align-items-center">
            
            <img class="img-fluid login-card-img rounded-circle p-3" src="/student044/dwes/img/LogoHotel.jpg">
            
        </article>

        <article class="login-card-content text-center">

            <h2 class="login-card-title">Login</h2>

            <form action="/student044/dwes/db/db_login.php" method="POST">
                
                <!-- Email -->
                <div class="form-floating mb-3" >
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="customer_email">
                    <label for="floatingInput">Email</label>
                </div>

                <!-- Contraseña -->
                <div class="form-floating mb-3">
                    <input class="form-control" id="floatingInput" placeholder="name@example.com" type="password" name="pwd">
                    <label for="floatingInput">Password</label>
                </div>

                <!-- Submit -->
                <div class="d-grid gap-2">
                    <input class="btn btn-primary w-100" type="submit" name="submit" value="Entrar">
                </div>

            </form>
        </article>

    </section>

</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>