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
   
   $str = "<h1>タグを取り除く</h1>"; 
   echo strip_tags($str);
   echo "\n";
   
   $number = array(2 , 4 , 6 );
   array_push($number , 8 , 10);
   print_r($number);
   echo "\n";
   
   $number1 = array(1 , 2 , 3);
   $number2 = array(10 , 20 , 30);
   $number3 = array(100 , 200 , 300);
   $number4 = array_merge($number1 , $number2 , $number3);
   print_r($number4);
   echo "\n";
   
   echo "現在のUnixスタンプを取得".time();
   echo "\n";
   
   $after_5 = time(5 * 24 * 60 * 60);
   echo $after_5;
   echo "\n";
   
   $unistanp = mktime(10 , 59 , 0 , 9 , 3 , 1993);
   echo $unistanp;
   echo "\n";
   
   echo date('Y-m-d H:i:s');
   echo "\n";
   
   echo date('Y-m-d H:i:s' , 1000);
   echo "\n";