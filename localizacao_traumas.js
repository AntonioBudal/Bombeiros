function criar(i, url) {
    var a = document.getElementById(i);
    var imagem =  document.getElementById('im');
    a.style.display = 'flex'; 
    imagem.src=`img/${url}.png`;


}

function fechar(i) {
    var a = document.getElementById(i);
    a.style.display = 'none'; // Hide the div when closing
}
