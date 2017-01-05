<?php
ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);
$text = $_POST['textDec2'];
$arr = preg_split("/[\s[:punct:]]+/", $text, -1, PREG_SPLIT_NO_EMPTY);
$max = mb_strlen($arr[0], 'UTF-8');
$index = array();
foreach ($arr as $key => $value) {
  $val = mb_strlen($value);
  if ($val >= $max) {
    $max = $val;
    $index[] = $value;
  }
}
// Перевірка і видалення першого елемента масива $index.
if (count($index)>1 && mb_strlen($index[0], 'UTF-8') != mb_strlen($index[1], 'UTF-8')){
  unset($index[0]);
}

foreach ($index as $value) {
  $text_out = str_replace($value, " ", $text);
}
//echo $text."\n<br/>";
echo $text_out;

?>
