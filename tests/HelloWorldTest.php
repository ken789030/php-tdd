<?php

namespace Tests;

use App\HelloWorld;
use PHPUnit\Framework\TestCase;

/**
 * @covers \App\HelloWorld
 */
class HelloWorldTest extends TestCase
{
    /**
     * @covers \App\HelloWord::say()
     */
    public function testSayHelloWorld()
    {
        // arrange
        $target = new HelloWorld();
        $excepted = 'Hello, world';

        // act
        $actual = $target->say();

        // assert
        $this->assertEquals($excepted, $actual);

    }
}
