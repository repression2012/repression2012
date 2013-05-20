<?php

require_once("rapportComplet.php");

$thisPage = 'brutalitepoliciere';
require_once("nav.php");

$title = "La brutalité policière";

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
	$brutalitePoliciere,
	$nav
);

$description = "Sommaire et exemples de brutalité policière vécue au printemps 2012 au Québec: Types de violence (physique, verbale, psychologique) et d'armes utilisées, techniques et attitudes des policierEs, mécanismes de plaintes";

$keywords = array(
	"policiers",
	"armes",
	"gaz",
	"blessures",
	"balles de plastique",
	"manifestation",
	"victoriaville",
	"violence",
	"irritants"
);

$pathInfo = pathinfo(__FILE__);
$og_url = "http://repression2012.zxq.net/" . $pathInfo['basename'];

$og_image = "http://repression2012.zxq.net/images/fromPDF/brutalitePoliciere.jpeg";

include("template.php");

?>
