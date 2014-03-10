<?php
require_once(realpath(__DIR__ . DIRECTORY_SEPARATOR . '..'). DIRECTORY_SEPARATOR.'PhotoFactoryInit.php');

$photoFactory=PhotoFactory::getInstance();

$a = $photoFactory->doFactory( 
	//"http://s0.cyberciti.org/images/category/old/php-logo.png"
	realpath(__DIR__ . DIRECTORY_SEPARATOR . '..')."/PFImages/innovativologo1.png"
	//"http://www.cocout.com/img/index/innovativologo1.png"
);

$b = $photoFactory->doFactory( $a->getGDResource());

//$a->resize(300,400,PFResizeNoRatio);

$a->resize(300,400,PFResizeIn);

imagepng($a->getGDResource(),$a->getTF());

?>
