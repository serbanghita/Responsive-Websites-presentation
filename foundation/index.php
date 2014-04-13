<?php

$getPage = isset($_GET['getPage']) ? $_GET['getPage'] : null;
if($getPage=='frontpage-slideshow'){
	include_once 'templates/frontpage-slideshow.inc.php';
	exit;
}


require_once 'lib/Mobile_Detect.php';
$detect = new Mobile_Detect;
$isMobile = $detect->isMobile();

include_once 'templates/template.inc.php';