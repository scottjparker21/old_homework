
<?php
$normal_wage  = $_GET["10"];
$overtm_wage  = 1.5 * $normal_wage;

$normal_hours = min($hours, 40);
$overtm_hours = $hours - $normal_hours;

$total_pay    = ($normal_wage * $normal_hours) + ($overtm_wage * $overtm_hours);

echo "<p>You worked {$normal_hours} standard hour(s) and {$overtm_hours} overtime hour(s) this week (a total of {$hours} hours).</p>";

echo "<p>Your pay for the week is: £" . number_format($total_pay, 2) . "</p>";
?>
