============================Php oops concept======================================
refrence link-: https://www.w3schools.com/php/php_oop_constructor.asp


OOP stands for Object-Oriented Programming.
advantage-: 
OOP is faster and easier to execute
OOP provides a clear structure for the programs
OOP helps to keep the PHP code DRY "Don't Repeat Yourself", and makes the code easier to maintain, modify and debug
OOP makes it possible to create full reusable applications with less code and shorter development time

==================================what is class==================================================

A class is a template for objects, and an object is an instance of class.

Let's assume we have a class named Fruit. A Fruit can have properties like name, color, weight, etc. We can define variables like $name, $color, and $weight to hold the values of these properties.

object contains two thing
1) attribute (Properties)
2) behavior (method/function)

<?php
class Fruit {
  // Properties
  public $name;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
}
$apple = new Fruit();
echo $apple->set_name('Apple');
?>


==================================PHP OOP - Constructor===============

A constructor allows you to initialize an object's properties upon creation of the object.

If you create a __construct() function, PHP will automatically call this function when you create an object from a class. it's also called magic function.


<?php
class Fruit {
  public $name;
  function __construct($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit("Apple");
echo $apple->get_name();
?>
===================================PHP - Access Modifiers=======================

Properties and methods can have access modifiers which control where they can be accessed.

There are three access modifiers:

public - the property or method can be accessed from everywhere. This is default
protected - the property or method can be accessed within the class and by classes derived from that class
private - the property or method can ONLY be accessed within the class