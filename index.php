<?php
$input_text_ar = $_POST['selectedColumns']; //или $_POST['input_text'] если передается через $_POST
//$input_text = 'fee4'; //или $_POST['input_text'] если передается через $_POST
//                $fp = fopen('"../ajaxfile2.txt', 'a'); //a - для добавления в конец или w для перезаписи

//$array = array('foo', 'bar', 'hallo', 'world');

$input_text = json_encode($input_text_ar, JSON_UNESCAPED_UNICODE);
//file_put_contents(__DIR__ . '/array.json', $json);

$fp = fopen ($_SERVER['DOCUMENT_ROOT'] . '/ajaxfile2.txt', 'a');

fwrite($fp, $input_text);
fclose($fp);
