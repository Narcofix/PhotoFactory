<?php
require_once(realpath(__DIR__ . DIRECTORY_SEPARATOR . '..'). DIRECTORY_SEPARATOR.'PhotoFactoryInit.php');

$photoFactory=PhotoFactory::getInstance();

$a = $photoFactory->doFactory( 
	//"http://s0.cyberciti.org/images/category/old/php-logo.png"
	//"/home/narcofix/database univaq/PhotoFactory/PFImages/simpletext.jpg"
	"http://www.cocout.com/img/index/innovativologo1.png"
);

//$b = $a->GetCropped(10,10,10,10);
$c = $a->getCropped(30,30,60,160);
//imagepng($a->getGDResource(),$a->getTF());
imagepng($c->getGDResource(),$c->getTF());
?>