<?php

namespace App;

class Tennis
{

    private int $firstPlayerScore = 0;
    /**
     * @var array|string[]
     */
    private array $mappingScoreName = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty',
    ];
    private int $secondPlayerScore = 0;

    public function __construct()
    {
    }

    public function score()
    {
        if ($this->firstPlayerScore != $this->secondPlayerScore) {
            return $this->mappingScoreName[$this->firstPlayerScore] . ' ' . $this->mappingScoreName[$this->secondPlayerScore];
        }

        if ($this->firstPlayerScore === 1) {
            return 'Fifteen All';
        }

        return 'Love All';
    }

    public function addFirstPlayerScore()
    {
        $this->firstPlayerScore++;
    }

    public function addSecondPlayerScore()
    {
        $this->secondPlayerScore++;
    }
}