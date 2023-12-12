<?php

namespace App;

class Bowling
{

    private array $rolls = [];

    public function __construct()
    {
    }

    public function score()
    {
        $frames = 10;
        $frameIndex = 0;
        $score = 0;

        for ($i = 0; $i < $frames; $i++) {
            if ($this->isStrike($frameIndex)) {
                $score += $this->strikeBonus($frameIndex);
                $frameIndex++;
            } elseif ($this->isSpare($frameIndex)) {
                $score += $this->spareBonus($frameIndex);
                $frameIndex += 2;
            } else {
                $score += $this->SumofBallsInFrame($frameIndex);
                $frameIndex += 2;
            }
        }

        return $score;
    }

    public function rollMany(int $rollCount, int $pins)
    {
        for ($i = 0; $i < $rollCount; $i++) {
            $this->roll($pins);
        }
    }

    /**
     * @param int $frameIndex
     * @return bool
     */
    public function isStrike(int $frameIndex): bool
    {
        return $this->rolls[$frameIndex] === 10;
    }

    /**
     * @param int $frameIndex
     * @return bool
     */
    public function isSpare(int $frameIndex): bool
    {
        return $this->rolls[$frameIndex] + $this->rolls[$frameIndex + 1] === 10;
    }

    /**
     * @param int $frameIndex
     * @return int|mixed
     */
    public function strikeBonus(int $frameIndex): mixed
    {
        return 10 + $this->rolls[$frameIndex + 1] + $this->rolls[$frameIndex + 2];
    }

    /**
     * @param int $frameIndex
     * @return int|mixed
     */
    public function spareBonus(int $frameIndex): mixed
    {
        return 10 + $this->rolls[$frameIndex + 2];
    }

    /**
     * @param int $frameIndex
     * @return mixed
     */
    public function SumofBallsInFrame(int $frameIndex): mixed
    {
        return $this->rolls[$frameIndex] + $this->rolls[$frameIndex + 1];
    }

    /**
     * @param int $pins
     * @return void
     */
    public function roll(int $pins): void
    {
        $this->rolls[] = $pins;
    }
}