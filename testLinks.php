<?php
		
function testLink ($href) {
	$linkWorks = false;
	if ($href[0] === "#") {
		$linkWorks = true;
	} else {
			$handle = curl_init($href);
			curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($handle,  CURLOPT_FOLLOWLOCATION, TRUE);

			/* Get the HTML or whatever is linked in $url. */
			$response = curl_exec($handle);

			/* Check for 404 (file not found). */
			$httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
			if($httpCode !== 200) {
					echo "(" . $httpCode . ") " . $href;
			} else {
				$linkWorks = true;
			}

			curl_close($handle);
	}
	return $linkWorks;
}

?>
