<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>
<div class="p-5">
    <h1 class="text-center">Manual de desarrollador</h1>
    <hr>
    <h2>Index</h2>
    <ul>
        <li>Introduccion</li>
        <li>Funcionalidades generales</li>
        <li>
            Customer
            <ul>
                <li>SELECT</li>
                <li>INSERT</li>
                <li>UPDATE</li>
                <li>DELETE</li>
            </ul>
        </li>
        <li>
            Room
            <ul>
                <li>SELECT(admin)</li>
                <li>SELECT(customer)</li>
                <li>INSERT</li>
                <li>UPDATE</li>
                <li>DELETE</li>
            </ul>
        </li>
        <li>
            Reservation
            <ul>
                <li>SELECT(admin)</li>
                <li>SELECT(customer)</li>
                <li>INSERT(admin)</li>
                <li>INSERT(customer)</li>
                <li>UPDATE(admin)</li>
                <li>UPDATE(customer)</li>
                <li>DELETE</li>
                <li>INSERT EXTRA</li>
            </ul>
        </li>
        <li>
            Room category
            <ul>
                <li>SELECT</li>
                <li>INSERT</li>
            </ul>
        </li>
    </ul>
    <hr>
    <h2>Introduccion</h2>
    <hr>
    <p>
        El siguiente proyecto hecho en PHP tratamos de recrear el funcionamiento de un hotel, incorporando una base de datos que nos permita hacer ciertas operaciones y funcionalidades como el poder registrar, almacenar, recuperar y eliminar datos de los clientes, habitaciones, reservas, etc.

        En el proyecto he creado 3 tipos de vistas para un usuario sin registrar, un usuario registrado y un administrador que pueda manejar el hotel, cada rol tiene ciertas funcionalidades específicas.

    </p>
    <hr>
    <h2>
        Funcionalidades generales
    </h2>
    <hr>
    <h3>
        Customer
    </h3>
    <hr>
    <h4>
        SELECT
    </h4>
    <p>
        En este apartado el administrador puede ver los datos de los usuario registrados id, nombre, apellido, teléfono, email, contraseña, rol y la imagen que el usuario eligió como foto de perfil.
    </p>
    <h4>
        INSERT
    </h4>
    <p>
        El administrador puede registrar un usuario en el hotel guardando los datos en la base de datos.
    </p>
    <h4>
        UPDATE
    </h4>
    <p>
        Permite al administrador cambiar datos de los usuario registrados y de él mismo.
    </p>

    <h4>
        DELETE
    </h4>
    <p>
        Permite al administrador eliminar un usuario de la base de datos permanentemente.
    </p>
    <hr>
    <h3>
        Room
    </h3>
    <hr>
    <h4>
        SELECT (admin)
    </h4>
    <p>
        Nos permite observar todas las habitaciones y las habitaciones disponibles.
    </p>

    <h4>
        SELECT(customer)
    </h4>
    <p>
        Nos permite observar las habitaciones disponibles y mediante un formulario poder reservar la habitación.
    </p>

    <h4>
        INSERT
    </h4>
    <p>
        Permite al administrador poder registrar nuevas habitaciones.
    </p>
    <h4>
        UPDATE
    </h4>
    <p>
        Permite al administrador poder modificar datos de la habitación como la categoría y el estatus (READY, CHECK_IN y CHECK_OUT).
    </p>
    <h4>
        DELETE
    </h4>
    <p>
        Permite al administrador poder eliminar una habitación mediante la ID de la habitación.
    </p>
    <hr>
    <h3>
        Reservation
    </h3>
    <hr>
    <h4>
        SELECT(admin)
    </h4>
    <p>
        Permite al administrador poder ver los datos de las reservas existentes identificador de la reserva, identificador del cliente, identificador de la habitación, el día de llegada, el día de salida, el subtotal sin extras, los extras permitiéndonos añadir más de estos, total que incluye los extras y algunas acciones como modificar la reserva y poder eliminar la reserva.
    </p>

    <h4>
        SELECT(customer)
    </h4>
    <p>
        Permite al usuario ver todas los datos de la reserva que este tiene y alguna acción que le permite cancelar la reserva.
    </p>
    <h4>
        INSERT(admin)
    </h4>
    <p>
        Permite al administrador poder insertar una reserva con el identificador del usuario, la fecha de entrada y la fecha de salida, con estos datos no mostrará una nueva ventana donde podremos ver las habitaciones disponibles y poder elegir una para poder reservar con los datos previos.
    </p>

    <h4>
        INSERT(customer)
    </h4>
    <p>
        Permite al usuario después de elegir las fechas de entrada y salida, mostrar las habitaciones disponibles en base a las fechas que eligió anteriormente.
    </p>
    <h4>
        UPDATE(admin)
    </h4>
    <p>
        Permite al administrador modificar los datos de la reserva de cualquier cliente.
    </p>
    <h4>
        UPDATE(customer)
    </h4>
    <p>
        Permite al usuario poder cancelar alguna reserva que este tenga.
    </p>
    <h4>
        DELETE
    </h4>
    <p>
        Permite al administrador poder eliminar alguna reserva existente.
    </p>

    <h4>
        INSERT EXTRA
    </h4>
    <p>
        Permite al administrador poder insertar extras a alguna reserva existente.
    </p>
    <hr>
    <h2>
        Room category
    </h2>
    <hr>
    <h3>
        SELECT
    </h3>
    <p>
        Permite al administrador poder ver todos los datos de las diferentes categorías que existen para una habitación.
    </p>
    <h3>
        INSERT
    </h3>
    <p>
        Permite al administrador poder crear una nueva categoría que se puede agregar a una habitación.
    </p>

</div>



<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>