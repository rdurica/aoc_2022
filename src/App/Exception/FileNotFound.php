<?php

declare(strict_types=1);

namespace App\Exception;

use Throwable;

class FileNotFound extends \Exception
{
    public function __construct(string $path, ?Throwable $previous = null)
    {
        $message = "Requested file does not exists: " . $path;

        parent::__construct($message, 404, $previous);
    }
}
