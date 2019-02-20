<!DOCTYPE html>
<?php 
	$conexao = mysqli_connect("localhost","root","usbw","lojaroupa");//conexao com banco de dados
	$dados = mysqli_query($conexao,"select * from produtos WHERE id = $_GET[id]");//executando um comando de busca sql, e armazenando os registros em $dados
	$produto = mysqli_fetch_array($dados); //transformando $dados em um array
?>

<html lang="pt-br">
  <head>
   	<meta charset="utf-8">
   	<meta name="viewport" content="width=device-width">
    <title>Mirror Fashion</title>
    <link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/estilo.css">
			<link rel="stylesheet" href="css/produto.css">
	</head>
<body>

<!--chamando conteúdo html do cabecalho com o include do php -->
<?php include("cabecalho.php"); ?>


<!--conteúdo principal-->
<div class="fundo">
	<div class="container">
	
<!--produto cores e tamanhos-->
		<div class="produto">
			<h1><?php echo $produto['nome'];?></h1> <!-- acessando registro do bd armazenados em $produto-->
			<p>por apenas R$ <?php echo $produto['preco'];?></p>

<!--inicio do formulario-->			
			<form id="pele" action="checkout.php" method="POST">
				<fieldset class="cores">
					<legend> Escolha a cor </legend>
					
					<input type="radio" name="cor" value="Verde" id="verde" checked>
					<label for="verde">
						<img src="img/produtos/foto<?php echo $produto['id'];?>-verde.png" alt="Produto na cor verde"><!-- acessando registro do bd armazenados em $produto-->
					</label>
					
					<input type="radio" name="cor" value="Rosa" id="rosa">
					<label for="rosa">
						<img src="img/produtos/foto<?php echo $produto['id'];?>-rosa.png" alt="Produto na cor rosa">
					</label>
					
					<input type="radio" name="cor" value="Azul" id="azul">
					<label for="azul">
						<img src="img/produtos/foto<?php echo $produto['id'];?>-azul.png" alt="Produto na cor azul">
					</label>
				</fieldset>
				
				<fieldset class="tamanho">
					<legend>Escolha o tamanho</legend>
					<input type="range" value="40" min="32" max="48" step="2" name="Ntamanho" id="Itamanho">
					<output for="Inome" name="NvalorTamanho" >42</output>
				</fieldset>
				
				<!-- Valores escondidos que serão passados para o proxímo form  -->
				<input type="hidden" name="Nnome" value="<?php echo $produto['nome'];?>">
				<input type="hidden" name="Npreco" value="<?php echo $produto['preco']; ?>">
				<input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
				<button class="comprar">Comprar</button>
			</form><!-- fim do formulario produto-->
		</div><!--fim div produto-->
	
	<!--Detalhes do produto -->
		<div class="detalhes">
	
		 <h2>Detalhes do produto</h2>	 
	<p>Esse é o melhor casaco de Cardigã que você já viu. Excelente material italiano com estampa desenhada pelos artesãos da comunidade de Krotor nas ilhas gregas. Compre já e receba hoje mesmo pela nossa entrega a jato.</p>
			
			<table>
				
				<thead>
					<tr>
						<th>Carecterística </th>
						<th>Detalhe </th>
					</tr>
				</thead>
				
				<tbody>
				 <tr>
						<td>Modelo </td>
						<td>Cardigã 7845 </td>
					</tr>
					<tr>
						<td>Material </td>
						<td>Algodão e poliester </td>
					</tr>				
					<tr>
						<td>Cores </td>
						<td>Azul, Rosa e Verde </td>
					</tr>			
					<tr>
						<td>Lavagem </td>
						<td>Lavar a mão</td>
					</tr>
				 </tbody>	
				 						
			</table>
	
		</div><!-- fim div detalhes-->
	
	</div><!--fim div container-->
	
</div>
<!-- fim do conteudo principal-->

<!--chamando conteúdo html do rodape atraves do include-->
<?php include("rodape.php"); ?>
      
<script type="text/javascript" src="js/produto.js"></script>
      
</body>
</html>