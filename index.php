<?php

define("URL_SITE", 			"http://" . $_SERVER['HTTP_HOST'] . str_replace("index.php", "", $_SERVER['PHP_SELF']));

// if ( strpos("localhost", $_SERVER["HTTP_HOST"]) !== false ) {

// 	define("URL_SCRIPT_LEADMAIS", 	"//leadmaisteste.com.br/js/leadmais-script.js" );
// 	define("LEADMAIS_TOKEN", 		"a552c11350622363dd3af302af2fbfb5" );
// 	define("LEADMAIS_INTERESTING", 	"Crossfit" );
// 	define("LEADMAIS_PRODUCT", 		"8343d521ef9fef84f1dd96b516980b4b" );
// 	define("LEADMAIS_SOURCE", 		"19f38749422e9de968c2ecf47637ffab" );

// } else {

	define("URL_SCRIPT_LEADMAIS", 	"//leadmais.com.br/js/leadmais-script.js" );
	define("LEADMAIS_TOKEN", 		"a552c11350622363dd3af302af2fbfb5" );
	define("LEADMAIS_INTERESTING", 	"Crossfit" );
	define("LEADMAIS_PRODUCT", 		"8343d521ef9fef84f1dd96b516980b4b" );
	define("LEADMAIS_SOURCE", 		"19f38749422e9de968c2ecf47637ffab" );
// }

/////////// BUSCANDO VIDEOS DO YOUTUBE ///////////////////

$videos = array();

try
{
	include('lib/google/autoload.php');
	include('lib/google/Service/YouTube.php');

	define('USER', '596565644183-compute@developer.gserviceaccount.com');
	define('PASS', 'Website-a2904275f0e6.p12');

	$credentials = new Google_Auth_AssertionCredentials(
			USER,
			array('https://www.googleapis.com/auth/youtube'),
			file_get_contents(PASS)
			);

	$client = new Google_Client();
	$client->setAssertionCredentials($credentials);

	if ($client->getAuth()->isAccessTokenExpired()) {
		$client->getAuth()->refreshTokenWithAssertion();
	}

	$arrVideosHome = $arrVideosJogacos = $arrVideosRadio = array();
	$cVideosHome = $cVideosJogacos = $cVideosRadio = 0;

	$youtube = new Google_Service_Youtube($client);

	$arrPlaylistHome = $youtube->playlistItems->listPlaylistItems('contentDetails,snippet', array('playlistId' =>  'PL5oNPFwWHlkN9N669Sa3ewqQpR_nE0E0Q', 'maxResults' => 8));

	if ( !empty( $arrPlaylistHome ) ) {

		foreach ($arrPlaylistHome as $video) {

			$dados 				= array();
			$dados["id"] 		= $video->getContentDetails()->videoId;
			$dados["titulo"] 	= $video->getSnippet()->title;
			$dados["imagem"] 	= $video->getSnippet()->getThumbnails()->getMaxres()->url;
			
			$videos[] = $dados;
		}
	}

} catch (Exception $e) {
	// echo $e->getMessage();
	// DIE();
}


/////////// BUSCANDO IMAGENS DO INSTAGRAM ///////////////////

$access_token = "2144660815.13ec8ee.5041a4b166e4409e94a5a286ac4a3d08";

$ch 		= curl_init( "https://api.instagram.com/v1/users/2144660815/media/recent/?access_token=" . $access_token );
curl_setopt( $ch, CURLOPT_HEADER, 0 );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
$output 	= curl_exec($ch);
curl_close( $ch );

$retorno = json_decode( $output );

$imagens = array();

// se deu tudo certo na requisição
if ( !empty( $retorno->meta->code ) && $retorno->meta->code == 200 ) {

	foreach ( $retorno->data as $data ) {

// 		echo '<pre>';
// 		var_dump( $data );
// 		die();

		$imagem 						= array();
		$imagem["link"] 				= $data->link;
		$imagem["caption"] 				= $data->caption->text;
		$imagem["low_resolution"] 		= $data->images->low_resolution->url;
		$imagem["standard_resolution"] 	= $data->images->standard_resolution->url;
		$imagem["thumbnail"] 			= $data->images->thumbnail->url;
		$imagens[] 						= $imagem;
	}
}

