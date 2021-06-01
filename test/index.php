<?php

require '../index.php';

use PHPUnit\Framework\TestCase;

Class index extends TestCase{
    public function testgetDBfunction() {
    $result = getDB();

    $this->assertIsArray($result);
    }
}
?>
