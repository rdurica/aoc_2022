<?php

declare(strict_types=1);

namespace App\Util;

use App\Exception\FileNotFound;

class FileLoader
{
    /**
     * Loads input data. File needs to be placed in Day folder
     * @param DayEnum $day
     * @param bool $testData
     * @return array
     * @throws FileNotFound
     */
    public static function readInputData(DayEnum $day, bool $testData = false): array
    {
        $filePath = __DIR__ . "/../../data/{$day->name}/" ;
        $testData ? ($filePath .= "input_test.txt") : ($filePath .= "input.txt");

        if (!file_exists($filePath)) {
            throw new FileNotFound($filePath);
        }

        $file = file_get_contents($filePath);

        return explode("\n", $file);
    }
}
