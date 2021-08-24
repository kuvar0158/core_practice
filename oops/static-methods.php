====================================PHP OOP - Static Methods======================================

Static methods can be called directly - without creating an instance of the class first.

Static methods are declared with the static keyword:

<?php
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

// Call static method
greeting::welcome();
?>

=========================PHP - access from method of same classes Static Methods=========

A class can have both static and non-static methods. A static method can be accessed from a method in the same class using the self keyword and double colon (::)

<?php
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }

  public function __construct() {
    self::welcome();
  }
}

new greeting();
?>

=========================PHP - access from method of other classes Static Methods=========

Static methods can also be called from methods in other classes. To do this, the static method should be public

<?php
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

class SomeOtherClass {
  public function message() {
    greeting::welcome();
  }
}
?>

Note-: To call a static method from a child class, use the parent keyword inside the child class. Here, the static method can be public or protected.

<?php
class domain {
  protected static function getWebsiteName() {
    return "W3Schools.com";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;
?>
