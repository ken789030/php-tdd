<?php

namespace Tests;

use App\Tennis;
use PHPUnit\Framework\TestCase;

class TennisTest extends TestCase
{
    private Tennis $tennis;

    public function test_Love_All()
    {
        $this->scoreShouldBe('Love All');
    }

    private function scoreShouldBe($expected): void
    {
        $this->assertEquals($expected, $this->tennis->score());
    }
    protected function setUp(): void
    {
        parent::setUp();
        $this->tennis = new Tennis();
    }

}
