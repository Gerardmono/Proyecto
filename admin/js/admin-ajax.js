$(document).ready(function () {
    $('#guardar-registro').on('submit', function (e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        console.log(datos);
        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function (data) {
                var resultado = data;
                console.log(resultado);
                
                if (resultado.respuesta == 'exito') {
                    swal(
                        'Correcto',
                        'El administrador se guardo correctamente',
                        'success'
                    );
                    document.querySelector('#guardar-registro').reset();
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

    $('.borrar_registro').on('click', function (e) {
        e.preventDefault();
        var id = $(this).attr('data-id');
        var tipo = $(this).attr('data-tipo');
        
        swal({
            title: '¿Estas Seguro ?',
            text: 'Una vez eliminado no se podra recuperar',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Borrar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: 'post',
                    data: {
                        'id' : id,
                        'registro' : 'eliminar'
                    },
                    url: 'modelo-'+tipo+'.php',
                    success:function (data) {
                        var resultado = JSON.parse(data);
                        console.log(resultado);
                        
                        if (resultado.respuesta == 'exito') {
                            Swal(
                                'borrado!',
                                'Se ha borrado correctamente.',
                                'success'
                            )
                            jQuery('[data-id = "'+ resultado.id_eliminado +'"]').parents('tr').remove();
                        } else {
                            Swal(
                                'Error!',
                                'No se pudo borrar el administrador.',
                                'error'
                            )
                        }
                        
                    }
                })
            }  
        });
    });

    $('#guardar-registro-imagen').on('submit', function (e) {
        e.preventDefault(); 
        var datos = new FormData(this);
        console.log(datos);
        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            contentType: false,
            processData: false,
            async: true,
            cache: false,
            success: function (data) {
                var resultado = data;
                console.log(resultado);
                if (resultado.respuesta == 'exito') {
                    swal(
                        'Correcto',
                        'El administrador se guardo correctamente',
                        'success'
                    );
                    document.querySelector('#guardar-registro-imagen').reset();
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