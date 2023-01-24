<?php

declare(strict_types=1);

namespace App\Puzzle;

interface DayInterface
{
    public function __construct(array $inputData);

    /**
     * Calculate first part of puzzle and return result
     * @return string
     */
    public function calculateFirstPuzzle(): mixed;

    /**
     * Calculate second part of puzzle and return result
     * @return string
     */
    public function calculateSecondPuzzle(): mixed;
}
