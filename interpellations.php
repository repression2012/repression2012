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
			null,
			false
		)
	),
	$nav,
	$interpellations,
	$nav
);

$description = "";

$keywords = array(
	
);

$pathInfo = pathinfo(__FILE__);
$og_url = "http://repression2012.zxq.net/" . $pathInfo['basename'];

//$og_image = "";

include("template.php");

?>
