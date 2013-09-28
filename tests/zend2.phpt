--TEST--
ZendAMF compatibility test 2, numeric keys start from zero
--SKIPIF--
<?php
	if (!extension_loaded('amf')) die('skip: amf extension not available');
?>
--FILE--
<?php

$data = array(
    0 => 'aa',
    1 => 'bb',
    2 => 'cc',
);
$out2 = amf_encode($data, 1);
echo bin2hex($out2);


--EXPECT--
11090701060561610605626206056363
