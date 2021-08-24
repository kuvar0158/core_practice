======================================PHP OOP - Class Constants==================================

Constants cannot be changed once it is declared.

1) Class constants can be useful if you need to define some constant data within a class.

2) A class constant is declared inside a class with the const keyword.

3) Class constants are case-sensitive. However, it is recommended to name the constants in all uppercase letters.

4) We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name, like here:

<?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
}
use app\models\Goodbye 
echo Goodbye::LEAVING_MESSAGE;
?>

Note-: Or, we can access a constant from inside the class by using the self/static keyword followed by the scope resolution operator (::) followed by the constant name, like here:

<?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
    // or (both are work as a same)
    echo static::LEAVING_MESSAGE
  }
}