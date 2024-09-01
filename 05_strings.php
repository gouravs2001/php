<?php
/**
 * strings are immutable in php
 * strings can be declared using double quotes or single quote
 * 
 * Double quote can process special characters such as variables etc. e.g. $x = "hi\n" ===> hi(with next line)
 * single quote will print directly as it is. e.g. $x = 'hi\n' ===> hi\n
 */

 $x = "Hello World!";

 echo "\n<--------strlen()-------> \n". strlen($x); // strlen gives string length including space here output => 12

 echo "\n<------str_word_count()------>\n".str_word_count($x); // number of words present in string output => 2

 echo "\n<------strpos(string, sequence to search)------->\n".strpos($x,"World"); //if match found return char position of first match else return false

 echo "\n".str_replace("World", "Dolly", $x)."\n"; // replace word World with Dolly does not modify original string
 
 //<--------------String to array --------> explode("separator", string)
  $y= explode(" ", $x);

 print_r($y);

 //<---------------concatination-------->
  $temp = 'haiiiiyaaa';
  $z = $x.$temp;
  //or we can use double quotation $z = "$x $temp"
  
  echo "\n<-----------Concatenation--------->\n $z\n";

  //<-----------substr( string, index, number of characters to return after index)--------------->
  echo "\n".substr($x,-6)."\n";   //-ve index start from end of string so slice from end


  //<------------Escape character--------->
  /**
   * To insert characters that are illegal in a string, use an escape character.
   * An escape character is a backslash \ followed by the character you want to insert.
   * An example of an illegal character is a double quote inside a string that is surrounded by double quotes: "hi my name is "XYZ" that's it ".
   * to use double quotation inside double quotatiom we have to use escape character "hi my name is \"XYZ"\ that's it " */
 

?>