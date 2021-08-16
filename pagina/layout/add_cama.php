<?php
session_start();
include('../../dist/includes/dbcon.php');
$id_usuario = $_SESSION['id'];

$id_cama = $_POST['id_cama'];
$id_paciente = $_POST['paciente'];
$fecha = $_POST['fecha'];
$nom_hospital = $_POST['nom_hospital'];

$estado_cama = "reservado";
//$caja=0;


$id_usuario = $_SESSION['id'];
//		$update=mysqli_query($con,"update usuario set caja=caja+'$monto' where id='$id_usuario' ");

mysqli_query($con, "INSERT INTO reservacion_cama(id_cama,nom_hospital,id_paciente,estado_cama,fecha)
				VALUES('$id_cama','$nom_hospital','$id_paciente','$estado_cama','$fecha')") or die(mysqli_error($con));



echo "<script>document.location='../layout/cita2.php'</script>";
