<h1>array_merge()</h1>
<hr>
<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
var_dump($result);

echo '<hr>';


$array1 = array();
$array2 = array(1 => "data");
$result = array_merge($array1, $array2);

var_dump($result);

echo '<hr>';
$array1 = array(0 => 'zero_a', 2 => 'two_a', 3 => 'three_a');
$array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b');
$result = $array1 + $array2;
var_dump($result);

echo '<hr>';

$beginning = 'foo';
$end       = array(1 => 'bar');
$result    = array_merge((array) $beginning, (array) $end);
var_dump($result);

echo '<hr>';

$ary1[0] = "zero";
$ary1[1] = "one";

$ary2[1] = "one";
$ary2[2] = "two";
$ary2[3] = "three";

$ary3 = $ary1 + $ary2;

var_dump($ary3);

echo '<hr>';
$Default[0] = 'Select Something please';

$Data[147] = 'potato';
$Data[258] = 'banana';
$Data[54]  = 'tomato';

$A = array_merge($Default, $Data);

$B = ArrayMergeKeepKeys($Default, $Data);

echo '<pre>';
print_r($A);
print_r($B);
echo '</pre>';

Function ArrayMergeKeepKeys() {
  $arg_list = func_get_args();
  foreach ((array) $arg_list as $arg) {
    foreach ((array) $arg as $K => $V) {
      $Zoo[$K] = $V;
    }
  }
  return $Zoo;
}
