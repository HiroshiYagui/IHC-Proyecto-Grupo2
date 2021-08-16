<?php
@session_start();
?>

<?php
$id_paciente = $_SESSION['id'];
?>

<!DOCTYPE html>
<html>

<head>


    <title>calendario </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->


    <script src="js/jquery.min.js"></script>
    <script src="js/moment.min.js"></script>

    <link rel="stylesheet" href="css/fullcalendar.min.css">
    <link rel="stylesheet" href="../cita/css/styles.css">
    <script src="js/fullcalendar.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>


</head>

<body class="hold-transition login-page">



    <div class="col-xs-12">
        <section class="content container body">
            <div class="row">
                <div class="col-md-12 main_container">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <a class=" btn btn-success btn-print" href="cita_agregar2_paciente.php" style="height:25%; width:15%; font-size: 12px " role="button"> NUEVA CITA</a>
                        </div><!-- /.box-header -->
                        <br>
                        <!-- form start -->
                        <div id="calendarioweb"></div>
                    </div><!-- /.box -->
                </div><!-- /.box -->
                <!-- general form elements disabled -->
            </div>
            <!--/.col (right) -->
        </section><!-- /.content -->
    </div> <!-- /.row -->

    <?php
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
        where c.id_paciente='$id_paciente' ");

    ?>


    <script>
        $(document).ready(function() {
            $('#calendarioweb').fullCalendar({
                header: {
                    left: 'today, prev,next',
                    center: 'title',
                    right: 'month,basicWeek,basicDay,agendaWeek,agenda,Day'
                },
                
                dayClick: function(date, jsEvent, view) {
                    //alert('seleccionado ' + date.format());
                    //$(this).css('background-color', 'red');
                    $("#exampleModal").modal();
                },

                events: [
                    <?php
                    while ($row = mysqli_fetch_array($query)) {

                    ?> {
                            start: "<?php echo $row['fecha']; ?>",
                            title: "<?php echo $row['especialidad']; ?>",
                            textColor: "white",
                            color: "#EA4D71",
                            paciente: "paciente: <?php echo $row['paciente']; ?>",
                            horario: "horario: <?php echo $row['horario']; ?>",
                            medico: "Medico: <?php echo $row['medico']; ?>"
                        },

                    <?php } ?>
                ],

                eventClick: function(calEvent, jsEvent, view) {
                    $('#tituloEvento').html(calEvent.title);
                    $('#paciente').html(calEvent.paciente);
                    $('#horario').html(calEvent.horario);
                    $('#medico').html(calEvent.medico);

                    $("#exampleModal").modal();
                }

            });

        });
    </script>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tituloEvento">No tienes Citas este día</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="paciente"></div>
                    <div id="horario"></div>
                    <div id="medico"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
            </div>
        </div>
    </div>

</body>

</html>