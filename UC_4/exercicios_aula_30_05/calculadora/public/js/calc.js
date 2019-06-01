function exibir(dado) {
    let txt = document.getElementById('inp-texto').value;
    txt += `${dado}`;
    document.getElementById('inp-texto').value = txt;
}

function limpar() {
    document.getElementById('inp-texto').value = '';
} 

function result() {
    document.getElementById('inp-texto').value = eval(document.getElementById('inp-texto').value)
}