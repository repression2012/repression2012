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

$nav = array(
	section(
		$toc,
		array(
			navButton($previousURL, "<", "Section précédente"),
			navButton("index.php", "Table des matières", "Retourner à la table des matières"),
			navButton($nextURL, ">", "Section suivante")
		),
		'nav',
		false
	)
);

?>
