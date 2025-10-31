<?php
function binarySearch($arr,$x){
    $low=0;
    $high=count($arr)-1;
    while($low<=$high){
        $mid=floor(($low+$high)/2);
        if($arr[$mid]==$x){
            return $mid;
        }
        if($arr[$mid]<$x){
            $low=$mid+1;
        }
        else{
            $high=$mid-1;
        }
    }
    return -1;
}
$arr=[10,12,15,19,25,65,90,98];
$x=25;
$result=binarySearch($arr,$x);
if($result!=-1){
    echo "Element found at index: $result";
}
else{
    echo "Element not found in array";
}
?>