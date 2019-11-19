$(document).ready(function () {
    $('#login-admin').on('submit', function (e) {
        e.preventDefault();

        var datos = $(this).serializeArray();
        console.log(datos);
        console.log($(this).attr('action'));
        
        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function (data) {
                var resultado = data;
                console.log(resultado);
                
                if (resultado.respuesta == 'Exitoso') {
                    swal(
                        'Login Correcto',
                        'Bienvenid@ ' + resultado.nombre + ' !!' ,
                        'success'
                    );
                    document.querySelector('#login-admin').reset();
                    setTimeout(() => {
                        window.location.href = 'admin-area.php';
                    }, 2000);
                }else{ 
                    swal(
                        'Error',
                        resultado.respuesta,
                        'error'
                    );
                }
            }
        })
    });
});