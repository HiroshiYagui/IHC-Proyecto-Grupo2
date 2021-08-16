</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>UNMSM &copy; Sistema de Seguros 2021</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¿Seguro que deseas salir?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body"></div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-primary" href="../../index.php">Cerrar Sessión</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="pacienteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro de Usuario </h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Los datos se registraran, Desea continuar?</div>

      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">cancelar</button>
        <a class="btn btn-primary" href="../../index.php">Aceptar</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>




<!-- datatables JS -->
<script type="text/javascript" src="vendor/datatables/datatables.min.js"></script>
<!-- código propio JS -->
<script type="text/javascript" src="main.js"></script>
<script src="plugins/sweetAlert2/sweetalert2.all.min.js"></script>
<script src="alertas.js"></script>


<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


<script type="text/javascript">
  $(function() {
    $('#register').click(function(e) {

      var valid = this.form.checkValidity();

      if (valid) {
        var nombre = $('#nombre').val();
        var apellido = $('#apellido').val();
        var usuario = $('#usuario').val();
        var password = $('#password').val();
        var password2 = $('#password2').val();
        var telefono = $('#telefono').val();
        var correo = $('#correo').val();
        var tipo = $('#tipo').val();

        e.preventDefault();

        $.ajax({
          type: 'POST',
          url: 'paciente_add2.php',
          data: {
            nombre: nombre,
            apellido: apellido,
            usuario: usuario,
            password: password,
            password2: password2,
            telefono: telefono,
            correo: correo,
            tipo: tipo
          },
          error: function(data) {
            Swal.fire({
              'title': 'Error',
              'text': 'Hay un error.',
              'type': 'error'
            })
          },
          success: function(data) {
            if (data == 1) {
              Swal.fire({
                'title': 'Exito',
                'text': 'Registrado correctamente',
                'type': 'success',
                'backdrop': true,
                'timer': 2000

              })
            } else if (data == 0) {
              Swal.fire({
                'title': 'Error',
                'text': 'Contraseñas no couinciden',
                'type': 'error',
                'backdrop': true
              })
            } else if (data == 3) {
              Swal.fire({
                'title': 'Alerta',
                'text': 'El Usuario ya existe',
                'type': 'warning',
                'backdrop': true
              })
            }
          }
        });

      } else {

      }

    });

    $('#register_medico').click(function(e) {

      var valid = this.form.checkValidity();

      if (valid) {
        var nombre = $('#nombre').val();
        var apellido = $('#apellido').val();
        var usuario = $('#usuario').val();
        var password = $('#password').val();
        var password2 = $('#password2').val();
        var telefono = $('#telefono').val();
        var correo = $('#correo').val();
        var tipo = $('#tipo').val();

        e.preventDefault();

        $.ajax({
          type: 'POST',
          url: 'medico_add2.php',
          data: {
            nombre: nombre,
            apellido: apellido,
            usuario: usuario,
            password: password,
            password2: password2,
            telefono: telefono,
            correo: correo,
            tipo: tipo
          },
          error: function(data) {
            Swal.fire({
              'title': 'Error',
              'text': 'Hay un error.',
              'type': 'error'
            })
          },
          success: function(data) {
            if (data == 1) {
              Swal.fire({
                'title': 'Exito',
                'text': 'Registrado correctamente',
                'type': 'success',
                'backdrop': true,
                'timer': 2000

              })
            } else if (data == 0) {
              Swal.fire({
                'title': 'error',
                'text': 'Contraseñas no couinciden',
                'type': 'error',
                'backdrop': true
              })
            } else {
              Swal.fire({
                'title': 'error',
                'text': 'El Usuario ya existe',
                'type': 'warning',
                'backdrop': true
              })
            }
          }
        });

      } else {

      }

    });

    $('#edit').click(function(e) {

      var valid = this.form.checkValidity();

      if (valid) {
        var id_usuario = $('#id_usuario').val();
        var nombre = $('#nombre').val();
        var apellido = $('#apellido').val();
        var usuario = $('#usuario').val();
        var telefono = $('#telefono').val();
        var correo = $('#correo').val();
       

        e.preventDefault();

        $.ajax({
          type: 'POST',
          url: 'paciente_actualizar2.php',
          data: {
            id_usuario: id_usuario,
            nombre: nombre,
            apellido: apellido,
            usuario: usuario,
            telefono: telefono,
            correo: correo,
          },
          error: function(data) {
            Swal.fire({
              'title': 'Error',
              'text': 'Porfavor revise su conexión',
              'type': 'error'
            })
          },
          success: function(data) {
            if (data == 1) {
              Swal.fire({
                'title': 'Éxito',
                'text': 'Éxito al actializar datos',
                'type': 'success',
                'backdrop': true,
                'timer': 2000

              })
            } else {
              Swal.fire({
                'title': 'Error',
                'text': 'Problema no esperado',
                'type': 'error',
                'backdrop': true
              })
            }
          }
        });

      } else {

      }

    });

  });
</script>

</body>

</html>