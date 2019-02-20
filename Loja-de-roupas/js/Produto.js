var rangeTamanho = document.querySelector('[name=Ntamanho]')

var outputTamanho = document.querySelector('[name=NvalorTamanho]')

//metodo para mudar o valor do mostrador de tamanho
function mostraTamanho(){
	outputTamanho.value = rangeTamanho.value
}

rangeTamanho.oninput = mostraTamanho