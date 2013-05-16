<?php

require_once("rapportComplet.php");

$thisPage = 'interpellations';
require_once("nav.php");

$title = "Les interpellations, les fouilles et les détentions en vertu de l’article 31 du Code criminel";

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
	$interpellations,
	$nav
);

$description = "";

$keywords = array(
	"violation de la paix",
	"code criminel",
	"arrestation",
	"détention",
	"fouilles"
);

$pathInfo = pathinfo(__FILE__);
$og_url = "http://repression2012.zxq.net/" . $pathInfo['basename'];

$og_image = "http://repression2012.zxq.net/images/fromPDF/interpellations.jpeg";

include("template.php");

?>
