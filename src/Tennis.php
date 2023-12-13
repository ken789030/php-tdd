<?php

namespace App;

class Tennis
{

    private int $firstPlayerScore = 0;

    public function __construct()
    {
    }

    public function score()
    {
        if ($this->firstPlayerScore === 1) {

            return 'Fifteen Love';
        }

        if ($this->firstPlayerScore===2) {
            return 'Thirty Love';
        }
        return 'Love All';
    }

    public function addFirstPlayerScore()
    {
        $this->firstPlayerScore++;
    }
}