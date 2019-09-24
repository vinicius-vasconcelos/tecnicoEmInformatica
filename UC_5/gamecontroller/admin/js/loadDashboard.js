function loadDataDashboard() {
    $.ajax({
        type: "GET",
        url: `./controllers/ctrAdministrador.php?op=countData`,
        success: respText => {
            let vet = respText.split('#');

            $('#categorias').text(vet[0]);
            $('#jogos').text(vet[1]);
            $('#usuarios').text(vet[2]);
            $('#adm').text(vet[3]);

        }
    });
}