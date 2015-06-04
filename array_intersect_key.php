<h1>array_intersect_key</h1>
<?php

echo '<hr>';
$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8);

var_dump(array_intersect_key($array1, $array2));

echo '<hr>';
echo 'Simple key white-list filter: ';
echo '<br>';
$arr     = array('a' => 123, 'b' => 213, 'c' => 321);
$allowed = array('b', 'c');

var_dump(array_intersect_key($arr, array_flip($allowed)));

echo '<hr>';
$array = array(
  'two' => 'b',
  'three' => 'c',
  'one' => 'a',
);

$keyswant = array(
  'one' => '',
  'three' => '',
);

print_r(array_intersect_key($array, $keyswant));