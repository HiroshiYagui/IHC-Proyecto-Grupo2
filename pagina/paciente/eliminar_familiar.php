<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');


          if(isset($_REQUEST['cid']))
            {
              $cid=$_REQUEST['cid'];
            }
            else
            {
            $cid=$_POST['cid'];
          }



  mysqli_query($con,"delete from familiares where Id_farmaceutico='$cid'")or die(mysqli_error());
    echo "<script type='text/javascript'>alert('Eliminado correctamente!');</script>";
  echo "<script>document.location='../layout/paciente2.php'</script>";  
     // header('Location:../usuario.php');
?>