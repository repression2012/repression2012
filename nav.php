<?php

$thisPageIndex = array_search($thisPage, $toc['pages']);

$previousPageIndex = $thisPageIndex - 1;
$nextPageIndex = $thisPageIndex + 1;

$previousURL = "index.php";
$nextURL = "index.php";

if ($previousPageIndex >= 0) {
	$previousURL = $toc['pages'][$previousPageIndex] . ".php";
}

if ($nextPageIndex < count($toc['pages'])) {
	$nextURL = $toc['pages'][$nextPageIndex] . ".php";
}

$backButton = ($thisPage === 'index') ? "" : navButton($previousURL, "←");
$upButton = ($thisPage === 'index') ? navButton("repression2012.php", "Rapport&nbsp;Complet") : navButton("index.php", "Table&nbsp;des&nbsp;matières", "nav_toc");
$nextButton = ($thisPage === 'index') ? "" : navButton($nextURL, "→");

$nav = array(
	section(
		$toc,
		array(
			$backButton,
			$upButton,
			$nextButton
		),
		'nav',
		false
	)
);

?>
