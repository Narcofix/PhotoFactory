<?php
require_once(realpath(__DIR__ . DIRECTORY_SEPARATOR . '..'). DIRECTORY_SEPARATOR.'PhotoFactoryInit.php');
$photoFactory=PhotoFactory::getInstance();

$a = $photoFactory->doFactory( 
	//"http://s0.cyberciti.org/images/category/old/php-logo.png"
	//"/home/narcofix/database univaq/PhotoFactory/PFImages/simpletext.jpg"
	"http://www.cocout.com/img/index/innovativologo1.png"
);
$b = $photoFactory->doFactory( 
	//"http://s0.cyberciti.org/images/category/old/php-logo.png"
	realpath(__DIR__ . DIRECTORY_SEPARATOR . '..')."/PFImages/simpletext.jpg"
	//"http://www.cocout.com/img/index/innovativologo1.png"
);

$a->merge($b,10,10,70);

$a->merge($b,50,50,100);

$c= $a->getMerged($b,50,20,100);

/**
 * piccolo snippet per creare una risorsa con backgroud
 * trasparente con dentro una stringa rossa
 */
/*
$im = @imagecreate(110, 20);
$background_color = imagecolorallocate($im, 0, 0, 0);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagecolortransparent($im,$background_color);
imagestring($im, 1, 5, 5,  "A Simple Text String", $text_color);


$c = $photoFactory->doFactory($im);*/
//$a->merge($c,30,100,80);
imagepng($c->getGDResource(),$c->getTF());
//imagepng($c->getGDResource(),$c->getTF());
/*
$new = $a->getMerged($b,10,10,50); 
imagepng($new->getGDResource(),$new->getTF());
*/


?>