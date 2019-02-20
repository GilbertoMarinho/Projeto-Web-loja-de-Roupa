<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sobre a Mirror Fashion</title>
	<link rel="stylesheet" href="css/sobre.css" >
	<link rel="stylesheet" href="css/estilo.css" >
	
</head>
<body>

<header class="container">
	<p class="sacola"> Nenhum item na sacola de compras
	</p>
	<h1><!--h1 destaque semantico-->
		<img src="img/logo.png" alt="Mirror Fashion">
	</h1>
	
	<nav class="menu-opcoes"> <!-- class mais fraca que id, porém mais flexivel-->
		<ul> 
			<li><a href="#">Sua Conta</a></li> 
			<li><a href="#">Lista de Desejos</a></li> 
			<li><a href="#">Cartão Fidelidade</a></li> 
			<li><a href="sobre.html">Sobre</a></li> 
			<li><a href="#">Ajuda</a></li>
		</ul>
	</nav>
	
</header>
	
<article class="container">	
	
	<!--seção sobre a mirror fashion-->
	<section>
		<h1 id="titulo-principal">A Mirror Fashion</h1>

		<p class="texto">A <strong>Mirror Fashion</strong>  é a maior empresa comércio eletrônico no segmento de moda em todo o mundo. 
	Fundada á <?php print date("Y") -1932;   ?> anos , possui filiais em 124 países, sendo líder de mercado com mais de 90% de 
	participação em 118 deles.</p>


		<p class="texto">Nosso centro de distribuição fica em <a href="https://maps.google.com.br/?q=Jacarezinho">Jacarezinho, no Paraná.</a> De lá, saem 48 aviões que 
	distribuem nossos produtos às casas do mundo todo. Nosso centro de distribuição:</p>
		
		<figure class="centro-dtc caixa">
			<img src="img/centro-distribuicao.png" alt="Foto do Centro de Distribuicao da Mirror fashion">
			<figcaption>Centro de distribuiçăo da Mirror Fashion</figcaption> <!--legenda-->
		</figure>

		<p class="texto">Compre suas roupas e acessórios na Mirror Fashion. Acesse <a href="index.html"> nossa loja</a> ou entre em contato 
	se tiver dúvidas. Conheça também nossa <a href="#historia">história</a> e nossos <a  href="#diferenciais">diferenciais.</a></p>
	<!-- href="#id" link no mesmo documento-->
	</section>
	
	<!--vídeo do youtube-->
	<iframe  width="425" height="315" src="http://www.youtube.com/embed/Tb06abHE4hY" frameborder="0" allowfullscreen></iframe>
	
	
	<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?q=Jacarezinho&amp;output=embed"> </iframe>

	<!--seção historia-->
	<section> 
		<h2 id="historia">História</h2>
		
		<figure class="familia-pelho caixa">
			<img src="img/familia-pelho.jpg" alt="Foto da Familia Pelho">
			<figcaption>Família Pelho</figcaption>
		</figure>
		
		<p class="texto">A fundação em 1932 ocorreu no momento da descoberta econônica do interior do Paraná. A 
	família Pelho, tradicional da região, investiu todas as suas economias nessa nova iniciativa, 
	revolucionária para a época. O fundador <em>Eduardo Simões Pelho</em>, dotado de particular visão 
	administrativa, guiou os negócios da empresa durante mais de 50 anos, muitos deles ao lado 
	de seu filho <em>E. S. Pelho Filho</em>, atual CEO. O nome da empresa é inspirado no nome da família.<p/>

		<p class="texto">O crescimento da empresa foi praticamente instantâneo. Nos primeiros 5 anos, já atendia 18 países. 
	Bateu a marca de 100 países em apenas 15 anos de existência. Até hoje, já atendeu 740 milhões 
	de usuários diferentes, em bilhões de diferentes pedidos.</p>

		<p class="texto">O crescimento em número de funcionários é também assombroso. Hoje, é a maior empregadora do 
	Brasil, mas mesmo após apenas 5 anos de sua existência, já possuía 30 mil funcionários. Fora do 
	Brasil, há 240 mil funcionários, além dos 890 mil brasileiros nas instalações de Jacarezinho e 
	nos escritórios em todo país.</p>

		<p class="texto">Dada a importância econômica da empresa para o Brasil, a família Pelho já recebeu diversos prêmios, 
	homenagens e condecorações. Todos os presidentes do Brasil já visitaram as instalações da Mirror 
	Fashion, além de presidentes da União Européia, Ásia e o secretário-geral da ONU.</p>

		<h2 id="diferenciais">Diferenciais</h2>
		<ul class="texto">
			<li>Menor preço do varejo, garantido</li>
			<li>Se você achar uma loja mais barata, leva o produto de graça</li>
			<li>Pague em reais, dólares, euros ou bitcoins</li>
			<li>Todas as compras com frete grátis para o mundo todo</li>
			<li>Maior comércio eletrônico de moda do mundo</li>
			<li>Atendimento via telefone, email, chat, twitter, facebook, carta, fax e telegrama</li>
			<li>Presente em 124 países</li>
			<li>Mais de um milhão de funcionários em todo o mundo</li>
		</ul>
	</section>
</article>
	
<footer>   
	<div class="container">
		<img src="img/logo-rodape.png" alt="Logo da Mirror Fashion">
		<ul class="social">
			<li><a href="http://facebook.com/mirrorfashion">Facebook</a></li>
			<li><a href="http://twitter.com/mirrorfashion">Twitter</a></li>
			<li><a href="http://plus.google.com/mirrorfashion">Google</a></li>
		</ul>
	</div>
</footer>
		
</body>
</html>