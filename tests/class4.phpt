--TEST--
ZendAMF compatibility test class 4, empty object
--SKIPIF--
<?php
	if (!extension_loaded('amf')) die('skip: amf extension not available');
?>
--FILE--
<?php


$data = (object)array(
    'a' => (object)array(
        '1' => 123,
        '2' => 234,
        '3' => 345,
    ),  
    'b' => (object)array(
        '1' => 123,
        '2' => 234,
        '3' => 345,
    ),  
    'c' => (object)array(
        '1' => 123,
        '2' => 234,
        '3' => 345,
    ),  
);

$out = amf_encode($data, 1);
echo bin2hex($out);


--EXPECT--
110a0b0103610a010331047b033204816a03330482590103620a0102047b0404816a060482590103630a0102047b0404816a060482590101
