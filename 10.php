<?php
$numbers = array(1, 2, 3, 4, 5); // Using array() function
$fruits = ["Apple", "Banana", "Mango"]; // Using short array syntax
$person = array(
    "name" => "Pradip",
    "age" => 25,
    "city" => "Ahmedabad"
);

$car = [
    "brand" => "Toyota",
    "model" => "Corolla",
    "year" => 2020
];
$products = array(
    array(
        "name" => "Laptop",
        "price" => 800,
        "quantity" => 10
    ),
    array(
        "name" => "Phone",
        "price" => 500,
        "quantity" => 20
    )
);

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
$jsonString = '{"name": "Pradip", "age": 25, "city": "Ahmedabad"}';

// Convert JSON string to PHP array
$array = json_decode($jsonString, true);

// Output the array
print_r($array);

?>