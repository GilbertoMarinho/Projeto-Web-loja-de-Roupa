<!doctype html>

<?php 
	$conexao = mysqli_connect("localhost","root","usbw","lojaroupa");//conexao com banco de dados
	$dados = mysqli_query($conexao,"select * from produtos WHERE id = $_POST[id]");//executando um comando de busca sql,  armazenando os registros em $dados
	$produto = mysqli_fetch_array($dados); //transformando $dados em um array
?>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport"	content="width=device-width">
	<title>Checkout Mirror Fashion</title>
	<link rel="stylesheet" href="css/bootstrap1.css">	
	
	
	
	<style>
		.form-control:invalid {
			border: 1px solid #CC0000;
		}
		
		body {
			padding-top: 55px;
		}
	</style>
	
</head>	

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"> 
	
	<!-- menu drop-down para celulares -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent">
		<span class="navbar-toggler-icon"></span>
	</button>
	
	<a class="navbar-brand" href="index.html"> Mirror Fashion </a>
	
	<!-- menu contido no icone do drop-down-->
	<div class="collapse navbar-collapse" id="navbarToggleExternalContent">
		<ul class="navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="sobre.html">Sobre </a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="#">Ajuda </a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="#">Perguntas Frequentes</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="#">Entre em contato</a>
			</li>
		 </ul>
	</div> <!-- fim do navbar-collapse-->

</nav>



<!-- jumbotron, display-4, lead = classes bootstrap-->
<div class="jumbotron ">
	
	<div class="container"></div>
		<h1 class="display-4">Ótima escolha</h1>
		<p class="lead">Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra</p>
	</div>
	
</div>




<div class="container">
	<div class="row"> <!-- classe linha do grid bootstrao-->
		
		<div class="col-md-4"> <!-- coluna do grid bootstrap-->
			<div class="card mb-3"><!-- informações do produto-->
				<div class="card-header">
					<h2>Sua Compra</h2>
				</div>
	
				<div class="card-body">
				<!-- img-thumbnail mb-3 imagem fica flexível e nunca estoura o tamanho do
			pai -->
					<img src="img/produtos/foto1-verde.png" alt="Fuzzy Cardigan" class="img-thumbnail mb-3">		
					<dl>
						<dt>Produto</dt>
						<dd> <?php echo $produto['nome'];?></dd>
						
						<dt>Cor</dt>
						<dd><?php echo $_POST['cor']; ?></dd>
						
						<dt>Tamanho</dt>
						<dd><?php echo $_POST['Ntamanho']; ?></dd>
						
						<dt>Preço</dt>
						<dd id="Ipreco"><?php echo $produto['preco'];?></dd>
					</dl>
				</div><!--fim card body-->
			</div><!--fim card mb-3-->	
		
			<div class="card-mb3"><!-- cálculo do valor do produto -->
				<div class="card-body"> 
					
					<div class="form-group"> 
						<label for="Iqtd">Quantidade</label>
						<input type="number" id="Iqtd" min="1" max="99" value="1" class="form-control">
					</div>
					
					<div class="form-group">
						<label for="Itotal">Total: </label>
						<output id="Itotal" class="form-control"> R$ <?php echo $produto['preco']; ?></output>
					</div>
					
				</div><!--fim card body-->
			</div><!--fim card mb-3-->
		
		</div><!--fim da coluna grid col-md4-->	
	
		
		<form class="col-md-8"> <!-- coluna do grid bootrap-->
			
			<div class="row"> <!-- linha do grid para formulário em telas large-->
				<fieldset class="col-lg-6"> <!-- coluna do grid para formulário em telas large-->
					<legend> Dados pessoais</legend>
					
					<div class="form-group">
						<label for="Inome"> Nome Completo</labeL>
						<input type="text" class="form-control" id="Inome" name="Nnome" required>
					</div>
					
					<div class="form-group">
						<label for="Iemail">Email</label>
						<input type="email" class="form-control" id="Iemail" name="Nemail" required>
					</div>

					<div class="form-group">
						<label for="Icpf">CPF</label>
						<input type="text" class="form-control" data-mask="999.999.999-99" id="Icpf" name="Ncpf" required>
					</div>
					
					<div class="form-group custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" 
						id="Inews" value="true" checked>
						<label class="custom-control-label" for="Inews">Quero receber Newsletter da Mirror Fashion </label>
					</div>
				</fieldset>
				
				
				<fieldset class="col-lg-6"> <!-- coluna do grid para formulário em telas large-->
					<legend> Cartão de crédito </legend>
					
					<div class="form-group">
						<label for="Inumero-cartao"> Número - CCV</label>
						<input type="text" class="form-control" data-mask="9999 9999 9999 9999 - 999" id="Inumero-cartao" name="Nnumero-cartao" required>
					</div>
					
					<div class="form-group">
						<label for="Ibandeira-cartao"> Bandeira</label>
						<select class="custom-select" id="Ibandeira-cartao" required>
							<option disabled selected> Selecione uma opção...</option>
							<option value="master"> Mastercard</option>
							<option value="visa">Visa</option>
							<option value="amex">American Expresss</option>
						</select>
					</div>
					
					<div class="form-group">
						<label for="Ivalidade-cartao"> Validade </label>
						<input type="month" class="form-control" id="Ivalidade-cartao" name="Nvalidade-cartao" required>
					</div>
				</fieldset>
			
			</div><!-- fim linha do grid para formulário em telas large-->
			
			<button type="submit" class="btn btn-primary">
				Confirmar Pedido
			</button>	
			
			
		</form> <!-- fim formulário e coluna grid-->
	
	</div><!-- fim linha do grid-->
</div> <!-- fim classe container-->



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/inputmask-plugin.js"></script>


<script type="text/javascript" src="js/bootstrap.js"></script>	 
	
<script type="text/javascript" src="js/total.js"></script>	
	
</body>	
	
	
	
	
	
	
	
</html>