<?php
function bubbleSort($arr){
    $n=count($arr);
    for($i=0;$i<$n-1;$i++){
        $swapped=false;
        for($j=0;$j<$n-$i-1;$j++){
            if($arr[$j]<$arr[$j+1]){
                $temp=$arr[$j];
                $arr[$j]=$arr[$j+1];
                $arr[$j+1]=$temp;
                $swapped=true;
            }
        }
        if(!$swapped) break;
    }
}
$arr=[4,1,5,2,3];
echo "Origional Array: ".implode(", ",$arr)."\n";
bubbleSort($arr);
echo "Swapped Array: ".implode(", ",$arr);

?>