<!-- Write a PHP program to find the largest of three numbers using ternary
Operator. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternary Operator</title>
</head>
<body>
    <form action="#" method="post">
    <h2 align="Center">largest of three numbers using ternary Operator</h2>
    <label>A :</label>
    <input type="text" name="max1" id="max1"><br><br><br>
    <label>B :</label>
    <input type="text" name="max2" id="max3"><br><br><br>
    <label>C :</label>
    <input type="text" name="max3" id="max3"><br><br><br>
    <input type="Submit" value="Submit" name="submit" >
    </form> 
    <?php
    $a = $_POST['max1'];
    $b = $_POST['max2'];
    $c = $_POST['max3'];
    $larg = ($a > $b) ? (($a > $c)? $a : $c) : (($b > $c) ? $b : $c );
    echo "<br> Largest number is ".$larg;
    ?>
</body>
</html>