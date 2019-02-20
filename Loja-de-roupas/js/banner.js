var banners = ["img/destaque-home.png", "img/destaque-home-2.png"]; //array com as urls das imagens

var bannerAtual =0; //variavel para armazenar indice


function mudarBanner(){
	bannerAtual = (bannerAtual + 1) %2;//impar par
	document.querySelector('.banner-destaque img').src = banners[bannerAtual]; // Setar o valor do source da img utilizando as url do array
}

setInterval(mudarBanner, 5000); //intervalo de 5 segundos ()para realizar a função