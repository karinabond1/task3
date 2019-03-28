<?php
include 'config.php';
include 'libs/File.php';

$file = new File(FILE_DATA);
$arr = $file->arr();
$file->setArr($arr);

$str = $file->getString(4);
$sym = $file->getSymbol(4,2);
$all_str = $file->showStr();
$all_sym = $file->showSym();

$file_repl = $file->replaceStr(4,"abs");

$file_repl_sym = $file->replaceSym(1,1,"H");


include  'templates/index.php';
?>