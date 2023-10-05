<?php

declare(strict_types=1);

namespace Aleks39\ComposerPackageTest;

class PackageTest
{
    public function test(int $number): int
    {
        return $number * 10;
    }
}