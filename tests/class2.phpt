--TEST--
ZendAMF compatibility test class 2, empty object
--SKIPIF--
<?php
	if (!extension_loaded('amf')) die('skip: amf extension not available');
?>
--FILE--
<?php

class Config_test extends ArrayObject {
}
$data = new Config_Test();

$out = amf_encode($data, 1);
echo bin2hex($out);


--EXPECT--
110a0317436f6e6669675f74657374
