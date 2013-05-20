<?php

require_once("rapportComplet.php");

$thisPage = 'bilanarrestations';
require_once("nav.php");

$title = "Bilan global des arrestations";

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
	$bilanArrestations,
	$nav
);

$description = "Bilan global des arrestations faites durant le mouvement de grève étudiante au Québec du 16 février au 3 septembre 2012: Méthodologie des recensions, listes des résultats.";

$keywords = array(
	"arrestations",
	"bilan",
	"accusation",
	"infraction"
);

$pathInfo = pathinfo(__FILE__);
$og_url = "http://repression2012.zxq.net/" . $pathInfo['basename'];

//$og_image = "";

include("template.php");

?>
