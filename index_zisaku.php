<?php

$postalCode = '123-4567';

function cheakPostaleCode($str){
  $replaced = str_replace('-','',$str);
  $lenght = strlen($replaced);

  if ($lenght === 7){
    return true;
  }else{
    return false;
  }
}

var_dump(cheakPostaleCode($postalCode));

?>