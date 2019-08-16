function getForList(url) {seekAjax(url)}

function seekAjax(newUrl) {
    $.ajax({
        type: 'GET',
        url: `./controllers/${newUrl}?op=gets`,
        success: responseText => $('table tbody').append(responseText)
    });
}