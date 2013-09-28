--TEST--
ZendAMF compatibility test class 3, empty object
--SKIPIF--
<?php
	if (!extension_loaded('amf')) die('skip: amf extension not available');
?>
--FILE--
<?php


$data = (object)array(
    'a' => (object)array(),
    'b' => (object)array(),
    'c' => (object)array(),
);

$out = amf_encode($data, 1);
echo bin2hex($out);


--EXPECT--
110a0b0103610a010103620a010103630a010101
