<?php include "vistas/parte_superior.php" ?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Mis Prescripciones </h1>

    <div class="box-header">
        <h3 class="box-title"> </h3>

    </div><!-- /.box-header -->
    <a class="btn btn-success btn-print" href="" onclick="window.print()"><i class="glyphicon glyphicon-print"></i> Impresión</a>

    <br><br>
    <?php
    $id_paciente = $_SESSION['id'];
    ?>

    <div class="main_container">
        <div class="box-body">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead>
                            <tr class="text-center">
                                <th>Paciente</th>
                                <th>Medico</th>
                                <th>Fecha</th>
                                <th>Historia</th>
                                <th class="btn-print"> Accion </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $auto = "";

                            // $branch=$_SESSION['branch'];
                            $query = mysqli_query($con, "select m.nombre as  medico,p.nombre as  paciente,c.fecha,c.historia,c.id_preescripcion from preescripcion c inner join usuario m on c.id_medico = m.id inner join usuario p on p.id = c.id_cliente  where c.id_cliente='$id_paciente'") or die(mysqli_error());
                            $i = 0;

                            while ($row = mysqli_fetch_array($query)) {
                                $id_preescripcion = $row['id_preescripcion'];
                                $i++;
                            ?>
                                <tr>
                                    <td><?php echo $row['medico']; ?></td>
                                    <td><?php echo $row['paciente']; ?></td>
                                    <td><?php echo $row['fecha']; ?></td>
                                    <td><?php echo $row['historia']; ?></td>
                                    <td>
                                        <?php
                                        ?>
                                        <a class="btn btn-danger btn-print" href="<?php echo "../boleta_preescripcion/generar_boleta.php?id_preescripcion=$id_preescripcion"; ?>" target="_blank" role="button">Ver</a>
                                        <?php
                                        ?>
                                    </td>
                                </tr>
                                <!--end of modal-->
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div>
</div>

<?php require_once "vistas/parte_inferior.php" ?>