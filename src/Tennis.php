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
    ];

    public function __construct()
    {
    }

    public function score()
    {

        if ($this->firstPlayerScore > 0) {
            return $this->mappingScoreName[$this->firstPlayerScore] . ' Love';
        }


        return 'Love All';
    }

    public function addFirstPlayerScore()
    {
        $this->firstPlayerScore++;
    }
}