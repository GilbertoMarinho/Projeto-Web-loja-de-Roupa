// 
var $input_quantidade = document.querySelector("#Iqtd"); 
var $output_total = document.querySelector("#Itotal");

//acao da funcao ao modificqr o vaçor do input range
$input_quantidade.oninput = function() {   
	
	var preco =document.querySelector("#Ipreco").textContent;//pega o conteudo de Ipreco 
	preco = preco.replace("R$ ", "");//remove R$
	preco = preco.replace(",", "."); //troca virgula por ponto
	preco = parseFloat(preco);//stting para float
	 
	var quantidade = $input_quantidade.value;
	var total = quantidade * preco; //reqlizq o cqlculo
	total = "R$ " + total.toFixed(2); //concateca com R$ e formata para duqs casas decimais
	total = total.replace(".", ","); //troca ponto por virgula
	$output_total.value = total; 
	
	}