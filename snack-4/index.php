<?php
$min = 0;
$max = 100;
$n_item = 15;
$randomArray = [];

while (count($randomArray) < $n_item) {
  $number = rand($min, $max);
  if (!in_array($number, $randomArray)) {
    $randomArray[] = $number;
  }
}
foreach($randomArray as $number){
    echo $number ."<br>";
}
?>