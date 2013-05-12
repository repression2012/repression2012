<?php

require_once("rapportComplet.php");

$thisPage = 'index';
require_once("nav.php");

$title = "404 - Page introuvable"

$description = "";

$keywords = array();

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
	array(
		section(
			$toc,
			array(
				sectionTitle($toc, "Page Introuvable"),
				paragraph(
					array(
						"L'URL demandé ne correspond à aucun fichier. ",
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
