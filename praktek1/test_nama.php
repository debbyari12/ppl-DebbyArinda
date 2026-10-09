<?php
//file: test_age.php
require_once "validator.php";

//test case 1: umur valid 
try {
    $result = validateNama("debbyarinda");
    echo "PASS: nama debbyarinda diterima\n";
} catch (Exception $e) {
    echo "FAIL: nama debbyarinda tidak diterima. Error: ". $e->getMessage() . "\n";
}

//test case 3: umur valid 
try {
    $result = validateNama("123");
    echo "FAIL: Nama 123 seharusnya ditolak \n";
} catch (Exception $e) {
    echo "FAIL: Nama 123 ditolak. Error: ". $e->getMessage() . "\n";
}

//test case 3: umur valid 
try {
    $result = validateNama("");
    echo "FAIL: Nama kosong seharusnya ditolak \n";
} catch (Exception $e) {
    echo "FAIL: Nama kosong ditolak. Error: ". $e->getMessage() . "\n";
}