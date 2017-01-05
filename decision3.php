<?php
ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);
$text = $_POST['number'];
$arr = preg_split("/[\s[:punct:]]+/", $text, -1, PREG_SPLIT_NO_EMPTY);

function natNum($array)
{
  $count = 0;
  if(isset($array) && is_array($array))
  foreach ($array as  $value){
    if($value < 2){
      continue;
    }
    else{
      $check = true;
      for($j=2;$j<$value;$j++){
        if($value%$j===0){
          $check=false;
        }
      }
      if($check===true){
        $count ++;
      }
    }
  }
return $count;
}

$num = natNum($arr);


  if($num == 0) {
    echo "Простих чисел не знайденно.";
  }
  else if($num == 1){
    echo "Було введенно ".$num." просте число";
  }
  else if($num > 1 && $num <= 4){
    echo "Було введенно ".$num." простих числа";
  }
  else if($num >= 5 ){
    echo "Було введенно ".$num." простих чисел";
  }


?>
