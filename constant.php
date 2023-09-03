<?php
// syntax  ::    define(name ,value, case-sensitive);

// 1] case-sensitive ....
define("GREETING", "Welcome to the Zombies World !");
echo GREETING;
echo "\n";

// // 2] case-insensitive ....
// define("greet", "Welcome to the Marvels !",true);
// echo greeting;

// you can define also  array into the define constant
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];

// define is default global in scope you can access any where 

define("welcome", "Welcome to world");

function myTest() {
  echo welcome;
}
 
myTest();
?>