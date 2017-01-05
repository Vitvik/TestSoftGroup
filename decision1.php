<?php
ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);
$num=$_POST['num'];
$count = 0;
if (is_numeric($num)&&isset($num)){
  for ($i=1; $i <= $num ; $i++) {
    $sum = 0;
    for ($n=1; $n < $i; $n++) {
      if ($i%$n == 0) {
        $sum = $sum + $n;
      }
    }
    if($i == $sum){
      echo $i." ";
      $count++;
    }
  }
  if ($count == 0) {
    echo "Досконалих чисел не знайдено.";
  }
  exit;
}
if(isset($num)){
echo "Введіть число";
}
?>
