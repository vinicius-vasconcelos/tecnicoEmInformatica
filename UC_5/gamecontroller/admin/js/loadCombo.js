function getForCombo(url) {seekAjax(url)}

function seekAjax(newUrl) {
    $.ajax({
        type: 'GET',
        url: `./controllers/${newUrl}.php?op=getsC`,
        success: responseText => $('#categoria').append(responseText)
    });
}