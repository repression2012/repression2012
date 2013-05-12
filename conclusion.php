<?php

require_once("rapportComplet.php");

$thisPage = 'conclusion';
require_once("nav.php");

$title = "Conclusion";

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
	$conclusion,
	$nav
);

$description = "";

$keywords = array(
	"liberté d'expression",
	"droits",
	"profilage politique",
	"répression"
);

$pathInfo = pathinfo(__FILE__);
$og_url = "http://repression2012.zxq.net/" . $pathInfo['basename'];

$og_image = "http://repression2012.zxq.net/images/fromPDF/conclusion.jpeg";

include("template.php");

?>
