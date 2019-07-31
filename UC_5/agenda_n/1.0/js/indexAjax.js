function excluir(idcontatos, nome) {
    let op = confirm(`Realmente deseja deletar ${nome} ?`);

    if(op) {
        $.ajax({
            url: `contatoDel.php?idcontatos=${idcontatos}`,
            method: 'GET',
            success: respText => {
                alert(`${nome} foi deletado com sucesso !`);
                window.location.href = 'index.php';
            },
            error: errText => {
                alert(`Falha ao deletar ${nome}`);
            }
        })
    }
}