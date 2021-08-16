<?php
session_start();
include('../../dist/includes/dbcon.php');
$id_usuario = $_SESSION['id'];



$id_farmaceutico = $_POST['id_farmaceutico'];

$id_paciente = $_POST['paciente'];
$parentesco = $_POST['parentesco'];

//$observaciones = $_POST['observaciones'];
//$fecha = $_POST['fecha'];
//$horario = $_POST['horario'];

//$estado_cita = "reservado";
//$caja=0;


$id_usuario = $_SESSION['id'];
//		$update=mysqli_query($con,"update usuario set caja=caja+'$monto' where id='$id_usuario' ");

mysqli_query($con, "INSERT INTO familiares(Id_paciente,Id_farmaceutico,parentesco)
				VALUES('$id_paciente','$id_farmaceutico','$parentesco')") or die(mysqli_error($con));



echo "<script>document.location='../cita/cita.php'</script>";
