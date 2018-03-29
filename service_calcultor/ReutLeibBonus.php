<?php

  include 'Calc.php';
  include 'Calcs.php';
  // main
  
  $calculation = new Calcs;
  $retVal = $calculation->calculateFunc();


  // echo "RETVAL:" + $retVal;
  $a = array('retVal'=>$retVal);
  header('Content-Type: application/json'); // set header for json response
  echo json_encode($a); // echo the converted JSON object from the array


?>