<?php

// 1] If statement ....
// $t = date("H");
// echo "$t\n";

// if ($t < "20") {
//   echo "Have a good day!";
// }

// 2] if ...else statement .....

// $t = date("H");

// if ($t < "20") {
//   echo "Have a good day!";
// } else {
//   echo "Have a good night!";
// }

// 3] if  ... else if statement 

$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

?>