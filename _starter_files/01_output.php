<?php
/* -------- Output & Comments ------- */

/*
  A .php file running on a server, can output both HTML and PHP code. There are multiple functions that can be used to output data to the browser.
*/

//echo ('HELLO1'); single line comment
//echo ('HELLO1'), ' ',10.9;

/*
echo 'hello2'; Multi-line comments
echo 'hello3';
*/

print 'hello4'; //print works like echo but can only take  ion a single argument
print_r([1,2,2,4,4,5]); //print single values and arrays [prints mixed values]

var_dump([12,33,2,5]);//return more information like data type and length

var_export('Hi Samuel'); // similar to vardump but Outputs string representation of a variable

?>

