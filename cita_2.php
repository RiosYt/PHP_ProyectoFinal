<?php
    require_once 'conexion.php';
    $con=new Conexion();
    $idpaciente=$_REQUEST['m'];
    $consulta=$_REQUEST['n'];
    $horario=$_REQUEST['p'];

    $sql = "SELECT * FROM medicos where Especialidad='$consulta' and Horario='$horario'";
    $sql=$con->prepare($sql);
    $sql->execute();
    $resultado=$sql->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSPITAL LETTER</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="CSS/estilos-table.css">
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
            <h3><span>2</span>ELIJA SU DOCTOR: este son los doctores disponibles con su consulta</h3>
        </div>
        <div class="container">
            <div class="content">
                <table>
                    <tr class="head">
                        <td>Código</td>
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>Celular</td>
                        <td>Correo</td>
                        <td>Accion</td>
                    </tr>
                    <?php
                        foreach($resultado as $fila):
                    ?>
                    <tr>
                        <td><?php echo $fila['CodMedico'];?></td>
                        <td><?php echo $fila['NomMedico'];?></td>
                        <td><?php echo $fila['ApeMedico'];?></td>
                        <td><?php echo $fila['CelularMedico'];?></td>
                        <td><?php echo $fila['CorreoMedico']?></td>
                        <td><a href="cita_3.php?id=<?php echo $idpaciente ?>&doc=<?php echo $fila['NomMedico']." ".$fila['ApeMedico']?>" class="btn_update">Elegir</a></td>
                    </tr>
                    <?php endforeach;?>
                </table>
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
</body>
</html>
