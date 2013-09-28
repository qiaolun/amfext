--TEST--
ZendAMF compatibility test 5
--SKIPIF--
<?php
	if (!extension_loaded('amf')) die('skip: amf extension not available');
?>
--FILE--
<?php

$data = array(
    'x' => 'aa',
    'y' => 'bb',
    'z' => 'cc',
);

$out = amf_encode($data, 1);
echo bin2hex($out);


--EXPECT--
110901037806056161037906056262037a0605636301
