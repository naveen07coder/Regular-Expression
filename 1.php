<?php

$value = "PAN Card NUMBER"; //PUT YOUR PAN CARD NUMBER HERE
$pattern = '/^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/';
$result = preg_match($pattern, $value);
if ($result) {
    $findme = ucfirst(substr($value, 3, 1));
    $mystring = 'CPHFATBLJG';
    $pos = strpos($mystring, $findme);
    if ($pos === false) {
        $msg = "No";
    } else {
        $msg = "Yes";
    }
} else {
    $msg = "No";
}
echo $msg;
