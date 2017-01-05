<?php
$text = $_POST['textDec2'];
//заносимо рядок в масив
$arr = preg_split("/[\s[:punct:]]+/", $text, -1, PREG_SPLIT_NO_EMPTY);
//створюємо і заповняємо другий масив
$arr_count = array();
$count = count($arr)-1;
for($i = 0; $i <= $count; $i++){
  $arr_count[$i] = -1;
}
$key=0;//лічильник який відповідає ключу в масиві $arr_count
for ($j=0; $j <= $count; $j++){
  for ($y=0; $y <= $j; $y++) {
    if ($arr[$y]==$arr[$j]) {
      $arr_count[$key]+= 1;
    }
  }
$key++;
}
foreach ($arr_count as $value) {
  echo $value." ";
}
?>
