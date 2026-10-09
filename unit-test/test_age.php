<?php
//file: test_age.php
require_once "validator.php";

//test case 1: umur valid 
try {
    $result = validateAge(25);
    echo "PASS: umur 25 diterima\n";
} catch (Exception $e) {
    echo "FAIL: umur 25 tidak diterima. Error: ". $e->getMessage() . "\n";
}

//test case 3: umur valid 
try {
    $result = validateAge(-5);
    echo "PASS: umur -5 seharusnya ditolak\n";
} catch (Exception $e) {
    echo "FAIL: umur -5 ditolak. Error: ". $e->getMessage() . "\n";
}