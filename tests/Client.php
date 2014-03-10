<?php
require_once(realpath(__DIR__ . DIRECTORY_SEPARATOR . '..'). DIRECTORY_SEPARATOR.'PhotoFactoryInit.php');

$photoFactory=PhotoFactory::getInstance();
$a =
$photoFactory->doFactory(
	'iVBORw0KGgoAAAANSUhEUgAAABwAAAASCAMAAAB/2U7WAAAABl'.
	'BMVEUAAAD///+l2Z/dAAAASUlEQVR4XqWQUQoAIAxC2/0vXZDr'. 
	'EX4IJTRkb7lobNUStXsB0jIXIAMSsQnWlsV+wULF4Avk9fLq2r'.
	'8a5HSE35Q3eO2XP1A1wQkZSgETvDtKdQAAAABJRU5ErkJggg=='
);

$b = $photoFactory->doFactory(imagecreatetruecolor(300, 50));

$c = $photoFactory->doFactory($b);

$d = $photoFactory->doFactory( 
	"http://s0.cyberciti.org/images/category/old/php-logo.png" 
);
/*
//genera eccezione 
$e =
$photoFactory->doFactory(
	'iVBORw0KGgoAAAANSUhEUgAAABwAAAASCAMAAAB/2U7WAAAABl'
);
*/
?>