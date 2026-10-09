<?php
// File: ValidatorTest.php 
use PHPUnit\Framework\TestCase;

require_once "validator.php";

class ValidatorTest extends TestCase {
    
    // === Test Age ==
    public function testValidAge() {
        $this->assertTrue(ValidateAge(30));
        $this->assertTrue(ValidateAge(-30));
    }
    public function testEmptyAgeThrowsException() {
        $this->expectException(InvalidArgumentExcption::class);
        ValidateAge("");
    }
}