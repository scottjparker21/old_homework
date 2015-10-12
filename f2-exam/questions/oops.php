<?php

$array=array(1,2,3,4,5);
$array2=array(6,7,8,9,10);


foreach($array as $number => $i) {

    foreach($array2 as $number1 => $i2) {


    if($i < $i2){
                    $array3[$number] <= $i2;

                    echo $i2;
                }
     else     {
            $array3[$number]=$i;

            echo $i;

            }

    }
}

print_r($array3);

?>
