<?php

require_once("rapportComplet.php");

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
	toc($toc, 'standalone')
);

$pathInfo = pathinfo(__FILE__);
$og_url = "http://repression2012.zxq.net/sections/" . $pathInfo['basename'];

//$og_image = "";

include("template.php");

?>
