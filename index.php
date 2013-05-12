<?php

require_once("rapportComplet.php");

$thisPage = 'index';
require_once("nav.php");

$title = "Table des matières";

$titleSection = array(
	section(
		$toc,
		array_merge($header),
		null,
		false
	)
);

$content = array_merge(
	$titleSection,
	$nav,
	toc($toc, 'standalone'),
	$nav
);

$pathInfo = pathinfo(__FILE__);
$og_url = "http://repression2012.zxq.net/";

//$og_image = "";

include("template.php");

?>
