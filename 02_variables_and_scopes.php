<?php
/**Rules for declaring variables
 * 1. declared using $variableName.
 * 2. can contain only AlphaNumeric characters and underscore.
 * 3.should start with underscore or character (never with number).
 * 4.case sensitive $age and $AGE are two differenrt variables.
 */

 $x = 0;  //int(0)
 $X= "abc"; //string(3) "abc"

 var_dump($X,$x); //get the data type of variables

 // variable scope

 //php has three variable scopes 1. local , 2.Global, 3.Static

 $globalVar = "global var \n";
 /*
 * variables declared outside function have global scope and can be accessed only outside the function.
 * we cannot access global variables directly inside function.
 * we have to use global keyword.
 * PHP also stores global variables inside an $GLOBALS [index] array
             where index is global variable name and can be used to access and modify global var directly.
 */

 function scope(){

    $localVar = " This is local var \n" ;// variable declared inside function have local scope and can be accessed inside the function
    
    echo " local variable inside function => ".$localVar."\n";
    echo $globalVar." \n"; // 🛑warning undefined variable 

    //to use global variables inside function we have to use global keyword
    global $globalVar;
    echo "This is global var after using global keyword => ".$globalVar."\n";

    // using GLOBALS array
    echo $GLOBALS['X']."🛑🛑\n";

 }
 scope();
 echo $localVar; // 🛑warning undefined variable 
 echo "global variable outside function => ".$globalVar."\n";


 // static keyword

 /*
 * static keywords stores the function variable for the next time function is called.
 * The variable with static keyword still have local scope and cannot be accessed outside function. 
  */

 echo "<----------------Static keyword-------------->\n";

 function staticScope(){
    static $staticVar = 0;
    $staticVar+=1;
    echo $staticVar."\n";

 }
 staticScope();
 staticScope();
 staticScope();
 echo $staticVar."\n"; //🛑🛑warning undefined variable


?>