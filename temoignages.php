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
			null,
			false
		)
	),
	$nav,
	$temoignages
);

$description = "";

$keywords = array(
	
);

$pathInfo = pathinfo(__FILE__);
$og_url = "http://repression2012.zxq.net/" . $pathInfo['basename'];

//$og_image = "";

include("template.php");

?>
