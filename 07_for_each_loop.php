<?php

$arr = array(1,2,3,4,5,6);

foreach($arr as $x){
    echo $x;
}

$arr2 = array("car" => "Maruti", "engine"=> "V8");

foreach($arr2 as $x => $y){
    echo "\n$x => $y\n";
}

$arr3 = array("one","two","three");

foreach($arr3 as &$i){
    if($i == "one") $i = 1;
    echo $i." \n";
    unset($i);  // 🚫🚫do not forget to unset reference in loop to avoid unexpected behaviour
} 

for($i = 0; $i<count($arr3); $i++){

    echo $arr3[$i]." =>index $i \n";
} 



?>