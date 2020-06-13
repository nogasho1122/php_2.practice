<?php 
// 複数の値 foreach

$members =[
  'name'=>'本田',
  'height'=>170,
  'hobby'=>'サッカー'
];

// バリューのみ表示
foreach($members as $member){
  echo $member;
}


// 多段階の配列を展開
$members_2 =[
  '本田'=>[
  'height'=>170,
  'hobby'=>'サッカー'
  ],
  '香川'=>[
    'height'=>165,
    'hobby'=>'サッカー'
  ]
];

echo '<br>';

foreach($members_2 as $member_1){
  foreach($member_1 as $member){
    echo $member;
  }
}



?>