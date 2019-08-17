function getForList(url) {seekAjax(url)}

function seekAjax(newUrl) {
    $.ajax({
        type: 'GET',
        url: `./controllers/${newUrl}?op=gets`,
        success: responseText => $('table tbody').append(responseText)
    });
}

function showPreview(...args) {
    let str = '';
    args.forEach(item => str += `<p class="m-0">${item}</p>`);

    $('td.text-center button.btn-outline-info').attr({
        'data-toggle':'modal',
        'data-target': '#modalView'
    });

    $('#modalView div.modal-body').html('');
    $('#modalView div.modal-body').append(str);
}

function updateForm(id, urlView, urlCtr) {
    $.ajax({
        type: 'GET',
        url: `./controllers/${urlCtr}?op=get&id=${id}`,
        success: responseText => window.location.href= `${urlView}?${responseText}`
    });
}