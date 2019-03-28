<?php
include_once "E:/PHP/OSPanel/domains/GFL/php_task1/task3/index.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task3</title>
</head>
<body>
<? echo "string = ".$str."<br>Symbol = ".$sym."<br>";
foreach($all_str as $str){
    echo $str."<br>";
}
foreach($all_sym as $str){
    echo $str." ";
}
foreach($file_repl as $str){
    echo $str."<br>";
}
foreach($file_repl_sym as $str){
    echo $str." ";
}
//print_r($file_repl);
?>
</body>
</html>