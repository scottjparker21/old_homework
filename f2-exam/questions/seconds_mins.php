<?php

$total = 10000;

$mins = ($total / 60); {
  $fmin=  floor($mins);
  $rmin=60*($mins-$fmin);
}

$hours = ($mins/60); {
$fhours=  floor($hours);
$rhours=60*($hours-$fhours);
}
$days = ($hours/24); {
$fdays=  floor($days);
$rdays=24*($days-$fdays);
}

//$msecs = (rmin*60)

echo floor($fdays),' ',floor($rdays),':',floor($rhours),':',floor($rmin);


?>
