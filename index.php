<?php

date_default_timezone_set('America/Montreal');

require_once("config.php");
require_once("elements.php");
require_once("rapportComplet.php");

$shareLinks = shareLinks(
	array(
		"<div class=\"fb-like\" data-href=\"http://repression2012.zxq.net/\" data-send=\"true\" data-layout=\"box_count\" data-width=\"450\" data-show-faces=\"true\"></div>",
		"<a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-text=\"repression2012.zxq.net\" data-size=\"large\" data-count=\"none\" data-dnt=\"true\">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>"
	)
);
$contents = array_merge(toc($toc), $leRapport, $shareLinks);

function facebookMeta($title, $description) {
	$String = "<meta property=\"fb:admins\" content= \"869845569\" />
		<meta property=\"og:title\" content=\"" . $title . "\" />
		<meta property=\"og:type\" content=\"website\" />
		<meta property=\"og:url\" content=\"http://repression2012.zxq.net\" />
		<meta property=\"og:site_name\" content=\"Répression 2012\" />
		<meta property=\"og:description\" content=\"" . $description . "\" />
		<meta property=\"og:image\" content=\"http://repression2012.zxq.net/images/fromPDF/couverture.jpeg\" />";

	return $String;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<meta name="web_author" content="Shawn Inder">

		<title><?php echo $title; ?></title>

		<meta name="description" content="<?php echo $description; ?>" />
		<meta name="keywords" content="<?php echo $keywords; ?>" />
		
		<?php echo facebookMeta($title, $description); ?>

		<!--ICON
		<link rel="shortcut icon" href="icons/favicon.ico" />
		<link rel="apple-touch-icon" href="icons/iphone-icon.png" />
		-->
		<!--JS
		<link type="text/javascript" href="js/javascript.js" />
		-->
		<!--CSS-->
		<style type="text/css">
			@import url(styles.css);
		</style>

		<!--[if IE]>
			<link rel="stylesheet" type="text/css" href="css/ie.css"/>
		<![endif]-->
	</head>
	<body>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<?php
			echo implodeIfArray($titleSection);
			echo implodeIfArray($contents);
		?>
	</body>
</html>
