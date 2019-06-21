<!-- Footer -->
	<!-- <footer class="footer">
		<div class="container">
			© Bunker Equilíbrio Crossfit.
		</div>
	</footer> -->

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8&appId=147053698705729";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/smooth-scroll/10.2.1/js/smooth-scroll.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.8/validator.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.9/jquery.mask.min.js"></script>
	<!--<script src="//code.jquery.com/jquery-3.1.0.slim.min.js"></script>-->
	<script src="https://apis.google.com/js/platform.js"></script>
	<script src="http://www.jqueryscript.net/demo/Responsive-Background-Video-Plugin-With-Parallax-Effect-backgroundVideo/backgroundVideo.js"></script>
	

	<script src="//cdnjs.cloudflare.com/ajax/libs/parsley.js/2.7.0/parsley.min.js"></script>
	<script src="//cdn.jsdelivr.net/parsleyjs/2.7.1/i18n/pt-br.js"></script>
	<script type="text/javascript" src="<?php echo URL_SCRIPT_LEADMAIS;?>"></script>
	<script>

	var leadmais_redirect_url 	= "obrigado.php";
	var leadmais_validate 		= false;

	$(document).ready(function(){

			$("#leadmais-form").on('submit', function(e) {

    		var form = $(this);

    		if (form.parsley().isValid()) {
      	
      			APP_LEADMAIS.add_leadmais();
			}
			return false;
  		});
	});

	</script>
	
	<script src="//leadmais.com.br/js/leadmais-script.v2.js"></script>

	<script>

	$(document).ready(function($) {

		// $(".telefone").mask("(00) 0000-00009");

		// $('.telefone').blur(function(event) {
		// 	if($(this).val().length == 15){ 
		// 		$('.telefone').mask('(00) 00000-0009');
		// 	} else {
		// 		$('.telefone').mask('(00) 0000-00009');
		// 	}
		// });

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
	});

	$(document).ready(function() {

		$(".video").click(function() {

			$.fancybox({
				beforeShow: function(){
				  $(".fancybox-skin").css("backgroundColor","transparent");
				 },
				 helpers: {
				   overlay: {
				     locked: false
				   }
				 },
				'padding'		: 0,
				'autoScale'		: false,
				'transitionIn'	: 'none',
				'transitionOut'	: 'none',
				'background'	: 'none',
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

		$(".fancybox").fancybox({
			helpers: {
				overlay: {
				  locked: false
				}
			}
		});
		
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