<?php

  $x = 5;
  $y = 10;
  function test()
  {
     // $x = 10;$y = 30;
     global $x,$y;
      echo $x." ".$y."\n";
  }
  function test1()
  {
      $GLOBALS['x']+=$GLOBALS['y'];
  }
  test();
  test1();
  test();
  
  
  $nums = array(12,2,10,32,23,5);
  sort($nums);
  foreach($nums as $i)
  {
      print($i." = ".var_dump($i)."\n");
  }
  
  $num1 = array('abc'=>10,'abde'=>1,'efg'=>11,'bcd'=>20);
  
  ksort($num1);
  
  print_r($num1);
  
  foreach($num1 as $i)
  {
      echo $i."\n";
  }
?>