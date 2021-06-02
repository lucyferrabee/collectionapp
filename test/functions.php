<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class functions extends TestCase{
    public function testformatRecordsForDisplay()
    {
          $input = ["Artist"=>"artist","Title"=> "title", "Rating"=>"rating", "Released"=>1993, "Condition"=>"condition"];
        $result = formatRecordsForDisplay($input);
          $this->assertIsString($result);
    }


   }


