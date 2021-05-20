<!DOCTYPE html>
<html>
<body>

<?php
$a = 0;
// True because $a is set
if (isset($a)) {
  echo "Variable 'a' is set.<br>";
}

$b = null;
// False because $b is NULL
if (isset($b)) {
  echo "Variable 'b' is set.";
}
?>
<!-- //The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL. -->

<!-- // this ex of empty() function -->

<?php
$a = 0;

// True because $a is empty
if (empty($a)) {
  echo "Variable 'a' is empty.<br>";
}

// True because $a is set
if (isset($a)) {
  echo "Variable 'a' is set.";
}
?>
</body>
</html>