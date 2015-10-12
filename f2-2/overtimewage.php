<?php
{
$Hours= 20;
$Rate= ten;
$Overtime= 15;

if ($Hours< 40) {
   echo $Basepay = $Hours*$Rate;
}
if ($Hours> 40 ) {
   echo $Overtime= (40*10)+($Hours-40*15);
}

echo " Total Pay ";
}
try {
  $error = 'Must be numeric value';
    throw new Exception($error);
}

catch (Exception $e) {
  echo 'Caught exception: ', $e->getMessage(), "\n";
}

?>
