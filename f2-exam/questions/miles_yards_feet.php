<?php

$total = 200000;

$feet = ($total / 12); {
  if ($total > 12)
  $ffeet=  floor($feet);
  $rfeet=12*($feet-$ffeet);
}

$yards = ($feet/3); {
  if ($total>36)
$fyards=  floor($yards);
$ryards=3*($yards-$fyards);
}
$miles = ($yards/1760); {
if ($total>36*1760)
$fmiles=  floor($miles);
$rmiles=1760*($miles-$fmiles);
}

//$msecs = (rmin*60)

echo floor($fmiles),' ',floor($rmiles),':',floor($ryards),':',floor($rfeet);


?>
