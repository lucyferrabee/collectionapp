<?php

require '../index.php';

use PHPUnit\Framework\TestCase;

class index extends TestCase{
    public function testdisplayRecords()
    {
          $result = displayRecords();
          $this->assertIsArray($result);
    }


   }

?>
