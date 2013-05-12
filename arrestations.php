<?php

require_once("rapportComplet.php");

$thisPage = 'arrestations';
require_once("nav.php");

$title = "Les arrestations";

$content = array_merge(
	array(
		section(
			$toc,
			$header,
			null,
			false
		)
	),
	$nav,
	$arrestations,
	$nav
);

$description = "";

$keywords = array(
	"arrestations",
	"policiers",
	"manifestation",
	"arrêté",
	"police",
	"constat d'infraction",
	"arrestations de masse",
	"détention",
	"témoins",
	"accusé"
);

$pathInfo = pathinfo(__FILE__);
$og_url = "http://repression2012.zxq.net/" . $pathInfo['basename'];

$og_image = "http://repression2012.zxq.net/images/fromPDF/arrestationsMassives.jpeg";

include("template.php");

?>
