<?php

/*
* both are essentially same.
* only difference is print have return value(1) so can be used in expressions.
* echo does not have any return value.
* echo is marginally faster than print.
* print can take only one argument.
* echo can take multiple arguments.
*/
  $x = 'echo';
  $y = 'print variable';
  $printReturnValue = print("print variable is $y\n");
  echo "Echo variable is $x\n";
  echo "Print return value is $printReturnValue\n";

?>