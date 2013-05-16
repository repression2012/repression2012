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

$backButton = "";
$upButton = "";
$nextButton = "";

switch ($thisPage) {
	case 'index':
		$upButton = navButton("repression2012.php", "Rapport&nbsp;Complet", null);
		break;
	case 'repression2012':
		$backButton = navButton("index.php", "←");
		$upButton = " | " . navButton('repression2012.pdf', "Version PDF") . " | ";
		$nextButton = navButton('#0', "Sauter la table des matières ↓");
		break;
	case 'notfound':
	case 'servererror':
		$upButton = navButton("index.php", "Table&nbsp;des&nbsp;matières");
		break;
	default:
		$backButton = navButton($previousURL, "←");
		$upButton = navButton("index.php", "Table&nbsp;des&nbsp;matières");
		$nextButton = navButton($nextURL, "→");
		break;
}

$nav = array(
	section(
		$toc,
		array(
			$backButton,
			" ",
			$upButton,
			" ",
			$nextButton
		),
		array(
			'nav',
			'nav_rapportComplet'
		),
		false
	)
);

?>
