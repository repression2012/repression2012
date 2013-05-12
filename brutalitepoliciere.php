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
	$brutalitePoliciere,
	$nav
);

$description = "";

$keywords = array(
	"policiers",
	"armes",
	"gaz",
	"blessures",
	"balles de plastique",
	"manifestation",
	"victoriaville",
	"force",
	"coups",
	"violence",
	"irritants"
);

$pathInfo = pathinfo(__FILE__);
$og_url = "http://repression2012.zxq.net/" . $pathInfo['basename'];

$og_image = "http://repression2012.zxq.net/images/fromPDF/brutalitePoliciere.jpeg";

include("template.php");

?>
