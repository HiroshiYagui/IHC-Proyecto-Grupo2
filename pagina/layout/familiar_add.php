<?php
session_start();


if (isset($_REQUEST['cid'])) {
  $cid = $_REQUEST['cid'];
} else {
  $cid = $_POST['cid'];
}

//include('../dbcon.php');
include('../../dist/includes/dbcon.php');
//$branch=$_SESSION['branch'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$tipo = 'farmaceutico';
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$codigo = $nombre . rand(0, 900);

$parentesco = $_POST['parentesco'];
$Id_paciente = $_POST['Id_paciente'];
$Id_pacienteint=intval($Id_paciente);


$total = 0;


if ($password == $password2) {
	$query2 = mysqli_query($con, "select * from usuario where usuario='$usuario'") or die(mysqli_error($con));
	$count = mysqli_num_rows($query2);

	if ($count > 0) {
		echo "<script type='text/javascript'>alert('usuario ya existe!');</script>";
		//	header('Location:../usuario.php');
		echo "<script>document.location='paciente2.php'</script>";
	} else {

		if (!empty($_FILES['imagen']['name'])) {


			$target_dir = "../usuario/subir_us/";
			$target_file = $target_dir . basename($_FILES["imagen"]["name"]);
			$uploadok = 1;
			$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
			//check if image file is a actual image or fake image
			$check = getimagesize($_FILES["imagen"]["tmp_name"]);
			if ($check !== false) {
				echo "archivo es una imagen - " . $check["mime"] . ".";
				$uploadok = 1;
			} else {
				echo "el archivo no es una imagen.";
				$uploadok = 0;
			}


			//check if file already exists
			if (file_exists($target_file)) {
				echo "lo siento, el archivo ya existe.";
				$uploadok = 0;
			}

			//check file size
			if ($_FILES["imagen"]["size"] > 500000) {
				echo "lo siento, tu archivo es demasiado grande.";
				$uploadok = 0;
			}



			if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {

				$img = basename($_FILES["imagen"]["name"]);

				//encriptando contraseña
				$pass = md5($password);
				$salt = "a1Bz20ydqelm8m1wql";
				$pass = $salt . $pass;
				///finzalizo encriptacion


				mysqli_query($con, "INSERT INTO usuario(usuario,password,imagen,tipo,nombre,apellido,telefono,correo,codigo)
				VALUES('$usuario','$pass','$img','$tipo','$nombre','$apellido','$telefono','$correo','$codigo')") or die(mysqli_error($con));


				echo "<script>document.location='agregar_familiar.php'</script>";
				//header('Location:../usuario.php');


			} else {
				echo "No se pudo subir.";
			}
		} else {
			$pass = md5($password);
			$salt = "a1Bz20ydqelm8m1wql";
			$pass = $salt . $pass;


			mysqli_query($con, "INSERT INTO usuario(usuario,password,imagen,tipo,nombre,apellido,telefono,correo,codigo)
				VALUES('$usuario','$pass','','$tipo','$nombre','$apellido','$telefono','$correo','$codigo')") or die(mysqli_error($con));


			$query=mysqli_query($con, "select id from usuario where codigo='$codigo' ");
			$row = mysqli_fetch_array($query);
			$Id_farmaceutico = $row['id'];


			mysqli_query($con, "INSERT INTO familiares(Id_paciente,Id_farmaceutico,parentesco)
				VALUES('$cid','$Id_farmaceutico','$parentesco')") or die(mysqli_error($con));


			echo "<script>document.location='paciente2.php'</script>";
			//	header('Location:../usuario.php');
		}
	}
} else {
	echo "<script type='text/javascript'>alert('Error Las contraseñas no coinciden registre de nuevo!');</script>";
	echo "<script>document.location='agregar_familiar.php'</script>";
	//	header('Location:../usuario.php');
}
