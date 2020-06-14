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

?>