<?php

require_once("rapportComplet.php");

$thisPage = 'carrerouge';
require_once("nav.php");

$title = "Le carré rouge : un symbole politique banni";

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
	$carreRouge,
	$nav
);

$description = "Sommaire et exemples de discrimination vécue au printemps 2012 au Québec basée sur le port d'un symbole politique, le carré rouge.";

$keywords = array(
	"carré rouge",
	"sybole politique",
	"discrimination",
	"convictions politique"
);

$pathInfo = pathinfo(__FILE__);
$og_url = "http://repression2012.zxq.net/" . $pathInfo['basename'];

$og_image = "http://repression2012.zxq.net/images/fromPDF/carrerouge.jpeg";

include("template.php");

?>
