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
			null,
			false
		)
	),
	$nav,
	$injonctions
);

$description = "";

$keywords = array(
	
);

$pathInfo = pathinfo(__FILE__);
$og_url = "http://repression2012.zxq.net/" . $pathInfo['basename'];

//$og_image = "";

include("template.php");

?>
