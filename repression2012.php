<?php

require_once("rapportComplet.php");

$thisPage = 'repression2012';
require_once("nav.php");

$title = "Répression, Discrimination et Grève Étudiante: Analyse et témoignages";

$titleSection = array(
	section(
		$toc,
		array_merge($header),
		'header',
		false
	)
);

$content = array_merge(
	$titleSection,
	$nav,
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
$og_url = "http://repression2012.zxq.net/" . $pathInfo['basename'];

//$og_image = "";

include("template.php");

?>
