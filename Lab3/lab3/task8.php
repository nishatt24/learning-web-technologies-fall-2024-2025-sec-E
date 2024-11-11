
<?php
 
$array = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];
 
echo "The Shapes to Print: <br>";
echo "<br>";
$rows = 3;

for ($i = $rows; $i >= 1; $i--)
 {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br/>";
}
echo"<hr/>"; 


$ch = 'A';

for ($i = 1; $i <=3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $ch. " ";
        $ch++;
    }
    echo "<br>";
}
 
?>
