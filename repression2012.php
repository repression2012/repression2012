<?php

require_once("rapportComplet.php");

$titleSection = array(
	section(
		$toc,
		array_merge($header, $coverImage),
		null,
		false
	)
);

$content = array_merge(
	$titleSection,
	toc($toc, 'inline'),
	$introSection,
	$brutalitePoliciere,
	$arrestations,
	$chefsAccusation,
	$interpellations,
	$carreRouge,
	$injonctions,
	$temoignages,
	$conclusion,
	$recommandations,
	$bilanArrestations,
	$bilanArrestationsMasse,
	$quatriemeCouverture
);

$pathInfo = pathinfo(__FILE__);
$og_url = "http://repression2012.zxq.net/sections/" . $pathInfo['basename'];

//$og_image = "";

include("template.php");

?>
