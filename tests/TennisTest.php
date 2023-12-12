<?php

namespace Tests;

use App\Tennis;
use PHPUnit\Framework\TestCase;

/**
 * @property Tennis $tennis
 */
class TennisTest extends TestCase
{
    private Tennis $tennis;

    public function test_Love_All()
    {
        $this->scoreShouldBe('Love All');
    }

    /**
     * @return void
     */
    public function scoreShouldBe($expected): void
    {
        self::assertEquals($expected, $this->tennis->score());
    }

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->tennis = new Tennis();
    }
}