?><!doctype html>
<!--[if lt IE 7 ]> <html lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#" class="no-js oldie ie6 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7 ]>    <html lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#" class="no-js oldie ie7 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#" class="no-js oldie ie8 lt-ie9"> <![endif]-->
<!--[if IE 9 ]>    <html lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#" class="no-js" ><!--<![endif]-->
<head>
    <meta charset="utf-8" />
	<title>Bunker Crossfit</title>
    <meta name="description" content="" />
    <meta name="robots" content="index,follow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Oxygen:400,700|Roboto:400,700" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" /> -->
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css?<?php echo rand(); ?>" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <!-- <meta property="og:url" content="" />
    <meta property="og:description" content="" />
    <meta property="og:title" content="" />
    <meta property="og:image" content="" /> -->
</head>
<body id="" class="">

	<!-- Menu Mobile -->
	<div id="menu-mobile" class="visible-xs visible-sm">
		<div class="container">
			<div class="collapse" id="collapseMenu" aria-expanded="false" style="height: 0px;">
				<nav class="">
					<ul class="list-unstyled text-center">
						<li><a data-scroll href="#crossfit">Crossfit</a></li>
						<li><a data-scroll href="#depoimentos">Depoimentos</a></li>
						<li><a data-scroll href="#fotos">@bunker_cf</a></li>
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
				<form action="" role="form" data-toggle="validator" id="leadmais-form">
					<input type="hidden" name="data[Account][token]" 	value="<?php echo LEADMAIS_TOKEN;?>"  />
					<input type="hidden" name="data[Lead][interesting]" value="<?php echo LEADMAIS_INTERESTING?>" />
					<input type="hidden" name="data[Product][token]" 	value="<?php echo LEADMAIS_PRODUCT;?>"  />	
					<input type="hidden" name="data[Source][token]" 	value="<?php echo LEADMAIS_SOURCE;?>" />
					

					<div class="form-group has-feedback">
						<label for="nome" class="sr-only">Nome</label>
						<input name="data[Lead][title]" id="leadmais-title" type="text" placeholder="Seu Nome" class="form-control" value="<?php echo ( !empty( $coockie) ) ? $coockie['title'] : '';?>" required />
					</div>
					<div class="form-group has-feedback">
						<input name="data[Lead][email]" id="leadmais-email" type="email" placeholder="Seu E-mail" class="form-control" value="<?php echo ( !empty( $coockie) ) ? $coockie['email'] : '';?>" required />
					</div>
					<div class="form-group has-feedback">
						<input name="data[Lead][phone]" id="leadmais-phone" type="text" placeholder="DDD + Celular ou Fixo" class="form-control telefone" value="<?php echo ( !empty( $coockie) ) ? $coockie['phone'] : '';?>" required />
					</div>
					<div class="form-group">
						<textarea name="data[Attribute][mensagem]" id="leadmais-mensagem" placeholder="Mensagem" rows="2" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<button class="btn btn-success btn-lg btn-block" id="leadmais-submit">Enviar</button>
					</div>
				</form>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="agende">
		<div class="container">
			<div class="col-lg-8">
				<p class="hidden-xs">Não perca tempo, agende sua aula experimental e <br> <b>mude de vida com a gente!</b></p>
			</div>
			<div class="col-lg-4">
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
									<a href="#">
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
										<li><a data-scroll href="#fotos">@bunker_cf</a></li>
										<li><a data-scroll href="#localizacao">Localização</a></li>
										<li><a href="javascript:void(0);"><span class="glyphicon glyphicon-earphone"></span> 81 3339-1022</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</header>
					<section class="highlight text-center">
						<h2>Prepare-se para mudar de vida!</h2>
						<p>O CrossFit é um programa de treinamento de força e condicionamento físico geral baseado em movimentos funcionais, feitos em alta intensidade e constantemente variados.</p>
						<div class="clearfix">
							<div class="passos"><span class="hidden-xs">1º</span> <a href="https://www.youtube.com/watch?v=nbEsaE7tXLs?fs=1&amp;autoplay=1" class="btn video btn-lg btn-default"><i class="glyphicon glyphicon-play-circle"></i> Entenda o Crossfit</a></div>
							<div class="passos"><span class="hidden-xs">2º</span> <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-calendar"></i> Agende sua Aula Experimental</a></div>
							<div class="passos hidden-xs"><span class="hidden-xs">3º</span> <a href="#" class="btn btn-lg btn-default"><i class="glyphicon glyphicon-thumbs-up"></i> Mude de Vida</a></div>
						</div>
					</section>
		    	</div>
			</div>
			<video preload="metadata" autoplay loop id="my-video" class="hidden-xs">
				<source src="img/bunker2.mp4" type="video/mp4">
			</video>
		</div>
	</div>

	<!-- Content -->
	<div class="content">
		<span id="crossfit"></span>
		<section class="middle middle-margin crossfit">
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
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum fuga repellat blanditiis alias voluptatem ullam in optio nam, quas dolores rerum magni.!</p>
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
										<a class="video" rel="group" href="https://www.youtube.com/watch?v=<?php echo $video["id"];?>?fs=1&amp;autoplay=1" title="<?php echo $video["titulo"];?>" >
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
					<p>Lorem ipsum nemo illum debitis harum similique vero inventore enim consequatur, deserunt aspernatur modi exercitationem numquam. Sint!</p>
					<div class="text-center">
						<a href="https://www.facebook.com/bunkercf/" target="_blank" class="btn btn-lg btn-default btn-facebook"><i class="fa fa-facebook" aria-hidden="true"></i> <span class="hidden-xs">Facebook</span></a>
						<a href="https://instagram.com/bunker_cf/" target="_blank" class="btn btn-lg btn-default btn-instagram"><i class="fa fa-instagram" aria-hidden="true"></i> <span class="hidden-xs">Instagram</span></a>
						<a href="https://www.youtube.com/channel/UC57oZgESdKYSpcI9igiV_4Q" target="_blank" class="btn btn-lg btn-default btn-youtube"><i class="fa fa-youtube" aria-hidden="true"></i> <span class="hidden-xs">YouTube</span></a>
					</div>
				</div>
			</div>
		</div>

		<span id="fotos"></span>
		<section class="middle middle-margin blocos">
			<div class="container">
				<div class="title">
					<h2>@bunker_cf</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ratione est, optio nobis dolores quidem repellat modi saepe.</p></h2>
				</div>
				<div class="clearfix row">
					<?php
						if ( !empty( $imagens ) ) {
							foreach ( $imagens as $imagem ) {
								?>
								<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 bloco">
									<a class="fancybox" rel="group" href="<?php echo $imagem["standard_resolution"];?>" title="<?php echo $imagem["caption"];?>" >
										<img src="<?php echo $imagem["standard_resolution"];?>" alt="<?php echo $imagem["caption"];?>" title="<?php echo $imagem["caption"];?>" class="img-responsive" />
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
					<p>A Bunker está localizada na R. José da Silva Lucena, 515 - Boa Viagem - Recife/PE. <br> <i class="fa fa-phone" aria-hidden="true"></i> 81 3339-3333</p>
					<div class="text-center">
						<a href="#" class="btn btn-lg btn-default"><i class="glyphicon glyphicon-map-marker"></i> Acessar Mapa</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<footer class="footer">
		<div class="container">
			© Bunker Equilíbrio Crossfit.
		</div>
	</footer> 
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/smooth-scroll/10.2.1/js/smooth-scroll.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.8/validator.min.js"></script>
	<!--<script src="//code.jquery.com/jquery-3.1.0.slim.min.js"></script>-->
	<script src="http://www.jqueryscript.net/demo/Responsive-Background-Video-Plugin-With-Parallax-Effect-backgroundVideo/backgroundVideo.js"></script>
	<script type="text/javascript" src="<?php echo URL_SCRIPT_LEADMAIS;?>"></script>
	<script>

	var leadmais_redirect_url 	= "<?php echo URL_SITE;?>/obrigado.php";
	var leadmais_text_button 	= "Enviar";

	$( document ).ready(function(){
			
		$('#leadmais-form').validator().on('submit', function (e) {
			
			$('#leadmais-submit').html('Enviando...');
			$('#leadmais-submit').attr('disabled', 'disabled');
			
			APP_LEADMAIS.add_leadmais();
			
			return false;
		});
	});

	$(document).ready(function($) {
		function scrollTop() {
			return document.body.scrollTop || document.documentElement.scrollTop;
		}

		window.onscroll = function(){
			var y_fixo = $(".content").offset().top;

			if(y_fixo - scrollTop() <= 100){
				$(".agende").addClass("agende-show");
			}else{
				$(".agende").removeClass("agende-show");
			}
		}

		// var middle_content_width = $('.content').width();
	
		// if ( middle_content_width > 767 ) {

		// 	window.onscroll = function(){
		// 		var y_fixo = $(".content").offset().top;

		// 		if(y_fixo - scrollTop() <= -600){
		// 			$(".agende").addClass("agende-show");
		// 		}else{
		// 			$(".agende").removeClass("agende-show");
		// 		}
		// 	}
		// }
	});

	$(document).ready(function() {

		$(".video").click(function() {

			$.fancybox({
				'padding'		: 0,
				'autoScale'		: false,
				'transitionIn'	: 'none',
				'transitionOut'	: 'none',
				'title'			: this.title,
				'href'			: this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
				'type'			: 'swf',
				'swf'			: {
				'wmode'				: 'transparent',
				'allowfullscreen'	: 'true'
				}
			});

			return false;
		});

		$(".fancybox").fancybox();
		
	});

	</script>
	<script>

	/* detect touch */
	if("ontouchstart" in window){
	    document.documentElement.className = document.documentElement.className + " touch";
	}
	if(!$("html").hasClass("touch")){
	    /* background fix */
	    $(".parallax").css("background-attachment", "fixed");
	}

	/* fix vertical when not overflow
	call fullscreenFix() if .fullscreen content changes */
	function fullscreenFix(){
	    var h = $('body').height();
	    // set .fullscreen height
	    $(".content-b").each(function(i){
	        if($(this).innerHeight() > h){ $(this).closest(".fullscreen").addClass("overflow");
	        }
	    });
	}
	$(window).resize(fullscreenFix);
	fullscreenFix();

	/* resize background images */
	function backgroundResize(){
	    var windowH = $(window).height();
	    $(".background").each(function(i){
	        var path = $(this);
	        // variables
	        var contW = path.width();
	        var contH = path.height();
	        var imgW = path.attr("data-img-width");
	        var imgH = path.attr("data-img-height");
	        var ratio = imgW / imgH;
	        // overflowing difference
	        var diff = parseFloat(path.attr("data-diff"));
	        diff = diff ? diff : 0;
	        // remaining height to have fullscreen image only on parallax
	        var remainingH = 0;
	        if(path.hasClass("parallax") && !$("html").hasClass("touch")){
	            var maxH = contH > windowH ? contH : windowH;
	            remainingH = windowH - contH;
	        }
	        // set img values depending on cont
	        imgH = contH + remainingH + diff;
	        imgW = imgH * ratio;
	        // fix when too large
	        if(contW > imgW){
	            imgW = contW;
	            imgH = imgW / ratio;
	        }
	        //
	        path.data("resized-imgW", imgW);
	        path.data("resized-imgH", imgH);
	        path.css("background-size", imgW + "px " + imgH + "px");
	    });
	}
	$(window).resize(backgroundResize);
	$(window).focus(backgroundResize);
	backgroundResize();

	/* set parallax background-position */
	function parallaxPosition(e){
	    var heightWindow = $(window).height();
	    var topWindow = $(window).scrollTop();
	    var bottomWindow = topWindow + heightWindow;
	    var currentWindow = (topWindow + bottomWindow) / 2;
	    $(".parallax").each(function(i){
	        var path = $(this);
	        var height = path.height();
	        var top = path.offset().top;
	        var bottom = top + height;
	        // only when in range
	        if(bottomWindow > top && topWindow < bottom){
	            var imgW = path.data("resized-imgW");
	            var imgH = path.data("resized-imgH");
	            // min when image touch top of window
	            var min = 0;
	            // max when image touch bottom of window
	            var max = - imgH + heightWindow;
	            // overflow changes parallax
	            var overflowH = height < heightWindow ? imgH - height : imgH - heightWindow; // fix height on overflow
	            top = top - overflowH;
	            bottom = bottom + overflowH;
	            // value with linear interpolation
	            var value = min + (max - min) * (currentWindow - top) / (bottom - top);
	            // set background-position
	            var orizontalPosition = path.attr("data-oriz-pos");
	            orizontalPosition = orizontalPosition ? orizontalPosition : "50%";
	            $(this).css("background-position", orizontalPosition + " " + value + "px");
	        }
	    });
	}
	if(!$("html").hasClass("touch")){
	    $(window).resize(parallaxPosition);
	    //$(window).focus(parallaxPosition);
	    $(window).scroll(parallaxPosition);
	    parallaxPosition();
	}
	
	var middle_content_width = $('.middle').width();
	if ( middle_content_width > 767 ) {
		$('#my-video').backgroundVideo({
			minimumVideoWidth: 768,
		});
	};

	smoothScroll.init();
	</script>
</body>
</html>