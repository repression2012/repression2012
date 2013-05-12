<?php

date_default_timezone_set('America/Montreal');

require_once("elements.php");

/* Meta */

$lang = "fr";

if (!isset($title)) {
	$title = "Répression, Discrimination et Grève Étudiante: Analyse et témoignages";
}

if (!isset($description)) {
	$description = "Le mouvement de grève et de contestation sociale vécu par le Québec en 2012 a donné lieu à la plus grande vague d’arrestations de son histoire. Dans ce rapport, près de 400 témoignages d’étudiant(E)s et citoyen(NE)s ayant fait l'objet d’intimidation, de brutalité policière, d’arrestation, de détention, d’accusations, de représailles et de refus d’accès à des lieux publics ou des services (notamment pour avoir porté le carré rouge) ont été récoltés et analysés.";
}

if (!isset($keywords)) {
	$keywords = array(
		"répression",
		"discrimination",
		"grève étudiante",
		"brutalité policière",
		"printemps érable",
		"Québec",
		"printemps 2012",
		"arrestations",
		"témoignages"
	);
}
$keywords_string = implode(", ", $keywords);

/* Third-party integration */

$googleAnalyticsIntegration = "
		<script>
			// Google Analytics script
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-40631829-1', 'zxq.net');
			ga('send', 'pageview');

		</script>";

if (!isset($og_url)) {
	$og_url = "http://repression2012.zxq.net";
}

if (!isset($og_image)) {
	$og_image = "http://repression2012.zxq.net/images/fromPDF/couverture.jpeg";
}

if (!isset($facebookMetaTags)) {
	$facebookMetaTags = array(
		meta(
			array(
				'property' => "fb:admins",
				'content' => "869845569"
			)
		),
		meta(
			array(
				'property' => "og:title",
				'content' => $title
			)
		),
		meta(
			array(
				'property' => "og:type",
				'content' => "website"
			)
		),
		meta(
			array(
				'property' => "og:url",
				'content' => $og_url
			)
		),
		meta(
			array(
				'property' => "og:site_name",
				'content' => "Répression 2012"
			)
		),
		meta(
			array(
				'property' => "og:description",
				'content' => $description
			)
		),
		meta(
			array(
				'property' => "og:image",
				'content' => $og_image
			)
		)
	);
}

$facebookMetaTags_string = "
		<!-- Facebook and Open Graph meta tags -->
		" . implodeIfArray($facebookMetaTags, "\n\t\t");

$facebookIntegration = "<div id=\"fb-root\"></div>
		<script>
			// Facebook script
			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = \"//connect.facebook.net/en_US/all.js#xfbml=1\";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>";

$twitterIntegration = "<script>
			// Twitter script
			!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
		</script>";

$facebookTools = "<div class=\"fb-like\" data-href=\"" . $og_url . "\" data-send=\"true\" data-layout=\"box_count\" data-width=\"450\" data-show-faces=\"true\"></div>";

$twitterTools = "<a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-text=\"" . $og_url . "\" data-size=\"large\" data-count=\"none\" data-dnt=\"true\">Tweet</a>";

$shareTools = shareTools(
	array(
		listItem($facebookTools),
		listItem($twitterTools)
	)
);


if (!isset($content)) {
	header('Location: repression2012.zxq.net', true, 500);
	die();
}

$content_string = implodeIfArray(array_merge($content, $credits));

$pageElements = array(
	$content_string,
	$googleAnalyticsIntegration,
	$facebookIntegration,
	$twitterIntegration,
	$shareTools
);

$pageElements_string = implodeIfArray($pageElements, "\n\t\t");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $lang; ?>" >
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="web_author" content="Shawn Inder">
		<meta name="description" content="<?php echo $description; ?>" />
		<meta name="keywords" content="<?php echo $keywords_string; ?>" />
		<?php echo $facebookMetaTags_string; ?>

		<title><?php echo $title; ?></title>

		<!--ICON
		<link rel="shortcut icon" href="icons/favicon.ico" />
		<link rel="apple-touch-icon" href="icons/iphone-icon.png" />
		-->
		
		<!--JS
		<link type="text/javascript" href="js/javascript.js" />
		-->

		<style type="text/css">
			@import url(styles.css);
		</style>

		<!--[if IE]>
			<link rel="stylesheet" type="text/css" href="ie.css"/>
		<![endif]-->
		
		

		
	</head>
	<body>
		<?php
			echo $pageElements_string;
		?>
		
	</body>
</html>
