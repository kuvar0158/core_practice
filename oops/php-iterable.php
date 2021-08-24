
=======================PHP - What is an Iterable?=====================================


An iterable is any value which can be looped through with a foreach() loop.

The iterable pseudo-type was introduced in PHP 7.1, and it can be used as a data type for function 
arguments and function return values.

The iterable keyword can be used as a data type of a function argument or as the return type of a function:

<?php
function getIterable():iterable {
  return ["a", "b", "c"];
}

$myIterable = getIterable();
foreach(getIterable() as $item) {
  echo $item;
}
?>
