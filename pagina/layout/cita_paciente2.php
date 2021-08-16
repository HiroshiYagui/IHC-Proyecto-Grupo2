<?php include "vistas/parte_superior.php" ?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Mis Citas</h1>

    <div class="box-header">
        <h3 class="box-title"> </h3>

    </div><!-- /.box-header -->
    <a class="btn btn-warning btn-print" href="" onclick="window.print()"><i class="glyphicon glyphicon-print"></i> Impresión</a>
    <a class=" btn btn-success btn-print" href="cita_agregar2_paciente.php" style="height:25%; width:15%; font-size: 12px " role="button"> NUEVA CITA</a>

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
                                <th>Especialidad</th>
                                <th>Fecha</th>
                                <th>Horario</th>
                                <th>Observaciones</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $auto = "";

                            

                            // $branch=$_SESSION['branch'];
                            $query = mysqli_query($con, "select 
                            m.nombre as medico,
                            p.nombre as paciente,
                            e.nombre_especialidad as especialidad,
                            h.nombre_horario as horario,
                            c.fecha,
                            c.observaciones,
                            c.estado_cita,
                            c.id_cita 
                            from cita c 
                            inner join usuario m on c.id_medico = m.id
                            inner join usuario p on c.id_paciente =p.id
                            inner join especialidad e on c.id_especialidad = e.id_especialidad
                            inner join horario h on c.horario = h.id_horario
                            where c.id_paciente='$id_paciente' ") or die(mysqli_error());
                            $i = 0;

                            while ($row = mysqli_fetch_array($query)) {
                                $id_cita = $row['id_cita'];
                                $i++;
                            ?>
                                <tr>
                                    <td><?php echo $row['paciente']; ?></td>
                                    <td><?php echo $row['medico']; ?></td>
                                    <td><?php echo $row['especialidad']; ?></td>
                                    <td><?php echo $row['fecha']; ?></td>
                                    <td><?php echo $row['horario']; ?></td>
                                    <td><?php echo $row['observaciones']; ?></td>
                                    <td><?php echo $row['estado_cita']; ?></td>
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