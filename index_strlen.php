<?php

// 文字列の長さ

// マルチバイト
// 日本語　SJTS, UTF-8 3~6バイト
$text = 'アイウエオ';

// echo strlen($text);

echo mb_strlen($text);

echo '<br>';

// 文字列の置換

$str = '文字列を置換します';

echo str_replace('置換','ちかん',$str);

echo '<br>';

// 指定文字列で分割

$str_2 = '指定文字列で、分割します';

var_dump(explode('、', $str_2));

// implode 逆

echo '<br>';

// 正規表現
// 文字がどうか
// 数字がどうか
// 郵便番号
// メールアドレスか test@gmail.com

$str_3 = '特定の文字列が含まれるか確認する';

echo preg_match('/文字列/',$str_3);

echo '<br>';

// 指定文字列から文字列を取得する

echo substr('あいう',2);

echo '<br>';
echo mb_substr('かきくけこ',2);


// 配列に配列を追加する

$array = ['りんご', 'みかん'];

array_push($array, 'ぶどう','なし');

echo '<pre>';
var_dump($array);
echo '</pre>';


?>