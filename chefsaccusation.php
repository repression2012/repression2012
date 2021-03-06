<?php

require_once("rapportComplet.php");

$thisPage = 'chefsaccusation';
require_once("nav.php");

$title = "Les chefs d’accusation";

$content = array_merge(
	array(
		section(
			$toc,
			$header,
			'header',
			false
		)
	),
	$nav,
	$chefsAccusation,
	$nav
);

$description = "Sommaire des différents chefs d'accusation utilisés pour arrêter des gens au printemps 2012 au Québec. Exemples d'accusations, conditions de libérations, etc.";

$keywords = array(
	"conditions de libération",
	"manifestation",
	"québec",
	"règlement",
	"code criminel",
	"code de la sécurité routière",
	"accusé",
	"droits",
	"infraction",
	"règlements",
	"manifestant",
	"montréal",
	"accusations",
	"témoignages",
	"liberté"
);

$pathInfo = pathinfo(__FILE__);
$og_url = "http://repression2012.zxq.net/" . $pathInfo['basename'];

$og_image = "http://repression2012.zxq.net/images/fromPDF/chefsAccusation.jpeg";

include("template.php");

?>
