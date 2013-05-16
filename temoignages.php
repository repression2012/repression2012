<?php

require_once("rapportComplet.php");

$thisPage = 'temoignages';
require_once("nav.php");

$title = "Les témoins nous parlent : perceptions et conséquences des interventions policières";

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
	$temoignages,
	$nav
);

$description = "";

$keywords = array(
	"témoignages",
	"arrestation",
	"victime",
	"plainte",
	"brutalité",
	"interventions"
);

$pathInfo = pathinfo(__FILE__);
$og_url = "http://repression2012.zxq.net/" . $pathInfo['basename'];

$og_image = "http://repression2012.zxq.net/images/fromPDF/temoins.jpeg";

include("template.php");

?>
