<?php

require_once("rapportComplet.php");

$thisPage = 'servererror';
require_once("nav.php");

$title = "500 - Erreur interne du serveur";

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
				paragraph("Le serveur a rencontré une erreur.")
			),
			'error',
			false
		)
	)
);

$noSharing = true;

include("template.php");

?>
