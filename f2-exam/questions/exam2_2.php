<?php



$total = 654000;

$secs = ($mins / 60);

$days = ($total/60/60/24);

$hours = ($total/60/60);

$mins = ($total / 60);




echo ($days),' ',round($hours),':',round($mins),':',round($secs);


?>
