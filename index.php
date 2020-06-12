<?php 

$array_member =[
  '1kumi'=>[
    '本田'=>[
      'height'=>160,
      'hobby'=>'サッカー'
    ],
    '長友'=>[
      'height'=>155,
      'hobby'=>'サッカー'
    ],
  ],
  '2kumi'=>[
    '香川'=>[
      'height'=>170,
      'hobby'=>'サッカー'
    ]
  ],
  '3kumi'=>[
    '乾'=>[
      'height'=>173,
      'hobby'=>'サッカー'
    ]
  ]
];

echo $array_member['1kumi']['本田']['height'];

echo '<pre>';
var_dump($array_member);
echo '</pre>';
?>