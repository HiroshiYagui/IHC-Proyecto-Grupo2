<?php include "vistas/parte_superior.php" ?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Mis camas UCI</h1>

    <div class="box-header">
        <h3 class="box-title"> </h3>

    </div><!-- /.box-header -->

    <a class="btn btn-success btn-print" href="cama_agregar.php" style="height:25%; width:15%; font-size: 12px " role="button">SOLICITAR</a>

    <br><br>

    <?php
    $id_paciente = $_SESSION['id'];
    ?>

    <div class="main_container">

        <div class="right_col" role="main">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x-panel">

                    </div>

                </div>
                <!--end of modal-dialog-->
            </div>

            <div class="panel-heading">

            </div>
            <!--end of modal-->
            <div class="box-header">
                <h3 class="box-title"> </h3>

            </div><!-- /.box-header -->


            <div class="box-body">
                <!--end of modal-->
                <div class="box-header">
                </div><!-- /.box-header -->

                <div class="box-body">

                    <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead>
                            <tr class="text-center">
                                <th>Id Cama</th>
                                <th>Paciente</th>
                                <th>Cód Cama</th>
                                <th>Hospital</th>
                                <th>Fecha</th>
                                <th>Estado</th>
                                <th class="btn-print"> Accion </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $auto = "";

                            // $branch=$_SESSION['branch'];
                            $query = mysqli_query($con, "  select p.nombre as paciente,
                            c.id_cama as cama,
                            c.cod_cama as codigo,
                            r.estado_cama,
                            r.fecha,
                            c.nom_hospital
                            from reservacion_cama r
                            inner join cama c on r.id_cama = c.id_cama
                            inner join usuario p on p.id=r.id_paciente where r.id_paciente='$id_paciente';") or die(mysqli_error());
                            $i = 0;

                            while ($row = mysqli_fetch_array($query)) {

                                $i++;
                            ?>
                                <tr class="text-center">

                                    <td><?php echo $row['cama']; ?></td>
                                    <td><?php echo $row['paciente']; ?></td>
                                    <td><?php echo $row['codigo']; ?></td>
                                    <td><?php echo $row['nom_hospital']; ?></td>
                                    <td><?php echo $row['fecha']; ?></td>
                                    <td><?php echo $row['estado_cama']; ?></td>
                                    <td>
                                        <div class='text-center'>
                                            <div class='btn-group'>
                                                
                                                <a class="btn btn-danger btn-print" href="<?php echo "../cita/eliminar_cita.php?id_cita=$id_cita"; ?>" onClick="return confirm('¿Está seguro de que quieres eliminar??');" role="button">Eliminar</a>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                <!--end of modal-->
                            <?php } ?>
                        </tbody>

                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.row -->
</div>

<?php require_once "vistas/parte_inferior.php" ?>