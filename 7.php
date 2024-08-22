<!--Write a
program to print the below format :
                                    5 9
                                    2610
                                    3711
                                    4812 
-->
<?php
$a = 5;
$b = 9;

for($i = 0;$i < 4;$i++){
    echo $a." ".$b."<br>";
    $a += 7;
    $b += 1;
}
?>