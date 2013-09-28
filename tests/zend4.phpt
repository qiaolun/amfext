--TEST--
ZendAMF compatibility test 4
--SKIPIF--
<?php
	if (!extension_loaded('amf')) die('skip: amf extension not available');
?>
--FILE--
<?php

$data = array(
    1 => 'aa',
    2 => 'bb',
    'x' => 'cc',
);

$out = amf_encode($data, 1);
echo bin2hex($out);


--EXPECT--
110905037806056363010605616106056262
