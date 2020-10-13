<?php
    $array = [1,2,3,4,5,6,7,8,9,10,300];
    $max_item = 0;
    
    for($i = 0; $i < count($array); $i++){
        if( $array[$i] > $max_item ){
            $max_item = $array[$i];
            $max_item_id = $i;
        }else{
            $max_item= $max_item;
        }
    }
    $sum = $max_item;
    unset($array[$max_item_id]);
    $max_item_new = 0;
    for($i = 0; $i < count($array); $i++){
        if( $array[$i] > $max_item_new ){
            $max_item_new = $array[$i];
        }else{
            $max_item_new = $max_item_new;
        }
    }
    echo $sum += $max_item_new;
?>