<?php
ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);

//Передаємо дані в масив
$arr = file('upload/protokol.txt');
unset($arr[0]);

$arr_as = array();
foreach ($arr as &$val) {
  $data = explode(" ", $val);
  foreach ($arr_as as $key_as => $val_as){
    $key_as = $data[0];
    $val_as = $data[1];
  }
  unset($val);
}
foreach ($arr as $key => $value) {
  echo "{$key} => {$value} "."\n <br />";
}


?>
