<?php

$toc = array(

);

function implodeIfArray ($contents, $glue = "") {
	return (is_array($contents)) ? implode($glue, $contents) : $contents;
}

function preRelease ($title, $preReleaseMessage) {
	return array(
		section($toc,
			array(
				title($title),
				paragraph($preReleaseMessage, 'centered')
			)
		)
	);
}

function section ($contents) {
	return "<div class='section'>" . implodeIfArray($contents) . "</div>";
}

function classAttribute ($classes) {
	return ($classes !== null) ? " class='" . implodeIfArray($classes, ", ") . "'" : "";
}

function paragraph ($contents, $classes = null) {
	$classesString = classAttribute($classes);
	return "<p" . $classesString .">" . implodeIfArray($contents) . "</p>";
}

function title ($contents) {
	return "<h1>" . implodeIfArray($contents) . "</h1>";
}

function image ($src, $alt, $classes = null, $copyright = null) {
	$classesString = classAttribute($classes);
	return "<img src='" . $src . "' alt=\"" . $alt . "\" title=\"" . $copyright . "\"" . $classesString . "/>";
}

function strong ($contents) {
	return "<strong>" . implodeIfArray($contents) . "</strong>";
}

function br () {
	return "<br />";
}

function em ($contents) {
	return "<em>" . implodeIfArray($contents) . "</em>";
}

function addToTOC (&$toc, $contents, $class) {
	$toc[] = array(
		'contents' => implodeIfArray($contents),
		'class' => $class
	);
}

function sectionTitle (&$toc, $contents) {
	addToTOC($toc, $contents, 'sectionAnchor');
	return "<h2 id='" . (count($toc) - 1) . "'>" . implodeIfArray($contents) . "</h2>";
}

function subSectionTitle (&$toc, $contents) {
	addToTOC($toc, $contents, 'subSectionAnchor');
	return "<h3 id='" . (count($toc) - 1) . "'>" . implodeIfArray($contents) . "</h3>";
}

function chapterTitle (&$toc, $contents) {
	addToTOC($toc, $contents, 'chapterAnchor');
	return "<h4 id='" . (count($toc) - 1) . "'>" . implodeIfArray($contents) . "</h4>";
}

function blockquote ($contents) {
	return "<blockquote>" . implodeIfArray($contents) . "</blockquote>";
}

function cite ($contents) {
	return "<cite>" . implodeIfArray($contents) . "</cite>";
}

function linkAnchor ($href, $label, $classes = null) {
	$classesString = classAttribute($classes);
	
	return "<a href='" . $href . "'" . $classesString . ">" . implodeIfArray($label) . "</a>";
}

function bulletList ($items) {
	return "<ul>" . implodeIfArray($items) . "</ul>";
}

function logoList ($items) {
	return "<ul class='logoList'>" . implodeIfArray($items) . "<li class='clearfix'>&nbsp;</li></ul>";
}

function numberList ($items) {
	return "<ol>" . implodeIfArray($items) . "</ol>";
}

function listItem ($contents) {
	return "<li>" . implodeIfArray($contents) . "</li>";
}

function acronym ($shortForm, $longForm) {
	return "<acronym title='" . implodeIfArray($longForm) . "'>" . implodeIfArray($shortForm) . "</acronym>";
}

function aside ($contents) {
	return "<div class='aside'>" . implodeIfArray($contents) . "</div>";
}

function renvoi (&$notes, $contents) {
	$notes['notes'][] = $contents;
	$nb = count($notes['notes']);
	$link = linkAnchor("#note" . $nb, $nb, 'renvoi');
	return $link;
}

function sup ($contents) {
	return "<sup>" . implodeIfArray($contents) . "</sup>";
}

function note($i, $contents) {
	return "<li id='note" . ($i + 1) . "'>" . ($i + 1) . ". " . implodeIfArray($contents) . "</li>";
}

function notes (&$notes) {
	$currentNotes = array_slice($notes['notes'], $notes['offset'], null, true);
	$returnValue = "";
	if (!empty($currentNotes)) {
		$returnValue = "<ul class='notes'>";
		foreach ($currentNotes as $i => $contents) {
			$returnValue .= note($i, $contents);
		}
		$returnValue .= "</ul>";
		$notes['offset'] = count($notes['notes']);
	}
	
	return $returnValue;
}

function table ($contents) {
	return "<table>" . implodeIfArray($contents) . "</table>";
}

function row ($contents, $tagName) {
	return "<tr><" . $tagName . ">" . implodeIfArray($contents, "</" . $tagName . "><" . $tagName . ">") . "</" . $tagName . "></tr>";
}

function tableHeaderRow ($contents) {
	return row($contents, "th");
}

function tableRow ($contents) {
	return row($contents, "td");
}

function span ($contents) {
	return "<span>" . implodeIfArray($contents) . "</span>";
}

function toc ($toc) {
	$tocString = "<h2>Table des Matières</h2><ul class='toc'>";
	foreach ($toc as $i => $item) {
		$tocString .= "<li class='" . $item['class'] . "'><a href='#" . $i . "'>" . implodeIfArray($item['contents']) . "</a></li>";
	}
	$tocString .= "</ul>";
	return array(section($tocString));
}

function shareLinks ($items) {
	return array("<ul class='shareLinks'>" . implodeIfArray($items) . "</ul>");
}

?>
