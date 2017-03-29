<?php


// error_reporting(E_STRICT);
// error_reporting(E_ALL);
// ini_set("display_errors", 1);

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

	$arrPlaylistHome = $youtube->playlistItems->listPlaylistItems('contentDetails,snippet', array('playlistId' =>  'PL5oNPFwWHlkNi5n7X19pLH49MefrwEsM9', 'maxResults' => 20));

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

// $access_token = "2144660815.13ec8ee.5041a4b166e4409e94a5a286ac4a3d08";
$access_token = "2144660815.13ec8ee.38ae14ea7a624a5897e675da1565e939";

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

?>