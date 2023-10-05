<!DOCTYPE html5>
<html lang="es">
    <?php include('./header.php'); ?>

        <form action="index.php" method="GET">
            <label for="">Fecha de entrada</label>
            <input type="date" name="date_in"><br>
            <label for="">Fecha de salida</label>
            <input type="date" name="date_out"><br>
            <input type="submit" name="submit" value="submit">
        </form>
        <?php
            if(isset($_GET['submit'])){

                $date_in = $_GET['date_in'];
                $date_out = $_GET['date_out'];
                echo $date_in;
                echo $date_out;

                //Datos para entrar en la base de datos
                $user = "root";
                $password = "";
                $server = "localhost";
                $database = "hotel";
                //Conexion a la base de datos
                $con = mysqli_connect($server, $user, $password, $database);
                // Prueba de conexion a php
                if($con){
                    echo "Conexion exitosa";
                }else {
                    echo "Conexion Fallida";
                }
                
                //Select
                $consulta = ("SELECT * FROM 044_room");
                $resultado = mysqli_query($con, $consulta);
                while($mostrar = mysqli_fetch_array($resultado)){
                    
                }

            }
        ?>
    <?php include('./footer.php'); ?>
</html>