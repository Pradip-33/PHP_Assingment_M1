<!-- write a PHP program for find „Thursday‟ in week using switch
Function. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch case</title>
</head>
<body>
<h1><form action="#" method="post" align="Center">
<label for="Day">Day Find : </label><br>
  <select id="Day" name="Day">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
  </select><br><br>
  <input type="submit" name="submit" value="Submit"><br><br><br><br>
  </form></h1>
   <h1 align="Center"> <?php
    $day = $_POST['Day'];
    switch ($day) {
        case 1:
            echo "Sunday";
            break;
        case 2:
            echo "Monday";
            break;
        case 3:
            echo "Tuesday";
            break;
        case 4:
            echo "Wednesday";
            break;
        case 5:
             echo "Thursday";
            break;
        case 6:
            echo "Friday";
            break;
        case 7:
            echo "Saturday";
            break;
        default:
            return "Invalid day number. Please enter a number between 1 and 7.";
    }
    ?>
    </h1>
</body>
</html>