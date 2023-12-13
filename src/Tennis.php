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
    private string $firstPlayerName;
    private string $seconPlayerName;

    public function __construct(string $firstPlayerName, string $seconPlayerName)
    {
        $this->firstPlayerName = $firstPlayerName;
        $this->seconPlayerName = $seconPlayerName;
    }

    public function score()
    {
        return $this->isDiffScore() ? ($this->isReadyGamePoint()
            ? ($this->advState()) : $this->lookupScore())
            : ($this->isDeuce() ? $this->deuce() : $this->sameScore());
    }

    public function addFirstPlayerScore()
    {
        $this->firstPlayerScore++;
    }

    public function addSecondPlayerScore()
    {
        $this->secondPlayerScore++;
    }

    /**
     * @return bool
     */
    public function isDeuce(): bool
    {
        return $this->firstPlayerScore === 3;
    }

    /**
     * @return string
     */
    public function deuce(): string
    {
        return 'Deuce';
    }

    /**
     * @return string
     */
    public function sameScore(): string
    {
        return $this->mappingScoreName[$this->firstPlayerScore] . ' All';
    }

    /**
     * @return string
     */
    public function lookupScore(): string
    {
        return $this->mappingScoreName[$this->firstPlayerScore] . ' ' . $this->mappingScoreName[$this->secondPlayerScore];
    }

    /**
     * @return bool
     */
    public function isDiffScore(): bool
    {
        return $this->firstPlayerScore != $this->secondPlayerScore;
    }

    /**
     * @return string
     */
    public function advPlayer(): string
    {
        return $this->firstPlayerScore > $this->secondPlayerScore ? $this->firstPlayerName : $this->seconPlayerName;
    }

    /**
     * @return bool
     */
    public function isAdv(): bool
    {
        return abs($this->firstPlayerScore - $this->secondPlayerScore) === 1;
    }

    /**
     * @return bool
     */
    public function isReadyGamePoint(): bool
    {
        return $this->firstPlayerScore > 3 || $this->secondPlayerScore > 3;
    }

    /**
     * @return string
     */
    public function advState(): string
    {
        return $this->isAdv() ? $this->advPlayer() . ' Adv' : $this->advPlayer() . ' Win';
    }
}