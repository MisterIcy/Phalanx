<?php

declare(strict_types=1);

namespace Phalanx\Tests\Core\Types;

use InvalidArgumentException;
use Phalanx\Core\Types\NonEmptyString;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(NonEmptyString::class)]
final class NonEmptyStringTest extends TestCase
{
    public function testThatAnExceptionIsThrownWhenAnEmptyStringIsSupplied(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Value must not be empty or composed only of whitespace');
        new NonEmptyString('');
    }

    public function testThatAnExceptionIsThrownWhenAStringWithWhiteSpaceIsSupplied(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Value must not be empty or composed only of whitespace');
        new NonEmptyString('    ');
    }

    public function testThatObjectGetsProperlyCreated(): void
    {
        $object = new NonEmptyString('Phalanx');
        self::assertSame('Phalanx', $object->getValue());
        self::assertSame('Phalanx', (string)$object);
    }
}
