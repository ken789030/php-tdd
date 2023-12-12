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
        return array_sum($this->rolls);
    }

    public function rollMany(int $rollCount, int $pins)
    {
        for ($i = 0; $i < $rollCount; $i++) {
            $this->rolls[] = $pins;
        }
    }
}