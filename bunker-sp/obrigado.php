<?php 
define("URL_SITE", 			"http://" . $_SERVER['HTTP_HOST'] . str_replace("index.php", "", $_SERVER['PHP_SELF']));

// include('inc/head.php'); 
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

	<div class="fullscreen background parallax" style="background-image:url('img/bg-main2.jpg');" data-img-width="1600" data-img-height="1064">
		<div id="video-wrap" class="video-wrap">
			<div class="content-overlay">
				<div class="d-flex justify-content-center pt-3 mb-5">
					<h1 class="header-logo">
						<a href="http://www.bunkercf.com.br">
							<img src="img/marca.png" height="30" alt="Bunker Crossfit">
							<span class="sr-only">Bunker Crossfit</span>
						</a>
					</h1>
				</div>
				<section class="container highlight text-center">
					<h2>Agora vai!</h2>
					<p>Em breve entraremos em contato para marcar o melhorar horário da sua aula experimental.</p>

					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Iq_BmYcCQtw?rel=0&amp;showinfo=0&amp;autoplay=1&amp;controls=0"></iframe>
					</div>
				</section>
				<!-- <div class="container">
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
						<h2>Agora vai!</h2>
						<p>Estamos muito felizes que você deu o primeiro passo para a mudança, em breve entraremos em contato para marcar o melhorar horário da sua aula experimental.</p>
						<div class="container">
							<div class="row">
								<div class="col-lg-6 col-lg-offset-3">
									<div class="embed-responsive embed-responsive-16by9">
									  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Iq_BmYcCQtw?rel=0&amp;showinfo=0&amp;autoplay=1&amp;controls=0"></iframe>
									</div>
								</div>
								
							</div>
						</div>
					</section>
		    	</div> -->
			</div>
		</div>
	</div>

	<?php include('inc/footer.php'); ?>
</body>
</html>