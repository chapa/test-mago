<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

class MyTest extends TestCase
{
    public function test_addition(): void
    {
        $this->assertEquals(2, 1 + 1);
    }
}
