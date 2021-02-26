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
    print $people['Saulius'];

    print('<br>');

    foreach (["1", "2", "3" ] as $val)

$my_arr10 = array(
    "Mindaugas" => [10, 9, 8, 10],
    "Maksas" => [9, 8, 8, 5],
    "Petras" => [10, 9, 8, 9, 5],
  );

  for ($i = 0; $i < count(array_keys($my_arr10)); $i++) { 
    print(array_keys($my_arr10)[$i] . '->');
    for ($j = 0 ; $j < count($my_arr10[array_keys($my_arr10)[$i]]); $j++) { 
      print($my_arr10[array_keys($my_arr10)[$i]][$j] . ' ');
    }
    print("<br>");
  }

  foreach ($my_arr10 as $name => $grades){ 
    print($name . '->');
    foreach ($grades as $grade) {
      print($grade . ' ');
    }
    print("<br>");
  }
  
  print("</pre><br>");



?>