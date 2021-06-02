<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class functions extends TestCase
{
    public function testformatRecordsForDisplaySuccess()
    {
        $input = ["Artist"=>"artist","Title"=> "title", "Rating"=>"rating", "Released"=>1993, "Condition"=>"condition"];
        $result = formatRecordsForDisplay($input);
        $this->assertIsString($result);
    }
    public function testformatRecordsForDisplayMalformed()
    {
        $input = 10;
        $this->expectException(TypeError::class);
        $result = formatRecordsForDisplay($input);
    }
}


