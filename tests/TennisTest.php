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

    public function test_Fifteen_Love()
    {
        $this->tennis->addFirstPlayerScore();

        $this->scoreShouldBe('Fifteen Love');
    }

    public function test_Thirty_Love()
    {
        $this->givenFirstPlayerScoreTimes(2);

        $this->scoreShouldBe('Thirty Love');
    }

    public function test_Love_Fifteen()
    {
        $this->tennis->addSecondPlayerScore();
        $this->scoreShouldBe('Love Fifteen');
    }

    public function test_Love_Thirty()
    {
        $this->tennis->addSecondPlayerScore();
        $this->tennis->addSecondPlayerScore();
        $this->scoreShouldBe('Love Thirty');
    }


    private function scoreShouldBe(string $expected): void
    {
        $this->assertEquals($expected, $this->tennis->score());
    }

    /**
     * @return void
     */
    public function givenFirstPlayerScoreTimes(int $times): void
    {
        for ($i = 0; $i < $times; $i++) {
            $this->tennis->addFirstPlayerScore();
        }
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->tennis = new Tennis();
    }

}
