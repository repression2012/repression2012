<?php

require_once("rapportComplet.php");

$thisPage = 'bilanarrestationsmasse';
require_once("nav.php");

$title = "Bilan des arrestations de masse";

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
	$bilanArrestationsMasse,
	$nav
);

$description = "Bilan des arrestations de masse faites durant le mouvement de grève étudiante au Québec du 16 février au 3 septembre 2012.";

$keywords = array(
	"arrestations de masse",
	"bilan"
);

$pathInfo = pathinfo(__FILE__);
$og_url = "http://repression2012.zxq.net/" . $pathInfo['basename'];

$og_image = "http://repression2012.zxq.net/images/fromPDF/mur.jpeg";

include("template.php");

?>
