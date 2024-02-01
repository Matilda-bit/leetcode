<?php
use PHPUnit\Framework\TestCase;

class CheckSumTest extends TestCase {
    public function testCheckSumPositive() {
        $this->assertTrue(checkSum([0, 2, 5, 7, 8], 22));
    }

    public function testCheckSumNegative() {
        $this->assertFalse(checkSum([1, 3], 10));
    }

    public function testCheckSumZeroTarget() {
        $this->assertTrue(checkSum([1, 2, 3, 4], 0));
    }
    
}
?>