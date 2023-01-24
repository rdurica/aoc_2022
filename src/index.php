<?php
require "vendor/autoload.php";

use App\Exception\FileNotFound;
use App\Puzzle;
use App\Util\FileLoader;
use App\Util\DayEnum;


try {
    $data = FileLoader::readInputData(DayEnum::Day01, false);

    $puzzle = new Puzzle\Day01($data);
    $firstResult = $puzzle->calculateFirstPuzzle();
    $secondResult = $puzzle->calculateSecondPuzzle();

    var_dump($firstResult, $secondResult);

} catch (FileNotFound $e) {
    print ("Error: " . $e->getMessage());
}

