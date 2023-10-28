<?php


$fruits = ['apple', 'banana', 'cherry'];
$removedFruit = array_shift($fruits);
echo "Removed element: $removedFruit\n";
echo "Array after removal: ";
print_r($fruits);
array_unshift($fruits, 'orange', 'grape');
echo "<br/>";

echo "Array after adding elements: ";
print_r($fruits);

?>