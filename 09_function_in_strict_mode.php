<?php 
declare(strict_types = 1);
//in strict type we can explicitly define what type of return value is expected similar to c/c++.
                                       //👇 this is specifying int type return value  
function strictFunc(float $a, float $b):int{

    return (int)($a+$b); //return type should be int
}

echo strictFunc(0.8,0.8);

?>