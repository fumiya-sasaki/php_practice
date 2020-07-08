<?php
$name = "satou";
if($name == "fumiya"){
 echo "私は郁也です\n";
} else {
 echo "あなたの名前ではありません。\n";
}

$total = 0;
for($i = 0; $i <= 10000; $i++){
$total += $i;
}
 echo $total;
 echo "\n";
 
$fruits = array("orange","banana","apple","strawberry","peach");
foreach($fruits as $fruit ){
 echo $fruit;
 echo "\n";
}

for($i = 1; $i <=100; $i++){
 if($i % 5 == 0){ 
  echo $i;
  echo "\n";
  }
 }
