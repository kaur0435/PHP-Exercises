<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food = ["Roasted Vegetables", "Chickpea Curry", "Milk Balls", "Pizza"];

/*
Print every array element in a new line.
*/
echo "{$food[0]}<br>";
echo "{$food[1]}<br>";
echo "{$food[2]}<br>";
echo $food[3];

/*
$a = 0;
while($a < sizeof($food)){
    echo $food[$a]."<br>";
    $a++;
}
*/



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/
echo "<ul>
  <li>{$food[0]}</li>
  <li>{$food[1]}</li>
  <li>{$food[2]}</li>
  <li>{$food[3]}</li>
</ul>";

/*
$b = 0;
echo "<ul>";
while($b < sizeof($food)){
    echo "<li>{$food[$b]}</li>";
    $b++;
}
echo "</ul>";
*/



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/
$food_assoc = [
    "Roasted Vegetables" => "salad",
    "Chickpea Curry" => "main course",
    "Milk Balls" => "dessert",
    "Pizza" => "fast food"
];

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/
$newArray = array_keys($food_assoc);

echo "{$newArray[0]} | {$food_assoc["Roasted Vegetables"]}<br>";
echo "{$newArray[1]} | {$food_assoc["Chickpea Curry"]}<br>";
echo "{$newArray[2]} | {$food_assoc["Milk Balls"]}<br>";
echo "{$newArray[3]} | {$food_assoc["Pizza"]}";

/*foreach($food_assoc as $key => $value) {
    echo "{$key} | {$value}<br>"; 
}*/



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
*/
    
$food_assoc = [
    "Roasted Vegetables" => [
        "type" => "salad",
        "origin" => "Italy"
    ],
    "Chickpea Curry" => [
        "type" => "main course",
        "origin" => "India"
    ],
    "Milk Balls" => [
        "type" => "dessert",
        "origin" => "India"
    ],
    "Pizza" => [
        "type" => "fast food",
        "origin" => "Italy"
    ]
];

/*
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/
echo "{$newArray[0]} | {$food_assoc["Roasted Vegetables"]["type"]} | {$food_assoc["Roasted Vegetables"]["origin"]}<br>";
echo "{$newArray[1]} | {$food_assoc["Chickpea Curry"]["type"]} | {$food_assoc["Chickpea Curry"]["origin"]}<br>";
echo "{$newArray[2]} | {$food_assoc["Milk Balls"]["type"]} | {$food_assoc["Milk Balls"]["origin"]}<br>";
echo "{$newArray[3]} | {$food_assoc["Pizza"]["type"]} | {$food_assoc["Pizza"]["origin"]}<br>";
/*
foreach($food_assoc as $k => $v) {
    echo $k;
    foreach($v as $t => $indesc) {
        echo " | ".$indesc;
    }
    echo "<br>";
}
*/



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
 
<tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
</tr>
</table>
*/
echo "<table border = 1px>
  <tr>
    <th>Food</th>
    <th>Type</th>
    <th>Origin</th>
  </tr>
  <tr>
    <td>{$newArray[0]}</td>
    <td>{$food_assoc["Roasted Vegetables"]["type"]} </td>
    <td>{$food_assoc["Roasted Vegetables"]["origin"]}</td>
  </tr>
  <tr>
    <td>{$newArray[1]}</td>
    <td>{$food_assoc["Chickpea Curry"]["type"]}</td>
    <td>{$food_assoc["Chickpea Curry"]["origin"]}</td>
  </tr>
  <tr>
    <td>{$newArray[2]}</td>
    <td>{$food_assoc["Milk Balls"]["type"]}</td>
    <td>{$food_assoc["Milk Balls"]["origin"]}</td>
  </tr>
  <tr>
    <td>{$newArray[3]}</td>
    <td>{$food_assoc["Pizza"]["type"]}</td>
    <td>{$food_assoc["Pizza"]["origin"]}</td>
  </tr>
</table>";

?>