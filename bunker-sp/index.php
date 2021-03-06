<?php 
define("URL_SITE", 			"http://" . $_SERVER['HTTP_HOST'] . str_replace("index.php", "", $_SERVER['PHP_SELF']));

//include('inc/head.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include('inc/head2.php'); ?>
</head>
<body id="" class="">

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W5N43ST"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<!-- Menu Mobile -->
	<div id="menu-mobile" class="visible-xs visible-sm">
		<div class="container">
			<div class="collapse" id="collapseMenu" aria-expanded="false" style="height: 0px;">
				<nav class="">
					<ul class="list-unstyled text-center">
						<li><a data-scroll href="#crossfit">Sobre o Crossfit</a></li>
						<li><a data-scroll href="#novidades">Novidades</a></li>
						<li><a data-scroll href="#localizacao">Localização</a></li>
						<li><a href="javascript:void(0);"><span class="glyphicon glyphicon-earphone"></span> 11 94598-8473</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Agende sua Aula Experimental</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Participe de um <b>treino real</b> de Crossfit e entenda melhor como podemos te ajudar!</p>
					<form id="leadmais-form" action="obrigado.php" data-parsley-validate>
						<div class="form-group has-feedback">
							<label for="nome" class="sr-only">Nome</label>
							<input class="form-control" type="text"   name="data[Lead][title]" 		id="leadmais-title" 	placeholder="Seu Nome" data-parsley-required />
						</div>
						<div class="form-group has-feedback">
							<input class="form-control" type="email"  name="data[Lead][email]" 		id="leadmais-email" 	placeholder="Seu E-mail" data-parsley-required />
						</div>
						<div class="form-group has-feedback">
							<input class="form-control telefone" type="text"   name="data[Lead][phone]" 		id="leadmais-phone" 	placeholder="DDD + Celular ou Fixo" data-parsley-required />
						</div>
						<div class="form-group">
							<textarea class="form-control" name="data[Attribute][message]" 			placeholder="Mensagem" rows="2"></textarea>
						</div>
						<div class="form-group">
							<button class="btn btn-success py-3 btn-block" type="submit"><b>ENVIAR</b></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<header>
		<div class="overlay"></div>
		<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
			<source src="img/background.mp4?2" type="video/mp4">
		</video>
		<div class="container" style="height:75%;">
			<div class="container">
				<div class="row pt-4">
					<div class="brand col-8 col-sm-4">
						<h1 class="header-logo">
							<a href="https://www.bunkercf.com.br">
								<img src="img/marca.png" alt="Bunker Crossfit">
								<span class="sr-only">Bunker Crossfit</span>
							</a>
						</h1>
					</div>
					<div id="menu-btn" class="col-4 d-block d-sm-none">
						<div class="pull-right">
							<a class="btn btn-lg btn-default collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseMenu" aria-expanded="false"> 
								<span class="sr-only">Toggle navigation</span> 
								<span class="icon-bar"></span> 
								<span class="icon-bar"></span> 
								<span class="icon-bar"></span> 
							</a>
						</div>
					</div>
					<div class="menu-blocked col-sm-8 d-none d-sm-block pt-2">
						<ul class="nav justify-content-end">
							<li class="nav-item"><a class="nav-link text-white" href="#crossfit">Sobre o Crossfit</a></li>
							<li class="nav-item"><a class="nav-link text-white" href="#novidades">Novidades</a></li>
							<li class="nav-item"><a class="nav-link text-white" href="#localizacao">Localização</a></li>
							<li class="nav-item"><a class="nav-link text-white" href="javascript:void(0);"><i class="fas fa-phone"></i> 11 94598-8473</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="d-flex h-100 text-center align-items-center">
				<div class="w-100 text-white highlight">
					<h2>Prepare-se para mudar de vida!</h2>
					<p>O CrossFit é um programa de treinamento de força e condicionamento físico geral baseado em movimentos funcionais, feitos em alta intensidade e constantemente variados.</p>
					<div class="container">
						<div class="row">
							<div class="passos col-sm d-none d-sm-block"></div>
							<div class="passos col-sm"><a href="#" class="btn btn-success btn-block py-3" data-toggle="modal" data-target="#exampleModal"><i class="far fa-calendar-alt"></i> Agende sua Aula Experimental</a></div>
							<div class="passos col-sm d-none d-sm-block"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Content -->
	<div class="content">
		<section class="middle middle-margin crossfit" id="crossfit">
			<div class="container">
				<div class="title">
					<h2>Sobre o Crossfit</h2>
					<p>O Crossfit foi desenvolvido para melhorar as capacidades fisiológicas de qualquer tipo de pessoa, desde atletas até idosos ou jovens. </p>
				</div>
				<div class="clearfix row crossfit-3">
					<div class="col-sm-4 col-md-4 col-lg-4 text-center">
						<figure><img src="img/icon-move.png" class="img-fluid"></figure>
						<b><h3>Movimentos Funcionais</h3></b>
						<p>São todos aqueles que pode ser aplicado no seu dia-a-dia, como agachar, arremesar, saltar, levantar objetos, dentre outras atividades.</p>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4 text-center">
						<i class="fa fa-bolt" aria-hidden="true"></i>
						<b><h3>Alta Intensidade</h3></b>
						<p>Os treinos são realizados em alta intensidade, porém de forma relativa às condições físicas do praticante.</p>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4 text-center">
						<i class="fa fa-refresh" aria-hidden="true"></i>
						<b><h3>Constantemente Variados</h3></b>
						<p>Para que o corpo seja sempre estimulado a se adaptar e continuar progredindo independente do tempo de prática.</p>
					</div>
				</div>
				<figure><img src="img/bunker.jpg" class="img-fluid"></figure>
				<div class="clearfix row crossfit-beneficios">
					<div class="col-sm-7 col-md-7 col-lg-7">
						<h3>Entendendo um pouco mais...</h3>
						<p>O objetivo do <strong>Crossfit</strong> é potencializar todas as principais capacidades físicas do ser humano, como a resistência respiratória e cardiovascular, a resistência muscular, a flexibilidade, força, coordenação, potência, agilidade, equilíbrio e velocidade. </p>
						<p>Atualmente, os treinos de <strong>Crossfit</strong> são os mais populares em academias de todo o mundo, justamente pela facilidade de adaptação que os exercícios deste programa de treinamento proporcionam para as pessoas de qualquer idade ou nível físico. </p>
						<p>O principal equipamento para a prática do <strong>Crossfit</strong> é o próprio corpo, mas também podem ser utilizadas algumas ferramentas básicas, como cordas, pesos, caixas, elásticos, correntes, entre outros que auxiliem na execução de alguns exercícios. </p>
						<figure><img src="img/bunker3.jpg" class="img-fluid" /></figure>
					</div>
					<div class="col-sm-5 col-md-5 col-lg-5">
						<h3>Benefícios</h3>
						<ul class="list-unstyled">
							<li><i class="fas fa-check"></i> Redução de medidas e percentual de gordura;</li>
							<li><i class="fas fa-check"></i> Melhora na flexibilidade;</li>
							<li><i class="fas fa-check"></i> Ganho de massa muscular;</li>
							<li><i class="fas fa-check"></i> Definição de tônus muscular;</li>
							<li><i class="fas fa-check"></i> Melhora no condicionamento físico;</li>
							<li><i class="fas fa-check"></i> Melhora na qualidade do sono;</li>
							<li><i class="fas fa-check"></i> Aumento de resistência muscular;</li>
							<li><i class="fas fa-check"></i> Melhora no controle corporal;</li>
							<li><i class="fas fa-check"></i> Melhora na secreção hormonal;</li>
							<li><i class="fas fa-check"></i> Melhora no equilíbrio;</li>
							<li><i class="fas fa-check"></i> Redução de stress;</li>
							<li><i class="fas fa-check"></i> Espírito de equipe;</li>
							<li><i class="fas fa-check"></i> Melhora na capacidade cardiovascular e respiratória;</li>
							<li><i class="fas fa-check"></i> Aumento de energia;</li>
							<li><i class="fas fa-check"></i> Treinos variados e em grupo.</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<span id="novidades"></span>
		<div class="not-fullscreen background background-familia parallax" style="background-image:url('img/bg8.jpg');" data-img-width="1600" data-img-height="1064">
			<div class="container middle-parallax">
				<div class="content-parallax">
					<h2>Eventos e Novidades</h2>
					<p>Fique por dentro das novidades da Bunker Sampa através das redes sociais.</p>
					<div class="text-center">
						<a href="https://www.instagram.com/bunker_sampa/" target="_blank" class="text-white"><i class="fab fa-3x pr-2 fa-instagram"></i></a>
						<a href="https://www.facebook.com/CrossFitSampa/" target="_blank" class="text-white"><i class="fab fa-3x fa-facebook"></i></a>
					</div>
				</div>
			</div>
		</div>

		<div class="not-fullscreen background background-familia">
			<div class="container middle-parallax como-chegar">
				<div class="content-parallax">
					<h2>Como Chegar?</h2>
					<p>Rua Traipú, 205 - Pacaembu, São Paulo - SP, 01235-000. <br> <i class="fa fa-phone" aria-hidden="true"></i> <a class="tel" href="tel:11945988473">11 94598-8473</a></p>
					<div class="text-center">
						<a href="https://goo.gl/maps/xhXkBovzx1r" target="_blank" class="btn py-2 btn-light"><i class="fas fa-map-marker-alt pr-2"></i> Acessar Mapa</a>
					</div>
				</div>
			</div>
		</div>

	</div>
	<?php include('inc/footer.php'); ?>
</body>
</html>