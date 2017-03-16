<?php 
define("URL_SITE", 			"http://" . $_SERVER['HTTP_HOST'] . str_replace("index.php", "", $_SERVER['PHP_SELF']));

//include('inc/head.php'); 
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

	<div class="fullscreen background parallax" style="background-image:url('img/bg-main2.jpg');" data-img-width="1600" data-img-height="1064">
		<div id="video-wrap" class="video-wrap">
			<div class="content-overlay">
				<div class="container">
					<header>
						<div class="container">
							<div class="brand text-center">
								<h1 class="header-logo">
									<a href="http://www.bunkercf.com.br">
										<img src="img/marca.png" height="30" alt="Bunker Crossfit">
										<span class="sr-only">Bunker Crossfit</span>
									</a>
								</h1>
							</div>
						</div>
					</header>
					<section class="highlight highlight-obrigado text-center">
						<h2>Parabéns!</h2>
						<p>Estamos muito felizes que você deu o primeiro passo para a mudança, em breve entraremos em contato para marcar o melhorar horário da sua aula experimental.</p>
						<div class="col-lg-2"></div>
						<div class="col-lg-8">
							<div class="embed-responsive embed-responsive-16by9">
							  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Iq_BmYcCQtw?rel=0&amp;showinfo=0&amp;autoplay=1&amp;controls=0"></iframe>
							</div>
						</div>
						<div class="col-lg-2"></div>
					</section>
		    	</div>
			</div>
		</div>
	</div>

	<?php include('inc/footer.php'); ?>
</body>
</html>