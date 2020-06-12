<?php 

$array_member =[
  '1kumi'=>[
    '本田'=>[
      'height'=>160,
      'hobby'=>'サッカー'
      ]
  ],
  '2kumi'=>[
    '香川'
  ],
  '3kumi'=>[
    '乾'
  ]
];

echo $array_member['1kumi']['本田']['height'];

echo '<pre>';
var_dump($array_member);
echo '</pre>';
?>