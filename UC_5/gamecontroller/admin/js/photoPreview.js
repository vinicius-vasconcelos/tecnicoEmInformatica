function readURL(url) {
    let fReader = new FileReader();

    fReader.readAsDataURL(url.files[0]);
    fReader.onloadend = function(event) {
        $('#div-foto').append(`<img id="novaImg">`);
        $('#novaImg').attr('src', event.target.result);
    }
};