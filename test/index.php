<?php

require '../index.php';

use PHPUnit\Framework\TestCase;

class index extends TestCase{
    //public function testgetDBfunction() {
   // $result = getDB();

    //$this->assertIsArray();
   // }

public function testMultiply() {
      $input = 3;
      $expected = 6;
      $result = multiply($input);
      $this->assertEquals($expected, $result);
}

}
?>
