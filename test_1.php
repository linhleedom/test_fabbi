<?php 
$array = [1,2,3,4,10,11,12,13,20,21,22,23];
$n = count($array)/3;
$array_cut = array_chunk($array, $n);
$result = array();
for($i=0; $i < $n; $i++){
    array_push($result, $array_cut['0'][$i], $array_cut['1'][$i], $array_cut['2'][$i]);
}
print_r($result);
?>