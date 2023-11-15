<?php

namespace Framework\Exceptions;

use RuntimeException;

class ValidationException extends RuntimeException
{
    public function __construct(int $code = 422)
    {
        parent::__construct(code: $code);
    }
}
