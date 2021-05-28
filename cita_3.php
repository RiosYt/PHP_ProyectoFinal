<?php
    require_once 'conexion.php';
    $con=new Conexion();
    $idpaciente=$_REQUEST['id'];
    $doctor=$_REQUEST['doc'];


    $sql = "UPDATE cita SET Doctor='$doctor' where IdCita='$idpaciente'";
    $sql_2 = "SELECT * FROM cita where IdCita='$idpaciente'";
    $sql=$con->prepare($sql);
    $sql_2=$con->prepare($sql_2);
    $sql->execute();
    $sql_2->execute();
    $resultado=$sql_2->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSPITAL LETTER</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
<header>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="cita.php">Reservar una cita</a>
            <a href="">Portafolios</a>
            <a href="#services">Servicios</a>
            <a href="">Contacto</a>
        </nav>
        <section class="textos-header">
            <h1>RESERVE SU CITA</h1>
            <h2>Llene los siguientes datos</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-7.62,40.95 C149.99,150.00 263.26,3.47 511.00,25.16 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>
    <section class="contenedor", style="border: 1px solid balck; border-radius: 5px;box-shadow: 0 5px 10px rgba(0,0,0,0.15); padding: 20px;">
        <div class="contenido-textos">
            <h3><span>3</span>DETALLES DE SU CITA: verifique los datos y confirme la cita</h3>
        </div>
        <div class="container">
            <div class="content">
                <form action="index.php" method="post">
                    <?php
                        foreach($resultado as $fila):
                    ?>
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details" style="font-weight: bold;">DNI:</span>
                            <input type="text" value="<?php echo $fila['DniPaciente']?>" readonly>
                        </div>
                        <div class="input-box">
                            <span class="details" style="font-weight: bold;">Nombre del Paciente:</span>
                            <input type="text" value="<?php echo $fila['NomPaciente']?>" readonly>
                        </div>
                        <div class="input-box">
                            <span class="details" style="font-weight: bold;">Celular:</span>
                            <input type="text" value="<?php echo $fila['Celular']?>" readonly>
                        </div>
                        <div class="input-box">
                            <span class="details" style="font-weight: bold;">Correo:</span>
                            <input type="text" value="<?php echo $fila['Correo']?>" readonly>
                        </div>
                        <div class="input-box">
                            <span class="details" style="font-weight: bold;">Direccion:</span>
                            <input type="text" value="<?php echo $fila['Direccion']?>" readonly>
                        </div>
                        <div class="input-box">
                            <span class="details" style="font-weight: bold;">Tipo de Consulta:</span>
                            <input type="text" value="<?php echo $fila['Consulta']?>" readonly>
                        </div>
                        <div class="input-box">
                            <span class="details" style="font-weight: bold;">Doctor a cargo:</span>
                            <input type="text" value="<?php echo $fila['Doctor']?>" readonly>
                        </div>
                        <div class="input-box">
                            <span class="details" style="font-weight: bold;">Fecha y horario de cita:</span>
                            <input type="text" value="<?php echo $fila['Fecha'].":".$fila['Horario']?>" readonly>
                        </div>
                    </div>
                    <?php endforeach;?>
                    <div class="button">
                        <a onClick="mensaje()">Confirmar Cita</a>
                        <input type="submit" value="Volver" name="Volver" style="width:30%; margin-left: 130px;">
                    </div>
                </form>               
            </div>
        </div>
    </section>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Phone</h4>
                <p>(01)-3627845</p>
            </div>
            <div class="content-foo">
                <h4>Correo</h4>
                <p>HospitalLetter21@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Direccion</h4>
                <p>Av.Magdalena 382, Los Olicos</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Derechos reservados 2021 | HOSPITAL LETTER</h2>
    </footer>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        function mensaje() {
            swal({
                    title: "Cita Generada con Éxito",
                    text: "Gracias por confiarnos tu salud",
                    icon: "success",
                    button: "Continuar"
            });
        }
    </script>
</body>
</html>