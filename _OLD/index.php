<?php 
define("URL_SITE", 			"http://" . $_SERVER['HTTP_HOST'] . str_replace("index.php", "", $_SERVER['PHP_SELF']));

include('inc/head.php'); 
?>
<!doctype html>
<!--[if lt IE 7 ]> <html lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#" class="no-js oldie ie6 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7 ]>    <html lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#" class="no-js oldie ie7 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#" class="no-js oldie ie8 lt-ie9"> <![endif]-->
<!--[if IE 9 ]>    <html lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#" class="no-js" ><!--<![endif]-->
<head>
	<?php include('inc/head2.php'); ?>
</head>
<body id="" class="">
	<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WG5NKBR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WG5NKBR');</script>
<!-- End Google Tag Manager -->
	<!-- Menu Mobile -->
	<div id="menu-mobile" class="visible-xs visible-sm">
		<div class="container">
			<div class="collapse" id="collapseMenu" aria-expanded="false" style="height: 0px;">
				<nav class="">
					<ul class="list-unstyled text-center">
						<li><a data-scroll href="#crossfit">Crossfit</a></li>
						<li><a data-scroll href="#depoimentos">Depoimentos</a></li>
						<li><a data-scroll href="#horarios">Horários</a></li>
						<li><a data-scroll href="#localizacao">Localização</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title text-center" id="myModalLabel">Agende sua Aula Experimental</h4>
	      </div>
	      <div class="modal-body">
	      		<p>Participe de um treino real de Crossfit e entenda melhor como podemos te ajudar. O que está esperando? :)</p>
				<form id="leadmais-form" data-parsley-validate>

					<input type="hidden" name="data[Account][token]" 	value="<?php echo LEADMAIS_TOKEN;?>"  />
					<input type="hidden" name="data[Lead][interesting]" value="<?php echo LEADMAIS_INTERESTING?>" />
					<input type="hidden" name="data[Product][token]" 	value="<?php echo LEADMAIS_PRODUCT;?>"  />	
					<input type="hidden" name="data[Source][token]" 	value="<?php echo LEADMAIS_SOURCE;?>" />
					

					<div class="form-group has-feedback">
						<label for="nome" class="sr-only">Nome</label>
						<input class="form-control" type="text"   name="data[Lead][title]" 		id="leadmais-title" 	placeholder="Seu Nome" data-parsley-required />
					</div>
					<div class="form-group has-feedback">
						<input class="form-control" type="email"  name="data[Lead][email]" 		id="leadmais-email" 	placeholder="Seu E-mail" data-parsley-required />
					</div>
					<div class="form-group has-feedback">
						<input class="form-control" type="text"   name="data[Lead][phone]" 		id="leadmais-phone" 	placeholder="DDD + Celular ou Fixo" class="telefone" data-parsley-required />
					</div>
					<div class="form-group">
						<textarea class="form-control" name="data[Attribute][message]" 			placeholder="Mensagem" rows="2"></textarea>
					</div>
					<div class="form-group">
						<button id="leadmais-submit" class="btn btn-success btn-lg btn-block" type="submit">Enviar</button>
					</div>
				</form>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="agende">
		<div class="container">
			<div class="col-sm-7 col-md-7 col-lg-8">
				<p class="hidden-xs">Não perca tempo, agende sua aula experimental e <br> <b>mude de vida com a gente!</b></p>
			</div>
			<div class="col-sm-5 col-md-5 col-lg-4">
				<a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-calendar"></i> Agende sua Aula Experimental</a>
			</div>
		</div>
	</div>

	<!-- Video -->
	<div class="fullscreen background parallax" style="background-image:url('img/bg-main2.jpg');" data-img-width="1600" data-img-height="1064">
		<div id="video-wrap" class="video-wrap">
			<div class="content-overlay">
				<div class="container">
					<header>
						<div class="container">
							<div id="menu-btn" class="visible-xs visible-sm pull-right">
								<a class="btn btn-lg btn-default collapsed" data-toggle="collapse" data-target="#collapseMenu" aria-expanded="false"> 
									<span class="sr-only">Toggle navigation</span> 
									<span class="icon-bar"></span> 
									<span class="icon-bar"></span> 
									<span class="icon-bar"></span> 
								</a>
							</div>
							<div class="brand col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<h1 class="header-logo">
									<a href="http://www.bunkercf.com.br">
										<img src="img/marca.png" alt="Bunker Crossfit">
										<span class="sr-only">Bunker Crossfit</span>
									</a>
								</h1>
							</div>
							<div class="menu-blocked hidden-sm hidden-xs col-sm-6 col-md-6 col-lg-6 pull-right">
								<nav class="clearfix">
									<ul class="list-unstyled nav navbar-nav">
										<li><a data-scroll href="#crossfit">Crossfit</a></li>
										<li><a data-scroll href="#depoimentos">Depoimentos</a></li>
										<li><a data-scroll href="#horarios">Horários</a></li>
										<li><a data-scroll href="#localizacao">Localização</a></li>
										<li class="hidden-md"><a href="javascript:void(0);"><span class="glyphicon glyphicon-earphone"></span> 81 3040-6063</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</header>
					<section class="highlight text-center">
						<div class="teste">
						<h2>Prepare-se para mudar de vida!</h2>
							<p>O CrossFit é um programa de treinamento de força e condicionamento físico geral baseado em movimentos funcionais, feitos em alta intensidade e constantemente variados.</p>
							<div class="clearfix">
								<div class="passos"><span class="hidden-xs">1º</span> <a href="https://www.youtube.com/watch?v=BUNVLyOSeRg?fs=1&amp;autoplay=1" class="btn video btn-lg btn-default"><i class="glyphicon glyphicon-play-circle"></i> Entenda o Crossfit</a></div>
								<div class="passos"><span class="hidden-xs">2º</span> <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-calendar"></i> Agende sua Aula Experimental</a></div>
								<div class="passos hidden-xs"><span class="hidden-xs">3º</span> <a data-scroll href="#depoimentos" class="btn btn-lg btn-default"><i class="glyphicon glyphicon-thumbs-up"></i> Mude de Vida</a></div>
							</div>
						</div>
					</section>
		    	</div>
			</div>
			<video preload="metadata" autoplay loop id="my-video" class="hidden-xs">
				<source src="img/background.mp4" type="video/mp4">
			</video>
		</div>
	</div>

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
						<figure><img src="img/icon-move.png" class="img-responsive"></figure>
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
				<figure><img src="img/bunker.jpg" class="img-responsive"></figure>
				<div class="clearfix row crossfit-beneficios">
					<div class="col-sm-7 col-md-7 col-lg-7">
						<h3>Entendendo um pouco mais...</h3>
						<p>O objetivo do <strong>Crossfit</strong> é potencializar todas as principais capacidades físicas do ser humano, como a resistência respiratória e cardiovascular, a resistência muscular, a flexibilidade, força, coordenação, potência, agilidade, equilíbrio e velocidade. </p>
						<p>Atualmente, os treinos de <strong>Crossfit</strong> são os mais populares em academias de todo o mundo, justamente pela facilidade de adaptação que os exercícios deste programa de treinamento proporcionam para as pessoas de qualquer idade ou nível físico. </p>
						<p>O principal equipamento para a prática do <strong>Crossfit</strong> é o próprio corpo, mas também podem ser utilizadas algumas ferramentas básicas, como cordas, pesos, caixas, elásticos, correntes, entre outros que auxiliem na execução de alguns exercícios. </p>
						<figure><img src="img/bunker3.jpg" class="img-responsive"></figure>
					</div>
					<div class="col-sm-5 col-md-5 col-lg-5">
						<h3>Benefícios</h3>
						<ul class="list-unstyled">
							<li><i class="glyphicon glyphicon-ok"></i> Redução de medidas e percentual de gordura;</li>
							<li><i class="glyphicon glyphicon-ok"></i> Melhora na flexibilidade;</li>
							<li><i class="glyphicon glyphicon-ok"></i> Ganho de massa muscular;</li>
							<li><i class="glyphicon glyphicon-ok"></i> Definição de tônus muscular;</li>
							<li><i class="glyphicon glyphicon-ok"></i> Melhora no condicionamento físico;</li>
							<li><i class="glyphicon glyphicon-ok"></i> Melhora na qualidade do sono;</li>
							<li><i class="glyphicon glyphicon-ok"></i> Aumento de resistência muscular;</li>
							<li><i class="glyphicon glyphicon-ok"></i> Melhora no controle corporal;</li>
							<li><i class="glyphicon glyphicon-ok"></i> Melhora na secreção hormonal;</li>
							<li><i class="glyphicon glyphicon-ok"></i> Melhora no equilíbrio;</li>
							<li><i class="glyphicon glyphicon-ok"></i> Redução de stress;</li>
							<li><i class="glyphicon glyphicon-ok"></i> Espírito de equipe;</li>
							<li><i class="glyphicon glyphicon-ok"></i> Melhora na capacidade cardiovascular e respiratória;</li>
							<li><i class="glyphicon glyphicon-ok"></i> Aumento de energia;</li>
							<li><i class="glyphicon glyphicon-ok"></i> Treinos variados e em grupo.</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<div class="not-fullscreen background background-familia parallax" style="background-image:url('img/bg1.jpg');" data-img-width="1600" data-img-height="1064">
			<div class="container middle-parallax">
				<div class="content-parallax">
					<h2>Faça parte da família Bunker</h2>
					<p>Agende sua aula experimental e vivencie um treino real de Crossfit. O que está esperando?</p>
				</div>
			</div>
		</div>

		<span id="depoimentos"></span>
		<section class="middle middle-margin blocos">
			<div class="container">
				<div class="title">
					<h2>Quem já pratica</h2>
					<p>Pessoas comuns, objetivos diversos, evolução, superação e muita saúde. Conheça as histórias inspiradoras dos nossos alunos. Você é o próximo!</p>
				</div>
				<div class="clearfix row">
					<?php
						if ( !empty( $videos ) ) {
							
							foreach ( $videos as $video ) {
								
								?>
								<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 bloco">
									<div class="embed-responsive embed-responsive-16by9">
										<?php
											/*
											<iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo $video["id"];?>?rel=0&amp;showinfo=0&amp;autoplay=0&amp;controls=1"></iframe>
											 */
										?>
										<a class="video" rel="group" href="https://www.youtube.com/watch?v=<?php echo $video["id"];?>?fs=1&amp;autoplay=1" >
											<img src="<?php echo $video["imagem"];?>" alt="<?php echo $video["titulo"];?>" title="<?php echo $video["titulo"];?>" class="img-responsive" />
										</a>
									</div>
									<p><?php echo $video["titulo"];?></p>
								</div>
								<?php 
							}
						}
					?>
				</div>
			</div>
		</section>

		<div class="not-fullscreen background background-familia parallax" style="background-image:url('img/bg8.jpg');" data-img-width="1600" data-img-height="1064">
			<div class="container middle-parallax">
				<div class="content-parallax">
					<h2>Eventos e Novidades</h2>
					<p>Fique por dentro das novidades da Bunker através das redes sociais.</p>
					<div class="text-center">
						<!-- <a href="https://www.facebook.com/bunkercf/" target="_blank" class="btn btn-lg btn-default btn-facebook"><i class="fa fa-facebook" aria-hidden="true"></i> <span class="hidden-xs">Facebook</span></a>
						<a href="https://instagram.com/bunker_cf/" target="_blank" class="btn btn-lg btn-default btn-instagram"><i class="fa fa-instagram" aria-hidden="true"></i> <span class="hidden-xs">Instagram</span></a>
						<a href="https://www.youtube.com/channel/UC57oZgESdKYSpcI9igiV_4Q" target="_blank" class="btn btn-lg btn-default btn-youtube"><i class="fa fa-youtube" aria-hidden="true"></i> <span class="hidden-xs">YouTube</span></a> -->
						<!-- <div class="g-ytsubscribe" data-channel="GoogleDevelopers" data-layout="default" data-count="default"></div> -->
						<div class="g-ytsubscribe" data-channelid="UC57oZgESdKYSpcI9igiV_4Q" data-layout="default" data-count="default"></div>
						<br>
						<div class="fb-like" data-href="https://www.facebook.com/bunkercf/?fref=ts" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
					</div>
				</div>
			</div>
		</div>

		<section class="middle middle-margin blocos">
			<div class="container">
				<div class="title">
					<h2>@bunker_cf</h2>
					<p>Acompanhe a bunker no Instagram!</p></h2>
				</div>
				<div class="clearfix row">
					<?php
						if ( !empty( $imagens ) ) {
							foreach ( $imagens as $imagem ) {
								?>
								<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 bloco">
									<a class="fancybox" rel="group" href="<?php echo $imagem["standard_resolution"];?>" >
										<img src="<?php echo $imagem["standard_resolution"];?>" title="<?php echo $imagem["caption"];?>" class="img-responsive" />
									</a>
								</div>
								<?php 
							}
						}
					?>
				</div>
			</div>
		</section>


		<span id="localizacao"></span>
		<div class="not-fullscreen background background-familia parallax" style="background-image:url('img/bg6.jpg');" data-img-width="1600" data-img-height="1064">
			<div class="container middle-parallax como-chegar">
				<div class="content-parallax">
					<h2>Como Chegar?</h2>
					<p>A Bunker está localizada na R. José da Silva Lucena, 515 - Boa Viagem - Recife/PE. <br> <i class="fa fa-phone" aria-hidden="true"></i> <a class="tel" href="tel:8133393333">81 3040-6063</a></p>
					<div class="text-center">
						<a href="https://goo.gl/maps/xhXkBovzx1r" target="_blank" class="btn btn-lg btn-default"><i class="glyphicon glyphicon-map-marker"></i> Acessar Mapa</a>
					</div>
				</div>
			</div>
		</div>


		<span id="horarios"></span>
		<section class="middle middle-margin blocos">
			<div class="container">
				<div class="title">
					<h2>Grade de Horários</h2>
					<!-- <p>Acompanhe a bunker no Instagram!</p></h2> -->
				</div>
				<div class="clearfix row">
					<div class="table-responsive col-lg-12">
						<h3>Bunker Games</h3>
						<br>
			            <table class="table table-curved ">
			              <thead class="thead-inverse">
			                <tr>
			                  <th>Horário</th>
			                  <th>Segunda</th>
			                  <th>Terça</th>
			                  <th>Quarta</th>
			                  <th>Quinta</th>
			                  <th>Sexta</th>
			                  <th>Sábado</th>
			                </tr>
			              </thead>
			              <tbody>
			                <tr>
			                  <td>5:30</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>---</td>
			                </tr>
			                <tr>
			                  <td>6:00</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>---</td>
			                </tr>
			                <tr>
			                  <td>6:30</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>---</td>
			                </tr>
			                <tr>
			                  <td>7:00</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>---</td>
			                </tr>
			                <tr>
			                  <td>7:30</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>---</td>
			                </tr>
			                <tr>
			                  <td>8:00</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>---</td>
			                </tr>
			                <tr>
			                  <td>9:00</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>Team Bunker</td>
			                </tr>
			                <tr>
			                  <td>10:00</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>Team Bunker</td>
			                </tr>
			                <tr>
			                  <td>11:00</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>Team Bunker</td>
			                </tr>
			                <tr>
			                  <td>12:30</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>---</td>
			                </tr>
			                <tr>
			                  <td>16:30</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>---</td>
			                </tr>
			                <tr>
			                  <td>17:30</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>---</td>
			                </tr>
			                <tr>
			                  <td>18:30</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>---</td>
			                </tr>
			                <tr>
			                  <td>19:30</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>---</td>
			                </tr>
			                <tr>
			                  <td>20:30</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>---</td>
			                </tr>
			              </tbody>
			            </table>
		            </div>
		          	<div class="table-responsive col-lg-12">
			            <br>
						<h3>Bunker Force</h3>
						<br>
			          	<table class="table table-curved">
			              <thead class="thead-inverse">
			                <tr>
			                  <th>Horário</th>
			                  <th>Segunda</th>
			                  <th>Terça</th>
			                  <th>Quarta</th>
			                  <th>Quinta</th>
			                  <th>Sexta</th>
			                  <th>Sábado</th>
			                </tr>
			              </thead>
			              <tbody>
			                <tr>
			                  <td>6:00</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                </tr>
			                <tr>
			                  <td>7:00</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                </tr>
			                <tr>
			                  <td>8:00</td>
			                  <td>---</td>
			                  <td>LPO - Class</td>
			                  <td>Endurance - Class</td>
			                  <td>Gymnastics - Class</td>
			                  <td>---</td>
			                  <td>---</td>
			                </tr>
			                <tr>
			                  <td>9:00</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>Team Bunker</td>
			                </tr>
			                <tr>
			                  <td>10:00</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>Team Bunker</td>
			                </tr>
			                <tr>
			                  <td>11:00</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>Team Bunker</td>
			                </tr>
			                <tr>
			                  <td>12:00</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                  <td>---</td>
			                </tr>
			                <tr>
			                  <td>16:00</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>---</td>
			                </tr>
			                <tr>
			                  <td>17:00</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>---</td>
			                </tr>
			                <tr>
			                  <td>18:00</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>---</td>
			                </tr>
			                <tr>
			                  <td>19:00</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>CrossFit</td>
			                  <td>---</td>
			                </tr>
			                <tr>
			                  <td>20:00</td>
			                  <td>CrossFit / Competiton</td>
			                  <td>LPO Class/ Competiton</td>
			                  <td>Endurance Class / Competiton</td>
			                  <td>Gymnastics Class / Competiton</td>
			                  <td>CrossFit / Competiton</td>
			                  <td>---</td>
			                </tr>
			                <tr>
			                  <td>21:00</td>
			                  <td>CrossFit / Competiton</td>
			                  <td>LPO Class/ Competiton</td>
			                  <td>Endurance Class / Competiton</td>
			                  <td>Gymnastics Class / Competiton</td>
			                  <td>CrossFit / Competiton</td>
			                  <td>---</td>
			                </tr>
			              </tbody>
			            </table>
			            <br><br><br><br>
		          	</div>
				</div>
			</div>
		</section>
	</div>
	<?php include('inc/footer.php'); ?>
</body>
</html>