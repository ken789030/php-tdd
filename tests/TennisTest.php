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

    public function test_Fifteen_All()
    {
        $this->givenFirstPlayerScoreTimes(1);
        $this->givenSecondPlayerScoreTimes(1);
        $this->scoreShouldBe('Fifteen All');
    }

    public function test_Thirty_All()
    {
        $this->givenFirstPlayerScoreTimes(2);
        $this->givenSecondPlayerScoreTimes(2);
        $this->scoreShouldBe('Thirty All');
    }

    public function test_Deuce()
    {
        $this->isDeuce();
        $this->scoreShouldBe('Deuce');
    }

    public function test_firstPlayer_Adv()
    {
        $this->isDeuce();
        $this->givenFirstPlayerScoreTimes(1);
        $this->scoreShouldBe('Joey Adv');
    }

    public function test_secondPlayer_Adv()
    {
        $this->isDeuce();
        $this->givenSecondPlayerScoreTimes(1);
        $this->scoreShouldBe('Abi Adv');
    }

    public function test_secondPlayer_Win()
    {
        $this->isDeuce();
        $this->givenSecondPlayerScoreTimes(2);
        $this->scoreShouldBe('Abi Win');
    }

    /**
     * @param $expected
     * @return void
     */
    public function scoreShouldBe($expected): void
    {
        self::assertEquals($expected, $this->tennis->score());
    }

    /**
     * @param int $times
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
        for ($i = 0; $i < $times; $i++) {
            $this->tennis->addSecondPlayerScore();
        }
    }

    /**
     * @return void
     */
    public function isDeuce(): void
    {
        $this->givenFirstPlayerScoreTimes(3);
        $this->givenSecondPlayerScoreTimes(3);
    }

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->tennis = new Tennis('Joey', 'Abi');
    }
}
