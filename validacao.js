$(document).ready(function(){

    $('#enviar').click(function(){
        var username = $('#iusuario').val();
        var password = $('#isenha').val();

        $('#ierrousuario').hide();
        $('#ierrosenha').hide();

        $.ajax({
            url:'login.php',
            type:'POST',
            data:{
                u: username,
                p: password
            },
            success: function(data){
                console.log(data);
                if (data == 'ERRO_USUARIO'){
                    $('#ierrousuario').show();
                }
                if (data == 'ERRO_SENHA'){
                    $('#ierrosenha').show();
                }
                if (data == 'OK'){
                    window.location.replace('pagina_secundaria.php');
                }
            }
        });
    })
})