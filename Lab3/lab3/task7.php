
<?php

for ($i = 1; $i <=3; $i++)
 {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br/>";
}

echo"<hr/>";
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






