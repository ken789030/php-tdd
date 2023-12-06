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

    public function test_Fifteen_Love()
    {
        $this->givenFirstPlayerScoreTimes(1);
        $this->scoreShouldBe('Fifteen Love');
    }

    public function test_Thirty_Love()
    {
        $this->givenFirstPlayerScoreTimes(2);
        $this->scoreShouldBe('Thirty Love');
    }

    public function test_Forty_Love()
    {
        $this->givenFirstPlayerScoreTimes(3);
        $this->scoreShouldBe('Forty Love');
    }

    public function test_Love_Fifteen()
    {
        $this->givenSecondPlayerScoreTimes(1);
        $this->scoreShouldBe('Love Fifteen');
    }

    public function test_Love_Thirty()
    {
        $this->givenSecondPlayerScoreTimes(2);
        $this->scoreShouldBe('Love Thirty');
    }


    /**
     * @return void
     */
    public function scoreShouldBe(string $expected): void
    {
        self::assertEquals($expected, $this->tennis->score());
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

    /**
     * @return void
     */
    public function givenSecondPlayerScoreTimes(int $times): void
    {
        for ($i = 0; $i <$times ; $i++) {
            $this->tennis->addSecondPlayerScore();
        }
    }

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->tennis = new Tennis();
        
    }
}
