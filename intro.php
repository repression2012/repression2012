<?php

require_once("rapportComplet.php");

$thisPage = 'intro';
require_once("nav.php");

$title = "Introduction";

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
	$introSection,
	$nav
);

$description = "Introduction du rapport sur la répression et la discrimination vécue au printemps 2012 au Québec: Mise en contexte, objectifs du projet, méthodologie, structure du texte.";

$keywords = array(
	"témoignages",
	"droits",
	"rapport",
	"arrestations",
	"répression",
	"grève",
	"manifestations"	
);

$pathInfo = pathinfo(__FILE__);
$og_url = "http://repression2012.zxq.net/" . $pathInfo['basename'];

//$og_image = "";

include("template.php");

?>
