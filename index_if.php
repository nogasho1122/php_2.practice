<?php 

$height = 90;

var_dump($height);

if ($height === 91){
  echo '身長は' . $height .'cmです';
}else{
  echo '身長は' . $height .'cmではありません';
}

$signal = 'blue';

if ($signal === 'red'){
  echo '止まれ';
}else if ($signal == 'yellow'){
  echo '一時停止';
}else{
  echo '進む';
}

echo '<br>';

$speed = 80;

if ($signal === 'blue'){
  if ($speed >= 80){
    echo 'スピード違反です';
  }
}

?>