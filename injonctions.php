<?php

require_once("rapportComplet.php");

$thisPage = 'injonctions';
require_once("nav.php");

$title = "Les injonctions et la négation des droits collectifs";

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
	$injonctions,
	$nav
);

$description = "Analyse des injonctions émises au printemps 2012 au Québec: Légitimité remise en question, exemple de rérapage, etc.";

$keywords = array(
	"injonctions",
	"grève",
	"cours",
	"Gabriel Nadeau-Dubois"
);

$pathInfo = pathinfo(__FILE__);
$og_url = "http://repression2012.zxq.net/" . $pathInfo['basename'];

$og_image = "http://repression2012.zxq.net/images/fromPDF/injonctions.jpeg";

include("template.php");

?>
