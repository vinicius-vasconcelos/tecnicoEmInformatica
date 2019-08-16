$('div.listFt').mouseenter(function () { 

    let idContato = $(this).closest('div.listFt');

    $(this).css({
        'cursor': 'pointer',
        'backgroundColor': 'rgba(0, 0, 0, .5)',
        'transition': 'all .5s ease-in-out'
    });

    $(this).first().css( {
        'cursor': 'pointer',
        'opacity':'.7',
        'transition': 'all .5s ease-in-out'
    } );

    $(this).prepend(`
        <button type="button" onclick="updateFoto('${idContato[0].id}')">Nova Foto</button>
    `);
});

$('div.listFt').mouseleave(function () { 
    $(this).css({
        'backgroundColor': 'transparent',
    });

    $(this).first().css( 'opacity', '1' );

    $(this).find(':first-child').remove();
});

function updateFoto(idContato) {
    $('body').append(`
        <div class="fundo-preto">
           <div class="poupup">
                <form action="contatos.php?contatoId=${idContato}" method="post" name="formCad" enctype="multipart/form-data">
                    <div class="nova-foto">
                        <input type="file" name="upFt" onchange="readURL(this)">
                    </div>

                    <div class="div-btn-foto">
                        <button class="up" type="submit">Salvar</button>
                        <button class="del" type="button" onclick="window.location.href='contatos.php'">Cancelar</button>
                    </div>
                </form>
           </div>
        </div>
    `);
}

function readURL(url) {
    let fReader = new FileReader();

    fReader.readAsDataURL(url.files[0]);
    fReader.onloadend = function(event) {
        $('form .nova-foto').append(`<img id="novaImg">`);
        $('#novaImg').attr('src', event.target.result);
    }
};