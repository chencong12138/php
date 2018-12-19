<?php
// $name = 'jack';
// echo $name;

// define ('name','jack');
// echo name;
// $a = 1;
// $a = 2;
// echo $a;


// function text($a,$b,$c){
//     var_dump($a,$b,$c);
// }
// $arr = [1,2,30];
// text(...$arr);


$arr_study = ['a' => 'aaa','b' => 'bbb'];
$arr_study['c'] = '这是我新添加的';
while(list($key,$value) = each($arr_study)){
    echo $key.'-----'.$value.'***' ;
}
?>