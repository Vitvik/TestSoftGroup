<?php
ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);
$days=$_POST['num_n'];
$part=$_POST['num_k'];

/*
//добавляємо $days і $part в сесію
$_SESSION['days'] = $days;
$_SESSION['part'] = $part;
*/
// отримуємо числа ai i bi для кожної партії
$caunt = 0;
if(isset($part)){
  echo '<form method="post" action="">';
    for ($i=1; $i <=$part ; $i++){
      $caunt++;
      echo '<label for = "ai" >Введіть число ai для '.$caunt.' партії</label><br />';
      echo '<input type="text" id = "ai" name="ai[]" placeholder="Введіть число"><br />';
      echo '<label for = "bi" >Введіть число bi для '.$caunt.' партії</label><br />';
      echo '<input type="text" name="bi[]"  placeholder="Введіть число"><br />';
    }
  echo '<input type="submit" value="OK">';
  echo '</form>';
}
$ai = $_POST['ai'];
$bi = $_POST['bi'];

//$days = $_SESSION['days'];
//Вихідні дні
$weekend_days = array();
for ($i=6; $i <=$days; $i+=7) {
  $weekend_days[] = $i;
}
for ($i=7; $i <= $days ; $i+=7) {
  $weekend_days[] = $i;
}
sort($weekend_days);
//дні страйків
/*
$strike_days = array();
for ($i=1; $i <= $part ; $i++) {
  for ($y=$ai[$part]-1; $y <= $days ; $y+=$bi[$part]-1) {
    $strike_days[] = $y;
  }
}
*/
?>
