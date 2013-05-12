<?php

require_once("rapportComplet.php");

$thisPage = 'bilanarrestationsmasse';
require_once("nav.php");

$title = "Bilan des arrestations de masse";

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
	$bilanArrestationsMasse,
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
