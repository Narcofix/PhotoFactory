<?php
require_once(realpath(__DIR__ . DIRECTORY_SEPARATOR . '..'). DIRECTORY_SEPARATOR.'PhotoFactoryInit.php');

$a = PFResourceHelper::getResType(
		'iVBORw0KGgoAAAANSUhEUgAAABwAAAASCAMAAAB/2U7WAAAABl'.
		'BMVEUAAAD///+l2Z/dAAAASUlEQVR4XqWQUQoAIAxC2/0vXZDr'. 
		'EX4IJTRkb7lobNUStXsB0jIXIAMSsQnWlsV+wULF4Avk9fLq2r'.
		'8a5HSE35Q3eO2XP1A1wQkZSgETvDtKdQAAAABJRU5ErkJggg=='
	);
	
$b = PFResourceHelper::getResType( 
	imagecreatetruecolor(300, 50) 
);

$c = PFResourceHelper::getResType( $b );

$d = PFResourceHelper::getResType(
	"http://s0.cyberciti.org/images/category/old/php-logo.png"
	//"ftp://ftp.orgchm.bas.bg/welcome.msg" 
);

//genera eccezione

$e = PFResourceHelper::getResType(
	'iVBORw0KGgoAAAANSUhEUgAAABwAAAASCAMAAAB/2U7WAAAABl'
);

?>