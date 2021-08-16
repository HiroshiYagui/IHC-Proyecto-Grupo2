<?php include "vistas/parte_superior.php" ?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Detalles de Citas</h1>

    <div class="box-header">
        <h3 class="box-title"> </h3>

    </div><!-- /.box-header -->
    <!--<a class="btn btn-success btn-print" href="" onclick="window.print()"><i class="glyphicon glyphicon-print"></i> Impresión</a>
  <a class="btn btn-warning btn-print" href="medico_agregar2.php" style="height:25%; width:15%; font-size: 12px " role="button">REGISTRAR</a>
-->
    <br><br>

    <div class="main_container">

        <style>
            label {

                color: black;
            }

            li {
                color: white;
            }

            ul {
                color: white;
            }

            #buscar {
                text-align: right;
            }
        </style>

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

            <div class="box-header">

            </div><!-- /.box-header -->

            <a class="btn btn-warning btn-print" href="medico_historial2.php" style="height:25%; width:15%; font-size: 12px " role="button">Regresar</a>

            <br><br>

            <div class="box-body">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                                <thead class="text-center">
                                    <tr class="text-center">

                                        <th>Paciente</th>
                                        <th>Fecha</th>
                                        <th>Observaciones</th>
                                        <th>Estado</th>
                                        <th class="btn-print"> Accion </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php

                                    $auto = "";

                                    // $branch=$_SESSION['branch'];
                                    $query = mysqli_query($con, "
                                    select m.nombre as  medico,
                                    p.nombre as  paciente,
                                    c.fecha,
                                    c.observaciones,
                                    c.estado_cita,
                                    c.id_cita from cita c inner join usuario m on c.id_medico = m.id inner join usuario p on p.id = c.id_paciente where m.id='$cid' ") or die(mysqli_error());

                                    $i = 0;

                                    while ($row = mysqli_fetch_array($query)) {
                                        $id_cita = $row['id_cita'];
                                        $i++;
                                    ?>
                                        <tr class="text-center">
                                            <td><?php echo $row['paciente']; ?></td>
                                            <td><?php echo $row['fecha']; ?></td>
                                            <td><?php echo $row['observaciones']; ?></td>
                                            <td><?php echo $row['estado_cita']; ?></td>
                                            <td>
                                                <a class="btn btn-danger btnBorrar" href="<?php echo "eliminar_historial_cita2.php?id_cita=$id_cita&cid=$cid"; ?>" onClick="return confirm('¿Está seguro de que quieres eliminar??');" role="button">Eliminar</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div><!-- /.box-body -->

        </div><!-- /.col -->

    </div><!-- /.row -->

    
<?php require_once "vistas/parte_inferior.php" ?>