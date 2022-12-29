<?php
$age = array("Peter"=> 35, "Ben"=> 37, "Joe"=> 43);
ksort($age);

if ($age > 10){
  echo "Lulus";
}else{
  echo "tidak";
}
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>