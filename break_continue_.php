<!-- The break statement can also be used to jump out of a loop. -->

<?php
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {  // break at value 4.
    break;
  }
  echo "The number is: $x \n";
}
?>


<!-- The continue statement breaks one iteration in the loop. -->

<?php
for ($num = 0; $num < 10; $num++) {
  if ($num== 4) { // skip the iteration at the value 4.
    continue;
  }
  echo "The number is: $num \n";
}
?>