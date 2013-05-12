<?php

require_once("rapportComplet.php");

$thisPage = 'index';
require_once("nav.php");

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
$og_url = "http://repression2012.zxq.net/sections/" . $pathInfo['basename'];

//$og_image = "";

include("template.php");

?>
