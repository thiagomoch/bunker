<!-- Footer -->
	<!-- <footer class="footer">
		<div class="container">
			© Bunker Equilíbrio Crossfit.
		</div>
	</footer>
	 -->
	<script src="//code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

	<script src="//cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.0/smooth-scroll.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
	
	<script src="//cdnjs.cloudflare.com/ajax/libs/parsley.js/2.7.0/parsley.min.js"></script>
	<script src="//cdn.jsdelivr.net/parsleyjs/2.7.1/i18n/pt-br.js"></script>

	<!-- WhatsHelp.io widget -->
	<script type="text/javascript">
		(function () {
			var options = {
				whatsapp: "+558192936344", // WhatsApp number
				call_to_action: "Posso ajudar?!", // Call to action
				position: "right", // Position may be 'right' or 'left'
			};
			var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
			var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
			s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
			var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
		})();
	</script>
	<!-- /WhatsHelp.io widget -->

	<script>

	$(document).ready(function($) {

		$('#leadmais-form').submit(function(e){
			e.preventDefault();
			$.ajax({
				url:'https://hooks.zapier.com/hooks/catch/921122/oydymmt/',
				type:'post',
				data:$('#leadmais-form').serialize(),
				success:function(){
					// Redirect to another success page
					window.location = "obrigado.php";
				}
			});
		});

		$(".telefone").mask("(00) 0000-00009");

		$('.telefone').blur(function(event) {
			if($(this).val().length == 15){ 
				$('.telefone').mask('(00) 00000-0009');
			} else {
				$('.telefone').mask('(00) 0000-00009');
			}
		});

		// function scrollTop() {
		// 	return document.body.scrollTop || document.documentElement.scrollTop;
		// }

		// window.onscroll = function(){
		// 	var y_fixo = $(".content").offset().top;

		// 	if(y_fixo - scrollTop() <= 100){
		// 		$(".agende").addClass("agende-show");
		// 	}else{
		// 		$(".agende").removeClass("agende-show");
		// 	}
		// }
	});

	</script>
	<script>

	var scroll = new SmoothScroll('a[href*="#"]');


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
	
	// var middle_content_width = $('.middle').width();
	// if ( middle_content_width > 767 ) {
	// 	$('#my-video').backgroundVideo({
	// 		minimumVideoWidth: 768,
	// 	});
	// };


	</script>