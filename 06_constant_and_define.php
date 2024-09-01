<?php

/**
 * 🚫🚫constant are always global and  can be used inside function.
 * cannot be declared inside block .
 * constant name is start with _ or char without $ sign.
 */


 //Defining By using const keyword
 const a = 5;
 function a(){
    //cannot declare inside function or block always global
    echo a."\n";
}
a();

//By using define(name, value, case-insensitive -----> no longer supported) method 

define("constant",43);

function b(){
    define("const_in_func", "CONST INSIDE FUNCTION USING DEFINE ");
    echo constant." ".const_in_func."\n";
}
b();

echo "Accessing " .const_in_func. " From Outside function";

//<---------define(name, value)---------const-------->
/**
 * Can be defined inside block                             | - cannot be defined inside block
 * can be accessed inside function without global keyword  | - same
 */

?>