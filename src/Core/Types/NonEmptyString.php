<?php

declare(strict_types=1);

namespace Phalanx\Core\Types;

use InvalidArgumentException;
use Stringable;

final class NonEmptyString implements Stringable
{
    public function __construct(
        private string $value
    ) {
        if (trim($this->value) === '') {
            throw new InvalidArgumentException(
                'Value must not be empty or composed only of whitespace'
            );
        }
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
