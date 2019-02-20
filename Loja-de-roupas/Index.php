<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	
	<link rel="stylesheet"  href="css/estilo.css" >
	<link rel="stylesheet" href="css/reset.css"> <!--arquivo css que reseta as estilizacões dos navegadores-->
	<!--[if lt IE 9]> <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
	<!-- hack js para gerar compatibilidade do html 5 em versões antigas do explorer-->

	<link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script' rel="stylesheet">
	<!-- url de fontes do google-->
</head>
<body>

<!--chamando conteúdo html do cabecalho-->
<?php include("cabecalho.php"); ?>
<!--Fim Do Cabecalho-->

<div class="container destaque"> <!-- Conteúdo principal -->
	<section class="busca">
		<h2>Busca</h2>
		<form>
			<input type="search">
			<button>Buscar</button>
		</form>
		</h2>
	</section>
	<!-- fim .busca -->
	
	
	<h1></h1>
	
	
	
	

	
	<section class="menu-departamentos">
		<h2>Departamentos</h2>
		<nav>
			<ul>
				<li><a href="#">Blusas e camisas</a>
					<ul><!-- sublista-->
						<li><a href="#"> Manga curta</a></li>
						<li><a href="#"> Manga comprida</a></li>
						<li><a href="#"> Camisa Social</a></li>
						<li><a href="#"> Camisa casual</a></li>
					</ul></li>
				<li><a href="#">Calças</a></li>
				<li><a href="#">Saias</a></li>
				<li><a href="#">Vestidos</a></li>
				<li><a href="#">Sapatos</a></li>
				<li><a href="#">Bolsas e carteiras</a></li>
				<li><a href="#">Acessórios</a></li>
			</ul>
		</nav>		
	</section>
	<!-- fim .menu-departamentos -->
	<section class="banner-destaque">
		<figure>
			<img src="img/destaque-home.png" alt="Destaque banner">
		</figure>
	</section>
	<!-- fim .banner-destaque -->
</div>
<!--Fim do conteúdo principal-->
	
<div class="container paineis"> <!-- Painéis com destaques -->
<!--Comeco do primeiro painel-->
	<section class="painel novidades " >
	<h2>Novidades</h2>
	
	<ol>
	<?php
	$conexao =  mysqli_connect("localhost","root","usbw","lojaroupa");
	//pesquisando os 12 mais recentes
	$dados = mysqli_query($conexao, "select * from produtos ORDER BY data DESC limit 0,12"); 
	
	while($produto = mysqli_fetch_array($dados)):
	?>	
		<li>
			<a href="produto.php?id=<?php echo $produto['id'];?> ">
				<figure>
					<img src="img/produtos/miniatura<?php echo $produto['id'];?>.png" alt="miniatura1">
					<figcaption><?php echo $produto['nome'];?> por R$ <?php echo $produto['preco'];?> </figcaption>
				</figure>
			</a>
		</li>
	
	<?php endwhile; ?>
	</ol>
	
	<button type="button">Mostrar Mais</button>
	
	</section><!--fim painel novidades-->

<!-- Começo do Segundo painel-->
	<section class="painel mais-vendidos ">
	<h2>Mais vendidos</h2>
	
	<ol>
	<?php 
	$conexao = mysqli_connect("localhost","root","usbw","lojaroupa");
	$dados = mysqli_query($conexao, "select * from produtos order by vendas DESC limit 0,12");
	
	while($produto = mysqli_fetch_array($dados)):
	?>
		<li>
			<a href="produto.php? id=<?php echo $produto['id'];?> ">
				<figure>
					<img src="img/produtos/miniatura<?php echo $produto['id'];?>.png" alt="miniatura7">
					<figcaption> <?php echo $produto['nome'];?> <?php echo $produto['preco'];?></figcaption>
				</figure>
			</a>
		</li>
		
	<?php endwhile ?>	
	
	</ol>
	
	<button type="button">Mostrar Mais</button>
	
	</section>
</div>
<!-- Fim do segundo Painel-->

<?php include("rodape.php"); ?>



<script type="text/javascript" src="js/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js" ></script>
<!--chamando o less.js-->



<script type="text/javascript" src="js/home.js"></script>

<script type="text/javascript" src="js/banner.js"></script>
</body>
</html>