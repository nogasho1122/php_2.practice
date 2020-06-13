<?php

// 書き型
function tehon($hikisu){
  // 処理

  return $hikisu;
}

// インプット引数　なし
// アウトプット戻り値　なし

function test(){
  echo 'テスト';
}

test();

echo '<br>';


// インプット引数　あり
// アウトプット戻り値　なし

// 引数は違ってもいい
// 処理の中は同じじゃなきゃダメ

$comment = 'コメント2';

function getComment($string){
  echo $string; 
}

getComment($comment);

echo '<br>';

// インプット引数　なし
// アウトプット戻り値　あり

function getNumberOfComment(){
  return 5;
}

$commentNumber = getNumberOfComment();

echo $commentNumber;

echo '<br>';

// 引数２つ
// 戻り値あり

function sumPrice($int1,$int2){
  $int3 = $int1 + $int2;
  return $int3;
}

$total = sumPrice(3,5);

echo $total;

echo '<br>';



?>