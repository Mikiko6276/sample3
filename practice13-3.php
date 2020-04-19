<?php
function f($arr){
    $result = 1;
    foreach($arr as $item){
        $result *= $item;
    }
    return $result;
}
    $arr = [1,3,5,7,9];
echo f($arr); 