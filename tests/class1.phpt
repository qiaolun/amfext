--TEST--
ZendAMF compatibility test class 1, named class
--SKIPIF--
<?php
	if (!extension_loaded('amf')) die('skip: amf extension not available');
?>
--FILE--
<?php

class Config_test extends ArrayObject {
}
$data = new Config_Test(array(
), ArrayObject::ARRAY_AS_PROPS);
$data->exchangeArray(array(
    'a' => 1,
    'b' => 2,
    'c' => 3,
));

$out = amf_encode($data, 1);
echo bin2hex($out);

--EXPECT--
110a3317436f6e6669675f74657374036103620363040104020403
