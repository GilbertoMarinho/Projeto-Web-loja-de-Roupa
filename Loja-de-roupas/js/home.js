/* 
$('.novidades button').click(function(){ //ao clickar no button em novidades...
	$('.novidades').addClass('painel-aberto');
	//adciona a classe painel-aberto a novidades
}); 
*/

$('.novidades button').click(function(){
	
	$('.novidades').toggleClass('painel-aberto');
	//adciona a classe painel-aberto se ela não existir, e exclui caso ela exista
	
});

$('.mais-vendidos button').click(function(){
	
	$('.mais-vendidos').toggleClass('painel-aberto');
});