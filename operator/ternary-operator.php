<!-- An other way for controls is the ternary operator (see Comparison Operators) that can be used as follows: -->

<?php
$v = 1;

$r = (1 == $v) ? 'Yes' : 'No'; // $r is set to 'Yes'
$r = (3 == $v) ? 'Yes' : 'No'; // $r is set to 'No'
$distance_type = $distance_type=="M"?t("miles"):t("kilometers");
?>

<?php echo (isset($menu)) ? $menu : ''; ?>

<?php echo (isset($years)) ? $years : ''; ?>

// key1=value1&key2=value2

Imp-: Qn-: What is a query string?

Imagine you have a URL: http://www.mywebsite.com/page.php?id=5&name=php

Then the query string is:
?id=5&name=php

In this case, the query consists of two parts: a key id with value 5, and a key name with value php.
You can access the value of the query string keys using this code:

$id = $_GET['id'];

reference for more-:details-:https://www.codeproject.com/Questions/725678/whats-query-string-in-php#:~:text=A%20query%20string%20is%20a,It%20is%20not%20language%20specific.







