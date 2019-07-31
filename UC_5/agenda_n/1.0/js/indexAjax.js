function excluir(idcontatos) {
    let op = confirm('Realmente deseja deletar ?');

    if(op) {
        $.ajax({
            url: 'contatoDel.php',
            data: {idcontatos},
            success: respText => {
                
            },
            error: errText => {

            }
        })
    }
}