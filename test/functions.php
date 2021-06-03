<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class functions extends TestCase
{
    public function displaySuccess()
    {
        $input = ['Artist' => 'artist','Title' => 'title', 'Rating' => 'rating', 'Released' => 1993,
            'Condition' => 'condition'];
        $result = display($input);
        $this->assertIsString($result);
    }
    public function displayFailure()
    {
        $input = ['Artist' => 'artist','Title' => 'title', 'Rating' => 'rating', 'Released' => 'string',
            'Condition' => 'condition'];
        $expected = 'Something went wrong';
        $result = display($input);
        $this->assertIsString($result);
        $this->assertEquals($expected, $result);
    }
    public function testdisplayMalformedInt()
    {
        $input = 10;
        $this->expectException(TypeError::class);
        $result = display($input);
    }
    public function testdisplayMalformedString()
    {
        $input = 'this is a string';
        $this->expectException(TypeError::class);
        $result = display($input);
    }
    public function testdisplayMalformedBoolean()
    {
        $input = false;
        $this->expectException(TypeError::class);
        $result = display($input);
    }
    public function testdisplayMalformedFloat()
    {
        $input = 3.14;
        $this->expectException(TypeError::class);
        $result = display($input);
    }
}