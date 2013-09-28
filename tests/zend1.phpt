--TEST--
ZendAMF compatibility test 1, numeric keys only
--SKIPIF--
<?php
	if (!extension_loaded('amf')) die('skip: amf extension not available');
?>
--FILE--
<?php

$data = array(
    1 => 'aa',
    2 => 'bb',
    3 => 'cc',
);
$out = amf_encode($data, 1);
echo bin2hex($out);


--EXPECT--
11090701060561610605626206056363
