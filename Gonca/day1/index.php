<?php

    // $a = 1;
    // $b = 4;
    
    // $a = $a + $b; //5
    // $b = $a - $b; //5-4=1
    // $a = $a - $b; //5-1=4

    // echo $a."</br>";
    // echo $b;


// $a = 98;
// $b = $a % 10;
// $c = intval($a / 10);
// echo "Eded: $a </br> 
//       teklik: $b </br> 
//       onluq: $c";

$a = 152;
$b = intval($a / 100); //3 yuzluk
$c = intval(($a - $b *100) / 10); //5 onluq
$d = $a % 10;

echo "Eded: $a </br> 
      teklik: $d </br> 
      onluq: $c </br>
      yuzluk: $b </br>";

      if ($d > $c && $d > $b) echo "$d teklik en boyukdur";
      else if ($c > $b) echo "$c onluq en boyukdur";
      else echo "$b yuzluk en boyukdur";
?>
