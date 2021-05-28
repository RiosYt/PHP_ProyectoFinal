<?php

    require_once 'conexion.php';

    class Registros{
        private $con;

        function __construct(){
            $this->con=new Conexion();
        }

        function registrar(){
            if (isset($_POST['Registrar'])){
                $nombre=$_POST['nombre'];
                $dni=$_POST['dni'];
                $celular=$_POST['celular'];
                $correo=$_POST['correo'];
                $direccion=$_POST['direccion'];
                $consulta=$_POST['consulta'];
                $horario=$_POST['horario'];
                $fecha=$_POST['fecha'];
                $sintomas=$_POST['sintomas'];

                
                $sql="INSERT INTO cita(DniPaciente, NomPaciente, Celular, Correo, Direccion, Consulta, Horario, Fecha, Sintoma) values ('$dni', '$nombre', '$celular', '$correo', '$direccion', '$consulta', '$horario', '$fecha', '$sintomas')";
                $sql=$this->con->prepare($sql);
        
                $sql->execute();
                

                $sql_2="SELECT max(IdCita) FROM cita where DniPaciente='$dni'";
                $sql_2=$this->con->prepare($sql_2);
                $sql_2->execute();
                $resultado=$sql_2->fetchAll();
                
                $valor=null;

                foreach ($resultado as $re):
                    $valor=$re['0'];
                endforeach;

                header("Location:cita_2.php?m=$valor&n=$consulta&p=$horario");
            }
            else{
                header("Location:error.php");
            }
        }
    }
?>