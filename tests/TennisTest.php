<?php

namespace Tests;

use App\Tennis;
use PHPUnit\Framework\TestCase;

class TennisTest extends TestCase
{
    public function test_Love_All()
    {
        $tennis = new Tennis();
        $score = $tennis->score();
        $this->assertEquals('Love All', $score);
    }
}
