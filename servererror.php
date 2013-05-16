<?php

require_once("rapportComplet.php");

$thisPage = 'index';
require_once("nav.php");

$title = "500 - Erreur interne du serveur"

$description = "";

$keywords = array();

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
	array(
		section(
			$toc,
			array(
				sectionTitle($toc, "Erreur interne du serveur"),
				paragraph(
					array(
						"Le serveur a rencontré un problème. ",
						linkAnchor("index.php", "Retourner à la table des matières")
					)
				)
			),
			null,
			false
		)
	)
);

$pathInfo = pathinfo(__FILE__);
$og_url = "http://repression2012.zxq.net/" . $pathInfo['basename'];

//$og_image = "";

include("template.php");

?>
