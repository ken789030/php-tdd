<?php

namespace App;

use PHPUnit\Framework\TestCase;

class TennisTest extends TestCase
{

    public function test_Love_Love()
    {
        $tennis = new Tennis();
        $score = $tennis->score();
        self::assertEquals('Love All', $score);
    }
}
