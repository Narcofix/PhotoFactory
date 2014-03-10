<?php
require_once(realpath(__DIR__ . DIRECTORY_SEPARATOR . '..'). DIRECTORY_SEPARATOR.'PhotoFactoryInit.php');

$photoFactory=PhotoFactory::getInstance();

$a = $photoFactory->doFactory( 
	realpath(__DIR__ . DIRECTORY_SEPARATOR . '..').DIRECTORY_SEPARATOR.
	"site". DIRECTORY_SEPARATOR.
	"img". DIRECTORY_SEPARATOR.
	"innovativologo1.png"
);

$a->crop(
	$_GET["L"],
	$_GET["T"],
	$_GET["W"],
	$_GET["H"]
);

header('Content-Type: image/png');

imagepng($a->getGDResource(),NULL);

$a = NULL;



?>