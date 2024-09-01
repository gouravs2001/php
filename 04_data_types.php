<?php

/**php supports 8 data types
 * String
 * Integer
 * Float (also known as double)
 * Boolean
 * Object
 * Array
 * Null
 * Resource - The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.
 */

 /**
  * if we don't initialize a var it is type NULL. 
  */

  $x;
  var_dump($x); //NULL 🚫 warning undefined variable
  $x = array(1,2,"st",4);
  var_dump($x) // it will give array(4) and var type of every element present in array 🚫same  is true with object.

?>