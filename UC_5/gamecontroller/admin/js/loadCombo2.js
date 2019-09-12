function getForCombo(url, url2) {seekAjax(url, url2)}

function seekAjax(newUrl, newUrl2) {
    let urlSubsUsu = newUrl.split('#');
    let  idCUsu = 0;

    if(urlSubsUsu.length == 2)
        idUsu = urlSubsUsu[1];

    $.ajax({
        type: 'GET',
        url: `./controllers/${urlSubsUsu[0]}.php?op=getsC&idCat=${idUsu}`,
        success: responseText => $('#usuarios').append(responseText)
    });

    let urlSubsJog = newUrl2.split('#');
    let  idJog = 0;

    if(urlSubsJog.length == 2)
        idJog = urlSubsJog[1];

    $.ajax({
        type: 'GET',
        url: `./controllers/${urlSubsJog[0]}.php?op=getsC&idCat=${idJog}`,
        success: responseText => $('#jogos').append(responseText)
    });
    
}