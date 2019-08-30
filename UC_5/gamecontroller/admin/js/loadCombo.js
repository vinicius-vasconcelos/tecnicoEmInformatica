function getForCombo(url) {seekAjax(url)}

function seekAjax(newUrl) {
    let urlSubs = newUrl.split('#');
    let  idCat = 0;

    if(urlSubs.length == 2)
        idCat = urlSubs[1];

    $.ajax({
        type: 'GET',
        url: `./controllers/${urlSubs[0]}.php?op=getsC&idCat=${idCat}`,
        success: responseText => $('#categoria').append(responseText)
    });
}