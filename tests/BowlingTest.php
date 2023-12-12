<?php

namespace tests;

use App\Bowling;
use PHPUnit\Framework\TestCase;

class BowlingTest extends TestCase
{
    public function test_all_missing()
    {
        $bowling = new Bowling();
        $score = $bowling->score();
        self::assertEquals(0, $score);

    }
}
