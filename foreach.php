<!-- The foreach loop works only on arrays, and is used to loop through each key/value pair in an array. -->
<?php
// $colors = array("red", "green", "blue", "yellow");
// foreach ($colors as $value) {
//   echo "$value \n";
// }



$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val \n";
}
?>