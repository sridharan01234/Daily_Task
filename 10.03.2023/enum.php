<?php
enum Fruit {
  case APPLE;
  case BANANA;
  case ORANGE;
}

function getFruitName(Fruit $fruit) {
  switch ($fruit) {
    case Fruit::APPLE:
      return "apple";
    case Fruit::BANANA:
      return "banana";
    case Fruit::ORANGE:
      return "orange";
  }
}

$myFruit = Fruit::APPLE;
echo getFruitName($myFruit); // prints "apple"
