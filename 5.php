<!-- Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21,
o 34 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1 align="Center"><b><u>Fibonacci Serices</u></b></h1>
<?php
$n = 8;
$a = 0;
$b = 1;

echo "<br>".$a.",".$b;

for($i > 2 ; $i < $n ; $i++ ){
    $next = $a + $b ; 
    echo ",".$next;

    $a = $b;
    $b = $next;
}
?>

</body>
</html>
