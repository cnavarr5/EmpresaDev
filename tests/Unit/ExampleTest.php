<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $bool = true;
        $this->assertTrue($bool);
    }
    
    public function testMath()
    {
        $two = 2;
        $result = ($two + $two = 4)? true : false;
        $this->assertTrue($result);

    }
}
