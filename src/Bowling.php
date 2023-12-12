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
            if ($this->rolls[$frameIndex] === 10) {
                $score += 10 + $this->rolls[$frameIndex + 1] + $this->rolls[$frameIndex + 2];
                $frameIndex++;
            } else {
                $score += $this->rolls[$frameIndex] + $this->rolls[$frameIndex + 1];
                $frameIndex += 2;
            }
        }

        return $score;
    }

    public function rollMany(int $rollCount, int $pins)
    {
        for ($i = 0; $i < $rollCount; $i++) {
            $this->rolls[] = $pins;
        }
    }
}