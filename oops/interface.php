==================================PHP - What are Interfaces?==================================
Interfaces allow you to specify what methods a class should implement.

Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".

Interfaces are declared with the interface keyword:

<?php
interface Animal {
  public function makeSound();
}
interface Anokonda {
  public function makeAnakondaSound1();
}

class Cat implements Animal, Anokonda {
  public function makeSound() {
    echo "Meow";
  }
  public function makeAnakondaSound1() {
    echo "Bhow Bhow.......";
  }
}

$animal = new Cat();
$animal->makeAnakondaSound1();
?>

==================diffrence b/w abstarct and interface==============================
Abstarct class:
1) abstract class can extends only single class at a time but interface support multiple
2) abstarct class you can declare vairable but in not in interface
