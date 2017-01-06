
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Background Parallax Video Demo</title>
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1" />
  <link href="http://www.jqueryscript.net/demo/Responsive-Background-Video-Plugin-With-Parallax-Effect-backgroundVideo/css/normalize.css" rel="stylesheet" />
  <link href="http://www.jqueryscript.net/demo/Responsive-Background-Video-Plugin-With-Parallax-Effect-backgroundVideo/css/styles.css" rel="stylesheet" />
</head>
<body>
  <main>
    <div id="video-wrap" class="video-wrap">
    <div class="content-overlay">
    <h1>Background Parallax Video Demo</h1>
    </div>
      <video preload="metadata" autoplay loop id="my-video">
        <source src="img/sample.mp4" type="video/mp4">
        <source src="img/sample.webm" type="video/webm">
      </video>
    </div>
    <h2 style="margin:30px auto; text-align:center;">Scroll down the webpage...</h2>
    <div class="jquery-script-ads" align="center"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
  </main>
  <script src="http://code.jquery.com/jquery-3.1.0.slim.min.js"></script>
  <script src="http://www.jqueryscript.net/demo/Responsive-Background-Video-Plugin-With-Parallax-Effect-backgroundVideo/backgroundVideo.js"></script>
  <script>
    $(document).ready(function() {
      $('#my-video').backgroundVideo();
    });
  </script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
