<?php

namespace App;

class Tennis
{

    private int $firstPlayerScore = 0;
    /**
     * @var array|string[]
     */
    private array $mappingScoreName = [
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
        if ($this->firstPlayerScore > 0) {
            return $this->mappingScoreName[$this->firstPlayerScore] . ' Love';
        }

        if ($this->secondPlayerScore === 1) {
            return 'Love ' . $this->mappingScoreName[$this->secondPlayerScore];
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