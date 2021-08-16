<?php include "vistas/parte_superior.php" ?>

<?php
if (isset($_REQUEST['cid'])) {
    $cid = $_REQUEST['cid'];
} else {
    $cid = $_POST['cid'];
}


?>

<div class="container">
    <h1>Familiares de Paciente</h1>

    <div class="box-header">
        <h3 class="box-title"> </h3>

    </div><!-- /.box-header -->
    <a class="btn btn-success btn-print" href="" onclick="window.print()"><i class="glyphicon glyphicon-print"></i> Impresión</a>
    <!--<a class="btn btn-warning btn-print" href="agregar_familiar.php" style="height:25%; width:15%; font-size: 12px " role="button">REGISTRAR</a>-->
    <a class="btn btn-warning btn-print" href="<?php echo "agregar_familiar.php?cid=$cid"; ?>" style="height:25%; width:15%; font-size: 12px " role="button">REGISTRAR</a>

    <br><br>

    <div class="main_container">
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x-panel">

                    </div>

                </div>
                <!--end of modal-dialog-->

            </div>
            <?php
            if (isset($_REQUEST['cid'])) {
                $cid = $_REQUEST['cid'];
            } else {
                $cid = $_POST['cid'];
            }


            ?>

            <?php

            //         if ($guardar=="si") {

            ?>

            <?php
            //       }
            ?>

            <!-- Date range -->


            <!--end of modal-->

            <div class="box-header">

            </div><!-- /.box-header -->

            <div class="box-body">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                            <thead>
                                <tr class="text-center">

                                    <th>Codigo</th>
                                    <th>Paciente</th>
                                    <th>Familiar</th>
                                    <th>Parentesco</th>
                                    <th class="btn-print"> Accion </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $auto = "";

                                // $branch=$_SESSION['branch'];
                                $query = mysqli_query($con, "
                                select 
                                p.nombre as paciente,
                                f.nombre as farmaceutico,
                                fa.parentesco,
                                fa.Id_familiares,
                                fa.Id_farmaceutico,
                                f.codigo 
                                from familiares fa 
                                inner join usuario f on fa.Id_farmaceutico=f.Id 
                                inner join usuario p on p.id=fa.Id_paciente 
                                where p.Id='$cid' ") or die(mysqli_error());

                                $i = 0;

                                while ($row = mysqli_fetch_array($query)) {
                                    $id_familiares = $row['Id_familiares'];
                                    $i++;
                                    $cid = $row['Id_farmaceutico']

                                ?>
                                    <tr>
                                        <td><?php echo $row['codigo']; ?></td>
                                        <td><?php echo $row['paciente']; ?></td>
                                        <td><?php echo $row['farmaceutico']; ?></td>
                                        <td><?php echo $row['parentesco']; ?></td>
                                        <td>
                                            <?php
                                            ?>

                                            <div class='text-center'>
                                                <div class='btn-group'>
                                                    <a class="btn btn-primary btn-print" href="<?php echo "editar_familiar.php?cid=$cid"; ?>" role="button">Editar</a>
                                                    <a class='btn btn-danger btnBorrar' href="<?php echo "eliminar_familiar.php?cid=$cid"; ?>" onClick="return confirm('¿Está seguro de que quieres eliminar??');" role="button">Borrar</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--end of modal-->
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>
<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php" ?>