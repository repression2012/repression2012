<?php

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

redirect("http://www.repression2012.zxq.net", 301);

?>
