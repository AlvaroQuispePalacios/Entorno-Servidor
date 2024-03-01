<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>
<div class="p-5">
    <h1>Manual de Desarrollador</h1>
    <h2>Índex</h2>
    <ul>
        <li>Introducción al proyecto</li>
        <li>Funcionalidades implementadas
            <ul>
                <li>Funcionalidades para la gestión de clientes
                    <ul>
                        <li>Ver los datos de los usuarios</li>
                        <li>Creación usuarios</li>
                        <li>Modificación de datos de los usuarios</li>
                        <li>Dar de baja a un usuario</li>
                    </ul>
                </li>
                <li>Funcionalidades para la gestión de habitaciones
                    <ul>
                        <li>Ver estado de las habitaciones</li>
                        <li>Creación de una nueva habitación</li>
                        <li>Modificación de datos de las habitaciones</li>
                        <li>Eliminación de una habitación</li>
                    </ul>
                </li>
                <li>Funcionalidades para la gestión de las categorias de las habitaciones
                    <ul>
                        <li>Ver las diferentes categorias de habitaciones disponibles</li>
                        <li>Creación de una nueva categoria</li>
                        <li>Modificación de los datos de una categoria</li>
                        <li>Eliminación de una categoria</li>
                    </ul>
                </li>
                <li>Funcionalidades para la gestión de las reservas del hotel
                    <ul>
                        <li>Ver las diferentes reservas</li>
                        <li>Creación de una nueva reserva a un usuario</li>
                        <li>Modificación de una reserva</li>
                        <li>Eliminación de una reserva</li>
                    </ul>
                </li>
                <li>Funcionalidades para la gestión de los comentarios
                    <ul>
                        <li>Ver y modificar el estado de un comentario</li>
                    </ul>
                </li>
                <li>Funcionalidad clima actual</li>
            </ul>
        </li>
        <li>Funcionalidades pendientes de desarrollo</li>
    </ul>
    <h2>Introducción al proyecto</h2>
    <p>El objetivo principal de este proyecto es diseñar, desarrollar y desplegar una página web moderna y funcional para nuestro hotel. La página web servirá como una herramienta crucial para atraer a nuevos clientes, proporcionar información relevante y facilitar el proceso de reserva de habitaciones y servicios.</p>
    <h2>Funcionalidades implementadas</h2>
    <h3>Funcionalidades para el gestión de clientes</h3>
    <h4>Ver los datos de los usuarios:</h4>
    <p>(CUSTOMER &gt; SELECT), Nos permite ver los datos de todos los usuarios, filtrar por nombre, modificar(miniform) y eliminar(miniform) al usuario.</p>
    <h4>Creación de usuarios:</h4>
    <p>(CUSTOMER &gt; INSERT), Nos permite registran un nuevo cliente en la base de datos y poder crear un usuario para nuestra web con las funcionalidades de su rol. Los datos ha requeridos son (nombre, apellido, telefono, email, contraseña para la cuenta, rol, imagen del usuario(opcinal) );</p>
    <h4>Modificación de datos de los usuarios</h4>
    <p>(CUSTOMER &gt; UPDATE), Nos permite modificar los datos de un usuario. Se necesita el identificador del usuario.</p>
    <h4>Dar de baja a un usuario</h4>
    <p>(CUSTOMER &gt; DELETE), Nos permite dar de baja a la cuenta de un usuario. Se necesita el identificador del usuario.</p>
    <h3>Funcionalidades para la gestión de habitaciones</h3>
    <h4>Ver estado de las habitaciones</h4>
    <p>(ROOM &gt; SELECT), Nos permite ver todas las habitaciones y habitaciones disponibles en el momento actual.</p>
    <h4>Creación de una nueva habitación</h4>
    <p>(ROOM &gt; INSERT), Nos permite registrar una nueva habitación en la base de datos dependiendo de la categoria de la habitación.</p>
    <h4>Modificación de datos de las habitaciones</h4>
    <p>(ROOM &gt; UPDATE), Nos permite modificar datos de la habitación, los datos a poder modificar son: categoria de la habitación y estado de la habitación(READY, CHECK_IN y CHECK_OUT). Se necesita el identificador de la habitación.</p>
    <h4>Eliminación de una habitación</h4>
    <p>(ROOM &gt; DELETE), Nos permite eliminar la habitación de la base de datos. Se necesita el identificador de la habitación.</p>
    <h3>Funcionalidades para la gestión de las categorias de las habitaciones</h3>
    <h4>Ver las diferentes categorias de habitaciones disponibles</h4>
    <p>(CATEGORY &gt; SELECT), Nos permite ver las diferentes categorias disponibles que puede tener una habitación.</p>
    <h4>Creación de una nueva categoria</h4>
    <p>(CATEGORY &gt; INSERT), Nos permite crear una categoria de habitación.</p>
    <h4>Modificación de los datos de una categoria</h4>
    <h4>Eliminación de una categoria</h4>
    <h3>Funcionalidades para la gestión de las reservas del hotel</h3>
    <h4>Ver las diferentes reservas</h4>
    <p>(RESERVATION &gt; SELECT), Nos permite ver todas las reservas, filtrar por identificador de un usuario, modificar(Miniform) y eliminar(Miniform).</p>
    <h4>Creación de una nueva reserva a un usuario</h4>
    <p>(RESERVATION &gt; INSERT), Nos permite insertar una nueva reserva a un usuario previamente registrado(Lista desplegable que muestra el identificador del usuario, fecha de entrada y fecha de salida).</p>
    <h4>Modificación de una reserva</h4>
    <p>(RESERVATION &gt; UPDATE), Nos permite modificar una reserva. Se necesita el identificador de la reserva.</p>
    <h4>Eliminación de una reserva</h4>
    <p>(RESERVATION &gt; DELETE), Nos permite &quot;eliminar&quot; una reserva. Se necesita el identificador de la reserva.</p>
    <h3>Funcionalidades para la gestión de los comentarios</h3>
    <h4>Ver y modificar el estado de un comentario</h4>
    <p>(COMMENT &gt; SELECT), Nos permite ver todos los comentarios hecho a una reserva y modifcar el estado del comentario.</p>
    <h3>Funcionalidad clima actual</h3>
    <p>(ACCUWEATHER &gt; API), Nos permite pedir un archivo con los datos de la temperatura actual y registrarlo en la base de datos para luego mostrar la temperatura de los últimos 7 dias en la página principal.</p>


</div>



<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>