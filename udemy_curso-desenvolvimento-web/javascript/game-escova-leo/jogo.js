var altura = 0;
var largura = 0;
var vidas = 3;
var tempo = 10;

var criaMosquitoTempo = 1500;

var nivel = window.location.search;/*retorna tudo depois do ?*/ 
nivel = nivel.replace('?','');
if(nivel=='dificil'){
    criaMosquitoTempo=700;
}

function ajustaTamanhoPalcoJogo() {
    altura = window.innerHeight;
    largura = window.innerWidth;
}

ajustaTamanhoPalcoJogo();//obtem altura conforme o browser do usuário e conforme ele redimensiona

var cronometro = setInterval(() => {
    tempo--;
    if(tempo<0){
        clearInterval(cronometro);
        clearInterval(criaMosca);
        window.location.href = 'vitoria.html'
    }else{
    document.getElementById('cronometro').innerHTML = tempo;}   
    
}, 1000);

function posicaoRandomica() {

    if (document.getElementById('mosquito')) {
        document.getElementById('mosquito').remove();

        if (vidas == 0) {
            window.location.href = 'fim-de-jogo.html'
        } else {
            document.getElementById('v' + vidas).src = "imagens/coracao_vazio.png";
            vidas--;
        }
    }

    var posicaoX = Math.floor(Math.random() * largura) - 250;/*número randômico entre 0 a tamanho da largura*/
    var posicaoY = Math.floor(Math.random() * altura) - 250;/*sempre -250px para nunca ser um valor alto q ultrapasse o limite da janela*/

    posicaoX = posicaoX <= 0 ? 0 : posicaoX; /*caso for menor que 0 a posicao X, setar 0*/
    posicaoY = posicaoY <= 0 ? 0 : posicaoY;

    //criar elemento html
    var mosquito = document.createElement('img');
    mosquito.src = 'imagens/mosca-leo.png';
    mosquito.className = tamanhoAleatorio() + ' ' + ladoAleatorio();
    mosquito.style.left = posicaoX + 'px';
    mosquito.style.top = posicaoY + 'px';
    mosquito.style.position = 'absolute';
    mosquito.id = 'mosquito';
    mosquito.onclick = function () {
        this.remove();
    }

    document.body.appendChild(mosquito);

}

function tamanhoAleatorio() {
    var classe = Math.floor(Math.random() * 3); /*número aleatório de 0 a 3*/
    switch (classe) {
        case 0:
            return 'mosquito1';
        case 1:
            return 'mosquito2';
        case 2:
            return 'mosquito3';
    }


}


function ladoAleatorio() {
    var classe = Math.floor(Math.random() * 2); /*número aleatório de 0 a 3*/
    switch (classe) {
        case 0:
            return 'ladoA';
        case 1:
            return 'ladoB';

    }

}


