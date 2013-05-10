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
			null,
			false
		)
	),
	$nav,
	$carreRouge
);

$description = "";

$keywords = array(
	
);

$pathInfo = pathinfo(__FILE__);
$og_url = "http://repression2012.zxq.net/" . $pathInfo['basename'];

//$og_image = "";

include("template.php");

?>
