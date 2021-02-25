<?php 


// indexed / vienamtis

$people = array('Kevin', 'Jeremy', 'Sara');
$fruits = ['banana', 'apple'];

$skaiciai = array(5, 10, 3);
echo "skaiciu 5,10,3 suma yra lygi " . array_sum($skaiciai) . "<br>";




// multi-dimesnional 

$cars = array(
    array('volvo', 5, 2),
    array('vw', 300, 20)
);
$cars = max(array('vw', 300, 20));
echo $cars;
echo $cars[1][1];


// associative arrays

$people = array('Justas' => 5, 'Tomas' => 11, 'Saulius' => 19); 
echo "<br>";
echo min($people);
echo "<br>";
echo array_sum($people);
echo "<br>";

    if (array_sum($people) < 500) {
        echo "liftu keltis gali";

    }



    print('<br>');
    print $people['Saulius']



?>