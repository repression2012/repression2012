<?php

require_once("rapportComplet.php");

$thisPage = 'brutalitepoliciere';
require_once("nav.php");

$title = "La brutalité policière";

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
	$brutalitePoliciere
);

$description = "";

$keywords = array(
	
);

$pathInfo = pathinfo(__FILE__);
$og_url = "http://repression2012.zxq.net/" . $pathInfo['basename'];

//$og_image = "";

include("template.php");

?>
