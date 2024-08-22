<!-- Write a PHP program to check Leap years between 1901 to 2016 Using
nested if. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 align="Center">Leap years</h2>
    <?php
for($year =1901;$year <=2016; $year++){
    if($year % 4 == 0){
        if($year % 100 == 0){
            if($year % 400 == 0){
            echo "$year is a leap year.<br>";
            }else{
                echo "$year is not a leap year.<br>";
            }
        }else{
            echo "$year is a leap year.<br>";
        }
    }else{
        echo "$year is not a leap year.<br>";
    }
}
        
?>
</body>
</html>