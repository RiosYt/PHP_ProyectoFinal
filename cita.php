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
            <h3><span>1</span>REGISTRE SUS DATOS</h3>
        </div>
        <div class="container">
            <div class="content">
                <form action="convalidar.php?m=registrar" method="post">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">DNI:</span>
                            <input type="text" name="dni" placeholder="Ingrese su número de DNI" required>
                        </div>
                        <div class="input-box">
                            <span class="details">NOMBRE:</span>
                            <input type="text" name="nombre" placeholder="Ingrese sus nombre completpo" required>
                        </div>
                        <div class="input-box">
                            <span class="details">CELULAR:</span>
                            <input type="text" name="celular" placeholder="Ingrese su número de celular" required>
                        </div>
                        <div class="input-box">
                            <span class="details">CORREO:</span>
                            <input type="text" name="correo" placeholder="Ingrese un correo" required>
                        </div>
                        <div class="input-box">
                            <span class="details">DIRECCION</span>
                            <input type="text" name="direccion" placeholder="Introduzca su direccion" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Tipo de Consulta:</span>
                            <select name="consulta">
                                <option value="Médico General">Medicina General</option>
                                <option value="Pediatra">Pediatria</option>
                                <option value="Odontologo">Odontologia</option>
                                <option value="Psicólogo">Psicologia</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <span class="details">Horario:</span>
                            <select name="horario">
                                <option value="8am-12pm">8am-12pm</option>
                                <option value="1pm-5pm">1pm-5pm</option>
                                <option value="6pm-10pm">6pm-10pm</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <span class="details">Fecha consulta:</span>
                            <input type="date" name="fecha" placeholder="Introduzca su direccion" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Síntomas:</span>
                            <textarea name="sintomas" id="" cols="135" rows="10" placeholder="Escriba sus sintomas o consultas"></textarea>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" value="Registrar" name="Registrar">
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
</body>
</html>