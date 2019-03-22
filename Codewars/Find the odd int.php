<?php

function findIt(array $a) : int
{$a = [20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5];
    $result=[];
    foreach ($a as $value) {
        //IF variable does not have index
        if (!isset($result[$value])) {
            //set index and value 1
            $result[$value] = 1;
        }else
        {//count value + to value to reach, proper count of values in array of indexes
            $result[$value] = $result[$value] + 1 ;
        }
    }
    foreach($result as $key=>$value){
        //find Odd value of index
        if ($value % 2 !== 0) {
            return $key;
        }     }

}


echo findIt($a);

