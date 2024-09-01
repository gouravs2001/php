<?php
//pass by value
function passByValue($x){
    echo $x."\n";

    $x = "Changed value";

    echo $x."\n";
}

$valueToPass = 23;
passByValue($valueToPass);

echo "Value after pass by value => $valueToPass\n";

//pass by reference

function passByReference(&$x){
    $x = " Changed By Reference ";
}

passByReference($valueToPass);

echo "Value after pass by Reference => $valueToPass\n";
?>