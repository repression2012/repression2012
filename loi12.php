<?php

require_once("rapportComplet.php");

$thisPage = 'loi12';
require_once("nav.php");

$title = "La loi spéciale";

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
	$loi12,
	$nav
);

$description = "Analyse légale de la loi spéciale adoptée au printemps 2012 au Québec: Comparaisons avec d'autres loi similaires, critiques, répercussions, mésinformation en ce qui la concerne, etc.";

$keywords = array(
	"manifestation",
	"association",
	"amendes",
	"itinéraire",
	"loi spéciale"
);

$pathInfo = pathinfo(__FILE__);
$og_url = "http://repression2012.zxq.net/" . $pathInfo['basename'];

//$og_image = "";

include("template.php");

?>
