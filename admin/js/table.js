$(function () {
    $("#registros").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "language": {
        paginate: {
          next: 'Siguiente',
          previous: 'Anterior',
          last: 'Ultimo',
          first: 'Primero'
        },
        info: 'Mostrando _START_ a _END_ de _TOTAL_ resultados',
        emptyTable: 'No hay registros',
        infoEmpty: '0 Registros',
        search: 'Buscar',
        show: 'Mostar',
      }
    });

    $('#crear-registro-admin').attr('disabled', true);

    $('#repetir_password').on('input', function () {
      var password_nuevo = $('#password').val();
      var usuario = $('#usuario').val();
      var nombre = $('#nombre').val();
      if ($(this).val() == password_nuevo) {
        $('#resultado_password').text('Correcto');
        $('#resultado_password').parents('.form-group').find('input').addClass('is-valid').removeClass('is-invalid');
        $('input#password').parents('.form-group').find('input').addClass('is-valid').removeClass('is-invalid');
        $('#crear-registro-admin').attr('disabled', false);
      } else {
        $('#resultado_password').text('No son iguales');
        $('#resultado_password').parents('.form-group').find('input').addClass('is-invalid').removeClass('is-valid')
        $('input#password').parents('.form-group').find('input').addClass('is-invalid').removeClass('is-valid');
        $('#crear-registro-admin').attr('disabled', true);
      }
      
    });

    $('#icono').iconpicker(); 

});