<?php
   function double($num) {
     $number = $num * 2;
     return $number;
   }
   echo double(5);
   echo "\n";
    
   function pluse($a , $b) {
     $number2 = $a + $b;
     return $number2;
   }     
   echo pluse(7 , 57);
   echo "\n";

   function multiply($arr) {
     $result = 1;
      foreach($arr as $a) {
          $result *= $a;
      }
     echo $result;
   } 
   echo multiply(array(1,3,5,7,9));
   echo "\n";
     
   function max_array($arr) {
     $max_number = $arr[0];
     foreach($arr as $a) {
       if($max_number < $a) {
         $max_number = $a;   
        }
     }    
     return $max_number;
   }
   echo max_array(array(2,45,16,433,89));
   ?>