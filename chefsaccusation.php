<?php

require_once("rapportComplet.php");

$thisPage = 'chefsaccusation';
require_once("nav.php");

$title = "Les chefs d’accusation";

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
	$chefsAccusation
);

$description = "";

$keywords = array(
	
);

$pathInfo = pathinfo(__FILE__);
$og_url = "http://repression2012.zxq.net/" . $pathInfo['basename'];

//$og_image = "";

include("template.php");

?>
