<?php
include 'config.php';
include 'libs/File.php';

$file = new File(FILE_DATA);
$arr = $file->arr();
$file->setArr($arr);
//print_r($arr);
$str = $file->getString(4);
$file->show($str);
$sym = $file->getSymbol(4,2);
$file->show($sym);


include  'templates/index.php';
?>