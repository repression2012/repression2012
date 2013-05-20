<?php

require_once("rapportComplet.php");

$thisPage = 'recommendations';
require_once("nav.php");

$title = "Recommandations";

$content = array_merge(
	array(
		section(
			$toc,
			$header,
			'header',
			false
		)
	),
	$nav,
	$recommandations,
	$nav
);

$description = "Recommendations faites par la ligue des droits et libertés, l'association des juristes progressistes et l'association pour une solidarité syndicale étudiante suite à l'analyse démontrée dans le présent rapport sur la répression et la discrimination vécue au printemps 2012 au Québec.";

$keywords = array(
	"droits",
	"recommandations"
);

$pathInfo = pathinfo(__FILE__);
$og_url = "http://repression2012.zxq.net/" . $pathInfo['basename'];

//$og_image = "";

include("template.php");

?>
