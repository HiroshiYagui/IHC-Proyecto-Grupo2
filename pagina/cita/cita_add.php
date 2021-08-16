<?php
session_start();
include('../../dist/includes/dbcon.php');
$id_usuario = $_SESSION['id'];



$id_medico = $_POST['id_medico'];
$id_paciente = $_POST['paciente'];
$observaciones = 'Solicito una cita';
$fecha = $_POST['fecha'];
$horario = $_POST['horario'];
$estado_cita = "reservado";
$id_especialidad = $_POST['id_especialidad'];
//$caja=0;


$id_usuario = $_SESSION['id'];
//		$update=mysqli_query($con,"update usuario set caja=caja+'$monto' where id='$id_usuario' ");

mysqli_query($con, "INSERT INTO cita(id_paciente,id_medico,fecha,estado_cita,observaciones,horario,id_especialidad)
				VALUES('$id_paciente','$id_medico','$fecha','$estado_cita','$observaciones','$horario','$id_especialidad')") or die(mysqli_error($con));



echo "<script>document.location='../layout/cita_paciente2.php'</script>";
