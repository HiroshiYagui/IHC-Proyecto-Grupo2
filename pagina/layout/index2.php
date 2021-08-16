    <?php include "vistas/parte_superior.php" ?>

    <?php
    $id_usuario = $_SESSION['id'];
    ?>
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../layout/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="../layout/css/mi_style.css">



    <!--INICIO del cont principal-->
    <div class="container">
        <div class="encabezado">
            <h1>Contenido principal Nuevo</h1>
            <div class="ambulancia">
                <img src="img/icons_ambulance.png">
                <a class='btn btn-danger btnBorrar ambulancia_btn' href="#">Solicitar Ambulancia</a>
            </div>
        </div>

        <!--<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>
                </div>
            </div>
        </div>-->
        <br>
        <div class="container">

        </div>

        <div class="right_col" role="main">
            <div class="box-body">
                <div class="row">
                    <!--INICIANDO CON EL CONTENIDO-->
                    <?php

                    $id_paciente = $_SESSION['id'];
                    if ($tipo == "administrador") {
                    ?>
                        <div class="col-lg-3 col-xs-6 contenido_card">
                            <!-- small box -->
                            <div class="small-box card_medico ">
                                <div class="inner">
                                    <h4>
                                        <?php
                                        $num = 0;
                                        $select = mysqli_query($con, "select * from usuario where tipo='medico' ") or die(mysqli_error($link));
                                        $num = mysqli_num_rows($select);
                                        echo $num;
                                        ?>
                                    </h4>
                                    <p>Medico</p>
                                </div>
                                <div class="icon"><img height="80" width="80" src="img/icons_doctor.png">
                                    <i class=""></i>
                                </div>
                                <?php echo ($num > 0) ? '<a href="medico2.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
                            </div>
                        </div>
                    <?php } ?>



                    <?php
                    if ($tipo == "administrador") {

                    ?>
                        <div class="col-lg-3 col-xs-6 contenido_card">
                            <!-- small box -->
                            <div class="small-box card_empresa">
                                <div class="inner">

                                    <h4>
                                        <?php
                                        $num = 1;
                                        echo $num;
                                        ?>
                                    </h4>
                                    <p>Configuracion </p>
                                </div>
                                <div class="icon"><img height="80" width="80" src="img/icnos_settings.png">
                                    <i class=""></i>
                                </div>
                                <?php echo ($num > 0) ? '<a href="configuracion2.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>


                    <?php
                    if ($tipo == "administrador" or $tipo == "medico" or $tipo == "recepcionista") {
                    ?>
                        <div class="col-lg-3 col-xs-6 contenido_card">
                            <!-- small box -->
                            <div class="small-box  card_paciente ">
                                <div class="inner">

                                    <h4>
                                        <?php


                                        $num = 0;
                                        $query = mysqli_query($con, "select * from usuario where tipo='paciente' ") or die(mysqli_error());
                                        $i = 0;
                                        while ($row = mysqli_fetch_array($query)) {
                                            $num++;
                                        }
                                        echo $num;
                                        ?>
                                    </h4>
                                    <p> Paciente</p>
                                </div>
                                <div class="icon"><img height="80" width="80" src="img/icons_user.png">
                                    <i class=""></i>
                                </div>
                                <?php echo ($num > 0) ? '<a href="paciente2.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
                            </div>
                        </div>

                    <?php } ?>


                    <?php

                    $id_paciente = $_SESSION['id'];
                    if ($tipo == "paciente") {

                    ?>

                        <div class="col-lg-3 col-xs-6 contenido_card  ">
                            <!-- small box -->
                            <div class="small-box card_citas">
                                <div class="inner">

                                    <h4>
                                        <?php

                                        $num = 0;
                                        $query = mysqli_query($con, "select m.nombre as  medico,p.nombre as  paciente,c.fecha,c.observaciones,c.estado_cita,c.id_cita from cita c inner join usuario m on c.id_medico = m.id inner join usuario p on p.id = c.id_paciente where c.id_paciente='$id_paciente'") or die(mysqli_error());
                                        $i = 0;
                                        while ($row = mysqli_fetch_array($query)) {
                                            $num++;
                                        }
                                        echo $num;
                                        ?>
                                    </h4>
                                    <p>Citas</p>
                                </div>
                                <div class="icon"><img height="80" width="80" src="img/icons_cita.png">
                                    <i class=""></i>
                                </div>
                                <?php echo ($num > 0) ? '<a href="cita_paciente2.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
                            </div>
                        </div>

                    <?php } ?>

                    <?php
                    if ($tipo == "administrador" or $tipo == "medico" or $tipo == "recepcionista") {

                    ?>
                        <div class="col-lg-3 col-xs-6 contenido_card">
                            <!-- small box -->
                            <div class="small-box  card_citas">
                                <div class="inner">

                                    <h4>
                                        <?php

                                        $num = 0;
                                        $query = mysqli_query($con, "select * from cita ") or die(mysqli_error());
                                        $i = 0;
                                        while ($row = mysqli_fetch_array($query)) {
                                            $num++;
                                        }
                                        echo $num;
                                        ?>
                                    </h4>
                                    <p> Cita</p>
                                </div>
                                <div class="icon"><img height="80" width="80" src="img/documentos.png">
                                    <i class=""></i>
                                </div>
                                <?php echo ($num > 0) ? '<a href="cita2.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>


                    <?php
                    if ($tipo == "administrador"  or $tipo == "medico") {

                    ?>
                        <div class="col-lg-3 col-xs-6 contenido_card">
                            <!-- small box -->
                            <div class="small-box card_preescripcion">
                                <div class="inner">

                                    <h4>
                                        <?php

                                        $num = 0;
                                        $query = mysqli_query($con, "select * from preescripcion") or die(mysqli_error());
                                        $i = 0;
                                        while ($row = mysqli_fetch_array($query)) {
                                            $num++;
                                        }
                                        echo $num;
                                        ?>
                                    </h4>
                                    <p> Preescripcion</p>
                                </div>
                                <div class="icon"><img height="80" width="80" src="img/tareas.png">
                                    <i class=""></i>
                                </div>
                                <?php echo ($num > 0) ? '<a href="preescripcion2.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                    <?php
                    if ($tipo == "administrador") {

                    ?>


                        <div class="col-lg-3 col-xs-6 contenido_card">
                            <!-- small box -->
                            <div class="small-box card_historia ">
                                <div class="inner">

                                    <h4>
                                        <?php

                                        $num = 0;

                                        $num = 1;

                                        echo $num;
                                        ?>
                                    </h4>
                                    <p> Historiales de atención</p>
                                </div>
                                <div class="icon"><img height="80" width="80" src="img/documentos.png">
                                    <i class=""></i>
                                </div>
                                <?php echo ($num > 0) ? '<a href="historial_paciente2.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                    <?php
                    if ($tipo == "administrador") {

                    ?>


                        <div class="col-lg-3 col-xs-6 contenido_card">
                            <!-- small box -->
                            <div class="small-box card_pago">
                                <div class="inner">

                                    <h4>
                                        <?php

                                        $num = 0;

                                        $num = 1;

                                        echo $num;
                                        ?>
                                    </h4>
                                    <p>Pago factura</p>
                                </div>
                                <div class="icon"><img height="80" width="80" src="img/icons_pago.png">
                                    <i class=""></i>
                                </div>
                                <?php echo ($num > 0) ? '<a href="#" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                    <div class="col-lg-3 col-xs-6 contenido_card">

                        <div class="small-box card_calendario">
                            <div class="inner">

                                <h4>
                                    <?php

                                    $num = 1;

                                    echo $num;
                                    ?>
                                </h4>
                                <p>Calendario</p>
                            </div>
                            <div class="icon"><img height="80" width="80" src="img/icons_calendar.png">
                                <i class=""></i>
                            </div>
                            <?php echo ($num > 0) ? '<a href="calendario1.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
                        </div>
                    </div>

                </div>
                <br><br>

                <?php
                if ($tipo == "paciente") {

                ?>
                    <!--inicio-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table id="" class="table table-striped table-bordered table-condensed" style="width:100%">
                                        <thead class="text-center">
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Telefono</th>
                                                <th>Codigo</th>
                                                <th>Familiares</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $query = mysqli_query($con, "select * from usuario where id='$id_paciente'");

                                            while ($row = mysqli_fetch_array($query)) {
                                                $cid = $row['id'];

                                            ?>
                                                <tr class="text-center">
                                                    <td><?php echo $row['nombre'] ?></td>
                                                    <td><?php echo $row['apellido'] ?></td>
                                                    <td><?php echo $row['telefono'] ?></td>
                                                    <td><?php echo $row['codigo'] ?></td>
                                                    <td>
                                                        <div class='text-center'>
                                                            <div class='btn-group'>
                                                                <a class="btn btn-success btn-print" href="<?php echo "familiares3.php?cid=$cid"; ?>" role="button">Familiares</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--FIN DEL CONTENIDO-->
                <?php } ?>
            </div>
        </div>
    </div>
    <!--FIN del cont principal-->

    <?php include "vistas/parte_inferior.php" ?>