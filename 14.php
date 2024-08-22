<!--Write a PHP script which decodes the following JSON string-->
<?php

$jsonString = '{
    "name": "Pradip Suthar",
    "age": 21,
    "email": "Pfsuthar33@gmail.com",
    "hobbies": ["reading", "travelling", "running"]
}';


$decodedArray = json_decode($jsonString, true);

echo "Decoded Array: <br><pre>";
print_r($decodedArray);

?>
