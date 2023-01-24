<?php

declare(strict_types=1);

namespace App\Puzzle;

class Day01 implements DayInterface
{
    public function __construct(protected array $inputData)
    {
    }

    public function calculateFirstPuzzle(): int
    {
        return max($this->calculate());
    }

    public function calculateSecondPuzzle(): int
    {
        $data = $this->calculate();
        arsort($data);
        $validData = array_slice($data, 0, 3);

        return array_sum($validData);
    }

    /**
     * Calculate value of each Elf
     * @return array
     */
    private function calculate(): array
    {
        $result = [];
        $sum = 0;
        foreach ($this->inputData as $value) {
            $typedValue = (int)$value; // retype value to int, empty string = 0
            if ($typedValue > 0) {
                $sum += $typedValue;
            } else { // Next elf, push summary to array and reset calculated value
                $result[] = $sum;
                $sum = 0;
            }
        }

        return $result;
    }
}
