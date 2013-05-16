<?php

require_once("rapportComplet.php");

$thisPage = 'notfound';
require_once("nav.php");

$title = "404 - Page introuvable";

$description = "";

$keywords = array();

$titleSection = array(
	section(
		$toc,
		array_merge($header),
		header,
		false
	)
);

$content = array_merge(
	$titleSection,
	$nav,
	array(
		section(
			$toc,
			array(
				sectionTitle($toc, "Page Introuvable"),
				paragraph("L'URL demandé ne correspond à aucun fichier.")
			),
			'error',
			false
		)
	)
);

$noSharing = true;

include("template.php");

?>
